$(document).ready(function() {
  $('.whatsapp-redirect').on('click', function() {
    var menu = $(this).data('menu');
    var whatsappUrl = "https://wa.me/+6283891682049/?text=Halo saya ingin memesan " + encodeURIComponent(menu);
    window.open(whatsappUrl, '_blank');
  });
});