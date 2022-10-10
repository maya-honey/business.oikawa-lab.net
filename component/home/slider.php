<section id="slider">
    <div class="s-content">
      <div class="s-c-frame">


        <div class="s-c-f-article">
          <?php
          global $max_num_page;
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
          'post_type' => 'post',
          'category_name' => 'slider',
          'posts_per_page' => 9,
          'orderby' => 'modified',
          'order' => 'ASC',
          'paged' => $paged,
          );
          $the_query = new WP_Query( $args );
          while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>

          <!--ここにループの中の記述start -->
          <article class="article-list">
            <!--記事へのリンクを出力-->
            <a href="<?php the_permalink(); ?>">
              <!--サムネイル(アイキャッチ)画像を出力-->
              <?php
              if( has_post_thumbnail()){
                the_post_thumbnail('full');
              }
              ?>
              <div class="text">
                <!--投稿のタイトルを出力です-->
                <h3><?php the_title(); ?></h3>
                <!--投稿日を表示-->
                <time class="article-date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                  <?php echo get_the_date(); ?>
                </time>
                <!--投稿のカテゴリを一つだけ出力-->
                <?php if( has_category() ){ ?>
                  <span class="cat-data">
                    <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
                  </span>
                <?php } ?>
                <!--タグ出力-->
                <?php the_tags( '#', '#','' ); ?>
              </div><!-- end text -->
            </a>
          </article><!-- end article-list -->

          <!--ここにループの中の記述end -->

          <?php endwhile; wp_reset_postdata(); ?>
        </div>

      </div>
    </div>
  </section>