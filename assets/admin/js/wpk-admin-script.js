jQuery(document).ready(function ($) {
	/* Define var */
	var WPK_PREFIX = 'wpk-';
	var WPK_NAME = 'keliosis';
	/* WP Color Picker */
	$('.color-picker').wpColorPicker();
	/* START - NAVIGATION -*/
	// Open sub-menu
	$('.' + WPK_PREFIX + 'menuTitle').on('click', function (event) {
		event.preventDefault();
		$('.' + WPK_PREFIX + 'menuTitle').removeClass('active');
		$('.' + WPK_PREFIX + 'menuTitle').next().hide();
		$(this).addClass('active');
		$(this).next().show();
		$('.' + WPK_PREFIX + 'linkTabs').removeClass('active');
		$(this).next().children().first().find('a').addClass('active');
		var tabsOpen = $(this).next().children().first().find('a').attr('data-name');
		console.log(tabsOpen);
		$('.' + WPK_PREFIX + 'tabs').each(function () {
			var id_content = $(this).attr('id');
			if (id_content == tabsOpen) {
			console.log(tabsOpen);
				$(this).addClass('open');
				$(this).show();
			} else {
				$(this).removeClass('open');
				$(this).hide();
			}
		});
		if (tabsOpen === WPK_PREFIX + "dashboard") {
			$('#' + WPK_PREFIX + 'listButtonForm').removeClass('active');
		} else {
			$('#' + WPK_PREFIX + 'listButtonForm').addClass('active');
		}
	});
	
	// Open tabs
	$('.' + WPK_PREFIX + 'linkTabs').on('click', function (event) {
		event.preventDefault();
		$('.' + WPK_PREFIX + 'linkTabs').removeClass('active');
		$(this).addClass('active');
		var thisData = $(this);
		var data_name = $(this).attr('data-name');
		if (data_name === WPK_PREFIX + "dashboard") {
			$('#' + WPK_PREFIX + 'listButtonForm').removeClass('active');
		} else {
			$('#' + WPK_PREFIX + 'listButtonForm').addClass('active');
		}
		$('.' + WPK_PREFIX + 'tabs').each(function () {
			var id_content = $(this).attr('id');
			if (id_content == data_name) {
			console.log(thisData);
				$(this).addClass('open');
				$(this).show();
			} else {
				$(this).removeClass('open');
				$(this).hide();
			}
		});
	});
	/* END - NAVIGATION - */
	/* Delete all values of active section */
	$('#' + WPK_PREFIX + 'btnResetSection').on('click', function () {

		swal({
			title: wpk_ajax.wpk_delete_value,
			text: wpk_ajax.wpk_resetSection,
			type: 'warning',
			showCancelButton: true,
			cancelButtonColor: '#f3545d',
			cancelButtonText: wpk_ajax.wpk_no,
			confirmButtonColor: '#92C83C',
			confirmButtonText: wpk_ajax.wpk_yes
		}).then(function (result) {
			if (result.value) {
				var tabActive = $('.' + WPK_PREFIX + 'tabs.open');
				$(tabActive).each(function () {
					tabActive.find('input').val('');
					tabActive.find('input[type="checkbox"]').remove();
					tabActive.find('select').val('');
					tabActive.find('.color-alpha').css('background', 'none');
				});
				swal(
					wpk_ajax.wpk_delete,
					wpk_ajax.wpk_value_deleted + '<br><strong style="color: #f3545d;">' + wpk_ajax.wpk_advert_message + '</strong>',
					'success'
				)
			}
		})

	});
	/* Delete all values of all section */
	$('#' + WPK_PREFIX + 'btnResetAll').on('click', function () {
		swal({
			title: wpk_ajax.wpk_delete_value,
			text: wpk_ajax.wpk_resetAllSection,
			type: 'warning',
			showCancelButton: true,
			cancelButtonColor: '#f3545d',
			cancelButtonText: wpk_ajax.wpk_no,
			confirmButtonColor: '#92C83C',
			confirmButtonText: wpk_ajax.wpk_yes
		}).then(function (result) {
			if (result.value) {
				$('#' + WPK_PREFIX + 'options .wpk-tabs').each(function () {
					var allTabs = $('#' + WPK_PREFIX + 'options .wpk-tabs');
					allTabs.find('input').val('');
					allTabs.find('input[type="checkbox"]').remove();
					allTabs.find('select').val('');
					allTabs.find('.color-alpha').css('background', 'none');
				});
				swal(
					wpk_ajax.wpk_delete,
					wpk_ajax.wpk_value_deleted + '<br><strong style="color: #f3545d;">' + wpk_ajax.wpk_advert_message + '</strong>',
					'success'
				)
			}
		})
	});
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
		swal({
			title: wpk_ajax.wpk_save_data,
			text: wpk_ajax.wpk_save_data_message,
			type: 'warning',
			showCancelButton: true,
			cancelButtonColor: '#f3545d',
			cancelButtonText: wpk_ajax.wpk_no,
			confirmButtonColor: '#92C83C',
			confirmButtonText: wpk_ajax.wpk_yes
		}).then(function (result) {
			if (result.value) {
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
							title: wpk_ajax.wpk_saved,
							text: wpk_ajax.wpk_save_data_message,
							backdrop: 'rgba(0, 0, 0, .75)',
						})
					}
					//      }
				});
			}
		})
	});
	/* #formAjax */
});
