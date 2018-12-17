$(document).on('ready', function(){
    
    'use strict';
     
     $('#slick1').slick();

     $('#slick2').slick({
       infinite: true,
       arrows: false,
       slidesToShow: 3,
       slidesToScroll: 3,
       responsive: [
         {
           breakpoint: 1024,
           settings: {
             slidesToShow: 2,
             slidesToScroll:2,
             infinite: true,
             dots: true
           }
         },
         {
           breakpoint: 600,
           settings: {
             slidesToShow: 2,
             slidesToScroll: 2
           }
         },
         {
           breakpoint: 480,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1
           }
         }
         // You can unslick at a given breakpoint now by adding:
         // settings: "unslick"
         // instead of a settings object
       ]
     });

     $('#slick3').slick({
       dots: true,
       infinite: false,
       speed: 300,
       arrows: false,
       slidesToShow: 3,
       slidesToScroll: 4,
       responsive: [
         {
           breakpoint: 1024,
           settings: {
             slidesToShow: 2,
             slidesToScroll:2,
             infinite: true,
             dots: true
           }
         },
         {
           breakpoint: 600,
           settings: {
             slidesToShow: 2,
             slidesToScroll: 2
           }
         },
         {
           breakpoint: 480,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1
           }
         }
         // You can unslick at a given breakpoint now by adding:
         // settings: "unslick"
         // instead of a settings object
       ]
     });

});