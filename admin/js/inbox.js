$(document).on('ready', function(){
    
    'use strict';


     //**** Slide Panel Toggle ***//
     $('.star-email').on('click', function(){
     $(this).toggleClass('starred');
     });

     //* Sidebar Toogle //
     $('.inbox-msg').on('click', function(){
     $('.read-email').addClass('reading');
     });

     //* Sidebar Toogle //
     $('.close-reading').on('click', function(){
     $('.read-email').removeClass('reading');
     });

     //**** Check All mail ****//
     $('#checkAll').on('click', function(){
     $('.checkall:checkbox').not(this).prop('checked', this.checked);
     });

     //**** Your Emails ****//
     $('.your-emails').slimScroll({
     height: '636px',
     wheelStep: 10,
     distance : '0px',
     color:'#878787',
     railOpacity : '0.1',
     size: '2px'
     });

     //**** Reading Emails ****//
     $('.read-email').slimScroll({
     height: '100%',
     wheelStep: 10,
     distance : '0px',
     color:'#878787',
     railOpacity : '0.1',
     size: '2px'
     });

});