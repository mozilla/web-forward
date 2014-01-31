//easing to section

$("a.home").click(function() {
    $('html, body').animate({
        scrollTop: $("#home").offset().top - 50
    }, 1000);
});

$("a.practices").click(function() {
    $('html, body').animate({
        scrollTop: $("#best-practices").offset().top - 50
    }, 1000);
});

$("a.toolkit").click(function() {
    $('html, body').animate({
        scrollTop: $("#toolkit").offset().top - 50
    }, 1000);
});


$("#promo h1").hide();
$("#promo h1").fadeIn();

//scroll fade text
var target = $('#promo');
var targetHeight = target.outerHeight();

$(document).scroll(function(e){
    var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
    if(scrollPercent >= 0){
        target.css('opacity', scrollPercent);
    }
});

//change bg images based on location
if(window.location.pathname == "/resources/") {
  //resources bg image
  $(".top-image-bg").css("background","#5AC1A4 url('/assets/images/promo-resources.png') no-repeat center center fixed");
  $(".top-image-bg").css("background-size","cover");
  $(".top-image-bg").css("height","auto");
}

if(window.location.pathname == "/about/") {
  //resources bg image
  $(".top-image-bg").css("background","#5AC1A4 url('/assets/images/promo-about.png') no-repeat center center fixed");
  $(".top-image-bg").css("background-size","cover");
  $(".top-image-bg").css("height","auto");
}

if(window.location.href == "http://blog.webfwd.org/") {
  //resources bg image
  $(".top-image-bg").css("background","#5AC1A4 url('/assets/images/promo-partners.png') no-repeat center center fixed");
  $(".top-image-bg").css("background-size","cover");
  $(".top-image-bg").css("height","auto");
}

if(window.location.pathname == "/portfolio/") {
  // hide nav
  $(".navlinks").css("display","none");
}

//add Clear fix on Resources row
//large
//$('#resources .row.learningmodules .col-md-4:nth-child(6n)').after('<div class="clearfix visible-lg"></div>');
//$('#resources .row.designux .col-md-4:nth-child(3n)').after('<div class="clearfix visible-lg"></div>');

//medium
//$('#resources .row.learningmodules .col-md-4:nth-child(6n)').after('<div class="clearfix visible-md"></div>');
//$('#resources .row.designux .col-md-4:nth-child(3n)').after('<div class="clearfix visible-md"></div>');

//small
//$('#resources .row .col-sm-6:nth-child(12n)').after('<div class="clearfix visible-sm"></div>');
//$('#resources .row.tech .col-sm-6:nth-child(4n)').after('<div class="clearfix visible-sm"></div>');
//$('#resources .row.tech .col-sm-6:nth-child(7n)').after('<div class="clearfix visible-sm"></div>');
