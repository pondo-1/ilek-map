/* Query( window ).on( "load", function() {

 //Not working without setTimeout Function, check later
   setTimeout(function() {    

    jQuery('.grid-item-wrap').click(function() {
        jQuery(this).addClass('fullscreen');
        });
        
        jQuery('.close_icon').click(function() {
            event.stopPropagation();
            jQuery('.grid-item-wrap').removeClass('fullscreen');       
        });    
    }, 2000);
    }); */


    jQuery( window ).on( "load", function() {
           jQuery('.grid-item-wrap').click(function() {
               jQuery(this).addClass('fullscreen');
               });
               
               jQuery('.close_icon').click(function() {
                   event.stopPropagation();
                   jQuery('.grid-item-wrap').removeClass('fullscreen');       
               });    
           });
    