<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrap">

	<div id="header" class="header-blog animate-50">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 logo logo-blog">
					<?php the_custom_logo(); ?>

					<div class="site-branding-text">
						<?php if ( is_front_page() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>

						<?php
						$description = get_bloginfo( 'description', 'display' );

						if ( $description || is_customize_preview() ) :
						?>
							<p class="site-description"><?php echo esc_html( $description ); ?></p>
						<?php endif; ?>
					</div><!-- .site-branding-text -->
				</div>
				<div class="col-sm-8 nav-wrap">
					<!-- NAVIGATION - BEGIN -->
					<nav id="site-navigation" class="main-navigation primary-menu-blog">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav>
					<!-- NAVIGATION - END -->
				</div>
			</div>
		</div>
	</div>

	<!-- CONTENT - BEGIN -->
	<div id="content" class="content-blog">
		<div class="container">
			<div class="row">
