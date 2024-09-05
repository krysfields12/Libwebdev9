(function ($) {
$(document).ready(function() {
  console.log("Loaded disable reservations.js");
  $(" #block-quicktools .nav li.reserve a ").removeAttr("href");
  $(" #block-quicktools .nav li.reserve a").prop("disabled", true);
  $(" #block-quicktools .nav li.reserve a").addClass("disabled");

});
}(jQuery));
