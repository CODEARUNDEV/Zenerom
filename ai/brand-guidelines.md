# Zenerom Brand Color Guidelines & Design System

This document outlines the official brand color palette, color roles, extended UI tints, secondary expressive colors, and implementation rules for the Zenerom digital experience across all pages (`index.html`, `about.html`, `services.html`).

---

## 1. Primary Colours

The primary palette forms the core visual signature of the brand.

| Color Name | Hex Code | Swatch Description | Usage & Psychology | Active Code Role |
| :--- | :--- | :--- | :--- | :--- |
| **Flamingo** *(bold)* | `#f26934` | Vibrant Red-Orange | • **Bold energy, innovation & primary brand presence**.<br>• *Origin*: Red-orange pigment derived from beta-carotene.<br>• *Role*: Primary interactive CTA buttons, glowing micro-indicator dots, active tabs, sliding hover underlines, metric counter numbers, headline gradient accents, process card icon badges, and text selection highlight. | `--brand-flamingo`<br>`#f26934` |
| **Ship Cove** *(neutral / heading)* | `#7892bd` | Unsaturated Light Cold Blue | • **Loyalty, strength, intelligence & calm trust**.<br>• *Origin*: Classic corporate maritime blue.<br>• *Role*: **Mandatory card main heading color in all dark sections** (`.catalog-card-title`, `.timeline-card-title`, `.faq-right .faq-title`), client positions (`.client-position`), subtitle badge tints, title gradient secondary stop, and custom scrollbar thumb gradient. | `--brand-ship-cove`<br>`#7892bd` |
| **Black Rock** *(dark)* | `#0c0238` | Deep Midnight Dark Rock | • **Sophisticated depth & structural brand token**.<br>• *Origin*: Natural rock mineral composition.<br>• ⚠️ **CRITICAL RESTRICTION**: STRICTLY PROHIBITED in card backgrounds, section backgrounds, or font/typography across the site. All text and card surfaces use clean neutrals (`var(--black-900)`, `#16181d`, `#ffffff`). | `--brand-black-rock`<br>`#0c0238` *(token only)* |
| **Seashell** *(complimentary)* | `#f1f1f1` | Clean Soft Off-White | • **Modern lightness & breathable space**.<br>• *Origin*: Pale pinkish-neutral mineral off-white.<br>• *Role*: Clean surface highlights, input backgrounds, tag chips, and delicate light borders. | `--brand-seashell`<br>`#f1f1f1` |

---

## 2. Extended Palette

The extended palette provides tints and shades derived from our primary colors for component states, subtle depth, and micro-interactions.

### A. Flamingo Family (Warm Accents & Interaction)
* **`#f26934`** (`--brand-flamingo`) — Primary Bold Flamingo (CTAs, indicator dots, metric numbers, process icon badges, active nav tabs)
* **`#f28255`** (`--brand-flamingo-mid`) — Flamingo Mid Tint (Button hover states, gradient transitions, capability year hover)
* **`#f2a98c`** (`--brand-flamingo-light`) — Flamingo Light Tint / Soft Peach (Subtle badge tints, hover highlights)
* **`rgba(242, 105, 52, 0.22)`** (`--brand-flamingo-glow`) — Flamingo Glow (Award icon wraps, subtle ambient illumination)
* **`rgba(242, 105, 52, 0.08)`** (`--brand-flamingo-subtle`) — Flamingo Subtle (Eyebrow pill hover background)

### B. Ship Cove Family (Cool Slate & Dark Section Headings)
* **`#7892bd`** (`--brand-ship-cove`) — Primary Neutral Ship Cove (**Mandatory main card heading color in all dark sections**: Catalog cards, Timeline cards, Dark FAQ cards; client job titles)
* **`#9db8e0`** (`--brand-ship-cove-light`) — Light Blue (Timeline card years, subtle metadata links in dark sections)
* **`#b6cdef`** (`--brand-ship-cove-pale`) — Pale Sky Blue (Award details `.award-details`, pill tag text)
* **`rgba(120, 146, 189, 0.16)`** (`--brand-ship-cove-subtle`) — Ship Cove Tint (Eyebrow badge background `.subtitle-wrap`)
* **`rgba(120, 146, 189, 0.25)`** (`--brand-ship-cove-glow`) — Ship Cove Glow (Soft border and radial accents)

### C. Black Rock Family (Token Grounding Only)
* **`#0c0238`** (`--brand-black-rock`) — Token reference only (DO NOT apply to text, cards, or section backgrounds)
* **`#0d034f`** (`--brand-black-rock-mid`) — Mid Midnight Indigo
* **`#120b6d`** (`--brand-black-rock-deep`) — Deep Royal/Indigo

---

## 3. Secondary Colours (Expressive & Functional Highlights)

Secondary colours are used purposefully to categorize services, highlight key data, and express domain authority without overwhelming brand recognition.

| Hex Code | CSS Variable | Color Name | Category Association | Active Design Role |
| :--- | :--- | :--- | :--- | :--- |
| **`#f23b34`** | `--brand-coral` | Coral Red | Paid Ads & Fast Conversion | High-priority tags, "Instant Leads" chips, urgent metrics |
| **`#f29934`** | `--brand-amber` | Warm Amber | Client Ratings & Automation | Review stars (`.avatar-star`), 5.0 client rating badges, automation chips |
| **`#130344`** | `--brand-indigo` | Deep Twilight Indigo | Ambient Depth & Shadow | Subtle ambient radial glows in dark containers |
| **`#08335e`** | `--brand-petroleum` | Petroleum Blue | SEO & Search Marketing | Organic search badges, technical SEO audit chips |
| **`#8ba1d1`** | `--brand-periwinkle` | Soft Periwinkle | Branding & Creative | Visual identity tags, creative service chips |
| **`#6b9aa5`** | `--brand-slate-teal` | Slate Teal | Web & Custom Technology | Engineering tags, custom platform development chips |

---

## 4. Design Guardrails & Implementation Rules

### 🚫 Strict Negative Rules (What NOT to do)

1. **NEVER use `#0c0238` in card backgrounds, section backgrounds, or font text**:
   - **Card backgrounds** must use the established neutrals: pure white (`#ffffff`), dark card surfaces (`#16181d`), sand/cream (`#fbfbf9`), or `var(--black-900)`.
   - **Section backgrounds** must retain their clean architectural backdrops: pure white (`#ffffff`), warm sand/cream neutrals (`#f7f6f2`, `#faf9f6`, `#f5f3ee`), or dark container backgrounds (`#0d0f12`, `#0a0a0a`).
   - **Font typography** must use standard high-contrast darks (`var(--black-900)`, `#111827`, `#222222`, `#ffffff`), **NEVER `#0c0238`**.

2. **NO Card Borders and NO Shadows (Universal Clean & Flat Card Design)**:
   - Across **all pages** (`index.html`, `about.html`, `services.html`), all cards must have **zero borders** (`border: none !important;`) and **zero box-shadows** (`box-shadow: none !important;`).
   - Applies to: Process cards, Timeline cards, Team cards, Services catalog cards, Stat cards, Pillar cards, Framework cards, FAQ cards, Client blocks, and Award blocks.
   - Hover states must keep cards completely flat: do not add drop shadows or borders on hover. Use subtle background tone shifts (`#1e2127` on dark cards) or micro-transforms instead.

3. **NEVER use vibrant brand colors as whole section backgrounds**:
   - Do **not** set an entire section background to Flamingo `#f26934`, Ship Cove `#7892bd`, or secondary colors.

4. **Avoid "Color Rainbow" Clutter**:
   - Secondary expressive colors must only appear on small UI accents (e.g., 12px pill badges, 6px status dots, or micro-chips), never on large surfaces.

5. **No Unstyled Bootstrap/Tailwind Defaults**:
   - Never introduce generic `#3b82f6` or `#2563eb` blues. Always use the tokenized brand blue (`#7892bd` Ship Cove or `#08335e` Petroleum).

---

### ✅ Positive Guidelines (Subtle, Wise Application)

1. **Dark Section Card Main Headings (`#7892bd`)**:
   - All card main headings inside dark container sections (`#0d0f12`) must use `--brand-ship-cove` (`#7892bd`).
   - Specifically applied to:
     - `.section_catalog .catalog-card-title`, `.catalog-card .catalog-card-title`, `.catalog-card-title`
     - `.section_timeline .timeline-card-title`, `.timeline-card .timeline-card-title`, `.timeline-card-title`
     - `.faq-right .faq-title`

2. **Headline Highlight Gradients**:
   - Highlighted words and phrases in titles (`.highlight-text`, `.gray-color-text`) use an eye-catching gradient:
     `linear-gradient(135deg, var(--brand-flamingo, #f26934) 0%, var(--brand-flamingo-mid, #f28255) 52%, var(--brand-ship-cove, #7892bd) 100%)`.

3. **Micro-Indicators & Pulse Dots**:
   - Use `--brand-flamingo` (`#f26934`) for eyebrow dots (`.services-eyebrow-dot`), `.work-dot`, `.dot-circle`, `.award-dot`, active tabs, and timeline active indicators.
   - Use CSS keyframe pulsing (`pulseDot`) for live/active status indicators.

4. **Process Card Icon Badges**:
   - The circular icon wrap on Process cards (`.process-icon-wrap`, `.process-icon-wrap._03`) uses `--brand-flamingo` (`#f26934`) background.
   - The SVG icon inside is inverted to pure white (`filter: brightness(0) invert(1) !important;`) for crystal-clear visibility.

5. **Metrics & Impact Numbers**:
   - Numerical counters, stats, and years (`.counter-number`, `.counter-numbers`, `.capabilities-year`, `.work-number`) are rendered in bold `--brand-flamingo` (`#f26934`).

6. **Interactive Hover Motion & Underlines**:
   - Nav links feature an active slide-up line using `linear-gradient(90deg, var(--brand-flamingo), var(--brand-flamingo-mid))` with a 2.5px thickness.
   - Capabilities and award items illuminate on hover with a Flamingo-to-Ship Cove gradient rule (`.capabilities-line`).

7. **Client Reviews & Ratings**:
   - 5-star ratings and review icons (`.avatar-star`) use Warm Amber (`#f29934`) via SVG filter:
     `filter: brightness(0) saturate(100%) invert(67%) sepia(85%) saturate(750%) hue-rotate(345deg) brightness(102%) contrast(98%) !important;`

8. **Custom Branded Scrollbar**:
   - Webkit scrollbar styled with `#f7f6f2` track and a smooth vertical gradient thumb (`#f26934` Flamingo to `#7892bd` Ship Cove).

---

## 5. CSS Tokens Reference (`css/style.css`)

```css
:root {
  /* 1. Primary Colours */
  --brand-flamingo: #f26934;        /* Bold, vibrant primary orange */
  --brand-black-rock: #0c0238;      /* Deep midnight dark rock (token only - never for text/bg) */
  --brand-ship-cove: #7892bd;       /* Calming slate blue (dark section card titles & accents) */
  --brand-seashell: #f1f1f1;        /* Soft pale seashell off-white */

  /* 2. Extended Palette - Flamingo Tints */
  --brand-flamingo-mid: #f28255;
  --brand-flamingo-light: #f2a98c;
  --brand-flamingo-glow: rgba(242, 105, 52, 0.22);
  --brand-flamingo-subtle: rgba(242, 105, 52, 0.08);

  /* Extended Palette - Black Rock Shades (Reference Tokens) */
  --brand-black-rock-mid: #0d034f;
  --brand-black-rock-deep: #120b6d;

  /* Extended Palette - Ship Cove Tints */
  --brand-ship-cove-light: #9db8e0;
  --brand-ship-cove-pale: #b6cdef;
  --brand-ship-cove-glow: rgba(120, 146, 189, 0.25);
  --brand-ship-cove-subtle: rgba(120, 146, 189, 0.14);

  /* 3. Secondary Colours */
  --brand-coral: #f23b34;
  --brand-amber: #f29934;
  --brand-indigo: #130344;
  --brand-petroleum: #08335e;
  --brand-periwinkle: #8ba1d1;
  --brand-slate-teal: #6b9aa5;
}

/* Universal Clean & Flat Card Design (No Borders, No Shadows Across All Pages) */
.process-frontpart,
.process-backpart,
.timeline-card,
.team-card,
.services-stat-card,
.pillar-card,
.catalog-card,
.emirate-content-card,
.framework-card,
.faq-single-item,
.client-single-block {
  border: none !important;
  box-shadow: none !important;
}

/* Dark Section Card Main Heading Styling (#7892bd) */
.section_catalog .catalog-card-title,
.catalog-card .catalog-card-title,
.catalog-card-title,
.section_timeline .timeline-card-title,
.timeline-card .timeline-card-title,
.timeline-card-title,
.faq-right .faq-title {
  color: #7892bd !important;
}

/* Process Card Circle Badge & Icon Visibility */
.process-icon-wrap,
.process-icon-wrap._03 {
  background-color: var(--brand-flamingo, #f26934) !important;
}

.process-icon-wrap .process-icon {
  filter: brightness(0) invert(1) !important;
}
```

---

## 6. Page-by-Page Implementation Guide

| Page | Key Brand Implementations |
| :--- | :--- |
| **Homepage** (`index.html`) | • Flamingo-to-Ship Cove gradient on title highlights (`.gray-color-text`, `.highlight-text`).<br>• Flamingo metric numbers (`.counter-number`) and glowing eyebrow dots (`.dot-circle`, `.work-dot`).<br>• Hover states on Capabilities and Awards with gradient dividing lines (`.capabilities-line`).<br>• Amber star filter on client testimonials (`.avatar-star`).<br>• Completely flat cards (no borders, no shadows). |
| **About Us** (`about.html`) | • 3D Process fan-out cards with Flamingo circular icon badges (`.process-icon-wrap`) and inverted white icons.<br>• "Our Journey" dark milestone section: card main headings styled in `#7892bd` (`.timeline-card-title`), active year buttons highlighted.<br>• Leadership and Specialist team cards: clean flat layout with zero borders or shadows.<br>• Newsletter signup button in bold Flamingo (`.newsletter-button`). |
| **Services** (`services.html`) | • Services Hero eyebrow badge with pulsating Flamingo dot (`.services-eyebrow-dot`).<br>• Headline highlight text in Flamingo-to-Ship Cove gradient.<br>• 12-Service Catalog cards in dark container (`#0d0f12`): card headings styled in `#7892bd` (`.catalog-card-title`) with dark flat surfaces (`#16181d`), zero borders, and zero shadows.<br>• UAE Emirate coverage cards and FAQ cards with clean flat styling. |
