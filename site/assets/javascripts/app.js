/* Foundation v2.2.1 http://foundation.zurb.com */
jQuery(document).ready(function ($) {

	/* Use this js doc for all application specific JS */

	/* ADD STYLING TO MAIN NAVIGATION ----------- */
	var nav_items = document.getElementById('mainNavigation').getElementsByTagName('a');
	var stripped_url = document.location.href.match(/([^\/]+)\/(#.+)?$/)[1];
	for(var i = 0; i < nav_items.length; i++) {
		var slug = nav_items[i].href.match(/([^\/]+)\/$/);
		var stripped_href = (slug) ? slug[1] : '';
		if(stripped_url == stripped_href) {
			nav_items[i].className = 'current';
			break;
		}
	}

});

$(window).load(function() {
	$('#featured').orbit({
		animation: 'horizontal-push',			// fade, horizontal-slide, vertical-slide, horizontal-push
		animationSpeed: 800,							// how fast animtions are
		timer: true,											// true or false to have the timer
		resetTimerOnClick: false,					// true resets the timer instead of pausing slideshow progress
		advanceSpeed: 4000,								// if timer is enabled, time between transitions 
		pauseOnHover: true,								// if you hover pauses the slider
		startClockOnMouseOut: false,			// if clock should start on MouseOut
		startClockOnMouseOutAfter: 1000,	// how long after MouseOut should the timer start again
		directionalNav: true,							// manual advancing directional navs
		captions: true,										// do you want captions?
		captionAnimation: 'fade',					// fade, slideOpen, none
		captionAnimationSpeed: 800,				// if so how quickly should they animate in
		bullets: true,										// true or false to activate the bullet navigation
		bulletThumbs: false,							// thumbnails for the bullets
		bulletThumbLocation: '',					// location from this file where thumbs will be
		afterSlideChange: function(){},		// empty function 
		fluid: true												// or set a aspect ratio for content slides (ex: '4x3') 
	});
});
