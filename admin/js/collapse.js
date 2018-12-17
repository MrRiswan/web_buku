$(document).on('ready', function(){
    
    'use strict';
     
     $('#accordian1 .content').hide();
          $('#accordian1 h2:first').addClass('active').next().slideDown('fast');
          $('#accordian1 h2').on('click', function(){
          if($(this).next().is(':hidden')) {
          $('#accordian1 h2').removeClass('active').next().slideUp('fast');
          $(this).toggleClass('active').next().slideDown('fast');
          }
     });
     
     $('#accordian2 .content').hide();
          $('#accordian2 h2:first').addClass('active').next().slideDown('fast');
          $('#accordian2 h2').on('click', function(){
          if($(this).next().is(':hidden')) {
          $('#accordian2 h2').removeClass('active').next().slideUp('fast');
          $(this).toggleClass('active').next().slideDown('fast');
          }
     });
     
     $('#accordian3 .content').hide();
          $('#accordian3 h2:first').addClass('active').next().slideDown('fast');
          $('#accordian3 h2').on('click', function(){
          if($(this).next().is(':hidden')) {
          $('#accordian3 h2').removeClass('active').next().slideUp('fast');
          $(this).toggleClass('active').next().slideDown('fast');
          }
     });

});