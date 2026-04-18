<?php
/**
 * The main template file
 */

get_header(); ?>

<div id="container" class="row">
<div id="primary" class="large-7 medium-9 small-11 small-centered columns">
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('articlebox'); ?>>
				<header class="entry-header entry-header-single">
					<h1 class="entry-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h1>
				</header>
				<div class="entry-content">
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="button">Read More</a>
				</div>
			</article>
		<?php endwhile; ?>
		
		<?php the_posts_navigation(); ?>
		
	<?php else : ?>
		<article class="articlebox">
			<header class="entry-header">
				<h1 class="entry-title">Nothing Found</h1>
			</header>
			<div class="entry-content">
				<p>It seems we can't find what you're looking for.</p>
			</div>
		</article>
	<?php endif; ?>
	
</div><!-- #primary -->
</div>

<?php get_footer(); ?>

