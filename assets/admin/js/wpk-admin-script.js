jQuery(document).ready(function ($) {
  
  // Define var
  var WPK_PREFIX = 'wpk-';
  
  // Open submenu navigation
  $('#' + WPK_PREFIX + 'navigation a').on('click', function(event){
    event.preventDefault();
	});
	
  $('.' + WPK_PREFIX + 'menuTitle').on('click', function(event){
    $(this).next().slideToggle();
  });
	
  $('.' + WPK_PREFIX + 'menuSubTitle').on('click', function(event){
		$('.' + WPK_PREFIX + 'menuSubTitle').removeClass(WPK_PREFIX + 'menuSubTitleActif');
    $(this).addClass(WPK_PREFIX + 'menuSubTitleActif');
  });
  
});