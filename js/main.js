/**
 * main.js - Core application initialization and setup
 * PrimeFolio Website Replica
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Initialize Lenis Smooth Scroll (Optimized for 0 initial blocking time)
  let lenis = null;
  function initLenis() {
    if (lenis) return;
    if (window.matchMedia('(pointer: coarse)').matches || window.innerWidth < 992) return;

    function startLenis() {
      if (lenis || typeof Lenis === 'undefined') return;
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

    if (typeof Lenis === 'undefined') {
      const scriptUrl = document.querySelector('script[src*="main.min.js"]')?.src.replace(/main\.min\.js.*$/, 'lenis.min.js') || '/zenweb/js/lenis.min.js';
      const s = document.createElement('script');
      s.src = scriptUrl;
      s.onload = startLenis;
      document.head.appendChild(s);
    } else {
      startLenis();
    }
  }

  ['scroll', 'pointerdown', 'mousemove', 'wheel'].forEach((evt) => {
    window.addEventListener(evt, initLenis, { once: true, passive: true });
  });

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

  // 3. Hero & Background Video Smooth Playback & Controls
  const bgVideos = document.querySelectorAll('.hero-video video, .about-bg-video video');
  bgVideos.forEach((video) => {
    video.muted = true;
    video.defaultMuted = true;
    video.playsInline = true;

    const playVideo = () => {
      const promise = video.play();
      if (promise !== undefined) {
        promise.catch(() => {
          // If browser policy blocks autoplay, play immediately on first user interaction
          const unlockAutoplay = () => {
            video.play().catch(() => {});
          };
          ['scroll', 'touchstart', 'pointerdown', 'click', 'keydown'].forEach((evt) => {
            window.addEventListener(evt, unlockAutoplay, { once: true, passive: true });
          });
        });
      }
    };

    if (video.readyState >= 2) {
      playVideo();
    } else {
      video.addEventListener('loadeddata', playVideo, { once: true });
      playVideo();
    }
  });

  const videoControlBtn = document.querySelector('[data-w-bg-video-control="true"]');
  if (videoControlBtn) {
    const controlledVideo = document.querySelector('.hero-video video') || document.querySelector('.about-bg-video video');
    if (controlledVideo) {
      const pauseSpan = videoControlBtn.querySelector('span:not([hidden])');
      const playSpan = videoControlBtn.querySelector('span[hidden]');

      const updateBtnUI = () => {
        if (controlledVideo.paused) {
          if (pauseSpan) pauseSpan.setAttribute('hidden', '');
          if (playSpan) playSpan.removeAttribute('hidden');
        } else {
          if (pauseSpan) pauseSpan.removeAttribute('hidden');
          if (playSpan) playSpan.setAttribute('hidden', '');
        }
      };

      controlledVideo.addEventListener('play', updateBtnUI);
      controlledVideo.addEventListener('pause', updateBtnUI);

      videoControlBtn.addEventListener('click', (e) => {
        e.preventDefault();
        if (controlledVideo.paused) {
          controlledVideo.play().catch(() => {});
        } else {
          controlledVideo.pause();
        }
      });
    }
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
