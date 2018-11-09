<?php
/**
 * Template name: Template Home
 *
 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package desarrollos
 */

get_header();?>

<!-- _e()($variable , 'urban&value') -->
<div class="main">
<section class="videoWrapper d-flex h-100">
	<div class="overlay"></div>
    <iframe width="auto" height="auto" src="https://www.youtube.com/embed/<?php the_field('videohome') ?>?autoplay=1&rel=0&modestbranding=0&autohide=0&showinfo=0&controls=0&loop=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <!-- <iframe src="https://player.vimeo.com/video/156270370?background=1&autoplay=1&loop=1&byline=0&title=0"
           frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->

    <div class="video__info justify-content-center align-self-center">
   		<h1><?php the_field( 'titulo_home' ); ?></h1>
    </div>
</section>

<!-- claim -->
<section class="claim d-flex h-100" >
	<div class="container justify-content-center align-self-center">
		<div class="row ">
			<div class="col-lg-12">
				<h2>Applying digital knowledge and tools to Real Estate development.</h2>
				<h3>We are a Real Estate development firm</h3>
			</div>

			<?php
				if( have_rows('items_bajo_video') ):
							
				    while ( have_rows('items_bajo_video') ) : the_row();?>
				    	<div class="col-lg-3">
							<div class="box">
								<?php $image = get_sub_field('item_imagen'); ?>
								<img src="<?php echo $image['url']; ?>" alt="">
								<h3><?php 
								$item_titulo = the_sub_field('item_titulo'); 
								_e($item_titulo , 'urbanvalue');
								?>
								</h3>
								<p>
								<?php 
								$item_texto = the_sub_field('item_texto'); 
								_e($item_texto , 'urbanvalue');
								?>
								</p>
							</div>
						</div>					        
					<?php  endwhile;
				endif;
			?>
		</div>
	</div>
</section>

<!-- Filosofia -->
<section class="filosofia d-flex h-100">
	<div class="container justify-content-center align-self-center">
		<div class="row">
			<div class="col-lg-12">
				<h2>Por Delante de Nuestra Filosofia Empresarial esta la Pasion por desarrollar productos innovadores</h2>
			</div>
		</div>

		<div class="row">
			<?php 
			$args = array( 'post_type' => 'vehiculo',  'post_per_page' => '3', 'order' => 'ASC');
			$loop = new WP_Query( $args );

			if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-lg-4">
					<div id="wrapper-postal">
						<div id="postal">
							<figure style="background-image:url(<?php the_post_thumbnail_url(); ?>); ">
						<div class="vehiculo__item" >
							<h3><?php 
							$title_vehiculo = the_title(); 
							_e($title_vehiculo , 'urbanvalue');
							?>
							</h3></div>
							</figure>
							<figure class="back">
							<?php the_content(); ?>
							<a href="<?php the_permalink(); ?>">Ver Mas</a>
							</figure>
						</div>
					</div>
				</div>
				
			<!-- post -->
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>

	
		</div>
	</div>
</section>

<!-- Impacto -->
<section class="impacto d-flex h-100">
	<div class="justify-content-center align-self-center">
		<div class="row">
			<div class="col-lg-12">
				<h3>GENERAMOS IMPACTOS POSITIVOS</h3>
			</div>
		</div>

		<div class="row items">
			<?php
                if( have_rows('numero_item' , 'option') ):
                	while ( have_rows('numero_item' , 'option') ) : the_row();?>
	                   <div class="col-lg-3">
	                   		<div class="numero__item">
	                   			<h3 class="counter"><?php the_sub_field('numero'); ?></h3>
	                   			<p><?php 
	                   				$titulo_numero = the_sub_field('titulo_numero'); 
	                   				_e($titulo_numero, 'urbanvalue');
	                   			?></p>
	                   		</div>						
						</div>
          <?php 
      			endwhile; endif; 
                	wp_reset_postdata();?>
		</div>
	</div>
</section>

<!-- Proyectos -->
<section class="proyectos d-flex h-100">
	<div class="container justify-content-center align-self-center">
		<div class="row">
			<div class="col-lg-12">
				<h3>PROYECTOS</h3>
			</div>
		</div>
		
		<div class="row">
			<?php
			$args = array( 'post_type' => 'proyectos',  'post_per_page' => '12', 'order' => 'ASC');
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-lg-4">
					<div class="proyectos__item">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">

						<div class="proyectos__item__content">
							<ul>
								<li><?php 
									$nombrevehiculo = the_field('nombre'); 
									_e($nombrevehiculo, 'urbanvalue');
								?></li>
								<li><?php 
									$ubicacionvehiculo = the_field('ubicacion'); 
									_e($ubicacionvehiculo, 'urbanvalue');
								?></li>
								<li><?php 
									$concepto = the_field('concepto');
									_e($concepto, 'urbanvalue'); 
								?></li>
								
							</ul>						
						</div>
					</div>
				</div>
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
</section>

<!-- Team -->
<section class="team d-flex h-100">
	<div class="container justify-content-center align-self-center">
		<div class="row">
			<h3>TEAM</h3>
			<p class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore eius cumque quibusdam aliquam quas dolor possimus, cupiditate voluptate, nostrum excepturi vitae quidem architecto dicta laboriosam dolorum porro. Saepe, veniam, nobis?</p>

			<?php
			$args = array( 'pagename' => 'team');
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); 

				if( have_rows('equipo') ):

				 	// loop through the rows of data
				    while ( have_rows('equipo') ) : the_row();?>
						
						<div class="col-lg-3">
							<div class="equipo">
								<?php $image = get_sub_field('foto'); ?>
								<img src="<?php echo $image['url']; ?>" alt="">
								<h3><?php the_sub_field('nombre'); ?></h3>
								<h5><?php the_sub_field('cargo'); ?></h5>
							</div>
						</div>	
				        
				<?php    endwhile;

				else :

				    // no rows found

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
</section>

<!-- Clientes -->
<section class="clientes d-flex h-100">
	<div class="container justify-content-center align-self-center">
		<div class="row">
			<div class="col-lg-12">
				<h3>NUESTROS CLIENTES</h3>			
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
	<?php get_footer();?>

</section>


</div>
<script>
	  jQuery(document).ready(function(){
      jQuery(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 600,
        loop: true
      });
		});
		
	</script>
<?php

get_footer();

