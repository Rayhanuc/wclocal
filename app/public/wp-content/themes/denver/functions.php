<?php
/**
 * Denver functions and definitions
 *
 * @package denver
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$denver_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $denver_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}




function denver_loop_shop_columns($number_of_columns){
	return 3;
}
add_filter('loop_shop_columns','denver_loop_shop_columns');


// কোন প্রোডাক্ট বাদ দেয়া।
/*function denver_woocommerce_product_query($wq){
	$wq->set('post__not_in',array(21,22,14));
	return $wq;
}
add_filter('woocommerce_product_query','denver_woocommerce_product_query');*/