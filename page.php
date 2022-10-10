<?php get_header(); ?>
<?php if(have_posts()): the_post(); ?>
<article <?php post_class( 'article-content-original' ); ?>>
  <div class="article-info">
    <!--本文取得-->
    <?php the_content(); ?>
  </div>
</article>
<?php endif; ?>
<!--jQuery読み込み始まり-->
<?php
header_scripts();
 ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<?php get_footer(); ?>
