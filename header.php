<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HenshinID
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="top-bar">
		  <div class="top-bar-left">
			  	<?php henshin_id_the_custom_logo(); ?>
			</div>
			<div class="top-bar-right">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'top-menu' ) ); ?>
		  </div>
		 </div>
	</header>
	<?php
    if ( is_home() ) {
      // Include the featured content template.
      get_template_part( 'components/features/featured-content/display', 'featured' );
    }
  ?>
	<div id="content" class="site-content row">
