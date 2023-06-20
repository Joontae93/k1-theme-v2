<?php // phpcs:ignore
class Theme_Init {
	// phpcs:ignore
	function __construct() {
		$this->load_files();
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_k1_scripts' ) );
		add_action( 'after_setup_theme', array( $this, 'register_k1_menus' ) );
		add_theme_support( 'post-thumbnails' );
		$this->disable_discussion();
		add_action( 'init', array( $this, 'alter_post_types' ) );
	}

	/** Loads required files */
	private function load_files() {
		require_once get_template_directory() . '/inc/component-classes/class-content-sections.php';
		require_once get_template_directory() . '/inc/class-k1-nav-walker.php';
		require_once get_template_directory() . '/inc/theme-functions.php';
	}
	/**
	 * Adds scripts with the appropriate dependencies
	 */
	public function enqueue_k1_scripts() {
		// Get modification time. Enqueue files with modification date to prevent browser from loading cached scripts and styles when file content changes.
		$modified_styles  = gmdate( 'YmdHi', filemtime( get_stylesheet_directory() . '/dist/global.css' ) );
		$modified_scripts = gmdate( 'YmdHi', filemtime( get_stylesheet_directory() . '/dist/global.js' ) );

		// JS
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/dist/vendors/bootstrap.js', array(), $modified_scripts, true );
		wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/dist/vendors/fontawesome.js', array(), '1.0', false );
		wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/global.js', array( 'bootstrap', 'fontawesome' ), $modified_scripts, true );

		// CSS
		wp_enqueue_style( 'vendors', get_template_directory_uri() . '/dist/vendors/vendors.css', array(), '1.0' );
		wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/global.css', array( 'vendors' ), $modified_styles );
		wp_localize_script( 'main', 'k1SiteData', array( 'rootUrl' => home_url() ) );

		$this->remove_wordpress_styles( array( 'classic-theme-styles', 'wp-block-library', 'dashicons', 'global-styles' ) );
	}

	/**
	 * Provide an array of handles to dequeue
	 *
	 * @param array $handles the handles of scripts to dequeue
	 */
	private function remove_wordpress_styles( array $handles ) {
		foreach ( $handles as $handle ) {
			wp_dequeue_style( $handle );
		}
	}

	public function register_k1_menus() {
		register_nav_menus(
			array(
				'primary_menu' => __( 'Primary Menu', 'cno' ),
				'mobile_menu'  => __( 'Mobile Menu', 'cno' ),
				'footer_menu'  => __( 'Footer Menu', 'cno' ),
			)
		);
	}
	public function alter_post_types() {
		$post_types = array( 'post', 'page' );
		foreach ( $post_types as $post_type ) {
			$this->disable_post_type_support( $post_type );
		}
	}
	public function disable_discussion() {
		// Close comments on the front-end
		add_filter( 'comments_open', '__return_false', 20, 2 );
		add_filter( 'pings_open', '__return_false', 20, 2 );

		// Hide existing comments
		add_filter( 'comments_array', '__return_empty_array', 10, 2 );

		// Remove comments page in menu
		add_action(
			'admin_menu',
			function () {
				remove_menu_page( 'edit-comments.php' );
			}
		);

		// Remove comments links from admin bar
		add_action(
			'init',
			function () {
				if ( is_admin_bar_showing() ) {
					remove_action( 'admin_bar_menu', 'wp_admin_bar_comments_menu', 60 );
				}
			}
		);
	}
	private function disable_post_type_support( $post_type ) {
		$supports = array( 'editor', 'comments', 'trackbacks', 'revisions', 'author' );
		foreach ( $supports as $support ) {
			if ( post_type_supports( $post_type, $support ) ) {
				remove_post_type_support( $post_type, $support );
			}
		}
	}
}