/* ==========================================================================
   service-single.js - Interactive Mechanics for Single Service Template
   Zenerom UAE Digital Marketing & Technology Agency
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  initSeoCalculator();
  initFaqAccordion();
  initAuditForm();
  initSmoothAuditScroll();
});

/**
 * 1. Interactive SEO Inbound Revenue & Traffic Estimator
 */
function initSeoCalculator() {
  const visitorsSlider = document.getElementById('calcVisitors');
  const valueSlider = document.getElementById('calcValue');
  const convSlider = document.getElementById('calcConvRate');

  if (!visitorsSlider || !valueSlider || !convSlider) return;

  const visitorsDisplay = document.getElementById('calcVisitorsVal');
  const valueDisplay = document.getElementById('calcValueVal');
  const convDisplay = document.getElementById('calcConvVal');

  const leadsDisplay = document.getElementById('calcResultLeads');
  const revenueDisplay = document.getElementById('calcResultRevenue');
  const savingsDisplay = document.getElementById('calcResultSavings');

  function calculate() {
    const visitors = parseInt(visitorsSlider.value, 10);
    const avgValue = parseInt(valueSlider.value, 10);
    const convRate = parseFloat(convSlider.value);

    // Dynamic units from data attributes
    const unit1 = visitorsDisplay && visitorsDisplay.dataset.unit !== undefined ? visitorsDisplay.dataset.unit : ' /mo';
    const unit2 = valueDisplay && valueDisplay.dataset.unit !== undefined ? valueDisplay.dataset.unit : 'AED ';
    const unit3 = convDisplay && convDisplay.dataset.unit !== undefined ? convDisplay.dataset.unit : '%';

    // Update display labels
    if (visitorsDisplay) {
      visitorsDisplay.textContent = unit1.startsWith(' ') ? visitors.toLocaleString() + unit1 : visitors.toLocaleString() + ' ' + unit1;
    }
    if (valueDisplay) {
      valueDisplay.textContent = unit2.endsWith(' ') ? unit2 + avgValue.toLocaleString() : unit2 + avgValue.toLocaleString();
    }
    if (convDisplay) {
      convDisplay.textContent = convRate.toFixed(1) + unit3;
    }

    // Projected Monthly Inbound Leads / Conversions
    const monthlyLeads = Math.round(visitors * (convRate / 100));
    // Conservative closed deal estimate (approx 20% conversion from qualified lead)
    const closedDeals = Math.max(1, Math.round(monthlyLeads * 0.20));
    // Projected Commercial Revenue
    const monthlyRevenue = closedDeals * avgValue;
    // Estimated Equivalent Value or Efficiency Savings
    const adsSavings = Math.round(monthlyRevenue * 0.38);

    if (leadsDisplay) {
      leadsDisplay.textContent = monthlyLeads.toLocaleString() + '+';
    }
    if (revenueDisplay) {
      revenueDisplay.textContent = 'AED ' + monthlyRevenue.toLocaleString();
    }
    if (savingsDisplay) {
      savingsDisplay.textContent = 'AED ' + adsSavings.toLocaleString();
    }
  }

  visitorsSlider.addEventListener('input', calculate);
  valueSlider.addEventListener('input', calculate);
  convSlider.addEventListener('input', calculate);

  // Initial run
  calculate();
}

/**
 * 2. Accessible FAQ Accordion
 */
function initFaqAccordion() {
  const faqItems = document.querySelectorAll('.svc-faq-item');
  if (!faqItems.length) return;

  faqItems.forEach((item) => {
    const button = item.querySelector('.svc-faq-question-btn');
    if (!button) return;

    button.addEventListener('click', () => {
      const isOpen = item.classList.contains('is-open');

      // Close all other items
      faqItems.forEach((other) => {
        if (other !== item) {
          other.classList.remove('is-open');
          const otherBtn = other.querySelector('.svc-faq-question-btn');
          if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
        }
      });

      // Toggle current item
      if (isOpen) {
        item.classList.remove('is-open');
        button.setAttribute('aria-expanded', 'false');
      } else {
        item.classList.add('is-open');
        button.setAttribute('aria-expanded', 'true');
      }
    });
  });
}

/**
 * 3. Audit Form Submission & WhatsApp Sync
 */
function initAuditForm() {
  const auditForm = document.getElementById('svcAuditForm');
  if (!auditForm) return;

  auditForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const websiteInput = document.getElementById('auditWebsite');
    const keywordInput = document.getElementById('auditKeyword');
    const nameInput = document.getElementById('auditName');
    const emailInput = document.getElementById('auditEmail');
    const phoneInput = document.getElementById('auditPhone');
    const marketSelect = document.getElementById('auditMarket');

    if (!websiteInput || !nameInput || !emailInput || !phoneInput) return;

    const website = websiteInput.value.trim();
    const keyword = keywordInput ? keywordInput.value.trim() : 'General SEO';
    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const phone = phoneInput.value.trim();
    const market = marketSelect ? marketSelect.value : 'Dubai Only';

    if (!website || !name || !email || !phone) {
      alert('Please fill out all required fields to generate your complimentary Dubai SEO audit.');
      return;
    }

    // Success State
    const formCard = auditForm.closest('.svc-audit-form-card');
    if (formCard) {
      formCard.innerHTML = `
        <div style="text-align: center; padding: 2.5rem 1rem;">
          <div style="width: 60px; height: 60px; border-radius: 50%; background: rgba(242, 105, 52, 0.12); color: #f26934; font-size: 2rem; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-weight: 800;">✓</div>
          <h3 style="font-size: 1.6rem; font-weight: 700; color: #111827; margin: 0 0 0.75rem;">Audit Request Confirmed</h3>
          <p style="font-size: 0.95rem; color: #475569; line-height: 1.6; max-width: 440px; margin: 0 auto 1.75rem;">
            Thank you, <strong>${name}</strong>. Our Senior SEO Engineering Squad at Burjuman Tower has received your audit parameters for <strong>${website}</strong>.
          </p>
          <div style="background: #ffffff; border-radius: 14px; padding: 1.25rem; margin-bottom: 2rem; text-align: left; font-size: 0.875rem; color: #334155; line-height: 1.6;">
            <div><strong>Target Keyword:</strong> ${keyword}</div>
            <div><strong>Geographic Market:</strong> ${market}</div>
            <div><strong>Deliverable:</strong> 28-Point Technical & Competitor Gap Report</div>
            <div><strong>Estimated Turnaround:</strong> &lt; 2 Business Hours</div>
          </div>
          <a href="https://wa.me/971563996631?text=${encodeURIComponent('Hello Zenerom SEO Desk, I just requested a Dubai SEO Audit for ' + website + ' (Target: ' + keyword + '). Looking forward to reviewing!')}" target="_blank" class="svc-btn-primary" style="justify-content: center; width: 100%;">
            <span>Connect on WhatsApp for Expedited Audit</span>
            <span>→</span>
          </a>
        </div>
      `;
    }
  });
}

/**
 * 4. Smooth Anchor Scroll to Audit Section
 */
function initSmoothAuditScroll() {
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId.length > 1) {
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
}
