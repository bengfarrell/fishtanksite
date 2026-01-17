<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

<div id="container" class="row">
<div id="primary" class="large-7 medium-9 small-11 small-centered columns">
	
	<?php while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('articlebox post-1505 page type-page status-publish hentry'); ?>>
			<header class="entry-header entry-header-single">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
		</article>
	<?php endwhile; ?>
	
</div><!-- #primary -->
</div>

<?php get_footer(); ?>

