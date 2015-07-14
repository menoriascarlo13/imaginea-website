    $(document).ready(function() {
    	

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




   });  


