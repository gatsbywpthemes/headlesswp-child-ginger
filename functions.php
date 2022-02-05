<?php
/**
 * Enqueue styles.
 */

add_action(
	'wp_enqueue_scripts',
	function () {
		$parenthandle = 'headlesswp-style';
		$theme        = wp_get_theme();
		wp_enqueue_style(
			$parenthandle,
			get_template_directory_uri() . '/style.css',
			array(),
			$theme->parent()->get( 'Version' )
		);
		wp_enqueue_style(
			'headlesswp-style-child-style',
			get_stylesheet_uri(),
			array( $parenthandle ),
			$theme->get( 'Version' )
		);
	}
);

/**
 * CUSTOMIZATION
 */


/**
 * Maybe override templates - by default there are  Full Width (full), Right Sidebar (right) and Left Sidebar (left) for pages and same for posts
 */

// Modify ./config/custom-templates.php and uncomment the line below
require_once get_stylesheet_directory() . '/config/custom-templates.php';

/**
 * Maybe override required and recommended plugins
 */

// Modify ./config/headlesswp-plugins.php and uncomment the line below
// include_once get_stylesheet_directory() . '/config/headlesswp-plugins.php';

/**
 * Maybe override widget areas
 */

// Modify ./config/custom-templates.php and uncomment the line below
require_once get_stylesheet_directory() . '/config/widget-areas.php';




require get_template_directory() . '/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://headlesswp-archive.netlify.app/headlesswp-child-ginger.json',
	__FILE__,
	'headlesswp-child-ginger'
);