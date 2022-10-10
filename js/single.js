$(function(){


  //headerのフェード設定
  $(window).scroll(function(){
    $('header').each(function(){
      var nowposition = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowheight = $(window).height();

      if(scroll>=5){
        $('header').addClass('header-shadow');
      }else{
        $('header').removeClass('header-shadow');
      }
    });
  });


});
