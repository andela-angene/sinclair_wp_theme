<?php
/**
 * sinclairfox-montaroweb functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sinclairfox-montaroweb
 */

if ( ! function_exists( 'sinclairfox_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sinclairfox_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sinclairfox-montaroweb, use a find and replace
	 * to change 'sinclairfox' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sinclairfox', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'sinclairfox' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sinclairfox_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'sinclairfox_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sinclairfox_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sinclairfox_content_width', 640 );
}
add_action( 'after_setup_theme', 'sinclairfox_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sinclairfox_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Read More Sidebar', 'sinclairfox' ),
		'id'            => 'read-more',
		'description'   => esc_html__( 'Add Recent post widget here.', 'sinclairfox' ),
		'before_widget' => '<div class="col-sm-3 about-read-more">',
		'after_widget'  => '</div>',
		'before_title'  => '<button class="read-more-btn">',
		'after_title'   => '</button>',
	) );
}
add_action( 'widgets_init', 'sinclairfox_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sinclairfox_scripts() {
	wp_enqueue_style( 'sinclairfox-style', get_stylesheet_uri() );

	wp_enqueue_script( 'sinclairfox-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sinclairfox-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sinclairfox_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

//Shorten Excerpt length
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Remove width/height attributes for image
//add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
//add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
//
//function remove_width_attribute( $html ) {
//	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
//	return $html;
//}


// split content at the more tag and return an array
function split_content($data = null) {
	if(isset($data)){
		$content = explode('[split_here]', $data);
	}else{
		$content = explode('[split_here]', get_the_content());
	}

//	for($c = 0, $csize = count($content); $c < $csize; $c++) {
//		$content[$c] = apply_filters('the_content', $content[$c]);
//	}
	return $content;

}

//Get post excerpt by Id
function get_excerpt_by_id($post_id) {
	global $post;
	$save_post = $post;
	$post = get_post($post_id);
	setup_postdata( $post ); // hello
	$output = get_the_excerpt();
	$post = $save_post;
	return $output;
}
