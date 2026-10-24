/**
 * animations.js - Scroll-triggered animations and rolling counters
 * Ultra-lightweight: observes section containers for zero layout thrashing
 */

(() => {
  let initialized = false;

  const initAnimations = () => {
    if (initialized) return;
    initialized = true;

    // Observe only the 2 sections that contain rolling counters: About & Value
    const counterSections = document.querySelectorAll('.section.about, .section.value');
    if (counterSections.length > 0 && 'IntersectionObserver' in window) {
      const sectionObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.querySelectorAll('.counter-wrapper, .about-counter-wrap, .counter-overflow, .value-single-block').forEach((el) => {
              el.classList.add('counted');
            });
            observer.unobserve(entry.target);
          }
        });
      }, { rootMargin: '100px 0px', threshold: 0.1 });

      counterSections.forEach((sec) => sectionObserver.observe(sec));
    }
  };

  ['scroll', 'pointerdown', 'touchstart'].forEach((evt) => {
    window.addEventListener(evt, initAnimations, { once: true, passive: true });
  });
})();
