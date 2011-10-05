This directory contains a little tiny script for updating the
"buzz feed" which pulls from three sources:

  1. A local file for *events* (`./events.json`)
  2. tumblr for *posts*
  3. twitter search of `#webfwd` for *tweets*

`update_feed.js` is a little tiny node.js script that does all
of the work.  view source for more details

## Deployment

  1. install node.js
  2. **use cron** to run `update_feed.js > latest.json` at some intervals
  3. if you have a [site update system](http://trickyco.de/simple-site-publishing-with-git),
     make sure you run update_feed.js immediately after updating your site code
  4. fiddle your web server to ensure there are properly short lived cache headers
     on `latest.json`

all done!
