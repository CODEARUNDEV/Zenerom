# Zenerom UAE - Digital Growth & Marketing Agency Platform

A pixel-perfect, production-ready, fully responsive web application for **Zenerom UAE** ([https://zenerom.ae/](https://zenerom.ae/)), Dubai's premier digital growth, enterprise SEO, performance marketing, and bespoke technology agency headquartered at Burjuman Business Tower, Dubai, UAE.

---

## 🚀 How to Run the Website

Because this project is built using vanilla HTML5, CSS3, and JavaScript, it can be served using any local web server or viewed directly in modern browsers.

### Option 1: Built-in Node.js Static Server (Recommended)
This workspace includes a zero-dependency static server `server.js` configured with proper MIME types for MP4 video streaming, TTF fonts, and SVG icons.

```bash
# Start the local server
node server.js
```
Then open your browser at:
```
http://localhost:3333/
```

### Option 2: Apache / XAMPP
Since this project is located in `e:\xampp\htdocs\zenweb`, you can start the Apache server via the XAMPP Control Panel and navigate to:
```
http://localhost/zenweb/
```

### Option 3: Python HTTP Server
```bash
python -m http.server 3000
```
Then open `http://localhost:3000/`.

---

## 📁 Project Architecture & Asset Structure

The codebase is organized cleanly without bloated frameworks or chaotic inline code:

```
zenweb/
├── index.html                   # Homepage (Hero, Works, Services, FAQ, CTA, Footer)
├── about.html                   # About page (Video Hero, 3D Process, Journey Timeline, Team)
├── services.html                # Services page (Hero, 12-Service Catalog, Pillars, UAE Grid, FAQ)
├── seo-services-dubai.html      # Single Service Master Template (SEO Services in Dubai)
├── solutions.html               # Solutions page (Hero, Quick Chips, 6 Showcases, Matrix, Recommender, Blueprints, FAQ)
├── industries.html              # Industries page (Hero, 8 Sector Deep Dives, Real UAE Case Studies, Solution Finder)
├── work.html                    # Works & Case Studies page (Signature 2-column staggered grid, 13 case studies)
├── blog.html                    # Blog Hub page (72 authentic posts, search, 9 topic filters, pagination, quick-read modal)
├── blog-single.html             # Standalone Dynamic Article Reader (Dynamic Yoast SEO, Sticky TOC, related posts)
├── brand-guidelines.md          # Official Zenerom Brand Color Guidelines & Design System
├── server.js                    # Lightweight development HTTP server (port 3333)
├── .htaccess                    # Apache mod_rewrite clean URL routing configuration
│
├── data/
│   ├── blogs.json               # Scraped metadata & excerpts for all 72 blog posts (~55 KB)
│   └── blogs-full.json          # Scraped full HTML article bodies for all 72 blog posts (~1 MB)
│
├── css/
│   ├── style.css                # Typography (@font-face Inter Display), brand design tokens, flat card rules
│   ├── responsive.css           # Desktop, tablet (991px), and mobile (767px, 479px) media queries
│   ├── animations.css           # Keyframes, 3D card scroll-transforms, timeline styles, transitions
│   ├── services.css             # Dedicated stylesheet for Services catalog and emirate grids
│   ├── service-single.css       # Master stylesheet for single service templates & interactive tools
│   ├── solutions.css            # Dedicated stylesheet for Solutions architecture, recommender, and blueprints
│   ├── industries.css           # Dedicated stylesheet for Industry verticals, case studies, and matrix
│   ├── work.css                 # Dedicated stylesheet for Works & Case Studies staggered grid & modal
│   ├── blog.css                 # Dedicated stylesheet for Blog Hub, search, category pills, and quick-read modal
│   ├── blog-single.css          # Dedicated stylesheet for Standalone Article Reader, TOC, and author box
│   └── lenis.css                # Smooth-scroll container styles
│
├── js/
│   ├── main.js                  # App initialization, Lenis setup, navbar scroll detector, video toggle
│   ├── interactions.js          # Sidemenu drawer, FAQ accordion, link hover animations
│   ├── animations.js            # Scroll reveals, rolling counter observer, CTA pulsing avatars
│   ├── about.js                 # 3D fan-out Process mechanics, Journey timeline navigation
│   ├── services.js              # Services category filtering and accordion logic
│   ├── service-single.js        # Single service page interactive ROI calc, FAQ accordion, audit form
│   ├── solutions.js             # Solutions filtering, anchor scroll, ROI recommender, FAQ accordion
│   ├── industries.js            # Sector filtering, quick anchor jumping, Solution Finder calculator, FAQ
│   ├── work.js                  # Category filtering and interactive case study quick-view modal
│   ├── blogs-data.js            # Clientside dataset containing all 72 authentic blog posts & SEO metadata
│   ├── blog.js                  # Instant category filtering, debounced search, pagination, and modal
│   ├── blog-single.js           # Standalone article loader, dynamic SEO meta updater, and sticky TOC
│   ├── lenis.min.js             # Local Lenis smooth scroll library
│   └── gsap.min.js              # Local GSAP library
│
├── assets/
│   ├── fonts/                   # Inter Display font weights (300, 400, 500, 600, 700, 900)
│   ├── images/                  # All high-resolution showcase webp/png project graphics
│   ├── icons/                   # Vector SVGs (brand logos, arrows, status indicators, badges)
│   └── videos/                  # Background showcase video (1080p MP4) and fallback poster
│
├── ai/                          # AI context, architectural snapshot, and decision logs
│   ├── brand-guidelines.md      # Synchronized copy of Brand Design System
│   ├── instructions.md          # Guidelines and rules for future AI coding agents
│   ├── decisions.md             # Technical Decisions Record (Decisions 1–15)
│   ├── known-issues.md          # Verified issues and technical debt log
│   └── current-state.md         # Factual system snapshot
│
└── README.md                    # Technical documentation and maintenance guide (this file)
```

---

## 🎨 Design & Animation Implementation

Every interaction and animation from the reference site has been inspected, extracted, and reproduced:

1. **Typography & Brand Design System:**
   - Font family: `Inter Display` with 6 weights (`300`, `400`, `500`, `600`, `700`, `900`) bundled locally in `assets/fonts/`.
   - **Official Brand Palette** (see [brand-guidelines.md](file:///e:/xampp/htdocs/zenweb/brand-guidelines.md)):
     - **Flamingo** (`#f26934`): Primary interactive CTAs, glowing micro-indicator dots (`.dot-circle`, `.work-dot`), metric numbers (`.counter-number`), title gradient accents, and Process icon badges.
     - **Ship Cove** (`#7892bd`): Mandatory main heading color for all cards in dark sections (`.catalog-card-title`, `.timeline-card-title`), client positions, and title gradient secondary stop.
     - **Universal Flat Card System**: All card components have zero borders and zero shadows (`border: none !important; box-shadow: none !important;`) across all pages.
     - **#0c0238 Rule**: Retained as a token only; strictly excluded from UI text and backgrounds to preserve readability.
   - CSS Variables: Baseline neutrals (`--black-900`, `--black-800`, `--black-600`, `--black-100`, `--white`), radii (`--_border-radius---radius-l: 20px`), and modular spacing scales.

2. **Navigation & Sidemenu Drawer:**
   - Top navbar features a dynamic sticky header that hides on scroll-down and slides into view on scroll-up (`.navbar.nav-hidden`).
   - Clicking `+ Menu` smoothly reveals a full-height sidemenu drawer from the left with an `outExpo` 700ms easing curve and backdrop overlay.
   - Dual-text slide-up effect on navigation links: on hover, the top label translates Y `-100%` while the bottom label enters, accompanied by an animated underline slide.

3. **Hero Section & Showcase Video:**
   - Background video autoplay with a custom circular play/pause button that dynamically toggles play state and changes icons.
   - Live client avatar badge with 5-star rating overlay and client marquee.

4. **Work & Project Cards:**
   - Project cards feature a smooth zoom (`transform: scale(1.08)`) on hover.
   - The central floating **Discover** badge smoothly scales up from `0` to `1`.
   - Dual-arrow button micro-interaction: on hover, the first arrow translates up-right while the second enters from bottom-left.

5. **About Studio & Rolling Counters:**
   - An `IntersectionObserver` triggers the numeric counter roll-up (`4.9`, `100+`, `99%`) utilizing a customized cubic bezier curve: `cubic-bezier(0.785, 0.135, 0.15, 0.86)` over 2000ms.

6. **Interactive FAQ Accordion:**
   - Accordion toggles open and closed with a smooth max-height expansion.
   - Plus icon (`+`) rotates 45 degrees into an `✕` upon expansion.

7. **Continuous Infinite Marquees:**
   - Seamless infinite scrolling logos in the Hero, Value, and Founder sections with hover pause capability.

8. **CTA Floating Avatar Grid:**
   - 9 avatars configured with gentle floating keyframes (`floatGentle1` / `floatGentle2`) and hover zoom.

---

## 📱 Responsive Breakpoints

Exact responsive rules matching Webflow's design system:
- **Desktop:** `1440px` and `1280px` standard container layouts (`max-width: 1200px`).
- **Tablet (`max-width: 991px`):** Replaces desktop navigation links with the `+ Menu` drawer button, stacks dual-column grids into fluid vertical layouts.
- **Mobile Landscape (`max-width: 767px`):** Enables dedicated mobile work card list (`.work-cl-wrapper.mobile-on`), adjusts hero layout, typography clamp, and padding.
- **Mobile Portrait (`max-width: 479px`):** Full-width touch cards, 100% viewport drawer, responsive video height, and zero horizontal overflow.

---

## 📦 External Dependencies

- **None** from third-party networks at runtime. All assets, fonts, icons, videos, and libraries (`Lenis`, `GSAP`) are hosted locally in `assets/` and `js/`.
- Does not require Node modules or build steps (`npm run build` not needed).

---

## ✏️ How to Modify Content

- **Update Work Projects:** In [index.html](file:///e:/xampp/htdocs/zenweb/index.html), search for `<section class="section work">` and update the project titles, categories, and thumbnail images.
- **Modify FAQs:** Search for `<section class="section faq">` and edit questions inside `.faq-title-text` or answers inside `.faq-answer-paragraph`.
- **Change Social & Contact Links:** Search for `.footer-social-wrap` and `.menu-social-wrap`.
