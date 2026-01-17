<?php
/**
 * The front page template file
 */

get_header(); ?>

<section class="big-logo-hero">
	<div class="logo-wordmark">
		<img width="400" src="<?php echo get_template_directory_uri(); ?>/assets/images/fishtank-logo.svg" alt="Fish Tank Logo">
	</div>
	<div class="hero-cta-buttons">
		<a href="<?php echo esc_url(home_url('/portfolio/')); ?>" class="button">View Portfolio</a>
		<a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button button-outline">Contact Us</a>
	</div>
</section>

<section class="section-coral">
	<div class="container">
		<div class="two-column">
			<div class="column-image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/jellyfish-hell.jpg" alt="Jellyfish Hell artwork" />
			</div>
			<div class="column-content">
				<h2>Mixed Media Madness</h2>
				<p>I use many different mediums, such as oils, tattoo ink, spray paint, acrylics, and water colors. I'm a shiny squirrel kinda gal, all the mediums, at any point. No rhyme, no reason, just beautiful chaos!</p>
				<a href="<?php echo esc_url(home_url('/portfolio/')); ?>" class="button button-outline">See My Work</a>
			</div>
		</div>
	</div>
</section>

<section class="section-teal">
	<div class="container">
		<h2 class="section-title">Win a Free Painting!</h2>
		<p class="section-subtitle">Shoot us an email for your chance to win a free painting!</p>
		<a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button button-light">Enter to Win</a>
	</div>
</section>

<section class="section-light">
	<div class="container">
		<h2 class="section-title">Featured Works</h2>
		<div class="featured-grid">
			<div class="featured-item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/blood-moon-falls.jpg" alt="Blood Moon Falls" />
			</div>
			<div class="featured-item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/lg-moonlite-bridge.jpg" alt="Moonlit Bridge" />
			</div>
			<div class="featured-item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/water-seahorse.jpg" alt="Water Seahorse" />
			</div>
			<div class="featured-item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/spooky-moon.jpg" alt="Spooky Moon" />
			</div>
		</div>
		<div class="view-more-center">
			<a href="<?php echo esc_url(home_url('/portfolio/')); ?>" class="button">View All Artwork</a>
		</div>
	</div>
</section>

<section class="section-yellow">
	<div class="container">
		<div class="two-column reverse">
			<div class="column-content">
				<h2>About the Artist</h2>
				<p>A little bit like Mary Poppins, if she swore, had tattoos, smoked pot and had a pet ewok.</p>
				<p>I love my grandbabies, furbabies, human babies, family, and husband. In various order from day to day.</p>
				<p>I Love, Love, Love positive energies and random acts of kindness, putting love in the universe and complementing beautiful people.</p>
				<p><em>"Try to leave the earth a better place than you found it."</em></p>
			</div>
			<div class="column-image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/clouds.jpg" alt="Clouds artwork" />
			</div>
		</div>
	</div>
</section>

<section class="section-dark">
	<div class="container">
		<h2 class="section-title">My Inspirations</h2>
		<p class="section-content-centered">Are everywhere! I can find inspiration in a dream or a T.V. show. I have always been inspired by nature and animals. Waterfalls, space, and ocean themes are very common in my work. I seem to find a lot of commonality with people in the more nightmare or dark side of my expression. Take that for what it's worth. Music is always, and will always, be the backbeat and driving force behind the finish of any inspired idea I have.</p>
	</div>
</section>

<?php get_footer(); ?>

