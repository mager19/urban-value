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
<!-- desarrollo -->
<section class="desarrollo d-md-block d-lg-flex h-100 pb-md-5" >
	<div class="container justify-content-lg-center align-self-lg-center">
		<div class="row ">
			<div class="col-lg-12 text-center">
				<h2 class="mb-3"><b>U&V DESARROLLA PROYECTOS INMOBILIARIOS INNOVADORES</b></h2>
				<h4 class="mb-3">Creamos valos a nuestros inversores a través de una gestión efectiva, fuerte y sostenible con una base tecnológica integrada.</h4>
				<h3 class="mb-3"><b>Una propuesta de valor única en el sector.</b></h3>
			</div>
		</div>
		<div class="row mt-5">
			<?php
				if( have_rows('items_bajo_video') ):
							
				    while ( have_rows('items_bajo_video') ) : the_row();?>
				    	<div class="col-lg-3 px-0">
							<div class="box h-100 px-3 text-center ">
								<div id="wrapper-postal">
							<div id="postal">
							
								
									
								<?php $image = get_sub_field('item_imagen'); ?>
								<img src="<?php echo $image['url']; ?>" alt="" class="">
								<h4><?php 
								$item_titulo = the_sub_field('item_titulo'); 
								_e($item_titulo , 'urbanvalue');
								?>
								</h4>
								
								
								<p>
								<?php 
								$item_texto = the_sub_field('item_texto'); 
								_e($item_texto , 'urbanvalue');
								?>
								</p>
								
								
							</div>
						</div>
							</div>
							<?php $color = get_sub_field('barra_color'); ?>
							<hr class="colorbar m-0" style="background-color: <?php echo $color; ?>">
						</div>					        
					<?php  endwhile;
				endif;
			?>
		</div>
	</div>
</section>
<!-- desarrollo -->
<section class="desarrollo d-md-block d-lg-flex h-100 pb-md-5" >
	<div class="container justify-content-lg-center align-self-lg-center">
		<div class="row ">
			<div class="col-lg-12 text-center">
				<h2 class="mb-3"><b>U&V DESARROLLA PROYECTOS INMOBILIARIOS INNOVADORES</b></h2>
				<h4 class="mb-3">Creamos valos a nuestros inversores a través de una gestión efectiva, fuerte y sostenible con una base tecnológica integrada.</h4>
				<h3 class="mb-3"><b>Una propuesta de valor única en el sector.</b></h3>
			</div>
		</div>
		
		<div class="row mt-5 dess">
			<?php
				if( have_rows('items_bajo_video') ):
							
				    while ( have_rows('items_bajo_video') ) : the_row();?>
				    	<div class="col px-0 text-center">
							<div class="box h-100 px-3 text-center ">
								<div id="wrapper-postal">
							<div id="postal">
							
								
									
								<?php $image = get_sub_field('item_imagen'); ?>
								<img src="<?php echo $image['url']; ?>" alt="" class="mx-auto">
								<h4><?php 
								$item_titulo = the_sub_field('item_titulo'); 
								_e($item_titulo , 'urbanvalue');
								?>
								</h4>
								
								
								<p>
								<?php 
								$item_texto = the_sub_field('item_texto'); 
								_e($item_texto , 'urbanvalue');
								?>
								</p>
								
								
							</div>
						</div>
							</div>
							<?php $color = get_sub_field('barra_color'); ?>
							<hr class="colorbar m-0" style="background-color: <?php echo $color; ?>">
						</div>					        
					<?php  endwhile;
				endif;
			?>
		</div>
	</div>
</section>
<!-- tabbs -->
<section class="tabbs d-md-block d-lg-flex h-100 pb-md-5" >
	<div class="container justify-content-lg-center align-self-lg-center">
		<div class="row ">
			<div class="col-lg-12 text-center">
				<h2 class="mb-3"><b>PROCESO DE INVERSIÓN</b></h2>
				<h4 class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</h4>
				
			</div>
		</div>
		<div class="row mt-5">
			<div class="row">
			<div class="nav flex-column nav-pills col-lg-3 offset-lg-1" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			  <a class="nav-link active tt1" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
			  	<span class="wrap-icon"><i class="fas fa-map-marker-alt tab-icon"></i></span><span class="tab-text"><b>Localización</b></span></a>
			  <a class="nav-link tt2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="wrap-icon"><i class="fas fa-search tab-icon"></i></span><span class="tab-text"><b>Análisis</b></span></a>
			  <a class="nav-link tt3" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="wrap-icon"><i class="fas fa-cog tab-icon"></i></span><span class="tab-text"><b>Estructuración</b></span></a>
			  <a class="nav-link tt4" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span class="wrap-icon"><i class="fas fa-file-signature tab-icon"></i></span><span class="tab-text"><b>Gestión</b></span></a>
			   <a class="nav-link tt5" id="v-pills-settings2-tab" data-toggle="pill" href="#v-pills-settings2" role="tab" aria-controls="v-pills-settings2" aria-selected="false"><span class="wrap-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-urban-value-tab.png" class="tab-icon"></span><span class="tab-text"><b>Retornos</b></span></a>
			</div>
			<div class="tab-content col-lg-7 circle" id="v-pills-tabContent">
			  <div class="tab-pane fade show active text-center" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><p>Descripcion1: Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

				<p>Detalles: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>

				<p>Partner o Tecnologia: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. </p>

				<p>Con la aportacion de: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>

				<p>Tecnologias y Partners que validan:</p>
				<div class="text-center"><img src="https://placeimg.com/60/60/tech"><img src="https://placeimg.com/60/60/tech"><img src="https://placeimg.com/60/60/tech"></div>
			</div>
			  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><p>Descripcion2: Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

				<p>Detalles: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>

				<p>Partner o Tecnologia: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. </p>

				<p>Con la aportacion de: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>

				<p>Tecnologias y Partners que validan:</p>
				<div class="text-center techs"><img src="https://placeimg.com/60/60/tech"><img src="https://placeimg.com/60/60/tech"><img src="https://placeimg.com/60/60/tech"></div></div>
			  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><p>Descripcion3: Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

				<p>Detalles: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>

				<p>Partner o Tecnologia: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. </p>

				<p>Con la aportacion de: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>

				<p>Tecnologias y Partners que validan:</p>
				<div class="text-center techs"><img src="https://placeimg.com/60/60/tech"><img src="https://placeimg.com/60/60/tech"><img src="https://placeimg.com/60/60/tech"></div></div>
			  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><p>Descripcion4: Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

				<p>Detalles: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>

				<p>Partner o Tecnologia: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. </p>

				<p>Con la aportacion de: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>

				<p>Tecnologias y Partners que validan:</p>
				<div class="text-center techs"><img src="https://placeimg.com/60/60/tech"><img src="https://placeimg.com/60/60/tech"><img src="https://placeimg.com/60/60/tech"></div></div>
			  <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings-tab2"><p>Descripcion5: Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

				<p>Detalles: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>

				<p>Partner o Tecnologia: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. </p>

				<p>Con la aportacion de: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>

				<p>Tecnologias y Partners que validan:</p>
				<div class="text-center techs"><img src="https://placeimg.com/60/60/tech"><img src="https://placeimg.com/60/60/tech"><img src="https://placeimg.com/60/60/tech"></div></div>
			</div>
		</div>
		</div>
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

