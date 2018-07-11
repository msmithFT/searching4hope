<?php

// Add Customizer Functionality
require get_template_directory(). '/inc/customizer.php';

// Admin Menu Customize
//require get_template_directory(). '/inc/function-admin.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function harvestly_setup(){
	load_theme_textdomain( 'harvestly', get_template_directory() . '/languages' );
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	//Featured Image Support
	add_theme_support('post-thumbnails');
	
	//Nav Menus
	register_nav_menus(array(
		'menu-1' => __('Primary Menu', 'harvestly')
	));

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'harvestly_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
	
	/*
	 * Enable custom image header.
	 */
	add_theme_support( 'custom-header', array(
        'default-image'      => get_template_directory_uri() . '/assets/images/banner1.jpg',
        'default-text-color' => '000',
        'width'              => 1350,
        'height'             => 700,
        'flex-width'         => true,
        'flex-height'        => true,
	) );
	
	add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'harvestly_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function harvestly_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'harvestly_content_width', 640 );
}
add_action( 'after_setup_theme', 'harvestly_content_width', 0 );

/** Excerpt Length */
function harvestly_set_excerpt_length(){
	return 20;
}

add_filter('excerpt_length', 'harvestly_set_excerpt_length');

// Widget Locations
function harvestly_init_widgets($id){
	register_sidebar(array(
		'name'	=> 'Sidebar',
		'id'	=> 'sidebar',
		'before_widget'	=> '<div class="widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>'
	));
	register_sidebar(array(
		'name'	=> 'Footer',
		'id'	=> 'footer',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h2 style="display: none;">',
		'after_title'	=> '</h2>'
	));
}

add_action('widgets_init', 'harvestly_init_widgets');

/**
 * Enqueue scripts and styles.
 */
function harvestly_scripts() {
	if ( is_front_page() ) {
		wp_enqueue_style( 'harvestly-front_page', get_template_directory_uri() . '/assets/css/frontpage.css', array(), null );
	}
	wp_enqueue_style( 'harvestly-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '3.3.5' );
	wp_enqueue_style( 'harvestly-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), null );
	wp_enqueue_style( 'owl_carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), null );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), null );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '4.4.0' );

	wp_enqueue_script( 'jquery-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), null, true );
	wp_enqueue_script( 'jquery-owl_carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array(), null, true );
	wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array(), null, true );
	wp_enqueue_script( 'jquery-countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js', array(), null, true );
	wp_enqueue_script( 'harvestly-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'harvestly-addon', get_template_directory_uri() . '/assets/js/addon.js', array( 'jquery' ), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'harvestly_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
