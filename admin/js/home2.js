$(document).on('ready', function(){
    
    'use strict';

     $('.close-message').on('click', function(){
          $(this).parent().parent().slideToggle();
     });

     $('#live-chat .chat-header').on('click', function(){
        $('.chat').slideToggle();
    });

     $("#sparkline").sparkline([5,9,3,-6,10,10,-6,-10,-5,-9,-3,6,10,6,5,7,9,10,6,5,-7,-9,-5,-9,10,6,-10,5,-9,-3,-6,10,3,6,10,6,5,5,9,3,6,10,7,9,5,7,9,10,6,5,7,9,5,9,3,-6,-10,-6,-5,-9,-3,-5,-10,-6,-10,5,9,3,6,10,3,6,10,6,-5,9,3,6,10,6], {
    type: 'bar',
    height: '100',
    negBarColor: '#ed6b75',
    barColor: '#33b7a0'});

    //***** Clients lists Scroll *****//
    $('.chat-history').slimScroll({
         height: '300px',
         wheelStep: 10,
         distance : '0px',
         color:'#878787',
         railOpacity : '0.1',
         size: '2px'
    });

    //**** Activity Chart ****//
     var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
          var d1 = [];
          for (var i = 0; i <= 11; i += 1) {
          d1.push([i,((Math.floor(Math.random() * (1 + 20 - 10))) + 10)]);
          }
          $('#chart').length && $.plot($('#chart'), [{
          data: d1
          }], 
          {
          series: {
               lines: {
               show: true,
               lineWidth: 1,
               fill: true,
               fillColor: {
               colors: [{
               opacity: 0.3
          }, {
               opacity: 0.3
          }]
          }
          },
               points: {
               radius: 3,
               show: true
          },
          grow: {
               active: true,
               steps: 50
          },
          shadowSize: 2
          },
               grid: {
               hoverable: true,
               clickable: true,
               tickColor: '#d1d2d6',
               borderWidth: 1,
               color: '#d1d2d6'
          },
          colors: ['#848aa2'],
          xaxis:{
          },
          yaxis: {
               ticks: 5
          },
          tooltip: true,
          tooltipOpts: {
               content: 'chart: %x.1 is %y.4',
               defaultTheme: false,
          shifts: {
          x: 0,
          y: 20
          }
          }
          }
     );

     //*** Random Numbers ***//
     function generate() {
          $('.number').text(Math.floor(Math.random() * 500) + 1);
     }
     setInterval(generate, 2000);


     $("#pie").sparkline([1,1,2], {
    type: 'pie',
    width: '40',
    height: '40',
    sliceColors: ['#2dcb73','#fd6a59','#17c3e5','#109618','#66aa00','#dd4477','#0099c6','#990099 ']});
     
     $("#pie2").sparkline([2,2,2], {
    type: 'pie',
    width: '40',
    height: '40',
    sliceColors: ['#2dcb73','#fd6a59','#17c3e5','#109618','#66aa00','#dd4477','#0099c6','#990099 ']});
     
     $("#pie3").sparkline([1,1,2,3,2], {
    type: 'pie',
    width: '40',
    height: '40',
    sliceColors: ['#2dcb73','#fd6a59','#17c3e5','#109618','#66aa00','#dd4477','#0099c6','#990099 ']});


});