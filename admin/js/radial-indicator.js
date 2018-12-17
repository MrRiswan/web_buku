$(document).on('ready', function(){
    
    'use strict';
     
     $('#indicatorContainer1').radialIndicator();

     $('#indicatorContainer2').radialIndicator({
        barColor: '#87CEEB',
        barWidth: 10,
        initValue: 40,
        roundCorner : true,
        percentage: true
    });

    $('#indicatorContainer3').radialIndicator({
         displayNumber: false
     })

     $('#indicatorContainer4').radialIndicator({
         barColor: {
             0: '#FF0000',
             33: '#FFFF00',
             66: '#0066FF',
             100: '#33CC33'
         },
         percentage: true
     });

     $('#indicatorContainer5').radialIndicator({
         minValue: 1000,
         maxValue: 100000
     });

     $('#indicatorContainer6').radialIndicator({
         radius: 70,
         minValue: 10000,
         maxValue: 10000000,
         format: '$ ##,##,###'
     });

     $('#indicatorContainer7').radialIndicator({
          value : 90,
          displayNumber: false
     });

     var radialObj = radialIndicator('#indicatorContainer8', {
         radius: 60,
         barWidth: 5,
         barColor: '#FF0000',
         minValue: 0,
         maxValue: 60,
         fontWeight: 'normal',
         roundCorner: true,
         format: function (value) {
             var date = new Date();
             return date.getHours() + ':' + date.getMinutes();
         }
     });
      
     setInterval(function () {
         radialObj.value(new Date().getSeconds() + 1);
     }, 1000);


     //file upload example
     var container = $('#indicatorContainerWrap2'),
         msgHolder = container.find('.rad-cntnt'),
         containerProg = container.radialIndicator({
             radius: 100,
             percentage: true,
             displayNumber: false
         }).data('radialIndicator');
      
      
     container.on({
         'dragenter': function (e) {
             msgHolder.html("Drop here");
         },
         'dragleave': function (e) {
             msgHolder.html("Click / Drop file to select.");
         },
         'drop': function (e) {
             e.preventDefault();
             handleFileUpload(e.originalEvent.dataTransfer.files);
         }
     });
      
     $('#prgFileSelector').on('change', function () {
         handleFileUpload(this.files);
     });

});