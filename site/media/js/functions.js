webfwd.navigation = function() {
	var init;
	init = function() {
		var mainNav = $('#topNav');
		mainNav.delegate('a.dropdown','mouseover focus',function() {
			$(this).parent().addClass('hover');
		});
		mainNav.delegate('li','mouseleave', function() {
			var current = $(this);
			if (current.hasClass('hover')) {
				current.removeClass('hover');
			}
		});
		mainNav.delegate('a','blur',  function() {
			var current = $(this),
				parent = current.parent(),
				grand = parent.parent();
			if (grand.is('ul.dropdown') && parent.is(':last-child')) {
				grand.parent().removeClass('hover');
			}
		});
	};

	return {
		'init': init
	};

}();

$(function($) {
	// sticky footer
	$(window).bind('load resize', function() {
			var h = $(window).height(),
					a = $('#site_meta').outerHeight();
			$('.wrapper:first').css({ 'min-height' : (h-a) });
			$('#ohnoes').css({'height': (h-a-71) });
	});
	// keyboard shortcuts
	$(document.documentElement).keyup(function (event) {
		if (event.keyCode == 71) {
			$('#grid').fadeToggle(100); // G toggles grid
		}
	});
	webfwd.navigation.init();
});
