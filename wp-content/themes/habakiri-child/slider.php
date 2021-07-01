<div class="swiper-container">
  <div class="swiper-wrapper">
    <?php
    $loop = new WP_Query(array(
      'post_type' => 'post', // ポストタイプを設定 デフォルト投稿はそのまま
      'posts_per_page' => 5 // 記事数を設定
    ));
    ?>
    <?php
    /* Start the Loop */
    while ($loop->have_posts()) : $loop->the_post();
    ?>
      <div class="swiper-slide">
        <div class="swiper-slide__inner">
          <div class="swiper-slide__inner--item">
            <?php if (has_post_thumbnail()) : ?>
              <figure class="post__thumb--img">
                <a href="<?php the_permalink(); ?>" style="background-image: url('<?php the_post_thumbnail_url('thumbnail'); ?>')"></a>
              </figure>
            <?php else : ?>
              <figure class="post__thumb--img">
                <!-- アイキャッチ画像がない場合  -->
                <a href="<?php the_permalink(); ?>" style="background-image: url('<?= get_template_directory_uri(); ?>/img/no-image.jpg')"></a>
              </figure>
            <?php endif; ?>

            <?php
            /*
            <div class="text-block">
              <div class="meta-block">
                <span class="date"><?php the_time('Y.m.d'); ?></span>
                <?php
                $cats = get_the_category();
                foreach ($cats as $cat) :
                  if ($cat) echo '<span class="cat">' . $cat->cat_name . '</span>';
                endforeach;
                ?>
              </div>
              <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?= $post->post_title; ?>">
                <?php echo $post->post_title; ?>
              </a>
            </div>
            */
            ?>
          </div>
        </div>
      </div>
    <?php
    endwhile;
    wp_reset_query();
    ?>
  </div>
  <!-- Add Arrows -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>