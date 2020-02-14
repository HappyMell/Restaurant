<?php
/**
 * Theme functions and definitions
 */

 if ( ! function_exists( 'theme_setup' ) ) :
 /**
  * Sets up theme defaults and registers support for various WordPress features.
  *
  * Note that this function is hooked into the after_setup_theme hook, which
  * runs before the init hook. The init hook is too late for some features, such
  * as indicating support for post thumbnails.
  */
 function theme_setup() {
 	// Add default posts and comments RSS feed links to head.
 	add_theme_support( 'automatic-feed-links' );

 	/*
 	 * Let WordPress manage the document title.
 	 * By adding theme support, we declare that this theme does not use a
 	 * hard-coded <title> tag in the document head, and expect WordPress to
 	 * provide it for us.
 	 */
 	add_theme_support( 'title-tag' );

 	/*
 	 * Enable support for Post Thumbnails on posts and pages.
 	 *
 	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 	 */
 	add_theme_support( 'post-thumbnails' );

  // Enable custom menus
  // =======================
  add_theme_support( 'menus' );

 	// This theme uses wp_nav_menu() in one location.
 	register_nav_menus( array(
    // Example
		 'main-mobile-menu' => esc_html__( 'Main Mobile Menu', 'ben-theme' ),
		 'small-mobile-menu' => esc_html__( 'Small Mobile Menu', 'ben-theme' ),
		 'large-menu' => esc_html__( 'Large Menu', 'ben-theme' ),
		 'footer-menu' => esc_html__( 'Footer Menu', 'ben-theme' ),
		 'social-menu' => esc_html__( 'Social Menu', 'ben-theme' ),
 	) );

 	/*
 	 * Switch default core markup for search form, comment form, and comments
 	 * to output valid HTML5.
 	 */
 	add_theme_support( 'html5', array(
 		'search-form',
 		'comment-form',
 		'comment-list',
 		'gallery',
 		'caption',
 	) );

 	// Add theme support for selective refresh for widgets.
 	add_theme_support( 'customize-selective-refresh-widgets' );
 }
 endif;
 add_action( 'after_setup_theme', 'theme_setup' );

 // Adds CSS
 // ============
 function theme_styles() {
   // Example with external URL
   // wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
   // Example with internal file
	wp_enqueue_style( 'flickCSS', get_template_directory_uri() . '/node_modules/flickity/dist/flickity.css' );
	wp_enqueue_style( 'mainCSS', get_template_directory_uri() . '/css/style.min.css' );
	wp_enqueue_style( 'salCSS', get_template_directory_uri() . '/node_modules/sal.js/dist/sal.css' );

 }
 add_action( 'wp_enqueue_scripts', 'theme_styles');

 // Adds JS
 // ==========
 function theme_js() {
   // Example with external URL
   wp_enqueue_script( 'googlemapJS', get_template_directory_uri() . '/js/googleMap.js', array('jquery'), '', true);

   wp_enqueue_script( 'mapapiJS',  'https://maps.googleapis.com/maps/api/js?key=AIzaSyCMY_tPf7Q-V0W4b3jaieU6c5MP9jMHJvQ&callback=initMap', array( 'jquery' ), null, true);
   wp_enqueue_script( 'flickJS', get_template_directory_uri() . '/node_modules/flickity/dist/flickity.pkgd.min.js', array('jquery'), '', true);

   wp_enqueue_script( 'jqueryJS',  'https://code.jquery.com/jquery-3.3.1.min.js');
   wp_enqueue_script( 'jquery112JS',  'https://code.jquery.com/jquery-1.12.4.js');
   wp_enqueue_script( 'jqueryui',  'https://code.jquery.com/ui/1.12.1/jquery-ui.js');
   wp_enqueue_script( 'font-awesome',  'https://kit.fontawesome.com/9cf512b134.js');

   // Example with internal file
	wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true);
	wp_enqueue_script( 'salJS', get_template_directory_uri() . '/node_modules/sal.js/dist/sal.js', array('jquery'), '', true);
 }
 add_action( 'wp_enqueue_scripts', 'theme_js');

// Implement Additional files
//==========
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
* Load Custom Posts file
*/
require get_template_directory() . '/inc/custom-posts.php';

/**
* Load Custom Taxonomies file
*/
require get_template_directory() . '/inc/custom-taxonomies.php';

/**
* Where to edit login page and dashboard logo
*/
require get_template_directory() . '/inc/theme-appearance.php';


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Header Settings'),
            'menu_title'    => __('Header Settings'),
            'menu_slug'     => 'header-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
		));
		
	}
	
}

add_action('acf/init', 'my_acf_op_init_footer');
function my_acf_op_init_footer() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Footer Settings'),
            'menu_title'    => __('Footer Settings'),
            'menu_slug'     => 'footer-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
		));
		
	}
	
}