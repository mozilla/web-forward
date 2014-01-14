$("#tabzilla").click(function(){
  $('nav.mainnav').toggleClass( "navbar-fixed-top" );
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