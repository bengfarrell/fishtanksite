# Fish Tank WordPress Theme

A custom WordPress theme converted from the static Fish Tank art portfolio site.

## Installation Instructions

### 1. Copy Theme to WordPress

1. Open Local by Flywheel and locate your `wpsite` installation
2. Navigate to the WordPress themes directory:
   ```
   wpsite/app/public/wp-content/themes/
   ```
3. Copy the entire `fishtank` folder from this `wordpress-theme` directory into the themes folder
4. The final path should be: `wpsite/app/public/wp-content/themes/fishtank/`

### 2. Activate the Theme

1. Log into your WordPress admin dashboard (usually at `http://wpsite.local/wp-admin`)
2. Go to **Appearance > Themes**
3. Find the "Fish Tank" theme
4. Click **Activate**

### 3. Set Up Pages

Create the following pages in WordPress:

1. **Home Page**
   - Go to **Pages > Add New**
   - Title: "Home"
   - Leave content empty (uses front-page.php template)
   - Publish

2. **Portfolio Page**
   - Go to **Pages > Add New**
   - Title: "Portfolio"
   - Under **Page Attributes**, select **Template**: "Portfolio"
   - Add any intro text if desired
   - Publish

3. **Contact Page**
   - Go to **Pages > Add New**
   - Title: "Contact"
   - Under **Page Attributes**, select **Template**: "Contact"
   - Add your contact information
   - Publish

### 4. Set Front Page

1. Go to **Settings > Reading**
2. Under "Your homepage displays", select **A static page**
3. Set **Homepage** to the "Home" page you created
4. Set **Posts page** to a page called "Blog" (or leave unset if not using blog)
5. Click **Save Changes**

### 5. Configure Site Settings

1. Go to **Settings > General**
2. Update:
   - **Site Title**: "Art from the Attention Defected"
   - **Tagline**: Add your site description
3. Save Changes

### 6. Optional Plugins

For enhanced functionality, consider installing:

1. **Contact Form 7** - For the contact page form
   - Go to **Plugins > Add New**
   - Search for "Contact Form 7"
   - Install and activate
   - Create a new form and add the shortcode to your contact page

2. **Yoast SEO** - For better SEO control
3. **WP Smush** - For image optimization

## Theme Features

- ✅ Fully responsive design
- ✅ Custom front page template matching original design
- ✅ Portfolio gallery template
- ✅ Contact page template
- ✅ SEO-friendly meta tags
- ✅ All original CSS and styling preserved
- ✅ Social media icons in footer

## Theme Structure

```
fishtank/
├── style.css          # Theme metadata
├── functions.php      # Theme setup and functions
├── header.php         # Site header
├── footer.php         # Site footer with social links
├── index.php          # Blog/archive template
├── page.php           # Default page template
├── front-page.php     # Home page template
├── template-portfolio.php  # Portfolio template
├── template-contact.php    # Contact template
├── assets/
│   ├── css/          # Stylesheets
│   ├── images/       # All images including portfolio
│   └── font/         # Custom fonts
└── README.md         # This file
```

## Customization

### Changing Colors

Edit the CSS in `assets/css/index.css` to customize colors, fonts, and layouts.

### Updating Social Links

Edit `footer.php` to update social media links:
- Facebook
- Instagram
- Twitter
- YouTube

### Adding Portfolio Images

To add new portfolio images:
1. Upload images to `assets/images/portfolio/`
2. Edit `template-portfolio.php` and add the new image to the `$portfolio_images` array

## Support

For theme support or customization help, please contact the theme developer.

## Credits

- Original Design: The Fish Tank
- WordPress Conversion: Custom development
- Fonts: Google Fonts (Rock Salt, Raleway)

---

© 2025 The Fish Tank - All Rights Reserved

