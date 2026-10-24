<x-layouts.app>
  <x-slot:title>{{ $caseStudy->meta_title ?? ($caseStudy->title . ' | Zenerom Dubai') }}</x-slot:title>
  <x-slot:description>{{ $caseStudy->meta_description ?? ($caseStudy->summary ?? Str::limit(strip_tags($caseStudy->challenge), 160)) }}</x-slot:description>
  <x-slot:canonical>{{ route('work.show', $caseStudy->slug) }}</x-slot:canonical>
  <x-slot:ogImage>{{ asset($caseStudy->image) }}</x-slot:ogImage>
  <x-slot:ogType>article</x-slot:ogType>

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/work.css?v=2') }}"/>
    <link rel="stylesheet" href="{{ asset('css/case-study.css?v=' . time()) }}"/>
  @endpush

  @push('schema')
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "CreativeWork",
      "headline": "{{ addslashes($caseStudy->title) }}",
      "description": "{{ addslashes($caseStudy->meta_description ?? $caseStudy->summary ?? $caseStudy->challenge) }}",
      "image": "{{ asset($caseStudy->image) }}",
      "creator": {
        "@@type": "Organization",
        "name": "Zenerom UAE",
        "url": "https://zenerom.ae",
        "logo": "{{ asset('assets/images/zenerom-logo.png') }}"
      },
      "customer": {
        "@@type": "Organization",
        "name": "{{ addslashes($caseStudy->client) }}"
      },
      "mainEntityOfPage": {
        "@@type": "WebPage",
        "@@id": "{{ route('work.show', $caseStudy->slug) }}"
      }
    }
    </script>
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
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
          "name": "Selected Works & Case Studies",
          "item": "{{ route('work') }}"
        },
        {
          "@@type": "ListItem",
          "position": 3,
          "name": "{{ addslashes($caseStudy->client ?? $caseStudy->title) }}",
          "item": "{{ route('work.show', $caseStudy->slug) }}"
        }
      ]
    }
    </script>
  @endpush

  <!-- Reading Progress Bar -->
  <div class="cs-progress-bar" id="csProgressBar" aria-hidden="true"></div>

  <article class="cs-single-page">
    
    <!-- ========================================================================
         1. Hero Section
         ======================================================================== -->
    <header class="cs-hero">
      <div class="cs-container">
        
        <!-- Breadcrumbs -->
        <nav class="cs-breadcrumbs" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="cs-breadcrumbs-sep">/</span>
          <a href="{{ route('work') }}">Selected Works &amp; Case Studies</a>
          <span class="cs-breadcrumbs-sep">/</span>
          <span class="cs-breadcrumbs-current">{{ $caseStudy->client ?? $caseStudy->title }}</span>
        </nav>

        <!-- Eyebrow Row -->
        <div class="cs-eyebrow-row">
          <div class="cs-eyebrow-pill">
            <div class="cs-eyebrow-dot"></div>
            <span>{{ $caseStudy->category }} &bull; Dubai, UAE</span>
          </div>
          @if($caseStudy->timeline)
            <div class="cs-timeline-badge">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
              <span>{{ $caseStudy->timeline }}</span>
            </div>
          @endif
          @if($caseStudy->metric)
            <div class="cs-timeline-badge" style="background: rgba(242, 105, 52, 0.08); border-color: rgba(242, 105, 52, 0.25); color: #f26934; font-weight:700;">
              <span>{{ $caseStudy->metric }}</span>
            </div>
          @endif
        </div>

        <!-- Headline -->
        <h1 class="cs-hero-title">
          {{ $caseStudy->title }}
        </h1>

        <!-- Executive Summary -->
        @if($caseStudy->summary)
          <p class="cs-hero-summary">
            {{ $caseStudy->summary }}
          </p>
        @endif

        <!-- Key Metadata Strip -->
        <div class="cs-meta-strip">
          <div class="cs-meta-item">
            <span class="cs-meta-label">Client Partner</span>
            <span class="cs-meta-value">{{ $caseStudy->client }}</span>
          </div>
          <div class="cs-meta-item">
            <span class="cs-meta-label">Industry &amp; Sector</span>
            <span class="cs-meta-value">{{ $caseStudy->industry ?? $caseStudy->category }}</span>
          </div>
          <div class="cs-meta-item">
            <span class="cs-meta-label">Core Capabilities</span>
            <span class="cs-meta-value">{{ $caseStudy->category }}</span>
          </div>
          <div class="cs-meta-item">
            <span class="cs-meta-label">Deliverables &amp; Stack</span>
            <div class="cs-meta-tags">
              @if(is_array($caseStudy->deliverables))
                @foreach(array_slice($caseStudy->deliverables, 0, 3) as $deliv)
                  <span class="cs-meta-tag">{{ $deliv }}</span>
                @endforeach
                @if(count($caseStudy->deliverables) > 3)
                  <span class="cs-meta-tag">+{{ count($caseStudy->deliverables) - 3 }} more</span>
                @endif
              @endif
            </div>
          </div>
        </div>

        <!-- 3-Metrics Highlight Strip -->
        @if(is_array($caseStudy->results) && count($caseStudy->results) > 0)
          <div class="cs-metrics-banner">
            @foreach($caseStudy->results as $res)
              <div class="cs-metric-card">
                <div class="cs-metric-number">{{ $res['num'] ?? '' }}</div>
                <div class="cs-metric-label">{{ $res['lbl'] ?? '' }}</div>
              </div>
            @endforeach
          </div>
        @endif

        <!-- Primary Hero Showcase Visual -->
        <div class="cs-visual-showcase">
          <img src="{{ asset($caseStudy->image) }}" alt="{{ $caseStudy->title }} showcase visual" class="cs-visual-img" />
          <div class="cs-visual-badge">
            <span class="cs-visual-badge-dot"></span>
            <span>Verified UAE Enterprise Engagement &bull; Zenerom Growth Desk</span>
          </div>
        </div>

      </div>
    </header>

    <!-- ========================================================================
         2. Main Deep-Dive Body Layout
         ======================================================================== -->
    <section class="cs-container">
      <div class="cs-body-layout">
        
        <!-- Sticky Sidebar -->
        <aside class="cs-sidebar">
          
          <!-- In-Page Table of Contents Navigation -->
          <div class="cs-sidebar-card">
            <div class="cs-sidebar-title">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
              <span>Project Blueprint</span>
            </div>
            <ul class="cs-toc-list">
              <li><a href="#overview" class="cs-toc-link is-active">1. Executive Overview</a></li>
              <li><a href="#challenge" class="cs-toc-link">2. The Challenge</a></li>
              <li><a href="#solution" class="cs-toc-link">3. Strategy &amp; Roadmap</a></li>
              <li><a href="#deliverables" class="cs-toc-link">4. Delivery Tech Stack</a></li>
              <li><a href="#results" class="cs-toc-link">5. Quantified ROI Impact</a></li>
              @if(!empty($caseStudy->testimonial))
                <li><a href="#testimonial" class="cs-toc-link">6. Client Endorsement</a></li>
              @endif
            </ul>
          </div>

          <!-- Direct Strategy Inquiry Card -->
          <div class="cs-sidebar-cta">
            <div class="cs-eyebrow-pill" style="background: rgba(255,255,255,0.12); margin-bottom: 0.85rem; font-size:0.68rem; padding:0.3rem 0.75rem;">
              <div class="cs-eyebrow-dot"></div>
              <span>Strategist Available</span>
            </div>
            <h3 class="cs-sidebar-cta-title">Scale Similar Results</h3>
            <p class="cs-sidebar-cta-desc">
              Discover how our team can architect a tailored digital growth system for {{ $caseStudy->client ?? 'your enterprise' }}.
            </p>
            <a href="{{ route('contact') }}" class="cs-sidebar-cta-btn">
              <span>Book Strategic Consultation</span>
              <span>→</span>
            </a>
            <a href="https://wa.me/971563996631?text={{ urlencode('Hello Zenerom Team, I was reviewing your case study on ' . $caseStudy->title . ' and would like to explore similar growth for our company.') }}" target="_blank" rel="noopener noreferrer" class="cs-sidebar-wa-btn">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.131-.532-1.839-.762-3.033-2.639-3.125-2.763-.09-.125-.747-.992-.747-1.892 0-.9.471-1.344.638-1.528.167-.184.366-.23.488-.23.122 0 .245.002.352.008.113.006.264-.043.413.315.153.366.522 1.272.568 1.364.045.092.076.2.015.323-.061.122-.092.198-.183.305-.091.107-.191.24-.273.323-.092.091-.188.19-.081.373.107.184.475.784 1.02 1.269.702.624 1.293.818 1.477.909.184.092.29.077.397-.046.107-.122.458-.535.58-.718.122-.184.244-.153.412-.092.168.061 1.069.504 1.252.595.183.092.305.138.351.214.046.076.046.443-.098.848z"/></svg>
              <span>WhatsApp Strategy Desk</span>
            </a>
          </div>

        </aside>

        <!-- Main Deep-Dive Content Column -->
        <div class="cs-main-content">
          
          <!-- Section 1: Executive Overview -->
          <section id="overview" class="cs-section">
            <div class="cs-section-header">
              <span class="cs-section-eyebrow">&bull; 01 / EXECUTIVE CONTEXT</span>
              <h2 class="cs-section-title">The Strategic Mandate</h2>
            </div>
            <p style="font-size:1.0625rem; line-height:1.75; color:#334155; margin-bottom:1.25rem;">
              Operating in Dubai’s hyper-competitive commercial ecosystem requires more than standard digital marketing—it demands an engineered approach to search authority, acquisition economics, and conversion funnels. When {{ $caseStudy->client }} partnered with Zenerom, the goal was clear: dominate market share in the UAE while achieving measurable, verifiable business revenue.
            </p>
            @if($caseStudy->summary)
              <p style="font-size:1.0625rem; line-height:1.75; color:#334155; margin:0;">
                {{ $caseStudy->summary }}
              </p>
            @endif
          </section>

          <!-- Section 2: The Challenge -->
          <section id="challenge" class="cs-section">
            <div class="cs-section-header">
              <span class="cs-section-eyebrow">&bull; 02 / MARKET BOTTLENECKS</span>
              <h2 class="cs-section-title">The Challenge &amp; Problem Diagnosis</h2>
            </div>
            <div class="cs-challenge-card">
              <div style="display:flex; align-items:center; gap:0.6rem; margin-bottom:0.75rem; color:#f26934; font-weight:700; font-size:0.875rem; text-transform:uppercase; letter-spacing:0.06em;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                <span>Core Obstacles Faced</span>
              </div>
              <p class="cs-challenge-desc">
                {{ $caseStudy->challenge }}
              </p>
            </div>
          </section>

          <!-- Section 3: The Strategic Solution & Roadmap -->
          <section id="solution" class="cs-section">
            <div class="cs-section-header">
              <span class="cs-section-eyebrow">&bull; 03 / METHODOLOGY &amp; DELIVERY</span>
              <h2 class="cs-section-title">The Zenerom Engineered Solution</h2>
            </div>
            <p style="font-size:1.0625rem; line-height:1.75; color:#334155; margin-bottom:1.5rem;">
              {{ $caseStudy->solution }}
            </p>

            @if(!empty($caseStudy->solution_steps) && is_array($caseStudy->solution_steps))
              <div class="cs-steps-grid">
                @foreach($caseStudy->solution_steps as $step)
                  <div class="cs-step-card">
                    <div class="cs-step-badge">{{ $step['step'] ?? ('0' . ($loop->index + 1)) }}</div>
                    <div>
                      <h3 class="cs-step-heading">{{ $step['title'] ?? '' }}</h3>
                      <p class="cs-step-desc">{{ $step['desc'] ?? '' }}</p>
                    </div>
                  </div>
                @endforeach
              </div>
            @endif

            @if($caseStudy->secondary_image)
              <div class="cs-secondary-visual-wrap">
                <img src="{{ asset($caseStudy->secondary_image) }}" alt="{{ $caseStudy->title }} project execution screenshot" class="cs-secondary-visual-img" loading="lazy" />
              </div>
            @endif
          </section>

          <!-- Section 4: Delivery Tech & Tools -->
          <section id="deliverables" class="cs-section">
            <div class="cs-section-header">
              <span class="cs-section-eyebrow">&bull; 04 / ARCHITECTURE &amp; TOOLS</span>
              <h2 class="cs-section-title">Delivery Stack &amp; Technologies</h2>
            </div>
            <p style="font-size:0.95rem; color:#64748b; margin-bottom:1rem;">
              The strategic platforms, tracking frameworks, and custom software architectures deployed during this client engagement:
            </p>
            @if(is_array($caseStudy->deliverables))
              <div class="cs-stack-grid">
                @foreach($caseStudy->deliverables as $tool)
                  <div class="cs-stack-chip">
                    <span class="cs-stack-check">✓</span>
                    <span>{{ $tool }}</span>
                  </div>
                @endforeach
              </div>
            @endif
          </section>

          <!-- Section 5: Quantified Results & ROI Impact -->
          <section id="results" class="cs-section">
            <div class="cs-section-header">
              <span class="cs-section-eyebrow">&bull; 05 / VERIFIED IMPACT</span>
              <h2 class="cs-section-title">Quantified Business Outcomes</h2>
            </div>
            <p style="font-size:1.0625rem; line-height:1.75; color:#334155; margin-bottom:1.25rem;">
              Through data-driven precision, our execution produced verifiable business growth benchmarked against Google Analytics 4, CRM pipelines, and revenue attribution models:
            </p>
            @if(is_array($caseStudy->results))
              <div class="cs-results-grid">
                @foreach($caseStudy->results as $res)
                  <div class="cs-result-box">
                    <div class="cs-result-num">{{ $res['num'] ?? '' }}</div>
                    <div class="cs-result-lbl">{{ $res['lbl'] ?? '' }}</div>
                  </div>
                @endforeach
              </div>
            @endif
          </section>

          <!-- Section 6: Client Testimonial -->
          @if(!empty($caseStudy->testimonial) && is_array($caseStudy->testimonial))
            <section id="testimonial" class="cs-section">
              <div class="cs-section-header">
                <span class="cs-section-eyebrow">&bull; 06 / CLIENT PERSPECTIVE</span>
                <h2 class="cs-section-title">Stakeholder Endorsement</h2>
              </div>
              <div class="cs-testimonial-card">
                <div class="cs-quote-icon">“</div>
                <blockquote class="cs-quote-text">
                  {{ $caseStudy->testimonial['quote'] ?? '' }}
                </blockquote>
                <div class="cs-quote-author">
                  <div class="cs-author-avatar">
                    {{ strtoupper(substr($caseStudy->testimonial['author'] ?? 'Z', 0, 1)) }}
                  </div>
                  <div>
                    <div class="cs-author-name">{{ $caseStudy->testimonial['author'] ?? '' }}</div>
                    <div class="cs-author-role">{{ $caseStudy->testimonial['role'] ?? '' }}</div>
                  </div>
                  <div class="cs-stars-row" aria-label="5 out of 5 stars">
                    ★★★★★
                  </div>
                </div>
              </div>
            </section>
          @endif

        </div>

      </div>
    </section>

    <!-- ========================================================================
         3. Next Project Teaser Feature
         ======================================================================== -->
    @if($nextStudy)
      <section class="cs-container cs-next-wrap">
        <a href="{{ route('work.show', $nextStudy->slug) }}" class="cs-next-card">
          <div>
            <div class="cs-next-eyebrow">
              <span>Next Case Study</span>
              <span>&bull;</span>
              <span>{{ $nextStudy->category }}</span>
            </div>
            <h3 class="cs-next-title">{{ $nextStudy->title }}</h3>
            <div class="cs-next-arrow-btn">
              <span>Explore Next Project</span>
              <span>→</span>
            </div>
          </div>
          <div>
            <img src="{{ asset($nextStudy->image) }}" alt="{{ $nextStudy->title }}" class="cs-next-thumb" loading="lazy" />
          </div>
        </a>
      </section>
    @endif

    <!-- ========================================================================
         4. Related Case Studies Grid
         ======================================================================== -->
    @if(isset($relatedStudies) && $relatedStudies->count() > 0)
      <section class="cs-related-section">
        <div class="cs-container">
          <div class="cs-related-header">
            <div>
              <div class="cs-section-eyebrow">&bull; EXPLORE MORE SUCCESS STORIES</div>
              <h2 class="cs-section-title">Related Case Studies</h2>
            </div>
            <a href="{{ route('work') }}" class="secondary-button w-inline-block" style="background:#0c0238; color:#ffffff; padding:0.6rem 1.4rem;">
              <div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div>
              <div class="button-text">View All Projects (13)</div>
            </a>
          </div>

          <div class="cs-related-grid">
            @foreach($relatedStudies as $rel)
              <a href="{{ route('work.show', $rel->slug) }}" class="cs-related-card">
                <div class="cs-related-img-wrap">
                  <img src="{{ asset($rel->image) }}" alt="{{ $rel->title }}" class="cs-related-img" loading="lazy" />
                  <div class="cs-related-category-tag">{{ $rel->category }}</div>
                </div>
                <div class="cs-related-body">
                  <div class="cs-related-client">{{ $rel->client }}</div>
                  <h3 class="cs-related-card-title">{{ $rel->title }}</h3>
                  @if($rel->metric)
                    <div class="cs-related-metric">{{ $rel->metric }}</div>
                  @endif
                </div>
              </a>
            @endforeach
          </div>
        </div>
      </section>
    @endif

    <!-- ========================================================================
         5. High-Impact Conversion CTA Section
         ======================================================================== -->
    <section class="work-section-cta" style="background:#0c0238;">
      <div class="container w-container">
        <div class="work-cta-container">
          <div class="work-eyebrow-pill" style="background: rgba(255, 255, 255, 0.08); color: #cbd5e1; margin-bottom: 1.25rem;">
            <div class="work-eyebrow-dot"></div>
            <span>Start Your Digital Transformation</span>
          </div>
          <h2 class="work-cta-title" style="color:#ffffff;">
            Ready to Architect Your Next <span class="highlight-text" style="color:var(--brand-flamingo, #f26934);">Growth Milestone?</span>
          </h2>
          <p class="work-cta-desc" style="color:#cbd5e1;">
            Speak directly with our senior strategy team at Burjuman Business Tower. Whether you need an enterprise SEO overhaul, high-converting PPC funnels, or custom web engineering, we deliver measurable business outcomes.
          </p>
          <div class="work-cta-actions">
            <a href="{{ route('contact') }}" class="primary-button w-inline-block">
              <div class="button-dot-wrap"><div class="button-dot"></div><div class="button-bg"></div></div>
              <div class="button-text">Partner for Digital Growth</div>
            </a>
            <a href="https://wa.me/971563996631?text=Hello%20Zenerom,%20I%20am%20reviewing%20your%20case%20studies%20and%20would%20like%20to%20discuss%20a%20project." target="_blank" class="secondary-button w-inline-block" style="background:#1e2127; color:#ffffff;">
              <div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div>
              <div class="button-text">WhatsApp Strategy Desk</div>
            </a>
          </div>
        </div>
      </div>
    </section>

  </article>

  @push('scripts')
    <script src="{{ asset('js/case-study.js?v=' . time()) }}"></script>
  @endpush
</x-layouts.app>
