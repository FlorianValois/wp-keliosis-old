jQuery(document).ready(function ($) {

	// Define var
	var WPK_PREFIX = 'wpk-';

	/* START - NAVIGATION -*/
	
	// Deactivate link
	$('#' + WPK_PREFIX + 'navigation a').on('click', function (event) {
		event.preventDefault();
	});
	
	// Open sub menu navigation
	$('.' + WPK_PREFIX + 'menuTitle').on('click', function (event) {
		$(this).next().slideToggle();
		$(this).toggleClass('open');
	});
	
	// Focus on sub link
	$('.' + WPK_PREFIX + 'menuSubTitle').on('click', function (event) {
		$('.' + WPK_PREFIX + 'menuSubTitle').removeClass('focus');
		$(this).addClass('focus');
	});
	
	/* END - NAVIGATION - */

});
