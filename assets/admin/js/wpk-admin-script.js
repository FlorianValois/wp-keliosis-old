jQuery(document).ready(function ($) {

	// Define var
	var WPK_PREFIX = 'wpk-';
	var WPK_NAME = 'keliosis';

	/* START - NAVIGATION -*/

	// Deactivate link
	$('#' + WPK_PREFIX + 'navigation a').on('click', function (event) {
		event.preventDefault();
	});

	// Open sub menu navigation

	$('.' + WPK_PREFIX + 'menuTitle').on('click', function () {
				
		$('.' + WPK_PREFIX + 'menuTitle').removeClass('active');
		$('.' + WPK_PREFIX + 'menuTitle').next().slideUp();
		$(this).addClass('active');
		$(this).next().slideDown();

	});



	/* END - NAVIGATION - */

});
