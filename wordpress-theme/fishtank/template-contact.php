<?php
/**
 * Template Name: Contact
 * Description: Contact page template
 */

get_header(); ?>

<div id="container" class="row">
<div id="primary" class="large-7 medium-9 small-11 small-centered columns">
	
	<?php while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('articlebox'); ?>>
			<header class="entry-header entry-header-single">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
				
				<!-- Contact Form -->
				<div class="contact-form-container">
					<?php
					// Check if Contact Form 7 is installed
					if (shortcode_exists('contact-form-7')) {
						echo do_shortcode('[contact-form-7 id="1" title="Contact form 1"]');
					} else {
						// Fallback form HTML
						?>
						<form class="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
							<input type="hidden" name="action" value="contact_form_submission">
							<?php wp_nonce_field('contact_form', 'contact_form_nonce'); ?>
							
							<div class="form-group">
								<label for="name">Name *</label>
								<input type="text" id="name" name="name" required>
							</div>
							
							<div class="form-group">
								<label for="email">Email *</label>
								<input type="email" id="email" name="email" required>
							</div>
							
							<div class="form-group">
								<label for="subject">Subject</label>
								<input type="text" id="subject" name="subject">
							</div>
							
							<div class="form-group">
								<label for="message">Message *</label>
								<textarea id="message" name="message" rows="6" required></textarea>
							</div>
							
							<button type="submit" class="button">Send Message</button>
						</form>
						
						<p class="contact-note"><strong>Note:</strong> For full contact form functionality, please install the <a href="<?php echo admin_url('plugin-install.php?s=contact+form+7&tab=search'); ?>">Contact Form 7</a> plugin.</p>
						<?php
					}
					?>
				</div>
			</div><!-- .entry-content -->
		</article>
	<?php endwhile; ?>
	
</div><!-- #primary -->
</div>

<style>
.contact-form-container {
	margin-top: 2rem;
}

.contact-form .form-group {
	margin-bottom: 1.5rem;
}

.contact-form label {
	display: block;
	margin-bottom: 0.5rem;
	font-weight: 600;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
	width: 100%;
	padding: 0.75rem;
	border: 1px solid #ddd;
	border-radius: 4px;
	font-family: inherit;
}

.contact-form textarea {
	resize: vertical;
}

.contact-note {
	margin-top: 2rem;
	padding: 1rem;
	background: #f0f0f0;
	border-left: 4px solid #0073aa;
}
</style>

<?php get_footer(); ?>

