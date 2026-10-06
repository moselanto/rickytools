<?php
/**
 * Ricky Tools Child - functions.
 *
 * Everything site-specific belongs here so that updating the parent theme
 * (ricky-tools) never overwrites your changes.
 *
 * @package RickyToolsChild
 */

declare( strict_types = 1 );

defined( 'ABSPATH' ) || exit;

/**
 * Load child translations (languages/ in this folder).
 */
add_action(
	'after_setup_theme',
	static function (): void {
		load_child_theme_textdomain( 'ricky-tools-child', get_stylesheet_directory() . '/languages' );
	}
);

/**
 * Enqueue the child stylesheet after the parent design system
 * (assets/css/theme.min.css, registered by the parent as the "ricky-theme" handle).
 * The file modification time is used as the version so edits bust caches instantly.
 */
add_action(
	'wp_enqueue_scripts',
	static function (): void {
		$file = get_stylesheet_directory() . '/style.css';
		wp_enqueue_style(
			'ricky-tools-child',
			get_stylesheet_uri(),
			array( 'ricky-theme' ),
			file_exists( $file ) ? (string) filemtime( $file ) : (string) wp_get_theme()->get( 'Version' )
		);
	},
	30
);

/*
 * Example overrides (uncomment and edit):
 *
 * // Change which categories get a product row on the homepage (order matters).
 * add_filter( 'ricky_homepage_categories', static function (): array {
 *     return array( 'power-tools', 'generators', 'solar-panels', 'water-pumps', 'welding-machines', 'air-compressors' );
 * } );
 *
 * // Override any parent template: copy it into this folder keeping the same path,
 * // e.g. template-parts/hero.php or woocommerce/content-product.php, then edit the copy.
 */
