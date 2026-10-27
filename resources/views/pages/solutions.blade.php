<x-layouts.app>
  <x-slot:title>Solutions | Zenerom Dubai Growth Engineering & Enterprise Systems</x-slot:title>
  <x-slot:description>Explore Zenerom's engineered growth solutions for UAE enterprises: Omnichannel Performance & Lead Engine, Headless Commerce, WhatsApp Conversational AI, Zoho CRM Automation, and Dedicated IT Outsourcing.</x-slot:description>

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/solutions.css?v=81') }}"/>
  @endpush

<!-- ========================================================================
       2. Solutions Hero Section
       ======================================================================== -->
  <section class="solutions-hero">
    <div class="container w-container">
      <div class="solutions-hero-header">
        <div class="solutions-eyebrow">
          <div class="solutions-eyebrow-dot"></div>
          <div>Proven at Enterprise Scale &bull; UAE Growth Architecture</div>
        </div>
        <h1 class="solutions-hero-title">
          Integrated Growth Solutions <br/>Engineered to <span class="highlight-text">Scale &amp; Dominate</span>
        </h1>
        <p class="solutions-hero-desc">
          We replace fragmented marketing tactics with engineered business systems. Zenerom connects high-intent customer acquisition, high-speed digital storefronts, WhatsApp conversational commerce, and dedicated engineering squads into one practical, revenue-generating machine.
        </p>

        <!-- Quick Jump Anchor Chips -->
        <div class="solutions-quick-nav">
          <a href="#sol-performance" class="solution-chip-btn">
            <span class="chip-dot"></span>
            <span>Performance &amp; Leads</span>
          </a>
          <a href="#sol-commerce" class="solution-chip-btn">
            <span class="chip-dot"></span>
            <span>Headless Commerce</span>
          </a>
          <a href="#sol-whatsapp" class="solution-chip-btn">
            <span class="chip-dot"></span>
            <span>WhatsApp &amp; CRM</span>
          </a>
          <a href="#sol-regional" class="solution-chip-btn">
            <span class="chip-dot"></span>
            <span>Pan-UAE Dominance</span>
          </a>
          <a href="#sol-outsourcing" class="solution-chip-btn">
            <span class="chip-dot"></span>
            <span>IT &amp; Growth Outsourcing</span>
          </a>
          <a href="#sol-branding" class="solution-chip-btn">
            <span class="chip-dot"></span>
            <span>360&deg; Creative Engine</span>
          </a>
        </div>

        <!-- Metric Highlights Row -->
        <div class="solutions-metrics-row">
          <div class="solutions-metric-card">
            <div class="solutions-metric-val">+340%</div>
            <div class="solutions-metric-lbl">Avg Organic Revenue Pipeline</div>
          </div>
          <div class="solutions-metric-card">
            <div class="solutions-metric-val">3.8x</div>
            <div class="solutions-metric-lbl">Average Verified Campaign ROAS</div>
          </div>
          <div class="solutions-metric-card">
            <div class="solutions-metric-val">2.4x</div>
            <div class="solutions-metric-lbl">Lead-to-Opportunity Conversion</div>
          </div>
          <div class="solutions-metric-card">
            <div class="solutions-metric-val">&lt;15m</div>
            <div class="solutions-metric-lbl">WhatsApp Lead Nurture Speed</div>
          </div>
        </div>
      </div>

      <!-- Marquee of Trusted Clients -->
      <div class="partners-marquee-wrapper" style="margin-top: 3.5rem;">
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
       3. Interactive Solutions Filter Bar (Natural In-Flow Category Switcher)
       ======================================================================== -->
  <section class="solutions-filter-section" id="solutions-filter">
    <div class="container w-container">
      <div class="solutions-filter-header">
        <div class="solutions-filter-eyebrow">
          <span>&bull;</span>
          <span>Architectural Focus</span>
        </div>
        <h2 class="solutions-filter-title">Filter by Growth Objective</h2>
        <p class="solutions-filter-subtitle">Select an enterprise discipline below to isolate specific capabilities, or explore our complete integrated stack.</p>
      </div>
      <div class="solutions-filter-wrap">
        <button type="button" class="sol-filter-btn active" data-category="all">All Solutions (6)</button>
        <button type="button" class="sol-filter-btn" data-category="acquisition">Customer Acquisition</button>
        <button type="button" class="sol-filter-btn" data-category="commerce">Tech &amp; Headless Commerce</button>
        <button type="button" class="sol-filter-btn" data-category="conversational">Conversational AI &amp; CRM</button>
        <button type="button" class="sol-filter-btn" data-category="regional">Regional UAE SEO</button>
        <button type="button" class="sol-filter-btn" data-category="outsourcing">Dedicated IT Squads</button>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       4. Deep-Dive Featured Solutions Showcases
       ======================================================================== -->
  <section class="section_solutions_showcase">
    <div class="container w-container">

      <!-- SOLUTION 1: Omnichannel Performance & Lead Engine -->
      <div class="solution-feature-block" id="sol-performance" data-category="acquisition">
        <div class="solution-feature-content">
          <div class="solution-tag-pill">Growth &amp; Acquisition Architecture</div>
          <h2 class="solution-feature-title">Omnichannel Performance &amp; Lead Engine</h2>
          <div class="solution-feature-subtitle">Guaranteed High-Intent Buyer Acquisition Across Dubai &amp; GCC</div>
          <p class="solution-feature-desc">
            Stop burning marketing spend on low-quality clicks. We build multi-channel paid acquisition pipelines across Google Search, Meta Ads, TikTok, and LinkedIn. Integrated with custom high-converting funnels, real-time qualification, and offline conversion tracking, we ensure every dirham invested translates directly into qualified revenue opportunities.
          </p>

          <div class="solution-checklist-grid">
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Algorithmic Search &amp; Social Bidding</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Verified B2B &amp; B2C Lead Qualification</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Bespoke High-Velocity Landing Funnels</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Multi-Touch Attribution &amp; CRM Sync</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Continuous Creative Variant A/B Testing</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Guaranteed CAC &amp; ROAS Benchmarks</div>
            </div>
          </div>

          <div class="solution-cta-block">
            <a href="https://wa.me/971508764885?text=Hi%20Zenerom,%20I'm%20interested%20in%20the%20Performance%20Lead%20Engine%20solution." target="_blank" class="sol-btn-primary">
              <span>Engineer Your Pipeline</span>
              <span>&rarr;</span>
            </a>
            <a href="{{ route('contact') }}" class="sol-btn-secondary">Get Case Study Proof</a>
          </div>
        </div>

        <div class="solution-feature-visual">
          <div class="solution-visual-card">
            <img src="{{ asset('assets/images/service-image-10.webp?v=2') }}" alt="Performance & Lead Engine Architecture" class="sol-visual-graphic" loading="lazy"/>
            <div class="sol-architecture-card">
              <div class="sol-arch-header">
                <div class="sol-arch-title">Acquisition Flow</div>
                <div class="sol-arch-badge">Live System</div>
              </div>
              <div class="sol-arch-flow">
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 01</div>
                  <div class="sol-arch-step-text">High-Intent Traffic</div>
                </div>
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 02</div>
                  <div class="sol-arch-step-text">Conversion Funnel</div>
                </div>
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 03</div>
                  <div class="sol-arch-step-text">Verified Opportunity</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SOLUTION 2: Enterprise Headless Commerce Ecosystem (Reverse) -->
      <div class="solution-feature-block reverse" id="sol-commerce" data-category="commerce">
        <div class="solution-feature-content">
          <div class="solution-tag-pill">Commerce &amp; Engineering</div>
          <h2 class="solution-feature-title">Enterprise Headless Commerce Ecosystem</h2>
          <div class="solution-feature-subtitle">Sub-Second Storefronts Engineered for Uncompromising Scale</div>
          <p class="solution-feature-desc">
            Break free from monolithic template restrictions. We engineer bespoke, API-first headless commerce platforms using Next.js, Shopify Plus, and Magento. Built specifically for high-velocity GCC retail, our architecture integrates seamless multi-currency checkout, Tabby &amp; Tamara installment options, automated ERP sync, and instantaneous page transitions.
          </p>

          <div class="solution-checklist-grid">
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Headless &amp; API-First Scalability</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Sub-Second Mobile Load Speeds</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Multi-Currency GCC Payment Gateways</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Real-Time ERP &amp; Warehouse Sync</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Dynamic Cart Abandonment Recovery</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Enterprise 99.99% Uptime SLA</div>
            </div>
          </div>

          <div class="solution-cta-block">
            <a href="https://wa.me/971508764885?text=Hi%20Zenerom,%20I'm%20interested%20in%20Enterprise%20Headless%20Commerce%20solutions." target="_blank" class="sol-btn-primary">
              <span>Explore Architecture</span>
              <span>&rarr;</span>
            </a>
            <a href="{{ route('contact') }}" class="sol-btn-secondary">Request Tech Audit</a>
          </div>
        </div>

        <div class="solution-feature-visual">
          <div class="solution-visual-card">
            <img src="{{ asset('assets/images/service-image-8.webp?v=2') }}" alt="Headless Commerce Ecosystem" class="sol-visual-graphic" loading="lazy"/>
            <div class="sol-architecture-card">
              <div class="sol-arch-header">
                <div class="sol-arch-title">Commerce Pipeline</div>
                <div class="sol-arch-badge">Sub-Second</div>
              </div>
              <div class="sol-arch-flow">
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 01</div>
                  <div class="sol-arch-step-text">Headless Front</div>
                </div>
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 02</div>
                  <div class="sol-arch-step-text">Unified API Core</div>
                </div>
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 03</div>
                  <div class="sol-arch-step-text">Auto GCC Gateways</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       5. Featured Solutions Showcases (Dark Section - Strict #7892bd Rule)
       ======================================================================== -->
  <section class="section_solutions_showcase dark-bg">
    <div class="container w-container">

      <!-- SOLUTION 3: WhatsApp Conversational Commerce & Zoho CRM -->
      <div class="solution-feature-block" id="sol-whatsapp" data-category="conversational">
        <div class="solution-feature-content">
          <div class="solution-tag-pill">Conversational AI &amp; Automation</div>
          <h2 class="solution-feature-title">WhatsApp Conversational Commerce &amp; Zoho CRM</h2>
          <div class="solution-feature-subtitle">Instant UAE Buyer Engagement &amp; Automated Sales Pipeline</div>
          <p class="solution-feature-desc">
            In the UAE, business conversations happen on WhatsApp. We turn inbound chat inquiries into verified revenue pipelines. By connecting the official WhatsApp Business Cloud API with enterprise Zoho CRM, we automate 24/7 smart lead qualification, interactive catalog browsing, instant quotations, and zero-latency human agent handoff.
          </p>

          <div class="solution-checklist-grid">
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Official WhatsApp Business API Integration</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>24/7 Smart Automated Lead Qualification</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Complete Zoho CRM Pipeline Synchronization</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>In-Chat Product Catalog &amp; Payment Links</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Automated Quotation &amp; Document Delivery</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Real-Time Rep Performance &amp; SLA Tracking</div>
            </div>
          </div>

          <div class="solution-cta-block">
            <a href="https://wa.me/971508764885?text=Hi%20Zenerom,%20I'd%20like%20to%20deploy%20WhatsApp%20Conversational%20Commerce." target="_blank" class="sol-btn-primary">
              <span>Deploy WhatsApp Flow</span>
              <span>&rarr;</span>
            </a>
            <a href="{{ route('contact') }}" class="sol-btn-secondary">Schedule Live Demo</a>
          </div>
        </div>

        <div class="solution-feature-visual">
          <div class="solution-visual-card">
            <img src="{{ asset('assets/images/service-image-7.webp?v=2') }}" alt="WhatsApp Conversational AI and CRM Automation" class="sol-visual-graphic" loading="lazy"/>
            <div class="sol-architecture-card">
              <div class="sol-arch-header">
                <div class="sol-arch-title">Conversational Engine</div>
                <div class="sol-arch-badge">Instant Sync</div>
              </div>
              <div class="sol-arch-flow">
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 01</div>
                  <div class="sol-arch-step-text">Inbound Chat Influx</div>
                </div>
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 02</div>
                  <div class="sol-arch-step-text">Smart Qualification</div>
                </div>
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 03</div>
                  <div class="sol-arch-step-text">Closed CRM Deal</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SOLUTION 4: Pan-UAE Regional Dominance (Reverse) -->
      <div class="solution-feature-block reverse" id="sol-regional" data-category="regional">
        <div class="solution-feature-content">
          <div class="solution-tag-pill">Regional Local Search</div>
          <h2 class="solution-feature-title">Multi-Emirate Local Search &amp; Market Supremacy</h2>
          <div class="solution-feature-subtitle">Dominate Google Search &amp; Google Maps Across All 7 Emirates</div>
          <p class="solution-feature-desc">
            Capture ready-to-buy customers at the precise moment they seek commercial services in their emirate. We architect individualized local SEO systems, Google Maps 3-Pack authority, and localized conversion pages for Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.
          </p>

          <div class="solution-checklist-grid">
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>7-Emirate Geo-Targeted Architecture</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Google Maps 3-Pack Authority</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>High-Intent Local Buyer Capture</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Geo-Fenced Review &amp; Reputation Engine</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Next-Gen AI Engine Citation Sync (AEO)</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Dedicated Local Conversion Funnels</div>
            </div>
          </div>

          <div class="solution-cta-block">
            <a href="https://wa.me/971508764885?text=Hi%20Zenerom,%20I%20want%20to%20dominate%20Local%20Search%20across%20the%20UAE." target="_blank" class="sol-btn-primary">
              <span>Dominate Your Emirate</span>
              <span>&rarr;</span>
            </a>
            <a href="{{ route('contact') }}" class="sol-btn-secondary">Request SEO Audit</a>
          </div>
        </div>

        <div class="solution-feature-visual">
          <div class="solution-visual-card">
            <img src="{{ asset('assets/images/service-image-1.webp?v=2') }}" alt="Multi-Emirate Local Search Supremacy" class="sol-visual-graphic" loading="lazy"/>
            <div class="sol-architecture-card">
              <div class="sol-arch-header">
                <div class="sol-arch-title">Local Search Funnel</div>
                <div class="sol-arch-badge">Top 3 Rank</div>
              </div>
              <div class="sol-arch-flow">
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 01</div>
                  <div class="sol-arch-step-text">Emirate Search Query</div>
                </div>
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 02</div>
                  <div class="sol-arch-step-text">Google Maps 3-Pack</div>
                </div>
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 03</div>
                  <div class="sol-arch-step-text">Direct Call &amp; Booking</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       6. Additional Solutions (Light Surface)
       ======================================================================== -->
  <section class="section_solutions_showcase">
    <div class="container w-container">

      <!-- SOLUTION 5: Dedicated IT & Growth Team Outsourcing -->
      <div class="solution-feature-block" id="sol-outsourcing" data-category="outsourcing">
        <div class="solution-feature-content">
          <div class="solution-tag-pill">Engineering &amp; Talent Scaling</div>
          <h2 class="solution-feature-title">Dedicated IT &amp; Growth Team Outsourcing</h2>
          <div class="solution-feature-subtitle">Elastic Tech &amp; Marketing Squads Integrated Directly Into Your Operation</div>
          <p class="solution-feature-desc">
            Eliminate the time, expense, and friction of recruitment and visa processing. Zenerom provides dedicated, battle-tested technology and marketing specialists—full-stack developers, mobile app engineers, WordPress/Shopify masters, and performance managers—working exclusively as your in-house growth wing.
          </p>

          <div class="solution-checklist-grid">
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Senior Full-Stack &amp; Mobile Developers</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Certified Zoho CRM &amp; Automation Architects</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Dedicated Performance Media Buyers</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Direct Slack, Teams &amp; Agile Integration</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Zero Recruitment or Employment Overhead</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>100% Strict NDA &amp; IP Protection</div>
            </div>
          </div>

          <div class="solution-cta-block">
            <a href="https://wa.me/971508764885?text=Hi%20Zenerom,%20I'm%20looking%20to%20outsource%20a%20dedicated%20tech%20or%20marketing%20team." target="_blank" class="sol-btn-primary">
              <span>Assemble Your Squad</span>
              <span>&rarr;</span>
            </a>
            <a href="{{ route('contact') }}" class="sol-btn-secondary">Check Available Profiles</a>
          </div>
        </div>

        <div class="solution-feature-visual">
          <div class="solution-visual-card">
            <img src="{{ asset('assets/images/about-image.webp') }}" alt="Dedicated IT and Growth Team Outsourcing" class="sol-visual-graphic" loading="lazy"/>
            <div class="sol-architecture-card">
              <div class="sol-arch-header">
                <div class="sol-arch-title">Outsourcing Model</div>
                <div class="sol-arch-badge">48h Setup</div>
              </div>
              <div class="sol-arch-flow">
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 01</div>
                  <div class="sol-arch-step-text">Skillset Alignment</div>
                </div>
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 02</div>
                  <div class="sol-arch-step-text">Sprint Integration</div>
                </div>
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 03</div>
                  <div class="sol-arch-step-text">Continuous Output</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SOLUTION 6: 360° Creative & CRO Engine (Reverse) -->
      <div class="solution-feature-block reverse" id="sol-branding" data-category="acquisition">
        <div class="solution-feature-content">
          <div class="solution-tag-pill">Brand &amp; Creative Growth</div>
          <h2 class="solution-feature-title">Brand Strategy, Cinematic Video &amp; CRO</h2>
          <div class="solution-feature-subtitle">Transforming Brand Perception Into High-Velocity Commercial Conversion</div>
          <p class="solution-feature-desc">
            Even the best acquisition channels fail when the digital experience looks ordinary. We architect cohesive corporate brand identities, 4K commercial video advertising, and scientific conversion rate optimization (CRO) that elevates perceived brand value and doubles conversion rates.
          </p>

          <div class="solution-checklist-grid">
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Luxury UAE Corporate Identity Systems</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>High-Converting UX/UI Landing Design</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>4K Commercial Drone &amp; Video Production</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Heatmap &amp; Behavioral User Testing</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>Bilingual English &amp; Arabic Brand Tone</div>
            </div>
            <div class="solution-check-item">
              <div class="check-icon-circle">&#10003;</div>
              <div>High-Impact Corporate Investor Collateral</div>
            </div>
          </div>

          <div class="solution-cta-block">
            <a href="https://wa.me/971508764885?text=Hi%20Zenerom,%20I'm%20interested%20in%20Brand%20Strategy%20and%20CRO%20solutions." target="_blank" class="sol-btn-primary">
              <span>Elevate Your Brand</span>
              <span>&rarr;</span>
            </a>
            <a href="{{ route('contact') }}" class="sol-btn-secondary">View Showreel</a>
          </div>
        </div>

        <div class="solution-feature-visual">
          <div class="solution-visual-card">
            <img src="{{ asset('assets/images/service-image-3.webp?v=2') }}" alt="Creative Brand Strategy and CRO" class="sol-visual-graphic" loading="lazy"/>
            <div class="sol-architecture-card">
              <div class="sol-arch-header">
                <div class="sol-arch-title">Creative Impact</div>
                <div class="sol-arch-badge">High ROAS</div>
              </div>
              <div class="sol-arch-flow">
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 01</div>
                  <div class="sol-arch-step-text">Visual Positioning</div>
                </div>
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 02</div>
                  <div class="sol-arch-step-text">Cinematic Video</div>
                </div>
                <div class="sol-arch-step">
                  <div class="sol-arch-step-num">STAGE 03</div>
                  <div class="sol-arch-step-text">CRO Conversion</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       7. The Zenerom Standard: Transformation Comparison Matrix
       ======================================================================== -->
  <section class="section_standard">
    <div class="container w-container">
      <div class="standard-header">
        <div class="section-subtitle-block center">
          <div class="subtitle-wrap">
            <div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" alt="Icon" class="subtitle-icon"/></div>
            <div class="section-subtitle">The Zenerom Standard</div>
          </div>
        </div>
        <h2 class="heading-style-2 section-title">How Engineered Solutions Translate to Commercial Results</h2>
        <p style="color: #666; font-size: 1.05rem; line-height: 1.6; max-width: 680px; margin: 1rem auto 0;">
          Discover why high-growth UAE businesses choose Zenerom’s unified solution architecture over disconnected single-service agencies.
        </p>
      </div>

      <div class="transformation-grid">
        <!-- Fragmented Approach -->
        <div class="trans-card traditional">
          <div class="trans-badge">Traditional Fragmented Agency</div>
          <h3 class="trans-title">Disconnected Tools &amp; Wasteful Spend</h3>
          <ul class="trans-list">
            <li class="trans-item">
              <span class="trans-icon-cross">&#10005;</span>
              <div>Multiple disconnected vendors (SEO agency, Ads freelancer, web designer) operating in silos with zero shared accountability.</div>
            </li>
            <li class="trans-item">
              <span class="trans-icon-cross">&#10005;</span>
              <div>High ad spend generating unverified form fills with no qualification, leaving sales teams chasing invalid leads.</div>
            </li>
            <li class="trans-item">
              <span class="trans-icon-cross">&#10005;</span>
              <div>Slow monolithic websites that take 4+ seconds to load, leaking up to 50% of paid mobile ad traffic before conversion.</div>
            </li>
            <li class="trans-item">
              <span class="trans-icon-cross">&#10005;</span>
              <div>No CRM automation or WhatsApp routing; inquiries sit unanswered for hours while potential clients contact competitors.</div>
            </li>
            <li class="trans-item">
              <span class="trans-icon-cross">&#10005;</span>
              <div>Vague monthly vanity metric reports (impressions, clicks) without direct visibility into actual bottom-line revenue.</div>
            </li>
          </ul>
        </div>

        <!-- Zenerom Integrated Architecture -->
        <div class="trans-card zenerom">
          <div class="trans-badge">Zenerom Solution Architecture</div>
          <h3 class="trans-title">One Engineered Growth Ecosystem</h3>
          <ul class="trans-list">
            <li class="trans-item">
              <span class="trans-icon-check">&#10003;</span>
              <div>Single Dubai headquarters partner delivering search supremacy, media buying, bespoke tech, and CRM under one roof.</div>
            </li>
            <li class="trans-item">
              <span class="trans-icon-check">&#10003;</span>
              <div>Algorithmic lead engines with pre-qualification filters, delivering ready-to-buy decision makers directly to sales reps.</div>
            </li>
            <li class="trans-item">
              <span class="trans-icon-check">&#10003;</span>
              <div>Sub-second headless web &amp; commerce architecture built for mobile conversion, maximizing every marketing dirham.</div>
            </li>
            <li class="trans-item">
              <span class="trans-icon-check">&#10003;</span>
              <div>Instant official WhatsApp Business Cloud API &amp; Zoho CRM automation routing leads within seconds 24 hours a day.</div>
            </li>
            <li class="trans-item">
              <span class="trans-icon-check">&#10003;</span>
              <div>Transparent executive ROI dashboards tracking cost-per-acquisition (CAC), pipeline velocity, and closed commercial value.</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       8. Interactive Solution Architecture Recommender
       ======================================================================== -->
  <section class="section_calculator">
    <div class="container w-container">
      <div class="calc-container">
        <div class="calc-header">
          <div class="section-subtitle-block center">
            <div class="subtitle-wrap">
              <div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" alt="Icon" class="subtitle-icon"/></div>
              <div class="section-subtitle">Interactive Blueprint</div>
            </div>
          </div>
          <h2 class="calc-header-title">Find the Right Solution Architecture for Your Business</h2>
          <p class="calc-header-desc">
            Select your industry and primary growth priority below to view your tailored technology stack, projected commercial impact, and implementation model.
          </p>
        </div>

        <div class="calc-form-grid">
          <div class="calc-control-group">
            <div class="calc-label">1. Select Your Industry Sector:</div>
            <div class="calc-options-grid">
              <button class="calc-option-btn calc-ind-btn selected" data-ind="real-estate">Real Estate &amp; Property</button>
              <button class="calc-option-btn calc-ind-btn" data-ind="healthcare">Healthcare &amp; Clinics</button>
              <button class="calc-option-btn calc-ind-btn" data-ind="b2b">B2B &amp; Global Trading</button>
              <button class="calc-option-btn calc-ind-btn" data-ind="retail">Retail &amp; eCommerce</button>
            </div>

            <div class="calc-label" style="margin-top: 1rem;">2. Select Your Primary Growth Objective:</div>
            <div class="calc-options-grid">
              <button class="calc-option-btn calc-goal-btn selected" data-goal="leads">High-Intent Leads</button>
              <button class="calc-option-btn calc-goal-btn" data-goal="ecommerce">Digital Storefront Scale</button>
              <button class="calc-option-btn calc-goal-btn" data-goal="brand">Brand Market Dominance</button>
              <button class="calc-option-btn calc-goal-btn" data-goal="scale">Dedicated Tech Squad</button>
            </div>
          </div>

          <div class="calc-result-panel">
            <div>
              <div class="calc-result-tag" id="calcResultTag">Recommended Solution: High-Intent Property Lead Engine</div>
              <h3 class="calc-result-headline" id="calcResultHeadline">Omnichannel Real Estate Acquisition &amp; WhatsApp CRM Routing</h3>
              
              <div class="calc-stat-callouts">
                <div class="calc-callout-box">
                  <div class="calc-callout-num" id="calcCallout1Num">+280%</div>
                  <div class="calc-callout-sub" id="calcCallout1Sub">Verified Inquiries</div>
                </div>
                <div class="calc-callout-box">
                  <div class="calc-callout-num" id="calcCallout2Num">3.9x</div>
                  <div class="calc-callout-sub" id="calcCallout2Sub">Lower CAC</div>
                </div>
                <div class="calc-callout-box">
                  <div class="calc-callout-num" id="calcCallout3Num">&lt;8 mins</div>
                  <div class="calc-callout-sub" id="calcCallout3Sub">WhatsApp Response</div>
                </div>
              </div>

              <div class="calc-stack-list" id="calcResultStack">
                <strong>Core Engine:</strong> Google High-Intent Search &amp; Meta Ads + Dedicated Off-Plan Landing Funnels + WhatsApp Business API &amp; Automated Zoho Lead Assignment.
              </div>
            </div>

            <div>
              <a href="https://wa.me/971508764885?text=Hello%20Zenerom,%20I%20would%20like%20to%20discuss%20my%20recommended%20solution%20blueprint." target="_blank" class="sol-btn-primary" style="width: 100%; justify-content: center;">
                <span>Claim This Solution Blueprint</span>
                <span>&rarr;</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       9. Industry Solutions Matrix (Dark Section - Strict #7892bd Rule)
       ======================================================================== -->
  <section class="section_industries_matrix">
    <div class="container w-container">
      <div class="industries-matrix-header">
        <div class="section-subtitle-block center">
          <div class="subtitle-wrap">
            <div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" alt="Icon" class="subtitle-icon"/></div>
            <div class="section-subtitle">Sector Blueprints</div>
          </div>
        </div>
        <h2 class="heading-style-2 section-title" style="color: #ffffff;">Customized for Dubai &amp; GCC Powerhouse Sectors</h2>
        <p style="color: #a0a6b1; font-size: 1.05rem; line-height: 1.6; max-width: 700px; margin: 1rem auto 0;">
          Each industry demands a distinct balance of search intent, regulatory compliance, and conversion mechanics. Explore our tailored sector blueprints:
        </p>
      </div>

      <div class="industries-matrix-grid">
        <!-- Sector 1: Real Estate -->
        <div class="industry-card">
          <div class="industry-icon-wrap">
            <img src="{{ asset('assets/icons/Approach_icon_1.svg') }}" alt="Real Estate Icon" loading="lazy"/>
          </div>
          <h3 class="industry-card-title">Real Estate &amp; Off-Plan Developers</h3>
          <p class="industry-card-desc">
            High-intent international buyer acquisition, interactive digital masterplan walkthroughs, multi-language landing funnels, and automated WhatsApp routing directly to licensed brokers.
          </p>
          <div class="industry-chips-row">
            <span class="ind-chip">Investor Leads</span>
            <span class="ind-chip">3D Virtual Tours</span>
            <span class="ind-chip">WhatsApp CRM</span>
          </div>
        </div>

        <!-- Sector 2: Healthcare & Clinics -->
        <div class="industry-card">
          <div class="industry-icon-wrap">
            <img src="{{ asset('assets/icons/Approach_icon_2.svg') }}" alt="Healthcare Icon" loading="lazy"/>
          </div>
          <h3 class="industry-card-title">Healthcare, Clinics &amp; Hospitals</h3>
          <p class="industry-card-desc">
            MoH-compliant patient acquisition systems, multi-clinic Google Maps 3-pack dominance, frictionless online doctor booking calendars, and automated appointment reminders.
          </p>
          <div class="industry-chips-row">
            <span class="ind-chip">Doctor Booking</span>
            <span class="ind-chip">Local SEO Pack</span>
            <span class="ind-chip">MoH Compliant</span>
          </div>
        </div>

        <!-- Sector 3: B2B & Trading -->
        <div class="industry-card">
          <div class="industry-icon-wrap">
            <img src="{{ asset('assets/icons/Approach_icon_3.svg') }}" alt="B2B Trading Icon" loading="lazy"/>
          </div>
          <h3 class="industry-card-title">B2B, Industrial &amp; Global Trading</h3>
          <p class="industry-card-desc">
            Account-based marketing (ABM) for high-ticket contracts, custom wholesale eCommerce portals with tiered corporate pricing, and automated Zoho CRM pipeline management.
          </p>
          <div class="industry-chips-row">
            <span class="ind-chip">RFQ Funnels</span>
            <span class="ind-chip">Wholesale Portals</span>
            <span class="ind-chip">Zoho CRM Sync</span>
          </div>
        </div>

        <!-- Sector 4: Retail & eCommerce -->
        <div class="industry-card">
          <div class="industry-icon-wrap">
            <img src="{{ asset('assets/icons/price_icon.svg') }}" alt="Retail eCommerce Icon" loading="lazy"/>
          </div>
          <h3 class="industry-card-title">Luxury Retail &amp; eCommerce</h3>
          <p class="industry-card-desc">
            Sub-second headless Shopify &amp; Magento storefronts, GCC installment integrations (Tabby/Tamara), automated dynamic catalog ads, and omnichannel customer retention flows.
          </p>
          <div class="industry-chips-row">
            <span class="ind-chip">Sub-Second Store</span>
            <span class="ind-chip">Tabby / Tamara</span>
            <span class="ind-chip">ROAS Scale</span>
          </div>
        </div>

        <!-- Sector 5: Professional & Corporate -->
        <div class="industry-card">
          <div class="industry-icon-wrap">
            <img src="{{ asset('assets/icons/overview-icon.svg') }}" alt="Corporate Services Icon" loading="lazy"/>
          </div>
          <h3 class="industry-card-title">Corporate Services &amp; Freezones</h3>
          <p class="industry-card-desc">
            Business setup &amp; golden visa lead funnels, authoritative thought leadership SEO, multilingual legal collateral, and client onboarding automation portals.
          </p>
          <div class="industry-chips-row">
            <span class="ind-chip">Visa &amp; Setup Leads</span>
            <span class="ind-chip">Authority SEO</span>
            <span class="ind-chip">Client Portal</span>
          </div>
        </div>

        <!-- Sector 6: Tourism & Luxury -->
        <div class="industry-card">
          <div class="industry-icon-wrap">
            <img src="{{ asset('assets/icons/star-01.svg') }}" alt="Hospitality Icon" loading="lazy"/>
          </div>
          <h3 class="industry-card-title">Tourism, Hospitality &amp; VIP Concierge</h3>
          <p class="industry-card-desc">
            Direct guest booking engines that bypass OTA commissions, hyper-targeted social influencer amplification, and localized geo-fenced travel marketing across the GCC.
          </p>
          <div class="industry-chips-row">
            <span class="ind-chip">Direct Bookings</span>
            <span class="ind-chip">GCC Ad Reach</span>
            <span class="ind-chip">Zero OTA Fee</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       10. Solution FAQ Accordion
       ======================================================================== -->
  <section class="section_solutions_faq">
    <div class="container w-container">
      <div class="faq-solutions-header">
        <div class="section-subtitle-block center">
          <div class="subtitle-wrap">
            <div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" alt="Icon" class="subtitle-icon"/></div>
            <div class="section-subtitle">Common Inquiries</div>
          </div>
        </div>
        <h2 class="heading-style-2 section-title">Frequently Asked Questions About Our Solutions</h2>
        <p style="color: #666; font-size: 1.05rem; line-height: 1.6; max-width: 680px; margin: 1rem auto 0;">
          Clear answers on how we deploy, integrate, and scale enterprise solutions for UAE businesses.
        </p>
      </div>

      <div class="faq-solutions-accordion">
        <div class="faq-item-card active">
          <div class="faq-item-question">
            <div class="faq-question-text">How do Zenerom's Solutions differ from standard digital marketing services?</div>
            <div class="faq-toggle-icon">+</div>
          </div>
          <div class="faq-item-answer">
            <div class="faq-answer-content">
              Services are individual tactical tasks (such as managing a Google Ads campaign or writing blog articles). Solutions are end-to-end engineered business architectures that solve foundational enterprise challenges. A Zenerom Solution unifies search dominance, multi-channel media buying, custom high-speed landing pages, WhatsApp automation, and CRM synchronization into one cohesive system with guaranteed performance benchmarks.
            </div>
          </div>
        </div>

        <div class="faq-item-card">
          <div class="faq-item-question">
            <div class="faq-question-text">How long does it take to implement and launch a customized solution?</div>
            <div class="faq-toggle-icon">+</div>
          </div>
          <div class="faq-item-answer">
            <div class="faq-answer-content">
              Most core solutions—such as our Omnichannel Performance Lead Engine or WhatsApp CRM Automation—launch within 10 to 14 business days. Enterprise headless commerce migrations and complex bespoke web applications typically take 4 to 8 weeks depending on backend ERP integrations and catalog volume.
            </div>
          </div>
        </div>

        <div class="faq-item-card">
          <div class="faq-item-question">
            <div class="faq-question-text">Can Zenerom solutions integrate with our existing ERP, CRM, and tools?</div>
            <div class="faq-toggle-icon">+</div>
          </div>
          <div class="faq-item-answer">
            <div class="faq-answer-content">
              Yes. We are certified Zoho implementation partners and experienced API engineers. We regularly integrate with Zoho CRM, Salesforce, HubSpot, Microsoft Dynamics, SAP, Shopify, Magento, WhatsApp Business Cloud API, and local GCC payment gateways such as Tabby, Tamara, Telr, and Stripe.
            </div>
          </div>
        </div>

        <div class="faq-item-card">
          <div class="faq-item-question">
            <div class="faq-question-text">How does the Dedicated IT &amp; Growth Outsourcing model work?</div>
            <div class="faq-toggle-icon">+</div>
          </div>
          <div class="faq-item-answer">
            <div class="faq-answer-content">
              We provide senior engineers and growth specialists who work exclusively on your brand. They integrate directly into your internal communication channels (Slack, Microsoft Teams, Jira) and report to your leadership. You gain the capabilities of an elite in-house team with zero visa, sponsorship, recruitment, or office infrastructure overheads.
            </div>
          </div>
        </div>

        <div class="faq-item-card">
          <div class="faq-item-question">
            <div class="faq-question-text">Do you guarantee performance metrics and ROI?</div>
            <div class="faq-toggle-icon">+</div>
          </div>
          <div class="faq-item-answer">
            <div class="faq-answer-content">
              Every client engagement begins with a data audit establishing baseline cost-per-lead (CPL), customer acquisition cost (CAC), and conversion targets. We establish transparent KPIs, review analytics weekly, and optimize campaigns continuously to ensure agreed ROI benchmarks are achieved.
            </div>
          </div>
        </div>

        <div class="faq-item-card">
          <div class="faq-item-question">
            <div class="faq-question-text">Who owns the intellectual property and code developed by Zenerom?</div>
            <div class="faq-toggle-icon">+</div>
          </div>
          <div class="faq-item-answer">
            <div class="faq-answer-content">
              You maintain 100% full ownership of all developed code, design assets, ad accounts, CRM data, and tracking pixels. We operate under strict NDAs and transfer all repository credentials upon deployment.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       11. Consultation & Solution Blueprint CTA Banner
       ======================================================================== -->
  <section class="section_solutions_cta">
    <div class="container w-container">
      <div class="solution-cta-card">
        <h2 class="solution-cta-title">Ready to Architect Your <span>Enterprise Solution?</span></h2>
        <p class="solution-cta-desc">
          Speak directly with our senior Dubai growth architects. We will evaluate your current commercial bottlenecks and deliver an actionable 90-day solution roadmap tailored to your business goals.
        </p>
        <div class="solution-cta-buttons">
          <a href="https://wa.me/971508764885?text=Hello%20Zenerom,%20I%20would%20like%20to%20schedule%20a%20solutions%20consultation." target="_blank" class="cta-whatsapp-btn">
            <span>Chat on WhatsApp (+971 50 876 4885)</span>
          </a>
          <a href="tel:+971563996631" class="cta-phone-btn">
            <span>Call +971 56 399 6631</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       12. Global Footer
       ======================================================================== -->

  @push('scripts')
    <script src="{{ asset('js/solutions.js?v=81') }}"></script>
  @endpush
</x-layouts.app>
