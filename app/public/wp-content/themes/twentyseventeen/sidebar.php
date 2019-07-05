<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
if (is_shop() && !is_active_sidebar('shop-sidebar-1')) {
	return;
}else if ( !is_shop() && ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'twentyseventeen' ); ?>">
	<?php
	if (is_shop()) {
		dynamic_sidebar( 'shop-sidebar-1' );
	}else {
		dynamic_sidebar( 'sidebar-1' );
	}

	?>
</aside><!-- #secondary -->
