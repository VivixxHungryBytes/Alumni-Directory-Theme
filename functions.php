<?php
/*
 *  Author: Lorenzo Ibay
 *  URL: lorenzoibay.com 
 *  Custom functions, support, custom post types and more.
 */

//file locations
define('DISALLOW_FILE_EDIT', true);
define('ROOT', get_stylesheet_directory_uri().'/assets');
define('PLUGINS', ROOT.'/plugins/');
/*------------------------------------*\
	Theme Support
\*------------------------------------*/
if(function_exists('add_theme_support'))
{
	//Add Menu Support
	add_theme_support('menus');
	// Thumbnail support
	add_theme_support('post-thumbnails');
	add_theme_support('large', 700, '', true);
	add_theme_support('meduim', 250, '', true);
	add_theme_support('small', 120, '', true);
	add_theme_support('custom-size', 700, 200, true);
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Nav Menu
function primary_nav()
{
	wp_nav_menu(
		array(
		'theme_location'  => 'header-menu',
		'container'       => 'div',
		'container_class' => 'menu',
		'echo'            => true,	
		) 
	);
}
//Enqueue shit
function directory_scripts()
{
	// Reset
	wp_register_style( 'reset', PLUGINS . 'reset/reset.css', null, 1.0, 'screen' );
	wp_enqueue_style( 'reset' );

	// Bootstrap
	wp_register_style( 'bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'bootstrap-jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js' );
	wp_enqueue_style( 'bootstrap-jquery' );

	wp_register_script( 'popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js');
    wp_enqueue_script( 'popper' );

	wp_register_script( 'bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js' );
    wp_enqueue_script( 'bootstrap' );

	// Font Awesome Icons
	wp_register_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css');
	wp_enqueue_style( 'font-awesome' );

	// Slick Carousel
	// though in the documentation there's a jquery and jquery migrate installed, I decided to not add it here because the bootstrap already loaded qjuery but a diff version (this comment may be notable in future issues)
	wp_register_style( 'slick', PLUGINS . 'slick/slick.min.css', null, 1.0, 'screen' );
	wp_enqueue_style( 'slick' );

	wp_register_style( 'slick-theme', PLUGINS . 'slick/slick-theme.min.css', null, 1.0, 'screen' );
	wp_enqueue_style( 'slick-theme' );

	wp_register_script( 'slick-jquery', PLUGINS . 'slick/slick.min.js', array( 'jquery' ), 1.0, true );
    wp_enqueue_script( 'slick' );
	
	// Animate.CSS
	wp_register_style( 'animate-css', PLUGINS . 'animate.css/animate.min.css', null, 1.0, 'screen' );
    wp_enqueue_style( 'animate-css' );

	// AOS
	wp_register_style( 'aos', PLUGINS . 'aos/aos.css', null, 1.0, 'screen' );
	wp_enqueue_style( 'aos' );

	wp_register_script( 'aos', PLUGINS . 'aos/aos.js', array( 'jquery' ), 1.0, true );
    wp_enqueue_script( 'aos' );
	
	// Hover
	wp_register_style( 'hover-css', PLUGINS . 'hover/hover-min.css', null, 1.0, 'screen' );
    wp_enqueue_style( 'hover-css' );


	// // Fonts
	// wp_register_style( 'fonts', ROOT . '/fonts/stylesheet.css', null, 1.0, 'screen' );
	// wp_enqueue_style( 'fonts' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'directory_scripts' );


//// get style.css
function enqueue_directory_style() {
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_directory_style', 999 );

// ACF options
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
