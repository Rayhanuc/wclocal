<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */
if (is_shop()) {
	$understrap_sidebar = 'shop-right-sidebar';
}else {
	$understrap_sidebar = 'right-sidebar';
}
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( $understrap_sidebar ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
<?php else : ?>
	<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
<?php endif; ?>
<?php dynamic_sidebar( $understrap_sidebar ); ?>

</div><!-- #right-sidebar -->
