//Popover for "what is cook onesearch?"
//Authored by Saidat Adeleke
(function ($) {
$(document).ready(function(){
   $('#what-am-i-searching').popover({title: "<h1> Use Cook OneSearch to search quickly across most of what the library has to offer. It <strong>includes</strong> books, articles, movies, music, and more all in one place.  It <strong>excludes </strong> <a href='/university-archives'> University Archives and Special Collections</a>, <a href='https://mdsoar.org/handle/11603/11ScholarWorks@Towson'></a>, and a few <a href='http://towson.libguides.com/az.php'> Databases.</a></li></h1>", content: "When to use something else:<ul><li>For things <strong>located specifically at Cook Library</strong>, try the <a href='http://catalog.umd.edu/F/?func=file&file_name=find-b&local_base=tu'> TU Library Catalog.</a></li><li> For articles by subject area, try <a href='http://towson.libguides.com/az.php'>Databases.</a></li><li>For articles in a specific journal, try the <a href='/journal-list'> Journal List.</a></li></ul>", html: true, placement: "right"}); 
});
}(jQuery));
