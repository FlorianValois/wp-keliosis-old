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
		$(this).next().slideToggle();

	});

	// Tabs
	$('#' + WPK_PREFIX + 'navigation nav a').on('click', function () {

		var data_name = $(this).attr('data-name');
		
		$('#' + WPK_PREFIX + 'content > form > div').each(function () {
			
			var id_content = $(this).attr('id');

			if(id_content == data_name){
				$(this).addClass('active');
			}
			else{
				$(this).removeClass('active');
			}
			
		});




	});


	/* END - NAVIGATION - */

});
