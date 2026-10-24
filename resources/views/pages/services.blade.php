<x-layouts.app>
  <x-slot:title>Services | Zenerom Dubai Digital Marketing, SEO & Technology Agency</x-slot:title>
  <x-slot:description>Explore Zenerom's full spectrum of digital services in Dubai: Enterprise SEO, Performance Marketing, Custom Web & App Development, Branding, IT Outsourcing & Zoho CRM.</x-slot:description>

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/services.css?v=80') }}"/>
  @endpush

<!-- ========================================================================
       2. Hero Section
       ======================================================================== -->
  <section class="services-hero">
    <div class="container w-container">
      <div class="services-hero-header">
        <div class="services-eyebrow">
          <div class="services-eyebrow-dot"></div>
          <div>What We Do &bull; 360&deg; Digital Growth</div>
        </div>
        <h1 class="services-hero-title">
          High-Performance Marketing &amp; Technology <span class="highlight-text">Built for Dubai</span>
        </h1>
        <p class="services-hero-desc">
          We combine data-driven search dominance, high-ROI performance marketing, custom web &amp; mobile engineering, and dedicated tech outsourcing to turn your digital presence into measurable commercial revenue.
        </p>

        <!-- Quick Stats Row -->
        <div class="services-stats-row">
          <div class="services-stat-card">
            <div class="services-stat-number">10+</div>
            <div class="services-stat-label">Years of UAE Market Dominance</div>
          </div>
          <div class="services-stat-card">
            <div class="services-stat-number">4.9★</div>
            <div class="services-stat-label">Verified Google Client Rating</div>
          </div>
          <div class="services-stat-card">
            <div class="services-stat-number">3.8x</div>
            <div class="services-stat-label">Average Verified Client ROAS</div>
          </div>
          <div class="services-stat-card">
            <div class="services-stat-number">99.4%</div>
            <div class="services-stat-label">Annual Client Retention Rate</div>
          </div>
        </div>
      </div>

      <!-- Marquee of Trusted Clients -->
      <div class="partners-marquee-wrapper" style="margin-top: 1rem;">
        <div class="partners-marquee-effect"></div>
        <div class="partners-marquee-block">
          <img loading="lazy" src="{{ asset('assets/images/clients/corp-creators.webp') }}" alt="Corp Creators logo" title="Corp Creators" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/voltronix.webp') }}" alt="Voltronix logo" title="Voltronix" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/addhouse.webp') }}" alt="Addhouse logo" title="Addhouse" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/statron-international.webp') }}" alt="Statron International logo" title="Statron International" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/h2o-care.webp') }}" alt="H2O Care logo" title="H2O Care" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/hnc.webp') }}" alt="HNC logo" title="HNC" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/bizzone.webp') }}" alt="Bizzone logo" title="Bizzone" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/shuraa-advertising.webp') }}" alt="Shuraa Advertising logo" title="Shuraa Advertising" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/trip-factory.webp') }}" alt="Trip Factory logo" title="Trip Factory" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/tourzone.webp') }}" alt="TourZone logo" title="TourZone" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/aurae.webp') }}" alt="Aurae logo" title="Aurae" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/florkett.webp') }}" alt="FlorKett logo" title="FlorKett" class="partner-logo"/>
        </div>
        <div class="partners-marquee-block" aria-hidden="true">
          <img loading="lazy" src="{{ asset('assets/images/clients/corp-creators.webp') }}" alt="Corp Creators logo" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/voltronix.webp') }}" alt="Voltronix logo" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/addhouse.webp') }}" alt="Addhouse logo" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/statron-international.webp') }}" alt="Statron International logo" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/h2o-care.webp') }}" alt="H2O Care logo" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/hnc.webp') }}" alt="HNC logo" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/bizzone.webp') }}" alt="Bizzone logo" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/shuraa-advertising.webp') }}" alt="Shuraa Advertising logo" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/trip-factory.webp') }}" alt="Trip Factory logo" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/tourzone.webp') }}" alt="TourZone logo" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/aurae.webp') }}" alt="Aurae logo" class="partner-logo"/>
          <img loading="lazy" src="{{ asset('assets/images/clients/florkett.webp') }}" alt="FlorKett logo" class="partner-logo"/>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       3. Flagship Pillars (Featured Core Solutions)
       ======================================================================== -->
  <section class="section_pillars">
    <div class="container w-container">
      <div class="pillars-header">
        <div class="section-subtitle-block center">
          <div class="subtitle-wrap">
            <div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" alt="Icon" class="subtitle-icon"/></div>
            <div class="section-subtitle">Flagship Capabilities</div>
          </div>
        </div>
        <h2 class="heading-style-2 section-title">Four Core Pillars Driving Business Expansion</h2>
      </div>

      <div class="pillars-grid">
        <!-- Pillar 1: Search Dominance -->
        <div class="pillar-card reveal-on-scroll">
          <div class="pillar-media">
            <img src="{{ asset('assets/images/work-image-1.webp') }}" alt="SEO & Search Marketing" class="pillar-media-img" loading="lazy"/>
            <div class="pillar-metric-badge">
              <div class="pillar-metric-dot"></div>
              <span>+340% Avg Organic Traffic Growth</span>
            </div>
          </div>
          <div class="pillar-body">
            <div class="pillar-tag">Search Supremacy</div>
            <h3 class="pillar-title">Enterprise SEO &amp; AEO Optimization</h3>
            <p class="pillar-desc">
              Dominate organic rankings across Google UAE and next-generation AI engines (Perplexity, ChatGPT, Gemini). We build high-converting local map visibility across Dubai, Abu Dhabi, and the Northern Emirates.
            </p>
            <ul class="pillar-deliverables">
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Technical SEO &amp; Core Web Vitals optimization</span>
              </li>
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Local Google Maps 3-Pack placement across all 7 Emirates</span>
              </li>
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Generative Engine Optimization (GEO &amp; AEO) keyword capture</span>
              </li>
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>High-authority GCC digital PR &amp; contextual backlink building</span>
              </li>
            </ul>
            <div class="pillar-footer">
              <a href="{{ route('services.seo') }}" class="pillar-link">
                <span>Explore SEO Specifications</span>
                <img src="{{ asset('assets/icons/arrow-right-b.svg') }}" alt="Arrow" style="width: 14px; height: 14px;"/>
              </a>
            </div>
          </div>
        </div>

        <!-- Pillar 2: Performance Marketing -->
        <div class="pillar-card reveal-on-scroll">
          <div class="pillar-media">
            <img src="{{ asset('assets/images/work-image-2.webp') }}" alt="Performance Marketing" class="pillar-media-img" loading="lazy"/>
            <div class="pillar-metric-badge">
              <div class="pillar-metric-dot"></div>
              <span>AED 45M+ Ad Spend Managed with Profit</span>
            </div>
          </div>
          <div class="pillar-body">
            <div class="pillar-tag">Paid Acquisition</div>
            <h3 class="pillar-title">Google Ads &amp; High-ROI Paid Funnels</h3>
            <p class="pillar-desc">
              Stop bleeding ad spend on unqualified clicks. We architect precision Google Search, Shopping, Meta Ads, and LinkedIn B2B funnels with direct WhatsApp integration tailored for UAE buyers.
            </p>
            <ul class="pillar-deliverables">
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Google Performance Max &amp; high-intent Search campaigns</span>
              </li>
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Meta (Instagram/Facebook) &amp; TikTok video ad creative</span>
              </li>
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>B2B LinkedIn decision-maker lead generation funnels</span>
              </li>
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Full-funnel attribution &amp; live Looker Studio client dashboards</span>
              </li>
            </ul>
            <div class="pillar-footer">
              <a href="{{ route('services.show', 'google-ads-agency-dubai') }}" class="pillar-link">
                <span>Explore Performance Specs</span>
                <img src="{{ asset('assets/icons/arrow-right-b.svg') }}" alt="Arrow" style="width: 14px; height: 14px;"/>
              </a>
            </div>
          </div>
        </div>

        <!-- Pillar 3: Web & App Engineering -->
        <div class="pillar-card reveal-on-scroll">
          <div class="pillar-media">
            <img src="{{ asset('assets/images/work-image-3.webp') }}" alt="Web & App Development" class="pillar-media-img" loading="lazy"/>
            <div class="pillar-metric-badge">
              <div class="pillar-metric-dot"></div>
              <span>&lt;0.8s Page Load &bull; 100% Core Web Vitals</span>
            </div>
          </div>
          <div class="pillar-body">
            <div class="pillar-tag">Digital Engineering</div>
            <h3 class="pillar-title">Custom Websites, E-Commerce &amp; Apps</h3>
            <p class="pillar-desc">
              We design and build bespoke, lighting-fast websites, custom E-commerce storefronts, and cross-platform mobile apps engineered to convert high-value prospects into closed accounts.
            </p>
            <ul class="pillar-deliverables">
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Ultra-fast responsive business websites (<0.8s load times)</span>
              </li>
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Custom Shopify &amp; WooCommerce E-commerce platforms</span>
              </li>
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Native iOS &amp; Android applications (React Native / Flutter)</span>
              </li>
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Headless architecture, cloud portals &amp; custom API integrations</span>
              </li>
            </ul>
            <div class="pillar-footer">
              <a href="{{ route('services.show', 'website-development-dubai') }}" class="pillar-link">
                <span>Explore Engineering Specs</span>
                <img src="{{ asset('assets/icons/arrow-right-b.svg') }}" alt="Arrow" style="width: 14px; height: 14px;"/>
              </a>
            </div>
          </div>
        </div>

        <!-- Pillar 4: Outsourcing & CRM -->
        <div class="pillar-card reveal-on-scroll">
          <div class="pillar-media">
            <img src="{{ asset('assets/images/work-image-4.webp') }}" alt="IT Outsourcing & CRM" class="pillar-media-img" loading="lazy"/>
            <div class="pillar-metric-badge">
              <div class="pillar-metric-dot"></div>
              <span>Dedicated Squad &bull; Zero Hiring Overhead</span>
            </div>
          </div>
          <div class="pillar-body">
            <div class="pillar-tag">Enterprise &amp; CRM</div>
            <h3 class="pillar-title">Dedicated IT Outsourcing &amp; Zoho CRM</h3>
            <p class="pillar-desc">
              Scale your team instantly with pre-vetted full-time developers, designers, and marketing specialists, paired with enterprise Zoho CRM workflows that ensure zero leads ever slip through the cracks.
            </p>
            <ul class="pillar-deliverables">
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Vetted full-time developers (React, Node, WordPress, Mobile)</span>
              </li>
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Certified Zoho CRM setup, pipeline automation &amp; migration</span>
              </li>
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>WhatsApp Business Cloud API automated routing &amp; instant follow-up</span>
              </li>
              <li class="pillar-deliverable-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Flexible monthly engagements with zero UAE visa or gratuity liabilities</span>
              </li>
            </ul>
            <div class="pillar-footer">
              <a href="{{ route('services.show', 'it-outsourcing-dubai') }}" class="pillar-link">
                <span>Explore Outsourcing Specs</span>
                <img src="{{ asset('assets/icons/arrow-right-b.svg') }}" alt="Arrow" style="width: 14px; height: 14px;"/>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       4. Interactive 12-Service Catalog with Category Filters
       ======================================================================== -->
  <section id="catalog" class="section_catalog">
    <div class="container w-container">
      <div class="catalog-header">
        <div class="section-eyebrow is-dark" style="background: rgba(255,255,255,0.1); color: #fff; border-color: rgba(255,255,255,0.2);">
          <div class="section-eyebrow-dot" style="background:#60a5fa;"></div>
          <div>Comprehensive Service Matrix</div>
        </div>
        <h2 class="heading-style-2 section-title is-inverse catalog-title" style="margin-top: 1rem;">
          Specialized Services Tailored for High-Growth Brands
        </h2>
        <p style="color: #94a3b8; font-size: 1.1rem; line-height: 1.6; max-width: 680px; margin: 1rem auto 0;">
          Select a category below to explore specific deliverables, methodologies, and commercial guarantees.
        </p>
      </div>

      <!-- Filter Tabs -->
      <div class="catalog-tabs">
        <button type="button" class="catalog-tab-btn is-active" data-filter="all">All Solutions (12)</button>
        <button type="button" class="catalog-tab-btn" data-filter="marketing">Search &amp; Performance</button>
        <button type="button" class="catalog-tab-btn" data-filter="development">Web &amp; App Development</button>
        <button type="button" class="catalog-tab-btn" data-filter="creative">Branding &amp; Creative</button>
        <button type="button" class="catalog-tab-btn" data-filter="enterprise">IT Outsourcing &amp; CRM</button>
      </div>

      <!-- Catalog 12 Cards Grid -->
      <div class="catalog-grid">
        <!-- 01. SEO Services in Dubai -->
        <div class="catalog-card" data-category="marketing">
          <div>
            <div class="catalog-card-top">
              <span class="catalog-card-num">01 / SEARCH</span>
              <span class="catalog-card-badge">Organic Growth</span>
            </div>
            <h3 class="catalog-card-title">SEO Services in Dubai</h3>
            <p class="catalog-card-desc">
              Data-backed keyword dominance, in-depth technical audits, content clusters, and high-tier link building that secure durable page-one rankings across Google UAE.
            </p>
            <div class="catalog-card-pills">
              <span class="catalog-pill">Technical Audits</span>
              <span class="catalog-pill">Bilingual Arabic/English</span>
              <span class="catalog-pill">Core Web Vitals</span>
              <span class="catalog-pill">Competitor GAP</span>
            </div>
          </div>
          <div class="catalog-card-action">
            <a href="{{ route('services.seo') }}" class="catalog-action-btn">
              <span>Explore SEO Strategy</span>
              <img src="{{ asset('assets/icons/arrow-right-w.svg') }}" alt="Arrow" style="width: 12px; height: 12px;"/>
            </a>
          </div>
        </div>

        <!-- 02. Google Ads Agency Dubai -->
        <div class="catalog-card" data-category="marketing">
          <div>
            <div class="catalog-card-top">
              <span class="catalog-card-num">02 / PAID</span>
              <span class="catalog-card-badge">Instant Leads</span>
            </div>
            <h3 class="catalog-card-title">Google Ads &amp; Search (SEM)</h3>
            <p class="catalog-card-desc">
              Hyper-targeted Google Search Ads, Shopping feeds, and Performance Max campaigns with strict negative keyword filters to drive qualified inbound commercial inquiries.
            </p>
            <div class="catalog-card-pills">
              <span class="catalog-pill">Performance Max</span>
              <span class="catalog-pill">Negative Filters</span>
              <span class="catalog-pill">ROAS Tracking</span>
              <span class="catalog-pill">High Quality Score</span>
            </div>
          </div>
          <div class="catalog-card-action">
            <a href="{{ route('services.show', 'google-ads-agency-dubai') }}" class="catalog-action-btn">
              <span>Scale Google Ads</span>
              <img src="{{ asset('assets/icons/arrow-right-w.svg') }}" alt="Arrow" style="width: 12px; height: 12px;"/>
            </a>
          </div>
        </div>

        <!-- 03. Social Media Marketing Dubai -->
        <div class="catalog-card" data-category="marketing">
          <div>
            <div class="catalog-card-top">
              <span class="catalog-card-num">03 / SOCIAL</span>
              <span class="catalog-card-badge">Brand Authority</span>
            </div>
            <h3 class="catalog-card-title">Social Media Marketing &amp; Ads</h3>
            <p class="catalog-card-desc">
              End-to-end management across Instagram, LinkedIn, TikTok, and Meta. High-engagement video reels, paid ad funnels, and community growth built for the Dubai demographic.
            </p>
            <div class="catalog-card-pills">
              <span class="catalog-pill">Short-Form Video</span>
              <span class="catalog-pill">Paid Retargeting</span>
              <span class="catalog-pill">B2B LinkedIn</span>
              <span class="catalog-pill">Influencer Sync</span>
            </div>
          </div>
          <div class="catalog-card-action">
            <a href="{{ route('services.show', 'social-media-marketing-dubai') }}" class="catalog-action-btn">
              <span>Launch Campaigns</span>
              <img src="{{ asset('assets/icons/arrow-right-w.svg') }}" alt="Arrow" style="width: 12px; height: 12px;"/>
            </a>
          </div>
        </div>

        <!-- 04. Lead Generation in Dubai -->
        <div class="catalog-card" data-category="marketing">
          <div>
            <div class="catalog-card-top">
              <span class="catalog-card-num">04 / REVENUE</span>
              <span class="catalog-card-badge">Qualified Inquiries</span>
            </div>
            <h3 class="catalog-card-title">Performance Lead Generation</h3>
            <p class="catalog-card-desc">
              Full-funnel lead generation architectures combining frictionless landing pages, automated WhatsApp qualifying bots, and direct CRM pipeline routing.
            </p>
            <div class="catalog-card-pills">
              <span class="catalog-pill">Frictionless Forms</span>
              <span class="catalog-pill">Instant WhatsApp</span>
              <span class="catalog-pill">B2B Qualifying</span>
              <span class="catalog-pill">CPA Minimization</span>
            </div>
          </div>
          <div class="catalog-card-action">
            <a href="{{ route('services.show', 'lead-generation-dubai') }}" class="catalog-action-btn">
              <span>Accelerate Leads</span>
              <img src="{{ asset('assets/icons/arrow-right-w.svg') }}" alt="Arrow" style="width: 12px; height: 12px;"/>
            </a>
          </div>
        </div>

        <!-- 05. Website Development Dubai -->
        <div class="catalog-card" data-category="development">
          <div>
            <div class="catalog-card-top">
              <span class="catalog-card-num">05 / WEB</span>
              <span class="catalog-card-badge">Fast &amp; Custom</span>
            </div>
            <h3 class="catalog-card-title">Custom Website Development</h3>
            <p class="catalog-card-desc">
              Bespoke, hand-crafted corporate websites designed for speed, security, and conversion. Zero bloated themes, sub-second load times, and fluid mobile responsiveness.
            </p>
            <div class="catalog-card-pills">
              <span class="catalog-pill">Clean HTML5/CSS3</span>
              <span class="catalog-pill">Sub-Second Speed</span>
              <span class="catalog-pill">Mobile First</span>
              <span class="catalog-pill">Headless Architecture</span>
            </div>
          </div>
          <div class="catalog-card-action">
            <a href="{{ route('services.show', 'website-development-dubai') }}" class="catalog-action-btn">
              <span>Build Website</span>
              <img src="{{ asset('assets/icons/arrow-right-w.svg') }}" alt="Arrow" style="width: 12px; height: 12px;"/>
            </a>
          </div>
        </div>

        <!-- 06. Ecommerce Development -->
        <div class="catalog-card" data-category="development">
          <div>
            <div class="catalog-card-top">
              <span class="catalog-card-num">06 / E-COMMERCE</span>
              <span class="catalog-card-badge">High Conversion</span>
            </div>
            <h3 class="catalog-card-title">E-Commerce Platforms (Shopify)</h3>
            <p class="catalog-card-desc">
              High-converting digital storefronts on Shopify, WooCommerce, or custom platforms with GCC payment gateway integrations (Telr, Stripe, Tabby, Tamara) and localized multi-currency checkouts.
            </p>
            <div class="catalog-card-pills">
              <span class="catalog-pill">Shopify Plus</span>
              <span class="catalog-pill">GCC Payments</span>
              <span class="catalog-pill">Tabby / Tamara</span>
              <span class="catalog-pill">Optimized Checkout</span>
            </div>
          </div>
          <div class="catalog-card-action">
            <a href="{{ route('services.show', 'ecommerce-development-dubai') }}" class="catalog-action-btn">
              <span>Launch Store</span>
              <img src="{{ asset('assets/icons/arrow-right-w.svg') }}" alt="Arrow" style="width: 12px; height: 12px;"/>
            </a>
          </div>
        </div>

        <!-- 07. Mobile App Development -->
        <div class="catalog-card" data-category="development">
          <div>
            <div class="catalog-card-top">
              <span class="catalog-card-num">07 / MOBILE</span>
              <span class="catalog-card-badge">iOS &amp; Android</span>
            </div>
            <h3 class="catalog-card-title">Mobile App Development</h3>
            <p class="catalog-card-desc">
              High-performance native and cross-platform (React Native, Flutter) mobile applications with seamless backend API integrations, real-time push notifications, and App Store approval.
            </p>
            <div class="catalog-card-pills">
              <span class="catalog-pill">React Native</span>
              <span class="catalog-pill">Flutter</span>
              <span class="catalog-pill">Apple &amp; Play Store</span>
              <span class="catalog-pill">Offline Sync</span>
            </div>
          </div>
          <div class="catalog-card-action">
            <a href="{{ route('services.show', 'mobile-app-development-dubai') }}" class="catalog-action-btn">
              <span>Develop Mobile App</span>
              <img src="{{ asset('assets/icons/arrow-right-w.svg') }}" alt="Arrow" style="width: 12px; height: 12px;"/>
            </a>
          </div>
        </div>

        <!-- 08. Custom Web Applications & SaaS -->
        <div class="catalog-card" data-category="development">
          <div>
            <div class="catalog-card-top">
              <span class="catalog-card-num">08 / SAAS</span>
              <span class="catalog-card-badge">Cloud Apps</span>
            </div>
            <h3 class="catalog-card-title">Web Applications &amp; Cloud Portals</h3>
            <p class="catalog-card-desc">
              Scalable web applications, custom B2B client portals, booking engines, and internal administration dashboards built with clean architectures and automated tests.
            </p>
            <div class="catalog-card-pills">
              <span class="catalog-pill">Client Portals</span>
              <span class="catalog-pill">Custom Dashboards</span>
              <span class="catalog-pill">REST &amp; GraphQL</span>
              <span class="catalog-pill">Role Auth</span>
            </div>
          </div>
          <div class="catalog-card-action">
            <a href="{{ route('services.show', 'web-application-development-dubai') }}" class="catalog-action-btn">
              <span>Discuss Platform</span>
              <img src="{{ asset('assets/icons/arrow-right-w.svg') }}" alt="Arrow" style="width: 12px; height: 12px;"/>
            </a>
          </div>
        </div>

        <!-- 09. Brand Identity & Creative -->
        <div class="catalog-card" data-category="creative">
          <div>
            <div class="catalog-card-top">
              <span class="catalog-card-num">09 / BRANDING</span>
              <span class="catalog-card-badge">Identity Systems</span>
            </div>
            <h3 class="catalog-card-title">Branding &amp; UI/UX Design</h3>
            <p class="catalog-card-desc">
              Distinctive brand identities, logo marks, corporate design systems, and Figma UI/UX prototypes that command respect in the competitive Dubai marketplace.
            </p>
            <div class="catalog-card-pills">
              <span class="catalog-pill">Brand Guidelines</span>
              <span class="catalog-pill">Figma Systems</span>
              <span class="catalog-pill">Micro-Interactions</span>
              <span class="catalog-pill">Typography Design</span>
            </div>
          </div>
          <div class="catalog-card-action">
            <a href="{{ route('services.show', 'branding-agency-dubai') }}" class="catalog-action-btn">
              <span>Build Brand</span>
              <img src="{{ asset('assets/icons/arrow-right-w.svg') }}" alt="Arrow" style="width: 12px; height: 12px;"/>
            </a>
          </div>
        </div>

        <!-- 10. Video Advertising & Production -->
        <div class="catalog-card" data-category="creative">
          <div>
            <div class="catalog-card-top">
              <span class="catalog-card-num">10 / VIDEO</span>
              <span class="catalog-card-badge">High Impact</span>
            </div>
            <h3 class="catalog-card-title">Video Advertising &amp; Production</h3>
            <p class="catalog-card-desc">
              Cinematic corporate brand videos, social reels, 3D product motion graphics, and paid video ad cuts engineered specifically for high conversion rates.
            </p>
            <div class="catalog-card-pills">
              <span class="catalog-pill">Commercial Shoots</span>
              <span class="catalog-pill">3D Motion Graphics</span>
              <span class="catalog-pill">Hook Optimization</span>
              <span class="catalog-pill">Reels &amp; TikTok Ads</span>
            </div>
          </div>
          <div class="catalog-card-action">
            <a href="{{ route('services.show', 'video-production-dubai') }}" class="catalog-action-btn">
              <span>Produce Video</span>
              <img src="{{ asset('assets/icons/arrow-right-w.svg') }}" alt="Arrow" style="width: 12px; height: 12px;"/>
            </a>
          </div>
        </div>

        <!-- 11. Zoho Implementation & Automation -->
        <div class="catalog-card" data-category="enterprise">
          <div>
            <div class="catalog-card-top">
              <span class="catalog-card-num">11 / CRM</span>
              <span class="catalog-card-badge">Process Scale</span>
            </div>
            <h3 class="catalog-card-title">Zoho Implementation &amp; CRM</h3>
            <p class="catalog-card-desc">
              End-to-end Zoho One and Zoho CRM deployment, automated pipeline workflows, sales notification routing, and seamless integration with web contact forms and WhatsApp.
            </p>
            <div class="catalog-card-pills">
              <span class="catalog-pill">Zoho One Suite</span>
              <span class="catalog-pill">Pipeline Automation</span>
              <span class="catalog-pill">Lead Auto-Routing</span>
              <span class="catalog-pill">Custom Deluge Scripts</span>
            </div>
          </div>
          <div class="catalog-card-action">
            <a href="{{ route('services.show', 'zoho-implementation-dubai') }}" class="catalog-action-btn">
              <span>Automate CRM</span>
              <img src="{{ asset('assets/icons/arrow-right-w.svg') }}" alt="Arrow" style="width: 12px; height: 12px;"/>
            </a>
          </div>
        </div>

        <!-- 12. IT Outsourcing Company Dubai -->
        <div class="catalog-card" data-category="enterprise">
          <div>
            <div class="catalog-card-top">
              <span class="catalog-card-num">12 / TALENT</span>
              <span class="catalog-card-badge">Zero Overhead</span>
            </div>
            <h3 class="catalog-card-title">IT &amp; Developer Outsourcing</h3>
            <p class="catalog-card-desc">
              Deploy dedicated, vetted developers, WordPress engineers, mobile app developers, and marketing specialists managed under clear SLAs with no hiring, visa, or severance overhead.
            </p>
            <div class="catalog-card-pills">
              <span class="catalog-pill">Dedicated Developers</span>
              <span class="catalog-pill">Strict SLAs</span>
              <span class="catalog-pill">Zero Visa Liability</span>
              <span class="catalog-pill">Direct Daily Sync</span>
            </div>
          </div>
          <div class="catalog-card-action">
            <a href="{{ route('services.show', 'it-outsourcing-dubai') }}" class="catalog-action-btn">
              <span>Hire Tech Squad</span>
              <img src="{{ asset('assets/icons/arrow-right-w.svg') }}" alt="Arrow" style="width: 12px; height: 12px;"/>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       5. Local SEO Emirates Dominance Matrix (Interactive UAE Coverage)
       ======================================================================== -->
  <section class="section_emirates">
    <div class="container w-container">
      <div class="emirates-wrapper">
        <div class="emirates-header">
          <div class="section-subtitle-block center">
            <div class="subtitle-wrap">
              <div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" alt="Icon" class="subtitle-icon"/></div>
              <div class="section-subtitle">Nationwide UAE Reach</div>
            </div>
          </div>
          <h2 class="heading-style-2 section-title">Local SEO Across All 7 United Arab Emirates</h2>
          <p style="color: #555; font-size: 1.05rem; margin-top: 0.75rem;">
            Click any emirate below to view specialized local search strategies, district coverage, and verified market velocity.
          </p>
        </div>

        <!-- Emirate Switcher Buttons -->
        <div class="emirates-nav">
          <button type="button" class="emirate-btn is-active" data-emirate="dubai">Dubai</button>
          <button type="button" class="emirate-btn" data-emirate="abudhabi">Abu Dhabi</button>
          <button type="button" class="emirate-btn" data-emirate="sharjah">Sharjah</button>
          <button type="button" class="emirate-btn" data-emirate="rak">Ras Al Khaimah</button>
          <button type="button" class="emirate-btn" data-emirate="fujairah">Fujairah</button>
          <button type="button" class="emirate-btn" data-emirate="ajman">Ajman</button>
          <button type="button" class="emirate-btn" data-emirate="uaq">Umm Al Quwain</button>
        </div>

        <!-- Dynamic Content Card -->
        <div class="emirate-content-card">
          <div class="emirate-card-left">
            <h3 class="emirate-card-title">Local SEO Dominance in Dubai</h3>
            <p class="emirate-card-desc">
              Capture high-ticket commercial searches in the UAE’s most competitive business hub. We optimize your Google Business Profile, organic keywords, and local intent maps so you rank #1 across Downtown, Business Bay, Dubai Marina, JLT, DIFC, and Al Quoz.
            </p>
            <ul class="emirate-features-list">
              <li class="emirate-feature-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Top 3 Google Maps Pack Ranking for high-intent queries</span>
              </li>
              <li class="emirate-feature-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Bilingual English &amp; Arabic search keyword optimization</span>
              </li>
              <li class="emirate-feature-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Direct call &amp; WhatsApp conversion tracking on local listings</span>
              </li>
              <li class="emirate-feature-item">
                <img src="{{ asset('assets/icons/Check-Icon.svg') }}" alt="Check" class="pillar-check-icon"/>
                <span>Authority citations across verified UAE business directories</span>
              </li>
            </ul>
            <a href="{{ route('contact') }}" class="primary-button w-inline-block">
              <div class="button-dot-wrap"><div class="button-dot"></div><div class="button-bg"></div></div>
              <div class="button-text emirate-btn-label">Dominate Dubai Local SEO</div>
            </a>
          </div>

          <div class="emirate-side-box">
            <h4 class="emirate-side-title">Key Target Districts</h4>
            <div class="emirate-districts-wrap">
              <span class="district-badge">Business Bay</span>
              <span class="district-badge">Downtown Dubai</span>
              <span class="district-badge">Dubai Marina</span>
              <span class="district-badge">DIFC</span>
              <span class="district-badge">JLT</span>
              <span class="district-badge">Deira</span>
              <span class="district-badge">Al Quoz</span>
              <span class="district-badge">Palm Jumeirah</span>
            </div>
            <div style="border-top: 1px solid rgba(0,0,0,0.08); padding-top: 1.25rem;">
              <div class="emirate-stat-num" style="font-size: 2rem; font-weight: 700; color: #0d0f12;">1,400+</div>
              <div class="emirate-stat-label" style="font-size: 0.85rem; color: #666;">Monthly High-Intent Enquiries</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       6. 4-Step Strategic Delivery Framework (Our Process)
       ======================================================================== -->
  <section class="section_framework">
    <div class="container w-container">
      <div class="pillars-header" style="margin-bottom: 2rem;">
        <div class="section-subtitle-block center">
          <div class="subtitle-wrap">
            <div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" alt="Icon" class="subtitle-icon"/></div>
            <div class="section-subtitle">Execution Methodology</div>
          </div>
        </div>
        <h2 class="heading-style-2 section-title">Our Proven 4-Step Growth Delivery Cycle</h2>
        <p style="color: #666; font-size: 1.05rem; margin-top: 0.75rem;">
          How we systematically transform digital opportunities into verifiable bottom-line revenue.
        </p>
      </div>

      <div class="framework-grid">
        <div class="framework-card reveal-on-scroll">
          <div class="framework-step-badge">01</div>
          <h3 class="framework-step-title">Forensic Audit &amp; Intelligence</h3>
          <p class="framework-step-desc">
            We deconstruct competitor funnels, technical performance bottlenecks, keyword gaps, and user search intent to map your exact market opportunity.
          </p>
        </div>

        <div class="framework-card reveal-on-scroll">
          <div class="framework-step-badge">02</div>
          <h3 class="framework-step-title">Growth Architecture</h3>
          <p class="framework-step-desc">
            We construct a clear, milestone-driven roadmap defining exact deliverables, ad budgets, technology architecture, and measurable commercial KPIs.
          </p>
        </div>

        <div class="framework-card reveal-on-scroll">
          <div class="framework-step-badge">03</div>
          <h3 class="framework-step-title">Rapid Execution &amp; Launch</h3>
          <p class="framework-step-desc">
            Our specialized Dubai marketing and development squad implements high-converting assets, launches paid ad campaigns, and deploys clean code.
          </p>
        </div>

        <div class="framework-card reveal-on-scroll">
          <div class="framework-step-badge">04</div>
          <h3 class="framework-step-title">Data Optimization &amp; Scale</h3>
          <p class="framework-step-desc">
            We leverage daily analytics, live conversion tracking, and CRM automation to continuously lower acquisition costs and scale top-line returns.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       7. Technology & Tools Ecosystem
       ======================================================================== -->
  <section class="section_tech_stack">
    <div class="container w-container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto;">
        <div class="section-subtitle-block center">
          <div class="subtitle-wrap">
            <div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" alt="Icon" class="subtitle-icon"/></div>
            <div class="section-subtitle">Platforms &amp; Tooling</div>
          </div>
        </div>
        <h2 class="heading-style-2 section-title" style="font-size: 2rem;">Built On World-Class Technology</h2>
      </div>

      <div class="tech-stack-grid">
        <div class="tech-item">Google Ads &amp; GA4</div>
        <div class="tech-item">Meta Business Suite</div>
        <div class="tech-item">LinkedIn Marketing</div>
        <div class="tech-item">SEMrush &amp; Ahrefs</div>
        <div class="tech-item">Shopify Plus</div>
        <div class="tech-item">Zoho CRM &amp; One</div>
        <div class="tech-item">WordPress / Headless</div>
        <div class="tech-item">React &amp; Next.js</div>
        <div class="tech-item">Node.js &amp; REST APIs</div>
        <div class="tech-item">Flutter &amp; Mobile</div>
        <div class="tech-item">Figma UI/UX Systems</div>
        <div class="tech-item">WhatsApp Cloud API</div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       8. Services FAQ Accordion
       ======================================================================== -->
  <section class="section faq">
    <div class="w-layout-blockcontainer container w-container">
      <div class="faq-wrapper">
        <div class="section-title-wrap faq">
          <div class="section-subtitle-block">
            <div class="subtitle-wrap">
              <div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" loading="lazy" alt="Inner Subtitle Icon" class="subtitle-icon"/></div>
              <div class="section-subtitle">FAQ</div>
            </div>
          </div>
          <h2 class="section-title faq">Frequently Asked <span class="gray-color-text">Questions</span></h2>
        </div>

        <div class="faq-wrap">
          <div class="faq-left">
            <div class="faq-tabs-menu">
              
              <!-- FAQ Item 1 -->
              <div class="faq-single-item active">
                <div class="faq-question-wrap">
                  <div class="faq-question">How quickly can we see measurable results from SEO vs Google Ads?</div>
                  <div class="faq-icon-wrap">
                    <img loading="lazy" src="{{ asset('assets/icons/faq-plus.svg') }}" alt="Faq Icon" class="faq-icon plus"/>
                    <img loading="lazy" src="{{ asset('assets/icons/faq-minus.svg') }}" alt="Faq Icon" class="faq-icon minus"/>
                  </div>
                </div>
                <div class="faq-answer-wrap">
                  <p class="faq-answer">Google Ads and performance marketing generate qualified inbound inquiries within 48 to 72 hours of campaign launch. SEO is a compounding long-term growth asset where noticeable ranking improvements and Google Map Pack traction emerge within 60 to 90 days, followed by sustained, cost-effective organic dominance.</p>
                </div>
              </div>

              <!-- FAQ Item 2 -->
              <div class="faq-single-item">
                <div class="faq-question-wrap">
                  <div class="faq-question">Do we get a dedicated account manager and team based in Dubai?</div>
                  <div class="faq-icon-wrap">
                    <img loading="lazy" src="{{ asset('assets/icons/faq-plus.svg') }}" alt="Faq Icon" class="faq-icon plus"/>
                    <img loading="lazy" src="{{ asset('assets/icons/faq-minus.svg') }}" alt="Faq Icon" class="faq-icon minus"/>
                  </div>
                </div>
                <div class="faq-answer-wrap">
                  <p class="faq-answer">Yes. Every client is assigned a dedicated growth manager based at our Dubai office in Burjuman Business Tower. You have direct communication via phone, email, and dedicated WhatsApp groups, alongside weekly performance check-ins and monthly transparent reports.</p>
                </div>
              </div>

              <!-- FAQ Item 3 -->
              <div class="faq-single-item">
                <div class="faq-question-wrap">
                  <div class="faq-question">How does your dedicated developer and IT outsourcing model work?</div>
                  <div class="faq-icon-wrap">
                    <img loading="lazy" src="{{ asset('assets/icons/faq-plus.svg') }}" alt="Faq Icon" class="faq-icon plus"/>
                    <img loading="lazy" src="{{ asset('assets/icons/faq-minus.svg') }}" alt="Faq Icon" class="faq-icon minus"/>
                  </div>
                </div>
                <div class="faq-answer-wrap">
                  <p class="faq-answer">Our IT outsourcing allows you to hire full-time developers, web specialists, and SEO experts dedicated 100% to your company under strict SLAs. We manage technical screening, equipment, and administrative overhead, relieving you of UAE visa costs, health insurance, and end-of-service gratuity liabilities.</p>
                </div>
              </div>

              <!-- FAQ Item 4 -->
              <div class="faq-single-item">
                <div class="faq-question-wrap">
                  <div class="faq-question">Can Zenerom implement or migrate our CRM without sales downtime?</div>
                  <div class="faq-icon-wrap">
                    <img loading="lazy" src="{{ asset('assets/icons/faq-plus.svg') }}" alt="Faq Icon" class="faq-icon plus"/>
                    <img loading="lazy" src="{{ asset('assets/icons/faq-minus.svg') }}" alt="Faq Icon" class="faq-icon minus"/>
                  </div>
                </div>
                <div class="faq-answer-wrap">
                  <p class="faq-answer">Absolutely. Our certified Zoho CRM engineers build, test, and validate data migration in a sandbox staging environment. Once verified, we execute seamless live cutovers with zero operational disruption, followed by comprehensive staff training and pipeline optimization.</p>
                </div>
              </div>

              <!-- FAQ Item 5 -->
              <div class="faq-single-item">
                <div class="faq-question-wrap">
                  <div class="faq-question">What contracts and engagement models are available?</div>
                  <div class="faq-icon-wrap">
                    <img loading="lazy" src="{{ asset('assets/icons/faq-plus.svg') }}" alt="Faq Icon" class="faq-icon plus"/>
                    <img loading="lazy" src="{{ asset('assets/icons/faq-minus.svg') }}" alt="Faq Icon" class="faq-icon minus"/>
                  </div>
                </div>
                <div class="faq-answer-wrap">
                  <p class="faq-answer">We offer both flexible monthly retainers for continuous marketing and SEO, and milestone-based fixed contracts for web and application engineering. We believe in earning your business every single month through transparent, measurable ROI rather than restrictive multi-year lock-ins.</p>
                </div>
              </div>

              <!-- FAQ Item 6 -->
              <div class="faq-single-item">
                <div class="faq-question-wrap">
                  <div class="faq-question">Do you offer bilingual English and Arabic campaigns?</div>
                  <div class="faq-icon-wrap">
                    <img loading="lazy" src="{{ asset('assets/icons/faq-plus.svg') }}" alt="Faq Icon" class="faq-icon plus"/>
                    <img loading="lazy" src="{{ asset('assets/icons/faq-minus.svg') }}" alt="Faq Icon" class="faq-icon minus"/>
                  </div>
                </div>
                <div class="faq-answer-wrap">
                  <p class="faq-answer">Yes. All our digital marketing, SEO, Google Ads copy, and website landing pages are natively crafted and localized in both English and professional Arabic to maximize reach and trust across local Emirati, GCC, and expat demographics.</p>
                </div>
              </div>

            </div>
          </div>

          <!-- FAQ Right Card -->
          <div class="faq-right">
            <div class="faq-image-wrap">
              <img src="{{ asset('assets/images/fag-image-1.webp') }}" alt="Faq Avatar Image" class="faq-image"/>
            </div>
            <div class="faq-title-wrap">
              <div class="faq-title">Have questions? Book a strategy call.</div>
              <p class="faq-details"><span class="black-color">Talk with our strategists about </span>your digital marketing, technology, and next growth steps.</p>
            </div>
            <div class="faq-button">
              <a data-wf--primary-button--variant="base" href="{{ route('contact') }}" class="primary-button w-inline-block">
                <div class="button-dot-wrap"><div class="button-dot"></div><div class="button-bg"></div></div>
                <div class="button-text">Start Conversation</div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ========================================================================
       9. Conversion CTA Section
       ======================================================================== -->
  <section class="section cta">
    <div class="w-layout-blockcontainer container w-container">
      <div class="cta-wrapper">
        <div class="cta-wrap">
          <div class="subtitle-wrapper">
            <div class="subtitle-wrap">
              <div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" alt="Icon" class="subtitle-icon"/></div>
              <div class="subtitle-text"><span>Ready to Scale?</span></div>
            </div>
          </div>
          <h2 class="cta-title">Build measurable digital growth together</h2>
          <div class="cta-button">
            <a href="{{ route('contact') }}" class="primary-button w-inline-block">
              <div class="button-dot-wrap"><div class="button-dot"></div><div class="button-bg"></div></div>
              <div class="button-text">Book a Strategy Session</div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="cta-image-block">
      <div class="cta-image-wrapper">
        <div class="cta-image-wrap _01"><img loading="lazy" src="{{ asset('assets/images/cta-image-1.webp') }}" alt="Avatar" class="cta-image"/></div>
        <div class="cta-image-wrap _02"><img loading="lazy" src="{{ asset('assets/images/cta-image-3.webp') }}" alt="Avatar" class="cta-image"/></div>
        <div class="cta-image-wrap _03"><img loading="lazy" src="{{ asset('assets/images/cta-image-2.webp') }}" alt="Avatar" class="cta-image"/></div>
        <div class="cta-image-wrap _04"><img loading="lazy" src="{{ asset('assets/images/cta-image-6.webp') }}" alt="Avatar" class="cta-image"/></div>
        <div class="cta-image-wrap _05"><img loading="lazy" src="{{ asset('assets/images/cta-image-5.webp') }}" alt="Avatar" class="cta-image"/></div>
        <div class="cta-image-wrap _06"><img loading="lazy" src="{{ asset('assets/images/cta-image-1.webp') }}" alt="Avatar" class="cta-image"/></div>
        <div class="cta-image-wrap _07"><img loading="lazy" src="{{ asset('assets/images/cta-image-7.webp') }}" alt="Avatar" class="cta-image"/></div>
        <div class="cta-image-wrap _08"><img loading="lazy" src="{{ asset('assets/images/cta-image-8.webp') }}" alt="Avatar" class="cta-image"/></div>
        <div class="cta-image-wrap _09"><img loading="lazy" src="{{ asset('assets/images/cta-image-9.webp') }}" alt="Avatar" class="cta-image"/></div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       10. Global Footer
       ======================================================================== -->

  @push('scripts')
    <script src="{{ asset('js/services.js?v=2') }}"></script>
  @endpush
</x-layouts.app>
