<?php
/**
 * 404 Template
 *
 *
 * @package WordPress
 * @subpackage WordPress_Starter_Theme
 * @since WordPress Starter Theme 1.0
 */

get_header(); ?>

<main class="main">
	<section class="posts">
		<article id="post-error" class="post-error post">
			<h1 class="post-title"><?php echo __( 'Error', 'wordpressstartertheme' ); ?></h1>
			<p><?php echo __( 'We are sorry but the page you are looking for could not be found.', 'wordpressstartertheme' ); ?></p>
		</article>
	</section>
	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
