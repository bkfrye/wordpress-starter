<?php
/**
 * Tag Template
 *
 * @package WordPress
 * @subpackage WordPress_Starter_Theme
 * @since WordPress Starter Theme 1.0
 */

get_header(); ?>

<main class="main">
	<section class="posts">
		<header class="posts-header">
			<h1 class="posts-title"><?php echo __( 'Tag', 'wordpressstartertheme' ); ?>: <?php single_tag_title(); ?></h1>
		</header>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
			<?php the_posts_pagination(); ?>
		<?php endif; ?>
	</section>
	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
