$(document).on('ready', function(){
    
    'use strict';

    /* Copyright (c) 2013 ; Licensed  */
     //Sort by first name
     $.fn.sortList = function() {
     var mylist = $(this);
     var listitems = $('li', mylist).get();
     listitems.sort(function(a, b) {
     var compA = $(a).text().toUpperCase();
     var compB = $(b).text().toUpperCase();
     return (compA < compB) ? -1 : 1;
     });
     $.each(listitems, function(i, itm) {
     mylist.append(itm);
     });
     }

     //Sort by last name
     $.fn.sortListLast = function() {
     var mylist = $(this);
     var listitems = $('li', mylist).get();
     listitems.sort(function(a, b) {
     var compA = $('.last-name', a).text().toUpperCase();
     var compB = $('.last-name', b).text().toUpperCase();
     return (compA < compB) ? -1 : 1;
     });
     $.each(listitems, function(i, itm) {
     mylist.append(itm);
     });
     }

     //Search filter
     (function ($) {
     // custom css expression for a case-insensitive contains()
     jQuery.expr[':'].Contains = function(a,i,m){
     return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
     };


     function listFilter(searchDir, list) { 
     var form = $("<form>").attr({"class":"filterform","action":"#"}),
     input = $("<input>").attr({"class":"filterinput","type":"text","placeholder":"Live Search Mails"});
     $(form).append(input).appendTo(searchDir);

     $(input)
     .change( function () {
     var filter = $(this).val();
     if(filter) {
     $(list).find("li:not(:Contains(" + filter + "))").slideUp();
     $(list).find("li:Contains(" + filter + ")").slideDown();
     } else {
     $(list).find("li").slideDown();
     }
     return false;
     })
     .keyup( function () {
     $(this).change();
     });
     }


     //Slide Panel Search Email
     listFilter($("#searchDir"), $(".client-list"));

     }(jQuery));

    //*** Random Numbers ***//
     function generate() {
          $('.number').text(Math.floor(Math.random() * 500) + 1);
          $('.number2').text(Math.floor(Math.random() * 700) + 1);
          $('.number3').text(Math.floor(Math.random() * 200) + 1);
     }
     setInterval(generate, 2000);

     $('#simple-carousel').slick({
       infinite: true,
       slidesToShow: 1,
       dots: false,
       autoplay: true,
       autoplaySpeed: 2000,
       arrows: false,
       slidesToScroll: 1
     });

     $('#fb-carousel').slick({
       infinite: true,
       slidesToShow: 1,
       dots: false,
       autoplay: true,
      autoplaySpeed: 3000,
       arrows: false,
       slidesToScroll: 1
     });

    //***** Clients lists Scroll *****//
    $('#people-list').slimScroll({
      height: '233px',
      wheelStep: 10,
      size: '1px'
    });

    //***** Comment Scroll *****//
    $('#activity-scroll').slimScroll({
       height: '321px',
       wheelStep: 10,
       distance : '2px',
       color:'#878787',
       railOpacity : '0.1',
       size: '2px'
    });

     //*** Map Jvector ***//
     jQuery('#vmap').vectorMap({
          map: 'usa_en',
         backgroundColor: '#ffffff',
         borderColor: '#818181',
         borderOpacity: 0.25,
         borderWidth: 0.25,
         color: '#c6d3e0',
         colors: {
             mo: '#a8b2bd',
             fl: '#a8b2bd',
             or: '#a8b2bd'
         },
         enableZoom: true,
         showLabels: false,
         hoverColor: '#b9c7d5',
         hoverOpacity: null,
         normalizeFunction: 'linear',
         scaleColors: ['#b6d6ff', '#005ace'],
         selectedColor: '#b9c7d5',
         selectedRegions: [],
         showTooltip: false,
         onRegionClick: function(element, code, region)
         {
             var message = 'You clicked "'
                 + region
                 + '" which has the code: '
                 + code.toUpperCase();

             alert(message);
         }
    });

  //***** Ticket lists Scroll *****//
  $('#ticket-scroll').slimScroll({
     height: '400px',
     wheelStep: 10,
     distance : '2px',
     color:'#878787',
     railOpacity : '0.1',
     size: '2px'
  });

  //***** Comment Scroll *****//
  $('#comment-scroll').slimScroll({
     height: '430px',
     wheelStep: 10,
     distance : '2px',
     color:'#878787',
     railOpacity : '0.1',
     size: '2px'
  });

     //***** Forum Scroll *****//
    $('#forum-scroll').slimScroll({
     height: '430px',
     wheelStep: 10,
     distance : '2px',
     color:'#878787',
     railOpacity : '0.1',
     size: '2px'
    });

     //*** Weather Icon ***//
     var icons = new Skycons({'color': 'white'});
     icons.set('rain', Skycons.RAIN);
     icons.play();

     $(".pie-colours").sparkline([4,4,4], {
    type: 'pie',
    width: '60',
    height: '60',
    sliceColors: ['#595959','#9e9e9e','#c1bbed','#109618','#66aa00','#dd4477','#0099c6','#990099 ']});

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
               tickColor: '#f0f0f0',
               borderWidth: 1,
               color: '#eeeeee'
          },
          colors: ['#e6e6e6'],
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

          
});