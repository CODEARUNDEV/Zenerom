/**
 * about.js - High-Performance interactions for the Zenerom About Page
 */
document.addEventListener('DOMContentLoaded', () => {
  // -------------------------------------------------------------------------
  // 0. About Hero Background Video Playback & Seamless Poster Transition
  // -------------------------------------------------------------------------
  const aboutVideo = document.getElementById('bungee-about-video');
  if (aboutVideo) {
    aboutVideo.muted = true;
    const playVideo = () => {
      aboutVideo.play().catch(() => {});
    };
    playVideo();
    ['click', 'touchstart', 'scroll', 'pointerdown'].forEach(e => {
      window.addEventListener(e, playVideo, { once: true, passive: true });
    });
  }

  // -------------------------------------------------------------------------
  // 1. Process Section & Client Section Scroll Animations (Desktop Only)
  // -------------------------------------------------------------------------
  const processSection = document.querySelector('.section.process');
  const processCards = document.querySelectorAll('.process-item-block');
  const clientSection = document.querySelector('.section.client');
  const clientWrap = document.querySelector('.client-wrap');
  const clientTitle = document.querySelector('.client-title-wrap');

  // Allow clicking/tapping cards to flip them directly
  processCards.forEach(card => {
    card.addEventListener('click', () => {
      const singleWrap = card.querySelector('.process-single-wrap');
      if (singleWrap) {
        singleWrap.classList.toggle('flipped');
      }
    });
  });

  const targetX = [-495, -247, 0, 247, 495];
  const startRot = [8, -5, 0, 6, -6.54];
  const rotateRanges = [
    [50, 60],
    [60, 65],
    [65, 70],
    [70, 75],
    [75, 80]
  ];

  function updateProcessScroll() {
    if (!processSection || window.innerWidth < 992) return;

    const rect = processSection.getBoundingClientRect();
    const windowHeight = window.innerHeight;
    const totalTravel = windowHeight + processSection.offsetHeight;
    if (rect.bottom < 0 || rect.top > windowHeight) return;

    const progress = Math.max(0, Math.min(1, (windowHeight - rect.top) / totalTravel));
    const pPercent = progress * 100;
    const fanProgress = Math.max(0, Math.min(1, (pPercent - 20) / 30));

    processCards.forEach((card, index) => {
      const currentX = targetX[index] * fanProgress;
      const currentRotZ = startRot[index] * (1 - fanProgress);
      card.style.transform = `translateX(${currentX}px) rotate(${currentRotZ}deg)`;

      const singleWrap = card.querySelector('.process-single-wrap');
      if (singleWrap) {
        const [startP, endP] = rotateRanges[index];
        let rotY = 0;
        if (pPercent <= startP) rotY = 0;
        else if (pPercent >= endP) rotY = 180;
        else rotY = ((pPercent - startP) / (endP - startP)) * 180;

        singleWrap.style.transform = `rotateY(${rotY}deg)`;
        if (rotY >= 90) singleWrap.classList.add('flipped');
        else singleWrap.classList.remove('flipped');
      }
    });
  }

  function updateClientScroll() {
    if (!clientSection || !clientWrap || window.innerWidth < 992) return;

    const rect = clientSection.getBoundingClientRect();
    const sectionHeight = clientSection.offsetHeight;
    const windowHeight = window.innerHeight;
    if (rect.bottom < 0 || rect.top > windowHeight) return;

    const scrollDist = -rect.top;
    const maxScroll = sectionHeight - windowHeight;
    let progress = Math.max(0, Math.min(1, scrollDist / maxScroll));

    if (clientTitle) {
      clientTitle.style.opacity = Math.max(0, 1 - progress * 2.8).toString();
      clientTitle.style.transform = `translateX(-50%) translateY(${progress * -30}px)`;
    }

    const totalCardsWidth = clientWrap.scrollWidth;
    const maxTranslate = Math.max(0, totalCardsWidth - window.innerWidth + 120);
    clientWrap.style.transform = `translateX(-${progress * maxTranslate}px)`;
  }

  let ticking = false;
  function requestTick() {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        updateProcessScroll();
        updateClientScroll();
        ticking = false;
      });
      ticking = true;
    }
  }

  if (window.innerWidth >= 992) {
    window.addEventListener('scroll', requestTick, { passive: true });
    window.addEventListener('resize', requestTick, { passive: true });
  }

  // -------------------------------------------------------------------------
  // 2. Awards Interactive Hover Floating Block
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
  // 3. Newsletter Form Submission Handling
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
  // 4. Our Journey Timeline (Smooth Year Navigation & Active State Sync)
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
