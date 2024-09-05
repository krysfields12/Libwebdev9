(function ($) {
$(document).ready(function() {
    var libcalHours = "https://api3.libcal.com/api_hours_today.php?iid=3393&lid=5750&format=json&callback=?";
  $.getJSON(libcalHours, function(data){
    $.each(data.locations, function(i,hours){
     if(hours.times.status = "open" && hours.times.status != "text"){
      var regex= new RegExp("closed", "i");  //create a regular expression that can search for "closed" insensitive of case
      var isClosed = regex.test(hours.rendered);  //look for the regular expression within hours.rendered variable from libcal script
      var statement = "Today we are ";
      var addOpenText = isClosed ? '' : 'open '; //if the rendered hours text does not include 'closed', then store the word open for adding below
      $("#scua-todays-hours").html(statement + addOpenText  + hours.rendered).css("font-weight", hours.times.currently_open ? "bold" : "normal"); //turn the text green if the library is currently open
      }
      if (i === 0) return false;  // only show the main location hours
    });
  });
}); 
}(jQuery));
