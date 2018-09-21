jQuery(document).ready(function ($) {
	$('#wpk-btn_backToTop').on('click', function () {
		$("html, body").animate({
			scrollTop: $('body').offset().top - 100
		}, 1000);
	});
});
