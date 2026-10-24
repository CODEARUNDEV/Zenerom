# Known Issues, Risks & Technical Debt: Zenweb (Zenerom UAE)

This document tracks all currently discovered bugs, broken or incomplete functionality, technical debt, and architectural risks verified in the codebase.  
*Note: In accordance with critical rules, no issues have been modified or fixed during this audit.*

---

## 1. Functional Bugs & Broken Links

### ISSUE-001: Missing Target Pages for Internal Navigation Links
- **Severity**: Medium (Partially Resolved / Work in Progress)
- **Evidence**:
  - `index.html`, `about.html`, `services.html`, and `solutions.html` contain anchor tags linking to secondary pages like `/contact`, `/careers`, `/work`, `/privacy-policy`, `/terms-conditions`, `/blog`.
  - Workspace root contains `index.html`, `about.html`, newly implemented `services.html`, and newly implemented `solutions.html`.
- **Affected Area**: Header navigation, footer utility links, case study cards, blog cards, and CTA buttons.
- **Current Behavior**: Primary `/services` and `/solutions` routes are now fully working via `services.html` and `solutions.html`. Clicking uncreated secondary links (`/contact`, `/careers`, etc.) returns `404 Not Found`.
- **Expected Behavior**: Either valid destination HTML files exist, or links point to active anchor sections / external URLs.
- **Possible Impact**: Users clicking unbuilt subpage CTAs (e.g., "Careers") hit dead ends.
- **Status**: **Partially Resolved** (`services.html` and `solutions.html` complete; secondary subpages open).
- **Recommended Next Investigation/Fix**: Create remaining high-priority subpages (`contact.html`, `careers.html`) or route anchors appropriately.

---

### ISSUE-002: Dead Code in `js/main.js` (Hero Video Play/Pause Controller)
- **Severity**: Low (Technical Debt / Dead Code)
- **Evidence**:
  - `js/main.js` lines 62–81 contains an event listener targeting `.hero-video video` and `[data-w-bg-video-control="true"]`.
  - DOM inspection of `index.html` confirms there is no `.hero-video` element and no `<video>` element on the homepage.
  - On `about.html`, the video is structured with id `bungee-about-video` inside `.about-bg-video` and handled separately in `js/about.js`.
- **Affected Area**: `js/main.js` lines 62–81.
- **Current Behavior**: The `querySelector` evaluates to `null` and the block quietly does nothing.
- **Expected Behavior**: Clean codebase without dead event listeners from legacy template iterations.
- **Possible Impact**: Negligible runtime impact (silent no-op), but causes developer confusion.
- **Status**: **Open / Verified**.
- **Recommended Next Investigation/Fix**: Safely remove or gate the dead video listener during future refactoring.

---

### ISSUE-003: Placeholder / Generic Social Profile Links in `index.html`
- **Severity**: Medium (Inconsistent Brand Experience)
- **Evidence**:
  - In `about.html`, social links point to actual agency URLs: `https://www.instagram.com/zenerom.uae`, `https://in.linkedin.com/company/zenerom`, and `https://www.facebook.com/Zeneromuae`.
  - In `index.html`, social links in the sidemenu and footer point to root platform domains: `https://www.instagram.com/`, `https://dribbble.com/`, `https://medium.com/`.
- **Affected Area**: `index.html` sidemenu and footer social blocks.
- **Current Behavior**: Clicking social links on the homepage leads to Instagram/Dribbble/Medium homepages rather than Zenerom UAE's company profiles.
- **Expected Behavior**: Social links should be synchronized with the verified Zenerom UAE company handles.
- **Possible Impact**: Lost social engagement, unprofessional user experience.
- **Status**: **Open / Verified**.
- **Recommended Next Investigation/Fix**: Align `index.html` social URLs with the authentic URLs already present in `about.html`.

---

## 2. Incomplete Features & Integrations

### ISSUE-004: Purely Mocked Client-Side Newsletter Form Submission
- **Severity**: Medium (Incomplete Functionality)
- **Evidence**:
  - `about.html` lines 361 contains `<form id="wf-form-Newsletter-Form" method="get">`.
  - `js/about.js` lines 272–282 attaches an event listener that executes `e.preventDefault()`, hides the form, and displays `.success-message`.
- **Affected Area**: `about.html` newsletter section, `js/about.js`.
- **Current Behavior**: Form submission presents a visual "Thank you! Your submission has been received!" message to the user, but does not send the email address to any backend API, email service (e.g., Mailchimp, SendGrid), or database.
- **Expected Behavior**: Collected leads should be transmitted to an endpoint or CRM.
- **Possible Impact**: Prospective client leads entering emails will not be received by the business.
- **Status**: **Open / Verified**.
- **Recommended Next Investigation/Fix**: Connect the form to an API endpoint or third-party email automation webhook.

---

## 3. Technical Debt & Repository Bloat

### ISSUE-005: Leftover Unused `opentype.js` Dependency in `node_modules`
- **Severity**: Low (Repository Clutter)
- **Evidence**:
  - `node_modules/` exists on disk containing `opentype.js` and `.package-lock.json`.
  - Search across all JS, CSS, and HTML files confirms zero imports or references to `opentype`.
  - No `package.json` exists in the project root.
- **Affected Area**: `node_modules/` (1 folder, ~2.5 MB).
- **Current Behavior**: Idle files residing on disk without purpose.
- **Expected Behavior**: Repository should only contain necessary files.
- **Possible Impact**: Unnecessary disk space and confusion regarding package management.
- **Status**: **Open / Verified**.
- **Recommended Next Investigation/Fix**: Confirm if `opentype.js` was used for a one-off font conversion script; if so, archive or remove `node_modules/`.

---

### ISSUE-006: Redundant Archive and Backup Files in Workspace Root
- **Severity**: Low (Repository Clutter / Disk Usage)
- **Evidence**:
  - Root directory contains:
    - `zenweb.zip` (15,297,145 bytes / 15.3 MB)
    - `about.html.bak` (54,716 bytes / 54.7 KB)
    - `index.original.html` (91,518 bytes / 91.5 KB)
- **Affected Area**: Project root directory.
- **Current Behavior**: Large zip archives and duplicate HTML files occupy repository space.
- **Expected Behavior**: Codebase should rely on Git version control rather than `.bak` copies and root `.zip` archives.
- **Possible Impact**: Increases backup and deployment package sizes.
- **Status**: **Open / Verified**.
- **Recommended Next Investigation/Fix**: Ask user if `zenweb.zip`, `about.html.bak`, and `index.original.html` can be safely removed or archived outside the active web directory.

---

### ISSUE-007: Outdated Project Documentation in `README.md`
- **Severity**: Low (Documentation Drift)
- **Evidence**:
  - `README.md` title is `# PrimeFolio - High-Fidelity Website Replica`.
  - Content describes a portfolio template for freelancers and agencies rather than Zenerom UAE's digital marketing, SEO, and tech services.
- **Affected Area**: `README.md`.
- **Current Behavior**: Documentation references the original upstream template rather than the current client implementation.
- **Expected Behavior**: `README.md` accurately describes Zenerom UAE Agency.
- **Possible Impact**: Confusion for external developers or stakeholders onboarding to the project.
- **Status**: **Open / Verified**.
- **Recommended Next Investigation/Fix**: Update `README.md` to reflect Zenerom UAE branding and scope.

---

### ISSUE-008: Unnecessary External CDN Preconnect in `index.html`
- **Severity**: Low (Performance Optimization)
- **Evidence**:
  - `index.html` line 1 contains `<link href="https://cdn.prod.website-files.com" rel="preconnect" crossorigin="anonymous"/>`.
  - All fonts, scripts, and media are hosted 100% locally in `assets/` and `js/`.
- **Affected Area**: `index.html` `<head>` block.
- **Current Behavior**: Browser initiates a DNS lookup and TLS preconnect to Webflow's CDN that is never used.
- **Expected Behavior**: No unused preconnect headers.
- **Possible Impact**: Minor waste of initial network bandwidth and browser connection socket.
- **Status**: **Open / Verified**.
- **Recommended Next Investigation/Fix**: Remove the preconnect link tag during future HTML cleanup.

---

## 4. Development & Deployment Risks

### ISSUE-009: Missing Local Git Version Control Repository
- **Severity**: Medium (Data Safety Risk)
- **Evidence**:
  - Running `git status` in `e:\xampp\htdocs\zenweb` outputs: `fatal: not a git repository (or any of the parent directories): .git`.
- **Affected Area**: Workspace root.
- **Current Behavior**: Changes made to code files cannot be tracked, diffed, or rolled back using native git commands.
- **Expected Behavior**: Project should have an active git repository with clean commit history.
- **Possible Impact**: Risk of unrecoverable regressions if files are inadvertently deleted or overwritten.
- **Status**: **Open / Verified**.
- **Recommended Next Investigation/Fix**: Recommend user initialize git repository (`git init`) and create an initial commit.

---

### ISSUE-010: Absence of Automated Testing
- **Severity**: Low (Quality Assurance Risk)
- **Evidence**:
  - No testing framework (Jest, Playwright, Cypress, Vitest) is present.
  - No test configuration or automated validation scripts exist.
- **Affected Area**: Entire project.
- **Current Behavior**: All validation must be performed manually via browser subagent or manual browser testing.
- **Expected Behavior**: Visual regression and link validation tests would ensure stability.
- **Possible Impact**: Manual testing overhead on every change.
- **Status**: **Open / Verified**.
- **Recommended Next Investigation/Fix**: Propose lightweight Playwright smoke tests for automated CI validation.
