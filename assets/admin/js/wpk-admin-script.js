jQuery(document).ready(function ($) {

	// Define var
	var WPK_PREFIX = 'wpk-';
	var WPK_NAME = 'keliosis';
	
	/* WP Color Picker */
	$('.color-picker').wpColorPicker();

	/* START - NAVIGATION -*/
	// Open sub menu navigation
	$('.' + WPK_PREFIX + 'menuTitle').on('click', function (event) {
		event.preventDefault();
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
	
	/* SAVE CHANGES */
	// Excluding empty fields
  function getFormData($form, no_empty) {
    var formData = $('#' + WPK_PREFIX + 'options').serializeArray();
    var formData_array = {};

    $.each(formData, function (i, item) {
      formData_array[item['name']] = item['value'];
    });

    if (no_empty) {
      $.each(formData_array, function (key, value) {
        if ($.trim(value) === "" || $.trim(value) === "0") delete formData_array[key];
      });
    }
    return formData_array;
  }

  // Save changes
  $('#' + WPK_PREFIX + 'options').on('submit', function (e) {
    e.preventDefault();
    var json = $.param(getFormData($('#' + WPK_PREFIX + 'options'), true));
    var postData = {
      action: 'wpa_49691',
      data: json
    }
//		console.log(postData);
    $.ajax({
      type: "POST",
      data: postData,
      dataType: "json",
      url: wpk_ajax.ajaxurl,
      success: function (postData) {
//        console.log(postData.update);
        if (postData.update) {
          swal({
            position: 'center',
            type: 'success',
            title: 'Sauvegardé !',
            text: 'Vos modifications ont été sauvegardées avec succès.',
            backdrop: 'rgba(0, 0, 0, .5)'
          })
        } else if (postData.delete) {
          swal({
            position: 'center',
            type: 'success',
            title: 'Supprimé !',
            text: 'Tous les champs ont été vidés avec succès !',
            backdrop: 'rgba(0, 0, 0, .5)'
          })
        } else {
          swal({
            position: 'center',
            type: 'info',
            title: 'Sauvegarde non effectuée !',
            text: 'Aucun champs n\'a été modifié.',
            backdrop: 'rgba(0, 0, 0, .5)'
          })
        }
      }
    });
  });
  /* #formAjax */
	
});
