<?php

/** * Use GD instead of Imagick.
 */
function cb_child_use_gd_editor($array) {
    return array( 'WP_Image_Editor_GD' );
}
add_filter( 'wp_image_editors', 'cb_child_use_gd_editor' );
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Sets content width.
 */

DEFINE('CONTENT_URI', get_stylesheet_directory_uri());
/**
 * Odin Classes.
 */
require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
require_once get_template_directory() . '/core/classes/class-post-type.php';
require_once get_template_directory() . '/core/classes/class-taxonomy.php';
require_once get_template_directory() . '/core/mestre/functions-mestre.php';

/**
 * Odin Widgets.
 */
require_once get_template_directory() . '/core/classes/widgets/class-widget-like-box.php';

if ( ! function_exists( 'odin_setup_features' ) ) {

	/**
	 * Setup theme features.
	 *
	 * @since 2.2.0
	 */
	function odin_setup_features() {

		/**
		 * Add support for multiple languages.
		 */
		load_theme_textdomain( 'odin', get_template_directory() . '/languages' );

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'odin' ),
				'main-menu-footer' => __( 'Main Menu Footer', 'odin' )
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );
        add_image_size( 'blog-thumbnails', 586, 350, array( 'center', 'center' ) );
		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );


		/**
		 * Support Custom Editor Style.
		 */
		add_editor_style( 'assets/css/editor-style.css' );

		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type'           => 'scroll',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => get_option( 'posts_per_page' )
			)
		);

		/**
		 * Support The Excerpt on pages.
		 */
		// add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for custom logo.
		 *
		 *  @since Odin 2.2.10
		 */
	}
}

add_action( 'after_setup_theme', 'odin_setup_features' );

/**
 * Register widget areas.
 *
 * @since 2.2.0
 */
function odin_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'odin' ),
			'id' => 'main-sidebar',
			'description' => __( 'Site Main Sidebar', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'odin_widgets_init' );

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 *
 * @since 2.2.0
 */
function odin_flush_rewrite() {
	flush_rewrite_rules();
}

add_action( 'after_switch_theme', 'odin_flush_rewrite' );

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function odin_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// Loads Odin main stylesheet.
	wp_enqueue_style( 'odin-style', get_stylesheet_uri(), array(), null, 'all' );
	wp_enqueue_style( 'odin-fonts', $template_url . '/assets/css/MyFontsWebfontsKit.css', array(), null, 'all' );
	wp_enqueue_style( 'owl-carrossel', $template_url . '/assets/css/owl.carousel.css', array(), null, 'all' );
	//wp_enqueue_style( 'owl-theme', $template_url . '/assets/css/owl.theme.default.css', array(), null, 'all' );

	// jQuery.
	wp_enqueue_script( 'jquery' );

	// Html5Shiv
	wp_enqueue_script( 'html5shiv', $template_url . '/assets/js/html5.js' );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );


		wp_enqueue_script( 'odin-main-min', $template_url . '/assets/js/main.min.js', array(), null, true );
		//wp_enqueue_script( 'carrossel-js', $template_url . '/assets/js/owl.carousel.js', array(), null, false );


	// Grunt watch livereload in the browser.
	// wp_enqueue_script( 'odin-livereload', 'http://localhost:35729/livereload.js?snipver=1', array(), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'odin_enqueue_scripts', 1 );

/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function odin_stylesheet_uri( $uri, $dir ) {
	return $dir . '/assets/css/style.css';
}

add_filter( 'stylesheet_uri', 'odin_stylesheet_uri', 10, 2 );

/**
 * Query WooCommerce activation
 *
 * @since  2.2.6
 *
 * @return boolean
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		return class_exists( 'woocommerce' ) ? true : false;
	}
}

/**
 * Core Helpers.
 */
require_once get_template_directory() . '/core/helpers.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Comments loop.
 */
require_once get_template_directory() . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
require_once get_template_directory() . '/inc/optimize.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * WooCommerce compatibility files.
 */
if ( is_woocommerce_activated() ) {
	add_theme_support( 'woocommerce' );
	require get_template_directory() . '/inc/woocommerce/hooks.php';
	require get_template_directory() . '/inc/woocommerce/functions.php';
	require get_template_directory() . '/inc/woocommerce/template-tags.php';
}


if( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page(array(
        'page_title'  => 'Opções do Tema',
        'menu_title'  => 'Opções do Tema',
        'menu_slug'   => 'amdt-opcoes',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ));
//    acf_add_options_sub_page(array(
//        'page_title'  => 'Home',
//        'menu_title'  => 'Home',
//        'parent_slug' => 'amdt-opcoes'
//    ));
}

function remove_menus(){
 // remove_menu_page( 'edit.php?post_type=acf-field-group' );    //Dashboard
}
add_action( 'admin_menu', 'remove_menus' );

function ajax_login_init(){
    if ( ! is_user_logged_in() || ! is_page( 'page-test' ) ) {
        return;
    }

    wp_register_script('ajax-login-script',get_stylesheet_directory_uri().'/js/ajax-login-script.js',array('jquery'));
    wp_enqueue_script('ajax-login-script');
    wp_localize_script('ajax-login-script','ajax_login_object',array('ajaxurl' => admin_url('admin-ajax.php'),'redirecturl' => 'REDIRECT_URL_HERE','loadingmessage' => __('Sending user info, please wait...')));
}

add_action( 'wp_enqueue_scripts','ajax_login_init' );

add_action( 'wp_ajax_nopriv_ajaxlogin','ajax_login' );

function ajax_login(){
    //nonce-field is created on page
    check_ajax_referer('ajax-login-nonce','security');
    //CODE
    die();
}
