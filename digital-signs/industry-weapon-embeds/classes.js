//Replace "events" (default) with "classes"
$( document ).ready(function() {
var url = "https://api3.libcal.com/api_events.php?iid=3393&m=upc&cid=4113&c=&d=&l=5&simple=ul_date&context=object&format=js";
if ($( '#api_upc_cid4113_iid3393').length ) {
  console.log("events and classes loaded");
 
  $.getScript( url, function() {
  $('#api_upc_cid4113_iid3393 h3').html("Upcoming Classes");
  if ($( '#api_upc_cid4113_iid3393 > ul > li:contains("No events are scheduled.")').length > 0) {
    $( '#api_upc_cid4113_iid3393 > ul > li').html("No classes are scheduled.");
  }
});
}
});
