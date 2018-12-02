<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package urbanvalue
 */

?>

	<!--</div> #content -->

<!-- Clientes -->
<?php if (is_front_page()){ ?>


<?php }  else {?>
<section class="footer d-lg-flex h-100 ">
		
		<div class="container justify-content-lg-center align-self-lg-center mt-5">
			<div class="row">
				<div class="col-lg-3">
					<?php 
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						if ( has_custom_logo() ) {
						        echo '<img src="'. esc_url( $logo[0] ) .'">';
						} else {
						        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
						}
					?>
				</div>
				<div class="col-lg-3">					
					<div id="footerCol-1" class="footerCol widget-area" role="complementary">
						<?php dynamic_sidebar( 'footercol1' ); ?>
					</div>
					
				</div>

				<div class="col-lg-3">
					<div id="footerCol-2" class="footerCol widget-area" role="complementary">
						<?php dynamic_sidebar( 'footercol2' ); ?>
					</div>					
				</div>

				<div class="col-lg-3">
					<div id="footerCol-3" class="footerCol widget-area" role="complementary">
						<?php dynamic_sidebar( 'footercol3' ); ?>
					</div>					
				</div>
			</div>
		</div>
	
</section>
<?php } ?>
</div> <!-- Close Main -->
<?php wp_footer(); ?>
<script>
    if (location.hash) {
        location.href = location.hash;
    }
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130226340-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130226340-1');
</script>
</body>
</html>
