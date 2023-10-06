<?php
/**
 * Inits the Theme
 *
 * @package KingdomOne
 */

/** Grab the Cleanup Class */
require_once __DIR__ . '/class-k1-theme-cleaner.php';
/**
 * Theme Init
 */
class Theme_Init extends K1_Theme_Cleaner {
	function __construct() {
		$this->load_files();
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_k1_scripts' ) );
		add_action( 'after_setup_theme', array( $this, 'k1_theme_supports' ) );
		add_action( 'after_setup_theme', array( $this, 'register_k1_menus' ) );
		add_action( 'init', array( $this, 'alter_post_types' ) );
	}

	/** Loads required files */
	private function load_files() {
		require_once dirname( __DIR__, 1 ) . '/component-classes/class-content-sections.php';
		require_once __DIR__ . '/class-k1-nav-walker.php';
		require_once __DIR__ . '/theme-functions.php';
	}

	/**
	 * Adds scripts with the appropriate dependencies
	 */
	public function enqueue_k1_scripts() {
		$modified_styles  = gmdate( 'YmdHi', filemtime( get_stylesheet_directory() . '/dist/global.css' ) );
		$modified_scripts = gmdate( 'YmdHi', filemtime( get_stylesheet_directory() . '/dist/global.js' ) );

		// JS
		wp_enqueue_script(
			'lite-youtube',
			get_template_directory_uri() . '/dist/vendors/lite-youtube.js',
			array(),
			$modified_scripts,
			array( 'strategy' => 'defer' ),
		);

		wp_enqueue_script(
			'bootstrap',
			get_template_directory_uri() . '/dist/vendors/bootstrap.js',
			array(),
			$modified_scripts,
			array( 'strategy' => 'defer' ),
		);

		wp_enqueue_script(
			'fontawesome',
			get_template_directory_uri() . '/dist/vendors/fontawesome.js',
			array(),
			'1.0',
			array( 'strategy' => 'async' ),
		);
		wp_enqueue_script(
			'main',
			get_template_directory_uri() . '/dist/global.js',
			array( 'bootstrap', 'lite-youtube' ),
			$modified_scripts,
			true
		);

		// CSS
		wp_enqueue_style(
			'lite-youtube',
			get_template_directory_uri() . '/dist/vendors/lite-youtube.css',
			array(),
			'1.0'
		);
		wp_enqueue_style(
			'vendors',
			get_template_directory_uri() . '/dist/vendors/vendors.css',
			array(),
			'1.0'
		);

		wp_enqueue_style(
			'main',
			get_template_directory_uri() . '/dist/global.css',
			array( 'vendors', 'lite-youtube' ),
			$modified_styles
		);

		wp_localize_script(
			'main',
			'k1SiteData',
			array( 'rootUrl' => home_url() )
		);

		$this->remove_wordpress_styles( array( 'classic-theme-styles', 'dashicons', 'global-styles' ) );
	}

	/** Handle Theme Supports */
	public function k1_theme_supports() {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'responsive-embeds' );
	}

	public function register_k1_menus() {
		register_nav_menus(
			array(
				'primary_menu' => __( 'Primary Menu', 'k1' ),
				'mobile_menu'  => __( 'Mobile Menu', 'k1' ),
				'footer_menu'  => __( 'Footer Menu', 'k1' ),
			)
		);
	}
}
