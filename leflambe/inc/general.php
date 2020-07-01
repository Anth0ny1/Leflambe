<?php
/**
 * leflambe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package leflambe
 */

if ( ! function_exists( 'leflambe_setup' ) ) :

	function leflambe_setup() {

		load_theme_textdomain( 'leflambe', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'leflambe' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
}
endif;
add_action( 'after_setup_theme', 'leflambe_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function leflambe_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'leflambe_content_width', 640 );
}
add_action( 'after_setup_theme', 'leflambe_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function leflambe_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'leflambe' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'leflambe' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'leflambe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function leflambe_scripts() {

  wp_register_style('flexslider', get_stylesheet_directory_uri().'/assets/css/flexslider.css');
  wp_enqueue_style( 'flexslider');

	wp_register_style('bootstrapcss', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css', array(), '1.0.0', true);
	wp_enqueue_style('bootstrapcss');



	wp_enqueue_style( 'leflambe-style', get_stylesheet_uri() );

  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://code.jquery.com/jquery-1.12.4.js', array(), '1.0.0', true);
  wp_enqueue_script('jquery');

	wp_register_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('bootstrapjs');

  wp_register_script('plugins', get_stylesheet_directory_uri() . '/assets/js/plugins.js', array(), '1.0.0', true);
  wp_enqueue_script('plugins');

  wp_register_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
  wp_enqueue_script('main');
}
add_action( 'wp_enqueue_scripts', 'leflambe_scripts' );
