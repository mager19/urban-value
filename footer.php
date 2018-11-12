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
<section class="footer d-flex h-100 flex-column">
<div class="clientes d-flex  mt-5 mb-5">
	<div class="container justify-content-center align-self-center">
		<div class="row">
			<div class="col-lg-12 mt-5">
				<h3 class="titl">NUESTROS CLIENTES</h3>			
				<div class="slide__clientes">
					<?php
					$args = array( 'pagename' => 'clientes');
					$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();

							if( have_rows('ingresar_cliente') ):
							
							    while ( have_rows('ingresar_cliente') ) : the_row();?>
									<div class="cliente" style="margin-right: 1em;">
										<?php $image = get_sub_field('l_cliente'); ?>
										<img src="<?php echo $image['url']; ?>" alt="">
									</div>
							        
							<?php  endwhile;
						endif;
					?>
								
				<!-- post -->
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; 
					wp_reset_postdata();
				?>
				</div>
			</div>			
		</div>
	</div>
	

</div>
		<div class="container justify-content-center align-self-center mt-5">
			<div class="row">
				<div class="col-lg-3 ">
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

<?php }  else {?>
<section class="footer d-flex h-100 ">
		
		<div class="container justify-content-center align-self-center mt-5">
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
