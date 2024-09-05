(function ($) {
/* Powers the Guides on For Faculty interactive drop down. See also LibGuides Widget View */
springshare_widget_config_1578943598348 = { path: 'guides' };

var prepString = function() {
  //console.log("Function called");

  if ($("#ourData").length && $("#s-lg-widget-1578943598348").length ) {
    var ar = [];
    $('#ourData ol li').each(function(){
      ar.push($(this).text());
    });

    var dataLibguides = "";
    for( i=0; i < ar.length; i++ ){
      dataLibguides += '&subject_ids%5B' + i + '%5D=' + ar[i];
    }
    return dataLibguides;
  }
}
function loadGuides(str) {
  console.log(str);
  var subj = document.getElementById("taxonomy-subj").innerHTML;
  console.log("Subject = " + subj );
  !function(d,s,id) {
  console.log("Inner function GO");
  var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
  console.log("d = " + d.getElementById(id));
  console.log("id = " + id);
  var elems = d.getElementById(id);
  if(elems){
    elems.remove();
    }
    console.log("Conditions met.");
    console.log("fjs =  "+ fjs);
    console.log("s = " + s);
    js=d.createElement(s);
    console.log("js " + js);
    fjs.parentNode.appendChild(js,fjs);
    js.id=id;
    js.src=p+"://lgapi-us.libapps.com/widgets.php?site_id=7978&widget_type=1&search_match=2&search_terms=&sort_by=count_hit&list_format=1&drop_text=Select+a+Guide...&output_format=1&load_type=2&enable_description=0&enable_group_search_limit=0&enable_subject_search_limit=0&guide_types%5B0%5D=1&guide_types%5B1%5D=3&guide_types%5B2%5D=4&widget_title=Guide+List&widget_height=250&widget_width=100%25&widget_link_color=2954d1&widget_embed_type=1&num_results=0&enable_more_results=0&window_target=2&config_id=1578943598348" + str;
   }
   (document,"script","s-lg-widget-script-1578943598348");
}
function getGuides() {
  
  var dataLibGuides = prepString();    
  loadGuides(dataLibGuides);
}

$( document ).ready(function() {
  getGuides();
  $( '[id^=edit-submit-faculty-menu-2]' ).click(function() {
    //console.log("The button was clicked! Yay!");
    //var testCondition = $( '[id^=edit-subject--] option:selected' ).val();
    //var testCondition2 = $( '#tid' ).attr("data-libguides");
    //console.log( testCondition2 + " Peanut butter" );
    // == value in #), then run next function 
    //console.log( testCondition + " " + testCondition2); 
    $( document ).ajaxComplete(function() {
      console.log("ajax omplete");
      getGuides();
    });
  });
});
}(jQuery));
