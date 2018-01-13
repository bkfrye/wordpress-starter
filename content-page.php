<?php
/**
 * Page Content Template
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
	<?php the_content(); ?>
	<?php comments_template(); ?>
</article>
