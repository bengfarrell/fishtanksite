<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php
	// SEO meta tags
	$page_title = is_front_page() ? get_bloginfo('name') : wp_get_document_title();
	$page_description = is_front_page() ? get_bloginfo('description') : get_the_excerpt();
	$page_url = is_front_page() ? home_url() : get_permalink();
	$page_image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : get_template_directory_uri() . '/assets/images/hero-painting.jpg';
	?>

	<meta name="description" content="<?php echo esc_attr($page_description); ?>" />

	<link rel="canonical" href="<?php echo esc_url($page_url); ?>"/>
	<meta property="og:locale" content="en_US"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="<?php echo esc_attr($page_title); ?>"/>
	<meta property="og:description" content="<?php echo esc_attr($page_description); ?>"/>
	<meta property="og:url" content="<?php echo esc_url($page_url); ?>"/>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
	<meta property="og:image" content="<?php echo esc_url($page_image); ?>" />
	<meta name="twitter:card" content="summary_large_image"/>
	<meta name="twitter:description" content="<?php echo esc_attr($page_description); ?>"/>
	<meta name="twitter:title" content="<?php echo esc_attr($page_title); ?>"/>
	<meta name="twitter:image" content="<?php echo esc_url($page_image); ?>" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="top-menu" class="top-bar centered-nav" itemscope="itemscope">
	<nav class="main-nav" role="navigation">
		<ul class="nav-left">
			<li class="menu-item"><a href="<?php echo esc_url(home_url('/shop/')); ?>">Shop</a></li>
			<li class="menu-item">
					<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php _e( 'View your shopping cart', 'fishtank' ); ?>">My Cart<?php if ( WC()->cart->get_cart_contents_count() > 0 ) : ?>&nbsp(<?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?>)<?php endif; ?></a>
			</li>
		</ul>

	<div class="logo-center" itemscope="itemscope" role="banner">
		<a href="<?php echo esc_url(home_url('/')); ?>" title="Art from the Attention Defected">
			<h1 id="sitetitle">Art from the Attention Defected</h1>
		</a>
	</div>

		<ul class="nav-right">
			<li class="menu-item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
			<li class="menu-item"><a href="<?php echo esc_url(home_url('/portfolio/')); ?>">Portfolio</a></li>
		</ul>
	</nav>
</header>

<main id="skip">

