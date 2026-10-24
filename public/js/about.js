/**
 * about.js - Dedicated animations & interactions for the Zenerom About Page
 */

document.addEventListener('DOMContentLoaded', () => {
  // -------------------------------------------------------------------------
  // 1. Entrance Animations for Hero & Statement
  // -------------------------------------------------------------------------
  const heroButton = document.querySelector('.hero-button-block');
  const heroAvatars = document.querySelector('.hero-right-wrap');
  const heroVideo = document.querySelector('.hero-video-block');
  const aboutTitle = document.querySelector('.about-title');
  const newsletterForm = document.querySelector('.newsletter-form-block');
  const aboutHeroWrapper = document.querySelector('.about-hero-wrapper');
  const bungeeVideo = document.getElementById('bungee-about-video');

  if (bungeeVideo) {
    bungeeVideo.play().catch(() => {});
  }

  // Trigger entrance animations with GSAP if available, or CSS fallback
  if (window.gsap) {
    const tl = gsap.timeline({ defaults: { ease: 'power3.out', duration: 1.1 } });

    if (aboutHeroWrapper) {
      tl.fromTo(aboutHeroWrapper, { opacity: 0, y: 35, scale: 0.985 }, { opacity: 1, y: 0, scale: 1, duration: 1.2 }, 0);
    }
    if (heroButton) {
      tl.fromTo(heroButton, { opacity: 0, y: 24 }, { opacity: 1, y: 0, delay: 0.2 }, 0);
    }
    if (heroAvatars) {
      tl.fromTo(heroAvatars, { opacity: 0, y: 24 }, { opacity: 1, y: 0, delay: 0.3 }, 0);
    }
    if (heroVideo) {
      tl.fromTo(heroVideo, { opacity: 0, scale: 0.96, y: 30 }, { opacity: 1, scale: 1, y: 0, duration: 1.4, delay: 0.4 }, 0);
    }

    // Scroll reveal for about statement title
    if (aboutTitle) {
      gsap.fromTo(aboutTitle, 
        { opacity: 0, y: 40 },
        {
          opacity: 1,
          y: 0,
          duration: 1.2,
          scrollTrigger: window.ScrollTrigger ? {
            trigger: aboutTitle,
            start: 'top 85%',
          } : undefined
        }
      );
    }
  } else {
    // Fallback if GSAP is loading or unavailable
    [heroButton, heroAvatars, heroVideo, aboutTitle, newsletterForm].forEach(el => {
      if (el) {
        el.style.opacity = '1';
        el.style.transform = 'none';
      }
    });
  }

  // Ensure title video pill autoplays inside statement title
  const titleVideo = document.querySelector('.title-video video');
  if (titleVideo) {
    titleVideo.play().catch(() => {});
  }

  // -------------------------------------------------------------------------
  // 2. Interactive 3D Process Section (Fan Out + 3D Flip)
  // -------------------------------------------------------------------------
  const processSection = document.querySelector('.section.process');
  const processWrap = document.querySelector('.process-wrap');
  const processCards = document.querySelectorAll('.process-item-block');
  const processTitle = document.querySelector('.process-top-title');

  if (processTitle) processTitle.style.opacity = '1';
  if (processWrap) processWrap.style.opacity = '1';

  // Allow clicking/tapping cards to flip them directly
  processCards.forEach(card => {
    card.addEventListener('click', () => {
      const singleWrap = card.querySelector('.process-single-wrap');
      if (singleWrap) {
        singleWrap.classList.toggle('flipped');
      }
    });
  });

  // Scroll-driven animation for process cards on desktop matching Webflow IX2
  function updateProcessScroll() {
    if (!processSection) return;

    if (window.innerWidth < 992) {
      processCards.forEach(card => {
        card.style.transform = '';
        const singleWrap = card.querySelector('.process-single-wrap');
        if (singleWrap) {
          singleWrap.style.transform = '';
          singleWrap.classList.remove('flipped');
        }
      });
      return;
    }

    const rect = processSection.getBoundingClientRect();
    const windowHeight = window.innerHeight;
    const totalTravel = windowHeight + processSection.offsetHeight;

    // Webflow continuous parameter progress: 0 when element enters bottom, 1 when element leaves top
    const progress = Math.max(0, Math.min(1, (windowHeight - rect.top) / totalTravel));
    const pPercent = progress * 100;

    const targetX = [-495, -247, 0, 247, 495];
    const startRot = [8, -5, 0, 6, -6.54];

    // Fan out phase: keyframe 20% to 50%
    const fanProgress = Math.max(0, Math.min(1, (pPercent - 20) / 30));

    // Staggered sequential rotateY keyframes matching Webflow:
    // Card 1: 50% to 60%
    // Card 2: 60% to 65%
    // Card 3: 65% to 70%
    // Card 4: 70% to 75%
    // Card 5: 75% to 80%
    const rotateRanges = [
      [50, 60],
      [60, 65],
      [65, 70],
      [70, 75],
      [75, 80]
    ];

    processCards.forEach((card, index) => {
      const currentX = targetX[index] * fanProgress;
      const currentRotZ = startRot[index] * (1 - fanProgress);

      card.style.transform = `translateX(${currentX}px) rotate(${currentRotZ}deg)`;

      const singleWrap = card.querySelector('.process-single-wrap');
      if (singleWrap) {
        const [startP, endP] = rotateRanges[index];
        let rotY = 0;
        if (pPercent <= startP) {
          rotY = 0;
        } else if (pPercent >= endP) {
          rotY = 180;
        } else {
          rotY = ((pPercent - startP) / (endP - startP)) * 180;
        }

        singleWrap.style.transform = `rotateY(${rotY}deg)`;
        if (rotY >= 90) {
          singleWrap.classList.add('flipped');
        } else {
          singleWrap.classList.remove('flipped');
        }
      }
    });
  }

  // -------------------------------------------------------------------------
  // 3. Client Section (Horizontal Scroll & Card Slide)
  // -------------------------------------------------------------------------
  const clientSection = document.querySelector('.section.client');
  const clientWrap = document.querySelector('.client-wrap');
  const clientTitle = document.querySelector('.client-title-wrap');

  function updateClientScroll() {
    if (!clientSection || !clientWrap || window.innerWidth < 992) return;

    const rect = clientSection.getBoundingClientRect();
    const sectionHeight = clientSection.offsetHeight;
    const windowHeight = window.innerHeight;

    const scrollDist = -rect.top;
    const maxScroll = sectionHeight - windowHeight;
    let progress = scrollDist / maxScroll;
    progress = Math.max(0, Math.min(1, progress));

    // Fade out title as cards start scrolling across
    if (clientTitle) {
      const titleOpacity = Math.max(0, 1 - progress * 2.8);
      clientTitle.style.opacity = titleOpacity.toString();
      clientTitle.style.transform = `translateX(-50%) translateY(${progress * -30}px)`;
    }

    // Calculate max translation required to scroll all cards through
    const totalCardsWidth = clientWrap.scrollWidth;
    const maxTranslate = Math.max(0, totalCardsWidth - window.innerWidth + 120);

    const currentTranslate = progress * maxTranslate;
    clientWrap.style.transform = `translateX(-${currentTranslate}px)`;
  }

  // Hook into Lenis and Window Scroll
  if (window.lenis) {
    window.lenis.on('scroll', () => {
      updateProcessScroll();
      updateClientScroll();
    });
  } else {
    let checkCount = 0;
    const lenisCheckInterval = setInterval(() => {
      if (window.lenis) {
        clearInterval(lenisCheckInterval);
        window.lenis.on('scroll', () => {
          updateProcessScroll();
          updateClientScroll();
        });
      }
      if (++checkCount > 30) clearInterval(lenisCheckInterval);
    }, 100);
  }

  window.addEventListener('scroll', () => {
    updateProcessScroll();
    updateClientScroll();
  }, { passive: true });

  window.addEventListener('resize', () => {
    updateProcessScroll();
    updateClientScroll();
  });

  // Initial call
  updateProcessScroll();
  updateClientScroll();
  setTimeout(() => {
    updateProcessScroll();
    updateClientScroll();
  }, 250);

  // -------------------------------------------------------------------------
  // 4. Awards Interactive Hover Floating Block
  // -------------------------------------------------------------------------
  const awardItems = document.querySelectorAll('.award-single-item');
  awardItems.forEach(item => {
    const hoverBlock = item.querySelector('.award-hover-block');
    if (hoverBlock) {
      item.addEventListener('mouseenter', () => {
        hoverBlock.style.display = 'flex';
        requestAnimationFrame(() => {
          hoverBlock.style.opacity = '1';
          hoverBlock.style.visibility = 'visible';
          hoverBlock.style.pointerEvents = 'auto';
        });
      });
      item.addEventListener('mouseleave', () => {
        hoverBlock.style.opacity = '0';
        hoverBlock.style.visibility = 'hidden';
        hoverBlock.style.pointerEvents = 'none';
        setTimeout(() => {
          if (hoverBlock.style.opacity === '0') {
            hoverBlock.style.display = 'none';
          }
        }, 300);
      });
    }
  });

  // -------------------------------------------------------------------------
  // 5. Newsletter Form Submission Handling
  // -------------------------------------------------------------------------
  const formBlock = document.querySelector('.newsletter-form-block');
  const form = document.querySelector('.newsletter-form');
  const successMsg = document.querySelector('.newsletter-form-block .w-form-done');
  const errorMsg = document.querySelector('.newsletter-form-block .w-form-fail');

  if (formBlock) formBlock.style.opacity = '1';

  if (form && successMsg) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const emailInput = form.querySelector('.newsletter-input-field');
      if (emailInput && emailInput.value) {
        form.style.display = 'none';
        successMsg.style.display = 'block';
        if (errorMsg) errorMsg.style.display = 'none';
      }
    });
  }

  // -------------------------------------------------------------------------
  // 6. Our Journey Timeline (Smooth Year Navigation & Active State Sync)
  // -------------------------------------------------------------------------
  const timelineYears = document.querySelectorAll('.timeline-year');
  const timelineCards = document.querySelectorAll('.timeline-card');

  if (timelineYears.length && timelineCards.length) {
    timelineYears.forEach(yearLink => {
      yearLink.addEventListener('click', (e) => {
        e.preventDefault();
        const targetId = yearLink.getAttribute('href');
        const targetCard = document.querySelector(targetId);
        if (targetCard) {
          timelineYears.forEach(y => y.classList.remove('is-active'));
          yearLink.classList.add('is-active');

          if (window.lenis) {
            window.lenis.scrollTo(targetCard, { offset: -100 });
          } else {
            const topOffset = targetCard.getBoundingClientRect().top + window.pageYOffset - 100;
            window.scrollTo({ top: topOffset, behavior: 'smooth' });
          }
        }
      });
    });

    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const cardId = entry.target.id;
            timelineYears.forEach(y => {
              const matches = y.getAttribute('href') === `#${cardId}`;
              y.classList.toggle('is-active', matches);
            });
          }
        });
      }, {
        rootMargin: '-20% 0px -55% 0px',
        threshold: 0.1
      });

      timelineCards.forEach(card => observer.observe(card));
    }
  }
});
