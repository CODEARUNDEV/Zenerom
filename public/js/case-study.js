/* ==========================================================================
   case-study.js - Interactive Mechanics for Single Case Study Pages
   Zenerom UAE Digital Marketing & Technology Agency
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  initReadingProgressBar();
  initTableOfContents();
});

/**
 * 1. Reading Progress Bar
 */
function initReadingProgressBar() {
  const progressBar = document.getElementById('csProgressBar');
  if (!progressBar) return;

  window.addEventListener('scroll', () => {
    const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
    if (totalHeight <= 0) return;
    const progress = (window.scrollY / totalHeight) * 100;
    progressBar.style.width = Math.min(100, Math.max(0, progress)) + '%';
  }, { passive: true });
}

/**
 * 2. Table of Contents ScrollSpy & Smooth Scroll
 */
function initTableOfContents() {
  const tocLinks = document.querySelectorAll('.cs-toc-link');
  const sections = document.querySelectorAll('.cs-section');

  if (!tocLinks.length || !sections.length) return;

  // Smooth scroll
  tocLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = link.getAttribute('href');
      const targetEl = document.querySelector(targetId);
      if (targetEl) {
        targetEl.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  // ScrollSpy
  const observerOptions = {
    root: null,
    rootMargin: '-20% 0px -70% 0px',
    threshold: 0
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = '#' + entry.target.id;
        tocLinks.forEach(link => {
          if (link.getAttribute('href') === id) {
            link.classList.add('is-active');
          } else {
            link.classList.remove('is-active');
          }
        });
      }
    });
  }, observerOptions);

  sections.forEach(sec => observer.observe(sec));
}
