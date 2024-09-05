(function ($) {
  $(document).ready(function(){
    $( "#background-image-toggle" ).click(function() {
       $( "#block-views-block-homepage-bg-image-block-1, #background-image" ).toggleClass( "solid-background" );
       if ( $( "#background-image-toggle").hasClass( "active" )) { //when the background image toggle button is clicked (active) 
         $("#background-image-toggle").text("Turn Image Off");  //make the text of the button say this
       }
       else { //and when it's not clicked
          $("#background-image-toggle").text("Turn Image On"); //make the text of the button say this
       }
    });
  });
}(jQuery));
