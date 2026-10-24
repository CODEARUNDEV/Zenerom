<x-layouts.app>
  <x-slot:title>Digital Marketing Insights Dubai | Zenerom Blog</x-slot:title>
  <x-slot:description>Practical SEO, Google Ads, web design and digital marketing insights for UAE businesses, written by Zenerom specialists in Dubai.</x-slot:description>

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css?v=' . time()) }}"/>
  @endpush

<!-- ========================================================================
       2. Blog Hero Section
       ======================================================================== -->
  <section class="blog-hero-section">
    <div class="blog-hero-container">
      
      <!-- Breadcrumbs -->
      <nav class="blog-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">Home</a>
        <span class="blog-breadcrumb-sep">/</span>
        <span class="blog-breadcrumb-current">Blog &amp; Strategic Insights</span>
      </nav>

      <!-- Live Badge -->
      <div class="blog-live-badge">
        <span class="blog-live-dot"></span>
        <span>72 Published Insights &bull; UAE Market Intelligence</span>
      </div>

      <!-- Main Headline -->
      <h1 class="blog-hero-title">
        Digital Marketing &amp; Technology <span class="blog-title-highlight">Insights Dubai</span>
      </h1>

      <p class="blog-hero-desc">
        Practical search engine optimization, performance media arbitrage, custom web engineering, and enterprise digital strategies tailored for high-growth UAE businesses.
      </p>

      <!-- Live Debounced Search Bar -->
      <div class="blog-hero-search-wrap">
        <form class="blog-search-bar" id="blogSearchForm" role="search" aria-label="Search articles">
          <svg class="blog-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          <input type="text" id="blogSearchInput" class="blog-search-input" placeholder="Search across 72 articles by topic, keyword, or author..." autocomplete="off" />
          <button type="button" id="blogSearchClear" class="blog-search-clear" aria-label="Clear search">&times;</button>
          <button type="submit" class="blog-search-submit">Search</button>
        </form>
      </div>

      <!-- 4-Stat Metric Ticker -->
      <div class="blog-hero-stats-grid">
        <div class="blog-stat-card">
          <div class="blog-stat-num accent">72</div>
          <div class="blog-stat-label">Published Insights Across SEO, Paid Ads &amp; Web</div>
        </div>
        <div class="blog-stat-card">
          <div class="blog-stat-num">9</div>
          <div class="blog-stat-label">Specialized Digital Practice Areas</div>
        </div>
        <div class="blog-stat-card">
          <div class="blog-stat-num">10+</div>
          <div class="blog-stat-label">Years UAE &amp; GCC Market Experience</div>
        </div>
        <div class="blog-stat-card">
          <div class="blog-stat-num accent">4.9★</div>
          <div class="blog-stat-label">Verified Regional Agency Client Score</div>
        </div>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       3. Segmented Topic Filter Bar (Sticky)
       ======================================================================== -->
  <section class="blog-filter-section" id="blogFilterSection">
    <div class="blog-filter-container">
      <div class="blog-filter-scroll" role="tablist" aria-label="Blog Topics">
        <button type="button" class="blog-filter-btn is-active" data-category="all" role="tab" aria-selected="true">
          <span>All Insights</span>
          <span class="blog-filter-count">72</span>
        </button>
        <button type="button" class="blog-filter-btn" data-category="seo" role="tab" aria-selected="false">
          <span>SEO</span>
          <span class="blog-filter-count">20</span>
        </button>
        <button type="button" class="blog-filter-btn" data-category="digital-marketing" role="tab" aria-selected="false">
          <span>Digital Marketing</span>
          <span class="blog-filter-count">13</span>
        </button>
        <button type="button" class="blog-filter-btn" data-category="branding" role="tab" aria-selected="false">
          <span>Branding</span>
          <span class="blog-filter-count">11</span>
        </button>
        <button type="button" class="blog-filter-btn" data-category="performance-ads" role="tab" aria-selected="false">
          <span>Performance Ads</span>
          <span class="blog-filter-count">10</span>
        </button>
        <button type="button" class="blog-filter-btn" data-category="web-dev" role="tab" aria-selected="false">
          <span>Web Dev</span>
          <span class="blog-filter-count">7</span>
        </button>
        <button type="button" class="blog-filter-btn" data-category="social-media" role="tab" aria-selected="false">
          <span>Social Media</span>
          <span class="blog-filter-count">4</span>
        </button>
        <button type="button" class="blog-filter-btn" data-category="growth-strategy" role="tab" aria-selected="false">
          <span>Growth Strategy</span>
          <span class="blog-filter-count">4</span>
        </button>
        <button type="button" class="blog-filter-btn" data-category="software-dev" role="tab" aria-selected="false">
          <span>Software Dev</span>
          <span class="blog-filter-count">2</span>
        </button>
        <button type="button" class="blog-filter-btn" data-category="outsourcing" role="tab" aria-selected="false">
          <span>Outsourcing</span>
          <span class="blog-filter-count">1</span>
        </button>
      </div>

      <button type="button" id="blogViewToggleBtn" class="blog-view-toggle">
        View All 72 Articles
      </button>
    </div>
  </section>

  <!-- ========================================================================
       4. Featured Flagship Article Section
       ======================================================================== -->
  <section class="blog-featured-section" id="blogFeaturedSection">
    <div class="blog-featured-container">
      <div class="blog-section-header">
        <div>
          <div class="blog-section-tag">&bull; LEAD ARCHITECTURAL INSIGHT</div>
          <h2 class="blog-section-title">Featured Editorial</h2>
        </div>
      </div>
      <div id="blogFeaturedWrap">

      <a href="{{ route('blog.show', $featuredPost->slug ?? 'parasite-seo-dubai-brands') }}" class="blog-featured-card" data-slug="{{ $featuredPost->slug ?? 'parasite-seo-dubai-brands' }}">
        <div class="blog-featured-media-wrap">
          <img src="{{ asset($featuredPost->image ?? 'https://zenerom.ae/wp-content/uploads/2026/09/Parasite-SEO-Is-Dead-Why-Renting.webp') }}" alt="{{ $featuredPost->title ?? 'Featured Article' }}" class="blog-featured-img" loading="eager" />
          <div class="blog-featured-badge">
            <span class="blog-live-dot" style="width:6px;height:6px;"></span>
            <span>Flagship Insight</span>
          </div>
        </div>
        <div class="blog-featured-content">
          <div class="blog-meta-row">
            <span class="blog-category-pill">{{ $featuredPost->category ?? 'SEO' }}</span>
            <span class="blog-time-pill">&bull; {{ $featuredPost->reading_time ?? '5 minutes' }}</span>
          </div>
          <h3 class="blog-featured-title">{{ $featuredPost->title ?? 'Parasite SEO Is Dead: Why Renting Authority on High-DA Sites Will Get UAE Brands Penalized' }}</h3>
          <p class="blog-featured-excerpt">{{ Str::limit(strip_tags($featuredPost->excerpt ?? ''), 220) }}</p>
          <div class="blog-author-strip">
            <div class="blog-author-block">
              <img src="{{ asset('assets/images/Fav.png') }}" alt="{{ $featuredPost->author ?? 'Nivil VK' }}" class="blog-author-avatar" />
              <div>
                <div class="blog-author-name">{{ $featuredPost->author ?? 'Nivil VK' }}</div>
                <div class="blog-author-date">{{ $featuredPost->published_at ? $featuredPost->published_at->format('M d, Y') : 'Sep 17, 2026' }} &bull; UAE Edition</div>
              </div>
            </div>
            <div class="blog-action-pill">
              <span>Read Insight</span>
              <span>&rarr;</span>
            </div>
          </div>
        </div>
      </a>

      </div>
    </div>
  </section>

  <!-- ========================================================================
       5. Articles Grid Section
       ======================================================================== -->
  <section class="blog-grid-section" id="blogGridSection">
    <div class="blog-grid-container">
      <div class="blog-result-status-row">
        <div id="blogResultCountText" class="blog-result-count-text">
          Showing <span class="blog-result-count-bold">1–9</span> of <span class="blog-result-count-bold">72</span> articles
        </div>
      </div>

      <div class="blog-grid" id="blogGridWrap">
        @foreach($posts as $post)
          <a href="{{ route('blog.show', $post->slug) }}" class="blog-card" data-slug="{{ $post->slug }}">
            <div class="blog-card-media">
              <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="blog-card-img" loading="lazy" />
            </div>
            <div class="blog-card-body">
              <div class="blog-card-topline">
                <span class="blog-category-pill">{{ $post->category }}</span>
                <span class="blog-time-pill">{{ $post->reading_time ?? '5 min read' }}</span>
              </div>
              <h3 class="blog-card-title">{{ $post->title }}</h3>
              <p class="blog-card-excerpt">{{ Str::limit(strip_tags($post->excerpt), 160) }}</p>
              <div class="blog-card-footer">
                <div class="blog-card-author">
                  <img src="{{ asset('assets/images/Fav.png') }}" alt="{{ $post->author }}" class="blog-card-author-avatar" loading="lazy" />
                  <div class="blog-card-author-meta">
                    <span class="blog-card-author-name">{{ $post->author }}</span>
                    <span class="blog-card-author-date">{{ $post->published_at ? $post->published_at->format('M d, Y') : '' }}</span>
                  </div>
                </div>
                <div class="blog-read-circle" aria-label="Read {{ $post->title }}">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </div>
              </div>
            </div>
          </a>
        @endforeach
      </div>

      <!-- Pagination -->
      <div class="blog-pagination-wrap" id="blogPaginationWrap">
        <!-- Injected dynamically by js/blog.js -->
      </div>
    </div>
  </section>



  <!-- ========================================================================
       7. High-Impact Conversion Banner
       ======================================================================== -->
  <section class="blog-section-cta">
    <div class="blog-cta-container">
      <div class="section-subtitle-block center" style="margin-bottom:1rem;">
        <div class="subtitle-wrap">
          <div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" alt="Icon" class="subtitle-icon"/></div>
          <div class="section-subtitle" style="color:var(--brand-flamingo); font-weight:700;">Actionable UAE Growth</div>
        </div>
      </div>
      <h2 class="blog-cta-title">Ready to Turn Strategic Insight into Measurable Business Growth?</h2>
      <p class="blog-cta-desc">
        Speak directly with our senior strategy team at Burjuman Business Tower. From enterprise SEO overhauls to high-converting PPC funnels, we engineer systems that capture demand.
      </p>
      <div class="blog-cta-actions">
        <a href="{{ route('contact') }}" class="primary-button w-inline-block">
          <div class="button-dot-wrap"><div class="button-dot"></div><div class="button-bg"></div></div>
          <div class="button-text">Partner for Digital Growth</div>
        </a>
        <a href="https://wa.me/971563996631?text=Hello%20Zenerom,%20I%20am%20reviewing%20your%20blog%20insights%20and%20would%20like%20to%20discuss%20a%20strategy." target="_blank" class="secondary-button w-inline-block" style="background:#1e2127; color:#ffffff;">
          <div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div>
          <div class="button-text">WhatsApp Strategy Desk</div>
        </a>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       8. Canonical Global Footer
       ======================================================================== -->

  @push('scripts')
    <script src="{{ asset('js/blogs-data.js?v=' . time()) }}"></script>
    <script src="{{ asset('js/blog.js?v=' . time()) }}"></script>
  @endpush
</x-layouts.app>
