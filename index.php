<?php
/**
 * Main Template
 *
 *
 * @package WordPress
 * @subpackage WordPress_Starter_Theme
 * @since WordPress Starter Theme 1.0
 */

get_header(); ?>

<main class="main">
	<section class="posts">
		<header class="posts-header">
			<?php if ( is_home() && get_option('page_for_posts') ) : ?>
				<h1 class="posts-title"><?php echo get_page(get_option('page_for_posts'))->post_title; ?></h1>
			<?php else : ?>
				<h1 class="posts-title"><?php echo __( 'Posts', 'wordpressstartertheme' ); ?>
			<?php endif; ?>
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
