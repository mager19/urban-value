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

<div class="videoWrapper">
	<div class="overlay"></div>
    <iframe width="auto" height="auto" src="https://www.youtube.com/embed/<?php the_field('videohome') ?>?autoplay=1&rel=0&modestbranding=1&autohide=1&showinfo=0&controls=0&loop=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <!-- <iframe src="https://player.vimeo.com/video/156270370?background=1&autoplay=1&loop=1&byline=0&title=0"
           frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->

    <div class="video__info">
   		<h1><?php the_field( 'titulo_home' ); ?></h1>
    </div>
</div>


<!-- claim -->
<section class="claim">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Applying digital knowledge and tools to Real Estate development.</h2>
				<h3>We are a Real Estate development firm<br>
				Desarrollando Real Estate aplicando la tecnología.</h3>
			</div>

			<div class="col-lg-3">
				<div class="box">
					<img src="https://imgholder.ru/100x100/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
					<h3>titulo</h3>
					<h4>Subtitulo</h4>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="box">
					<img src="https://imgholder.ru/100x100/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
					<h3>titulo</h3>
					<h4>Subtitulo</h4>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="box">
					<img src="https://imgholder.ru/100x100/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
					<h3>titulo</h3>
					<h4>Subtitulo</h4>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="box">
					<img src="https://imgholder.ru/100x100/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
					<h3>titulo</h3>
					<h4>Subtitulo</h4>
				</div>
			</div>

			
		</div>
	</div>
</section>

<!-- Filosofia -->
<section class="filosofia">
	<div class="container">
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
					<div class="vehiculo__item" style="background-image:url(<?php the_post_thumbnail_url(); ?>); ">
						<h3><?php 
						$title_vehiculo = the_title(); 
						_e($title_vehiculo , 'urbanvalue');
						?>
						</h3>
						<?php the_content(); ?>
						<a href="<?php the_permalink(); ?>">Ver Mas</a>
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
<section class="impacto">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>GENERAMOS IMPACTOS POSITIVOS</h3>
			</div>
		</div>

		<div class="row">
			<?php
                if( have_rows('numero_item' , 'option') ):
                	while ( have_rows('numero_item' , 'option') ) : the_row();?>
	                   <div class="col-lg-3">
	                   		<div class="numero__item">
	                   			<h3><?php the_sub_field('numero'); ?></h3>
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
<section class="proyectos">
	<div class="container">
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
<section class="team">
	<div class="container">
		<div class="row">
			<h3>TEAM</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore eius cumque quibusdam aliquam quas dolor possimus, cupiditate voluptate, nostrum excepturi vitae quidem architecto dicta laboriosam dolorum porro. Saepe, veniam, nobis?</p>

			<div class="col-lg-3">
				<img src="https://imgholder.ru/300x350/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
				<h3>Alan Estrada</h3>
				<h5>Community Manager</h5>
			</div>

			<div class="col-lg-3">
				<img src="https://imgholder.ru/300x350/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
				<h3>Alan Estrada</h3>
				<h5>Community Manager</h5>
			</div>

			<div class="col-lg-3">
				<img src="https://imgholder.ru/300x350/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
				<h3>Alan Estrada</h3>
				<h5>Community Manager</h5>
			</div>

			<div class="col-lg-3">
				<img src="https://imgholder.ru/300x350/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
				<h3>Alan Estrada</h3>
				<h5>Community Manager</h5>
			</div>
		</div>
	</div>
</section>

<!-- Clientes -->
<section class="clientes">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>NUESTROS CLIENTES</h3>
			</div>
			<div class="col-lg-2">
				<img src="https://imgholder.ru/300x300/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
			</div>
			<div class="col-lg-2">
				<img src="https://imgholder.ru/300x300/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
			</div>
			<div class="col-lg-2">
				<img src="https://imgholder.ru/300x300/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
			</div>
			<div class="col-lg-2">
				<img src="https://imgholder.ru/300x300/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
			</div>
			<div class="col-lg-2">
				<img src="https://imgholder.ru/300x300/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
			</div>
			<div class="col-lg-2">
				<img src="https://imgholder.ru/300x300/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
			</div>
		</div>
	</div>
</section>

<?php

get_footer();
