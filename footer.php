
<!--js読み込み（start）-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?php header_scripts(); ?>
<?php home_scripts(); ?>
<?php slider_scripts(); ?>
 <!--js読み込み（end）-->

<footer>
  <div class="footer-content">
    <div class="footer-c-frame">
      <div class="footer-c-f-top">
        <!--ヘッダーメニュー-->
        <div id="footer-nav-wrap" class="footer-nav-wrap">
        <?php wp_nav_menu( array(
              'theme_location' => 'footer-nav',
              'container' => 'nav',
              'container_class' => 'footer-nav',
              'container_id' => 'footer-nav',
              'fallback_cb' => ''
        ) ); ?>
        </div>
      </div>
      <div class="footer-c-f-bottom">
        <ul>
          <li class="footer-c-f-b-u-li1">
            <img src="<?php echo get_template_directory_uri() ?>/image/title-logo.png">
          </li>
          <li class="footer-c-f-b-u-li2">
            <p>Ablest（エーブレスト）は、岩手県内の若者や起業家/活動家の卵に向けて、県内の「すごい」「面白い」「ステキ」な企業や活動を取材/紹介するメディアです。</p>
            <p>「最初の一歩が踏み出せない」現状に影響を与える、ワクワクなメディアを目指しています。</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
