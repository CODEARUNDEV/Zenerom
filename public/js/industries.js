/**
 * industries.js - Interactive Controls for Zenerom Industries Showcase
 * Features:
 * - Dynamic Sector Filtering with Auto-Scroll Navigation
 * - Quick Anchor Jump with Lenis Integration
 * - Interactive UAE Industry Solution Finder (Dynamic Real-time Calculator)
 * - Accessible FAQ Accordion
 * - IntersectionObserver Metric Counters
 */

document.addEventListener('DOMContentLoaded', () => {
  initSectorFiltering();
  initQuickAnchorNav();
  initIndustrySolutionFinder();
  initIndustryFAQ();
  initMetricCounters();
});

/* --------------------------------------------------------------------------
   1. Sector Filtering Controller
   -------------------------------------------------------------------------- */
function initSectorFiltering() {
  const filterBtns = document.querySelectorAll('.ind-filter-btn');
  const featureBlocks = document.querySelectorAll('.industry-feature-block');
  const showcaseSections = document.querySelectorAll('.section_industries_showcase');

  if (!filterBtns.length || !featureBlocks.length) return;

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filterValue = btn.getAttribute('data-filter') || 'all';
      let firstVisibleBlock = null;

      featureBlocks.forEach(block => {
        const category = block.getAttribute('data-category');
        if (filterValue === 'all' || category === filterValue) {
          block.style.display = 'grid';
          block.style.opacity = '1';
          block.style.visibility = 'visible';
          if (!firstVisibleBlock) firstVisibleBlock = block;
        } else {
          block.style.display = 'none';
        }
      });

      // Show/hide parent sections if all child blocks are hidden
      showcaseSections.forEach(section => {
        const visibleChild = section.querySelector('.industry-feature-block[style*="display: grid"], .industry-feature-block:not([style*="display: none"])');
        if (visibleChild) {
          section.style.display = 'block';
        } else {
          section.style.display = 'none';
        }
      });

      // Smooth scroll to the first matching block if a specific filter is clicked
      if (filterValue !== 'all' && firstVisibleBlock) {
        setTimeout(() => {
          const headerOffset = 90;
          const elementPosition = firstVisibleBlock.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

          if (window.lenis) {
            window.lenis.scrollTo(offsetPosition, { duration: 1.0 });
          } else {
            window.scrollTo({
              top: offsetPosition,
              behavior: 'smooth'
            });
          }
        }, 80);
      }
    });
  });
}

/* --------------------------------------------------------------------------
   2. Quick Anchor Jump Controller
   -------------------------------------------------------------------------- */
function initQuickAnchorNav() {
  const quickLinks = document.querySelectorAll('.industry-chip-btn[href^="#"]');
  if (!quickLinks.length) return;

  quickLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      const targetId = link.getAttribute('href');
      if (!targetId || targetId === '#') return;

      const targetEl = document.querySelector(targetId);
      if (!targetEl) return;

      e.preventDefault();

      // Ensure the target block is visible in case it was filtered
      const parentBlock = targetEl.closest('.industry-feature-block') || targetEl;
      if (parentBlock) {
        parentBlock.style.display = 'grid';
        parentBlock.style.opacity = '1';
        parentBlock.style.visibility = 'visible';
        const parentSection = parentBlock.closest('.section_industries_showcase');
        if (parentSection) parentSection.style.display = 'block';
      }

      // Reset filter button to "All" if user explicitly clicked an anchor
      const allFilterBtn = document.querySelector('.ind-filter-btn[data-filter="all"]');
      if (allFilterBtn) {
        document.querySelectorAll('.ind-filter-btn').forEach(b => b.classList.remove('active'));
        allFilterBtn.classList.add('active');
        document.querySelectorAll('.industry-feature-block').forEach(b => {
          b.style.display = 'grid';
          b.style.opacity = '1';
          b.style.visibility = 'visible';
        });
        document.querySelectorAll('.section_industries_showcase').forEach(s => s.style.display = 'block');
      }

      const headerOffset = 90;
      const elementPosition = targetEl.getBoundingClientRect().top;
      const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

      if (window.lenis) {
        window.lenis.scrollTo(offsetPosition, { duration: 1.1 });
      } else {
        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }
    });
  });
}

/* --------------------------------------------------------------------------
   3. Interactive UAE Industry Solution Finder
   -------------------------------------------------------------------------- */
function initIndustrySolutionFinder() {
  const industrySelect = document.getElementById('indFinderIndustry');
  const challengeSelect = document.getElementById('indFinderChallenge');
  const scaleSelect = document.getElementById('indFinderScale');

  const resultTitle = document.getElementById('indResultTitle');
  const resultDesc = document.getElementById('indResultDesc');
  const statUpside = document.getElementById('indStatUpside');
  const statVelocity = document.getElementById('indStatVelocity');
  const statCpl = document.getElementById('indStatCpl');
  const stackTagsWrap = document.getElementById('indStackTags');

  if (!industrySelect || !challengeSelect || !scaleSelect || !resultTitle) return;

  const solutionsDatabase = {
    'real-estate': {
      title: 'Off-Plan Hyper-Targeted Meta & Google Search Acquisition Funnel',
      desc: 'Engineered for UAE developers and prime brokers. Deploys native bilingual Arabic/English Instant Forms synced directly to Zoho CRM, paired with Google Search ads capturing high-intent HNWI buyers in Dubai and GCC.',
      upside: '+140%',
      velocity: '10 Days',
      cpl: '-42%',
      stack: ['Meta Ads API', 'Google PMax', 'WhatsApp Cloud API', 'Zoho CRM Sync', 'Arabic Landing Pages']
    },
    'ecommerce': {
      title: 'Sub-Second Headless Commerce & Multi-Channel Retention Engine',
      desc: 'Built for luxury retail & D2C brands. Replaces sluggish templates with Next.js headless storefronts, sub-1s TTFB, Tabby/Tamara integration, and automated WhatsApp cart recovery flows.',
      upside: '+185%',
      velocity: '14 Days',
      cpl: '-35%',
      stack: ['Next.js Headless', 'Shopify Storefront API', 'WhatsApp Bot', 'Tabby / Tamara', 'Klaviyo CRM']
    },
    'healthcare': {
      title: 'MOHAP/DHA-Compliant Medical SEO & Local 3-Pack Booking Funnel',
      desc: 'Formulated for private hospitals, aesthetic clinics, and dental centers in Dubai & Abu Dhabi. Captures high-intent local searchers, builds doctor authority, and automates patient WhatsApp bookings.',
      upside: '+115%',
      velocity: '12 Days',
      cpl: '-48%',
      stack: ['Google Maps 3-Pack', 'MOHAP Compliant SEO', 'WhatsApp Booking Bot', 'Doctor Profiles', 'CallRail Tracking']
    },
    'hospitality': {
      title: 'Direct Reservation Engine & Experiential F&B Local Footfall Engine',
      desc: 'Designed for boutique resorts, luxury hotels, and premier Dubai restaurants. Cuts OTA commissions by driving direct table and room reservations via hyper-local Google Maps and experiential Reels.',
      upside: '+95%',
      velocity: '8 Days',
      cpl: '-28%',
      stack: ['Direct Booking Engine', 'Local Maps SEO', 'Meta Reels Ads', 'SevenRooms Sync', 'TripAdvisor API']
    },
    'industrial': {
      title: 'Enterprise B2B Inbound RFQ Engine & Logistics Authority Architecture',
      desc: 'Tailored for JAFZA, DAFZA, and Kizad manufacturers, freight forwarders, and equipment suppliers. Connects technical search queries with high-converting multi-step RFQ quotation forms.',
      upside: '+130%',
      velocity: '15 Days',
      cpl: '-52%',
      stack: ['Enterprise B2B SEO', 'LinkedIn ABM', 'RFQ Quote Builder', 'ERP / CRM Sync', 'Technical Whitepapers']
    },
    'education': {
      title: 'Multi-Campus Admissions Pipeline & Parent Engagement Automation',
      desc: 'Engineered for sports academies, K-12 private schools, and professional executive training. Captures parent open-day inquiries and automates registration workflows via WhatsApp and email.',
      upside: '+160%',
      velocity: '10 Days',
      cpl: '-38%',
      stack: ['Google Search Ads', 'Interactive Campus Tour', 'WhatsApp Open Day Bot', 'HubSpot / Zoho', 'Meta Retargeting']
    },
    'corporate': {
      title: 'Dubai Business Setup & Corporate Structuring High-Intent Lead Engine',
      desc: 'Architected for corporate service providers, mainland/free zone consultants, and legal firms. Deploys multi-tier jurisdiction calculators that filter genuine investors from tire-kickers.',
      upside: '+175%',
      velocity: '7 Days',
      cpl: '-46%',
      stack: ['Jurisdiction Calculator', 'Zoho CRM Round-Robin', 'Google Search Ads', 'Corporate SEO', 'WhatsApp Direct']
    },
    'automotive': {
      title: 'Luxury Exotic Showroom Concierge & VIP Test-Drive Lead Funnel',
      desc: 'Bespoke funnel for luxury automotive dealers and private yacht charters. Connects ultra-high-net-worth buyers with one-click WhatsApp VIP showroom concierge bookings.',
      upside: '+120%',
      velocity: '9 Days',
      cpl: '-32%',
      stack: ['VIP Test Drive Form', 'HNWI Meta Targeting', 'WhatsApp Concierge', 'Dynamic Inventory API', 'YouTube Video Ads']
    }
  };

  function updateSolution() {
    const selectedInd = industrySelect.value || 'real-estate';
    const data = solutionsDatabase[selectedInd] || solutionsDatabase['real-estate'];

    resultTitle.textContent = data.title;
    resultDesc.textContent = data.desc;
    statUpside.textContent = data.upside;
    statVelocity.textContent = data.velocity;
    statCpl.textContent = data.cpl;

    // Render stack tags
    stackTagsWrap.innerHTML = '';
    data.stack.forEach(tech => {
      const tag = document.createElement('span');
      tag.className = 'ind-stack-tag';
      tag.textContent = tech;
      stackTagsWrap.appendChild(tag);
    });
  }

  industrySelect.addEventListener('change', updateSolution);
  challengeSelect.addEventListener('change', updateSolution);
  scaleSelect.addEventListener('change', updateSolution);

  // Initial trigger
  updateSolution();
}

/* --------------------------------------------------------------------------
   4. Industry FAQ Accordion
   -------------------------------------------------------------------------- */
function initIndustryFAQ() {
  const faqItems = document.querySelectorAll('.ind-faq-item');
  if (!faqItems.length) return;

  faqItems.forEach(item => {
    const question = item.querySelector('.ind-faq-question');
    if (!question) return;

    question.addEventListener('click', () => {
      const isActive = item.classList.contains('active');

      // Close all other items
      faqItems.forEach(otherItem => {
        if (otherItem !== item) otherItem.classList.remove('active');
      });

      // Toggle current item
      if (isActive) {
        item.classList.remove('active');
      } else {
        item.classList.add('active');
      }
    });

    // Keyboard accessibility
    question.setAttribute('tabindex', '0');
    question.setAttribute('role', 'button');
    question.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        question.click();
      }
    });
  });
}

/* --------------------------------------------------------------------------
   5. IntersectionObserver Metric Counters
   -------------------------------------------------------------------------- */
function initMetricCounters() {
  const counters = document.querySelectorAll('.industries-metric-val[data-target]');
  if (!counters.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseFloat(el.getAttribute('data-target'));
        const prefix = el.getAttribute('data-prefix') || '';
        const suffix = el.getAttribute('data-suffix') || '';
        const duration = 1600;
        const startTime = performance.now();

        function updateNumber(now) {
          const elapsed = now - startTime;
          const progress = Math.min(elapsed / duration, 1);
          // Ease-out cubic curve
          const easeOut = 1 - Math.pow(1 - progress, 3);
          const current = (target * easeOut).toFixed(target % 1 === 0 ? 0 : 1);

          el.textContent = `${prefix}${current}${suffix}`;

          if (progress < 1) {
            requestAnimationFrame(updateNumber);
          } else {
            el.textContent = `${prefix}${target}${suffix}`;
          }
        }

        requestAnimationFrame(updateNumber);
        observer.unobserve(el);
      }
    });
  }, { threshold: 0.25 });

  counters.forEach(counter => observer.observe(counter));
}
