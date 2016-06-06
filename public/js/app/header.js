$(function(){

  $('.header-link').hover(function(e){
      var a =  $(this).find('span').first();
      a.css('position', 'relative').stop().animate({ left: $(this).width() - a.width() - 10 });
  },function(e){
       $(this).find('span').stop().first().animate({ left:0 });
  });

});
