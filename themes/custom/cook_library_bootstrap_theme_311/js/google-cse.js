(function ($) {
  var cx = '003942011082489546824:rebbilpairc'; // Insert your own Custom Search engine ID here
  var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
  gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  $( document ).ready(function() {
  var cnt = $(".remove-just-this").contents();
  $(".remove-just-this").replaceWith(cnt);
  $( ".gsc-clear-button" ).remove();
  });

})(jQuery);
