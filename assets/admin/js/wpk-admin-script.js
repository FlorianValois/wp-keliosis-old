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
		$('.' + WPK_PREFIX + 'menuTitle').next().slideUp();
		$(this).next().slideToggle();
		$('.' + WPK_PREFIX + 'menuTitle').removeClass('open');
		$(this).toggleClass('open');
	});
	
	/* END - NAVIGATION - */

});
