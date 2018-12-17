$(document).on('ready', function(){
    
  'use strict';

  var introguide = introJs();
  // var startbtn   = $('#startdemotour');
  introguide.setOptions({
   steps: [
   {
       element: '.top-bar',
       intro: 'Click Here',
       position: 'bottom'
   },
   {
       element: '.custom-dropdowns',
       intro: 'Bootstrap & Retina ready',
       position: 'bottom'
   },
   {
       element: '.heading-profile',
       intro: 'Pattern Lock Options',
       position: 'bottom'
   },
   {
       element: '.quick-btn-title',
       intro: 'Watch Daily Summary report',
       position: 'right'
   }
   ]
  });
  introguide.start();

});