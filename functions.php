<?php
/**
 * halim functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package halim
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function halim_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on halim, use a find and replace
		* to change 'halim' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'halim', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Primary Menu', 'halim' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'halim_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action( 'after_setup_theme', 'halim_theme_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function halim_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'halim' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'halim' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	//Footer 1
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer One', 'halim' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add footer one widgets here.', 'halim' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	//Footer 2
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Two', 'halim' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add footer two widgets here.', 'halim' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
	//Footer 3
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Three', 'halim' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add footer three widgets here.', 'halim' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}

add_action( 'widgets_init', 'halim_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


function halim_assets_load() {
	wp_enqueue_style( 'halim-poppins-font', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'halim-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'halim-font-awesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'halim-font-awesome-min', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'halim-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'halim-owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'halim-assets-style-css', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'halim-responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'halim-main-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'halim-popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'halim-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'halim-owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'halim-magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'halim-isotope-js', get_template_directory_uri() . '/assets/js/isotope.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'halim-imageloaded-js', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'halim-jquery-counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'halim-jquery-waypoint-js', get_template_directory_uri() . '/assets/js/waypoint.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'halim-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'halim_assets_load' );

//Template Parts Require

