<x-layouts.app>
  <x-slot:title>Industries | Zenerom Dubai Digital Growth, SEO & Enterprise Tech</x-slot:title>
  <x-slot:description>Explore Zenerom's vertical digital growth solutions for UAE industries: Real Estate Developers, E-Commerce, Healthcare & Clinics, Hospitality, B2B Industrial, Education, Corporate Setup, and Automotive.</x-slot:description>

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/industries.css?v=1') }}"/>
  @endpush

<!-- ========================================================================
       2. Hero Section: Vertical Specializations
       ======================================================================== -->
  <section class="industries-hero">
    <div class="w-layout-blockcontainer container w-container">
      <div class="industries-hero-header">
        <div class="industries-eyebrow">
          <span class="industries-eyebrow-dot"></span>
          VERTICAL SPECIALIZATIONS &bull; UAE SECTOR BLUEPRINTS
        </div>
        <h1 class="industries-hero-title">
          Engineered Digital Growth for <span class="highlight-text">UAE's High-Stakes Industries</span>
        </h1>
        <p class="industries-hero-desc">
          Generic marketing playbooks fail in the UAE. From off-plan luxury real estate and omnichannel retail to MOHAP-compliant clinics, B2B industrial hubs, and private academies—Zenerom architects vertical-specific ecosystems, localized SEO dominance, and high-converting acquisition engines that outperform the market.
        </p>

        <!-- Quick Anchor Jump Bar -->
        <div class="industries-quick-nav">
          <a href="#real-estate" class="industry-chip-btn"><span class="chip-dot"></span>Real Estate &amp; Off-Plan</a>
          <a href="#ecommerce" class="industry-chip-btn"><span class="chip-dot"></span>E-Commerce &amp; Retail</a>
          <a href="#healthcare" class="industry-chip-btn"><span class="chip-dot"></span>Healthcare &amp; Clinics</a>
          <a href="#hospitality" class="industry-chip-btn"><span class="chip-dot"></span>Hospitality &amp; Tourism</a>
          <a href="#industrial" class="industry-chip-btn"><span class="chip-dot"></span>B2B &amp; Logistics</a>
          <a href="#education" class="industry-chip-btn"><span class="chip-dot"></span>Education &amp; Academies</a>
          <a href="#corporate" class="industry-chip-btn"><span class="chip-dot"></span>Corporate &amp; Setup</a>
          <a href="#automotive" class="industry-chip-btn"><span class="chip-dot"></span>Automotive &amp; Mobility</a>
        </div>

        <!-- Verified Proof-Points Metrics Row -->
        <div class="industries-metrics-row">
          <div class="industries-metric-card">
            <div class="industries-metric-val" data-target="10" data-suffix="+">10+</div>
            <div class="industries-metric-lbl">Years UAE Market Mastery</div>
          </div>
          <div class="industries-metric-card">
            <div class="industries-metric-val" data-target="8" data-suffix=" Verticals">8 Verticals</div>
            <div class="industries-metric-lbl">Specialized Sector Architectures</div>
          </div>
          <div class="industries-metric-card">
            <div class="industries-metric-val" data-target="412" data-prefix="+" data-suffix="%">+412%</div>
            <div class="industries-metric-lbl">Peak Organic Revenue Surge</div>
          </div>
          <div class="industries-metric-card">
            <div class="industries-metric-val" data-target="4.9" data-suffix="★">4.9★</div>
            <div class="industries-metric-lbl">Google Verified Agency Rating</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       3. Segmented In-Flow Sector Filter Controller
       ======================================================================== -->
  <section class="industries-filter-section">
    <div class="w-layout-blockcontainer container w-container">
      <div class="industries-filter-header">
        <div class="industries-filter-eyebrow">&bull; SECTOR SELECTOR</div>
        <h2 class="industries-filter-title">Filter by Industry Vertical</h2>
        <p class="industries-filter-subtitle">
          Select an industry to review its engineered technology stack, verified UAE client case study, and core deliverables.
        </p>
      </div>

      <div class="industries-filter-wrap">
        <button type="button" class="ind-filter-btn active" data-filter="all">All Verticals</button>
        <button type="button" class="ind-filter-btn" data-filter="real-estate">Real Estate</button>
        <button type="button" class="ind-filter-btn" data-filter="ecommerce">E-Commerce</button>
        <button type="button" class="ind-filter-btn" data-filter="healthcare">Healthcare</button>
        <button type="button" class="ind-filter-btn" data-filter="hospitality">Hospitality</button>
        <button type="button" class="ind-filter-btn" data-filter="industrial">B2B &amp; Logistics</button>
        <button type="button" class="ind-filter-btn" data-filter="education">Education</button>
        <button type="button" class="ind-filter-btn" data-filter="corporate">Corporate &amp; Setup</button>
        <button type="button" class="ind-filter-btn" data-filter="automotive">Automotive</button>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       4. Showcase 01: Real Estate & Luxury Living (Light Section)
       ======================================================================== -->
  <section class="section_industries_showcase" id="section-real-estate">
    <div class="w-layout-blockcontainer container w-container">
      <div class="industry-feature-block" id="real-estate" data-category="real-estate">
        <div class="industry-feature-content">
          <div class="industry-tag-pill">&bull; 01 / LUXURY PROPERTY &amp; INFRASTRUCTURE</div>
          <h2 class="industry-feature-title">Real Estate &amp; Property Developers</h2>
          <div class="industry-feature-subtitle">Off-Plan Lead Engines, International Investor Acquisition &amp; CRM Pipeline Automation</div>
          <p class="industry-feature-desc">
            Dubai's real estate market operates on extreme speed and international investor targeting. We break dependency on high-fee portals (Bayut, Property Finder) by building direct high-intent acquisition engines on Meta and Google Search, paired with sub-second multilingual landing pages and automated Zoho/Salesforce CRM routing.
          </p>

          <!-- Authentic Case Study Proof Box -->
          <div class="industry-proof-card">
            <div class="ind-proof-left">
              <div class="ind-client-badge">PROVEN RESULT</div>
              <div>
                <div class="ind-proof-title">RFS Remodeling Group &amp; Luxury Prime Developers</div>
                <div class="ind-proof-sub">Hyper-targeted Meta Ads &amp; Instant WhatsApp Virtual Tour Booking</div>
              </div>
            </div>
            <div class="ind-proof-stat">
              <div class="ind-stat-number">531+ Leads</div>
              <div class="ind-stat-label">AED 180M+ Pipeline Generated</div>
            </div>
          </div>

          <!-- 4 Strategic Deliverables -->
          <div class="industry-deliverables-grid">
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Hyper-targeted Meta &amp; Google off-plan campaigns</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Sub-1s bilingual Arabic-English investor pages</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>WhatsApp Cloud API instant brochure &amp; VIP booking</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Google Maps 3-Pack supremacy for prime localities</span>
            </div>
          </div>

          <div class="industry-cta-block">
            <a href="https://wa.me/971563996631?text=Hello%20Zenerom,%20I%20am%20interested%20in%20Real%20Estate%20growth%20solutions" target="_blank" class="ind-btn-primary">
              Consult Real Estate Specialist
            </a>
            <a href="{{ route('contact') }}" class="ind-btn-secondary">Request Sector Blueprint</a>
          </div>
        </div>

        <div class="industry-feature-visual">
          <div class="ind-visual-card">
            <img src="{{ asset('assets/images/industries/real-estate.jpg') }}" alt="Zenerom Real Estate Growth Architecture" class="ind-visual-img" loading="lazy" />
            <div class="ind-visual-overlay"></div>
            <div class="ind-visual-badge">
              <div class="ind-visual-badge-left">
                <span class="ind-live-indicator"></span>
                <div>
                  <div class="ind-badge-title">Dubai Marina &amp; Palm Jumeirah</div>
                  <div class="ind-badge-sub">Off-Plan Investor Funnels Active</div>
                </div>
              </div>
              <span class="ind-badge-pill">Sub-20s Lead Routing</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       5. Showcase 02: E-Commerce & Luxury Retail (Dark Section)
       ======================================================================== -->
  <section class="section_industries_showcase dark-bg" id="section-ecommerce">
    <div class="w-layout-blockcontainer container w-container">
      <div class="industry-feature-block reverse" id="ecommerce" data-category="ecommerce">
        <div class="industry-feature-content">
          <div class="industry-tag-pill">&bull; 02 / E-COMMERCE &amp; LUXURY RETAIL</div>
          <h2 class="industry-feature-title">E-Commerce &amp; High-End Retail</h2>
          <div class="industry-feature-subtitle">Sub-Second Headless Commerce, Omnichannel Retention &amp; Google PMax Scaling</div>
          <p class="industry-feature-desc">
            Slow storefronts and generic templates kill checkout conversions in the GCC. Zenerom builds ultra-fast headless Shopify and Next.js commerce engines equipped with Tabby and Tamara buy-now-pay-later integrations, automated WhatsApp abandoned cart recovery, and high-ROAS Performance Max campaigns across the UAE and Saudi Arabia.
          </p>

          <!-- Authentic Case Study Proof Box -->
          <div class="industry-proof-card">
            <div class="ind-proof-left">
              <div class="ind-client-badge">VERIFIED CASE STUDY</div>
              <div>
                <div class="ind-proof-title">Florkett UAE (Luxury Fragrance &amp; Lifestyle)</div>
                <div class="ind-proof-sub">Full technical SEO overhaul, headless speed optimization &amp; Google Shopping</div>
              </div>
            </div>
            <div class="ind-proof-stat">
              <div class="ind-stat-number">+412% Revenue</div>
              <div class="ind-stat-label">3.8x ROAS on Google PMax</div>
            </div>
          </div>

          <!-- 4 Strategic Deliverables -->
          <div class="industry-deliverables-grid">
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Headless Next.js architecture with sub-0.8s mobile TTFB</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>WhatsApp automated abandoned cart recovery (35% rate)</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Native Tabby &amp; Tamara split-payment checkout flows</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Pan-GCC multi-currency &amp; bilingual product catalog SEO</span>
            </div>
          </div>

          <div class="industry-cta-block">
            <a href="https://wa.me/971563996631?text=Hello%20Zenerom,%20I%20am%20interested%20in%20E-Commerce%20growth%20solutions" target="_blank" class="ind-btn-primary">
              Consult E-Commerce Specialist
            </a>
            <a href="{{ route('contact') }}" class="ind-btn-secondary">Request Commerce Audit</a>
          </div>
        </div>

        <div class="industry-feature-visual">
          <div class="ind-visual-card">
            <img src="{{ asset('assets/images/industries/ecommerce.jpg') }}" alt="Zenerom Luxury E-Commerce Solutions" class="ind-visual-img" loading="lazy" />
            <div class="ind-visual-overlay"></div>
            <div class="ind-visual-badge">
              <div class="ind-visual-badge-left">
                <span class="ind-live-indicator"></span>
                <div>
                  <div class="ind-badge-title">Pan-GCC Omnichannel Storefront</div>
                  <div class="ind-badge-sub">Tabby &amp; Tamara Live Gateways</div>
                </div>
              </div>
              <span class="ind-badge-pill">0.8s Mobile TTFB</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       6. Showcase 03: Healthcare, Clinics & Medical Wellness (Light Section)
       ======================================================================== -->
  <section class="section_industries_showcase" id="section-healthcare">
    <div class="w-layout-blockcontainer container w-container">
      <div class="industry-feature-block" id="healthcare" data-category="healthcare">
        <div class="industry-feature-content">
          <div class="industry-tag-pill">&bull; 03 / HEALTHCARE &amp; MEDICAL WELLNESS</div>
          <h2 class="industry-feature-title">Healthcare, Clinics &amp; Aesthetic Medicine</h2>
          <div class="industry-feature-subtitle">MOHAP/DHA-Compliant Medical SEO, Local Maps Dominance &amp; Patient Trust Funnels</div>
          <p class="industry-feature-desc">
            Medical marketing in the UAE demands strict adherence to Ministry of Health (MOHAP) and Dubai Health Authority (DHA) advertising regulations. Zenerom engineers high-authority organic medical SEO, builds accredited doctor profile credentials, and deploys frictionless WhatsApp consultation booking engines that maximize patient acquisition while staying 100% compliant.
          </p>

          <!-- Authentic Case Study Proof Box -->
          <div class="industry-proof-card">
            <div class="ind-proof-left">
              <div class="ind-client-badge">CLINICAL TRACK RECORD</div>
              <div>
                <div class="ind-proof-title">H2O Care &amp; Specialized UAE Medical Clinics</div>
                <div class="ind-proof-sub">Compliant patient acquisition, local Google 3-Pack &amp; WhatsApp appointment bots</div>
              </div>
            </div>
            <div class="ind-proof-stat">
              <div class="ind-stat-number">+280% Consults</div>
              <div class="ind-stat-label">99.4% Regulatory Ad Approval</div>
            </div>
          </div>

          <!-- 4 Strategic Deliverables -->
          <div class="industry-deliverables-grid">
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>100% MOHAP &amp; DHA advertising regulation compliance</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Google Maps 3-Pack dominance across Dubai &amp; Abu Dhabi</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Doctor EEAT authority &amp; clinical treatment schema markup</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Automated WhatsApp appointment booking &amp; SMS reminders</span>
            </div>
          </div>

          <div class="industry-cta-block">
            <a href="https://wa.me/971563996631?text=Hello%20Zenerom,%20I%20am%20interested%20in%20Healthcare%20growth%20solutions" target="_blank" class="ind-btn-primary">
              Consult Healthcare Strategist
            </a>
            <a href="{{ route('contact') }}" class="ind-btn-secondary">Request Compliance Review</a>
          </div>
        </div>

        <div class="industry-feature-visual">
          <div class="ind-visual-card">
            <img src="{{ asset('assets/images/industries/healthcare.jpg') }}" alt="Zenerom Healthcare & Clinic Digital Marketing" class="ind-visual-img" loading="lazy" />
            <div class="ind-visual-overlay"></div>
            <div class="ind-visual-badge">
              <div class="ind-visual-badge-left">
                <span class="ind-live-indicator"></span>
                <div>
                  <div class="ind-badge-title">Dubai Healthcare City &amp; Jumeirah</div>
                  <div class="ind-badge-sub">MOHAP-Compliant Patient Funnels</div>
                </div>
              </div>
              <span class="ind-badge-pill">4.9★ Patient Trust</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       7. Showcase 04: Hospitality, Tourism & Fine Dining (Dark Section)
       ======================================================================== -->
  <section class="section_industries_showcase dark-bg" id="section-hospitality">
    <div class="w-layout-blockcontainer container w-container">
      <div class="industry-feature-block reverse" id="hospitality" data-category="hospitality">
        <div class="industry-feature-content">
          <div class="industry-tag-pill">&bull; 04 / HOSPITALITY, TOURISM &amp; GASTRONOMY</div>
          <h2 class="industry-feature-title">Hospitality, Tourism, Travel &amp; F&amp;B</h2>
          <div class="industry-feature-subtitle">Direct Reservation Engines, OTA Fee Reduction &amp; Experiential Social Footfall</div>
          <p class="industry-feature-desc">
            Heavy reliance on Booking.com, TripAdvisor, and food delivery apps drains 20% to 30% of hospitality margins. Zenerom builds commission-free direct booking engines, experiential short-form video advertising on Meta and TikTok, and local Google Maps supremacy that drives high-ticket footfall and international tourist bookings directly to your business.
          </p>

          <!-- Authentic Case Study Proof Box -->
          <div class="industry-proof-card">
            <div class="ind-proof-left">
              <div class="ind-client-badge">PROVEN PORTFOLIO</div>
              <div>
                <div class="ind-proof-title">Tourzone UAE &amp; Farm City Dubai Restaurant</div>
                <div class="ind-proof-sub">Bespoke booking platform, tourist SEO, and dynamic dining footfall acceleration</div>
              </div>
            </div>
            <div class="ind-proof-stat">
              <div class="ind-stat-number">+320% Inquiries</div>
              <div class="ind-stat-label">-24% Dependency on OTAs</div>
            </div>
          </div>

          <!-- 4 Strategic Deliverables -->
          <div class="industry-deliverables-grid">
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Commission-free direct booking &amp; table reservation engines</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Experiential Instagram &amp; TikTok reel production</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Multilingual tourist SEO for seasonal Dubai travel peaks</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>SevenRooms, OpenTable &amp; CRM guest retention sync</span>
            </div>
          </div>

          <div class="industry-cta-block">
            <a href="https://wa.me/971563996631?text=Hello%20Zenerom,%20I%20am%20interested%20in%20Hospitality%20growth%20solutions" target="_blank" class="ind-btn-primary">
              Consult Hospitality Strategist
            </a>
            <a href="{{ route('contact') }}" class="ind-btn-secondary">Request Booking Blueprint</a>
          </div>
        </div>

        <div class="industry-feature-visual">
          <div class="ind-visual-card">
            <img src="{{ asset('assets/images/industries/hospitality.jpg') }}" alt="Zenerom Hospitality & Tourism Growth Solutions" class="ind-visual-img" loading="lazy" />
            <div class="ind-visual-overlay"></div>
            <div class="ind-visual-badge">
              <div class="ind-visual-badge-left">
                <span class="ind-live-indicator"></span>
                <div>
                  <div class="ind-badge-title">Dubai Marina Waterfront Dining</div>
                  <div class="ind-badge-sub">Direct Table Reservations Engine</div>
                </div>
              </div>
              <span class="ind-badge-pill">#1 City Search Rank</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       8. Showcase 05: B2B, Logistics & Industrial Supply (Light Section)
       ======================================================================== -->
  <section class="section_industries_showcase" id="section-industrial">
    <div class="w-layout-blockcontainer container w-container">
      <div class="industry-feature-block" id="industrial" data-category="industrial">
        <div class="industry-feature-content">
          <div class="industry-tag-pill">&bull; 05 / B2B LOGISTICS &amp; INDUSTRIAL HUBS</div>
          <h2 class="industry-feature-title">B2B, Logistics &amp; Industrial Supply</h2>
          <div class="industry-feature-subtitle">Enterprise B2B Search Dominance, Multi-Emirate RFQ Portals &amp; Account-Based Marketing</div>
          <p class="industry-feature-desc">
            Industrial manufacturers, freight logistics hubs, and engineering suppliers in JAFZA, DAFZA, and Kizad require sophisticated procurement pathways. We build enterprise B2B SEO architectures that rank for high-value technical keywords, coupled with automated Request For Quotation (RFQ) engines that route qualified commercial inquiries straight into your ERP.
          </p>

          <!-- Authentic Case Study Proof Box -->
          <div class="industry-proof-card">
            <div class="ind-proof-left">
              <div class="ind-client-badge">INDUSTRIAL TRACK RECORD</div>
              <div>
                <div class="ind-proof-title">Voltronix &amp; Statron International</div>
                <div class="ind-proof-sub">Technical B2B authority SEO, industrial portal engineering, and inbound quote pipelines</div>
              </div>
            </div>
            <div class="ind-proof-stat">
              <div class="ind-stat-number">4.8x B2B RFQs</div>
              <div class="ind-stat-label">65% Faster Quote SLA</div>
            </div>
          </div>

          <!-- 4 Strategic Deliverables -->
          <div class="industry-deliverables-grid">
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Enterprise B2B SEO targeting procurement decision-makers</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Automated multi-step RFQ &amp; specification quotation engine</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>LinkedIn Account-Based Marketing (ABM) for UAE enterprises</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Direct bi-directional sync to Zoho CRM, SAP &amp; Salesforce</span>
            </div>
          </div>

          <div class="industry-cta-block">
            <a href="https://wa.me/971563996631?text=Hello%20Zenerom,%20I%20am%20interested%20in%20B2B%20Industrial%20solutions" target="_blank" class="ind-btn-primary">
              Consult Industrial Strategist
            </a>
            <a href="{{ route('contact') }}" class="ind-btn-secondary">Request RFQ Framework</a>
          </div>
        </div>

        <div class="industry-feature-visual">
          <div class="ind-visual-card">
            <img src="{{ asset('assets/images/industries/logistics.jpg') }}" alt="Zenerom B2B & Logistics Digital Solutions" class="ind-visual-img" loading="lazy" />
            <div class="ind-visual-overlay"></div>
            <div class="ind-visual-badge">
              <div class="ind-visual-badge-left">
                <span class="ind-live-indicator"></span>
                <div>
                  <div class="ind-badge-title">JAFZA &amp; Kizad Industrial Hubs</div>
                  <div class="ind-badge-sub">Automated B2B RFQ Pipelines</div>
                </div>
              </div>
              <span class="ind-badge-pill">Top 3 Technical SERP</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       9. Showcase 06: Education, Academies & EdTech (Dark Section)
       ======================================================================== -->
  <section class="section_industries_showcase dark-bg" id="section-education">
    <div class="w-layout-blockcontainer container w-container">
      <div class="industry-feature-block reverse" id="education" data-category="education">
        <div class="industry-feature-content">
          <div class="industry-tag-pill">&bull; 06 / EDUCATION &amp; ATHLETIC ACADEMIES</div>
          <h2 class="industry-feature-title">Education, Academies &amp; EdTech</h2>
          <div class="industry-feature-subtitle">Admissions Growth Funnels, Multi-Campus Inquiries &amp; Parent Nurture Automation</div>
          <p class="industry-feature-desc">
            Education institutions and elite sports academies in the UAE navigate intense seasonal enrollment windows. Zenerom builds high-conversion admission funnels across Google Search and Meta, featuring interactive virtual campus tours and automated WhatsApp document collection that transforms parent inquiries into verified enrollments.
          </p>

          <!-- Authentic Case Study Proof Box -->
          <div class="industry-proof-card">
            <div class="ind-proof-left">
              <div class="ind-client-badge">PROVEN CASE STUDY</div>
              <div>
                <div class="ind-proof-title">LaLiga Academy UAE &amp; Spearhead Training</div>
                <div class="ind-proof-sub">Google Search Ads, sports academy student registrations &amp; corporate training inquiries</div>
              </div>
            </div>
            <div class="ind-proof-stat">
              <div class="ind-stat-number">934 Registrations</div>
              <div class="ind-stat-label">-38% Cost Per Enrolment</div>
            </div>
          </div>

          <!-- 4 Strategic Deliverables -->
          <div class="industry-deliverables-grid">
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Google Search campaigns targeting expat &amp; local families</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Interactive campus virtual tours &amp; facility walk-throughs</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>WhatsApp open-day reminders &amp; automated document collection</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>End-to-end attribution from initial ad click to paid fee</span>
            </div>
          </div>

          <div class="industry-cta-block">
            <a href="https://wa.me/971563996631?text=Hello%20Zenerom,%20I%20am%20interested%20in%20Education%20growth%20solutions" target="_blank" class="ind-btn-primary">
              Consult Education Specialist
            </a>
            <a href="{{ route('contact') }}" class="ind-btn-secondary">Request Admissions Plan</a>
          </div>
        </div>

        <div class="industry-feature-visual">
          <div class="ind-visual-card">
            <img src="{{ asset('assets/images/industries/education.jpg') }}" alt="Zenerom Education & Academy Digital Marketing" class="ind-visual-img" loading="lazy" />
            <div class="ind-visual-overlay"></div>
            <div class="ind-visual-badge">
              <div class="ind-visual-badge-left">
                <span class="ind-live-indicator"></span>
                <div>
                  <div class="ind-badge-title">Dubai Sports City &amp; Knowledge Park</div>
                  <div class="ind-badge-sub">Automated Admissions Pipelines</div>
                </div>
              </div>
              <span class="ind-badge-pill">78% Open Day Turnout</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       10. Showcase 07: Corporate, Legal & Business Setup (Light Section)
       ======================================================================== -->
  <section class="section_industries_showcase" id="section-corporate">
    <div class="w-layout-blockcontainer container w-container">
      <div class="industry-feature-block" id="corporate" data-category="corporate">
        <div class="industry-feature-content">
          <div class="industry-tag-pill">&bull; 07 / CORPORATE &amp; JURISDICTION SETUP</div>
          <h2 class="industry-feature-title">Corporate, Legal &amp; Business Setup Services</h2>
          <div class="industry-feature-subtitle">High-Authority Thought Leadership, Multi-Step Calculators &amp; Verified Investor Inquiries</div>
          <p class="industry-feature-desc">
            With over 60 free zones and mainland jurisdictions in the UAE, competition for "business setup in Dubai" commands some of the highest CPCs in the world. Zenerom builds proprietary jurisdiction cost calculators, authoritative organic search rankings, and automated WhatsApp pre-qualification filters that ensure your consultants only spend time on high-net-worth investors.
          </p>

          <!-- Authentic Case Study Proof Box -->
          <div class="industry-proof-card">
            <div class="ind-proof-left">
              <div class="ind-client-badge">PROVEN PORTFOLIO</div>
              <div>
                <div class="ind-proof-title">CorpCreators, Shuraa Advertising &amp; OnTime Setup</div>
                <div class="ind-proof-sub">Company formation SEO dominance, multi-tier eligibility calculators &amp; CRM pipeline</div>
              </div>
            </div>
            <div class="ind-proof-stat">
              <div class="ind-stat-number">+340% Verified Leads</div>
              <div class="ind-stat-label">100% Pre-Qualification Rate</div>
            </div>
          </div>

          <!-- 4 Strategic Deliverables -->
          <div class="industry-deliverables-grid">
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Multi-tier mainland vs free zone license cost calculators</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Anti-spam phone verification &amp; instant WhatsApp engagement</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Zoho CRM round-robin routing to corporate legal advisors</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>High-authority content ranking for Dubai corporate queries</span>
            </div>
          </div>

          <div class="industry-cta-block">
            <a href="https://wa.me/971563996631?text=Hello%20Zenerom,%20I%20am%20interested%20in%20Corporate%20Setup%20solutions" target="_blank" class="ind-btn-primary">
              Consult Corporate Specialist
            </a>
            <a href="{{ route('contact') }}" class="ind-btn-secondary">Request Setup Playbook</a>
          </div>
        </div>

        <div class="industry-feature-visual">
          <div class="ind-visual-card">
            <img src="{{ asset('assets/images/industries/corporate.jpg') }}" alt="Zenerom Corporate & Business Setup Digital Growth" class="ind-visual-img" loading="lazy" />
            <div class="ind-visual-overlay"></div>
            <div class="ind-visual-badge">
              <div class="ind-visual-badge-left">
                <span class="ind-live-indicator"></span>
                <div>
                  <div class="ind-badge-title">DIFC &amp; Burjuman Business Tower</div>
                  <div class="ind-badge-sub">Foreign Direct Investment Funnels</div>
                </div>
              </div>
              <span class="ind-badge-pill">Free Zone Dominance</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       11. Showcase 08: Automotive, Mobility & Luxury Marine (Dark Section)
       ======================================================================== -->
  <section class="section_industries_showcase dark-bg" id="section-automotive">
    <div class="w-layout-blockcontainer container w-container">
      <div class="industry-feature-block reverse" id="automotive" data-category="automotive">
        <div class="industry-feature-content">
          <div class="industry-tag-pill">&bull; 08 / AUTOMOTIVE &amp; LUXURY MOBILITY</div>
          <h2 class="industry-feature-title">Automotive, Mobility &amp; Luxury Marine</h2>
          <div class="industry-feature-subtitle">VIP Test-Drive Concierge, Showroom Footfall &amp; High-Net-Worth Lead Funnels</div>
          <p class="industry-feature-desc">
            Ultra-luxury vehicles, electric mobility fleets, and private yacht charters in Dubai require bespoke digital experiences. Zenerom builds high-end digital showrooms featuring sub-second inventory filtering, 4K cinematic vehicle walkthroughs, and one-click WhatsApp VIP concierge booking that accelerates luxury vehicle handovers.
          </p>

          <!-- Authentic Case Study Proof Box -->
          <div class="industry-proof-card">
            <div class="ind-proof-left">
              <div class="ind-client-badge">PROVEN CAMPAIGNS</div>
              <div>
                <div class="ind-proof-title">Luxury Supercar Dealerships &amp; Private Marine Charters</div>
                <div class="ind-proof-sub">Hyper-exclusive HNWI targeting, VIP test-drive funnels &amp; WhatsApp showroom booking</div>
              </div>
            </div>
            <div class="ind-proof-stat">
              <div class="ind-stat-number">+185% Test Drives</div>
              <div class="ind-stat-label">12.4% WhatsApp CVR</div>
            </div>
          </div>

          <!-- 4 Strategic Deliverables -->
          <div class="industry-deliverables-grid">
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>One-click WhatsApp VIP test drive concierge scheduling</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Dynamic digital showroom inventory API with live search</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>4K cinematic walkthrough ads on Meta, YouTube &amp; TikTok</span>
            </div>
            <div class="industry-deliverable-item">
              <div class="ind-check-icon">&check;</div>
              <span>Closed-loop attribution from initial ad view to vehicle delivery</span>
            </div>
          </div>

          <div class="industry-cta-block">
            <a href="https://wa.me/971563996631?text=Hello%20Zenerom,%20I%20am%20interested%20in%20Automotive%20growth%20solutions" target="_blank" class="ind-btn-primary">
              Schedule VIP Consultation
            </a>
            <a href="{{ route('contact') }}" class="ind-btn-secondary">Request Showroom Audit</a>
          </div>
        </div>

        <div class="industry-feature-visual">
          <div class="ind-visual-card">
            <img src="{{ asset('assets/images/industries/automotive.jpg') }}" alt="Zenerom Luxury Automotive & Marine Solutions" class="ind-visual-img" loading="lazy" />
            <div class="ind-visual-overlay"></div>
            <div class="ind-visual-badge">
              <div class="ind-visual-badge-left">
                <span class="ind-live-indicator"></span>
                <div>
                  <div class="ind-badge-title">Dubai Marina &amp; Sheikh Zayed Road</div>
                  <div class="ind-badge-sub">VIP Showroom Concierge Live</div>
                </div>
              </div>
              <span class="ind-badge-pill">45-Day Payback</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       12. Cross-Sector Transformation Matrix
       ======================================================================== -->
  <section class="section_industry_matrix">
    <div class="w-layout-blockcontainer container w-container">
      <div class="ind-matrix-header">
        <div class="industries-filter-eyebrow">&bull; STRATEGIC ARCHITECTURE</div>
        <h2 class="ind-matrix-title">Why Generic UAE Agencies Fail Across Verticals</h2>
        <p class="ind-matrix-desc">
          Compare the reality of standard agency retainers against Zenerom's engineered, vertical-specific growth systems.
        </p>
      </div>

      <div class="ind-matrix-grid">
        <!-- Card 1: Generic Agency Model -->
        <div class="ind-trans-card">
          <div class="ind-trans-eyebrow">CONVENTIONAL AGENCY</div>
          <h3 class="ind-trans-title">Fragmented Retainer Model</h3>
          <p class="ind-trans-body">
            Treats real estate, healthcare, and industrial clients with identical one-size-fits-all ad campaigns, relying on unmonitored spreadsheets and generic PDF reports.
          </p>
          <ul class="ind-trans-list">
            <li class="ind-trans-item"><span class="ind-trans-icon-red">&times;</span> Blanket ads yielding low-intent tire-kickers</li>
            <li class="ind-trans-item"><span class="ind-trans-icon-red">&times;</span> Sluggish WordPress templates with 4s+ TTFB</li>
            <li class="ind-trans-item"><span class="ind-trans-icon-red">&times;</span> Machine-translated literal Arabic copy</li>
            <li class="ind-trans-item"><span class="ind-trans-icon-red">&times;</span> Zero CRM sync; leads decay in email inboxes</li>
            <li class="ind-trans-item"><span class="ind-trans-icon-red">&times;</span> Vanity impression metrics without revenue attribution</li>
          </ul>
        </div>

        <!-- Card 2: Zenerom Architecture (Featured Dark Card) -->
        <div class="ind-trans-card featured">
          <div class="ind-trans-eyebrow">ZENEROM ARCHITECTURE</div>
          <h3 class="ind-trans-title">Vertical Growth Ecosystem</h3>
          <p class="ind-trans-body">
            Custom-engineered architectures designed around your specific sector's unit economics, regulatory requirements, and high-value buyer psychology.
          </p>
          <ul class="ind-trans-list">
            <li class="ind-trans-item"><span class="ind-trans-icon-green">&check;</span> Hyper-targeted funnels with WhatsApp pre-qualification</li>
            <li class="ind-trans-item"><span class="ind-trans-icon-green">&check;</span> Sub-second headless Next.js &amp; Shopify platforms</li>
            <li class="ind-trans-item"><span class="ind-trans-icon-green">&check;</span> Native culturally resonant Arabic &amp; English messaging</li>
            <li class="ind-trans-item"><span class="ind-trans-icon-green">&check;</span> Bi-directional Zoho/Salesforce CRM pipeline automation</li>
            <li class="ind-trans-item"><span class="ind-trans-icon-green">&check;</span> Live Looker Studio dashboards tracking CPL, CAC &amp; ROAS</li>
          </ul>
        </div>

        <!-- Card 3: In-House Team Friction -->
        <div class="ind-trans-card">
          <div class="ind-trans-eyebrow">INTERNAL SQUAD LIMITATIONS</div>
          <h3 class="ind-trans-title">In-House Resource Bottleneck</h3>
          <p class="ind-trans-body">
            Hiring full-time specialized talent for SEO, PPC, headless dev, CRM automation, and video in Dubai creates staggering overhead and slow execution.
          </p>
          <ul class="ind-trans-list">
            <li class="ind-trans-item"><span class="ind-trans-icon-red">&times;</span> High recruitment fees and employee turnover risk</li>
            <li class="ind-trans-item"><span class="ind-trans-icon-red">&times;</span> Skill silos between creative designers &amp; developers</li>
            <li class="ind-trans-item"><span class="ind-trans-icon-red">&times;</span> Slow turnaround on modern headless engineering</li>
            <li class="ind-trans-item"><span class="ind-trans-icon-red">&times;</span> Costly enterprise MarTech software subscriptions</li>
            <li class="ind-trans-item"><span class="ind-trans-icon-red">&times;</span> Limited cross-industry benchmark intelligence</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       13. Interactive Industry Solution Finder (Dynamic Selector Tool)
       ======================================================================== -->
  <section class="section_industry_finder">
    <div class="w-layout-blockcontainer container w-container">
      <div class="ind-finder-header">
        <div class="industries-filter-eyebrow" style="background-color: rgba(242, 105, 52, 0.16);">&bull; INTERACTIVE ARCHITECTURE SELECTOR</div>
        <h2 class="ind-finder-title">Find Your Tailored Industry Solution</h2>
        <p class="ind-finder-desc">
          Select your industry, key growth bottleneck, and scale to compute the recommended Zenerom growth stack, implementation velocity, and expected upside.
        </p>
      </div>

      <div class="ind-finder-container">
        <!-- Interactive Inputs -->
        <div class="ind-finder-inputs">
          <div class="ind-input-group">
            <label for="indFinderIndustry">1. Your Industry Vertical</label>
            <div class="ind-select-wrap">
              <select id="indFinderIndustry" class="ind-select">
                <option value="real-estate" selected>Real Estate &amp; Off-Plan Developers</option>
                <option value="ecommerce">E-Commerce &amp; Luxury Retail</option>
                <option value="healthcare">Healthcare, Clinics &amp; Aesthetics</option>
                <option value="hospitality">Hospitality, Tourism &amp; Dining</option>
                <option value="industrial">B2B, Logistics &amp; Industrial Supply</option>
                <option value="education">Education &amp; Sports Academies</option>
                <option value="corporate">Corporate, Legal &amp; Business Setup</option>
                <option value="automotive">Automotive, Mobility &amp; Marine</option>
              </select>
              <div class="ind-select-arrow">&#9662;</div>
            </div>
          </div>

          <div class="ind-input-group">
            <label for="indFinderChallenge">2. Primary Growth Bottleneck</label>
            <div class="ind-select-wrap">
              <select id="indFinderChallenge" class="ind-select">
                <option value="low-lead-quality" selected>High Ad Spend with Low Lead Quality</option>
                <option value="slow-website">Sluggish Website &amp; Low Conversion Rate</option>
                <option value="weak-organic-seo">Zero Visibility on Google Search &amp; Maps</option>
                <option value="crm-followup-delay">Manual, Delayed Follow-Up Losing Inquiries</option>
              </select>
              <div class="ind-select-arrow">&#9662;</div>
            </div>
          </div>

          <div class="ind-input-group">
            <label for="indFinderScale">3. Target Monthly Scale</label>
            <div class="ind-select-wrap">
              <select id="indFinderScale" class="ind-select">
                <option value="emerging">Emerging UAE Business (AED 30k - 100k Monthly)</option>
                <option value="enterprise" selected>Mid-Market Enterprise (AED 100k - 500k Monthly)</option>
                <option value="regional">Regional Flagship (AED 500k+ Monthly)</option>
              </select>
              <div class="ind-select-arrow">&#9662;</div>
            </div>
          </div>
        </div>

        <!-- Dynamic Output Result Card -->
        <div class="ind-finder-result">
          <div class="ind-result-badge">&bull; RECOMMENDED ARCHITECTURE</div>
          <h3 id="indResultTitle" class="ind-result-title">
            Off-Plan Hyper-Targeted Meta &amp; Google Search Acquisition Funnel
          </h3>
          <p id="indResultDesc" class="ind-result-desc">
            Engineered for UAE developers and prime brokers. Deploys native bilingual Arabic/English Instant Forms synced directly to Zoho CRM, paired with Google Search ads capturing high-intent HNWI buyers in Dubai and GCC.
          </p>

          <div class="ind-result-stats-row">
            <div>
              <div id="indStatUpside" class="ind-result-stat-val">+140%</div>
              <div class="ind-result-stat-lbl">Conversion Upside</div>
            </div>
            <div>
              <div id="indStatVelocity" class="ind-result-stat-val">10 Days</div>
              <div class="ind-result-stat-lbl">Deployment SLA</div>
            </div>
            <div>
              <div id="indStatCpl" class="ind-result-stat-val">-42%</div>
              <div class="ind-result-stat-lbl">Cost Per Lead Drop</div>
            </div>
          </div>

          <div id="indStackTags" class="ind-result-stack">
            <!-- Dynamically populated tags -->
          </div>

          <a href="https://wa.me/971563996631?text=Hello%20Zenerom,%20I%20would%20like%20to%20deploy%20this%20industry%20blueprint" target="_blank" class="ind-btn-primary" style="justify-content: center;">
            Deploy This Blueprint With Zenerom
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       14. Pan-Emirate Industry Deployment Grid
       ======================================================================== -->
  <section class="section_emirates_grid">
    <div class="w-layout-blockcontainer container w-container">
      <div class="ind-emirates-header">
        <div class="industries-filter-eyebrow">&bull; PAN-EMIRATE REACH</div>
        <h2 class="ind-emirates-title">Pan-UAE Vertical Deployment Strategy</h2>
        <p class="ind-emirates-desc">
          How Zenerom tailors regulatory, cultural, and demographic targeting across the United Arab Emirates.
        </p>
      </div>

      <div class="ind-emirates-cards">
        <div class="ind-emirate-card">
          <div class="ind-emirate-tag">COMMERCIAL HUB</div>
          <h3 class="ind-emirate-name">Dubai Flagship</h3>
          <p class="ind-emirate-desc">
            High-velocity international investor acquisition, luxury off-plan developments, experiential hospitality, DIFC corporate consulting, and multi-lingual global tourism funnels.
          </p>
          <div class="ind-emirate-focus">
            <div class="ind-focus-item">Luxury Real Estate &amp; Off-Plan Launches</div>
            <div class="ind-focus-item">Omnichannel Retail &amp; Headless D2C</div>
            <div class="ind-focus-item">VIP Hospitality &amp; Fine Dining Booking</div>
          </div>
        </div>

        <div class="ind-emirate-card">
          <div class="ind-emirate-tag">CAPITAL &amp; REGULATORY</div>
          <h3 class="ind-emirate-name">Abu Dhabi</h3>
          <p class="ind-emirate-desc">
            Government-adjacent enterprise procurements, MOHAP/DOH healthcare compliance, sovereign wealth management, industrial infrastructure, and institutional edtech funnels.
          </p>
          <div class="ind-emirate-focus">
            <div class="ind-focus-item">MOHAP &amp; DOH Regulated Medical Networks</div>
            <div class="ind-focus-item">Enterprise B2B Procurement Portals</div>
            <div class="ind-focus-item">Governmental Entity Inbound Funnels</div>
          </div>
        </div>

        <div class="ind-emirate-card">
          <div class="ind-emirate-tag">INDUSTRIAL &amp; REGIONAL</div>
          <h3 class="ind-emirate-name">Sharjah &amp; Northern Emirates</h3>
          <p class="ind-emirate-desc">
            Industrial manufacturing clusters, freight logistics gateways in Ras Al Khaimah and Fujairah, regional retail commerce, and educational campus expansions across Ajman and UAQ.
          </p>
          <div class="ind-emirate-focus">
            <div class="ind-focus-item">Industrial Supply &amp; RFQ Portals</div>
            <div class="ind-focus-item">Regional Logistics &amp; Port Terminals</div>
            <div class="ind-focus-item">Private K-12 &amp; University Enrolment</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       15. Industry FAQ Accordion
       ======================================================================== -->
  <section class="section_industry_faq">
    <div class="w-layout-blockcontainer container w-container">
      <div class="ind-faq-header">
        <div class="industries-filter-eyebrow" style="background-color: rgba(242, 105, 52, 0.16);">&bull; COMMON QUESTIONS</div>
        <h2 class="ind-faq-title">Frequently Asked Questions</h2>
        <p class="ind-faq-desc">
          Key questions UAE business owners and enterprise directors ask when partnering with Zenerom for sector-specific growth.
        </p>
      </div>

      <div class="ind-faq-container">
        <div class="ind-faq-item active">
          <div class="ind-faq-question">
            <div class="ind-faq-q-text">How does Zenerom ensure lead quality in high-ticket sectors like real estate and B2B?</div>
            <div class="ind-faq-icon">+</div>
          </div>
          <div class="ind-faq-answer">
            <p>
              We eliminate low-intent tire-kickers by deploying multi-step qualification forms with mandatory OTP phone number verification, conditional budget filters, and instant WhatsApp double-opt-in workflows. Inquiries are automatically scored and routed directly to your licensed sales consultants within 20 seconds.
            </p>
          </div>
        </div>

        <div class="ind-faq-item">
          <div class="ind-faq-question">
            <div class="ind-faq-q-text">Are your healthcare and clinic campaigns compliant with UAE MOHAP and DHA regulations?</div>
            <div class="ind-faq-icon">+</div>
          </div>
          <div class="ind-faq-answer">
            <p>
              Yes, 100%. All healthcare marketing assets, medical copywriting, and doctor credentials created by Zenerom strictly adhere to UAE Ministry of Health (MOHAP) and Dubai Health Authority (DHA) advertising guidelines. We prepare compliant ad licenses and documentation to ensure zero account suspensions or regulatory penalties.
            </p>
          </div>
        </div>

        <div class="ind-faq-item">
          <div class="ind-faq-question">
            <div class="ind-faq-q-text">Can you migrate our existing legacy e-commerce store to headless without losing SEO rankings?</div>
            <div class="ind-faq-icon">+</div>
          </div>
          <div class="ind-faq-answer">
            <p>
              Absolutely. Our technical SEO architects execute a 1:1 URL mapping blueprint, preserve existing canonical tags, migrate structured data (Schema.org), and benchmark pre- and post-launch crawlability. As evidenced by our Florkett UAE case study, our headless migrations typically increase organic search visibility by over 400% due to dramatic Core Web Vitals speed gains.
            </p>
          </div>
        </div>

        <div class="ind-faq-item">
          <div class="ind-faq-question">
            <div class="ind-faq-q-text">Do you provide native Arabic copywriting, or do you use automated machine translation?</div>
            <div class="ind-faq-icon">+</div>
          </div>
          <div class="ind-faq-answer">
            <p>
              Every piece of Arabic copy is drafted by native bilingual Emirati and Levant marketing copywriters. We do not use automated machine translation. In the UAE market, nuance matters: high-net-worth real estate investors, corporate legal clients, and government decision-makers require refined, culturally authoritative Arabic terminology.
            </p>
          </div>
        </div>

        <div class="ind-faq-item">
          <div class="ind-faq-question">
            <div class="ind-faq-q-text">How quickly can Zenerom deploy a dedicated digital growth engine for a new UAE business?</div>
            <div class="ind-faq-icon">+</div>
          </div>
          <div class="ind-faq-answer">
            <p>
              Our rapid deployment sprint takes between 7 to 14 business days. This includes competitor keyword analysis, landing page development, conversion tracking setup on Google Tag Manager, WhatsApp Cloud API integration, and CRM pipeline mapping.
            </p>
          </div>
        </div>

        <div class="ind-faq-item">
          <div class="ind-faq-question">
            <div class="ind-faq-q-text">What reporting cadence and KPI benchmarks do you establish for enterprise retainers?</div>
            <div class="ind-faq-icon">+</div>
          </div>
          <div class="ind-faq-answer">
            <p>
              You receive 24/7 access to a dedicated Looker Studio dashboard tracking cost-per-lead (CPL), return on ad spend (ROAS), pipeline value, and organic ranking velocity. In addition, you have bi-weekly strategic sprint calls with your dedicated Dubai account strategist and monthly executive reviews.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       16. Sector Call To Action Banner
       ======================================================================== -->
  <section class="section_industry_cta">
    <div class="w-layout-blockcontainer container w-container">
      <div class="ind-cta-card">
        <div class="ind-cta-eyebrow">&bull; READY TO DOMINATE YOUR VERTICAL?</div>
        <h2 class="ind-cta-title">
          Partner with Dubai's Proven <span class="highlight-text">Industry Growth Engineers</span>
        </h2>
        <p class="ind-cta-desc">
          Speak directly with an enterprise strategist at our Burjuman Business Tower headquarters to review your sector metrics and architect your tailored growth system.
        </p>

        <div class="ind-cta-actions">
          <a href="https://wa.me/971563996631?text=Hello%20Zenerom,%20I%20would%20like%20to%20discuss%20our%20industry%20digital%20growth" target="_blank" class="ind-cta-whatsapp">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ind-cta-icon">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
            </svg>
            <span>Chat on WhatsApp: +971 56 399 6631</span>
          </a>
          <a href="tel:+971508764885" class="ind-cta-call">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ind-cta-icon">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            <span>Call Direct: +971 50 876 4885</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       17. Canonical Global Footer
       ======================================================================== -->

  @push('scripts')
    <script src="{{ asset('js/industries.js?v=1') }}"></script>
  @endpush
</x-layouts.app>
