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

  //メニューボタン
  $(function(){

    $(".sp_menu_open_button").click(function(){

      $('.h-c-s-back').addClass('fadein');
      $('.h-c-s-back').removeClass('fadeout');
      $(".sp_menu_close_button").show();
      $(".sp_menu_open_button").hide();
    });


    $('.sp_menu_close_button').click(function(){


      $('.h-c-s-back').addClass('fadeout');
      $('.h-c-s-back').removeClass('fadein');
      $(".sp_menu_close_button").hide();
      $(".sp_menu_open_button").show();
    });


  });


});
