<!--最新記事一覧-->
<div class="f-content f-content_last" id="new">
      <div class="f-c-frame">
        <h1>最新記事</h1>
        <h3 class="f-c-f-h2_border f-c-f-h2_border_2">ほぼ毎日更新中‼</h3>
        <div class="f-c-f-article">

          <?php
          $args = array(
          'post_type' => 'post',
          
          'posts_per_page' => 6,
          'orderby' => 'date',
          'order' => 'DESC',
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
                  <!--投稿のタイトルを出力-->
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
                  <?php the_tags( '#', '#','' ); ?>
                </div><!-- end text -->
              </a>
            </article><!-- end article-list -->
            <!--ここにループの中の記述end -->


            <?php endwhile; wp_reset_postdata(); ?>

        </div>
      </div>
    </div>