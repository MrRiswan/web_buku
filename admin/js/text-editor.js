$(document).on('ready', function(){
    
    'use strict';
     
     $('#content-editor').freshereditor({toolbar_selector: "#toolbar", excludes: ['removeFormat', 'insertheading4']});
     $("#content-editor").freshereditor("edit", true);

});