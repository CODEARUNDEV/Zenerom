<x-layouts.app>
  <x-slot:title>{{ $service['meta_title'] ?? $service['title'] . ' | Zenerom Dubai' }}</x-slot:title>
  <x-slot:description>{{ $service['meta_desc'] ?? $service['hero_desc'] }}</x-slot:description>

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/services.css?v=80') }}"/>
    <link rel="stylesheet" href="{{ asset('css/service-single.css?v=2') }}"/>
  @endpush

  {{-- Schema.org Structured Data --}}
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@graph": [
      {
        "@@type": "Service",
        "@@id": "{{ url()->current() }}#service",
        "name": "{{ $service['title'] }}",
        "serviceType": "{{ $service['title'] }}",
        "provider": {
          "@@type": "Organization",
          "name": "Zenerom Digital Marketing Agency Dubai",
          "url": "https://zenerom.ae",
          "logo": "{{ asset('assets/images/zenerom-logo.webp') }}",
          "telephone": "+971563996631",
          "email": "info@zenerom.ae",
          "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Burjuman Business Tower, Office 929",
            "addressLocality": "Dubai",
            "addressRegion": "Dubai",
            "addressCountry": "AE"
          }
        },
        "areaServed": [
          { "@@type": "City", "name": "Dubai" },
          { "@@type": "City", "name": "Abu Dhabi" },
          { "@@type": "City", "name": "Sharjah" },
          { "@@type": "Country", "name": "United Arab Emirates" }
        ],
        "description": "{{ $service['meta_desc'] ?? $service['hero_desc'] }}"
      },
      {
        "@@type": "BreadcrumbList",
        "itemListElement": [
          {
            "@@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ route('home') }}"
          },
          {
            "@@type": "ListItem",
            "position": 2,
            "name": "Services",
            "item": "{{ route('services') }}"
          },
          {
            "@@type": "ListItem",
            "position": 3,
            "name": "{{ $service['title'] }}",
            "item": "{{ url()->current() }}"
          }
        ]
      }
      @if(!empty($service['faqs']))
      ,{
        "@@type": "FAQPage",
        "mainEntity": [
          @foreach($service['faqs'] as $index => $faq)
          {
            "@@type": "Question",
            "name": "{{ addslashes($faq['q']) }}",
            "acceptedAnswer": {
              "@@type": "Answer",
              "text": "{{ addslashes($faq['a']) }}"
            }
          }{{ $loop->last ? '' : ',' }}
          @endforeach
        ]
      }
      @endif
    ]
  }
  </script>

  <!-- ========================================================================
       1. Service Hero Section (Executive Breadcrumb, Value Prop & KPIs)
       ======================================================================== -->
  <section class="svc-hero-section">
    <div class="container w-container">
      <div class="svc-hero-header">
        
        <!-- Breadcrumbs -->
        <nav class="svc-breadcrumbs" aria-label="Breadcrumbs">
          <a href="{{ route('home') }}">Home</a>
          <span class="svc-breadcrumbs-sep">/</span>
          <a href="{{ route('services') }}">Services</a>
          <span class="svc-breadcrumbs-sep">/</span>
          <span class="svc-breadcrumbs-current">{{ $service['title'] }}</span>
        </nav>

        <!-- Eyebrow Pill -->
        <div class="svc-eyebrow-pill">
          <div class="svc-eyebrow-dot"></div>
          <span>{{ $service['num'] ?? '01 / SERVICE' }} &bull; {{ $service['title'] }}</span>
        </div>

        <!-- Main Title H1 -->
        <h1 class="svc-hero-title">
          {!! $service['hero_title'] ?? $service['title'] !!}
        </h1>

        <!-- Executive Subtitle -->
        <p class="svc-hero-desc">
          {{ $service['hero_desc'] }}
        </p>

        <!-- Live Dubai Status Ribbon -->
        <div class="svc-live-status-pill">
          <div class="svc-live-beacon"></div>
          <span>{{ $service['status_ribbon'] ?? 'Burjuman Business Tower Flagship • Senior Directors Active Now' }}</span>
        </div>

        <!-- Hero Actions -->
        <div class="svc-hero-actions">
          <a href="#audit-section" class="svc-btn-primary">
            <span>{{ $service['primary_cta'] ?? 'Schedule Strategy Consultation' }}</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="https://wa.me/971563996631?text={{ urlencode($service['whatsapp_text'] ?? 'Hello Zenerom Desk, I would like to inquire about your services.') }}" target="_blank" rel="noopener noreferrer" class="svc-btn-whatsapp">
            <svg class="svc-btn-icon" viewBox="0 0 24 24" fill="#25D366"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
            <span>WhatsApp Strategy Desk: +971 56 399 6631</span>
          </a>
        </div>

        <!-- Hero 4-Stat Metric Row -->
        @if(!empty($service['stats']))
          <div class="svc-hero-stats-grid">
            @foreach($service['stats'] as $st)
              <div class="svc-hero-stat">
                <div class="svc-hero-stat-num">{{ $st['num'] }}</div>
                <div class="svc-hero-stat-label">{{ $st['label'] }}</div>
              </div>
            @endforeach
          </div>
        @endif

        <!-- Capability Tags -->
        @if(!empty($service['pills']))
          <div class="svc-hero-tag-pills">
            @foreach($service['pills'] as $pill)
              <span class="svc-hero-tag">✓ {{ $pill }}</span>
            @endforeach
          </div>
        @endif

      </div>

      <!-- Marquee of Trusted UAE Brands -->
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
        </div>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       2. Strategic Context: The Dubai Reality
       ======================================================================== -->
  @if(!empty($service['market_context']))
    <section class="svc-section-context">
      <div class="container w-container">
        <div class="svc-section-intro">
          <div class="svc-section-tag">{{ $service['market_context']['tag'] ?? 'Market Reality' }}</div>
          <h2 class="svc-section-title">{{ $service['market_context']['title'] }}</h2>
          <p class="svc-section-desc">
            {{ $service['market_context']['desc'] }}
          </p>
        </div>

        @if(!empty($service['market_context']['cards']))
          <div class="svc-context-grid">
            @foreach($service['market_context']['cards'] as $card)
              <div class="svc-context-card">
                <div class="svc-context-icon-wrap">{{ $card['icon'] }}</div>
                <h3 class="svc-context-card-title">{{ $card['title'] }}</h3>
                <p class="svc-context-card-desc">
                  {{ $card['desc'] }}
                </p>
                <div class="svc-context-metric">{{ $card['metric'] }}</div>
              </div>
            @endforeach
          </div>
        @endif
      </div>
    </section>
  @endif

  <!-- ========================================================================
       3. Flagship Capabilities & Deliverables (6 Pillars)
       ======================================================================== -->
  @if(!empty($service['pillars']))
    <section class="svc-section-pillars-dark" id="capabilities">
      <div class="container w-container">
        <div class="svc-section-intro-dark">
          <div class="svc-section-tag" style="color: var(--brand-flamingo, #f26934);">Core Architecture &bull; 6 Pillars of Dominance</div>
          <h2 class="svc-section-title">Comprehensive Service Specifications</h2>
          <p class="svc-section-desc">
            Every engagement is engineered end-to-end to ensure zero gaps between strategic architecture, execution, and commercial ROI.
          </p>
        </div>

        <div class="svc-pillars-grid">
          @foreach($service['pillars'] as $pillar)
            <div class="svc-pillar-card">
              <div>
                <div class="svc-pillar-header">
                  <span class="svc-pillar-num">{{ $pillar['num'] }}</span>
                  <span class="svc-pillar-badge">{{ $pillar['badge'] }}</span>
                </div>
                <h3 class="svc-pillar-title">{{ $pillar['title'] }}</h3>
                <p class="svc-pillar-desc">
                  {{ $pillar['desc'] }}
                </p>
                @if(!empty($pillar['deliverables']))
                  <ul class="svc-deliverables-list">
                    @foreach($pillar['deliverables'] as $del)
                      <li class="svc-deliverable-item"><span class="svc-check-mark">✓</span> {{ $del }}</li>
                    @endforeach
                  </ul>
                @endif
              </div>
              <div class="svc-pillar-footer">
                <span class="svc-pillar-impact">{{ $pillar['impact'] ?? 'Verified SLA' }}</span>
                <img src="{{ asset('assets/icons/arrow-right-w.svg') }}" alt="Arrow" style="width: 14px; opacity: 0.6;"/>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
  @endif

  <!-- ========================================================================
       4. Why Zenerom vs. Other Agencies Comparison Matrix
       ======================================================================== -->
  <section class="svc-section-comparison">
    <div class="container w-container">
      <div class="svc-section-intro-dark">
        <div class="svc-section-tag" style="color: var(--brand-flamingo, #f26934);">Competitive Architecture &bull; The Zenerom Standard</div>
        <h2 class="svc-section-title">Why Leading Dubai Brands Choose Zenerom</h2>
        <p class="svc-section-desc">
          Compare our engineering methodology against conventional UAE digital agencies and unstructured freelancers.
        </p>
      </div>

      <div class="svc-comparison-table-wrapper">
        <table class="svc-comparison-table">
          <thead>
            <tr>
              <th style="width: 32%;">Deliverable &amp; Standard</th>
              <th class="svc-th-zenerom" style="width: 28%;">Zenerom Architecture</th>
              <th style="width: 20%;">Typical UAE Agencies</th>
              <th style="width: 20%;">Freelancers / Overseas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Direct Senior Leadership</strong></td>
              <td class="svc-td-zenerom"><span class="svc-icon-yes">✓</span> Senior Directors at Burjuman HQ</td>
              <td><span class="svc-icon-no">✕</span> Junior Account Handlers</td>
              <td><span class="svc-icon-no">✕</span> Unvetted Single Person</td>
            </tr>
            <tr>
              <td><strong>Commercial &amp; Revenue Focus</strong></td>
              <td class="svc-td-zenerom"><span class="svc-icon-yes">✓</span> Bound to Leads, Sales &amp; ROAS</td>
              <td><span class="svc-icon-partial">⚠</span> Vanity Metrics (Clicks/Views)</td>
              <td><span class="svc-icon-no">✕</span> Zero Commercial Strategy</td>
            </tr>
            <tr>
              <td><strong>Execution Speed &amp; SLAs</strong></td>
              <td class="svc-td-zenerom"><span class="svc-icon-yes">✓</span> Strict Business SLAs (&lt;2h)</td>
              <td><span class="svc-icon-partial">⚠</span> 24 to 72 Hour Delays</td>
              <td><span class="svc-icon-no">✕</span> Ghosting &amp; Unreliable Comms</td>
            </tr>
            <tr>
              <td><strong>Bilingual Arabic/English</strong></td>
              <td class="svc-td-zenerom"><span class="svc-icon-yes">✓</span> Native Gulf Arabic &amp; English</td>
              <td><span class="svc-icon-partial">⚠</span> Automated Google Translate</td>
              <td><span class="svc-icon-no">✕</span> English Only / Broken Arabic</td>
            </tr>
            <tr>
              <td><strong>Transparent Executive Reporting</strong></td>
              <td class="svc-td-zenerom"><span class="svc-icon-yes">✓</span> 24/7 Live Looker Studio Dashboards</td>
              <td><span class="svc-icon-no">✕</span> Static Monthly PDF Exports</td>
              <td><span class="svc-icon-no">✕</span> No Attribution Reporting</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       5. 180-Day Execution Roadmap & Sprints
       ======================================================================== -->
  <section class="svc-section-roadmap" id="roadmap">
    <div class="container w-container">
      <div class="svc-section-intro">
        <div class="svc-section-tag">Structured Delivery &bull; Zero Surprises</div>
        <h2 class="svc-section-title">The 180-Day Commercial Growth Roadmap</h2>
        <p class="svc-section-desc">
          We operate in agile 30-day sprints. Here is how your commercial acceleration unfolds month-by-month.
        </p>
      </div>

      <div class="svc-roadmap-grid">
        <!-- Phase 1 -->
        <div class="svc-roadmap-card">
          <div class="svc-roadmap-header">
            <span class="svc-roadmap-phase">MONTH 01</span>
            <span class="svc-roadmap-badge">Discovery &amp; Audit</span>
          </div>
          <h3 class="svc-roadmap-title">Diagnostic Audit &amp; Technical Foundation</h3>
          <p class="svc-roadmap-desc">Forensic technical audit, competitor GAP mapping, tracking setup, and baseline KPIs.</p>
          <ul class="svc-roadmap-steps">
            <li>Full audit of existing assets and competitor benchmarks</li>
            <li>Tracking pixels, GA4 events, and conversion webhook verification</li>
            <li>Strategic 6-month growth roadmap and deliverable agreement</li>
          </ul>
        </div>

        <!-- Phase 2 -->
        <div class="svc-roadmap-card">
          <div class="svc-roadmap-header">
            <span class="svc-roadmap-phase">MONTH 02</span>
            <span class="svc-roadmap-badge">Architecture</span>
          </div>
          <h3 class="svc-roadmap-title">Architecture &amp; Core Asset Build</h3>
          <p class="svc-roadmap-desc">High-converting asset creation, audience segmentation, and structural optimization.</p>
          <ul class="svc-roadmap-steps">
            <li>High-velocity landing funnels and campaign creative production</li>
            <li>Deep technical fixes and speed/infrastructure optimization</li>
            <li>Bilingual copywriting and messaging review approval</li>
          </ul>
        </div>

        <!-- Phase 3 -->
        <div class="svc-roadmap-card">
          <div class="svc-roadmap-header">
            <span class="svc-roadmap-phase">MONTH 03</span>
            <span class="svc-roadmap-badge">Launch &amp; Test</span>
          </div>
          <h3 class="svc-roadmap-title">Live Deployment &amp; Initial Acceleration</h3>
          <p class="svc-roadmap-desc">Live market deployment, initial conversion surge, and tight negative parameter controls.</p>
          <ul class="svc-roadmap-steps">
            <li>Full-scale campaign activation across target UAE segments</li>
            <li>Daily search query and conversion feedback scrubbing</li>
            <li>First monthly executive briefing and initial ROI measurement</li>
          </ul>
        </div>

        <!-- Phase 4 -->
        <div class="svc-roadmap-card">
          <div class="svc-roadmap-header">
            <span class="svc-roadmap-phase">MONTHS 04-06</span>
            <span class="svc-roadmap-badge">Scale &amp; Dominate</span>
          </div>
          <h3 class="svc-roadmap-title">Compound Scale &amp; Market Leadership</h3>
          <p class="svc-roadmap-desc">Expanding reach, optimizing cost per acquisition, and maximizing closed enterprise deals.</p>
          <ul class="svc-roadmap-steps">
            <li>Scaling top-performing segments across Dubai and GCC</li>
            <li>Continuous multivariate conversion rate optimization (CRO)</li>
            <li>Automated CRM pipeline routing and quarterly strategic review</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       6. Interactive Commercial / ROI Estimator
       ======================================================================== -->
  @if(!empty($service['calculator']))
    <section class="svc-section-calculator" id="estimator">
      <div class="container w-container">
        <div class="svc-section-intro">
          <div class="svc-section-tag">Interactive Business Case</div>
          <h2 class="svc-section-title">Estimate Your Commercial Impact in Dubai</h2>
          <p class="svc-section-desc">
            Adjust the sliders below based on your targets to project estimated inquiries, revenue yield, and efficiency gains.
          </p>
        </div>

        <div class="svc-calc-wrapper">
          <div class="svc-calc-controls">
            <!-- Slider 1 -->
            <div class="svc-calc-group">
              <div class="svc-calc-label-row">
                <span class="svc-calc-label">{{ $service['calculator']['label1'] }}</span>
                <span class="svc-calc-val-display" id="calcVisitorsVal" data-unit="{{ $service['calculator']['unit1'] }}">{{ number_format($service['calculator']['val1']) }}{{ $service['calculator']['unit1'] }}</span>
              </div>
              <input type="range" class="svc-slider" id="calcVisitors" 
                     min="{{ $service['calculator']['min1'] }}" 
                     max="{{ $service['calculator']['max1'] }}" 
                     step="{{ $service['calculator']['step1'] }}" 
                     value="{{ $service['calculator']['val1'] }}"/>
            </div>

            <!-- Slider 2 -->
            <div class="svc-calc-group">
              <div class="svc-calc-label-row">
                <span class="svc-calc-label">{{ $service['calculator']['label2'] }}</span>
                <span class="svc-calc-val-display" id="calcValueVal" data-unit="{{ $service['calculator']['unit2'] }}">{{ $service['calculator']['unit2'] }}{{ number_format($service['calculator']['val2']) }}</span>
              </div>
              <input type="range" class="svc-slider" id="calcValue" 
                     min="{{ $service['calculator']['min2'] }}" 
                     max="{{ $service['calculator']['max2'] }}" 
                     step="{{ $service['calculator']['step2'] }}" 
                     value="{{ $service['calculator']['val2'] }}"/>
            </div>

            <!-- Slider 3 -->
            <div class="svc-calc-group">
              <div class="svc-calc-label-row">
                <span class="svc-calc-label">{{ $service['calculator']['label3'] }}</span>
                <span class="svc-calc-val-display" id="calcConvVal" data-unit="{{ $service['calculator']['unit3'] }}">{{ $service['calculator']['val3'] }}{{ $service['calculator']['unit3'] }}</span>
              </div>
              <input type="range" class="svc-slider" id="calcConvRate" 
                     min="{{ $service['calculator']['min3'] }}" 
                     max="{{ $service['calculator']['max3'] }}" 
                     step="{{ $service['calculator']['step3'] }}" 
                     value="{{ $service['calculator']['val3'] }}"/>
            </div>
          </div>

          <div class="svc-calc-results-card">
            <h3 class="svc-calc-results-title">{{ $service['calculator']['res_title'] ?? 'Projected Commercial Impact' }}</h3>
            <div class="svc-calc-result-block">
              <div class="svc-calc-result-num" id="calcResultLeads">150+</div>
              <div class="svc-calc-result-label">{{ $service['calculator']['res1_label'] ?? 'Projected Inquiries' }}</div>
            </div>
            <div class="svc-calc-result-block">
              <div class="svc-calc-result-num" id="calcResultRevenue">AED 135,000</div>
              <div class="svc-calc-result-label">{{ $service['calculator']['res2_label'] ?? 'Estimated Revenue Yield' }}</div>
            </div>
            <div class="svc-calc-result-block">
              <div class="svc-calc-result-num" id="calcResultSavings">AED 53,625</div>
              <div class="svc-calc-result-label">{{ $service['calculator']['res3_label'] ?? 'Capital Efficiency / Savings' }}</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif

  <!-- ========================================================================
       7. Industry Verticals Served
       ======================================================================== -->
  <section class="svc-section-verticals">
    <div class="container w-container">
      <div class="svc-section-intro">
        <div class="svc-section-tag">High-Value Dubai Sectors</div>
        <h2 class="svc-section-title">Specialized Experience Across Key UAE Industries</h2>
        <p class="svc-section-desc">
          We understand the specific buying behavior, regulatory compliance, and demographic nuances of Dubai’s core industries.
        </p>
      </div>

      <div class="svc-verticals-grid">
        <div class="svc-vertical-card">
          <div class="svc-vertical-icon">🏢</div>
          <h3 class="svc-vertical-title">Real Estate &amp; Luxury Property</h3>
          <p class="svc-vertical-desc">Off-plan launches, luxury villa brokerages, and international investor lead acquisition.</p>
        </div>
        <div class="svc-vertical-card">
          <div class="svc-vertical-icon">🏥</div>
          <h3 class="svc-vertical-title">Healthcare, Clinics &amp; Wellness</h3>
          <p class="svc-vertical-desc">Dental clinics, aesthetic surgery, medical tourism, and MOHAP-compliant marketing.</p>
        </div>
        <div class="svc-vertical-card">
          <div class="svc-vertical-icon">⚖️</div>
          <h3 class="svc-vertical-title">Corporate Services &amp; Legal</h3>
          <p class="svc-vertical-desc">Company formation, corporate banking, Golden Visa, and business advisory firms.</p>
        </div>
        <div class="svc-vertical-card">
          <div class="svc-vertical-icon">🛍️</div>
          <h3 class="svc-vertical-title">High-Ticket E-Commerce &amp; Retail</h3>
          <p class="svc-vertical-desc">Luxury perfumes, designer fashion, jewelry, and commercial interior furnishings.</p>
        </div>
        <div class="svc-vertical-card">
          <div class="svc-vertical-icon">🏗️</div>
          <h3 class="svc-vertical-title">Industrial, Logistics &amp; Energy</h3>
          <p class="svc-vertical-desc">Solar energy, industrial machinery, warehousing, and GCC procurement tenders.</p>
        </div>
        <div class="svc-vertical-card">
          <div class="svc-vertical-icon">✈️</div>
          <h3 class="svc-vertical-title">Hospitality, Tourism &amp; Luxury Dining</h3>
          <p class="svc-vertical-desc">Luxury travel agencies, fine dining reservations, and premium tourism experiences.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       8. Verified Case Studies Section (MANDATORY REQUIREMENT)
       ======================================================================== -->
  <section class="svc-section-cases" id="case-studies">
    <div class="container w-container">
      <div class="svc-section-intro">
        <div class="svc-section-tag">Demonstrated Impact &bull; Real UAE Case Studies</div>
        <h2 class="svc-section-title">Proven Inbound Growth for UAE Enterprises</h2>
        <p class="svc-section-desc">
          Verified results from actual businesses scaling commercial revenue across the competitive Dubai and GCC marketplace.
        </p>
      </div>

      <div class="svc-cases-grid">
        @forelse($relatedCaseStudies as $case)
          <a href="{{ route('work.show', $case->slug) }}" class="svc-case-card" aria-label="{{ $case->title }}">
            <div class="svc-case-media">
              <img src="{{ asset($case->image) }}" alt="{{ $case->title }}" class="svc-case-img" loading="lazy" />
              @if(!empty($case->metric))
                <div class="svc-case-metric-badge">
                  <span class="svc-case-metric-dot"></span>
                  <span>{{ $case->metric }}</span>
                </div>
              @endif
            </div>

            <div class="svc-case-inner">
              <div>
                <div class="svc-case-top">
                  <span class="svc-case-sector">{{ $case->category }}</span>
                  <span class="svc-case-timeframe">{{ $case->timeline ?? 'Verified Case' }}</span>
                </div>
                @if(!empty($case->client))
                  <div class="svc-case-client">{{ $case->client }}</div>
                @endif
                <h3 class="svc-case-title">{{ $case->title }}</h3>
                <p class="svc-case-desc">
                  {{ \Illuminate\Support\Str::limit($case->summary, 140) }}
                </p>

                @if(!empty($case->results) && is_array($case->results))
                  <div class="svc-case-metrics-row">
                    @foreach(array_slice($case->results, 0, 2) as $res)
                      <div class="svc-case-metric-block">
                        <span class="svc-case-metric-num">{{ $res['num'] ?? '' }}</span>
                        <span class="svc-case-metric-lbl">{{ $res['lbl'] ?? '' }}</span>
                      </div>
                    @endforeach
                  </div>
                @endif

                @if(!empty($case->testimonial) && is_array($case->testimonial) && !empty($case->testimonial['quote']))
                  <div class="svc-case-quote-box">
                    <p class="svc-case-quote-text">“{{ \Illuminate\Support\Str::limit($case->testimonial['quote'], 115) }}”</p>
                    <span class="svc-case-quote-author">— {{ $case->testimonial['author'] ?? '' }}{{ !empty($case->testimonial['role']) ? ', ' . \Illuminate\Support\Str::limit($case->testimonial['role'], 30) : '' }}</span>
                  </div>
                @endif
              </div>

              <div class="svc-case-action">
                <span>View Full Case Study</span>
                <span class="svc-case-action-arrow">&rarr;</span>
              </div>
            </div>
          </a>
        @empty
          <div class="svc-case-card">
            <div class="svc-case-inner">
              <div class="svc-case-top">
                <span class="svc-case-sector">E-Commerce &amp; Growth</span>
                <span class="svc-case-timeframe">6 Months Execution</span>
              </div>
              <h3 class="svc-case-title">Florkett UAE: 412% Organic Revenue Growth</h3>
              <p class="svc-case-desc">Structured digital ecosystem and high-intent commercial growth in Dubai.</p>
              <div class="svc-case-action">
                <span>Explore Case Studies</span>
                <span class="svc-case-action-arrow">&rarr;</span>
              </div>
            </div>
          </div>
        @endforelse
      </div>

      <div class="svc-cases-cta-wrap">
        <a href="{{ route('work') }}" class="svc-btn-outline">
          <span>View All 13+ UAE Case Studies</span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       9. Strategic Blog Section (MANDATORY REQUIREMENT)
       ======================================================================== -->
  <section class="svc-section-blog" id="insights">
    <div class="container w-container">
      <div class="svc-section-intro">
        <div class="svc-section-tag">Market Intelligence &bull; UAE Market Analysis</div>
        <h2 class="svc-section-title">Latest Strategic Perspectives &amp; UAE Playbooks</h2>
        <p class="svc-section-desc">
          Actionable frameworks, technical blueprints, and market breakdowns written by Zenerom's senior directors in Dubai.
        </p>
      </div>

      <div class="svc-blog-grid">
        @forelse($relatedPosts as $post)
          <a href="{{ route('blog.show', $post->slug) }}" class="svc-blog-card" aria-label="{{ $post->title }}">
            <div class="svc-blog-media">
              <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="svc-blog-img" loading="lazy" />
              <div class="svc-blog-badge">{{ $post->category ?? 'Insights' }}</div>
            </div>

            <div class="svc-blog-body">
              <div>
                <div class="svc-blog-meta-top">
                  <span class="svc-blog-time">{{ $post->reading_time ?? '5 min read' }}</span>
                  <span class="svc-blog-date">{{ $post->published_at ? $post->published_at->format('M d, Y') : '' }}</span>
                </div>
                <h3 class="svc-blog-title">{{ $post->title }}</h3>
                <p class="svc-blog-excerpt">{{ \Illuminate\Support\Str::limit(strip_tags($post->excerpt), 130) }}</p>
              </div>

              <div class="svc-blog-footer">
                <div class="svc-blog-author">
                  <img src="{{ asset($post->author_avatar ?? 'assets/images/team/shefeek-niyas.webp') }}" alt="{{ $post->author ?? 'Zenerom Specialist' }}" class="svc-blog-author-avatar" loading="lazy" />
                  <span class="svc-blog-author-name">{{ $post->author ?? 'Zenerom Specialist' }}</span>
                </div>
                <div class="svc-blog-read-btn">
                  <span>Read Guide</span>
                  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>
              </div>
            </div>
          </a>
        @empty
          <div class="svc-blog-card">
            <div class="svc-blog-body">
              <h3 class="svc-blog-title">Explore Zenerom's Comprehensive Digital Growth Insights</h3>
              <p class="svc-blog-excerpt">Read our latest tactical playbooks on search, paid acquisition, and digital transformation in the UAE.</p>
              <div class="svc-blog-footer">
                <span class="svc-blog-read-btn">Visit Blog Hub &rarr;</span>
              </div>
            </div>
          </div>
        @endforelse
      </div>

      <div class="svc-blog-cta-wrap">
        <a href="{{ route('blog.index') }}" class="svc-btn-outline">
          <span>Browse All 70+ Digital Insights</span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       10. Tooling & Technology Stack
       ======================================================================== -->
  <section class="svc-section-tools">
    <div class="container w-container">
      <div class="svc-tools-intro">
        <div class="svc-section-tag">Technology &amp; Tooling Stack</div>
        <h3 style="font-size: 1.5rem; font-weight:700; color:var(--black-900); margin:0 0 0.5rem;">Enterprise Grade Infrastructure</h3>
        <p style="font-size:0.925rem; color:#64748b; margin:0;">
          We leverage industry-standard enterprise tooling to monitor, automate, and outmaneuver your competitors daily.
        </p>
      </div>

      <div class="svc-tools-grid">
        <div class="svc-tool-pill"><div class="svc-tool-dot"></div><span>Google Analytics 4</span></div>
        <div class="svc-tool-pill"><div class="svc-tool-dot"></div><span>Looker Studio Executive</span></div>
        <div class="svc-tool-pill"><div class="svc-tool-dot"></div><span>Zoho One &amp; CRM</span></div>
        <div class="svc-tool-pill"><div class="svc-tool-dot"></div><span>Shopify Plus</span></div>
        <div class="svc-tool-pill"><div class="svc-tool-dot"></div><span>Laravel 11 &amp; React</span></div>
        <div class="svc-tool-pill"><div class="svc-tool-dot"></div><span>Ahrefs Enterprise</span></div>
        <div class="svc-tool-pill"><div class="svc-tool-dot"></div><span>Google Tag Manager</span></div>
        <div class="svc-tool-pill"><div class="svc-tool-dot"></div><span>WhatsApp Cloud API</span></div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       11. Comprehensive FAQs Accordion
       ======================================================================== -->
  @if(!empty($service['faqs']))
    <section class="svc-section-faq" id="faqs">
      <div class="container w-container">
        <div class="svc-section-intro-dark">
          <div class="svc-section-tag" style="color: var(--brand-flamingo, #f26934);">Executive Clarity &bull; Common Questions</div>
          <h2 class="svc-section-title">Frequently Asked Questions</h2>
          <p class="svc-section-desc">
            Direct, transparent answers regarding deliverables, timeframes, and commercial expectations in Dubai.
          </p>
        </div>

        <div class="svc-faq-wrap">
          @foreach($service['faqs'] as $index => $faq)
            <div class="svc-faq-item {{ $index === 0 ? 'is-open' : '' }}">
              <button type="button" class="svc-faq-question-btn" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
                <span>{{ $faq['q'] }}</span>
                <div class="svc-faq-icon">+</div>
              </button>
              <div class="svc-faq-answer">
                <p>{{ $faq['a'] }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
  @endif

  <!-- ========================================================================
       12. Bottom Conversion & Audit / Strategy Request Form
       ======================================================================== -->
  <section class="svc-section-audit-cta" id="audit-section">
    <div class="container w-container">
      <div class="svc-audit-container">
        
        <!-- Left Column: Value Proposition & Direct Contact -->
        <div class="svc-audit-info-card">
          <div class="svc-eyebrow-pill" style="align-self:flex-start; margin-bottom:0.75rem;">
            <div class="svc-eyebrow-dot"></div>
            <span>Strategic Consultation</span>
          </div>
          
          <h2 class="svc-audit-info-title">
            Claim Your Confidential Dubai <span class="highlight-text">{{ $service['title'] }}</span> Blueprint
          </h2>

          <p class="svc-audit-info-desc">
            Speak directly with our senior directors at Burjuman Business Tower. We will evaluate your current commercial position, benchmark your competitors, and deliver a personalized execution plan within 2 business hours.
          </p>

          <ul class="svc-audit-checkpoints">
            <li class="svc-audit-checkpoint">
              <div class="svc-audit-check-icon">✓</div>
              <span><strong>Diagnostic Market Analysis:</strong> Forensic review of your current setup, funnel leaks, and competitive opportunities.</span>
            </li>
            <li class="svc-audit-checkpoint">
              <div class="svc-audit-check-icon">✓</div>
              <span><strong>Competitor Benchmarking:</strong> Discover how top players in your Dubai sector acquire high-value customers.</span>
            </li>
            <li class="svc-audit-checkpoint">
              <div class="svc-audit-check-icon">✓</div>
              <span><strong>Bilingual Readiness Review:</strong> Arabic and English conversion optimization tailored for GCC buyers.</span>
            </li>
            <li class="svc-audit-checkpoint">
              <div class="svc-audit-check-icon">✓</div>
              <span><strong>180-Day Revenue Roadmap:</strong> Realistic timeline, KPIs, and transparent cost breakdown for your leadership team.</span>
            </li>
          </ul>

          <div class="svc-audit-direct-channels">
            <div class="svc-audit-channel-item">
              <span style="font-size: 1.2rem;">📍</span>
              <span><strong>Burjuman Business Tower:</strong> Office No:929, 9th Floor, Dubai, UAE</span>
            </div>
            <div class="svc-audit-channel-item">
              <span style="font-size: 1.2rem;">📞</span>
              <span><strong>Strategy Direct:</strong> <a href="tel:+971508764885" style="color:var(--black-900); text-decoration:none; font-weight:700;">+971 50 876 4885</a> / <a href="tel:+971563996631" style="color:var(--black-900); text-decoration:none; font-weight:700;">+971 56 399 6631</a></span>
            </div>
            <div class="svc-audit-channel-item">
              <span style="font-size: 1.2rem;">✉️</span>
              <span><strong>Official Inbox:</strong> <a href="mailto:info@zenerom.ae" style="color:var(--brand-flamingo, #f26934); text-decoration:none; font-weight:600;">info@zenerom.ae</a></span>
            </div>
          </div>
        </div>

        <!-- Right Column: Interactive Form -->
        <div class="svc-audit-form-card">
          <div class="svc-form-header">
            <h3 class="svc-form-title">Request Your Strategy Blueprint</h3>
            <p class="svc-form-subtitle">100% Free &bull; No Obligation &bull; Fast 2-Hour Business SLA</p>
          </div>

          <form id="svcAuditForm" class="svc-form">
            <div class="svc-form-field">
              <label class="svc-form-label" for="auditWebsite">Website URL / Company Name *</label>
              <input type="text" id="auditWebsite" class="svc-form-input" placeholder="https://yourcompany.ae" required/>
            </div>

            <div class="svc-form-row">
              <div class="svc-form-field">
                <label class="svc-form-label" for="auditKeyword">Primary Goal / Requirement</label>
                <input type="text" id="auditKeyword" class="svc-form-input" value="{{ $service['title'] }}" required/>
              </div>
              <div class="svc-form-field">
                <label class="svc-form-label" for="auditMarket">Target Geography</label>
                <select id="auditMarket" class="svc-form-select">
                  <option value="Dubai Only" selected>Dubai Only</option>
                  <option value="All 7 UAE Emirates">All 7 UAE Emirates</option>
                  <option value="UAE + Saudi Arabia (GCC)">UAE + Saudi Arabia (GCC)</option>
                  <option value="Global International">Global International</option>
                </select>
              </div>
            </div>

            <div class="svc-form-row">
              <div class="svc-form-field">
                <label class="svc-form-label" for="auditName">Your Name &amp; Title *</label>
                <input type="text" id="auditName" class="svc-form-input" placeholder="e.g. Tariq Al Mansoori" required/>
              </div>
              <div class="svc-form-field">
                <label class="svc-form-label" for="auditEmail">Corporate Email *</label>
                <input type="email" id="auditEmail" class="svc-form-input" placeholder="tariq@yourcompany.ae" required/>
              </div>
            </div>

            <div class="svc-form-field">
              <label class="svc-form-label" for="auditPhone">Phone / WhatsApp Number *</label>
              <input type="tel" id="auditPhone" class="svc-form-input" placeholder="+971 50 000 0000" required/>
            </div>

            <button type="submit" class="svc-form-submit-btn">
              <span>Generate Strategy Blueprint</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>

            <div class="svc-form-guarantee">
              🔒 Confidentiality Guaranteed. We never share your data. Reviewed by Senior Directors at Burjuman Tower.
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- ========================================================================
       13. Cross-Service Exploration (Complementary Solutions)
       ======================================================================== -->
  @if(!empty($complementaryServices))
    <section class="svc-section-related">
      <div class="container w-container">
        <div class="svc-section-intro">
          <div class="svc-section-tag">Synergistic Capabilities</div>
          <h2 class="svc-section-title">Complementary Growth Services</h2>
          <p class="svc-section-desc">
            Combine search dominance, performance media, custom web engineering, and enterprise CRM automation into one unified growth system.
          </p>
        </div>

        <div class="svc-related-grid">
          @foreach($complementaryServices as $rel)
            <a href="{{ route('services.show', $rel['slug']) }}" class="svc-related-card">
              <div>
                <div class="svc-related-tag">{{ $rel['num'] ?? '01 / SERVICE' }}</div>
                <h3 class="svc-related-title">{{ $rel['title'] }}</h3>
                <p class="svc-related-desc">
                  {{ \Illuminate\Support\Str::limit($rel['hero_desc'], 110) }}
                </p>
              </div>
              <div class="svc-related-link">
                <span>Explore {{ $rel['title'] }}</span>
                <span>→</span>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </section>
  @endif

  <!-- ========================================================================
       14. Scripts & Page Assets
       ======================================================================== -->
  @push('scripts')
    <script src="{{ asset('js/service-single.js?v=2') }}"></script>
  @endpush
</x-layouts.app>
