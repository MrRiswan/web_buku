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


     var graphData = [{
               data: [ [6, 800], [7, 1100], [8, 1000], [9, 1500], [10, 1300], [11, 1900], [12, 1700], [13, 1950], [14, 1900], [15, 2000] ],
               color: '#474c60'
          }, {
               data: [ [6, 500], [7, 600], [8, 550], [9, 600], [10, 800], [11, 900], [12, 800], [13, 850], [14, 830], [15, 1000] ],
               color: '#ed6b75',
               points: { radius: 4, fillColor: '#ffffff' }
          }
     ];
     $.plot($('#graph-lines'), graphData, {
          series: {
               points: {
                    show: true,
                    radius: 5
               },
               lines: {
                    show: true
               },
               shadowSize: 0
          },
          grid: {
               color: '#646464',
               borderColor: 'transparent',
               borderWidth: 20,
               hoverable: true
          },
          xaxis: {
               tickColor: 'transparent',
               tickDecimals: 2
          },
          yaxis: {
               tickSize: 1000
          }
     });
     $.plot($('#graph-bars'), graphData, {
          series: {
               bars: {
                    show: true,
                    barWidth: .9,
                    align: 'center'
               },
               shadowSize: 0
          },
          grid: {
               color: '#646464',
               borderColor: 'transparent',
               borderWidth: 20,
               hoverable: true
          },
          xaxis: {
               tickColor: 'transparent',
               tickDecimals: 2
          },
          yaxis: {
               tickSize: 1000
          }
     });
     $('#graph-bars').hide();
     $('#lines').on('click', function (e) {
          $('#bars').removeClass('active');
          $('#graph-bars').fadeOut();
          $(this).addClass('active');
          $('#graph-lines').fadeIn();
          e.preventDefault();
     });
     $('#bars').on('click', function (e) {
          $('#lines').removeClass('active');
          $('#graph-lines').fadeOut();
          $(this).addClass('active');
          $('#graph-bars').fadeIn().removeClass('hidden');
          e.preventDefault();
     });
     function showTooltip(x, y, contents) {
          $('<div id="tooltip">' + contents + '</div>').css({
               top: y - 16,
               left: x + 20
          }).appendTo('body').fadeIn();
     }
     var previousPoint = null;
     $('#graph-lines, #graph-bars').bind('plothover', function (event, pos, item) {
          if (item) {
               if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    $('#tooltip').remove();
                    var x = item.datapoint[0],
                         y = item.datapoint[1];
                         showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');
               }
          } else {
               $('#tooltip').remove();
               previousPoint = null;
          }
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

    $('#live-chat .chat-header').on('click', function(){
        $('.chat').slideToggle();
    });

     //*** Random Numbers ***//
     function generate() {
          $('.number').text(Math.floor(Math.random() * 500) + 1);
     }
     setInterval(generate, 2000);
          
});