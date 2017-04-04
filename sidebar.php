<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HenshinID
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside id="secondary" class="widget-area medium-3 small-12 columns" role="complementary">
	<?php henshin_id_social_menu(); ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
