$(document).on('ready', function(){
    
  'use strict';
     
  var icons = new Skycons(),
  list  = [
    "clear-day", "clear-night", "partly-cloudy-day",
    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
    "fog"
  ],
  i;

  for(i = list.length; i--; )
  icons.set(list[i], list[i]);
  icons.play();

});