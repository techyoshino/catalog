<?php
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php get_header(2); ?>


<?php
/*

<!-- 実装部分 -->
<div class="mainvisual">
<div class="swiper-container">
<div class="swiper-wrapper">

<!-- 各スライド -->
<div class="swiper-slide">ここに入れたものがスライドする1</div>
<!-- swiper-wrapper -->
<div class="swiper-slide">ここに入れたものがスライドする2</div>
<!-- swiper-wrapper -->
<div class="swiper-slide">ここに入れたものがスライドする3</div>
<!-- swiper-wrapper -->
<div class="swiper-slide">ここに入れたものがスライドする4</div>
<!-- swiper-wrapper -->
<div class="swiper-slide">ここに入れたものがスライドする5</div>
<!-- swiper-wrapper -->
<div class="swiper-slide">ここに入れたものがスライドする6</div>
<!-- swiper-wrapper -->
<div class="swiper-slide">ここに入れたものがスライドする7</div>
<!-- swiper-wrapper -->

</div>
<!-- swiper-slide -->
<div class="swiper-pagination"></div>
</div>
<!-- swiper-container -->
</div>

*/
?>



<!-- 実装部分 -->


<div class="kanren">
	<?php
	$kanrenpost_no = 5; //表示したい記事数
	$categories = get_the_category( $post->ID );
	$category_ID = array();
	foreach ( $categories as $category ):
		array_push( $category_ID, $category->cat_ID );
	endforeach;
	$args = array(
		'post__not_in' => array( $post->ID ),
		'posts_per_page' => $kanrenpost_no,
		'category__in' => $category_ID,
    'category_name' => 'slide' // 表示したいカテゴリーのスラッグを指定
	);
	$st_query = new WP_Query( $args ); ?>
	</div>
<div class="random">
	<?php
	if ( $st_query->have_posts() ): ?>
	
	<div class="mainvisual">
<div class="swiper-container">
<div class="swiper-wrapper">
		<?php
		while ( $st_query->have_posts() ) : $st_query->the_post(); ?>

	<!-- 実装部分 -->

<!-- 各スライド -->
<div class="swiper-slide">
	 <ul class="clearfix">
						<?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
		 <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
						<?php else: // サムネイルを持っていないときの処理 ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png" alt="no image" title="no image" width="100" height="100" />
						<?php endif; ?>
   <?php
   /*         
		 <div class="kanren-title"><li><a href="<?php the_permalink() ?>">
	 <span><?php the_title(); ?><div class="hp-title"><a class="hp-title" style="text-decoration:none; font-size:10px" href="あなたのページのホームのURL">あなたのブログ名</a></div></span>
			 </a></li></div>
  */
  ?>     
 </ul>
	</div>
		<?php endwhile; ?>
	
	</div>
<!-- swiper-slide -->
<div class="swiper-pagination"></div>
</div>
<!-- swiper-container -->
</div>

	<?php else: ?>
		<p>関連記事はありませんでした</p>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</div>

<?php
/*

<?php
////////////////////////////
//一覧表示
///////////////////////
if (!is_user_agent_live_writer()) {
  //通常表示
  get_template_part('tmp/list');
} else {
  //ブログエディターLive Writerでテーマ取得の際
  get_template_part('tmp/live-writer');
}
?>

*/
?>

<div class="search_btn">
  <ul>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/choice-one.png"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/choice-one.png"></a></li>
    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/choice-one.png"></a></li>
  </ul>
</div>  





<?php get_footer(); ?>

<!-- swiper設定用js -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>

<!-- <script>
  let mySwiper = new Swiper('.post-slider', {
    // デフォルトの設定
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 5,
        loop: true
      },
      980: {
        slidesPerView: 3,
        spaceBetween: 10,
        loop: true
      }
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })
</script> -->



<!-- <script>
    var swiper = new Swiper('.swiper-container', {
     slidesPerView: 3,
    spaceBetween: 0,
    loop: true,
    autoplay: 1500,
    autoplayDisableOnInteraction:false,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 5,
        loop: true
      },
      980: {
        slidesPerView: 3,
        spaceBetween: 10,
        loop: true
      }
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    });


  </script> -->

  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 0,
      loop: true,
      //autoplay: 1500,
      autoplayDisableOnInteraction:false,
    
    });
  </script>