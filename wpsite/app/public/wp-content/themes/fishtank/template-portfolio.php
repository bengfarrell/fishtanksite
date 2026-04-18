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

                <?php
                // Display user's custom content (including gallery shortcodes)
                the_content();
                ?>

                <div class="portfolio-latest-section">
                    <h2>Latest Work</h2>
                    <div class="latest-work-grid">
                        <?php
                        // Get images with "latest" in custom field
                        $latest_args = array(
                            'post_type' => 'attachment',
                            'post_mime_type' => 'image',
                            'posts_per_page' => -1,
                            'post_status' => 'inherit',
                            'meta_query' => array(
                                array(
                                    'key' => 'gallery_category',
                                    'value' => 'latest',
                                    'compare' => 'LIKE'
                                )
                            )
                        );
                        $latest_images = get_posts($latest_args);

                        if ($latest_images) {
                            foreach($latest_images as $image) {
                                $img_url = wp_get_attachment_url($image->ID);
                                $alt_text = get_post_meta($image->ID, '_wp_attachment_image_alt', true);
                                $title = $image->post_title ?: $alt_text ?: 'Untitled';
                                echo '<a href="' . esc_url($img_url) . '" target="_blank" class="latest-item" data-title="' . esc_attr($title) . '">';
                                echo '<img src="' . esc_url($img_url) . '" alt="' . esc_attr($alt_text) . '" />';
                                echo '</a>';
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="portfolio-gallery-section">
                    <h2>Full Gallery</h2>
                    <div class="gallery-tight">
                        <?php
                        // Get images with "portfolio" in custom field
                        $portfolio_args = array(
                            'post_type' => 'attachment',
                            'post_mime_type' => 'image',
                            'posts_per_page' => -1,
                            'post_status' => 'inherit',
                            'meta_query' => array(
                                array(
                                    'key' => 'gallery_category',
                                    'value' => 'portfolio',
                                    'compare' => 'LIKE'
                                )
                            )
                        );
                        $portfolio_images = get_posts($portfolio_args);

                        if ($portfolio_images) {
                            foreach($portfolio_images as $image) {
                                $img_url = wp_get_attachment_url($image->ID);
                                $alt_text = get_post_meta($image->ID, '_wp_attachment_image_alt', true);
                                $title = $image->post_title ?: $alt_text ?: 'Untitled';
                                echo '<a href="' . esc_url($img_url) . '" target="_blank" data-title="' . esc_attr($title) . '">';
                                echo '<img src="' . esc_url($img_url) . '" alt="' . esc_attr($alt_text) . '" />';
                                echo '</a>';
                            }
                        }
                        ?>
                    </div>
                </div>

            </div><!-- .entry-content -->
        </article>
    <?php endwhile; ?>

</div><!-- #primary -->
</div>

<?php get_footer(); ?>
