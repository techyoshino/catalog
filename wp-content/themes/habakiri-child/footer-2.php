<?php
/**
 * Version    : 1.0.1
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 24, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
		<?php do_action( 'habakiri_after_contents_content' ); ?>
	<!-- end #contents --></div>
	<footer id="footer" class="footer">
		<?php do_action( 'habakiri_before_footer_content' ); ?>
		
		<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
		<div class="footer-widget-area">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer-widget-area' ); ?>
				<!-- end .row --></div>
			<!-- end .container --></div>
		<!-- end .footer-widget-area --></div>
		<?php endif; ?>

		<?php if ( has_nav_menu( 'social-nav' ) ) : ?>
		<div class="social-nav">
			<div class="container">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'social-nav',
					'fallback_cb'    => '',
					'depth'          => 1
				) );
				?>
			<!-- end .container --></div>
		<!-- end .social-nav --></div>
		<?php endif; ?>

		<div class="copyright">
			<div class="container">
				<?php get_template_part( 'modules/copyright' ); ?>
			<!-- end .container --></div>
		<!-- end .copyright --></div>
		<?php do_action( 'habakiri_after_footer_content' ); ?>
	<!-- end #footer --></footer>
<!-- end #container --></div>
<?php wp_footer(); ?>


<script>
    // var swiper = new Swiper('.swiper-container', {
    //  slidesPerView: 3,
    // spaceBetween: 0,
    // loop: true,
    // autoplay: 1500,
    // autoplayDisableOnInteraction:false,
    // breakpoints: {
    //   640: {
    //     slidesPerView: 2,
    //     spaceBetween: 5,
    //     loop: true
    //   },
    //   980: {
    //     slidesPerView: 3,
    //     spaceBetween: 10,
    //     loop: true
    //   }
    // },
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },
    // });


  </script>

  
  <!-- swiper設定用js -->
<script>
  let mySwiper = new Swiper('.swiper-container', {
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
</script>

</body>
</html>
