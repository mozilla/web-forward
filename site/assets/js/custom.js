$("#tabzilla").click(function(){
  //$('nav.mainnav').toggleClass( "navbar-fixed-top navbar-static-top" );
});

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