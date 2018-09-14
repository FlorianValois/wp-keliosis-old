jQuery(document).ready(function ($) {
  
  // Define var
  var WPK_PREFIX = 'wpk-';
  
  // Open submenu navigation
  $('.' + WPK_PREFIX + 'menuTitle').on('click', function(event){
    event.preventDefault();
//    $('.' + WPK_PREFIX + 'menuTitle').next().removeClass('open');
//    $('.' + WPK_PREFIX + 'menuTitle').next().slideUp();
    $(this).next().slideToggle();
  });
  
});