<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );

//home.js読み込み
function home_scripts(){
  wp_enqueue_script( 'home_script', get_template_directory_uri() . '/js/home.js', array('jquery'), '', true );
  add_action( 'wp_enqueue_scripts' , 'home_scripts' );
}

//header.js読み込み
function header_scripts(){
  wp_enqueue_script( 'header_script', get_template_directory_uri() . '/js/header.js', array('jquery'), '', true );
  add_action( 'wp_enqueue_scripts' , 'header_scripts' );
}

//single.js読み込み
function single_scripts(){
  wp_enqueue_script( 'single_script', get_template_directory_uri() . '/js/single.js', array('jquery'), '', true );
  add_action( 'wp_enqueue_scripts' , 'single_scripts' );
}

//category.js読み込み
function category_scripts(){
  wp_enqueue_script( 'category_script', get_template_directory_uri() . '/js/category.js', array('jquery'), '', true );
  add_action( 'wp_enqueue_scripts' , 'category_scripts' );
}

//tag.js読み込み
function tag_scripts(){
  wp_enqueue_script( 'tag_script', get_template_directory_uri() . '/js/tag.js', array('jquery'), '', true );
  add_action( 'wp_enqueue_scripts' , 'tag_scripts' );
}

//slider.js読み込み
function slider_scripts(){
  wp_enqueue_script( 'slider_script', get_template_directory_uri() . '/js/slider.js', array('jquery'), '', true );
  add_action( 'wp_enqueue_scripts' , 'slider_scripts' );
}


//カスタムメニュー
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );

//抜粋文字数設定
function twpp_change_excerpt_length( $length ) {
  return 80;
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );
function twpp_change_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );


//==========================================================================
// フィルタの登録
//==========================================================================
add_filter('content_save_pre','test_save_pre');

function test_save_pre($content){
    global $allowedposttags;

    // iframeとiframeで使える属性を指定する
    $allowedposttags['iframe'] = array('class' => array () , 'src'=>array() , 'width'=>array(),
    'height'=>array() , 'frameborder' => array() , 'scrolling'=>array(),'marginheight'=>array(),
    'marginwidth'=>array());

    return $content;
}
