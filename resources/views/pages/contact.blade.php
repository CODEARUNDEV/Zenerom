<x-layouts.app>
  <x-slot:title>Contact Us | Zenerom Digital Marketing Agency Dubai, UAE</x-slot:title>
  <x-slot:description>Contact Zenerom for expert digital marketing, SEO, web development, and branding services in Dubai, UAE. Let’s grow your business online.</x-slot:description>

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css?v=81') }}"/>
  @endpush

<!-- ========================================================================
       2. Contact Hero Section & Live UAE Status Ribbon
       ======================================================================== -->
  <section class="contact-hero">
    <div class="contact-hero-container">
      
      <!-- Breadcrumbs -->
      <nav class="contact-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">Home</a>
        <span class="contact-breadcrumbs-sep">»</span>
        <span class="contact-breadcrumbs-current">Contact Us</span>
      </nav>

      <div class="contact-hero-header">
        <div class="contact-eyebrow">
          <div class="contact-eyebrow-dot"></div>
          <span>Dubai Headquarters &amp; Global Hubs</span>
        </div>
        <h1 class="contact-hero-title">
          Let's Architect Your Next <span class="highlight-text">Digital Growth Milestone</span>
        </h1>
        <p class="contact-hero-desc">
          Connect with Zenerom Digital Marketing Agency in Dubai for customized digital marketing solutions. Whether you need SEO services, PPC advertising, social media management, website development, or performance marketing, our experts are here to help you achieve your business goals.
        </p>
      </div>

      <!-- Live UAE Status Ribbon -->
      <div class="contact-status-ribbon">
        <div class="status-ribbon-left">
          <div class="live-clock-badge">
            <svg class="live-clock-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10"></circle>
              <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
            <span id="heroDubaiClock">Loading GST...</span>
          </div>
          <div class="live-office-status">
            <div id="heroOfficeBeacon" class="status-beacon-green"></div>
            <span id="heroOfficeStatusText">Office Open Now — Senior Strategists Active at Burjuman Tower</span>
          </div>
        </div>
        <div class="status-ribbon-right">
          <div class="sla-badge">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path>
            </svg>
            <span>&lt; 2 Hours Business Hours SLA</span>
          </div>
        </div>
      </div>

      <!-- Quick Action Cards Grid with Copy-to-Clipboard -->
      <div class="contact-quick-channels">
        
        <!-- Mobile 1 -->
        <div class="contact-action-card" data-copy-target="+971563996631">
          <div class="action-card-top">
            <div class="action-card-icon">📞</div>
            <span class="action-card-badge">Direct &amp; WhatsApp</span>
          </div>
          <div>
            <div class="action-card-label">Primary Mobile</div>
            <div class="action-card-value">+971 56 399 6631</div>
            <div class="action-card-action">Click to copy number <span>→</span></div>
          </div>
          <div class="copy-feedback">✓ Copied to clipboard!</div>
        </div>

        <!-- Mobile 2 -->
        <div class="contact-action-card" data-copy-target="+971508764885">
          <div class="action-card-top">
            <div class="action-card-icon">💼</div>
            <span class="action-card-badge">Enterprise Line</span>
          </div>
          <div>
            <div class="action-card-label">Strategy Desk</div>
            <div class="action-card-value">+971 50 876 4885</div>
            <div class="action-card-action">Click to copy number <span>→</span></div>
          </div>
          <div class="copy-feedback">✓ Copied to clipboard!</div>
        </div>

        <!-- Email -->
        <div class="contact-action-card" data-copy-target="info@zenerom.ae">
          <div class="action-card-top">
            <div class="action-card-icon">✉️</div>
            <span class="action-card-badge">Official Inbox</span>
          </div>
          <div>
            <div class="action-card-label">Email Inquiries</div>
            <div class="action-card-value">info@zenerom.ae</div>
            <div class="action-card-action">Click to copy email <span>→</span></div>
          </div>
          <div class="copy-feedback">✓ Copied to clipboard!</div>
        </div>

        <!-- Headquarters -->
        <a href="https://maps.app.goo.gl/YB8PbiqWgDRdVAZ46" target="_blank" class="contact-action-card" style="text-decoration:none;">
          <div class="action-card-top">
            <div class="action-card-icon">📍</div>
            <span class="action-card-badge">Dubai Flagship</span>
          </div>
          <div>
            <div class="action-card-label">Burjuman Tower</div>
            <div class="action-card-value" style="font-size:1.02rem;">Office No:929, 9th Floor</div>
            <div class="action-card-action">Open in Google Maps <span>↗</span></div>
          </div>
        </a>

      </div>

    </div>
  </section>

  <!-- ========================================================================
       3. Interactive Smart Project Scope & Inquiry Builder
       ======================================================================== -->
  <section class="section_inquiry_builder" id="project-inquiry">
    <div class="contact-hero-container">
      <div class="inquiry-builder-grid">
        
        <!-- Left: Interactive Form -->
        <div class="inquiry-form-card">
          <div class="inquiry-header">
            <div class="inquiry-header-eyebrow">Interactive Scope Estimator</div>
            <h2 class="inquiry-title">Tell Us About Your Project &amp; Needs</h2>
            <p class="inquiry-desc">
              Select your required capabilities and investment tier. Your project scope snapshot updates in real time on the right.
            </p>
          </div>

          <form id="projectInquiryForm" novalidate>
            
            <!-- Step 1: Services Selector Chips -->
            <div class="inquiry-step-block">
              <div class="step-label">
                <span class="step-number">1</span>
                <span>Select Required Capabilities (Multi-Select)</span>
              </div>
              <div class="services-chip-grid">
                
                <div class="service-chip-toggle is-active" data-service="SEO &amp; Search Marketing">
                  <div class="chip-checkbox">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  </div>
                  <span>SEO &amp; Organic Growth</span>
                </div>

                <div class="service-chip-toggle" data-service="Google Ads &amp; Performance PPC">
                  <div class="chip-checkbox">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  </div>
                  <span>Google Ads &amp; PPC</span>
                </div>

                <div class="service-chip-toggle is-active" data-service="Custom Web &amp; E-Commerce Engineering">
                  <div class="chip-checkbox">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  </div>
                  <span>Custom Web &amp; E-Commerce</span>
                </div>

                <div class="service-chip-toggle" data-service="Social Media &amp; Video Production">
                  <div class="chip-checkbox">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  </div>
                  <span>Social Media &amp; Video</span>
                </div>

                <div class="service-chip-toggle" data-service="Mobile App &amp; Web App Dev">
                  <div class="chip-checkbox">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  </div>
                  <span>Mobile &amp; Web Apps</span>
                </div>

                <div class="service-chip-toggle" data-service="Zoho CRM &amp; Workflow Automation">
                  <div class="chip-checkbox">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  </div>
                  <span>Zoho CRM &amp; Automation</span>
                </div>

                <div class="service-chip-toggle" data-service="IT Outsourcing &amp; Dedicated Squads">
                  <div class="chip-checkbox">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  </div>
                  <span>Dedicated IT Squads</span>
                </div>

                <div class="service-chip-toggle" data-service="Branding &amp; Creative Identity">
                  <div class="chip-checkbox">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  </div>
                  <span>Branding &amp; Identity</span>
                </div>

              </div>
            </div>

            <!-- Step 2: Monthly Budget Tiers -->
            <div class="inquiry-step-block">
              <div class="step-label">
                <span class="step-number">2</span>
                <span>Expected Monthly Investment Tier (AED)</span>
              </div>
              <div class="budget-tiers-grid">
                
                <div class="budget-tier-card" data-amount="AED 5,000 – 15,000" data-name="Starter Growth Engine">
                  <div class="tier-amount">AED 5K – 15K</div>
                  <div class="tier-name">Starter Growth Engine</div>
                  <div class="tier-detail">Focused channel dominance (SEO or Core Search PPC) for growing UAE businesses.</div>
                </div>

                <div class="budget-tier-card is-active" data-amount="AED 15,000 – 35,000" data-name="Scale &amp; Accelerate">
                  <div class="tier-amount">AED 15K – 35K</div>
                  <div class="tier-name">Scale &amp; Accelerate</div>
                  <div class="tier-detail">Omnichannel funnel synergy: SEO + Paid Media + High-converting landing architecture.</div>
                </div>

                <div class="budget-tier-card" data-amount="AED 35,000 – 75,000" data-name="Enterprise Market Leader">
                  <div class="tier-amount">AED 35K – 75K</div>
                  <div class="tier-name">Enterprise Market Leader</div>
                  <div class="tier-detail">Full regional dominance across UAE &amp; GCC with bespoke engineering &amp; CRM pipeline sync.</div>
                </div>

                <div class="budget-tier-card" data-amount="AED 75,000+" data-name="Dominance &amp; Dedicated Squads">
                  <div class="tier-amount">AED 75K+</div>
                  <div class="tier-name">Dominance &amp; IT Squads</div>
                  <div class="tier-detail">Custom software engineering squad, bilingual creative lab &amp; multi-channel acceleration.</div>
                </div>

              </div>
            </div>

            <!-- Step 3: Project Horizon -->
            <div class="inquiry-step-block">
              <div class="step-label">
                <span class="step-number">3</span>
                <span>Target Kickoff Horizon</span>
              </div>
              <div class="timeline-options">
                <div class="timeline-pill" data-timeline="Immediate (< 2 Weeks)">Immediate (&lt; 2 Weeks)</div>
                <div class="timeline-pill is-active" data-timeline="Within 1 Month">Within 1 Month</div>
                <div class="timeline-pill" data-timeline="1 – 3 Months">1 – 3 Months</div>
                <div class="timeline-pill" data-timeline="Strategic RFP Evaluation">Strategic RFP Evaluation</div>
              </div>
            </div>

            <!-- Step 4: Contact Inputs -->
            <div class="inquiry-step-block">
              <div class="step-label">
                <span class="step-number">4</span>
                <span>Your Contact &amp; Organization Details</span>
              </div>
              <div class="inquiry-inputs-grid">
                
                <div class="input-group">
                  <label class="input-label" for="formClientName">
                    <span>Full Name</span>
                    <span class="required-mark">*</span>
                  </label>
                  <input type="text" id="formClientName" class="form-control" placeholder="e.g. Tariq Mansoor" required autocomplete="name"/>
                </div>

                <div class="input-group">
                  <label class="input-label" for="formClientEmail">
                    <span>Corporate Email</span>
                    <span class="required-mark">*</span>
                  </label>
                  <input type="email" id="formClientEmail" class="form-control" placeholder="name@company.ae" required autocomplete="email"/>
                </div>

                <div class="input-group">
                  <label class="input-label" for="formClientPhone">
                    <span>Phone / WhatsApp</span>
                    <span class="required-mark">*</span>
                  </label>
                  <div class="form-phone-wrapper">
                    <select class="country-select" id="formCountryCode" aria-label="Country Code">
                      <option value="+971" selected>🇦🇪 +971</option>
                      <option value="+44">🇬🇧 +44</option>
                      <option value="+91">🇮🇳 +91</option>
                      <option value="+61">🇦🇺 +61</option>
                      <option value="+1">🇺🇸 +1</option>
                      <option value="+966">🇸🇦 +966</option>
                    </select>
                    <input type="tel" id="formClientPhone" class="form-control" placeholder="50 123 4567" required autocomplete="tel"/>
                  </div>
                </div>

                <div class="input-group">
                  <label class="input-label" for="formClientWebsite">
                    <span>Company / Website URL</span>
                  </label>
                  <input type="url" id="formClientWebsite" class="form-control" placeholder="https://example.ae" autocomplete="url"/>
                </div>

                <div class="input-group full-width">
                  <label class="input-label" for="formClientGoals">
                    <span>Key Growth Objectives or Current Challenges</span>
                  </label>
                  <textarea id="formClientGoals" class="form-control" placeholder="Tell us briefly about your current ad CAC, search rankings, or web app milestones..."></textarea>
                </div>

              </div>
            </div>

            <!-- Submit Action -->
            <div class="form-submit-row">
              <button type="submit" id="inquirySubmitBtn" class="inquiry-submit-btn">
                <span class="btn-spinner"></span>
                <span class="btn-text-content">Submit Project Scope Request</span>
                <span class="btn-arrow">→</span>
              </button>

              <a href="https://wa.me/971563996631" target="_blank" id="dynamicWhatsappBtn" class="whatsapp-dispatch-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.669-.699c.969.586 1.761.888 2.791.888 3.181 0 5.767-2.586 5.768-5.766.001-3.18-2.585-5.774-5.768-5.774zm3.376 8.211c-.144.405-.837.774-1.17.824-.312.045-.694.072-2.127-.521-1.615-.67-2.616-2.308-2.696-2.416-.08-.108-.65-8.65-.65-1.648 0-.783.411-1.168.558-1.325.147-.157.324-.196.432-.196.108 0 .216.002.311.006.101.005.237-.038.37.284.144.348.491 1.199.534 1.287.043.088.072.19.014.304-.058.114-.087.185-.173.286-.086.101-.182.226-.26.304-.086.086-.176.18-.076.352.1.172.445.734.955 1.189.658.587 1.213.769 1.385.855.172.086.273.072.374-.044.101-.116.432-.504.547-.677.115-.173.23-.144.388-.086.158.058 1.008.475 1.181.562.173.086.288.13.331.202.043.072.043.419-.101.824z"></path>
                </svg>
                <span>Or Chat Directly on WhatsApp with This Scope</span>
              </a>

              <div class="form-privacy-note">
                🔒 Protected by 256-bit encryption. We sign bilateral Non-Disclosure Agreements prior to proprietary audits.
              </div>
            </div>

          </form>

          <!-- Success Card Modal / Inline Replacement -->
          <div id="inquirySuccessCard" class="success-card">
            <div class="success-icon-wrap">✓</div>
            <h3 class="success-title">Project Request Confirmed, <span id="successClientName">Partner</span>!</h3>
            <p class="success-desc">
              Your customized scope specification has been routed directly to our Dubai Strategy Desk at Burjuman Business Tower. A Senior UAE Growth Consultant will review your parameters and follow up within 2 business hours.
            </p>
            <div class="success-ref-code">Reference ID: <span id="successRefCode">ZEN-UAE-8942</span></div>
            <div class="success-actions">
              <a href="https://wa.me/971563996631" target="_blank" class="hub-primary-btn">
                <span>Fast-Track on WhatsApp</span>
                <span>→</span>
              </a>
              <button onclick="window.location.reload()" class="hub-secondary-btn">Submit Another Scope</button>
            </div>
          </div>

        </div>

        <!-- Right: Sticky Live Project Scope Snapshot -->
        <aside class="scope-summary-card">
          <div class="scope-summary-header">
            <div class="scope-header-title">Live Scope Snapshot</div>
            <div class="scope-live-badge">
              <div class="scope-badge-dot"></div>
              <span>Real-Time Calc</span>
            </div>
          </div>

          <!-- Selected Services Tags -->
          <div class="scope-metric-row">
            <div class="scope-metric-label">Capabilities Enclosed (<span id="scopeSelectedCount">2 Selected</span>)</div>
            <div class="scope-tags-container" id="scopeSelectedServicesList">
              <span class="scope-tag-item">SEO &amp; Search Marketing</span>
              <span class="scope-tag-item">Custom Web &amp; E-Commerce</span>
            </div>
          </div>

          <!-- Recommended Pod -->
          <div class="scope-pod-highlight">
            <div class="scope-metric-label" style="color:var(--brand-flamingo, #f26934);">Recommended UAE Execution Pod</div>
            <div class="scope-pod-name" id="scopePodName">Unified Omnichannel Dominance Squad</div>
            <div class="scope-pod-desc" id="scopePodDesc">
              Dedicated full-stack growth team: Senior Technical SEO Lead, Performance Media Buyer, and Full-Stack Web Engineers.
            </div>
          </div>

          <!-- Deliverables List -->
          <div class="scope-metric-row">
            <div class="scope-metric-label">Estimated Key Deliverables</div>
            <ul class="scope-deliverables-list" id="scopeDeliverables">
              <li class="scope-deliverable-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Cross-channel ROAS &amp; conversion tracking audit</span>
              </li>
              <li class="scope-deliverable-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Bilingual UAE search architecture &amp; landing pages</span>
              </li>
              <li class="scope-deliverable-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Sub-second TTFB infrastructure optimization</span>
              </li>
              <li class="scope-deliverable-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Bi-weekly sprint reviews &amp; WhatsApp direct SLA</span>
              </li>
            </ul>
          </div>

          <!-- Trust & SLA Highlights -->
          <div class="scope-trust-footer">
            <div class="scope-trust-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Lead Lead: Jithin George &amp; Senior UAE Account Director</span>
            </div>
            <div class="scope-trust-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Response SLA: &lt; 2 Hours during UAE Business Hours</span>
            </div>
            <div class="scope-trust-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Standard Non-Disclosure Agreement (NDA) on Request</span>
            </div>
          </div>

        </aside>

      </div>
    </div>
  </section>

  <!-- ========================================================================
       4. Strategist 1-on-1 Consultation Booking (Jithin George)
       ======================================================================== -->
  <section class="section_strategist_booking" id="book-consultation">
    <div class="strategist-booking-container">
      <div class="strategist-grid">
        
        <!-- Strategist Profile Card -->
        <div class="strategist-card">
          <div>
            <div class="strategist-profile-header">
              <img src="{{ asset('assets/images/team/jithin-george.webp') }}" alt="Jithin George - Senior UAE Digital Marketing Consultant" class="strategist-portrait"/>
              <div>
                <h3 class="strategist-name">Jithin George</h3>
                <div class="strategist-role">UAE Digital Marketing Consultant &amp; Growth Director</div>
                <div class="strategist-rating">
                  <span class="star-amber">★★★★★</span>
                  <span>4.9 / 5.0 Rating (80+ Verified Client Reviews)</span>
                </div>
              </div>
            </div>

            <p class="strategist-bio">
              UAE Digital Marketing Consultant with <strong>10+ years of proven expertise</strong> in technical SEO, brand architecture, and performance marketing across Dubai and the wider UAE market. Speak directly with a senior strategist to diagnose your current acquisition bottlenecks and establish a practical growth blueprint.
            </p>

            <div class="strategist-credentials">
              <div class="cred-item">
                <div class="cred-val">10+ Yrs</div>
                <div class="cred-lbl">UAE Mastery</div>
              </div>
              <div class="cred-item">
                <div class="cred-val">150+</div>
                <div class="cred-lbl">Campaigns Led</div>
              </div>
              <div class="cred-item">
                <div class="cred-val">AED 85M+</div>
                <div class="cred-lbl">Tracked Revenue</div>
              </div>
            </div>
          </div>

          <div class="strategist-social-links">
            <a href="https://ae.linkedin.com/in/jithin-zenerom" target="_blank" class="strategist-linkedin-btn">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
              </svg>
              <span>Connect on LinkedIn</span>
            </a>
            <a href="https://wa.me/971563996631?text=Hello%20Jithin%20George%2C%20I%20would%20like%20to%20discuss%20a%20digital%20marketing%20strategy%20for%20my%20business." target="_blank" class="hub-secondary-btn" style="padding:10px 18px; font-size:0.875rem;">
              <span>Direct WhatsApp</span>
            </a>
          </div>
        </div>

        <!-- Interactive 30-Min Discovery Slot Picker -->
        <div class="booking-calendar-card">
          <div>
            <div class="calendar-header">
              <div class="calendar-eyebrow">Direct 1-on-1 Discovery Session</div>
              <h3 class="calendar-title">Select Your Preferred 30-Min Growth Discovery Slot</h3>
              <p class="calendar-desc">
                Choose a time that suits your schedule. We will prepare an preliminary competitor overview prior to our call.
              </p>
            </div>

            <!-- Dynamic Weekday Picker -->
            <div class="day-selector-wrap">
              <div class="selector-subhead">1. Select Available Day (Upcoming Weekdays)</div>
              <div class="days-chips-row">
                <!-- Dynamically populated by contact.js -->
                <div class="day-chip is-active">
                  <div class="day-name">Mon</div>
                  <div class="day-date">19</div>
                </div>
              </div>
            </div>

            <!-- Slot Picker -->
            <div class="slot-selector-wrap">
              <div class="selector-subhead">2. Select Available Slot (GST - Gulf Standard Time)</div>
              <div class="slots-grid">
                <div class="slot-chip" data-time="10:00 AM">10:00 AM</div>
                <div class="slot-chip is-active" data-time="11:30 AM">11:30 AM</div>
                <div class="slot-chip" data-time="02:00 PM">02:00 PM</div>
                <div class="slot-chip" data-time="03:30 PM">03:30 PM</div>
                <div class="slot-chip" data-time="05:00 PM">05:00 PM</div>
              </div>
            </div>

            <!-- Selection Box -->
            <div class="slot-confirmation-box">
              <div class="slot-selected-text">Proposed Meeting Slot:</div>
              <div class="slot-selected-val" id="selectedSlotDisplay">Mon, Oct 19 at 11:30 AM (GST)</div>
            </div>
          </div>

          <button id="bookSlotBtn" class="book-slot-btn">
            Reserve 30-Min Strategy Call on WhatsApp / Calendar →
          </button>
        </div>

      </div>
    </div>
  </section>

  <!-- ========================================================================
       5. Global Presence & Worldwide Hubs (Dark Theme Section)
       ======================================================================== -->
  <section class="section_global_presence" id="global-hubs">
    <div class="contact-hero-container">
      
      <div class="global-presence-header">
        <div class="global-presence-eyebrow">
          <span>Our Global Footprint</span>
        </div>
        <h2 class="global-presence-title">
          Strategic Offices Across <span class="highlight-text">4 Continents</span>
        </h2>
        <p class="global-presence-desc">
          Headquartered at Burjuman Business Tower in Dubai, with dedicated operational and engineering desks in Edinburgh, Kochi, and Sydney to provide seamless 24/7 client delivery.
        </p>
      </div>

      <!-- Hub Selector Tabs -->
      <div class="hub-tabs-row">
        <button class="hub-tab-btn is-active" data-hub="dubai">
          <span>🇦🇪 Dubai, UAE (Global HQ)</span>
        </button>
        <button class="hub-tab-btn" data-hub="edinburgh">
          <span>🇬🇧 Edinburgh, UK</span>
        </button>
        <button class="hub-tab-btn" data-hub="kochi">
          <span>🇮🇳 Kochi, India (Creative Lab)</span>
        </button>
        <button class="hub-tab-btn" data-hub="sydney">
          <span>🇦🇺 Sydney, Australia</span>
        </button>
      </div>

      <!-- Hub Details Grid -->
      <div class="hub-display-grid">
        
        <!-- Left: Hub Info Card -->
        <div class="hub-card">
          <div>
            <h3 class="hub-card-title" id="hubTitle">Main Office - Dubai, UAE</h3>
            <div class="hub-tagline" id="hubTagline">Headquarters &amp; Middle East Strategic Operations Hub</div>

            <div class="hub-info-rows">
              
              <div class="hub-info-row">
                <div class="hub-info-icon">📍</div>
                <div class="hub-info-content">
                  <div class="hub-info-label">Physical Address</div>
                  <div class="hub-info-text" id="hubAddress">
                    Burjuman Business Tower, Business Tower - Burjuman - Office No:929, 9th Floor - Dubai, UAE
                  </div>
                </div>
              </div>

              <div class="hub-info-row">
                <div class="hub-info-icon">📞</div>
                <div class="hub-info-content">
                  <div class="hub-info-label">Direct Lines</div>
                  <div class="hub-info-text">
                    <a href="tel:+971563996631" id="hubPhone">+971 56 399 6631 / +971 50 876 4885</a>
                  </div>
                </div>
              </div>

              <div class="hub-info-row">
                <div class="hub-info-icon">✉️</div>
                <div class="hub-info-content">
                  <div class="hub-info-label">Official Correspondence</div>
                  <div class="hub-info-text">
                    <a href="mailto:info@zenerom.ae" id="hubEmail">info@zenerom.ae</a>
                  </div>
                </div>
              </div>

              <div class="hub-info-row">
                <div class="hub-info-icon">⏰</div>
                <div class="hub-info-content">
                  <div class="hub-info-label">Working Hours &amp; Live Time</div>
                  <div class="hub-info-text">
                    <span id="hubHours">Mon – Fri: 9:00 AM – 6:00 PM (GST)</span> &bull; 
                    <strong id="hubLiveClock" style="color:var(--brand-flamingo, #f26934);">--:--:-- GST</strong>
                  </div>
                </div>
              </div>

              <div class="hub-info-row">
                <div class="hub-info-icon">🚇</div>
                <div class="hub-info-content">
                  <div class="hub-info-label">Transit &amp; Parking</div>
                  <div class="hub-info-text" id="hubDirections">
                    2 min walk from Burjuman Metro Station (Interchange of Red &amp; Green lines). Dedicated visitor parking available.
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="hub-actions-row">
            <a href="https://maps.app.goo.gl/YB8PbiqWgDRdVAZ46" target="_blank" id="hubExternalMapBtn" class="hub-primary-btn">
              <span>Open in Google Maps</span>
              <span>↗</span>
            </a>
            <a href="tel:+971563996631" id="hubDirectActionBtn" class="hub-secondary-btn">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
              </svg>
              <span>Call Dubai HQ</span>
            </a>
          </div>

        </div>

        <!-- Right: Map Frame & Landmark Details -->
        <div class="hub-map-card">
          <div class="hub-map-frame-wrap">
            <iframe 
              id="hubMapFrame"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.889370830743!2d55.2998638!3d25.2507851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4339908ca783%3A0xe968846c4f923c68!2sBurJuman%20Business%20Tower!5e0!3m2!1sen!2sae!4v1700000000000!5m2!1sen!2sae" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade"
              title="Zenerom Office Location Map">
            </iframe>
          </div>
          <div class="hub-map-details">
            <div class="map-details-title">Burjuman Business Tower &bull; 9th Floor</div>
            <p class="map-details-desc">
              Direct access via Burjuman Mall lobby elevators. High-security corporate reception on Level 9. In-person strategy sessions by appointment.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================================================
       6. Direct Department Channels Matrix
       ======================================================================== -->
  <section class="section_departments">
    <div class="contact-hero-container">
      
      <div class="departments-header">
        <h2 class="inquiry-title" style="margin-bottom:12px;">Which Specialized Team Do You Need?</h2>
        <p class="inquiry-desc">
          Reach our dedicated departmental leads directly for rapid routing and zero administrative delay.
        </p>
      </div>

      <div class="dept-grid">
        
        <!-- Paid Ads -->
        <div class="dept-card">
          <div>
            <div class="dept-icon">🎯</div>
            <h3 class="dept-title">Performance Media</h3>
            <p class="dept-desc">Google Ads, Meta Ads, TikTok campaigns, high-intent lead gen funnels, and programmatic CRO audits.</p>
          </div>
          <a href="tel:+971563996631" class="dept-contact-link">
            <span>Call Media Desk</span>
            <span>→</span>
          </a>
        </div>

        <!-- SEO -->
        <div class="dept-card">
          <div>
            <div class="dept-icon">📈</div>
            <h3 class="dept-title">SEO &amp; Local Dominance</h3>
            <p class="dept-desc">Bilingual English/Arabic search architecture, Google Maps 3-Pack rankings, and enterprise technical audits.</p>
          </div>
          <a href="tel:+971508764885" class="dept-contact-link">
            <span>Call SEO Desk</span>
            <span>→</span>
          </a>
        </div>

        <!-- Web & Software -->
        <div class="dept-card">
          <div>
            <div class="dept-icon">⚡</div>
            <h3 class="dept-title">Web &amp; IT Squads</h3>
            <p class="dept-desc">Headless commerce, mobile apps, Zoho CRM workflows, and dedicated offshore engineering squads.</p>
          </div>
          <a href="mailto:info@zenerom.ae?subject=Engineering%20Squad%20Inquiry" class="dept-contact-link">
            <span>Email Tech Desk</span>
            <span>→</span>
          </a>
        </div>

        <!-- Careers & Creative -->
        <div class="dept-card">
          <div>
            <div class="dept-icon">✨</div>
            <h3 class="dept-title">Talent &amp; Creative Lab</h3>
            <p class="dept-desc">Senior copywriters, art directors, digital specialists, and regional partnership alliances.</p>
          </div>
          <a href="mailto:info@zenerom.ae?subject=Career%20Application%20or%20Partnership" class="dept-contact-link">
            <span>Reach Creative Lab</span>
            <span>→</span>
          </a>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================================================
       7. 150k Community & Omnichannel Network
       ======================================================================== -->
  <section class="section_community">
    <div class="contact-hero-container">
      
      <div class="community-header">
        <div class="community-eyebrow">Connect Across The Ecosystem</div>
        <h2 class="community-title">Joined Our Community 150k Creators &amp; Leaders</h2>
        <p class="community-desc">
          The future of marketing is here. Follow Zenerom for deep-dive GCC marketing teardowns, engineering benchmarks, and growth playbooks.
        </p>
      </div>

      <div class="social-chips-grid">
        
        <a href="https://wa.me/971563996631" target="_blank" class="social-network-pill">
          <span class="social-pill-icon">💬</span>
          <span>WhatsApp</span>
        </a>

        <a href="https://in.linkedin.com/company/zenerom" target="_blank" class="social-network-pill">
          <span class="social-pill-icon">💼</span>
          <span>LinkedIn</span>
        </a>

        <a href="https://www.instagram.com/zenerom.uae" target="_blank" class="social-network-pill">
          <span class="social-pill-icon">📸</span>
          <span>Instagram</span>
        </a>

        <a href="https://www.facebook.com/Zeneromuae" target="_blank" class="social-network-pill">
          <span class="social-pill-icon">👥</span>
          <span>Facebook</span>
        </a>

        <a href="https://www.youtube.com/channel/UCa9rY5mmG7k3gmfuLEW8VKg" target="_blank" class="social-network-pill">
          <span class="social-pill-icon">▶️</span>
          <span>YouTube</span>
        </a>

        <a href="https://x.com/Zenerom_uae" target="_blank" class="social-network-pill">
          <span class="social-pill-icon">✖️</span>
          <span>X (Twitter)</span>
        </a>

        <a href="https://www.tiktok.com/@zenerom.uae" target="_blank" class="social-network-pill">
          <span class="social-pill-icon">🎵</span>
          <span>TikTok</span>
        </a>

        <a href="https://www.behance.net/ZeneromCreativeLab" target="_blank" class="social-network-pill">
          <span class="social-pill-icon">🎨</span>
          <span>Behance</span>
        </a>

        <a href="https://www.pinterest.com/zenerom_dubai/" target="_blank" class="social-network-pill">
          <span class="social-pill-icon">📌</span>
          <span>Pinterest</span>
        </a>

        <a href="https://medium.com/@zenerom" target="_blank" class="social-network-pill">
          <span class="social-pill-icon">✍️</span>
          <span>Medium</span>
        </a>

        <a href="https://www.quora.com/profile/Zenerom-Digital-Marketing-Agency-Dubai" target="_blank" class="social-network-pill">
          <span class="social-pill-icon">❓</span>
          <span>Quora</span>
        </a>

        <a href="https://www.reddit.com/user/zenerom_Dubai/" target="_blank" class="social-network-pill">
          <span class="social-pill-icon">🤖</span>
          <span>Reddit</span>
        </a>

      </div>

    </div>
  </section>

  <!-- ========================================================================
       8. Contact & Partnership FAQ Accordion
       ======================================================================== -->
  <section class="section_contact_faq">
    <div class="contact-hero-container">
      <div class="contact-faq-wrapper">
        
        <div class="contact-faq-header">
          <div class="inquiry-header-eyebrow">Clear Communication &bull; Swift Onboarding</div>
          <h2 class="inquiry-title">Frequently Asked Questions</h2>
        </div>

        <div class="contact-faq-list">
          
          <!-- FAQ 1 -->
          <div class="contact-faq-item is-open">
            <button class="faq-trigger" aria-expanded="true">
              <span class="faq-question-text">How quickly will our initial inquiry be acknowledged?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer-panel" style="max-height: 200px;">
              <div class="faq-answer-inner">
                During standard UAE business hours (Monday to Friday, 9:00 AM – 6:00 PM GST), our strategy team acknowledges and reviews inquiries within <strong>under 2 hours</strong>. If you require immediate attention, you can also reach us via direct WhatsApp at <a href="https://wa.me/971563996631" style="color:var(--brand-flamingo, #f26934); font-weight:600;">+971 56 399 6631</a>.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="contact-faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-question-text">Can we schedule an in-person meeting at your Burjuman Business Tower office in Dubai?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer-panel">
              <div class="faq-answer-inner">
                Yes, absolutely. We welcome founders, marketing directors, and enterprise leadership to our flagship office at Burjuman Business Tower, 9th Floor, Office 929. We simply request that in-person meetings be scheduled at least 24 hours in advance so our senior strategists can assemble relevant sector data and market audits beforehand.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="contact-faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-question-text">Do you sign Non-Disclosure Agreements (NDAs) prior to project scoping?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer-panel">
              <div class="faq-answer-inner">
                Yes. We frequently work with confidential product releases, fintech systems, healthcare platforms, and proprietary sales pipelines. We provide our standard bilateral UAE NDA or can execute your organization's legal NDA before receiving any ad account accesses or code repos.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="contact-faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-question-text">Can Zenerom audit our current marketing campaigns or website before we commit?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer-panel">
              <div class="faq-answer-inner">
                Yes. For qualifying UAE enterprises and scale-ups, we offer a preliminary <strong>Technical SEO &amp; Paid Media Opportunity Audit</strong>. This uncovers wasted ad spend, search cannibalization, and tracking misconfigurations before you commit to an active retainer.
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="contact-faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-question-text">How does Zenerom coordinate with clients outside the United Arab Emirates?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer-panel">
              <div class="faq-answer-inner">
                With operating desks in Edinburgh (covering UK &amp; European timezones) and Sydney (covering Asia-Pacific), we maintain continuous communication across multiple business hours. International clients receive dedicated Slack or WhatsApp channels and bi-weekly sprint reviews via Google Meet or Zoom.
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="contact-faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-question-text">What information is most helpful to provide during our discovery call?</span>
              <span class="faq-toggle-icon">+</span>
            </button>
            <div class="faq-answer-panel">
              <div class="faq-answer-inner">
                To maximize our 30-minute discovery session, having your primary growth bottleneck (e.g. high CAC, low organic leads, slow website TTFB), your current monthly acquisition budget, and your target commercial milestones handy allows us to jump straight into high-leverage strategic recommendations.
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- ========================================================================
       9. Canonical Global Footer
       ======================================================================== -->

  @push('scripts')
    <script src="{{ asset('js/contact.js?v=81') }}"></script>
  @endpush
</x-layouts.app>
