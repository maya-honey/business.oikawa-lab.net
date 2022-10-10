<!DOCTYPE html><!--htmlで書かれていることを宣言-->
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/image/fav.png">

  <?php if(is_home() || is_front_page()):?>
    <title><?php bloginfo('name'); ?></title>
  <?php else : ?>
    <title><?php wp_title('｜Ablest', true, 'right'); ?></title>
  <?php endif; ?>

  <!--スタイルシートの呼び出し-->


  <?php if(is_home() || is_front_page()):?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slider.css" type="text/css" />
  <?php else : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/category.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css" type="text/css" />
  <?php endif; ?>

  <?php if(is_single()): ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css" type="text/css" />
  <?php endif;?>

  <?php wp_head(); ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-58RYPQXFBD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-58RYPQXFBD');
  </script>

</head>
<body <?php body_class(); ?>>

  <header>
    <div class="h-content">
      <ul class="h-c-ul">
        <li class="h-c-u-li-common h-c-u-li1">
          <?php
          if(is_home() || is_front_page()) {
            $title_tag_start = '<h1 class="site-title">';
            $title_tag_end = '</h1>';
          } else {
            $title_tag_start = '<p class="site-title">';
            $title_tag_end =  '</p>';
          }
          ?>

          <!--タイトルを画像にする場合-->
          <div class="site-title-wrap">
            <?php echo $title_tag_start; ?>
              <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/image/title-logo.png">
              </a>
            <?php echo $title_tag_end; ?>
          </div>
        </li>
        <li class="h-c-u-li-common h-c-u-li2">

          <div id="header-nav-wrap" class="header-nav-wrap">
          <?php wp_nav_menu( array(
                'theme_location' => 'header-nav',
                'container' => 'nav',
                'container_class' => 'header-nav',
                'container_id' => 'header-nav',
                'fallback_cb' => ''
          ) ); ?>
          </div>
        </li>
        <li class="h-c-u-li-common h-c-u-li3">
          <div class="h-c-u-l3-contact">
            <?php $page = get_page_by_path('contact'); ?>
            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>">
              <p>お問い合わせ</p>
            </a>
          </div>
        </li>
      </ul>
      <div class="h-c-spmenu">
        <div class="h-c-s-back fadeout">
          <div class="h-c-s-b-header">
            <div class="sp_menu_close_button">
              <div class="button_close_mid button_icon_common">

              </div>
            </div>
            <?php
            if(is_home() || is_front_page()) {
              $title_tag_start = '<h1 class="site-title">';
              $title_tag_end = '</h1>';
            } else {
              $title_tag_start = '<p class="site-title">';
              $title_tag_end =  '</p>';
            }
            ?>

            <!--タイトルを画像にする場合-->
            <div class="site-title-wrap">
              <?php echo $title_tag_start; ?>
                <a href="<?php echo home_url(); ?>">
                  <img src="<?php echo get_template_directory_uri() ?>/image/title-logo.png">
                </a>
              <?php echo $title_tag_end; ?>
            </div>
          </div>
          <div id="header-nav-wrap" class="header-nav-wrap">
          <?php wp_nav_menu( array(
                'theme_location' => 'header-nav',
                'container' => 'nav',
                'container_class' => 'header-nav',
                'container_id' => 'header-nav',
                'fallback_cb' => ''
          ) ); ?>
          </div>
        </div>
      </div>
      <div class="sp_menu_open_button">
        <div class="button_icon_top button_icon_common">

        </div>
        <div class="button_icon_mid button_icon_common">

        </div>
        <div class="button_icon_bot button_icon_common">

        </div>
      </div>
    </div>
  </header>
