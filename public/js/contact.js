/**
 * contact.js - Interactive & Animated Features for Zenerom Contact Page
 * Implements real-time global clocks, dynamic project scope builder,
 * strategist booking slot picker, worldwide hub switcher, and interactive FAQ.
 */

document.addEventListener('DOMContentLoaded', () => {

  // ---------------------------------------------------------------------------
  // 1. Real-Time Global World Clocks & UAE Office Status
  // ---------------------------------------------------------------------------
  const timeZones = {
    dubai: { zone: 'Asia/Dubai', label: 'GST (UTC+4)', openHour: 9, closeHour: 18, workDays: [1, 2, 3, 4, 5] },
    edinburgh: { zone: 'Europe/London', label: 'GMT/BST', openHour: 9, closeHour: 17, workDays: [1, 2, 3, 4, 5] },
    kochi: { zone: 'Asia/Kolkata', label: 'IST (UTC+5:30)', openHour: 9, closeHour: 18, workDays: [1, 2, 3, 4, 5] },
    sydney: { zone: 'Australia/Sydney', label: 'AEST (UTC+10)', openHour: 9, closeHour: 17, workDays: [1, 2, 3, 4, 5] }
  };

  function updateClocks() {
    const now = new Date();

    // 1. Dubai Live Clock & Status in Hero Ribbon
    try {
      const dubaiFormatter = new Intl.DateTimeFormat('en-US', {
        timeZone: 'Asia/Dubai',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: true
      });
      const dubaiTimeStr = dubaiFormatter.format(now);
      const heroClockEl = document.getElementById('heroDubaiClock');
      if (heroClockEl) {
        heroClockEl.textContent = `${dubaiTimeStr} GST`;
      }

      // Check if Dubai office is currently open
      const dubaiHourFormatter = new Intl.DateTimeFormat('en-US', { timeZone: 'Asia/Dubai', hour: 'numeric', hour12: false });
      const dubaiDayFormatter = new Intl.DateTimeFormat('en-US', { timeZone: 'Asia/Dubai', weekday: 'short' });
      const dubaiHour = parseInt(dubaiHourFormatter.format(now), 10);
      const dubaiDay = dubaiDayFormatter.format(now);
      const isWeekday = !['Sat', 'Sun'].includes(dubaiDay);

      const statusTextEl = document.getElementById('heroOfficeStatusText');
      const beaconEl = document.getElementById('heroOfficeBeacon');

      if (statusTextEl && beaconEl) {
        if (isWeekday && dubaiHour >= 9 && dubaiHour < 18) {
          statusTextEl.textContent = 'Office Open Now — Senior Strategists Active at Burjuman Tower';
          statusTextEl.style.color = '#15803d';
          beaconEl.style.backgroundColor = '#22c55e';
        } else {
          statusTextEl.textContent = 'After-Hours Priority Desk Active — Direct Responses Guaranteed < 2 Hrs';
          statusTextEl.style.color = '#f26934';
          beaconEl.style.backgroundColor = '#f26934';
        }
      }
    } catch (e) {
      console.error('Time formatting error:', e);
    }

    // 2. Active Hub Clock
    const activeHubClockEl = document.getElementById('hubLiveClock');
    const activeTab = document.querySelector('.hub-tab-btn.is-active');
    if (activeHubClockEl && activeTab) {
      const hubKey = activeTab.getAttribute('data-hub') || 'dubai';
      const tzConfig = timeZones[hubKey];
      if (tzConfig) {
        try {
          const formatter = new Intl.DateTimeFormat('en-US', {
            timeZone: tzConfig.zone,
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
          });
          activeHubClockEl.textContent = `${formatter.format(now)} ${tzConfig.label}`;
        } catch (err) {
          // fallback
        }
      }
    }
  }

  updateClocks();
  setInterval(updateClocks, 1000);

  // ---------------------------------------------------------------------------
  // 2. One-Click Copy-to-Clipboard with Feedback Tooltip
  // ---------------------------------------------------------------------------
  document.querySelectorAll('[data-copy-target]').forEach(trigger => {
    trigger.addEventListener('click', (e) => {
      // If clicking inside a direct link, allow click or copy
      const copyVal = trigger.getAttribute('data-copy-target');
      if (!copyVal) return;

      navigator.clipboard.writeText(copyVal).then(() => {
        const feedback = trigger.querySelector('.copy-feedback');
        if (feedback) {
          feedback.classList.add('is-visible');
          setTimeout(() => {
            feedback.classList.remove('is-visible');
          }, 2000);
        }
      }).catch(err => {
        console.warn('Clipboard write failed:', err);
      });
    });
  });

  // ---------------------------------------------------------------------------
  // 3. Dynamic Interactive Project Scope & Inquiry Builder
  // ---------------------------------------------------------------------------
  const state = {
    selectedServices: ['SEO & Search Marketing', 'Custom Web & E-Commerce Engineering'],
    budgetTier: 'AED 15,000 – 35,000',
    budgetTierName: 'Scale & Accelerate',
    timeline: 'Within 1 Month'
  };

  const serviceToggles = document.querySelectorAll('.service-chip-toggle');
  const budgetCards = document.querySelectorAll('.budget-tier-card');
  const timelinePills = document.querySelectorAll('.timeline-pill');

  const scopeServicesContainer = document.getElementById('scopeSelectedServicesList');
  const scopeServicesCount = document.getElementById('scopeSelectedCount');
  const scopePodName = document.getElementById('scopePodName');
  const scopePodDesc = document.getElementById('scopePodDesc');
  const scopeDeliverablesList = document.getElementById('scopeDeliverables');
  const dynamicWhatsappBtn = document.getElementById('dynamicWhatsappBtn');

  function updateScopeSnapshot() {
    // 1. Update tags & count
    if (scopeServicesContainer) {
      scopeServicesContainer.innerHTML = '';
      if (state.selectedServices.length === 0) {
        scopeServicesContainer.innerHTML = '<span class="scope-tag-item" style="opacity:0.6;">Select services on the left...</span>';
      } else {
        state.selectedServices.forEach(srv => {
          const tag = document.createElement('span');
          tag.className = 'scope-tag-item';
          tag.textContent = srv;
          scopeServicesContainer.appendChild(tag);
        });
      }
    }

    if (scopeServicesCount) {
      scopeServicesCount.textContent = `${state.selectedServices.length} Selected`;
    }

    // 2. Calculate Pod Recommendation & Deliverables
    let podTitle = 'Custom Growth Pod';
    let podDescription = 'Balanced multidisciplinary team tailored to your specific expansion targets.';
    const deliverables = [];

    const hasSEO = state.selectedServices.some(s => s.includes('SEO'));
    const hasPPC = state.selectedServices.some(s => s.includes('Google Ads') || s.includes('Social Media'));
    const hasTech = state.selectedServices.some(s => s.includes('Web') || s.includes('App') || s.includes('IT Squad'));
    const hasCRM = state.selectedServices.some(s => s.includes('CRM'));

    if (hasSEO && hasPPC && hasTech) {
      podTitle = 'Unified Omnichannel Dominance Squad';
      podDescription = 'Dedicated full-stack growth team: Senior Technical SEO Lead, Performance Media Buyer, and Full-Stack Web Engineers.';
      deliverables.push('Cross-channel ROAS & conversion tracking audit');
      deliverables.push('Bilingual UAE search architecture & landing pages');
      deliverables.push('Sub-second TTFB infrastructure optimization');
      deliverables.push('Bi-weekly sprint reviews & WhatsApp direct SLA');
    } else if (hasTech) {
      podTitle = 'Enterprise Engineering Pod';
      podDescription = 'Dedicated software architects, front-end engineers, and QA specialists aligned with UAE business hours.';
      deliverables.push('High-performance headless architecture');
      deliverables.push('UAE Payment gateways (Stripe, Network Intl, Tabby)');
      deliverables.push('Enterprise CRM & API integrations');
      deliverables.push('100% intellectual property & code ownership');
    } else if (hasPPC) {
      podTitle = 'Performance Acquisition Pod';
      podDescription = 'Senior PPC strategist, copywriter, and creative designer focused strictly on qualified CAC & pipeline revenue.';
      deliverables.push('Multi-touch attribution & CRM lead pipeline sync');
      deliverables.push('High-converting landing page A/B test variations');
      deliverables.push('Real-time Google Looker Studio client dashboard');
    } else {
      podTitle = 'Organic Authority Pod';
      podDescription = 'Senior Technical SEO strategist and Arabic/English content specialist targeting competitive Google positions.';
      deliverables.push('Top-3 Google Maps 3-Pack optimization across UAE');
      deliverables.push('Deep technical Core Web Vitals & schema engineering');
      deliverables.push('Monthly high-authority local and regional citations');
    }

    if (scopePodName) scopePodName.textContent = podTitle;
    if (scopePodDesc) scopePodDesc.textContent = podDescription;

    if (scopeDeliverablesList) {
      scopeDeliverablesList.innerHTML = '';
      deliverables.forEach(deliv => {
        const li = document.createElement('li');
        li.className = 'scope-deliverable-item';
        li.innerHTML = `
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12"></polyline>
          </svg>
          <span>${deliv}</span>
        `;
        scopeDeliverablesList.appendChild(li);
      });
    }

    // 3. Update WhatsApp direct button with prefilled message
    if (dynamicWhatsappBtn) {
      const msg = encodeURIComponent(
        `Hello Zenerom UAE Team! I am exploring a project scope:\n\n` +
        `• Services: ${state.selectedServices.join(', ') || 'Custom Solution'}\n` +
        `• Budget Tier: ${state.budgetTier} (${state.budgetTierName})\n` +
        `• Timeline: ${state.timeline}\n\n` +
        `Could we discuss strategy and next steps with a senior consultant?`
      );
      dynamicWhatsappBtn.href = `https://wa.me/971563996631?text=${msg}`;
    }
  }

  // Service Chip Toggles
  serviceToggles.forEach(chip => {
    chip.addEventListener('click', () => {
      const srvName = chip.getAttribute('data-service');
      if (chip.classList.contains('is-active')) {
        chip.classList.remove('is-active');
        state.selectedServices = state.selectedServices.filter(s => s !== srvName);
      } else {
        chip.classList.add('is-active');
        if (!state.selectedServices.includes(srvName)) {
          state.selectedServices.push(srvName);
        }
      }
      updateScopeSnapshot();
    });
  });

  // Budget Tier Cards
  budgetCards.forEach(card => {
    card.addEventListener('click', () => {
      budgetCards.forEach(c => c.classList.remove('is-active'));
      card.classList.add('is-active');
      state.budgetTier = card.getAttribute('data-amount') || '';
      state.budgetTierName = card.getAttribute('data-name') || '';
      updateScopeSnapshot();
    });
  });

  // Timeline Pills
  timelinePills.forEach(pill => {
    pill.addEventListener('click', () => {
      timelinePills.forEach(p => p.classList.remove('is-active'));
      pill.classList.add('is-active');
      state.timeline = pill.getAttribute('data-timeline') || '';
      updateScopeSnapshot();
    });
  });

  // Initial Scope calculation
  updateScopeSnapshot();

  // ---------------------------------------------------------------------------
  // 4. Form Submission & Animated Success Card
  // ---------------------------------------------------------------------------
  const inquiryForm = document.getElementById('projectInquiryForm');
  const inquiryCard = document.querySelector('.inquiry-form-card');
  const successCard = document.getElementById('inquirySuccessCard');
  const submitBtn = document.getElementById('inquirySubmitBtn');

  if (inquiryForm) {
    inquiryForm.addEventListener('submit', (e) => {
      e.preventDefault();

      if (!inquiryForm.checkValidity()) {
        inquiryForm.reportValidity();
        return;
      }

      // Show button loading state
      if (submitBtn) {
        submitBtn.classList.add('is-loading');
        submitBtn.disabled = true;
      }

      // Simulate rapid processing
      setTimeout(() => {
        const clientName = document.getElementById('formClientName')?.value || 'Valued Partner';
        const clientEmail = document.getElementById('formClientEmail')?.value || 'your email';

        // Update success card details
        const successClientName = document.getElementById('successClientName');
        const successRefCode = document.getElementById('successRefCode');
        if (successClientName) successClientName.textContent = clientName;

        // Generate unique reference code
        const refId = 'ZEN-' + Math.floor(1000 + Math.random() * 9000);
        if (successRefCode) successRefCode.textContent = refId;

        // Hide form and reveal success card with GSAP or CSS
        if (inquiryCard && successCard) {
          if (window.gsap) {
            gsap.to(inquiryCard, {
              opacity: 0,
              y: -10,
              duration: 0.3,
              onComplete: () => {
                inquiryCard.style.display = 'none';
                successCard.style.display = 'block';
                gsap.fromTo(successCard, { opacity: 0, scale: 0.96 }, { opacity: 1, scale: 1, duration: 0.4, ease: 'power2.out' });
              }
            });
          } else {
            inquiryCard.style.display = 'none';
            successCard.style.display = 'block';
          }

          // Scroll smoothly to success message
          if (window.lenis) {
            window.lenis.scrollTo(successCard, { offset: -100 });
          } else {
            successCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
        }
      }, 700);
    });
  }

  // ---------------------------------------------------------------------------
  // 5. Senior Strategist Booking Slot Picker (Jithin George)
  // ---------------------------------------------------------------------------
  const dayChips = document.querySelectorAll('.day-chip');
  const slotChips = document.querySelectorAll('.slot-chip');
  const slotSelectedDisplay = document.getElementById('selectedSlotDisplay');
  const bookSlotBtn = document.getElementById('bookSlotBtn');

  let selectedDay = 'Mon, Oct 19';
  let selectedTime = '11:30 AM';

  // Generate real upcoming weekdays
  function initBookingDays() {
    const daysContainer = document.querySelector('.days-chips-row');
    if (!daysContainer) return;

    daysContainer.innerHTML = '';
    const now = new Date();
    let count = 0;
    let offset = 1;

    while (count < 5) {
      const d = new Date(now);
      d.setDate(now.getDate() + offset);
      const dayOfWeek = d.getDay();
      // Skip Saturday (6) and Sunday (0)
      if (dayOfWeek !== 0 && dayOfWeek !== 6) {
        const dayName = d.toLocaleDateString('en-US', { weekday: 'short' });
        const monthName = d.toLocaleDateString('en-US', { month: 'short' });
        const dateNum = d.getDate();

        const chip = document.createElement('div');
        chip.className = `day-chip ${count === 0 ? 'is-active' : ''}`;
        chip.setAttribute('data-day-str', `${dayName}, ${monthName} ${dateNum}`);
        chip.innerHTML = `
          <div class="day-name">${dayName}</div>
          <div class="day-date">${dateNum}</div>
        `;

        chip.addEventListener('click', () => {
          document.querySelectorAll('.day-chip').forEach(c => c.classList.remove('is-active'));
          chip.classList.add('is-active');
          selectedDay = chip.getAttribute('data-day-str');
          updateBookingSlotDisplay();
        });

        daysContainer.appendChild(chip);

        if (count === 0) {
          selectedDay = `${dayName}, ${monthName} ${dateNum}`;
        }
        count++;
      }
      offset++;
    }
  }

  initBookingDays();

  function updateBookingSlotDisplay() {
    if (slotSelectedDisplay) {
      slotSelectedDisplay.textContent = `${selectedDay} at ${selectedTime} (GST)`;
    }
    if (bookSlotBtn) {
      const text = encodeURIComponent(
        `Hello Jithin George! I would like to schedule a 30-minute growth discovery session on ${selectedDay} at ${selectedTime} GST.\n\nPlease let me know if this slot is confirmed.`
      );
      bookSlotBtn.setAttribute('data-whatsapp-url', `https://wa.me/971563996631?text=${text}`);
    }
  }

  slotChips.forEach(chip => {
    chip.addEventListener('click', () => {
      slotChips.forEach(c => c.classList.remove('is-active'));
      chip.classList.add('is-active');
      selectedTime = chip.getAttribute('data-time') || '11:30 AM';
      updateBookingSlotDisplay();
    });
  });

  if (bookSlotBtn) {
    updateBookingSlotDisplay();
    bookSlotBtn.addEventListener('click', () => {
      const url = bookSlotBtn.getAttribute('data-whatsapp-url');
      if (url) {
        window.open(url, '_blank');
      }
    });
  }

  // ---------------------------------------------------------------------------
  // 6. Worldwide Hub Switcher
  // ---------------------------------------------------------------------------
  const hubData = {
    dubai: {
      title: 'Main Office - Dubai, UAE',
      tagline: 'Headquarters & Middle East Strategic Operations Hub',
      address: 'Burjuman Business Tower, Business Tower - Burjuman - Office No:929, 9th Floor - Dubai, UAE',
      phone: '+971 56 399 6631 / +971 50 876 4885',
      phoneLink: 'tel:+971563996631',
      email: 'info@zenerom.ae',
      hours: 'Mon – Fri: 9:00 AM – 6:00 PM (GST)',
      directions: '2 min walk from Burjuman Metro Station (Interchange of Red & Green lines). Dedicated visitor parking available.',
      mapEmbedUrl: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.889370830743!2d55.2998638!3d25.2507851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4339908ca783%3A0xe968846c4f923c68!2sBurJuman%20Business%20Tower!5e0!3m2!1sen!2sae!4v1700000000000!5m2!1sen!2sae',
      mapsExternalUrl: 'https://maps.app.goo.gl/YB8PbiqWgDRdVAZ46',
      whatsappUrl: 'https://wa.me/971563996631'
    },
    edinburgh: {
      title: 'UK Office - Edinburgh',
      tagline: 'European Innovation & Cross-Border Brand Scaling Desk',
      address: '62 Macgill Dr, Edinburgh EH4 4FB, United Kingdom',
      phone: '+44 131 555 0192 (UK Inquiry Desk)',
      phoneLink: 'https://zenerom.co.uk/',
      email: 'uk@zenerom.co.uk',
      hours: 'Mon – Fri: 9:00 AM – 5:00 PM (GMT/BST)',
      directions: 'Convenient access from Edinburgh City Centre & Waverley Station. Servicing UK & European corporate accounts.',
      mapEmbedUrl: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2232.883492025114!2d-3.2678!3d55.9615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c4f1c1c1c1c1%3A0x1c1c1c1c1c1c1c1c!2s62%20Macgill%20Dr%2C%20Edinburgh%20EH4%204FB%2C%20UK!5e0!3m2!1sen!2suk!4v1700000000001!5m2!1sen!2suk',
      mapsExternalUrl: 'https://zenerom.co.uk/',
      whatsappUrl: 'https://wa.me/971563996631'
    },
    kochi: {
      title: 'India Office - Kochi, Kerala',
      tagline: 'Zenerom Creative Lab & Advanced Software Engineering Hub',
      address: 'Zenerom Creative Lab, 2nd Floor, Khadeeja Building, Annie Thayyil Lane, Xavier Arakkal Rd, Kochi, Kerala 682018',
      phone: '+91 484 405 8920 / +91 97450 09988',
      phoneLink: 'https://zenerom.in/',
      email: 'info@zenerom.in',
      hours: 'Mon – Fri: 9:30 AM – 6:30 PM (IST)',
      directions: 'Located in the heart of Kochi commercial zone. Houses our 40+ specialized UI/UX designers, mobile app developers, and cloud engineers.',
      mapEmbedUrl: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.5678!2d76.2891!3d9.9723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d51456789%3A0xabcdef12345678!2sZenerom%20Creative%20Lab%2C%20Kochi!5e0!3m2!1sen!2sin!4v1700000000002!5m2!1sen!2sin',
      mapsExternalUrl: 'https://zenerom.in/',
      whatsappUrl: 'https://wa.me/971563996631'
    },
    sydney: {
      title: 'Australia Office - Sydney',
      tagline: 'Asia-Pacific Digital Operations & Retail Growth Desk',
      address: '81 Flushcombe Rd, Blacktown NSW 2148, Australia',
      phone: '+61 2 8000 7891 (APAC Desk)',
      phoneLink: 'tel:+61280007891',
      email: 'sydney@zenerom.com',
      hours: 'Mon – Fri: 9:00 AM – 5:00 PM (AEST)',
      directions: 'Convenient commercial hub in Western Sydney. Supporting Australian brands and cross-border e-commerce setups.',
      mapEmbedUrl: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.5432!2d150.9082!3d-33.7712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b1299a123456789%3A0x9876543210abcdef!2s81%20Flushcombe%20Rd%2C%20Blacktown%20NSW%202148%2C%20Australia!5e0!3m2!1sen!2sau!4v1700000000003!5m2!1sen!2sau',
      mapsExternalUrl: 'https://share.google/KbMJQW2GRN7fZIyST',
      whatsappUrl: 'https://wa.me/971563996631'
    }
  };

  const hubTabBtns = document.querySelectorAll('.hub-tab-btn');
  const hubTitle = document.getElementById('hubTitle');
  const hubTagline = document.getElementById('hubTagline');
  const hubAddress = document.getElementById('hubAddress');
  const hubPhone = document.getElementById('hubPhone');
  const hubEmail = document.getElementById('hubEmail');
  const hubHours = document.getElementById('hubHours');
  const hubDirections = document.getElementById('hubDirections');
  const hubMapFrame = document.getElementById('hubMapFrame');
  const hubExternalMapBtn = document.getElementById('hubExternalMapBtn');
  const hubDirectActionBtn = document.getElementById('hubDirectActionBtn');

  hubTabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      hubTabBtns.forEach(b => b.classList.remove('is-active'));
      btn.classList.add('is-active');

      const hubKey = btn.getAttribute('data-hub');
      const data = hubData[hubKey];
      if (!data) return;

      // Animate card content transition
      const hubCard = document.querySelector('.hub-card');
      if (window.gsap && hubCard) {
        gsap.fromTo(hubCard, { opacity: 0.6, y: 8 }, { opacity: 1, y: 0, duration: 0.3, ease: 'power2.out' });
      }

      if (hubTitle) hubTitle.textContent = data.title;
      if (hubTagline) hubTagline.textContent = data.tagline;
      if (hubAddress) hubAddress.textContent = data.address;
      if (hubPhone) {
        hubPhone.textContent = data.phone;
        hubPhone.href = data.phoneLink;
      }
      if (hubEmail) {
        hubEmail.textContent = data.email;
        hubEmail.href = `mailto:${data.email}`;
      }
      if (hubHours) hubHours.textContent = data.hours;
      if (hubDirections) hubDirections.textContent = data.directions;
      if (hubMapFrame) hubMapFrame.src = data.mapEmbedUrl;
      if (hubExternalMapBtn) hubExternalMapBtn.href = data.mapsExternalUrl;
      if (hubDirectActionBtn) {
        if (hubKey === 'dubai') {
          hubDirectActionBtn.href = 'tel:+971563996631';
          hubDirectActionBtn.innerHTML = `
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            <span>Call Dubai HQ</span>
          `;
        } else {
          hubDirectActionBtn.href = data.phoneLink;
          hubDirectActionBtn.innerHTML = `
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
            <span>Visit Regional Portal</span>
          `;
        }
      }

      updateClocks();
    });
  });

  // ---------------------------------------------------------------------------
  // 7. Interactive Contact FAQ Accordion
  // ---------------------------------------------------------------------------
  const faqItems = document.querySelectorAll('.contact-faq-item');

  faqItems.forEach(item => {
    const trigger = item.querySelector('.faq-trigger');
    const panel = item.querySelector('.faq-answer-panel');

    if (trigger && panel) {
      trigger.addEventListener('click', () => {
        const isOpen = item.classList.contains('is-open');

        // Close all other items
        faqItems.forEach(otherItem => {
          if (otherItem !== item && otherItem.classList.contains('is-open')) {
            otherItem.classList.remove('is-open');
            const otherPanel = otherItem.querySelector('.faq-answer-panel');
            if (otherPanel) otherPanel.style.maxHeight = null;
          }
        });

        // Toggle current item
        if (isOpen) {
          item.classList.remove('is-open');
          panel.style.maxHeight = null;
        } else {
          item.classList.add('is-open');
          panel.style.maxHeight = panel.scrollHeight + 'px';
        }
      });
    }
  });

});
