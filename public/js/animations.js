/**
 * animations.js - Scroll-triggered animations, rolling counters, marquee helpers
 * PrimeFolio Website Replica
 */

document.addEventListener('DOMContentLoaded', () => {
  const setupObservers = () => {
    // 1. Intersection Observer for Scroll Reveals (excluding above-the-fold hero)
    const revealElements = document.querySelectorAll(
      '.reveal-on-scroll, .about-hero-wrapper, .work-single-block, .about-image-wrap, .about-content-block, ' +
      '.capabilities-item-block, .value-top-title-wrap, .value-single-block, ' +
      '.pricing-wrap, .approach-top-wrap, .review-card-wrap, .founder-wrapper, ' +
      '.faq-single-item, .faq-single-block, .blog-single-block, .cta-wrapper'
    );

    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-revealed');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.12,
      rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach((el) => {
      el.classList.add('reveal-on-scroll');
      revealObserver.observe(el);
    });

    // 2. Rolling Number Counter in About and Value Sections
    const counterWrappers = document.querySelectorAll('.counter-wrapper, .about-counter-wrap, .counter-overflow');
    if (counterWrappers.length > 0) {
      const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('counted');
            const valueBlock = entry.target.closest('.value-single-block');
            if (valueBlock) valueBlock.classList.add('counted');
            const overflow = entry.target.querySelector('.counter-overflow') || entry.target;
            if (overflow) overflow.classList.add('counted');
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.25
      });

      counterWrappers.forEach((el) => counterObserver.observe(el));
    }

    // 3. Subtitle Icon Rotation on Scroll
    const subtitleIcons = document.querySelectorAll('.subtitle-icon');
    if (subtitleIcons.length > 0) {
      const iconObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('rotating');
          } else {
            entry.target.classList.remove('rotating');
          }
        });
      }, {
        threshold: 0.5
      });

      subtitleIcons.forEach((icon) => iconObserver.observe(icon));
    }
  };

  if ('requestIdleCallback' in window) {
    requestIdleCallback(setupObservers, { timeout: 800 });
  } else {
    setTimeout(setupObservers, 150);
  }

  // 4. Hero entrance animation fallback if needed
  const heroLeft = document.querySelector('.hero-left-wrap');
  const heroRight = document.querySelector('.hero-right-wrap');
  const heroVideo = document.querySelector('.hero-video-block');
  const heroButton = document.querySelector('.hero-button-block');
  const aboutHeroWrapper = document.querySelector('.about-hero-wrapper');
  const bungeeVideo = document.getElementById('bungee-about-video');

  if (heroButton) heroButton.style.opacity = '1';
  if (heroRight) heroRight.style.opacity = '1';
  if (heroVideo) heroVideo.style.opacity = '1';
  if (aboutHeroWrapper) {
    // Reveal immediately on top of page
    requestAnimationFrame(() => {
      aboutHeroWrapper.classList.add('is-revealed');
    });
  }
  if (bungeeVideo) {
    bungeeVideo.play().catch(() => {});
  }

  // 5. Work item mouse tracking / smooth interaction if on desktop
  const workCards = document.querySelectorAll('.work-single-block');
  workCards.forEach((card) => {
    const hoverBadge = card.querySelector('.work-image-hover');
    if (hoverBadge && window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        // Subtle badge tilt / movement
        const moveX = (x / rect.width - 0.5) * 20;
        const moveY = (y / rect.height - 0.5) * 20;
        hoverBadge.style.transform = `scale(1) translate(${moveX}px, ${moveY}px)`;
      });

      card.addEventListener('mouseleave', () => {
        hoverBadge.style.transform = '';
      });
    }
  });
});
