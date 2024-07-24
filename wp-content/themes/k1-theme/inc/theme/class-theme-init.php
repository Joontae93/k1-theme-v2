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
	/** Loads files & hooks callbacks into WP Hooks */
	public function __construct() {
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
		require_once get_theme_file_path( '/inc/acf/class-acf-image.php' );
		require_once get_theme_file_path( '/inc/acf/class-project-progress.php' );
	}

	/**
	 * Adds scripts with the appropriate dependencies
	 */
	public function enqueue_k1_scripts() {
		$lite_yt = require_once get_template_directory() . '/dist/vendors/lite-youtube.asset.php';
		wp_enqueue_style(
			'lite-youtube',
			get_template_directory_uri() . '/dist/vendors/lite-youtube.css',
			array(),
			$lite_yt['version'],
		);
		wp_enqueue_script(
			'lite-youtube',
			get_template_directory_uri() . '/dist/vendors/lite-youtube.js',
			array(),
			$lite_yt['version'],
			array( 'strategy' => 'defer' ),
		);

		$fonts = require_once get_template_directory() . '/dist/vendors/fonts.asset.php';
		wp_enqueue_style(
			'fonts',
			get_template_directory_uri() . '/dist/vendors/fonts.css',
			array(),
			$fonts['version'],
		);

		$bootstrap = require_once get_template_directory() . '/dist/vendors/bootstrap.asset.php';
		wp_enqueue_style(
			'bootstrap',
			get_template_directory_uri() . '/dist/vendors/bootstrap.css',
			array(),
			$bootstrap['version'],
		);
		wp_enqueue_script(
			'bootstrap',
			get_template_directory_uri() . '/dist/vendors/bootstrap.js',
			array(),
			$bootstrap['version'],
			array( 'strategy' => 'defer' ),
		);

		$fontawesome = require_once get_template_directory() . '/dist/vendors/fontawesome.asset.php';
		wp_enqueue_script(
			'fontawesome',
			get_template_directory_uri() . '/dist/vendors/fontawesome.js',
			array(),
			$fontawesome['version'],
			array( 'strategy' => 'async' ),
		);
		$main_asset = require_once get_template_directory() . '/dist/global.asset.php';
		wp_enqueue_script(
			'kingdom-one-global',
			get_template_directory_uri() . '/dist/global.js',
			array( 'bootstrap', 'lite-youtube' ),
			$main_asset['version'],
			array( 'strategy' => 'defer' ),
		);
		wp_enqueue_style(
			'kingdom-one-global',
			get_template_directory_uri() . '/dist/global.css',
			array( 'bootstrap', 'lite-youtube' ),
			$main_asset['version'],
		);

		wp_localize_script(
			'kingdom-one-global',
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

	/** Register Menus */
	public function register_k1_menus() {
		register_nav_menus(
			array(
				'primary_menu'  => __( 'Primary Menu', 'k1' ),
				'footer_menu_1' => __( 'Footer Menu 1', 'k1' ),
				'footer_menu_2' => __( 'Footer Menu 2', 'k1' ),
				'footer_menu_3' => __( 'Footer Menu 3', 'k1' ),
			)
		);
	}
}
