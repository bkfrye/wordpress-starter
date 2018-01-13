<?php
/**
 * Single Post Content Template
 *
 *
 * @package WordPress
 * @subpackage WordPress_Starter_Theme
 * @since WordPress Starter Theme 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail(); ?>
	<?php endif; ?>
	<h1 class="post-title"><?php the_title(); ?></h1>
	<p class="post-byline"><?php echo __( 'Written by', 'wordpressstartertheme' ); ?> <?php the_author_posts_link(); ?> <?php echo __( 'on', 'wordpressstartertheme' ); ?> <?php the_time( get_option( 'date_format' ) ); ?></p>
	<?php the_content(); ?>
	<ul class="post-meta">
		<li class="post-categories"><?php the_category( ', ' ); ?></li>
		<?php if ( has_tag() ) : ?>
			<li class="post-tags"><?php the_tags( false, ', '); ?></li>
		<?php endif; ?>
	</ul>
	<?php comments_template(); ?>
</article>
