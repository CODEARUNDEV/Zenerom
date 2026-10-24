/**
 * main.js - Core application initialization and setup
 * PrimeFolio Website Replica
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Initialize Lenis Smooth Scroll (Optimized for 0 initial blocking time)
  let lenis = null;
  function initLenis() {
    if (lenis || typeof Lenis === 'undefined') return;
    // Mobile & touch devices use native hardware-accelerated scrolling
    if (window.matchMedia('(pointer: coarse)').matches || window.innerWidth < 992) return;

    lenis = new Lenis({
      duration: 1.1,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      orientation: 'vertical',
      gestureOrientation: 'vertical',
      smoothWheel: true,
      wheelMultiplier: 1,
      infinite: false,
    });

    function raf(time) {
      if (lenis) {
        lenis.raf(time);
        requestAnimationFrame(raf);
      }
    }
    requestAnimationFrame(raf);
    window.lenis = lenis;
  }

  ['scroll', 'pointerdown', 'mousemove', 'wheel'].forEach((evt) => {
    window.addEventListener(evt, initLenis, { once: true, passive: true });
  });
  if ('requestIdleCallback' in window) {
    requestIdleCallback(initLenis, { timeout: 2500 });
  } else {
    setTimeout(initLenis, 2000);
  }

  // 2. Navbar Hide/Show on Scroll Direction
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    let lastScrollY = window.scrollY;
    let ticking = false;

    window.addEventListener('scroll', () => {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          const currentScrollY = window.scrollY;

          // Add blur / background shadow when scrolled past top
          if (currentScrollY > 50) {
            navbar.classList.add('nav-scrolled');
          } else {
            navbar.classList.remove('nav-scrolled');
          }

          // Hide on scroll down, show on scroll up (with a threshold)
          if (currentScrollY > lastScrollY && currentScrollY > 150) {
            navbar.classList.add('nav-hidden');
          } else if (currentScrollY < lastScrollY) {
            navbar.classList.remove('nav-hidden');
          }

          lastScrollY = currentScrollY;
          ticking = false;
        });
        ticking = true;
      }
    }, { passive: true });
  }

  // 3. Hero Video Lazy Load on User Interaction
  let heroVideoStarted = false;
  function startHeroVideo() {
    if (heroVideoStarted) return;
    heroVideoStarted = true;
    const heroVid = document.querySelector('.hero-video video');
    if (!heroVid) return;
    const source = heroVid.querySelector('source[data-src]');
    if (source && !source.src) {
      source.src = source.getAttribute('data-src');
      heroVid.load();
    }
    heroVid.play().catch(() => {});
  }

  ['scroll', 'touchstart', 'pointerdown', 'click', 'keydown'].forEach((evt) => {
    window.addEventListener(evt, startHeroVideo, { once: true, passive: true });
  });

  const videoControlBtn = document.querySelector('[data-w-bg-video-control="true"]');
  if (videoControlBtn) {
    const video = document.querySelector('.hero-video video');
    const pauseSpan = videoControlBtn.querySelector('span:not([hidden])');
    const playSpan = videoControlBtn.querySelector('span[hidden]');

    videoControlBtn.addEventListener('click', (e) => {
      e.preventDefault();
      startHeroVideo();
      if (video) {
        if (video.paused) {
          video.play();
          if (pauseSpan) pauseSpan.removeAttribute('hidden');
          if (playSpan) playSpan.setAttribute('hidden', '');
        } else {
          video.pause();
          if (pauseSpan) pauseSpan.setAttribute('hidden', '');
          if (playSpan) playSpan.removeAttribute('hidden');
        }
      }
    });
  }

  // 4. Smooth Anchor Link Navigation with Lenis
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId !== '#') {
        const targetEl = document.querySelector(targetId);
        if (targetEl) {
          e.preventDefault();
          if (window.lenis) {
            window.lenis.scrollTo(targetEl, { offset: -80 });
          } else {
            targetEl.scrollIntoView({ behavior: 'smooth' });
          }
        }
      }
    });
  });
});
