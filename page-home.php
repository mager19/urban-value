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
<section class="videoWrapper d-md-block d-lg-flex h-100">
	<div class="overlay"></div>
    <iframe width="auto" height="auto" src="https://www.youtube.com/embed/<?php the_field('videohome') ?>?autoplay=1&rel=0&modestbranding=0&autohide=0&showinfo=0&controls=0&loop=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <!-- <iframe src="https://player.vimeo.com/video/156270370?background=1&autoplay=1&loop=1&byline=0&title=0"
           frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->

    <div class="video__info justify-content-center align-self-center">
   		<h1><?php the_field( 'titulo_home' ); ?></h1>
    </div>
</section>

<!-- claim -->
<section class="claim d-md-block d-lg-flex h-100 pb-md-5" >
	<div class="container justify-content-lg-center align-self-lg-center">
		<div class="row ">
			<div class="col-lg-12">
				<h2>Applying digital knowledge and tools to Real Estate development.</h2>
				<h3>La filosofía de la empresa se ve reflejada en cuatro momentos clave que hacen la propuesta de valor única en el sector.</h3>
			</div>

			<?php
				if( have_rows('items_bajo_video') ):
							
				    while ( have_rows('items_bajo_video') ) : the_row();?>
				    	<div class="col-lg-3">
							<div class="box">
								<div id="wrapper-postal">
							<div id="postal">
							
								<figure>
									<div class="informacion"><i class="fas fa-info-circle"></i></div>
								<?php $image = get_sub_field('item_imagen'); ?>
								<img src="<?php echo $image['url']; ?>" alt="">
								<h4><?php 
								$item_titulo = the_sub_field('item_titulo'); 
								_e($item_titulo , 'urbanvalue');
								?>
								</h4>
								</figure>
								<figure class="back d-flex h-100">
								<p>
								<?php 
								$item_texto = the_sub_field('item_texto'); 
								_e($item_texto , 'urbanvalue');
								?>
								</p>
								</figure>
								
							</div>
						</div>
							</div>
						</div>					        
					<?php  endwhile;
				endif;
			?>
		</div>
	</div>
</section>

<!-- Filosofia -->
<section class="filosofia d-md-block d-lg-flex flex-lg-column h-100 pb-md-5">
	<div class="container justify-content-lg-center align-self-lg-center">
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
							<h4><?php 
							$title_vehiculo = the_title(); 
							_e($title_vehiculo , 'urbanvalue');
							?>
							</h4></div>
							</figure>
							<figure class="back d-flex h-100">
								<div class="justify-content-center align-self-center" >
							<?php the_content(); ?>
							<a href="<?php the_permalink(); ?>" class="more">Ver Mas</a></div>
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

<!-- Impacto -->
<div class="impacto d-lg-flex flex-lg-column mt-5">
	<div class="justify-content-lg-center align-self-lg-center items">
		<div class="row ">
			<div class="col-lg-12">
				<h3 class="titulo">GENERAMOS IMPACTOS POSITIVOS</h3>
			</div>
		</div>

		<div class="row ">
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
</div>

</section>

<!-- Proyectos -->
<section class="proyectos d-lg-flex h-100 pb-md-5">
	<div class="container justify-content-lg-center align-self-lg-center">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="titl">PROYECTOS</h3>
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
<section class="team d-flex pt-4 pb-3">
	<div class="container justify-content-lg-center align-self-lg-center">
		<div class="row">
			<h3 class="titl">TEAM</h3>
			<p class="team-text">Conformamos un equipo multidisplinario con amplia experiencia y expertise en cada una de las áreas de desarrollo</p>

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
								<h3 class="name"><?php the_sub_field('nombre'); ?></h3>
								<h5 class="job"><?php the_sub_field('cargo'); ?></h5>
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
<!--- <section class="clientes d-lg-flex h-100 pb-md-5">
	<div class="container justify-content-lg-center align-self-lg-center">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="titl">NUESTROS CLIENTES</h3>			
				<div class="slide__clientes">
					<?php /*
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
						endif;*/
					?>
							-->	
				<!-- post -->
				<?php /*endwhile;*/ ?>
				<!-- post navigation -->
				<?php /*else:*/ ?>
				<!-- no posts found -->
				<?php /*endif; 
					wp_reset_postdata();*/
				?>
			<!--	</div>
			</div>			
		</div>
	</div>
	

</section> -->

<section class="cta d-lg-flex flex-lg-column h-100 pb-md-5">
<!-- Quotes -->
<div class="quote d-lg-flex flex-lg-column pb-md-5">
	<div class="container justify-content-lg-center align-self-lg-center">
		<div class="row">
			<div class="offset-lg-1 col-lg-10 ">
				<div class="quote-slider">
				    <div><p>“Real estate cannot be lost or stolen, nor can it be carried away. Purchased with common sense, paid for in full, and managed with reasonable care, it is about the safest investment in the world.”</p> <h6>Franklin D. Roosevelt</h6></div>
				    <div><p>“This is a real-estate-driven economy from top to bottom.”</p><h6>Christopher Thornberg</h6></div>
				    <div><p>“Real estate is an imperishable asset, ever increasing in value. It is the most solid security that human ingenuity has devised. It is the basis of all security and about the only indestructible security.”</p> <h6>Russell Sage, American Financier and Politician</h6></div>
				 </div>
		   </div>
		</div>
	</div>
</div>

	<div class="container flex-lg-column justify-content-lg-center align-self-lg-center">
		<div class="cta-container offset-lg-2 col-lg-8">
			<div class="cta-txt">

			<p>Nos encantaría conocer más propuestas de valor, contáctanos.</p>
			<a class="cta-btn" >Contacto</a></div>
			<?php //echo do_shortcode( '[contact-form-7 id="139" title="CTA"]' );?>
			<div class="form">
				<button type="button" class="close" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
			<?php echo do_shortcode( '[contact-form-7 id="153" title="cta"]' );?>
			</div>
			
		</div>
	</div>
</section>
 <!-- </div>  -->
<script>
	  jQuery(document).ready(function(){
      jQuery(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 769,
        loop: true
      });
		});
		
	</script>
	
<?php

get_footer();

