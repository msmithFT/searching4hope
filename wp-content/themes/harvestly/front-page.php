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

	<div id="header" class="animate-50">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 logo">
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
					<nav id="site-navigation" class="main-navigation">
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
	
	<div class="banner" style="background-image: url(<?php echo esc_url(get_theme_mod('banner_image')); ?>);">
		<div class="caption">
			<p><?php echo esc_html(get_theme_mod('banner_caption1')); ?></p>
			<p><?php echo esc_html(get_theme_mod('banner_caption2')); ?></p>
		</div>
	</div>

  <!-- CONTENT - BEGIN -->
  <div id="content">
  
    <!-- ABOUT US - BEGIN -->
    <div id="about">
      <div class="container">
	    <div class="row content-header">
	      <div class="col-sm-12">
	        <h2><?php echo esc_html__( 'About Us', 'harvestly' ); ?></h2>
	      </div>
	    </div>
	    <div class="row about-content">
	      <div class="col-sm-4">
	        <h3 class="about-icon-1"><i class="fa <?php echo esc_attr(get_theme_mod('about_icon1')); ?>"></i><?php echo esc_html(get_theme_mod('about_box_title1')); ?></h3>
		    <p><?php echo esc_html(get_theme_mod('about_box_desc1')); ?></p>
	      </div>
	      <div class="col-sm-4">
	        <h3 class="about-icon-2"><i class="fa <?php echo esc_attr(get_theme_mod('about_icon2')); ?>"></i><?php echo esc_html(get_theme_mod('about_box_title2')); ?></h3>
		    <p><?php echo esc_html(get_theme_mod('about_box_desc2')); ?></p>
	      </div>
	      <div class="col-sm-4">
	        <h3 class="about-icon-3"><i class="fa <?php echo esc_attr(get_theme_mod('about_icon3')); ?>"></i><?php echo esc_html(get_theme_mod('about_box_title3')); ?></h3>
		    <p><?php echo esc_html(get_theme_mod('about_box_desc3')); ?></p>
	      </div>
	    </div>
	  </div>
    </div>
	<!-- ABOUT US - END -->

    <!-- PORTFOLIO - BEGIN -->
    <div id="portfolio" class="container">
	  <div class="row content-header">
	    <div class="col-sm-12">
		  <h2><?php echo esc_html__( 'Portfolio', 'harvestly' ); ?></h2>
	    </div>
	  </div>
      <div class="row">
	    <div id="container" class="masonry">
			<?php
				$args = array(
					'post_type'	=> 'portfolio',
				);
				$portfolio_query = new WP_Query( $args );
			?>
			<?php if($portfolio_query->have_posts()): ?>
				<?php while($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
					<div class="box">
						<div class="imgwrap">
						  <div class="imgcover animate-75">
							<a href="<?php the_permalink(); ?>" class="imgmore"><?php echo esc_html__( 'MORE', 'harvestly' ); ?></a>
						  </div>
						  <?php the_post_thumbnail(); ?>
						</div>
						<h3><?php the_title(); ?></h3>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="clearboth"></div>
	    </div> <!-- #container -->
      </div>
    </div>	
    <!-- PORTFOLIO - END -->
  
    <!-- PARALLAX 1 - BEGIN -->
	<div id="parallax1" data-stellar-background-ratio="0" style="background-image: url(<?php echo esc_url(get_theme_mod('funny_bg_image')); ?>);">
	  <div class="parallax-layer"></div>
	  <div class="container clearfix">
		<div class="col-lg-12 funnyheader">
		  <h2><?php echo esc_html(get_theme_mod('funny_title')); ?></h2>
		</div>
		<div class="row funnyfact">
		  <div class="col-sm-3 funnyfact1">
			<h3><b class="timer" id="lollipop" data-to="<?php echo intval(get_theme_mod('funny_counter1')); ?>" data-speed="3000"></b></h3>
			<p><i class="fa <?php echo esc_attr(get_theme_mod('funny_icon1')); ?>"></i><?php echo esc_html(get_theme_mod('funny_desc1')); ?></p>
		  </div>
		  <div class="col-sm-3 funnyfact2">
			<h3><b class="timer" id="lollipop" data-to="<?php echo intval(get_theme_mod('funny_counter2')); ?>" data-speed="3000"></b></h3>
			<p><i class="fa <?php echo esc_attr(get_theme_mod('funny_icon2', 'fa-cubes')); ?>"></i><?php echo esc_html(get_theme_mod('funny_desc2')); ?></p>
		  </div>
		  <div class="col-sm-3 funnyfact3">
			<h3><b class="timer" id="lollipop" data-to="<?php echo intval(get_theme_mod('funny_counter3')); ?>" data-speed="3000"></b></h3>
			<p><i class="fa <?php echo esc_attr(get_theme_mod('funny_icon3', 'fa-coffee')); ?>"></i><?php echo esc_html(get_theme_mod('funny_desc3')); ?></p>
		  </div>
		  <div class="col-sm-3 funnyfact4">
			<h3><b class="timer" id="lollipop" data-to="<?php echo intval(get_theme_mod('funny_counter4')); ?>" data-speed="3000"></b></h3>
			<p><i class="fa <?php echo esc_attr(get_theme_mod('funny_icon4')); ?>"></i><?php echo esc_html(get_theme_mod('funny_desc4')); ?></p>
		  </div>
		</div>
	  </div>
	</div>
    <!-- PARALLAX 1 - END -->

    <!-- OUR SERVICE - BEGIN -->
    <div id="service">
	  <div class="container">
		  <div class="row content-header">
			<div class="col-sm-12">
			  <h2><?php echo esc_html__( 'Our Service', 'harvestly' ); ?></h2>
			</div>
		  </div>
		  <div class="row service-inner service-row-1">
			<?php echo wp_kses(get_theme_mod('service_row1'), array(
				'div'	=> array(
					'class'	=> array(),
				),
				'h3'	=> array(
					'class'	=> array(),
				),
				'i'	=> array(
					'class'	=> array(),
				),
				'p'	=> array(),
			)); ?>
		  </div>
		  <div class="row service-inner service-row-2">
			<?php echo wp_kses(get_theme_mod('service_row2'), array(
				'div'	=> array(
					'class'	=> array(),
				),
				'h3'	=> array(
					'class'	=> array(),
				),
				'i'	=> array(
					'class'	=> array(),
				),
				'p'	=> array(),
			)); ?>
		  </div>
		  <div class="row service-inner service-row-3">
			<?php echo wp_kses(get_theme_mod('service_row3'), array(
				'div'	=> array(
					'class'	=> array(),
				),
				'h3'	=> array(
					'class'	=> array(),
				),
				'i'	=> array(
					'class'	=> array(),
				),
				'p'	=> array(),
			)); ?>
		  </div>
	  </div>
    </div>
	<!-- OUR SERVICE - END -->

    <!-- OUR TEAM - BEGIN -->
    <div id="ourteam">
	  <div class="container">
	    <div class="row content-header">
	      <div class="col-sm-12">
	        <h2><?php echo esc_html__( 'Our Creative', 'harvestly' ); ?> <span><?php echo esc_html__( 'Team', 'harvestly' ); ?></span></h2>
	      </div>
	    </div>
	    <div class="row ourteam-inner">
	      <div class="col-sm-4 team1">
		    <div class="imgwrap">
		      <div class="imgcover animate-50">
			    <ul class="imgmore">
				  <?php if (get_theme_mod('team1_fb') != '') { ?>
			      <li><a href="<?php echo esc_url(get_theme_mod('team1_fb')); ?>">&#xf09a;</a></li>
				  <?php } ?>
				  <?php if (get_theme_mod('team1_twitter') != '') { ?>
			      <li><a href="<?php echo esc_url(get_theme_mod('team1_twitter')); ?>">&#xf099;</a></li>
				  <?php } ?>
				  <?php if (get_theme_mod('team1_dribble') != '') { ?>
			      <li><a href="<?php echo esc_url(get_theme_mod('team1_dribble')); ?>">&#xf17d;</a></li>
				  <?php } ?>
			    </ul>
		      </div>
		      <img src="<?php echo esc_url(get_theme_mod('team1_image')); ?>" class="animate-50">
		    </div>
	        <h3><?php echo esc_html(get_theme_mod('team1_name')); ?></h3>
		    <h4><?php echo esc_html(get_theme_mod('team1_title')); ?></h4>
	      </div>
	      <div class="col-sm-4 team2">
		    <div class="imgwrap">
		      <div class="imgcover animate-50">
			    <ul class="imgmore">
				  <?php if (get_theme_mod('team2_fb') != '') { ?>
			      <li><a href="<?php echo esc_url(get_theme_mod('team2_fb')); ?>">&#xf09a;</a></li>
				  <?php } ?>
				  <?php if (get_theme_mod('team2_twitter') != '') { ?>
			      <li><a href="<?php echo esc_url(get_theme_mod('team2_twitter')); ?>">&#xf099;</a></li>
				  <?php } ?>
				  <?php if (get_theme_mod('team2_dribble') != '') { ?>
			      <li><a href="<?php echo esc_url(get_theme_mod('team2_dribble')); ?>">&#xf17d;</a></li>
				  <?php } ?>
			    </ul>
		      </div>
		      <img src="<?php echo esc_url(get_theme_mod('team2_image')); ?>" class="animate-50">
		    </div>
	        <h3><?php echo esc_html(get_theme_mod('team2_name')); ?></h3>
		    <h4><?php echo esc_html(get_theme_mod('team2_title')); ?></h4>
	      </div>
	      <div class="col-sm-4 team3">
		    <div class="imgwrap">
		      <div class="imgcover animate-50">
			    <ul class="imgmore">
				  <?php if (get_theme_mod('team3_fb') != '') { ?>
			      <li><a href="<?php echo esc_url(get_theme_mod('team3_fb')); ?>">&#xf09a;</a></li>
				  <?php } ?>
				  <?php if (get_theme_mod('team3_twitter') != '') { ?>
			      <li><a href="<?php echo esc_url(get_theme_mod('team3_twitter')); ?>">&#xf099;</a></li>
				  <?php } ?>
				  <?php if (get_theme_mod('team3_dribble') != '') { ?>
			      <li><a href="<?php echo esc_url(get_theme_mod('team3_dribble')); ?>">&#xf17d;</a></li>
				  <?php } ?>
			    </ul>
		      </div>
		      <img src="<?php echo esc_url(get_theme_mod('team3_image')); ?>" class="animate-50">
		    </div>
	        <h3><?php echo esc_html(get_theme_mod('team3_name')); ?></h3>
		    <h4><?php echo esc_html(get_theme_mod('team3_title')); ?></h4>
	      </div>
	    </div>
	  </div>
    </div>
	<!-- OUR TEAM - END -->
	
    <!-- TESTIMONIAL - BEGIN -->
	<div id="testimonial" data-stellar-background-ratio="0" style="background-image: url(<?php echo esc_url(get_theme_mod('testimonial_bg_image')); ?>);">
	  <div class="parallax-layer"></div>
	  <div class="container clearfix">
	  <div class="col-lg-12 testimonial1">
	    <h3><?php echo esc_html__( 'What Clients Say', 'harvestly' ); ?></h3>
		<ul class="owl-carousel">
			<?php
				$args = array(
					'post_type'	=> 'testimonial',
				);
				$testimonial_query = new WP_Query( $args );
			?>
			<?php if($testimonial_query->have_posts()): ?>
				<?php while($testimonial_query->have_posts()) : $testimonial_query->the_post(); ?>
					<li><p><?php the_content(); ?></p><p class="testi-auth">- <?php the_title(); ?> -</p></li>
				<?php endwhile; ?>
			<?php endif; ?>
		</ul>
	  </div>
	  </div>
	</div>
    <!-- TESTIMONIAL - END -->
	
    <!-- CONTACT US - BEGIN -->
    <div id="contact">
	  <div class="container">
	    <div class="row content-header">
	      <div class="col-sm-12">
	        <h2><?php echo esc_html__( 'CONTACT US', 'harvestly' ); ?></h2>
	      </div>
	    </div>
	    <div class="row contact-inner">
	      <div class="col-sm-6 contact-left">
		    <?php echo wp_kses(get_theme_mod('google_map'), array(
				'iframe'	=> array(
					'src'			=> array(),
				),
			)); ?>
		  </div>
	      <div class="col-sm-6 contact-right">
		    <h4><?php echo esc_html__( 'Our Customer Service', 'harvestly' ); ?></h4>
			<div class="row chatnow">
			  <div class="col-sm-4 cs1">
			    <img src="<?php echo esc_url(get_theme_mod('cs1_image')); ?>">
				<h2><?php echo esc_html(get_theme_mod('cs1_name')); ?></h2>
			  </div>
			  <div class="col-sm-4 cs2">
			    <img src="<?php echo esc_url(get_theme_mod('cs2_image')); ?>">
				<h2><?php echo esc_html(get_theme_mod('cs2_name')); ?></h2>
			  </div>
			  <div class="col-sm-4 cs3">
			    <img src="<?php echo esc_url(get_theme_mod('cs3_image')); ?>">
				<h2><?php echo esc_html(get_theme_mod('cs3_name')); ?></h2>
			  </div>
			</div>
		    <h3><?php echo esc_html__( 'Our Address', 'harvestly' ); ?></h3>
		    <?php echo wp_kses(get_theme_mod('contact_address'), array(
				'p'		=> array(),
				'br'	=> array(),
				'a'		=> array(
					'href'	=> array(),
				),
			)); ?>
		  </div>
	    </div>
	  </div>
    </div>
	<!-- CONTACT US - END -->
	
  </div>
  <!-- CONTENT - END -->
  
  <!-- FOOTER - BEGIN -->
  <div id="footer">
    <div class="container">
	  <div class="col-sm-12">
	    <div class="row logo-bottom animate-100">
		  <a href="#"><img src="<?php echo esc_url(get_theme_mod('footer_logo')); ?>" border="0"></a>
		</div>
	    <div class="row">
		  <ul class="footer-social">
		    <li class="fb"><a href="<?php echo esc_url(get_theme_mod('footer_fb')); ?>">&#xf09a;</a></li>
		    <li><a href="<?php echo esc_url(get_theme_mod('footer_twitter')); ?>">&#xf099;</a></li>
		    <li><a href="<?php echo esc_url(get_theme_mod('footer_dribble')); ?>">&#xf17d;</a></li>
		    <li><a href="<?php echo esc_url(get_theme_mod('footer_google')); ?>">&#xf1a0;</a></li>
		  </ul>
		</div>
		</div>
	    <div class="row">
		  <p><?php echo esc_html__( 'Theme Harvestly by Theme Scratch', 'harvestly' ); ?></p>
		</div>
	</div>
  </div>
  <!-- FOOTER - END -->

</div>

<?php wp_footer(); ?>
</body>
</html>