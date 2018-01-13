<?php
/**
 * Page Template
 *
 *
 * @package WordPress
 * @subpackage WordPress_Starter_Theme
 * @since WordPress Starter Theme 1.0
 */

get_header(); ?>

<main class="main">
	<section class="posts">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>
	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
