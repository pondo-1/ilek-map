jQuery(document).ready(function($){

     //Not working without setTimeout Function, check later
   setTimeout(function() { 

    $('.leaflet-marker-icon').click(function() {
       $('body').addClass('hide_header_nav');
    });
    
        $('.leaflet-marker-icon').click(function() {
       $('body').removeClass('hide_header_nav');
    });
}, 2000);

    });