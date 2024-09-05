(function {
/**
 * @bhi-search.js
 * Provides a custom search box for searching within BHI Special Collections
 * Written by Julia Caffrey for TU June 2018
 * Aleph forms provided by Heidi Hanson, USMAI DSS
 */

document.addEventListener("DOMContentLoaded", function(event) {

if (document.getElementById( '#bhisearch').length ) {
  document.getElementById('bhisearch').addEventListener('submit', function(event) { 
  event.preventDefault(); //Prevent the form from submitting on its own without processing this script
  update(event.target);
  });
}
var update = function(thisForm) {
   // Get the user's values
   var text = thisForm.searchArg.value;
   var collection = thisForm.withinCollection.value;
   var search = "";

   switch (collection) {
    case 'yalevideo':
      document.submit_yale.searchArg.value = text;
      document.submit_yale.submit();
	  return true;
      break;
	  
    case 'yizkorbook':
      var prefix = "and WSU=(memorial books holocaust) ";
      document.submit_aleph.searchtype.value = "F1_WSC";
      document.submit_aleph.searchrequest.value = '"TU-TU BHSTK" or "TU-TU BHOVR"';
      break;
	  
    case 'rarebook':
      var prefix = "";
      document.submit_aleph.searchtype.value = "F1_WSC";
      document.submit_aleph.searchrequest.value = "TU-TU SPBHR";
      break;
	  
    case 'jcr':
	  var prefix = "and WAU=(jewish cultural reconstruction) ";
      document.submit_aleph.searchtype.value = "F1_WSL";
      document.submit_aleph.searchrequest.value = "TU-TU";
    break;
	
    default:
	  var prefix = 'and ((WAU=(jewish cultural reconstruction) and (WSL=TU-TU)) or ((WSC="TU-TU BHSTK" or WSC="TU-TU BHOVR") and WSU=(memorial books holocaust)) or (WSC="TU-TU SPBHR") or (WSC="TU-TU SPBHV"))';
      document.submit_aleph.searchtype.value = "F1_WSL";
      document.submit_aleph.searchrequest.value = "TU-TU";
      window.open('https://orbis-prd.library.yale.edu/vwebv/search?searchCode=GKEY%5E*&limitTo=none&recCount=50&searchType=1&searchArg=' + text);
	
   }

   if (text != "") {
      search = "AND WRD=(" + text + ")";
   }
   
   document.submit_aleph.searchrequestadd.value = prefix + search;
   document.submit_aleph.submit(); 
   return true;

  }
 });
});
