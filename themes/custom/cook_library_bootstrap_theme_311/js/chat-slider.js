(function($) { 
$(document).ready(function() {
    var libcalHours = "https://api3.libcal.com/api_hours_today.php?iid=3393&lid=5687&format=json&callback=?"; 
    var pathname = window.location.pathname;
    var academicCommons = pathname.includes("academic-commons");
    var academicCommonsForm = pathname.includes("meet-with-us");
    $.getJSON(libcalHours, function(data){
      console.log(data.locations[0].times.currently_open);
      if(data.locations[0].times.currently_open == true){
      $( "#live-chat" ).removeClass( "hidden" );
      $(".chat-message-counter").delay(30000).fadeIn(100);
      $('#chat-open').on('click', function() {
        $('.chat').slideToggle(300, 'swing');
        $('.chat-message-counter').fadeToggle(300, 'swing');
       });

       $('#chat-close, .chat-close-option').on('click', function(e) {
          e.preventDefault();
          $('#live-chat').fadeOut(300);
         });
     }
     
     if(academicCommons == true || academicCommonsForm == true) {
       $('.chat-footer .btn-success').attr("onclick", "window.open('/ask/ask-us.html','Chat','resizable,height=800,width=440'); return false;");
     }
  });
  
});
}) (jQuery);
