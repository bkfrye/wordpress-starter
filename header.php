<?php
/**
 * Header Template
 *
 *
 * @package WordPress
 * @subpackage WordPress_Starter_Theme
 * @since WordPress Starter Theme 1.0
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<h1 class="logo">
			<a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<?php if ( get_bloginfo( 'description', 'display' ) ) : ?>
			<p class="site-description"><?php echo bloginfo( 'description', 'display' ); ?></p>
		<?php endif; ?>
		<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
			<?php wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container' => 'nav',
				'container_class' => 'header-menu',
				'container_id' => false,
				'menu_class' => 'header-menu-list',
				'menu_id' => false,
			) ); ?>
		<?php endif; ?>
	</header>
