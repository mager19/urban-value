<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package urbanvalue
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
<!-- Hotjar Tracking Code for www.urbanandvalue.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1115201,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</head>

<body <?php body_class(); ?>>

<!-- Header -->
<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-5">
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
			<div class="col-lg-9 col-7">
				<nav id="site-navigation" class="main-navigation justify-content-end">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav>
			</div>
		</div>
	</div>
<!-- 	<div class="flecha onepage-pagination">
		<li><a data-index="2" href="#2"><i class="fas fa-arrow-circle-down"></i></a></li>
	</div>
 -->

</header>


