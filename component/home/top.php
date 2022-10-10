<section id="top">
    <div class="t-content">
      <ul class="t-c-frame_top">
        <li class="t-c-ft-left">
          <?php
          $args = array(
          'post_type' => 'post',
          'tag' => 'attention1',
          'posts_per_page' => 1,
          'orderby' => 'modified',
          'order' => 'ASC',
          );
          $the_query = new WP_Query( $args );
          while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>

          <article class="article-list">
            <!--記事へのリンクを出力-->
            <a href="<?php the_permalink(); ?>">
            <!--サムネイル(アイキャッチ)画像を出力-->
              <?php
              if( has_post_thumbnail()){
                the_post_thumbnail('full');
              }
              ?>
              <!--投稿のカテゴリを一つだけ出力-->
              <?php if( has_category() ){ ?>
                <span class="cat-data">
                  <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
                </span>
              <?php } ?>
              <div class="text">
                <!--投稿のタイトルを出力-->
                <h3><?php the_title(); ?></h3>

              </div><!-- end text -->
            </a>
          </article><!-- end article-list -->


          <?php endwhile; wp_reset_postdata(); ?>

        </li>
        <li class="t-c-ft-right">
          <ul class="t-c-ft-r-ul">
            <li class="t-c-ft-r-u-li1">
              <?php
              $args = array(
              'post_type' => 'post',
              'tag' => 'attention2',
              'posts_per_page' => 1,
              'orderby' => 'modified',
              'order' => 'ASC',
              );
              $the_query = new WP_Query( $args );
              while ( $the_query->have_posts() ) : $the_query->the_post();
              ?>

              <article class="article-list">
                <!--記事へのリンクを出力-->
                <a href="<?php the_permalink(); ?>">
                <!--サムネイル(アイキャッチ)画像を出力-->
                  <?php
                  if( has_post_thumbnail()){
                    the_post_thumbnail('full');
                  }
                  ?>

                  <!--投稿のカテゴリを一つだけ出力-->
                  <?php if( has_category() ){ ?>
                    <span class="cat-data">
                      <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
                    </span>
                  <?php } ?>
                  <div class="text">
                    <!--投稿のタイトルを出力-->
                    <h3><?php the_title(); ?></h3>
                  </div><!-- end text -->
                </a>
              </article><!-- end article-list -->


              <?php endwhile; wp_reset_postdata(); ?>

            </li>
            <li class="t-c-ft-r-u-li2">
              <?php
              $args = array(
              'post_type' => 'post',
              'tag' => 'attention3',
              'posts_per_page' => 1,
              'orderby' => 'modified',
              'order' => 'ASC',
              );
              $the_query = new WP_Query( $args );
              while ( $the_query->have_posts() ) : $the_query->the_post();
              ?>

              <article class="article-list">
                <!--記事へのリンクを出力-->
                <a href="<?php the_permalink(); ?>">
                <!--サムネイル(アイキャッチ)画像を出力-->
                  <?php
                  if( has_post_thumbnail()){
                    the_post_thumbnail('full');
                  }
                  ?>

                  <!--投稿のカテゴリを一つだけ出力-->
                  <?php if( has_category() ){ ?>
                    <span class="cat-data">
                      <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
                    </span>
                  <?php } ?>
                  <div class="text">
                    <!--投稿のタイトルを出力-->
                    <h3><?php the_title(); ?></h3>
                  </div><!-- end text -->
                </a>
              </article><!-- end article-list -->


              <?php endwhile; wp_reset_postdata(); ?>

            </li>
          </ul>
        </li>
      </ul>
      <ul class="t-c-frame_bottom">
        <li>
          <?php get_template_part('loop-content-one'); ?>
        </li>
        <li class="t-c-fb-li_2">
          <?php get_template_part('loop-content-one'); ?>
        </li>
        <li class="t-c-fb-li_3">
          <?php get_template_part('loop-content-one'); ?>
        </li>
        <li>
          <?php get_template_part('loop-content-one'); ?>
        </li>
      </ul>
    </div>
  </section>