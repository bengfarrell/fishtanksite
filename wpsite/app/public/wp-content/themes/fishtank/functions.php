<?php
/**
 * Fish Tank Theme Functions
 */

// Theme setup
function fishtank_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'fishtank'),
    ));
}
add_action('after_setup_theme', 'fishtank_theme_setup');

// Enqueue styles and scripts
function fishtank_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style('fishtank-fonts', 'https://fonts.googleapis.com/css2?family=Rock+Salt&family=Raleway:wght@300;400;600;700&display=swap', array(), null);

    // Main stylesheet
    wp_enqueue_style('fishtank-style', get_template_directory_uri() . '/assets/css/index.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'fishtank_enqueue_assets');

// Add custom body classes
function fishtank_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'page-home';
    } else {
        $classes[] = 'page-other';
    }
    return $classes;
}
add_filter('body_class', 'fishtank_body_classes');

// Custom excerpt length
function fishtank_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'fishtank_excerpt_length');

// Get metadata helper
function fishtank_get_metadata($key = '') {
    $metadata = array(
        'title' => get_bloginfo('name'),
        'description' => get_bloginfo('description'),
        'url' => home_url(),
        'image' => get_template_directory_uri() . '/assets/images/hero-painting.jpg'
    );

    if ($key && isset($metadata[$key])) {
        return $metadata[$key];
    }

    return $metadata;
}

// Register widget areas
function fishtank_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'fishtank'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'fishtank'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'fishtank_widgets_init');

// Custom gallery shortcode to match your design
function custom_gallery_shortcode($attr) {
    $attr = shortcode_atts(array(
        'ids' => '',
        'include' => '',
        'exclude' => '',
        'id' => ''
    ), $attr);

    // Get images based on parameters
    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'posts_per_page' => -1,
        'post_status' => 'inherit'
    );

    if (!empty($attr['ids'])) {
        $args['post__in'] = explode(',', $attr['ids']);
    } elseif ($attr['id'] === '0') {
        // Show all images when id="0"
        // No additional filters needed
    } else {
        // Default WordPress behavior - show images attached to current post
        $args['post_parent'] = get_the_ID();
    }

    $images = get_posts($args);

    if (!$images) return '';

    $output = '<div class="gallery-tight">';
    foreach($images as $image) {
        $img_url = wp_get_attachment_url($image->ID);
        $alt_text = get_post_meta($image->ID, '_wp_attachment_image_alt', true);
        $title = $image->post_title ?: $alt_text ?: 'Untitled';
        $output .= '<a href="' . esc_url($img_url) . '" target="_blank" data-title="' . esc_attr($title) . '">';
        $output .= '<img src="' . esc_url($img_url) . '" alt="' . esc_attr($alt_text) . '" />';
        $output .= '</a>';
    }
    $output .= '</div>';

    return $output;
}
add_shortcode('gallery', 'custom_gallery_shortcode');

// Enable custom fields for attachments/media
function add_attachment_custom_fields() {
    add_meta_box(
        'attachment-custom-fields',
        'Gallery Categories',
        'attachment_custom_fields_callback',
        'attachment',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes_attachment', 'add_attachment_custom_fields');

// Display custom fields form for attachments
function attachment_custom_fields_callback($post) {
    wp_nonce_field('attachment_custom_fields_nonce', 'attachment_custom_fields_nonce');

    $gallery_category = get_post_meta($post->ID, 'gallery_category', true);

    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="gallery_category">Gallery Category:</label></th>';
    echo '<td>';
    echo '<select name="gallery_category" id="gallery_category">';
    echo '<option value="">None</option>';
    echo '<option value="latest"' . selected($gallery_category, 'latest', false) . '>Latest Work</option>';
    echo '<option value="portfolio"' . selected($gallery_category, 'portfolio', false) . '>Full Gallery</option>';
    echo '<option value="latest,portfolio"' . selected($gallery_category, 'latest,portfolio', false) . '>Both Sections</option>';
    echo '</select>';
    echo '<p class="description">Choose where this image should appear in the portfolio.</p>';
    echo '</td>';
    echo '</tr>';
    echo '</table>';
}

// Save custom fields for attachments
function save_attachment_custom_fields($post_id) {
    if (!isset($_POST['attachment_custom_fields_nonce']) ||
        !wp_verify_nonce($_POST['attachment_custom_fields_nonce'], 'attachment_custom_fields_nonce')) {
        return;
    }

    if (isset($_POST['gallery_category'])) {
        update_post_meta($post_id, 'gallery_category', sanitize_text_field($_POST['gallery_category']));
    }
}
add_action('edit_attachment', 'save_attachment_custom_fields');
