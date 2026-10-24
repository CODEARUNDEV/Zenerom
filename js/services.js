/**
 * services.js - Dedicated Interactive Features for Zenerom Services Page
 */

document.addEventListener('DOMContentLoaded', () => {
  // -------------------------------------------------------------------------
  // 1. Service Catalog Interactive Filtering
  // -------------------------------------------------------------------------
  const filterBtns = document.querySelectorAll('.catalog-tab-btn');
  const catalogCards = document.querySelectorAll('.catalog-card');

  if (filterBtns.length && catalogCards.length) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('is-active'));
        btn.classList.add('is-active');

        const filter = btn.getAttribute('data-filter');

        catalogCards.forEach(card => {
          const category = card.getAttribute('data-category');
          if (filter === 'all' || category === filter) {
            card.classList.remove('is-hidden');
            if (window.gsap) {
              gsap.fromTo(card, { opacity: 0, y: 15 }, { opacity: 1, y: 0, duration: 0.4, ease: 'power2.out' });
            } else {
              card.style.opacity = '1';
              card.style.transform = 'none';
            }
          } else {
            card.classList.add('is-hidden');
          }
        });
      });
    });
  }

  // -------------------------------------------------------------------------
  // 2. Local SEO Emirate Interactive Matrix Switcher
  // -------------------------------------------------------------------------
  const emirateData = {
    dubai: {
      title: 'Local SEO Dominance in Dubai',
      desc: 'Capture high-ticket commercial searches in the UAE’s most competitive business hub. We optimize your Google Business Profile, organic keywords, and local intent maps so you rank #1 across Downtown, Business Bay, Dubai Marina, JLT, DIFC, and Al Quoz.',
      features: [
        'Top 3 Google Maps Pack Ranking for high-intent queries',
        'Bilingual English & Arabic search keyword optimization',
        'Direct call & WhatsApp conversion tracking on local listings',
        'Authority citations across verified UAE business directories'
      ],
      districts: ['Business Bay', 'Downtown Dubai', 'Dubai Marina', 'DIFC', 'JLT', 'Deira', 'Al Quoz', 'Palm Jumeirah'],
      statNum: '1,400+',
      statLabel: 'Monthly High-Intent Enquiries'
    },
    abudhabi: {
      title: 'Local SEO Services in Abu Dhabi',
      desc: 'Establish undisputed search leadership in the capital. Designed for enterprise consultants, government vendors, oil & gas services, healthcare networks, and luxury brands targeting high-net-worth consumers and corporate decision-makers.',
      features: [
        'Capital city corporate & institutional search intent targeting',
        'Bilingual authority schema markup and corporate reputation signals',
        'Google Maps placement across Al Reem, Yas Island, and Khalifa City',
        'Targeted local landing pages with localized conversion proofs'
      ],
      districts: ['Al Reem Island', 'Yas Island', 'Corniche', 'Khalifa City', 'Al Maryah Island', 'Saadiyat', 'Mussafah'],
      statNum: '3.6x',
      statLabel: 'Increase in Qualified B2B Calls'
    },
    sharjah: {
      title: 'Local SEO Services in Sharjah',
      desc: 'Dominate manufacturing, industrial, educational, and family retail searches. We help Sharjah businesses tap into massive daily search volume across the northern commercial corridor.',
      features: [
        'Industrial area & logistics supply chain keyword domination',
        'Arabic-first search optimization for local family & trade buyers',
        'Google Business Profile multi-location verification & management',
        'Hyper-localized citations across Sharjah chamber & trade portals'
      ],
      districts: ['Industrial Area 1-18', 'Al Majaz', 'Al Nahda', 'Muwaileh', 'Al Qasimia', 'University City'],
      statNum: '85%',
      statLabel: 'Increase in Local Footfall & Calls'
    },
    rak: {
      title: 'Local SEO Services in Ras Al Khaimah',
      desc: 'Capture expanding investment, tourism, real estate, and free-zone industrial queries in RAK. Benefit from the emirate’s rapid economic expansion with early organic search supremacy.',
      features: [
        'RAKEZ Free Zone & industrial enterprise keyword targeting',
        'Hospitality, resort, and adventure tourism search capture',
        'Localized property and real estate investor SEO',
        'Targeted Google Maps pin visibility for inbound visitors'
      ],
      districts: ['Al Hamra', 'RAKEZ Free Zone', 'Marjan Island', 'Al Nakheel', 'Khuzam', 'Dhaid Road'],
      statNum: '280%',
      statLabel: 'Search Visibility Surge'
    },
    fujairah: {
      title: 'Local SEO Services in Fujairah',
      desc: 'Lead the east coast commercial market. Reach shipping, maritime logistics, bunkering, mining, and regional retail buyers who search for immediate local suppliers.',
      features: [
        'Maritime, port logistics, and supply chain search dominance',
        'Local commercial directory citation synchronization',
        'Google Map Pack prominence across Fujairah City and Port area',
        'Direct click-to-WhatsApp and call lead funnels'
      ],
      districts: ['Port of Fujairah', 'Fujairah City Centre', 'Al Faseel', 'Mirbah', 'Qidfa'],
      statNum: '99%',
      statLabel: 'Local Map Pack Accuracy'
    },
    ajman: {
      title: 'Local SEO Services in Ajman',
      desc: 'Maximize competitive reach across Ajman’s manufacturing, wholesale, automotive, and trading sectors with high-intent localized search campaigns.',
      features: [
        'Wholesale, trading, and light manufacturing keyword capture',
        'High-converting mobile click-to-call local landing pages',
        'Cross-border search targeting (Sharjah & Ajman commuter traffic)',
        'Continuous review generation and reputation management'
      ],
      districts: ['Ajman Free Zone', 'Al Jurf', 'Al Nuaimiya', 'Al Rashidiya', 'Al Rawda'],
      statNum: '4.2x',
      statLabel: 'Local Lead Velocity'
    },
    uaq: {
      title: 'Local SEO Services in Umm Al Quwain',
      desc: 'Gain a definitive first-mover advantage in UAQ. Rank at the top for emerging industrial, trade, maritime, and eco-tourism service searches.',
      features: [
        'UAQ Free Trade Zone enterprise search optimization',
        'Local artisan and industrial supplier ranking',
        'Google Business Profile setup with bilingual rich snippets',
        'High-speed mobile landing pages optimized for direct calls'
      ],
      districts: ['UAQ Free Trade Zone', 'Old Town', 'Al Salama', 'Al Raudah', 'Falaj Al Mualla'],
      statNum: '100%',
      statLabel: 'Emirate-Wide Search Coverage'
    }
  };

  const emirateBtns = document.querySelectorAll('.emirate-btn');
  const emirateTitle = document.querySelector('.emirate-card-title');
  const emirateDesc = document.querySelector('.emirate-card-desc');
  const emirateFeatures = document.querySelector('.emirate-features-list');
  const emirateDistricts = document.querySelector('.emirate-districts-wrap');
  const emirateStatNum = document.querySelector('.emirate-stat-num');
  const emirateStatLabel = document.querySelector('.emirate-stat-label');
  const emirateCard = document.querySelector('.emirate-content-card');
  const emirateCtaLabel = document.querySelector('.emirate-btn-label');

  if (emirateBtns.length && emirateTitle) {
    emirateBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        emirateBtns.forEach(b => b.classList.remove('is-active'));
        btn.classList.add('is-active');

        const key = btn.getAttribute('data-emirate');
        const data = emirateData[key];
        if (!data) return;

        if (window.gsap && emirateCard) {
          gsap.to(emirateCard, {
            opacity: 0.4,
            duration: 0.15,
            onComplete: () => {
              updateContent(data, key);
              gsap.to(emirateCard, { opacity: 1, duration: 0.35, ease: 'power2.out' });
            }
          });
        } else {
          updateContent(data, key);
        }
      });
    });

    const emirateNames = {
      dubai: 'Dubai',
      abudhabi: 'Abu Dhabi',
      sharjah: 'Sharjah',
      rak: 'Ras Al Khaimah',
      fujairah: 'Fujairah',
      ajman: 'Ajman',
      uaq: 'Umm Al Quwain'
    };

    function updateContent(data, key) {
      emirateTitle.textContent = data.title;
      emirateDesc.textContent = data.desc;

      if (emirateFeatures) {
        emirateFeatures.innerHTML = data.features.map(f => `
          <li class="emirate-feature-item">
            <img src="assets/icons/Check-Icon.svg" alt="Check" class="pillar-check-icon"/>
            <span>${f}</span>
          </li>
        `).join('');
      }

      if (emirateDistricts) {
        emirateDistricts.innerHTML = data.districts.map(d => `
          <span class="district-badge">${d}</span>
        `).join('');
      }

      if (emirateStatNum) emirateStatNum.textContent = data.statNum;
      if (emirateStatLabel) emirateStatLabel.textContent = data.statLabel;
      if (emirateCtaLabel) {
        const placeName = emirateNames[key] || 'UAE';
        emirateCtaLabel.textContent = `Dominate ${placeName} Local SEO`;
      }
    }
  }

  // -------------------------------------------------------------------------
  // 3. Service Page FAQ Accordion is handled by interactions.js
  // -------------------------------------------------------------------------

  // -------------------------------------------------------------------------
  // 4. Smooth Anchor Linking with Lenis
  // -------------------------------------------------------------------------
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId !== '#') {
        const targetEl = document.querySelector(targetId);
        if (targetEl) {
          e.preventDefault();
          if (window.lenis) {
            window.lenis.scrollTo(targetEl, { offset: -90 });
          } else {
            targetEl.scrollIntoView({ behavior: 'smooth' });
          }
        }
      }
    });
  });

  // -------------------------------------------------------------------------
  // 5. Scroll Reveal Observer for Services Elements
  // -------------------------------------------------------------------------
  const revealItems = document.querySelectorAll('.reveal-on-scroll');
  if (revealItems.length) {
    const revealObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-revealed');
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -20px 0px' });
    revealItems.forEach(el => revealObserver.observe(el));
  }
});

