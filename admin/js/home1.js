$(document).on('ready', function(){
    
    'use strict';

    //***** Live Chats *****//
    $('#live-chat .chat-header').on('click', function(){
        $('.chat').slideToggle();
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

    //***** Ticket lists Scroll *****//
    $('#ticket-scroll').slimScroll({
        height: '400px',
        wheelStep: 10,
        distance : '2px',
        color:'#878787',
        railOpacity : '0.1',
        size: '2px'
    });

     //**** Rickshaw Chart ****//
    var graph;
        var seriesData = [ [], []];
        var random = new Rickshaw.Fixtures.RandomData(50);
        for (var i = 0; i < 50; i++) {
        random.addData(seriesData);
        }
        graph = new Rickshaw.Graph( {
        element: document.querySelector("#serverload-chart"),
        height: 300,
        renderer: 'area',
        series: [
        {
        data: seriesData[0],
        color: '#474c60',
        name:'New Visitors'
        },{
        data: seriesData[1],
        color: '#e6e6e6',
        name:'Returning Visitors'
        }
        ]
        } );
        var hoverDetail = new Rickshaw.Graph.HoverDetail( {
        graph: graph,
        });
        setInterval( function() {
        random.removeData(seriesData);
        random.addData(seriesData);
        graph.update();
    },1000);

    //*** Random Numbers ***//
    function generate() {
        $('.number').text(Math.floor(Math.random() * 500) + 1);
    }
    setInterval(generate, 2000);


    //*** Weather Icon ***//
    var icons = new Skycons({'color': 'white'});
    icons.set('rain', Skycons.RAIN);
    icons.play();


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

    $(".pie-colours").sparkline([4,4,4], {
    type: 'pie',
    width: '60',
    height: '60',
    sliceColors: ['#595959','#9e9e9e','#c1bbed','#109618','#66aa00','#dd4477','#0099c6','#990099 ']});

    $("#quick-visit").sparkline([1,5,2,7,9,6,7,11,9,13,12,15,14,18], {
    type: 'line',
    width: '94',
    height: '40',
    lineColor: '#556b8d',
    fillColor: '#eef0f3',
    minSpotColor: '#556b8d',
    maxSpotColor: '#556b8d'});

    $("#quick-view").sparkline([6,4,7,2,9,8,2,5,4], {
    type: 'line',
    width: '94',
    height: '40',
    lineColor: '#5793de',
    fillColor: '#edf3fb',
    minSpotColor: '#5793de',
    maxSpotColor: '#5793de'});

    $("#quick-page").sparkline([7,3,5,7,8,9,3,5,6], {
    type: 'line',
    width: '94',
    height: '40',
    lineColor: '#acb5c6',
    fillColor: '#f6f7f9',
    minSpotColor: '#acb5c6',
    maxSpotColor: '#acb5c6'});

    $("#quick-time").sparkline([7,5,2,6,7,8,5,8,7], {
    type: 'line',
    width: '94',
    height: '40',
    lineColor: '#85c744',
    fillColor: '#f3f9ec',
    minSpotColor: '#85c744',
    maxSpotColor: '#85c744'});

    $("#quick-returning").sparkline([4,6,7,8,3,5,8,6,5], {
    type: 'line',
    width: '94',
    height: '40',
    lineColor: '#efa335',
    fillColor: '#fdf5ea',
    minSpotColor: '#efa335',
    maxSpotColor: '#efa335'});

    $("#quick-rate").sparkline([2,7,7,11,9,13,12,5,7], {
    type: 'line',
    width: '94',
    height: '40',
    lineColor: '#e74c3c',
    fillColor: '#fdedeb',
    minSpotColor: '#e74c3c',
    maxSpotColor: '#e74c3c'});

});