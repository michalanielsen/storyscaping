//jQuery.noConflict();
jQuery(document).ready(function( $ ) {
  $('.popupCloseButton').on('click', function() {
    $('.login-form').hide();
  })
	
});


jQuery(document).ready(function( $ ) {
    $('.popupShowButton').click(function() {
        $('.login-form').show();
