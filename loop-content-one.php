<?php if ( !is_paged()): ?>
<div class="home-top">
  <?php if(have_posts()): the_post(); ?>
    <article <?php post_class( 'article-list article-top' ); ?>>
      <a href="<?php the_permalink(); ?>">
        <div class="img-wrap">
          <!--カテゴリ-->
          <?php if (!is_category() && has_category()): ?>
            <span class="cat-data">
            <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
            </span>
          <?php endif; ?>
          <!--画像を追加-->
          <?php if( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail('full'); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img"/>
          <?php endif; ?>
        </div><!--end img-warp-->
        <div class="text">

          <!--タイトル-->
          <h3><?php the_title(); ?></h3>
        </div><!--end text-->
      </a>
    </article>
  <?php endif; ?>
</div><!--end home-top;-->
<?php endif;?>
