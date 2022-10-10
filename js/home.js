$(function(){

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


  $(".f-c-f-article article:nth-child(2)").addClass("fc_marger");
  $(".f-c-f-article article:nth-child(5)").addClass("fc_marger");
  $(".f-c-f-article article:nth-child(8)").addClass("fc_marger");

  $(".f-c-f-article article .text a:nth-child(2)").addClass("tags_marger tags_marger_second");
  $(".f-c-f-article article .text a:nth-child(3)").addClass("tags_marger");
  $(".f-c-f-article article .text a:nth-child(4)").addClass("tags_marger");
  $(".f-c-f-article article .text a:nth-child(5)").addClass("tags_marger");
  $(".f-c-f-article article .text a:nth-child(6)").addClass("tags_marger");

  $(function(){
    $(".t-c-ft-left .article-list").mouseover(function(){


    }).mouseout(function(){

    });
  });









});
