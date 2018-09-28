jQuery(document).ready(function ($) {

  // Define var
  var WPK_PREFIX = 'wpk-';
  var WPK_NAME = 'keliosis';

  /* WP Color Picker */
  $('.color-picker').wpColorPicker();

  /* START - NAVIGATION -*/
  // Open sub menu navigation
  //  $('.' + WPK_PREFIX + 'menuTitle').on('click', function (event) {
  //  });

  // Tabs
  $('.' + WPK_PREFIX + 'menuTitle').on('click', function (event) {
    event.preventDefault();

    var data_name = $(this).attr('data-name');

    $('.' + WPK_PREFIX + 'menuTitle').removeClass('active');
    $('.' + WPK_PREFIX + 'menuTitle').next().hide();
    $(this).addClass('active');
    $(this).next().show();

    if (data_name === WPK_PREFIX + "dashboard") {
      $('#' + WPK_PREFIX + 'content > form > div').each(function () {

        var id_content = $(this).attr('id');

        if (id_content == data_name) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }

      });
    }
  });

  $('.' + WPK_PREFIX + 'submenuTitle').on('click', function (event) {

    event.preventDefault();

    $('.' + WPK_PREFIX + 'submenuTitle').removeClass('active');
    $(this).addClass('active');

    var data_name = $(this).attr('data-name');

    if (data_name === WPK_PREFIX + "dashboard") {
      $('#' + WPK_PREFIX + 'listButtonForm').removeClass('active');
    } else {
      $('#' + WPK_PREFIX + 'listButtonForm').addClass('active');
    }

    $('.' + WPK_PREFIX + 'card').each(function () {

      var id_content = $(this).attr('id');

      if (id_content == data_name) {
        $(this).show();
      } else {
        $(this).hide();
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
    $.ajax({
      type: "POST",
      data: postData,
      dataType: "json",
      url: wpk_ajax.ajaxurl,
      success: function (postData) {
        //        if (postData.update) {
        swal({
          position: 'center',
          type: 'success',
          title: 'Sauvegardé !',
          text: 'Vos modifications ont été sauvegardées avec succès.',
          backdrop: 'rgba(0, 0, 0, .75)',
        })
      }
      //      }
    });
  });
  /* #formAjax */
});
