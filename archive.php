<?php
/**
 * Archive Template
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
			<h1 class="posts-title"><?php echo __( 'Archive', 'wordpressstartertheme' ); ?>: <?php
				if ( is_day() ) {
					echo get_the_date();
				} elseif ( is_month() ) {
					echo  get_the_date('F Y');
				} elseif ( is_year() ) {
					echo get_the_date('Y');
				}
			?></h1>
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
