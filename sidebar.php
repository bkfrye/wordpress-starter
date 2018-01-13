<?php
/**
 * Sidebar Template
 *
 *
 * @package WordPress
 * @subpackage WordPress_Starter_Theme
 * @since WordPress Starter Theme 1.0
 */

?>

<?php if ( is_active_sidebar( 'sidebar' )  ) : ?>
	<aside class="widgets">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</aside>
<?php endif; ?>
