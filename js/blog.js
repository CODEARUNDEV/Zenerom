/**
 * Zenerom UAE - Blog & Insights Controller (js/blog.js)
 * Manages category filtering, live debounced search, responsive pagination,
 * dynamic category count calculation, and direct navigation to dedicated single blog pages.
 */

(function () {
  'use strict';

  // Ensure dataset is loaded
  if (typeof BLOGS_DATA === 'undefined' || !Array.isArray(BLOGS_DATA)) {
    console.error('Zenerom Blog: BLOGS_DATA not found. Make sure js/blogs-data.js is loaded.');
    return;
  }

  // Base URL helper to support both local subdirectory (/zenweb/blog) and production (/blog)
  function getBlogBaseUrl() {
    return window.location.pathname.startsWith('/zenweb') ? '/zenweb/blog' : '/blog';
  }

  // State management
  const state = {
    allPosts: BLOGS_DATA,
    filteredPosts: [...BLOGS_DATA],
    activeCategory: 'all',
    searchQuery: '',
    currentPage: 1,
    perPage: 9,
    viewMode: 'paginated', // 'paginated' or 'all'
    featuredPost: BLOGS_DATA[0] || null
  };

  // DOM Elements
  const elements = {
    searchInput: document.getElementById('blogSearchInput'),
    searchClear: document.getElementById('blogSearchClear'),
    searchForm: document.getElementById('blogSearchForm'),
    filterBtns: document.querySelectorAll('.blog-filter-btn'),
    featuredWrap: document.getElementById('blogFeaturedWrap'),
    gridWrap: document.getElementById('blogGridWrap'),
    paginationWrap: document.getElementById('blogPaginationWrap'),
    resultCountText: document.getElementById('blogResultCountText'),
    viewToggleBtn: document.getElementById('blogViewToggleBtn')
  };

  /**
   * Helper: Normalize text for case-insensitive searching
   */
  function normalize(str) {
    return (str || '').toLowerCase().trim();
  }

  /**
   * Escape HTML utility
   */
  function escapeHtml(str) {
    if (!str) return '';
    return String(str)
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;')
      .replace(/'/g, '&#39;');
  }

  /**
   * Category normalization mapping
   */
  const CATEGORY_MAP = {
    'all': 'all',
    'seo': 'SEO',
    'digital-marketing': 'Digital Marketing',
    'branding': 'Branding',
    'performance-ads': 'Performance Ads',
    'web-dev': 'Web Dev',
    'social-media': 'Social Media',
    'growth-strategy': 'Growth Strategy',
    'software-dev': 'Software Dev',
    'outsourcing': 'Outsourcing'
  };

  /**
   * Filter and search logic
   */
  function applyFilterAndSearch() {
    const q = normalize(state.searchQuery);
    const targetCat = CATEGORY_MAP[state.activeCategory] || 'all';

    state.filteredPosts = state.allPosts.filter(post => {
      // Category matching
      const matchesCat = (targetCat === 'all') || (post.category === targetCat);
      if (!matchesCat) return false;

      // Query matching
      if (!q) return true;

      const titleMatch = normalize(post.title).includes(q);
      const excerptMatch = normalize(post.excerpt).includes(q);
      const authorMatch = normalize(post.author).includes(q);
      const catMatch = normalize(post.category).includes(q);

      return titleMatch || excerptMatch || authorMatch || catMatch;
    });

    state.currentPage = 1;
    render();
  }

  /**
   * Render Featured Flagship Article as direct dedicated page link
   */
  function renderFeatured() {
    if (!elements.featuredWrap) return;

    const featured = state.filteredPosts[0] || state.allPosts[0];
    if (!featured) {
      elements.featuredWrap.style.display = 'none';
      return;
    }

    const blogBaseUrl = getBlogBaseUrl();
    elements.featuredWrap.style.display = 'block';
    elements.featuredWrap.innerHTML = `
      <a href="${blogBaseUrl}/${featured.slug}" class="blog-featured-card" data-slug="${featured.slug}">
        <div class="blog-featured-media-wrap">
          <img src="${featured.image}" alt="${escapeHtml(featured.title)}" class="blog-featured-img" loading="eager" />
          <div class="blog-featured-badge">
            <span class="blog-live-dot" style="width:6px;height:6px;"></span>
            <span>Flagship Insight</span>
          </div>
        </div>
        <div class="blog-featured-content">
          <div class="blog-meta-row">
            <span class="blog-category-pill">${escapeHtml(featured.category)}</span>
            <span class="blog-time-pill">&bull; ${escapeHtml(featured.readingTime)}</span>
          </div>
          <h3 class="blog-featured-title">${escapeHtml(featured.title)}</h3>
          <p class="blog-featured-excerpt">${escapeHtml(featured.excerpt)}</p>
          <div class="blog-author-strip">
            <div class="blog-author-block">
              <img src="assets/images/Fav.png" alt="${escapeHtml(featured.author)}" class="blog-author-avatar" />
              <div>
                <div class="blog-author-name">${escapeHtml(featured.author)}</div>
                <div class="blog-author-date">${escapeHtml(featured.formattedDate)} &bull; UAE Edition</div>
              </div>
            </div>
            <div class="blog-action-pill">
              <span>Read Insight</span>
              <span>&rarr;</span>
            </div>
          </div>
        </div>
      </a>
    `;
  }

  /**
   * Render Article Cards Grid as direct dedicated page links
   */
  function renderGrid() {
    if (!elements.gridWrap) return;

    if (state.filteredPosts.length === 0) {
      elements.gridWrap.innerHTML = `
        <div class="blog-empty-state">
          <h3 class="blog-empty-title">No matching insights found</h3>
          <p class="blog-empty-desc">We couldn't find any articles matching "${escapeHtml(state.searchQuery)}". Try adjusting your keywords or category filter.</p>
          <button type="button" class="blog-filter-btn is-active" id="blogResetFilterBtn">Reset Search &amp; Filters</button>
        </div>
      `;
      const resetBtn = document.getElementById('blogResetFilterBtn');
      if (resetBtn) {
        resetBtn.addEventListener('click', () => {
          state.searchQuery = '';
          if (elements.searchInput) elements.searchInput.value = '';
          if (elements.searchClear) elements.searchClear.classList.remove('is-visible');
          state.activeCategory = 'all';
          updateActiveFilterBtn();
          applyFilterAndSearch();
        });
      }
      return;
    }

    // Determine slice based on viewMode
    let postsToDisplay = state.filteredPosts;
    if (state.viewMode === 'paginated') {
      const startIdx = (state.currentPage - 1) * state.perPage;
      const endIdx = startIdx + state.perPage;
      postsToDisplay = state.filteredPosts.slice(startIdx, endIdx);
    }

    const blogBaseUrl = getBlogBaseUrl();
    const cardsHtml = postsToDisplay.map((post) => {
      return `
        <a href="${blogBaseUrl}/${post.slug}" class="blog-card" data-slug="${post.slug}">
          <div class="blog-card-media">
            <img src="${post.image}" alt="${escapeHtml(post.title)}" class="blog-card-img" loading="lazy" />
          </div>
          <div class="blog-card-body">
            <div class="blog-card-topline">
              <span class="blog-category-pill">${escapeHtml(post.category)}</span>
              <span class="blog-time-pill">${escapeHtml(post.readingTime)}</span>
            </div>
            <h3 class="blog-card-title">${escapeHtml(post.title)}</h3>
            <p class="blog-card-excerpt">${escapeHtml(post.excerpt)}</p>
            <div class="blog-card-footer">
              <div class="blog-card-author">
                <img src="assets/images/Fav.png" alt="${escapeHtml(post.author)}" class="blog-card-author-avatar" loading="lazy" />
                <div class="blog-card-author-meta">
                  <span class="blog-card-author-name">${escapeHtml(post.author)}</span>
                  <span class="blog-card-author-date">${escapeHtml(post.formattedDate)}</span>
                </div>
              </div>
              <div class="blog-read-circle" aria-label="Read ${escapeHtml(post.title)}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </div>
            </div>
          </div>
        </a>
      `;
    }).join('');

    elements.gridWrap.innerHTML = cardsHtml;
  }

  /**
   * Render Pagination
   */
  function renderPagination() {
    if (!elements.paginationWrap) return;

    if (state.viewMode === 'all' || state.filteredPosts.length <= state.perPage) {
      elements.paginationWrap.style.display = 'none';
      return;
    }

    elements.paginationWrap.style.display = 'flex';
    const totalPages = Math.ceil(state.filteredPosts.length / state.perPage);
    const current = state.currentPage;

    let html = '';

    // Prev Button
    html += `
      <button class="blog-page-btn" data-page="${current - 1}" ${current === 1 ? 'disabled' : ''} aria-label="Previous Page">
        &larr; Prev
      </button>
    `;

    // Page Numbers logic
    const pages = [];
    for (let i = 1; i <= totalPages; i++) {
      if (i === 1 || i === totalPages || (i >= current - 1 && i <= current + 1)) {
        pages.push(i);
      } else if (pages[pages.length - 1] !== '...') {
        pages.push('...');
      }
    }

    pages.forEach(p => {
      if (p === '...') {
        html += `<span class="blog-page-dots">&hellip;</span>`;
      } else {
        html += `
          <button class="blog-page-btn ${p === current ? 'is-active' : ''}" data-page="${p}" aria-label="Page ${p}">
            ${p}
          </button>
        `;
      }
    });

    // Next Button
    html += `
      <button class="blog-page-btn" data-page="${current + 1}" ${current === totalPages ? 'disabled' : ''} aria-label="Next Page">
        Next &rarr;
      </button>
    `;

    elements.paginationWrap.innerHTML = html;

    // Attach pagination clicks
    elements.paginationWrap.querySelectorAll('.blog-page-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const pageNum = parseInt(btn.getAttribute('data-page'), 10);
        if (pageNum && pageNum >= 1 && pageNum <= totalPages && pageNum !== current) {
          state.currentPage = pageNum;
          renderGrid();
          renderPagination();
          updateResultStatus();
          // Smooth scroll up to grid section
          const targetSection = document.getElementById('blogGridSection');
          if (targetSection) {
            const headerOffset = 100;
            const elementPosition = targetSection.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
            window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
          }
        }
      });
    });
  }

  /**
   * Update Result Counter Text
   */
  function updateResultStatus() {
    if (!elements.resultCountText) return;

    const total = state.filteredPosts.length;
    if (total === 0) {
      elements.resultCountText.innerHTML = `Showing <span class="blog-result-count-bold">0</span> articles`;
      return;
    }

    if (state.viewMode === 'all') {
      elements.resultCountText.innerHTML = `Showing all <span class="blog-result-count-bold">${total}</span> articles`;
    } else {
      const start = (state.currentPage - 1) * state.perPage + 1;
      const end = Math.min(start + state.perPage - 1, total);
      elements.resultCountText.innerHTML = `Showing <span class="blog-result-count-bold">${start}–${end}</span> of <span class="blog-result-count-bold">${total}</span> articles`;
    }
  }

  /**
   * Update category pill count badges dynamically
   */
  function updateCategoryBadges() {
    const counts = { all: state.allPosts.length };
    state.allPosts.forEach(post => {
      counts[post.category] = (counts[post.category] || 0) + 1;
    });

    elements.filterBtns.forEach(btn => {
      const catKey = btn.getAttribute('data-category');
      const targetCat = CATEGORY_MAP[catKey];
      const countEl = btn.querySelector('.blog-filter-count');
      if (countEl) {
        if (catKey === 'all') {
          countEl.textContent = counts.all;
        } else if (targetCat) {
          countEl.textContent = counts[targetCat] || 0;
        }
      }
    });
  }

  /**
   * Update active filter button styling
   */
  function updateActiveFilterBtn() {
    elements.filterBtns.forEach(btn => {
      const catKey = btn.getAttribute('data-category');
      if (catKey === state.activeCategory) {
        btn.classList.add('is-active');
      } else {
        btn.classList.remove('is-active');
      }
    });
  }

  /**
   * Main Render Pipeline
   */
  function render() {
    renderFeatured();
    renderGrid();
    renderPagination();
    updateResultStatus();
  }

  /**
   * Setup Event Listeners
   */
  function setupListeners() {
    // Category pill filtering
    elements.filterBtns.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        const catKey = btn.getAttribute('data-category');
        if (catKey && catKey !== state.activeCategory) {
          state.activeCategory = catKey;
          updateActiveFilterBtn();
          applyFilterAndSearch();
        }
      });
    });

    // Debounced search input
    let searchDebounceTimer = null;
    if (elements.searchInput) {
      elements.searchInput.addEventListener('input', (e) => {
        const val = e.target.value;
        state.searchQuery = val;

        if (elements.searchClear) {
          if (val.length > 0) elements.searchClear.classList.add('is-visible');
          else elements.searchClear.classList.remove('is-visible');
        }

        clearTimeout(searchDebounceTimer);
        searchDebounceTimer = setTimeout(() => {
          applyFilterAndSearch();
        }, 180);
      });
    }

    // Search clear button
    if (elements.searchClear) {
      elements.searchClear.addEventListener('click', () => {
        state.searchQuery = '';
        if (elements.searchInput) {
          elements.searchInput.value = '';
          elements.searchInput.focus();
        }
        elements.searchClear.classList.remove('is-visible');
        applyFilterAndSearch();
      });
    }

    // Search form submit
    if (elements.searchForm) {
      elements.searchForm.addEventListener('submit', (e) => {
        e.preventDefault();
        applyFilterAndSearch();
      });
    }

    // View Mode Toggle (Paginated vs All)
    if (elements.viewToggleBtn) {
      elements.viewToggleBtn.addEventListener('click', () => {
        if (state.viewMode === 'paginated') {
          state.viewMode = 'all';
          elements.viewToggleBtn.textContent = 'Switch to Paginated View';
        } else {
          state.viewMode = 'paginated';
          elements.viewToggleBtn.textContent = 'View All 72 Articles';
        }
        renderGrid();
        renderPagination();
        updateResultStatus();
      });
    }
  }

  /**
   * Hydrate from URL query on initial page load
   */
  function hydrateFromUrl() {
    const params = new URLSearchParams(window.location.search);
    const catParam = params.get('topic') || params.get('category');
    if (catParam && CATEGORY_MAP[catParam.toLowerCase()]) {
      state.activeCategory = catParam.toLowerCase();
      updateActiveFilterBtn();
    }

    const searchParam = params.get('s') || params.get('search');
    if (searchParam) {
      state.searchQuery = searchParam;
      if (elements.searchInput) elements.searchInput.value = searchParam;
      if (elements.searchClear) elements.searchClear.classList.add('is-visible');
    }

    const pageParam = parseInt(params.get('blog_page') || params.get('page'), 10);
    if (pageParam && pageParam > 1) {
      state.currentPage = pageParam;
    }

    applyFilterAndSearch();
  }

  // Initialize
  document.addEventListener('DOMContentLoaded', () => {
    updateCategoryBadges();
    setupListeners();
    hydrateFromUrl();
  });

})();
