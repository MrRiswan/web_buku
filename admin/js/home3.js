$(document).on('ready', function(){
    
    'use strict';

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

  //***** Clients lists Scroll *****//
  $('.chat-history').slimScroll({
     height: '300px',
     wheelStep: 10,
     distance : '0px',
     color:'#878787',
     railOpacity : '0.1',
     size: '2px'
  });


    //**** Flot Spline ****//
    var d0 = [
    [0,0],[1,0],[2,1],[3,2],[4,15],[5,5],[6,12],[7,10],[8,55],[9,13],[10,25],[11,10],[12,12],[13,6],[14,2],[15,0],[16,0]
    ];
    var d00 = [
    [0,0],[1,0],[2,1],[3,0],[4,1],[5,0],[6,2],[7,0],[8,3],[9,1],[10,0],[11,1],[12,0],[13,2],[14,1],[15,0],[16,0]
    ];
    $("#flot-sp1ine").length && $.plot($("#flot-sp1ine"), [
    d0, d00
    ],
    {
    series: {
    lines: {
    show: false
    },
    splines: {
    show: true,
    tension: 0.4,
    lineWidth: 1,
    fill: 0.8
    },
    points: {
    radius: 0,
    show: true
    },
    shadowSize: 2
    },
    grid: {
    hoverable: true,
    clickable: true,
    tickColor: "#d9dee9",
    borderWidth: 1,
    color: '#cec8ff'
    },
    colors: ["#8878ff", "#6f7685"],
    xaxis:{
    },
    yaxis: {
    ticks: 4
    },
    tooltip: true,
    tooltipOpts: {
    content: "chart: %x.1 is %y.4",
    defaultTheme: false,
    shifts: {
    x: 0,
    y: 20
    }
    }
    }
    );

    $('#live-chat .chat-header').on('click', function(){
        $('.chat').slideToggle();
    });
    
    //*** Random Numbers ***//
    function generate() {
         $('.number').text(Math.floor(Math.random() * 500) + 1);
    }
    setInterval(generate, 2000);
          
});