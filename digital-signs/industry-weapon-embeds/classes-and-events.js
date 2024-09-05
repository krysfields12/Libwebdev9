//Replace "events" (default) with "events and classes"
$( document ).ready(function() {
var url = "https://api3.libcal.com/api_events.php?iid=3393&m=upc&cid=4113_7130&audience=&c=&d=&l=5&context=object&format=js";
if ($( '#api_upc_cid4113_7130_iid3393').length ) {
  console.log("found");
  $.getScript( url, function() {
  $('#api_upc_cid4113_7130_iid3393 h3').html("Upcoming Events and Classes");
  if ($( '#api_upc_cid4113_7130_iid3393 > ul > li:contains("No events are scheduled.")').length > 0) {
    $( '#api_upc_cid4113_7130_iid3393 > ul > li').html("No classes or events are scheduled.");
  }
});
}
});
