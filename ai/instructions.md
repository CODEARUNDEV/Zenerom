# AI Development & Modification Instructions: Zenweb (Zenerom UAE)

> **Document Status**: Active  
> **Target Audience**: Future AI coding agents and human maintainers working on `zenweb`.  
> **Ground Truth Principle**: All instructions below are derived strictly from the current state of the codebase. Do not assume tools, frameworks, build systems, or backend capabilities that are not present.

---

## 1. Core Operating Directives & Critical Rules

1. **Zero Unapproved Code Modification**:
   - Under no circumstances should existing working source files be refactored, rewritten, or reorganized unless explicitly requested by the user.
   - Do not replace vanilla HTML/CSS/JS with frameworks (React, Vue, Tailwind, Bootstrap, Next.js, etc.) unless the user commands a framework migration.

2. **Preserve Static Architecture**:
   - This project is a pure, zero-build vanilla web application (HTML5, Vanilla CSS3, Vanilla ES6 JavaScript).
   - Do NOT introduce build tools (`webpack`, `vite`, `esbuild`, `postcss`, `sass`) unless explicitly requested.
   - All runtime scripts and libraries are self-contained locally in `js/` (`lenis.min.js`, `gsap.min.js`, `main.js`, `interactions.js`, `animations.js`, `about.js`). Do not replace them with third-party CDN links.

3. **No Unrequested Bug Fixing**:
   - Do not silently "fix" non-breaking quirks or legacy template markers unless instructed to do so. Document discovered bugs in `ai/known-issues.md`.

---

## 2. Architecture Constraints & Conventions

### 2.1 File & Directory Layout
- **Root HTML Files**: `index.html` (Homepage / Services / Capabilities), `about.html` (About page, Process, Journey, Leadership & Specialists).
- **Styles (`css/`)**:
  - `style.css`: Base typography (`@font-face` for `Inter Display`), CSS reset, core tokens, baseline utilities.
  - `responsive.css`: Webflow-derived responsive utility classes and media query blocks (`max-width: 991px`, `max-width: 767px`, `max-width: 479px`).
  - `animations.css`: Keyframe definitions, micro-interactions, complex scroll-driven layouts (3D Process card mechanics, Our Journey sticky sidebar and milestone cards, team layouts).
  - `lenis.css`: Container styling required for Lenis smooth scrolling.
- **Scripts (`js/`)**:
  - `main.js`: Global initialization, Lenis instance instantiation (`window.lenis`), scroll-up navbar visibility (`.nav-hidden`), hash anchor offset navigation.
  - `interactions.js`: Navigation sidemenu drawer (`.sidemenu.open`), FAQ accordion toggle, Capabilities hover/tap cards, CTA background avatar cycle.
  - `animations.js`: Global scroll-reveal observers (`.reveal-on-scroll`), rolling number counters (`.counter-wrapper`), rotating subtitle star icons.
  - `about.js`: Dedicated About page script handling video fallback, 3D Process fan-out/flip mechanics, client testimonial scroller, and the "Our Journey" smooth year navigation + `IntersectionObserver` scroll spy.
- **Assets (`assets/`)**:
  - `assets/fonts/`: Local TTF fonts (`InterDisplay-Light`, `Regular`, `Medium`, `SemiBold`, `Bold`, `Black`).
  - `assets/icons/`: SVG vectors.
  - `assets/images/`: WebP/PNG graphics, organized by component domain (`team/`, `timeline/`, `clients/`, etc.).
  - `assets/videos/`: MP4/WebM video files and poster images.

### 2.2 Coding Conventions Discovered in the Project
- **Class Naming**: Hybrid Webflow class convention with utility modifiers:
  - BEM-like dashes: `.section-header`, `.process-item-block`, `.team-card`, `.timeline-card`.
  - State classes: `.is-active`, `.is-flipped`, `.open`, `.counted`, `.rotating`, `.nav-hidden`, `.nav-scrolled`.
  - Numbered suffixes from Webflow: `._01`, `._02`, `._03`.
- **CSS Variables**: Predefined design tokens declared on `:root` and `body` in `css/style.css` and `css/responsive.css`:
  - Colors: `--black-900`, `--black-800`, `--black-600`, `--black-100`, `--black-50`, `--white`.
  - Spacing: `--_gap---gap-none`, `--_gap---gap-s`, `--_gap---gap-m`, `--_gap---gap-l`, `--_gap---gap-xl`, `--_gap---gap-6xl`, `--_gap---gap-7xl`, `--_gap---gap-8xl` (150px), `--_gap---gap-9xl`.
  - Radii: `--_border-radius---radius-s`, `--_border-radius---radius-m`, `--_border-radius---radius-l`.
- **Asset Referencing**: Always use relative paths from the HTML root (`css/...`, `js/...`, `assets/...`). Do not use leading slashes (`/assets/...`) because they break when hosted in Apache subdirectories (such as `http://localhost/zenweb/`).
- **Cache Busting**: When updating CSS or JS files, update the query version strings in HTML headers/footers (e.g., `css/animations.css?v=26`, `js/about.js?v=7`).

---

## 3. Files Requiring Extra Caution

| File / Module | Reason for Caution |
|---|---|
| `about.html` & `index.html` | Dense, highly structured Webflow-derived DOM trees with nested class hierarchies and JSON-LD schema. Breaking hierarchy will break GSAP/Lenis/IntersectionObserver selectors. |
| `css/animations.css` | Contains complex 3D perspective transforms, sticky wrapper positioning, and timeline section styling. Modifying paddings/margins carelessly can break scroll animations or sticky calculations. |
| `css/responsive.css` | Large stylesheet (~6,988 lines, 134KB) containing media query overrides from Webflow. Avoid ad-hoc overrides here; prefer targeted rules in `animations.css`. |
| `js/about.js` | Contains scroll calculations tied to `getBoundingClientRect()` and `totalTravel` for the 3D fan-out process section. Altering section heights or sticky offsets will break the keyframe percentages. |
| `server.js` | Built-in Node static dev server. Keep zero-dependency (core `http`, `fs`, `path`). |
| `.htaccess` | Apache URL rewriting rule for extensionless `.html` routing. Must not be broken for XAMPP deployment. |

---

## 4. Things That Must NOT Be Changed Without User Approval

1. **Header Navigation Structure**: The navbar links (`Services`, `Solutions`, `Industries`, `Works`, `About`, `Careers`) and the sidemenu structure must remain consistent across all pages.
2. **Branding & Identity**: Company name (`Zenerom UAE`), contact details (`Burjuman Business Tower, Office 929, Dubai, UAE`, `info@zenerom.ae`, `+971508764885`, `+971563996631`).
3. **Brand Color Guardrails** (see [brand-guidelines.md](file:///e:/xampp/htdocs/zenweb/brand-guidelines.md)):
   - **`#0c0238` Black Rock**: Must **NEVER** be applied to card backgrounds, section backgrounds, or font text typography.
   - **`#7892bd` Ship Cove**: Mandatory main heading color for all card titles in dark container sections (`.catalog-card-title`, `.timeline-card-title`, `.faq-right .faq-title`).
   - **Universal Flat Card Design**: All cards across all pages must maintain `border: none !important;` and `box-shadow: none !important;`. Never reintroduce borders or box shadows to cards.
   - **Process Card Icon Badges**: The circular icon wrap on Process cards must maintain `--brand-flamingo` (`#f26934`) with inverted white SVG icons (`filter: brightness(0) invert(1)`).
4. **Smooth Scroll Core**: Lenis configuration (`duration: 1.2`, cubic easing) in `js/main.js`.
5. **Local Font Stack**: `@font-face` bindings for `Inter Display` in `css/style.css`.
6. **Backup Files**: `about.html.bak`, `index.original.html`, and `zenweb.zip` must not be deleted without explicit user confirmation.

---

## 5. Testing & Validation Expectations

Before concluding any code changes, the AI agent must perform:
1. **Local Server Status**: Confirm the local server is operating (either Node server on port 3333 via `node server.js` or Apache on port 80).
2. **Visual & Layout Inspection**: Use `browser_subagent` or browser tool to navigate to modified pages, test responsive breakpoints (`1536px`, `991px`, `680px`), and verify that:
   - Sticky sidebar navigation triggers properly.
   - Smooth scroll works without jumping or console errors.
   - Images render side-by-side or stack properly as specified.
   - Text contrast meets accessibility standards against `#0d0f12` or `var(--white)`.
3. **Asset Verification**: Ensure all `src` and `url()` links resolve to existing local files (status 200, no 404s).
4. **Console Hygiene**: Open browser DevTools or inspect logs to confirm zero JavaScript errors or unhandled promise rejections.

---

## 6. Security & Deployment Precautions

1. **Security**:
   - The contact and newsletter forms currently operate client-side. If connected to a backend in the future, implement server-side sanitization, CSRF tokens, and rate limiting.
   - Avoid executing untrusted third-party remote scripts.
2. **Deployment**:
   - For Apache / XAMPP: Project lives under `e:\xampp\htdocs\zenweb`. Mod_rewrite in `.htaccess` requires `AllowOverride All` in `httpd.conf`.
   - For Node: Pure static server `server.js` listening on port 3333.
   - For Netlify / Vercel / GitHub Pages: Ensure static routing rules handle `.html` rewrites if clean URLs are desired.

---

## 7. User Interaction & Approval Rules

- Always present concise reports with clickable Markdown links (`file:///...`).
- When proposing major additions (new sections, new subpages, API backends), confirm UX preferences, layouts, and copy with the user first.
- Maintain existing comments and docstrings in code.
