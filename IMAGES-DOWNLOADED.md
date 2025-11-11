# Downloaded Images from The Fish Tank Website

All images have been successfully downloaded from https://thefishtank.godaddysites.com/

## Total Images: 37 files (27MB)

### Logo & Branding
- **logo.jpg** (53KB) - Site logo
  - Location: `/public/images/logo.jpg`

### Hero Image
- **hero-painting.jpg** (604KB) - Main featured artwork
  - Location: `/public/images/hero-painting.jpg`
  - Used on: Home page hero section background

### Portfolio Collection: 35 Artworks
All portfolio images are in `/public/images/portfolio/` (27MB total)

1. **blood-moon-falls.jpg** - Featured on home page
2. **bridge.jpg** - Featured on home page
3. **ceiling-wax.jpg**
4. **clouds.jpg** - Featured on home page
5. **delilah.jpg**
6. **dragoon.jpg**
7. **dream-storm.jpg**
8. **flowers-water.jpg**
9. **jack-moon-pship.jpg**
10. **jellyfish-hell.jpg** - Featured on home page
11. **lg-flower.jpg**
12. **lg-long-wfall.jpg**
13. **lg-moonlite-bridge.jpg** - Featured on home page
14. **lg-spooky-graveyard.jpg**
15. **lg-swamp.jpg**
16. **med-flowers.jpg**
17. **record-clock.jpg**
18. **red-bird-clock.jpg**
19. **santa-muerte.jpg**
20. **saw-blade-clock.jpg**
21. **shrooms.jpg**
22. **sm-flower.jpg**
23. **sm-forest-moon.jpg**
24. **sm-moon-and-ship.jpg**
25. **sm-moonlite-bridge.jpg**
26. **sm-space.jpg**
27. **sm-sunset-bridge.jpg**
28. **sm-tortoise.jpg**
29. **sm-white-flowers.jpg**
30. **spooky-moon.jpg**
31. **starburst.jpg**
32. **sunfire.jpg**
33. **water-seahorse.jpg** - Featured on home page
34. **water-tiki.jpg**
35. **wide-wfall.jpg**

## Page Layout

### Home Page (`/`)
- **Hero Section**: Background image (`hero-painting.jpg`) with color overlay
- **Win a Free Painting Promo Box**: Call-to-action section
- **Featured Works Gallery**: 6 selected pieces displayed in a grid:
  - Clouds
  - Bridge
  - Blood Moon Falls
  - Jellyfish Hell
  - Moonlit Bridge
  - Water Seahorse
- **About Sections**: Artist bio, medium, and inspirations

### Portfolio Page (`/portfolio/`)
- **Full Gallery**: All 35 artworks displayed in a responsive grid
- Each piece has:
  - Full image display
  - Title below the image
  - Hover effect that lifts the card
- **Commission CTA**: Call-to-action to contact for custom work

## Design Features

### Home Page Featured Gallery
- Responsive grid (adapts 1-6 columns based on screen size)
- Square aspect ratio for visual consistency
- Scale-up hover effect (1.05x)
- Clean shadows and rounded corners
- "View Full Portfolio" button

### Portfolio Page Gallery
- 3-column responsive grid (adapts to screen size)
- 300px fixed height images
- Lift-up hover effect (translateY -8px)
- Title cards below each image
- Professional card-based layout

## Adding More Images

To add new portfolio pieces:

1. **Download image** to `/public/images/portfolio/`
2. **Add to portfolio.md**:
```html
<div class="portfolio-item">
	<img src="/images/portfolio/new-image.jpg" alt="Title" />
	<h4>Title</h4>
</div>
```
3. **Optionally add to home page** featured gallery in `index.njk`
4. **Rebuild**: `npm run build`

## Notes

- All images maintain original quality
- Total portfolio size: 27MB (reasonable for web)
- Images use descriptive filenames with hyphens
- Responsive design works on all devices
- No JavaScript required for galleries

## Social Media

The footer includes links to all her social media accounts with custom SVG icons:

- **Facebook**: https://www.facebook.com/Attentiondefectedart
- **Instagram**: https://www.instagram.com/carlaartdozier
- **Twitter**: https://www.twitter.com/@TheFishTankArt
- **YouTube**: https://www.youtube.com/channel/UCCQqjjh6doT8Koc5GNROUtw

Icons have hover effects that:
- Change color to the accent yellow
- Lift up slightly (translateY)
- Smooth 0.3s transition

## Copyright

All artwork belongs to the artist. Images used with permission for the new website.
