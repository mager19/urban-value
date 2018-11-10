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
<?php if (is_front_page()){ ?>
<section class="footer d-flex h-100 flex-column ">
<!-- CTA  -->
<div class="cta d-flex h-100">
	<div class="container justify-content-center align-self-center">
		<div class="offset-lg-2 col-lg-8">
			<div class="cta-txt">
			<p class="mb-5">Nos encantaría conocer más propuestas de valor, contáctanos.</p>
			<a class="cta-btn mt-5" >Contacto</a></div>
			<?php //echo do_shortcode( '[contact-form-7 id="139" title="CTA"]' );?>
			<div class="form">
			<?php echo do_shortcode( '[contact-form-7 id="153" title="cta"]' );?>
			</div>
			
		</div>
	</div>
</div>	
		<div class="container justify-content-center align-self-center flex-first mt-5">
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
<?php } else { ?>

<section class="footer d-flex h-100 flex-column ">
		<div class="container justify-content-center align-self-center flex-first mt-5">
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

</body>
</html>
