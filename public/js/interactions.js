/**
 * interactions.js - User interactions (Sidemenu drawer, FAQ accordion, tabs)
 * PrimeFolio Website Replica
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Sidemenu Drawer (Open / Close)
  const menuOpenBtn = document.querySelector('.menu-open-block');
  const menuCloseBtn = document.querySelector('.manu-close-block');
  const sidemenu = document.querySelector('.sidemenu');
  const navWrapper = document.querySelector('.navigation-wrapper');

  function openMenu() {
    if (!sidemenu) return;
    sidemenu.classList.add('open');
    document.body.style.overflow = 'hidden';
    if (window.lenis) window.lenis.stop();
  }

  function closeMenu() {
    if (!sidemenu) return;
    sidemenu.classList.remove('open');
    document.body.style.overflow = '';
    if (window.lenis) window.lenis.start();
  }

  if (menuOpenBtn) {
    menuOpenBtn.addEventListener('click', (e) => {
      e.preventDefault();
      openMenu();
    });
  }

  if (menuCloseBtn) {
    menuCloseBtn.addEventListener('click', (e) => {
      e.preventDefault();
      closeMenu();
    });
  }

  if (sidemenu) {
    // Close on background overlay click
    sidemenu.addEventListener('click', (e) => {
      if (e.target === sidemenu || (!navWrapper.contains(e.target) && !menuOpenBtn.contains(e.target))) {
        closeMenu();
      }
    });

    // Close on ESC key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && sidemenu.classList.contains('open')) {
        closeMenu();
      }
    });

    // Close on any menu link click
    sidemenu.querySelectorAll('.nav-link, .footer-link').forEach((link) => {
      link.addEventListener('click', () => {
        closeMenu();
      });
    });
  }

  // 2. FAQ Accordion Interaction
  const faqItems = document.querySelectorAll('.faq-single-item, .faq-single-block');

  // Initialize active/w--current state on page load
  faqItems.forEach((item) => {
    const isCurrent = item.classList.contains('active') || item.classList.contains('w--current');
    if (isCurrent) {
      item.classList.add('active');
      item.setAttribute('aria-expanded', 'true');
    } else {
      item.setAttribute('aria-expanded', 'false');
    }

    item.addEventListener('click', (e) => {
      // Allow links inside the answer to be clicked normally
      if (e.target.closest('a') && e.target.closest('.faq-answer-wrap')) {
        return;
      }
      e.preventDefault();

      const isActive = item.classList.contains('active');

      // Close other FAQ items
      faqItems.forEach((other) => {
        if (other !== item) {
          other.classList.remove('active');
          other.classList.remove('w--current');
          other.setAttribute('aria-expanded', 'false');
        }
      });

      // Toggle current item
      if (isActive) {
        item.classList.remove('active');
        item.classList.remove('w--current');
        item.setAttribute('aria-expanded', 'false');
      } else {
        item.classList.add('active');
        item.classList.add('w--current');
        item.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // 3. Capabilities Hover & Tap Accordion Interaction
  const capabilityItems = document.querySelectorAll('.capabilities-item-block');
  capabilityItems.forEach((item) => {
    // Desktop mouseenter: activate this item and deactivate others
    item.addEventListener('mouseenter', () => {
      capabilityItems.forEach((other) => {
        if (other !== item) other.classList.remove('is-active');
      });
      item.classList.add('is-active');
    });

    // Desktop mouseleave: deactivate when cursor leaves the item
    item.addEventListener('mouseleave', () => {
      item.classList.remove('is-active');
    });

    // Mobile / Touch click support: tap to toggle
    item.addEventListener('click', (e) => {
      // Don't intercept click if clicking directly on the project inquiry link/button
      if (e.target.closest('a')) return;

      const isActive = item.classList.contains('is-active');
      capabilityItems.forEach((other) => other.classList.remove('is-active'));
      if (!isActive) {
        item.classList.add('is-active');
      }
    });
  });

  // 4. Dual Text Hover Links Data Setup
  document.querySelectorAll('.nav-link, .footer-link').forEach((link) => {
    const textEls = link.querySelectorAll('.nav-link-text, .footer-link-text');
    if (textEls.length === 2) {
      // Ensure top and bottom have identical content
      if (!textEls[1].textContent.trim()) {
        textEls[1].textContent = textEls[0].textContent;
      }
    }
  });

  // 5. Review 3D Flip Card Interaction
  const reviewCardWraps = document.querySelectorAll('.review-card-wrap');
  reviewCardWraps.forEach((cardWrap) => {
    const cardBlock = cardWrap.querySelector('.review-single-block');
    if (!cardBlock) return;

    // Mobile / touch tap toggles flip
    cardWrap.addEventListener('click', (e) => {
      if (window.innerWidth <= 991) {
        cardBlock.classList.toggle('is-flipped');
      }
    });

    // Desktop hover: add class on mouseenter, remove on mouseleave
    cardWrap.addEventListener('mouseenter', () => {
      cardBlock.classList.add('is-flipped');
    });

    cardWrap.addEventListener('mouseleave', () => {
      cardBlock.classList.remove('is-flipped');
    });
  });

  // ─────────────────────────────────────────────────────────────────────────
  // 6. CTA Section — Exact Webflow IX2 Replica
  //    a-31: PAGE_START looping scale animation cycling avatar groups
  //    a-32: MOUSE_MOVE continuous parallax  (-50% to +50% X/Y, smoothing 95)
  //    a-33: MOUSE_OVER → opacity 0→1 (500ms ease)
  //    a-34: MOUSE_OUT  → opacity 1→0 (500ms ease)
  // ─────────────────────────────────────────────────────────────────────────
  const ctaSection = document.querySelector('.section.cta');
  const ctaImageBlock = document.querySelector('.cta-image-block');

  if (ctaSection && ctaImageBlock) {

    // ── a-31: Avatar group cycling animation ──────────────────────────────
    // Groups from Webflow IX2 a-31 action list (which items are at scale:1)
    const avatarGroups = [
      ['_01'],
      ['_02', '_05'],
      ['_01', '_03', '_06'],
      ['_04', '_07'],
      ['_02', '_05', '_08'],
    ];
    let cycleIndex = 0;

    function getWrapSuffix(wrap) {
      return Array.from(wrap.classList).find(c => /^_\d+$/.test(c)) || null;
    }

    const allWraps = ctaImageBlock.querySelectorAll('.cta-image-wrap');

    function applyGroup(idx) {
      const active = avatarGroups[idx];
      allWraps.forEach(wrap => {
        const sfx = getWrapSuffix(wrap);
        if (sfx && active.includes(sfx)) {
          wrap.classList.add('is-active');
        } else {
          wrap.classList.remove('is-active');
        }
      });
    }

    // Start cycling only when CTA section is in view
    let cycleInterval = null;
    let isParallaxRunning = false;

    function startCtaAnimations() {
      if (!cycleInterval) {
        applyGroup(cycleIndex);
        cycleInterval = setInterval(() => {
          cycleIndex = (cycleIndex + 1) % avatarGroups.length;
          applyGroup(cycleIndex);
        }, 500);
      }
      if (!isParallaxRunning && window.innerWidth >= 992) {
        isParallaxRunning = true;
        requestAnimationFrame(loopCtaParallax);
      }
    }

    function stopCtaAnimations() {
      if (cycleInterval) {
        clearInterval(cycleInterval);
        cycleInterval = null;
      }
      isParallaxRunning = false;
    }

    if ('IntersectionObserver' in window) {
      const ctaObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            startCtaAnimations();
          } else {
            stopCtaAnimations();
          }
        });
      }, { rootMargin: '300px 0px' });
      ctaObserver.observe(ctaSection);
    } else {
      startCtaAnimations();
    }

    // ── a-33 / a-34: Mouse hover opacity ─────────────────────────────────
    ctaSection.addEventListener('mouseenter', () => {
      if (window.innerWidth < 992) return;
      ctaImageBlock.style.opacity = '1';
    });

    ctaSection.addEventListener('mouseleave', () => {
      ctaImageBlock.style.opacity = '0';
      // Reset target to center so cluster returns smoothly
      targetX = 0;
      targetY = 0;
    });

    // ── a-32: Mouse-move parallax ─────────────────────────────────────────
    let targetX = 0;
    let targetY = 0;
    let currentX = 0;
    let currentY = 0;

    ctaSection.addEventListener('mousemove', (e) => {
      if (window.innerWidth < 992) return;
      const rect = ctaSection.getBoundingClientRect();
      const normX = (e.clientX - rect.left) / rect.width;
      const normY = (e.clientY - rect.top)  / rect.height;

      targetX = (normX - 0.5) * ctaImageBlock.offsetWidth;
      targetY = (normY - 0.5) * ctaImageBlock.offsetHeight;
    });

    // Lerp loop — smoothing 95 ≈ lerp factor 0.025 at 60fps
    function loopCtaParallax() {
      if (!isParallaxRunning) return;
      if (window.innerWidth >= 992) {
        currentX += (targetX - currentX) * 0.025;
        currentY += (targetY - currentY) * 0.025;
        ctaImageBlock.style.transform =
          `translate3d(${currentX.toFixed(2)}px, ${currentY.toFixed(2)}px, 0)`;
      } else {
        ctaImageBlock.style.transform = '';
        currentX = 0;
        currentY = 0;
        targetX  = 0;
        targetY  = 0;
      }
      requestAnimationFrame(loopCtaParallax);
    }
  }
});
