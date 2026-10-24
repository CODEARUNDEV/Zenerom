<x-layouts.app>
  <x-slot:title>{{ $post->meta_title ?? ($post->title . ' | Zenerom Dubai') }}</x-slot:title>
  <x-slot:description>{{ $post->meta_description ?? Str::limit(strip_tags($post->excerpt), 160) }}</x-slot:description>
  <x-slot:canonical>{{ $post->canonical_url ?? route('blog.show', $post->slug) }}</x-slot:canonical>
  <x-slot:ogImage>{{ asset($post->image) }}</x-slot:ogImage>
  <x-slot:ogType>article</x-slot:ogType>

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css?v=' . time()) }}"/>
    <link rel="stylesheet" href="{{ asset('css/blog-single.css?v=' . time()) }}"/>
  @endpush

  @push('schema')
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "BlogPosting",
      "headline": "{{ addslashes($post->title) }}",
      "description": "{{ addslashes($post->meta_description ?? $post->excerpt) }}",
      "image": "{{ asset($post->image) }}",
      "author": {
        "@@type": "Person",
        "name": "{{ addslashes($post->author) }}"
      },
      "publisher": {
        "@@type": "Organization",
        "name": "Zenerom UAE",
        "logo": {
          "@@type": "ImageObject",
          "url": "{{ asset('assets/images/zenerom-logo.png') }}"
        }
      },
      "datePublished": "{{ $post->published_at ? $post->published_at->toIso8601String() : '' }}",
      "mainEntityOfPage": {
        "@@type": "WebPage",
        "@@id": "{{ $post->canonical_url ?? route('blog.show', $post->slug) }}"
      }
    }
    </script>
  @endpush

  <!-- Reading Progress Bar -->
  <div class="blog-reading-progress-bar" id="blogReadingProgress" aria-hidden="true"></div>

  <!-- ========================================================================
       Article Hero Section
       ======================================================================== -->
  <header class="blog-single-hero">
    <div class="blog-single-container">
      
      <!-- Breadcrumbs -->
      <nav class="blog-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">Home</a>
        <span class="blog-breadcrumb-sep">/</span>
        <a href="{{ route('blog.index') }}">Blog</a>
        <span class="blog-breadcrumb-sep">/</span>
        <span id="singleBlogBreadcrumb" class="blog-breadcrumb-current">{{ $post->title }}</span>
      </nav>

      <div class="blog-single-header-meta">
        <span id="singleBlogCategory" class="blog-category-pill">{{ $post->category }}</span>
        <span id="singleBlogReadingTime" class="blog-time-pill">&bull; {{ $post->reading_time ?? '5 min read' }}</span>
        <span id="singleBlogDate" class="blog-time-pill">&bull; {{ $post->published_at ? $post->published_at->format('M d, Y') : 'Sep 17, 2026' }}</span>
      </div>

      <h1 id="singleBlogHeading" class="blog-single-title">
        {{ $post->title }}
      </h1>

      <div class="blog-single-author-bar">
        <div class="blog-single-author-meta">
          <img src="{{ asset('assets/images/Fav.png') }}" alt="{{ $post->author }}" id="singleBlogAuthorImg" class="blog-single-author-img" />
          <div>
            <div id="singleBlogAuthorName" class="blog-single-author-title">{{ $post->author }}</div>
            <div class="blog-single-author-sub">Senior Growth &amp; Technology Strategist &bull; Dubai</div>
          </div>
        </div>

        <div class="blog-modal-share-row">
          <span class="blog-modal-share-label">Share:</span>
          <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . ($post->canonical_url ?? url()->current())) }}" target="_blank" class="blog-share-icon-btn" id="singleBlogShareWa" aria-label="Share on WhatsApp" rel="noopener noreferrer">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.131-.532-1.839-.762-3.033-2.639-3.125-2.763-.09-.125-.747-.992-.747-1.892 0-.9.471-1.344.638-1.528.167-.184.366-.23.488-.23.122 0 .245.002.352.008.113.006.264-.043.413.315.153.366.522 1.272.568 1.364.045.092.076.2.015.323-.061.122-.092.198-.183.305-.091.107-.191.24-.273.323-.092.091-.188.19-.081.373.107.184.475.784 1.02 1.269.702.624 1.293.818 1.477.909.184.092.29.077.397-.046.107-.122.458-.535.58-.718.122-.184.244-.153.412-.092.168.061 1.069.504 1.252.595.183.092.305.138.351.214.046.076.046.443-.098.848z"/></svg>
          </a>
          <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($post->canonical_url ?? url()->current()) }}" target="_blank" class="blog-share-icon-btn" id="singleBlogShareIn" aria-label="Share on LinkedIn" rel="noopener noreferrer">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
          </a>
          <button type="button" class="blog-share-icon-btn" id="singleBlogCopyBtn" aria-label="Copy Article Link" title="Copy Link">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
              <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
            </svg>
          </button>
        </div>
      </div>

      <div class="blog-single-featured-img-wrap">
        <img id="singleBlogFeaturedImg" src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="blog-single-featured-img" />
      </div>

    </div>
  </header>

  <!-- ========================================================================
       Main Body & TOC Layout
       ======================================================================== -->
  <main class="blog-single-body-layout blog-single-container">
    
    <!-- Sidebar: Table of Contents & Quick Consultation -->
    <aside class="blog-single-sidebar">
      <div class="blog-toc-card">
        <div class="blog-toc-title">&bull; TABLE OF CONTENTS</div>
        <ul id="singleBlogTocList" class="blog-toc-list">
          <!-- Dynamic TOC items populated by buildTableOfContents -->
        </ul>
      </div>

      <div class="blog-sidebar-cta">
        <h4>Need Expert Execution?</h4>
        <p>Turn these insights into a high-performing digital engine for your UAE business.</p>
        <a id="singleBlogSideWa" href="https://wa.me/971563996631?text={{ urlencode('Hello Zenerom, I was reading your insight \"' . $post->title . '\" and would like to consult on our business strategy.') }}" target="_blank" class="blog-sidebar-wa-btn">
          Chat With Strategist &rarr;
        </a>
      </div>
    </aside>

    <!-- Main Content Area -->
    <article class="blog-article-content" id="singleBlogContent">
      @if(!empty($post->content))
        {!! $post->content !!}
      @else
        <p style="font-size:1.2rem; line-height:1.8; color:#334155;">{{ $post->excerpt }}</p>
        <p style="margin-top:1.5rem; color:#64748b;">
          This executive analysis was formulated by Zenerom's Dubai growth team. For comprehensive architectural consultation or to review your current funnel performance, reach out directly to our strategy squad at Burjuman Business Tower.
        </p>
      @endif
    </article>

  </main>

  <!-- ========================================================================
       Related Articles Section
       ======================================================================== -->
  <section class="blog-related-section">
    <div class="blog-single-container">
      <div class="blog-section-header">
        <div>
          <div class="blog-section-tag">&bull; FURTHER READING</div>
          <h2 class="blog-section-title">Related UAE Insights</h2>
        </div>
        <a href="{{ route('blog.index') }}" class="blog-view-toggle">Explore All 72 Articles &rarr;</a>
      </div>
      <div class="blog-grid" id="singleBlogRelatedGrid">
        @forelse($relatedPosts as $rel)
          <a href="{{ route('blog.show', $rel->slug) }}" class="blog-card">
            <div class="blog-card-media">
              <img src="{{ asset($rel->image) }}" alt="{{ $rel->title }}" class="blog-card-img" loading="lazy" />
            </div>
            <div class="blog-card-body">
              <div class="blog-card-topline">
                <span class="blog-category-pill">{{ $rel->category }}</span>
                <span class="blog-time-pill">{{ $rel->reading_time ?? '5 min read' }}</span>
              </div>
              <h3 class="blog-card-title">{{ $rel->title }}</h3>
              <p class="blog-card-excerpt">{{ Str::limit($rel->excerpt, 120) }}</p>
              <div class="blog-card-footer">
                <div class="blog-card-author">
                  <img src="{{ asset('assets/images/Fav.png') }}" alt="{{ $rel->author }}" class="blog-card-author-avatar" loading="lazy" />
                  <div class="blog-card-author-meta">
                    <span class="blog-card-author-name">{{ $rel->author }}</span>
                    <span class="blog-card-author-date">{{ $rel->published_at ? $rel->published_at->format('M d, Y') : '' }}</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        @empty
          <!-- Fallback if none in same category -->
        @endforelse
      </div>
    </div>
  </section>

  <!-- ========================================================================
       High-Impact Conversion Banner
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
        <a href="https://wa.me/971563996631?text={{ urlencode('Hello Zenerom, I am reviewing your blog insights on ' . $post->title . ' and would like to discuss a strategy.') }}" target="_blank" class="secondary-button w-inline-block" style="background:#1e2127; color:#ffffff;">
          <div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div>
          <div class="button-text">WhatsApp Strategy Desk</div>
        </a>
      </div>
    </div>
  </section>

  @push('scripts')
    <script src="{{ asset('js/blog-single.js?v=' . time()) }}"></script>
  @endpush
</x-layouts.app>
