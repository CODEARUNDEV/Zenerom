# Current State Architecture & System Snapshot: Zenweb (Zenerom UAE)

> **Document Status**: Factual Snapshot  
> **Evaluation Date**: Current Workspace Reality  
> **Repository Root**: `e:\xampp\htdocs\zenweb`  

---

## 1. Project Purpose

Zenweb is the official web platform for **Zenerom UAE** (`zenerom.ae`), a Dubai-based digital growth, SEO, performance marketing, and technology agency headquartered at Burjuman Business Tower, Dubai, UAE. The application showcases agency services, client case studies, process methodology, company history/timeline, leadership and specialist teams, client testimonials, and business contact points.

---

## 2. Technology Stack

| Layer | Technology | Version / Specification | Source / Hosting |
|---|---|---|---|
| **Markup** | HTML5 | Semantic Webflow-derived DOM structure | Local (`index.html`, `about.html`, `services.html`, `solutions.html`) |
| **Styling** | Vanilla CSS3 | Custom Design Tokens, CSS Grid, 3D Transforms, Universal Flat Card System | Local (`css/style.css`, `responsive.css`, `animations.css`, `services.css`, `solutions.css`, `lenis.css`) |
| **Typography** | Inter Display | 6 Weights (Light 300, Regular 400, Medium 500, SemiBold 600, Bold 700, Black 900) | Local (`assets/fonts/InterDisplay-*.ttf`) |
| **Interactivity** | Vanilla ES6 JavaScript | Custom DOM event listeners & IntersectionObservers | Local (`js/main.js`, `interactions.js`, `animations.js`, `about.js`, `services.js`, `solutions.js`) |
| **Smooth Scroll** | Lenis | Inertial smooth scroll engine | Local (`js/lenis.min.js`) |
| **Animation Engine** | GSAP (GreenSock) | Core GSAP library | Local (`js/gsap.min.js`) |
| **Dev Server** | Node.js | v24.13.0 (zero-dependency `http` module) | Local (`server.js`, port 3333) |
| **Production Server** | Apache (XAMPP) | Apache 2.4+ with `mod_rewrite` via `.htaccess` | `e:\xampp\htdocs\zenweb` |
| **Database** | None | Not applicable | No database used |
| **Build Tools** | None | Zero build step (no Webpack, Vite, or PostCSS) | Raw static files |

---

## 3. Architecture & Directory Structure

The project is structured as a static multi-page application (MPA):

```
zenweb/
├── .htaccess                     # Apache clean URL routing configuration
├── README.md                     # Technical documentation and maintenance guide
├── brand-guidelines.md           # Official Zenerom Brand Color Guidelines & Design System
├── server.js                     # Zero-dependency Node.js HTTP dev server (port 3333)
├── index.html                    # Homepage (Hero, Works, Services, FAQ, CTA, Footer)
├── index.original.html           # Original template backup of homepage (91.5 KB)
├── about.html                    # About page (Video Hero, Process, Journey, Team, Newsletter)
├── about.html.bak                # Legacy backup of original Webflow about page (54.7 KB)
├── services.html                 # Services page (Hero, 12-Service Catalog, Pillars, UAE Grid, FAQ)
├── seo-services-dubai.html       # Single Service Page Master Template (SEO Services in Dubai)
├── solutions.html                # Solutions page (Hero, Quick Chips, 6 Showcases, Matrix, Recommender, Blueprints, FAQ)
├── industries.html               # Industries page (Hero, 8 Sector Deep Dives, Real UAE Case Studies, Solution Finder)
├── work.html                     # Works & Case Studies page (Signature 2-column staggered grid, 13 case studies)
├── blog.html                     # Blog Hub page (72 authentic posts, search, 9 topic filters, pagination, quick-read modal)
├── blog-single.html              # Standalone Dynamic Article Reader (Dynamic Yoast SEO, Sticky TOC, related posts)
├── zenweb.zip                    # Static archive backup of workspace assets (15.3 MB)
│
├── ai/                           # AI project brain & documentation folder
│   ├── brand-guidelines.md       # Synchronized copy of Brand Color Guidelines & Design System
│   ├── instructions.md           # Guidelines and rules for future AI agents
│   ├── decisions.md              # Chronological technical decisions record (Decisions 1–23)
│   ├── known-issues.md           # Verified bugs, technical debt, and risks
│   └── current-state.md          # Factual system snapshot (this document)
│
├── data/                         # Data payloads & scraped article stores
│   ├── blogs.json                # Scraped metadata & excerpts for all 72 blog posts (~55 KB)
│   └── blogs-full.json           # Scraped full HTML article bodies for all 72 blog posts (~1 MB)
│
├── css/                          # Stylesheet layer
│   ├── style.css                 # Inter Display @font-face rules, CSS reset, brand tokens, flat card rules
│   ├── responsive.css            # Responsive layout classes and Webflow breakpoint media queries
│   ├── animations.css            # Keyframe animations, 3D cards, timeline styles, team cards
│   ├── services.css              # Dedicated stylesheet for Services catalog and emirate grids
│   ├── service-single.css        # Master stylesheet for dedicated single service pages & templates
│   ├── solutions.css             # Dedicated stylesheet for Solutions architecture, recommender, and blueprints
│   ├── industries.css            # Dedicated stylesheet for Industry verticals, case studies, and matrix
│   ├── work.css                  # Dedicated stylesheet for Works & Case Studies staggered grid & modal
│   ├── blog.css                  # Dedicated stylesheet for Blog Hub, search, category pills, and quick-read modal
│   ├── blog-single.css           # Dedicated stylesheet for Standalone Article Reader, TOC, and author box
│   └── lenis.css                 # Lenis smooth-scrolling wrapper styles
│
├── js/                           # Clientside JavaScript layer
│   ├── lenis.min.js              # Lenis smooth scrolling vendor library
│   ├── gsap.min.js               # GSAP core animation vendor library
│   ├── main.js                   # Lenis initialization, scroll navbar visibility, anchor navigation
│   ├── interactions.js           # Sidemenu drawer, FAQ accordion, capabilities hover, CTA avatar cycle
│   ├── animations.js             # Scroll reveal observer, rolling numbers, rotating subtitle stars
│   ├── about.js                  # 3D fan-out Process mechanics, Journey timeline navigation
│   ├── services.js               # Services category filtering, interactive FAQ accordion, metrics
│   ├── service-single.js         # Dedicated mechanics for single service page (interactive ROI calc, FAQ, audit form)
│   ├── solutions.js              # Solutions category filtering, anchor scroll, ROI recommender, FAQ accordion
│   ├── industries.js             # Sector filtering, quick anchor jumping, Solution Finder calculator, FAQ
│   ├── work.js                   # Category filtering and interactive case study quick-view modal
│   ├── blogs-data.js             # Clientside dataset containing all 72 authentic blog posts & SEO metadata
│   ├── blog.js                   # Instant category filtering, debounced search, pagination, and modal
│   └── blog-single.js            # Standalone article loader, dynamic SEO meta updater, and sticky TOC
│
│
├── assets/                       # Static media layer (Total: ~34 MB)
│   ├── fonts/                    # 6 TrueType font weights of Inter Display (~2.34 MB)
│   ├── icons/                    # 68 SVG vector icons & partner/social marks (~0.26 MB)
│   ├── images/                   # 180+ WebP, PNG, and JPG raster graphics
│   │   ├── team/                 # Leadership & specialist portraits
│   │   ├── timeline/             # Milestone imagery (2015, 2017, 2022, 2026)
│   │   ├── industries/           # 8 bespoke high-res vertical industry showcase photographs
│   │   └── clients/              # Client logo marquees
│   └── videos/                   # 6 MP4/WebM video clips and fallback posters (~24.81 MB)
│
└── node_modules/                 # Leftover unreferenced package (opentype.js)
```

---

## 4. Major Components & Features

### 4.1 Global Navigation (`.header`, `.navbar`, `.sidemenu`)
- **Sticky Auto-Hiding Navbar**: Hides when scrolling down past 150px (`.nav-hidden`), reappears when scrolling up, and applies frosted shadow background (`.nav-scrolled`) past 50px.
- **Sidemenu Drawer**: Full-height drawer sliding from the left with an easing curve, triggered by `.menu-open-block` (`+ Menu`) and closed via `.manu-close-block` (`✕`), backdrop click, or ESC key. Disables body scrolling and halts Lenis while active.
- **Dual-Text Hover Interaction**: Nav links contain stacked text spans (`.nav-link-text`); on hover, the top span shifts Y `-100%` while the bottom span enters from below with an underline bar animation.

### 4.2 Homepage (`index.html`)
- **Hero Section**: Rating badge with avatars, agency headline, dual CTA buttons, and an infinite marquee of client logos.
- **Work Showcase (`.section.work`)**: Interactive project cards with scale zoom on hover (`transform: scale(1.08)`), floating centered **Discover** badge, and dual-arrow micro-animations.
- **Services & Capabilities Accordion (`.section.capabilities`)**: Dual-mode interaction allowing desktop hover switching (`mouseenter`/`mouseleave`) and touch-tap toggling (`.is-active`).
- **Interactive FAQ Accordion (`.section.faq`)**: Smooth max-height expansion with 45-degree rotation of the plus icon (`+` to `✕`).
- **Rolling Numerical Counters**: Triggered via `IntersectionObserver` using a cubic-bezier curve (`4.9`, `100+`, `99%`).
- **Interactive CTA Avatar Matrix (`.section.cta`)**: 9 floating avatars running a continuous background group cycle (500ms intervals) and 60fps cursor parallax smoothing.

### 4.3 About Page (`about.html`)
- **Video Hero Section (`.abou-hero`)**: Background video (`bungee-about-hero.mp4` / `.webm`) with poster fallback and client marquee.
- **3D Fan-Out Process Section (`.section.process`)**:
  - 500vh scroll track containing a sticky container (`top: 80px`).
  - 5 cards (`Discover`, `Strategy`, `Execution`, `Optimize`, `Scale`) fan out from 20% to 50% scroll travel, then execute sequential 3D Y-axis flips (0° to 180°) from 50% to 80% scroll travel.
  - Generous `140px` bottom section padding and `40px` sticky buffer for clean separation before the next section.
- **"Our Journey" Timeline Section (`.section_timeline`)**:
  - Dark-themed section (`#0d0f12`) placed directly before the team section.
  - Sticky sidebar with `• OUR JOURNEY` pill and interactive year links (`2015`, `2017`, `2022`, `2026`).
  - 4 milestone cards with WebP photography and descriptions.
  - Smooth Lenis scroll navigation on year click (`offset: -100px`) and `IntersectionObserver` scroll spy toggling `.is-active`.
- **Leadership & Specialist Team Section (`.section_team`)**:
  - Dedicated Leadership & Partners grid with individual LinkedIn and WhatsApp direct links.
  - Specialist Co-Workers grid showcasing experience badges.

### 4.4 Services Page (`services.html`)
- **Services Hero**: Headline with pulsating Flamingo micro-indicator dot (`.services-eyebrow-dot`), dual-color gradient title highlight (`#f26934` to `#7892bd`), and quick agency metrics row.
- **12-Service Full Catalog (`.section_catalog`)**: Dark container section (`#0d0f12`) containing 12 comprehensive service cards with dark flat backgrounds (`#16181d`), zero borders, zero shadows, and main card headings styled in `--brand-ship-cove` (`#7892bd`).
- **Interactive Category Filters**: Category pill filter buttons (`All`, `Growth & Performance`, `Web & Engineering`, `Brand & Creative`, `Automation & Enterprise`) dynamically toggling service cards via `js/services.js`.
- **4 Pillars of Excellence**: Strategic methodology cards highlighting technical SEO, full-funnel CRO, bespoke engineering, and ROI focus.
- **Pan-UAE Coverage Matrix**: Grid highlighting tailored enterprise digital services across Dubai, Abu Dhabi, Sharjah, and Northern Emirates.
- **Enterprise FAQ Accordion**: Dedicated service FAQ handling technical onboarding, retainer models, and reporting cadence.

### 4.5 Solutions Page (`solutions.html`)
- **Solutions Hero & Ticker**: High-contrast headline with dual brand gradient highlight, live status badge with pulsating green beacon dot, quick anchor navigation chips, and verified proof-points ticker.
- **Interactive Category Filter Bar**: Filter pill navigation (`All Solutions`, `Customer Acquisition`, `Tech & Headless Commerce`, `Conversational AI & CRM`, `Regional UAE SEO`, `Dedicated IT Squads`) dynamically showing/hiding solution blocks with smooth re-layout.
- **6 Detailed Solution Showcases**:
  1. *Hyper-Targeted B2B & B2C Lead Generation Engines* (PPC, Multi-Touch attribution, CRM pipeline sync)
  2. *Next-Gen Headless Web & E-Commerce Engineering* (Custom Next.js/Shopify Headless, sub-second TTFB, UAE payment gateways)
  3. *Omnichannel WhatsApp Business & Conversational AI Bots* (Official WhatsApp Cloud API, bilingual Arabic/English bot logic, automated order status)
  4. *Multi-Emirate Local & Enterprise SEO Dominance* (Google Maps 3-Pack, bilingual keyword architectures across Dubai, Abu Dhabi, Sharjah)
  5. *Cloud CRM & Enterprise Workflow Automation* (Zoho, HubSpot, Salesforce integrations with automated WhatsApp & telephony alerts)
  6. *Dedicated IT Squads & On-Demand Offshore Engineering* (Fully managed software engineers, sprint-based SLAs, UAE timezone alignment)
- **Enterprise Transformation Matrix**: Side-by-side comparison illustrating legacy fragmented agency models vs. Zenerom's unified growth & engineering architecture.
- **Interactive Solution Architecture & ROI Recommender**: Dynamic widget allowing UAE enterprise leads to select Growth Goal, Industry Vertical, and Team Scale to instantaneously compute recommended tech stack, estimated SLA velocity, and conversion upside.
- **UAE Sector Blueprints**: Tailored architecture blueprints for Real Estate & Luxury Developers, B2B Industrial & Logistics, and Retail & D2C Brands.
- **Enterprise FAQ Accordion**: Smooth question-answer accordion resolving onboarding, bilingual SLA commitments, code IP ownership, and data privacy compliance.
- **Global Brand Alignment**: Enforces universal flat card styling (no borders or drop shadows) and `#7892bd` card headings in dark sections with zero usage of `#0c0238`.

### 4.6 Industries Page (`industries.html`)
- **Industries Hero & Proof Ticker**: High-contrast headline with dual brand gradient highlight (`#f26934` to `#7892bd`), live status badge with pulsating beacon dot, quick anchor navigation chips, and verified proof ticker (`10+ Years Mastery`, `8 Verticals`, `+412% Peak Revenue Surge`, `4.9★ Rating`).
- **Segmented In-Flow Sector Filter Bar**: Non-sticky filter bar (`All Verticals`, `Real Estate`, `E-Commerce`, `Healthcare`, `Hospitality`, `B2B Supply`, `Education`, `Corporate Setup`, `Automotive`) dynamically highlighting and scrolling to specific sector showcases.
- **8 Comprehensive Sector Deep Dives with Real UAE Proof & Case Studies**:
  1. *Real Estate, Off-Plan & Luxury Brokerages*: High-intent HNWI investor funnels, Meta Instant Forms with CRM sync, 3D Matterport embeds. Authentic Case Study: *RFS Remodeling & Luxury Developers* (531 Meta leads, AED 1.8M pipeline).
  2. *E-Commerce & High-End Retail*: Headless Next.js/Shopify architectures with sub-0.8s mobile TTFB, Tabby/Tamara BNPL split-checkout, WhatsApp cart recovery. Authentic Case Study: *Florkett UAE* (+412% organic revenue surge, 3.8x ROAS).
  3. *Healthcare, Clinics & Aesthetic Medicine*: 100% MOHAP & DHA ad compliance, doctor EEAT authority markup, local Google 3-Pack ranking. Authentic Case Study: *H2O Care Clinics* (+280% consults, 99.4% approval).
  4. *Hospitality, Luxury Tourism & Dining*: Real-time reservation booking funnels, multi-lingual international tourist targeting, SevenRooms/OpenTable sync. Authentic Case Study: *Tourzone & Farm City Dubai* (+340% bookings).
  5. *B2B, Logistics, Free Zones & Industrial Supply*: Technical specification RFQ engines, LinkedIn ABM targeting, JAFZA/KIZAD logistics workflows. Authentic Case Study: *Statron International & Voltronix* (+195% qualified RFQs).
  6. *Education, K-12 & Elite Sports Academies*: Term-based student enrolment funnels, KHDA/ADEK compliant communications, parent inquiry bots. Authentic Case Study: *LaLiga Academy UAE* (934 conversions, AED 44 CPL).
  7. *Corporate, Legal & Business Setup*: High-intent free zone setup campaigns, Golden Visa funnels, bilingual lead calculators. Authentic Case Study: *CorpCreators & Shuraa Advertising* (+310% setup leads).
  8. *Automotive, Mobility & Luxury Marine*: VIP WhatsApp test-drive concierge, dynamic showroom inventory API, 4K cinematic vehicle ads. Authentic Case Study: *Luxury Supercars & Marine Charters* (+185% VIP test drives).
- **Cross-Sector Transformation Matrix**: Comparative evaluation contrasting Conventional Fragmented Retainers, Zenerom Vertical Growth Ecosystems, and Internal Squad Limitations.
- **Interactive Industry Solution Finder**: Real-time client-side calculator computing recommended tech stack, deployment SLA velocity, and conversion upside based on sector, growth bottleneck, and monthly scale.
- **Pan-UAE Vertical Deployment Strategy**: Tailored geographical focus across Dubai Flagship, Abu Dhabi Capital & Regulatory, and Sharjah/Northern Emirates.
- **Vertical Strategy FAQ Accordion**: 5 collapsible accordions answering multi-branch support, MOHAP/DHA compliance, CRM integration speed, Tabby/Tamara payment gateways, and bilingual Arabic/English execution.
- **Canonical Design & Performance Standards**: 100% local assets, strict flat card styling (no borders or drop shadows), `#7892bd` card headings in dark sections, and zero usage of `#0c0238`.

### 4.7 Contact Page (`contact.html`)
- **Contact Hero & Real-Time Status Ribbon**: Breadcrumbs navigation, pulsating Flamingo indicator dot (`.contact-eyebrow-dot`), dual-color title gradient highlight (`#f26934` to `#7892bd`), real-time ticking Dubai GST clock (`Asia/Dubai`), and dynamic business-hour office status beacon.
- **One-Click Quick Action Cards**: 4 interactive communication cards for Mobile Line 1 (`+971 56 399 6631`), Strategy Desk (`+971 50 876 4885`), Official Inbox (`info@zenerom.ae`), and Dubai Flagship Office (`Burjuman Business Tower, 9th Floor, Office 929`) with animated copy-to-clipboard tooltips.
- **Interactive Project Scope & Inquiry Builder**:
  - Multi-select service chips (SEO, PPC, Web Engineering, Apps, CRM, IT Squads, Branding) with instant toggle states.
  - 4 Interactive investment budget tiers (`AED 5K-15K`, `AED 15K-35K`, `AED 35K-75K`, `AED 75K+`).
  - Target launch horizon selection (`Immediate`, `1 Month`, `1-3 Months`, `RFP Evaluation`).
  - Modern form input fields with `:user-valid` and `:user-invalid` responsive CSS feedback.
  - Sticky **Live Scope Snapshot** panel computing recommended execution pods, deliverable roadmaps, and instant prefilled WhatsApp dispatch link.
  - Animated submission handling transitioning to a bespoke **Success State Card** with dynamic reference ID.
- **Senior Strategist 1-on-1 Consultation Booking**: Dedicated profile for **Jithin George** (UAE Digital Marketing Consultant, 10+ years experience, 4.9★ rating) with an interactive 30-minute discovery scheduler featuring upcoming weekday chips and slot selection.
- **Worldwide Hubs & Global Presence (Dark Theme Section)**: Dark container (`#0d0f12`) with flat cards (`#16181d`) and `#7892bd` card headings across Dubai (HQ), Edinburgh (UK), Kochi (India), and Sydney (Australia), complete with real-time world clocks, directions, and responsive Google Map embed.
- **Department Channels Matrix**: 4 direct routing cards for Performance Media, SEO, Web/IT Squads, and Talent/Creative Lab.
- **150k Community & Omnichannel Network**: 12 official social channels with interactive hover micro-animations.
- **Partnership FAQ Accordion**: 6 collapsible accordions answering response SLAs, Burjuman Tower meetings, NDAs, audits, and international collaboration.


### 4.8 Works & Case Studies Page (`work.html`)
- **Works Hero & Proof Ticker**: Breadcrumbs navigation (`Home / Work`), pulsating Flamingo indicator dot, dual-color title gradient highlight (`#f26934` to `#7892bd`), and 4-metric KPI proof ticker (`13+ Case Studies`, `+412% Peak Revenue Lift`, `AED 1.8M+ Pipeline Generated`, `100% Verified UAE Results`).
- **Segmented In-Flow Category Filter Bar**: Filter pills (`All Projects`, `SEO`, `Performance Ads`, `Web Dev`, `E-Commerce`, `Industrial`, `Corporate`) with dynamic real-time case count badges and smooth scroll anchor.
- **Signature 2-Column Staggered Masonry Grid**: Faithfully replicates homepage Selected Work aesthetic with rounded media wrappers, hover scale (`1.04`), pill badges, and arrow translation micro-interactions across 13 verified UAE case studies.
- **Interactive Quick-View Modal Drawer (`#workModal`)**: Built-in accessible modal displaying full project details (Client background, Problem/Challenge, Implemented Solution, Core Deliverables, Verified Results/ROI, and direct WhatsApp consultation button with prefilled project message). Supports ESC key, backdrop click, and focus trapping.
- **Canonical Global Design & Footer**: Strict flat card styling (no borders or drop shadows), `#7892bd` card headings in dark sections, zero `#0c0238`, and restored canonical footer layout.

### 4.9 Single Service Master Template (`seo-services-dubai.html`)
- **Single Service Blueprint**: Master high-converting template format built for SEO Services in Dubai, designed to serve as the structural model for all Zenerom service offerings.
- **Executive Hero Section**: Breadcrumbs (`Home / Services / SEO Services in Dubai`), live pulsating indicator dot, dual-gradient headline highlight, 4-metric KPI proof ticker (`+340% Traffic Lift`, `150+ Page 1 Keywords`, `4.9★ Google Rating`, `3.8x Revenue ROI`), and live office status ribbon.
- **Interactive Inbound SEO Revenue & Traffic Estimator**: Real-time interactive calculation widget allowing prospective clients to simulate traffic gains, estimated closed revenue, and Google Ads arbitrage savings.
- **6 Pillars of Dominance**: Dark container section (`#0d0f12`, flat cards `#16181d`, `#7892bd` card titles) detailing Technical SEO, Bilingual Arabic/English Strategy, Semantic Schema Graphs, Tier-1 Gulf Digital PR, Google Maps 3-Pack Supremacy, and CRO / CRM Sync.
- **180-Day Dominance Roadmap & Deliverables Matrix**: Structured 4-phase rollout and transparent deliverables comparison vs. conventional agencies.
- **Free 28-Point SEO Audit Form**: Real-time validated audit request form with direct WhatsApp dispatch.

### 4.10 Blog Hub (`blog.html`) & Standalone Article Reader (`blog-single.html`)
- **Complete 72-Post Dataset Extraction**: All 72 published blog posts extracted from `https://zenerom.ae/wp-json/wp/v2/posts` without missing a single article, parsed into `data/blogs.json`, `js/blogs-data.js` (~55 KB metadata store), and `data/blogs-full.json` (~1 MB complete rendered HTML article content).
- **100% SEO Metadata Preservation**: Retains exact Yoast SEO titles, meta descriptions, canonical URLs (`https://zenerom.ae/blog/[slug]/`), author names/avatars, reading time estimates, formatted publication dates, Open Graph images, and Schema.org `Article` entities.
- **Blog Hub (`blog.html`)**:
  - Executive hero with breadcrumbs, pulsating live badge, dual-gradient headline highlight (`#f26934` to `#7892bd`), and 4-metric KPI ticker (`72 Verified Articles`, `9 Strategic Disciplines`, `12+ Senior Specialists`, `100% UAE Market Insights`).
  - Interactive live search input bar with debounced query filtering across post titles, excerpts, and authors.
  - Segmented in-flow topic filter bar (`All 72`, `SEO: 20`, `Digital Marketing: 13`, `Branding: 11`, `Performance Ads: 10`, `Web Dev: 7`, `Social Media: 4`, `Growth Strategy: 4`, `Software Dev: 2`, `Outsourcing: 1`) with real-time post count badges.
  - Flagship Featured Article Card highlighting the latest published research (*"Parasite SEO Dubai: Why Top Brands Rank in 48 Hours"*).
  - 3-Column Responsive Article Grid displaying rich cards with category badges, reading time estimates, formatted publication dates, author avatars, and dual action triggers (Quick-Read Modal drawer and Standalone Full Reader page).
  - Dynamic Numbered Pagination Controls (9 posts per page) + "View All 72" instant toggle mode.
  - Interactive Quick-Read Article Drawer Modal (`#blogModal`): On-demand async hydration of complete HTML article body from `data/blogs-full.json`, key highlights box, author bio, and direct WhatsApp consultation button.
  - Schema.org JSON-LD graph (`CollectionPage`, `BreadcrumbList`, and `ItemList` embedding all 72 `Article` entities with exact canonical links, authors, dates, and descriptions) guaranteeing 100% crawlability for Google.
  - High-Impact Bottom CTA Banner and Canonical Global Footer matching all other pages.
- **Standalone Article Reader (`blog-single.html`)**:
  - Standalone post viewer reading `?slug=...` parameter.
  - Dynamically updates `<title>`, `<meta name="description">`, `<link rel="canonical">`, Open Graph, Twitter cards, and Schema.org `Article` JSON-LD to match the active post's original Yoast SEO metadata.
  - Dynamically generates sticky Table of Contents from all `<h2>` and `<h3>` tags in the post body with smooth scroll jumping.
  - Author profile badge and 3 related articles from the same category.
- **Universal Brand Compliance**: Strict flat card styling (no borders or drop shadows), `#7892bd` card headings in dark sections, zero `#0c0238`, and 100% responsive layout.

---

## 5. Backend, APIs, Database & External Services

| Dimension | Current State | Verification Status |
|---|---|---|
| **Backend Services** | None. Zero server-side runtime code outside static file streaming in `server.js`. | **Verified** |
| **Database** | None. Static JSON payloads (`data/blogs.json`, `data/blogs-full.json`) loaded client-side via ES6 fetch and JavaScript modules. | **Verified** |
| **API Endpoints** | None runtime. Scraped once from `https://zenerom.ae/wp-json/wp/v2/posts` and bundled locally. | **Verified** |
| **Authentication** | None. All pages are publicly accessible static resources. | **Verified** |
| **External CDNs** | Zero runtime dependencies. All CSS, JS, fonts, and images are local. | **Verified** |
| **Forms Handling** | Client-side only. Newsletter and audit forms intercept submit via JavaScript (`e.preventDefault()`) and show success DOM state with WhatsApp direct sync. | **Verified** |
| **External Integrations** | Direct hyperlinks only (WhatsApp API `wa.me`, LinkedIn profiles, Google Maps coordinates). | **Verified** |

---

## 6. Environment & Configuration

- **Environment Files**: None (`.env` does not exist).
- **Configuration Files**:
  - `.htaccess`: Apache URL rewriting rules.
  - `server.js`: Contains local port definition (`const PORT = 3333;`).
- **Dependencies (`node_modules/`)**:
  - `opentype.js` (installed on disk, but unreferenced and unused).

---

## 7. How the Application Runs

### Development Execution:
1. **Node.js**:
   ```bash
   node server.js
   ```
   Listens on `http://localhost:3333/`.
2. **Apache / XAMPP**:
   Accessible via `http://localhost/zenweb/` when Apache is running in XAMPP.
3. **Python HTTP Server**:
   ```bash
   python -m http.server 3000
   ```

### Build Pipeline:
- **None**: No build command exists or is needed. Modifying files in `css/`, `js/`, or `.html` updates the website immediately upon browser refresh.

---

## 8. Current Limitations & Gaps

1. **Unimplemented Secondary Subpages**: Secondary links such as `/careers`, `/privacy-policy`, and `/terms-conditions` do not yet have corresponding dedicated standalone HTML files in the project. (Note: `/services`, `/solutions`, `/industries`, `/work`, `/contact`, and `/blog` are all fully implemented via dedicated HTML, CSS, and JS).
2. **Mock Form Processing**: Newsletter submission does not transmit email data to any destination outside UI feedback.
3. **Repository Version Control**: The project workspace is not currently initialized as a Git repository.
4. **Documentation Sync**: `README.md` is updated to reflect Zenerom UAE Agency and its brand system.
