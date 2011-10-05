#!/usr/bin/env node

const fs = require('fs'),
      http = require("http"),
      querystring = require("querystring"),
      xml2js = require("xml2js"),
      path = require("path");

function die(msg) {
  process.stderr.write("fatal error:" + msg + "\n");
  process.exit(1);
}

// Aggregate feeds from three sources:
//   1. on-disk events .json blob
//   2. twitter (search #webfwd)
//   3. http://webfwd.tumblr.com/rss

var feed = {};

// #1
fs.readFile(path.join(__dirname, "events.json"), function(err, data) {
  if (err) die("reading ./events.json:" + err);
  try {
    feed.events = JSON.parse(data);
  } catch(e) {
    die("parse error in events.json");
  }
  allDone();
});

// #2
http.get({
  host: "search.twitter.com",
  path: "/search.json?" + querystring.stringify({q: "#webfwd"})
}, function (res) {
  var body = "";
  res.on('data', function(chunk) { body+=chunk; } )
    .on('end', function() {
      try {
        var rs = JSON.parse(body).results;
        feed.tweets = [];
        for (var i = 0; i < rs.length; i++) {
          if (feed.tweets.length > 3) break;
          feed.tweets.push({
            who: rs[i].from_user,
            title: rs[i].text,
            posted: rs[i].created_at,
            link: "http://twitter.com/#!/"+rs[i].from_user+"/status/"+rs[i].id_str
          });
        }
        allDone();
      } catch(e) {
        die("Error performing twitter search:" + e);
      }
    });
}).on('error', function(e) {
  die("Error performing twitter search:" + e);
});


// #3
// tumblr has some odd redirection behavior that seems to be 
// anti-robot oriented.  From time to time we must follow redirects
// for the feed to continue working
var feedFetchTries = 0;
function tryFeedFetch(p) {
  http.get({
    host: "blog.webfwd.org",
    path: p
  }, function (res) {
    if (res.statusCode === 302) {
      if (++feedFetchTries >= 3) die('Too many redirects on tumblr');
      tryFeedFetch(res.headers['location']);
      return;
    }

    var body = "";
    res.on('data', function(chunk) { body+=chunk; } )
      .on('end', function() {
        var parser = new xml2js.Parser();
        parser.addListener('end', function(result) {
          var items = result.channel.item;
          // handle the case where there is only one
          if (!Array.isArray(items)) items = [ items ];
          feed.posts = [];
          for (var i = 0; i < items.length; i++) {
            if (feed.posts.length > 3) break;
            feed.posts.push({
              title: items[i].title,
              posted: items[i].pubDate,
              link: items[i].link
            });
          }
          allDone();
        });
        parser.parseString(body);
      });
  }).on('error', function(e) {
    die("Error fetching blog posts:" + e);
  });
};
tryFeedFetch('/rss');

// when all done, we'll print
var numDone = 0;
function allDone() { 
  if (++numDone >= 3) {
    console.log(JSON.stringify(feed, null, 4));
  }
}

// print an error at exit time if we failed to read one of the three "feeds"
process.on('exit', function () {
  if (numDone < 3) {
    process.stderr.write("not all feeds read!  only " + numDone + "/3\n");
    numDone = 3; // infinite loop prevention!
    process.exit(1);
  }
});
