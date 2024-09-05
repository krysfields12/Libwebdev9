(function ($) {
  $(document).ready(function(){
//      console.log("ready");
      $(".flickity-prev-next-button").attr( "aria-hidden", "true" ).attr( "role", "presentation" );
      $(".flickity-page-dots").attr( "aria-hidden", "true" ).attr( "role", "presentation" );
      $(".flickity-prev-next-button.previous").attr( "aria-label", "previous" );
      $(".flickity-prev-next-button.next").attr( "aria-label", "next" );
  });
}(jQuery));
