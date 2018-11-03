<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package urbanvalue
 */

get_header();
?>
  
<div class="slide__principal">
	<?php 
	$args = array( 'pagename' => 'home');
	$loop = new WP_Query( $args );


	if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php $getSlideImage = get_field('slide_imagen'); ?>
		<div class="slide_item" style="backgroud:url(<?php echo $getSlideImage['url']; ?>);">
			your content
		</div>

	<!-- post -->
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
	
    
    
</div>




		


<?php

get_footer();
