(function ($) {
  function getOccupancy (spaceCode, locationLabel) {
    const baseUrl = 'https://display.safespace.io';

    const spans = {
        currOcc: document.getElementById('currocc'),
        maxCap: document.getElementById('maxcap'),
        progressBarLabel:  document.getElementById('occupancy-bar-label'),
        locationLabel: document.getElementById('location-label'),
        relativeOccupancy: document.getElementById('relative-occupancy')
    };
 
    let progressbar = document.getElementById('occupancy-bar-progress');
    let popovertext = document.getElementById("occupancy-banner-popover");

    let occupancy = 0;
    let capacity = 0;
    let percentage = 0;

    Promise.all([
      fetch(`${baseUrl}/value/live/${spaceCode}`)
        .then((response) => response.text())
        .then((val) => occupancy = +val),

      fetch(`${baseUrl}/entity/space/hash/${spaceCode}`)
        .then((response) => response.json())
        .then((body) => capacity = +body.space.maxCapacity),

    ]).then(() => {
        percentage = Math.floor((occupancy / capacity) * 100);
        relativeOccupancy = "";
        switch (true) {
          case (percentage < 21):
            relativeOccupancy = "very quiet";
            break;
          case (percentage < 36):
            relativeOccupancy = "quiet";
            break;
          case (percentage < 51):
            relativeOccupancy = "a little busy";
            break;
          case (percentage < 66):
            relativeOccupancy = "busy";
            break;
         case (percentage < 81):
            relativeOccupancy = "very busy";
            break;
          case (percentage >= 81):
            relativeOccupancy = "packed - near full capacity";
            break;
         } 
       
        $(document).ready( function() {
	  if ($('#occupancy-banner').length > 0) {
            spans.currOcc.textContent = occupancy;
            //spans.maxCap.textContent = capacity;
            spans.progressBarLabel.textContent = occupancy;
            spans.relativeOccupancy.textContent = relativeOccupancy;
            if (locationLabel == '24/7 Room') {
              spans.locationLabel.textContent = "- " + locationLabel;
            }
            progressbar.setAttribute("aria-valuenow", occupancy);
            progressbar.setAttribute("aria-valuemax", capacity);
            progressbar.setAttribute("style", "width: " + percentage + "%" );
            if ( percentage > 70 ) {
              progressbar.className += " pb-danger";
            } else if (percentage > 90) {
              progressbar.className += " pb-warning";
            }
            var pluralCheck1 = (occupancy == 1) ? "is " : "are ";
            var pluralCheck2 = (occupancy == 1) ? " person" : " people";
            popovertext.setAttribute("data-content", "There " + pluralCheck1 +  occupancy + pluralCheck2 + " in our " + locationLabel + ". That's " + percentage + "% of our capacity. This real-time data comes from sensors at our entrance. We are monitoring these numbers for health and safety.");
           }
          });
        });
  }
  var libcalHours = "https://api3.libcal.com/api_hours_today.php?iid=3393&lid=0&format=json&callback=?";
  $.getJSON(libcalHours, function(hours) {
    var open = hours.locations[0].times.currently_open;
    var spaceCode = open ? 'af514775' : '6301e198';
    var locationLabel = open ? 'library building' : '24/7 Room';
    getOccupancy(spaceCode, locationLabel);
  });


}(jQuery));
