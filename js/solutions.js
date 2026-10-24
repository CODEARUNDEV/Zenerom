/**
 * solutions.js - Interactive Functionality for Zenerom Solutions Page
 * Handles:
 * 1. Category Filtering for Solution Feature Blocks
 * 2. Smooth Scroll navigation with sticky header offset
 * 3. Interactive Solution Architecture & ROI Recommender Widget
 * 4. FAQ Accordion expansion
 */

document.addEventListener('DOMContentLoaded', function () {
  // ------------------------------------------------------------------------
  // 1. Solution Category Filtering
  // ------------------------------------------------------------------------
  const filterButtons = document.querySelectorAll('.sol-filter-btn');
  const solutionBlocks = document.querySelectorAll('.solution-feature-block');

  if (filterButtons.length > 0 && solutionBlocks.length > 0) {
    filterButtons.forEach(btn => {
      btn.addEventListener('click', function () {
        filterButtons.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const category = this.getAttribute('data-category');

        solutionBlocks.forEach(block => {
          const blockCat = block.getAttribute('data-category');
          if (category === 'all' || blockCat === category) {
            block.style.display = 'grid';
            block.style.opacity = '1';
            block.style.transform = 'none';
          } else {
            block.style.display = 'none';
          }
        });

        // Hide or show parent sections so no empty black/white strips remain
        const showcaseSections = document.querySelectorAll('.section_solutions_showcase');
        showcaseSections.forEach(section => {
          const visibleBlocks = Array.from(section.querySelectorAll('.solution-feature-block')).filter(b => b.style.display !== 'none');
          if (visibleBlocks.length === 0) {
            section.style.display = 'none';
          } else {
            section.style.display = 'block';
          }
        });

        // If Lenis is active, refresh scroll calculations
        if (window.lenis) {
          window.lenis.resize();
        }

        // If specific category selected, smooth scroll to the first visible card
        if (category !== 'all') {
          const firstVisible = Array.from(solutionBlocks).find(b => b.style.display !== 'none');
          if (firstVisible) {
            if (window.lenis) {
              window.lenis.scrollTo(firstVisible, { offset: -90 });
            } else {
              const topPos = firstVisible.getBoundingClientRect().top + window.pageYOffset - 90;
              window.scrollTo({ top: topPos, behavior: 'smooth' });
            }
          }
        }
      });
    });
  }

  // ------------------------------------------------------------------------
  // 2. Smooth Anchor Navigation with Sticky Header Offset
  // ------------------------------------------------------------------------
  const chipLinks = document.querySelectorAll('.solution-chip-btn');
  chipLinks.forEach(chip => {
    chip.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId.startsWith('#')) {
        e.preventDefault();
        const targetEl = document.querySelector(targetId);
        if (targetEl) {
          if (window.lenis) {
            window.lenis.scrollTo(targetEl, { offset: -90 });
          } else {
            const topPos = targetEl.getBoundingClientRect().top + window.pageYOffset - 90;
            window.scrollTo({ top: topPos, behavior: 'smooth' });
          }
        }
      }
    });
  });

  // ------------------------------------------------------------------------
  // 3. Interactive Solution Architecture & ROI Recommender
  // ------------------------------------------------------------------------
  const industryButtons = document.querySelectorAll('.calc-ind-btn');
  const goalButtons = document.querySelectorAll('.calc-goal-btn');
  const resultTag = document.getElementById('calcResultTag');
  const resultHeadline = document.getElementById('calcResultHeadline');
  const callout1Num = document.getElementById('calcCallout1Num');
  const callout1Sub = document.getElementById('calcCallout1Sub');
  const callout2Num = document.getElementById('calcCallout2Num');
  const callout2Sub = document.getElementById('calcCallout2Sub');
  const callout3Num = document.getElementById('calcCallout3Num');
  const callout3Sub = document.getElementById('calcCallout3Sub');
  const resultStack = document.getElementById('calcResultStack');

  const recommendationProfiles = {
    'real-estate': {
      'leads': {
        tag: 'Recommended Solution: High-Intent Property Lead Engine',
        headline: 'Omnichannel Real Estate Acquisition & WhatsApp CRM Routing',
        c1Num: '+280%',
        c1Sub: 'Verified Buyer Inquiries',
        c2Num: '3.9x',
        c2Sub: 'Lower Cost Per Acquisition',
        c3Num: '<8 mins',
        c3Sub: 'Lead-to-WhatsApp Response',
        stack: '<strong>Core Engine:</strong> Google High-Intent Search & Meta Ads + Dedicated Off-Plan Landing Funnels + WhatsApp Business API & Automated Zoho Lead Assignment.'
      },
      'ecommerce': {
        tag: 'Recommended Solution: Digital Developer Experience',
        headline: 'Interactive 3D Property Portals & Digital Sales Suites',
        c1Num: '+190%',
        c1Sub: 'Investor Engagement',
        c2Num: '4.4x',
        c2Sub: 'Time on Listing Pages',
        c3Num: '99.9%',
        c3Sub: 'Portal Uptime',
        stack: '<strong>Core Engine:</strong> Headless Web Platform + Interactive Masterplan Walkthroughs + Investor Portal CRM Sync.'
      },
      'brand': {
        tag: 'Recommended Solution: Premium Developer Branding',
        headline: 'Luxury Real Estate Identity & Cinematic Video Production',
        c1Num: '+350%',
        c1Sub: 'Brand Recall Across UAE',
        c2Num: '62%',
        c2Sub: 'Brochure Downloads',
        c3Num: '4.8★',
        c3Sub: 'Investor Trust Index',
        stack: '<strong>Core Engine:</strong> High-End Brand System + 4K Architectural Drone & Video Production + Premium Retargeting Suite.'
      },
      'scale': {
        tag: 'Recommended Solution: Dedicated Real Estate Growth Team',
        headline: 'Outsourced Property Marketing & Development Squad',
        c1Num: '60%',
        c1Sub: 'Team Overhead Reduction',
        c2Num: '100%',
        c2Sub: 'Dedicated UAE Specialists',
        c3Num: '24/7',
        c3Sub: 'Campaign Optimization',
        stack: '<strong>Core Engine:</strong> Dedicated Performance Media Buyers + Full-Stack Developers + CRM Automation Engineer.'
      }
    },
    'healthcare': {
      'leads': {
        tag: 'Recommended Solution: Patient Appointment Engine',
        headline: 'Local Healthcare SEO & Direct Doctor Booking Workflows',
        c1Num: '+310%',
        c1Sub: 'Qualified Patient Bookings',
        c2Num: '#1 Pack',
        c2Sub: 'Google Maps UAE Rankings',
        c3Num: '99.2%',
        c3Sub: 'MoH Compliance Score',
        stack: '<strong>Core Engine:</strong> Local Emirate SEO & Google Maps + Fast Mobile Booking Web App + Automated SMS/WhatsApp Reminders.'
      },
      'ecommerce': {
        tag: 'Recommended Solution: Pharmacy & Wellness Commerce',
        headline: 'Compliant Healthcare eCommerce & Telehealth Portal',
        c1Num: '+240%',
        c1Sub: 'Recurring Prescription Sales',
        c2Num: '<1.2s',
        c2Sub: 'Page Load Speed',
        c3Num: '100%',
        c3Sub: 'UAE Payment Integration',
        stack: '<strong>Core Engine:</strong> Fast Headless Commerce + Telehealth Consultation Module + Automated Refill Reminders.'
      },
      'brand': {
        tag: 'Recommended Solution: Medical Authority Branding',
        headline: 'Doctor & Hospital Reputation & Patient Trust Building',
        c1Num: '4.9★',
        c1Sub: 'Verified Clinic Rating',
        c2Num: '+400%',
        c2Sub: 'Organic Search Reach',
        c3Num: '85%',
        c3Sub: 'Patient Retention',
        stack: '<strong>Core Engine:</strong> Clinical Authority SEO + Video Patient Testimonials + Review & Reputation Management.'
      },
      'scale': {
        tag: 'Recommended Solution: Clinic Expansion Technology Squad',
        headline: 'Dedicated IT & Healthcare Marketing Department',
        c1Num: '12+',
        c1Sub: 'Specialists at Your Command',
        c2Num: '45%',
        c2Sub: 'Lower Staffing Cost',
        c3Num: '100%',
        c3Sub: 'Data Privacy Standards',
        stack: '<strong>Core Engine:</strong> Dedicated Web Specialists + Performance Marketing Leads + Zoho CRM Automation.'
      }
    },
    'b2b': {
      'leads': {
        tag: 'Recommended Solution: B2B Enterprise Lead Pipeline',
        headline: 'Account-Based Search, LinkedIn Ads & Corporate CRM',
        c1Num: '+220%',
        c1Sub: 'High-Ticket B2B RFQs',
        c2Num: '3.4x',
        c2Sub: 'Pipeline Value Generated',
        c3Num: '100%',
        c3Sub: 'Sales Team Visibility',
        stack: '<strong>Core Engine:</strong> Technical SEO & SEM + LinkedIn Executive Ads + Zoho CRM Pipeline Automation & Deal Routing.'
      },
      'ecommerce': {
        tag: 'Recommended Solution: B2B Wholesale Portal',
        headline: 'Custom Wholesale Catalog & Tiered Pricing Architecture',
        c1Num: '+180%',
        c1Sub: 'Re-order Frequency',
        c2Num: '99.9%',
        c2Sub: 'ERP Integration Accuracy',
        c3Num: '<1.5s',
        c3Sub: 'Catalog Search Speed',
        stack: '<strong>Core Engine:</strong> Custom Web App + Tiered B2B Pricing Engine + Automatic Invoice & PO Generation.'
      },
      'brand': {
        tag: 'Recommended Solution: Corporate Authority Rebrand',
        headline: 'International B2B Brand Identity & Digital Collateral',
        c1Num: '+150%',
        c1Sub: 'International Inquiries',
        c2Num: '3.8x',
        c2Sub: 'Contract Win Rate',
        c3Num: '100%',
        c3Sub: 'Brand Consistency',
        stack: '<strong>Core Engine:</strong> Global Brand Architecture + High-Impact Presentation Suites + Corporate Case Study Film.'
      },
      'scale': {
        tag: 'Recommended Solution: Dedicated Tech & Sales Outsourcing',
        headline: 'Scalable Engineering & CRM Operations Team',
        c1Num: '55%',
        c1Sub: 'Operational Savings',
        c2Num: '48h',
        c2Sub: 'Sprint Turnaround Time',
        c3Num: '10+',
        c3Sub: 'Years Agency Experience',
        stack: '<strong>Core Engine:</strong> Dedicated Full-Stack Developers + Mobile App Engineers + Certified Zoho Architects.'
      }
    },
    'retail': {
      'leads': {
        tag: 'Recommended Solution: Omnichannel Retail Footfall',
        headline: 'Store Locator SEO, TikTok Ads & WhatsApp Loyalty',
        c1Num: '+380%',
        c1Sub: 'In-Store Footfall & Calls',
        c2Num: '4.2x',
        c2Sub: 'Campaign ROAS',
        c3Num: '78%',
        c3Sub: 'Repeat Purchase Rate',
        stack: '<strong>Core Engine:</strong> Multi-Store Local SEO + Hyper-Local Social Ads + WhatsApp VIP Club Automation.'
      },
      'ecommerce': {
        tag: 'Recommended Solution: Next-Gen Headless eCommerce',
        headline: 'Sub-Second Storefront with Multi-Currency GCC Checkout',
        c1Num: '0.8s',
        c1Sub: 'Mobile Load Time',
        c2Num: '+65%',
        c2Sub: 'Checkout Conversion',
        c3Num: '4.5x',
        c3Sub: 'Holiday Peak Scalability',
        stack: '<strong>Core Engine:</strong> Headless Commerce Engine + Instant GCC Gateways (Tabby/Tamara) + Automated Dynamic Remarketing.'
      },
      'brand': {
        tag: 'Recommended Solution: High-Fashion Luxury Branding',
        headline: 'Aesthetic Packaging, Influencer Amplification & Video',
        c1Num: '+420%',
        c1Sub: 'Social Reach & Virality',
        c2Num: '5.2x',
        c2Sub: 'Average Order Value',
        c3Num: '94%',
        c3Sub: 'Premium Perception',
        stack: '<strong>Core Engine:</strong> Luxury Brand Guidelines + Influencer Campaign Management + High-Impact Video Ads.'
      },
      'scale': {
        tag: 'Recommended Solution: Dedicated eCommerce Growth Unit',
        headline: 'Dedicated Media Buyers, Catalog Devs & Automation Team',
        c1Num: '24/7',
        c1Sub: 'Live Store Support',
        c2Num: '50%',
        c2Sub: 'Reduced Cost vs In-House',
        c3Num: '+120%',
        c3Sub: 'Yearly Gross Merchandise Val',
        stack: '<strong>Core Engine:</strong> Dedicated Shopify/Woo Devs + Senior Media Buyer + Daily Inventory Sync Automation.'
      }
    }
  };

  let selectedInd = 'real-estate';
  let selectedGoal = 'leads';

  function updateRecommendation() {
    const profile = (recommendationProfiles[selectedInd] && recommendationProfiles[selectedInd][selectedGoal])
      ? recommendationProfiles[selectedInd][selectedGoal]
      : recommendationProfiles['real-estate']['leads'];

    if (resultTag) resultTag.textContent = profile.tag;
    if (resultHeadline) resultHeadline.textContent = profile.headline;
    if (callout1Num) callout1Num.textContent = profile.c1Num;
    if (callout1Sub) callout1Sub.textContent = profile.c1Sub;
    if (callout2Num) callout2Num.textContent = profile.c2Num;
    if (callout2Sub) callout2Sub.textContent = profile.c2Sub;
    if (callout3Num) callout3Num.textContent = profile.c3Num;
    if (callout3Sub) callout3Sub.textContent = profile.c3Sub;
    if (resultStack) resultStack.innerHTML = profile.stack;
  }

  industryButtons.forEach(btn => {
    btn.addEventListener('click', function () {
      industryButtons.forEach(b => b.classList.remove('selected'));
      this.classList.add('selected');
      selectedInd = this.getAttribute('data-ind');
      updateRecommendation();
    });
  });

  goalButtons.forEach(btn => {
    btn.addEventListener('click', function () {
      goalButtons.forEach(b => b.classList.remove('selected'));
      this.classList.add('selected');
      selectedGoal = this.getAttribute('data-goal');
      updateRecommendation();
    });
  });

  // ------------------------------------------------------------------------
  // 4. Solutions FAQ Accordion
  // ------------------------------------------------------------------------
  const faqItems = document.querySelectorAll('.faq-item-card');
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-item-question');
    if (question) {
      question.addEventListener('click', function () {
        const isActive = item.classList.contains('active');

        // Close all other items
        faqItems.forEach(other => {
          if (other !== item) {
            other.classList.remove('active');
          }
        });

        // Toggle current item
        if (isActive) {
          item.classList.remove('active');
        } else {
          item.classList.add('active');
        }

        if (window.lenis) {
          window.lenis.resize();
        }
      });
    }
  });
});
