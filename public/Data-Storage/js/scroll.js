    $(document).ready(function() {
      $('.read-more-content').addClass('hide');
      $('.read-more-toggle').click(function() {
        console.log('dddd');
        $(this).prev('.read-more-content').toggleClass('hide');
        $(this).css('display','none');
      });
   });  


