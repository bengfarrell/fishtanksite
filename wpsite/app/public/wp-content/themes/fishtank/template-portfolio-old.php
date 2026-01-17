<?php
/**
 * Template Name: Portfolio
 * Description: Portfolio gallery page template
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
				
				<div class="portfolio-intro-section">
					<h2>My Artwork</h2>
					<p>Welcome to my portfolio! Here you'll find a collection of my mixed media artwork. I work with oils, tattoo ink, spray paint, acrylics, and water colors to create pieces inspired by nature, space, ocean themes, and the darker corners of imagination.</p>
					
					<p>I'm always excited to work on new projects! Whether you have a specific vision in mind or want to collaborate on something unique, I'd love to hear from you. Nature, waterfalls, space, and ocean themes are my specialty, but I'm open to exploring new ideas.</p>
					
					<p><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button">Commission a Piece</a></p>
				</div>

				<div class="portfolio-latest-section">
					<h2>Latest Work</h2>
					<div class="latest-work-grid">
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/jellyfish-hell.jpg" target="_blank" class="latest-item" data-title="Jellyfish Hell">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/jellyfish-hell.jpg" alt="Jellyfish Hell" />
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/blood-moon-falls.jpg" target="_blank" class="latest-item" data-title="Blood Moon Falls">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/blood-moon-falls.jpg" alt="Blood Moon Falls" />
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/lg-moonlite-bridge.jpg" target="_blank" class="latest-item" data-title="Moonlit Bridge">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/lg-moonlite-bridge.jpg" alt="Moonlit Bridge" />
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/water-seahorse.jpg" target="_blank" class="latest-item" data-title="Water Seahorse">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/water-seahorse.jpg" alt="Water Seahorse" />
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/santa-muerte.jpg" target="_blank" class="latest-item" data-title="Santa Muerte">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/santa-muerte.jpg" alt="Santa Muerte" />
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/spooky-moon.jpg" target="_blank" class="latest-item" data-title="Spooky Moon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/spooky-moon.jpg" alt="Spooky Moon" />
						</a>
					</div>
				</div>

				<div class="portfolio-gallery-section">
					<h2>Full Gallery</h2>
					<div class="gallery-tight">
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/blood-moon-falls.jpg" target="_blank" data-title="Blood Moon Falls"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/blood-moon-falls.jpg" alt="Blood Moon Falls" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/bridge.jpg" target="_blank" data-title="Bridge"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/bridge.jpg" alt="Bridge" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/ceiling-wax.jpg" target="_blank" data-title="Ceiling Wax"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/ceiling-wax.jpg" alt="Ceiling Wax" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/clouds.jpg" target="_blank" data-title="Clouds"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/clouds.jpg" alt="Clouds" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/delilah.jpg" target="_blank" data-title="Delilah"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/delilah.jpg" alt="Delilah" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/dragoon.jpg" target="_blank" data-title="Dragoon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/dragoon.jpg" alt="Dragoon" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/dream-storm.jpg" target="_blank" data-title="Dream Storm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/dream-storm.jpg" alt="Dream Storm" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/flowers-water.jpg" target="_blank" data-title="Flowers Water"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/flowers-water.jpg" alt="Flowers Water" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/jack-moon-pship.jpg" target="_blank" data-title="Jack Moon Pirate Ship"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/jack-moon-pship.jpg" alt="Jack Moon Pirate Ship" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/jellyfish-hell.jpg" target="_blank" data-title="Jellyfish Hell"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/jellyfish-hell.jpg" alt="Jellyfish Hell" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/lg-flower.jpg" target="_blank" data-title="Large Flower"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/lg-flower.jpg" alt="Large Flower" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/lg-long-wfall.jpg" target="_blank" data-title="Long Waterfall"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/lg-long-wfall.jpg" alt="Long Waterfall" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/lg-moonlite-bridge.jpg" target="_blank" data-title="Moonlit Bridge"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/lg-moonlite-bridge.jpg" alt="Moonlit Bridge" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/lg-spooky-graveyard.jpg" target="_blank" data-title="Spooky Graveyard"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/lg-spooky-graveyard.jpg" alt="Spooky Graveyard" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/lg-swamp.jpg" target="_blank" data-title="Swamp"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/lg-swamp.jpg" alt="Swamp" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/med-flowers.jpg" target="_blank" data-title="Medium Flowers"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/med-flowers.jpg" alt="Medium Flowers" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/record-clock.jpg" target="_blank" data-title="Record Clock"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/record-clock.jpg" alt="Record Clock" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/red-bird-clock.jpg" target="_blank" data-title="Red Bird Clock"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/red-bird-clock.jpg" alt="Red Bird Clock" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/santa-muerte.jpg" target="_blank" data-title="Santa Muerte"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/santa-muerte.jpg" alt="Santa Muerte" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/saw-blade-clock.jpg" target="_blank" data-title="Saw Blade Clock"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/saw-blade-clock.jpg" alt="Saw Blade Clock" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/shrooms.jpg" target="_blank" data-title="Mushrooms"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/shrooms.jpg" alt="Mushrooms" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-flower.jpg" target="_blank" data-title="Small Flower"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-flower.jpg" alt="Small Flower" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-forest-moon.jpg" target="_blank" data-title="Forest Moon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-forest-moon.jpg" alt="Forest Moon" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-moon-and-ship.jpg" target="_blank" data-title="Moon and Ship"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-moon-and-ship.jpg" alt="Moon and Ship" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-moonlite-bridge.jpg" target="_blank" data-title="Small Moonlit Bridge"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-moonlite-bridge.jpg" alt="Small Moonlit Bridge" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-space.jpg" target="_blank" data-title="Space"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-space.jpg" alt="Space" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-sunset-bridge.jpg" target="_blank" data-title="Sunset Bridge"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-sunset-bridge.jpg" alt="Sunset Bridge" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-tortoise.jpg" target="_blank" data-title="Tortoise"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-tortoise.jpg" alt="Tortoise" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-white-flowers.jpg" target="_blank" data-title="White Flowers"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm-white-flowers.jpg" alt="White Flowers" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/spooky-moon.jpg" target="_blank" data-title="Spooky Moon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/spooky-moon.jpg" alt="Spooky Moon" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/starburst.jpg" target="_blank" data-title="Starburst"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/starburst.jpg" alt="Starburst" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sunfire.jpg" target="_blank" data-title="Sunfire"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sunfire.jpg" alt="Sunfire" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/water-seahorse.jpg" target="_blank" data-title="Water Seahorse"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/water-seahorse.jpg" alt="Water Seahorse" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/water-tiki.jpg" target="_blank" data-title="Water Tiki"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/water-tiki.jpg" alt="Water Tiki" /></a>
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/wide-wfall.jpg" target="_blank" data-title="Wide Waterfall"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/wide-wfall.jpg" alt="Wide Waterfall" /></a>
					</div>
				</div>

			</div><!-- .entry-content -->
		</article>
	<?php endwhile; ?>
	
</div><!-- #primary -->
</div>

<?php get_footer(); ?>
