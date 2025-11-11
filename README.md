# The Fish Tank

A website for "The Fish Tank" - Art from the Attention Defected

## About

This is a portfolio and business website for a mixed media artist who works with oils, tattoo ink, spray paint, acrylics, and water colors. The site showcases the artist's work and provides a way for potential clients to get in touch for commissions or purchases.

## Technology

Built with [Eleventy (11ty)](https://www.11ty.dev/), a simple static site generator.

## Getting Started

### Prerequisites

- Node.js 14 or higher

### Installation

```bash
npm install
```

### Development

To run the development server:

```bash
npm start
```

The site will be available at `http://localhost:8080`

### Building

To build the site for production:

```bash
npm run build
```

The built site will be in the `_site` directory.

## Site Structure

- **Home** (`/`) - Hero section with artist bio, medium info, and inspirations
- **Portfolio** (`/portfolio/`) - Gallery of artwork (to be populated)
- **Contact** (`/contact/`) - Contact information and commission inquiries

## Customization

### Colors

The site uses CSS custom properties for theming. Main colors can be adjusted in `/public/css/index.css`:

```css
:root {
	--fishtank-primary: #2a9d8f;    /* Teal */
	--fishtank-secondary: #e76f51;  /* Coral */
	--fishtank-accent: #f4a261;     /* Orange */
	--fishtank-dark: #264653;       /* Dark blue-gray */
	--fishtank-light: #e9c46a;      /* Yellow */
}
```

### Content

- Edit page content in the `content/` directory
- Main layout files are in `_includes/layouts/`
- Site metadata (title, description, etc.) is in `_data/metadata.js`

## Deployment

This site can be deployed to:
- Netlify
- Vercel
- GitHub Pages
- Any static hosting service

See the `netlify.toml` file for Netlify configuration.

## License

MIT
