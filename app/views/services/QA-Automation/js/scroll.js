    $(document).ready(function() {
    	
    	var speed = 50000;				
      var autoScroll = setInterval( function() { scrolling(true); }, speed );

      $('#carousel_ul').hover(function(){
       clearInterval(autoScroll);
     },function(){
       autoScroll = setInterval( function() { scrolling(true); }, speed );
     });


      function scrolling(right){
       var item_width = $('#carousel_ul li').outerWidth();
       if(right){item_width = item_width * -1;}
       var left_indent =   parseInt($('#carousel_ul').css('left')) - item_width;

       $('#carousel_ul:not(:animated)').animate({
        'left' : left_indent
      }, 500, function() {
       if(right){
        $('#carousel_ul li:first').before($('#carousel_ul li:last'));
      }else{
        $('#carousel_ul li:last').after($('#carousel_ul li:first'));
      }
      $('#carousel_ul').css({'left' : '-0px'});					

      $('.carousel-a li').removeClass('left-li border-left').eq(1).addClass('left-li');
      $('.carousel-a li').eq(2).addClass('border-left');				
    });					
     }

     $('#carousel_ul li:first').before($('#carousel_ul li:last'));

     $(' .carousel-a .left-li, #left_scroll').live('click',function() {
       scrolling(true);
     }); 	

     $(' #right_scroll').live('click',function() {
       scrolling();
     }); 




     $('.mn-technology, .sub-nav-technology').hover(function(){

       $('.sub-nav-technology').css('display','block');
       $('.mn-technology').addClass('hover-nav');
     },function () {
      $(".sub-nav-technology").css('display','none');
      $('.mn-technology').removeClass('hover-nav');

    });
     $('.mn-services, .sub-nav-services').hover(function(){

       $('.sub-nav-services').css('display','block');
       $('.mn-services').addClass('hover-nav');
     },function () {
      $(".sub-nav-services").css('display','none');
      $('.mn-services').removeClass('hover-nav');

    });

     $('.mn-about, .sub-nav-about').hover(function(){

       $('.sub-nav-about').css('display','block');
       $('.mn-about').addClass('hover-nav');
     },function () {
      $(".sub-nav-about").css('display','none');
      $('.mn-about').removeClass('hover-nav');

    });     

     $('.mn-contactUs, .sub-nav-contactUs').hover(function(){

       $('.sub-nav-contactUs').css('display','block');
       $('.mn-contactUs').addClass('hover-nav');
     },function () {
      $(".sub-nav-contactUs").css('display','none');
      $('.mn-contactUs').removeClass('hover-nav');

    });     


     $('.cc-panel i').live('click',function() {
       $(this).closest('.cc-panel').toggleClass('expanded');
     }); 


$('.stress-test .cc-toggle').live('click',function() {
         $(this).closest('.stress-test').toggleClass('expanded');
        }); 


   });  