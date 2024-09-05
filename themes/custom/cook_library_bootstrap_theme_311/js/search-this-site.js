(function ($) {
  $(document).ready(function(){
     if ($('#edit-keys').length || $('#edit-keys--2').length ) {
       $('#edit-keys').attr("placeholder", "Search this site");
       $('#edit-keys--2').attr("placeholder", "Search this site");
       $('label.control-label.sr-only[for="edit-keys"]').html("Search this site");  //For screenreaders
       $('label.control-label.sr-only[for="edit-keys--2"]').html("Search this site");  //For screenreaders
       $('#edit-keys').attr("data-original-title", "Search within libraries.towson.edu");
       $('#edit-keys--2').attr("data-original-title", "Search within libraries.towson.edu");
   }
  });
}(jQuery));
