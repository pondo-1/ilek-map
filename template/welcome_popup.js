jQuery(document).ready(function($){
 

   /*  $('.popup.info .next').click(function() {
      $('.slide.show').removeClass('show').next().addClass('show');
   });

   $('.popup.info .prev').click(function() {
      $('.slide.show').removeClass('show').prev().addClass('show');
   }); */

   $('.popup.info .close').click(function() {
      $('.popup_wrapper').addClass('hide_info');
   });

   $('.menu.top .info').click(function() {
      $('.popup_wrapper').removeClass('hide_info');
   });
   
    
    console.log(document.cookie.indexOf('KDB_visitor_visit_time='));
    console.log(document.cookie)
    });
    

