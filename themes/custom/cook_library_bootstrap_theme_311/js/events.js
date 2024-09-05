(function ($) {
console.log("events.js loaded");
if ($('#api_upc_cid7130_iid3393').length ) {
  if ($('.scua-events').length ) {
  console.log ('scua-events detected');
  //var url = "https://api3.libcal.com/api_events.php?iid=3393&m=upc&cid=7130&c=&d=33860&l=4&context=object&format=js";
  var url = "https://api3.libcal.com/api_events.php?iid=3393&m=upc&cid=7130&audience=&c=&d=33860&l=4&simple=ul_date&context=object&format=js";
  console.log ('url: ' + url );
  } else {
  console.log ('general events detected');
  var url = "https://api3.libcal.com/api_events.php?iid=3393&m=upc&cid=7130&c=&d=&l=5&simple=ul_date&context=object&format=js";
  }
$.getScript( url, function() {
});
}
}(jQuery));
