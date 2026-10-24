<x-layouts.app>
  <x-slot:title>Works & Case Studies | Zenerom UAE Digital Growth & Technology</x-slot:title>
  <x-slot:description>Explore Zenerom's published case studies across SEO, Google Ads, custom web engineering, and enterprise digital platforms. Verifiable growth results for leading UAE businesses.</x-slot:description>

  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/work.css?v=1') }}"/>
  @endpush

<!-- ========================================================================
       2. Hero Section: Selected Works & Case Studies
       ======================================================================== -->
  <section class="work-hero-section">
    <div class="container w-container">
      <div class="work-hero-container">
        
        <!-- Breadcrumbs -->
        <nav class="work-breadcrumbs" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="work-breadcrumbs-sep">/</span>
          <span class="work-breadcrumbs-current">Selected Works &amp; Case Studies</span>
        </nav>

        <!-- Eyebrow Pill -->
        <div class="work-eyebrow-pill">
          <div class="work-eyebrow-dot"></div>
          <span>Published UAE Case Studies &bull; Verifiable Growth</span>
        </div>

        <!-- Headline -->
        <h1 class="work-hero-title">
          Engineered for Impact: <span class="highlight-text">Published Case Studies</span>
        </h1>

        <!-- Subtitle -->
        <p class="work-hero-desc">
          Explore how Zenerom combines data-driven search dominance, high-ROI performance advertising, and custom web engineering to build durable market leaders across Dubai and the UAE.
        </p>

        <!-- 4-Stat Metric Proof Row -->
        <div class="work-hero-stats-grid">
          <div class="work-stat-card">
            <div class="work-stat-number">13+</div>
            <div class="work-stat-label">Published UAE Case Studies</div>
          </div>
          <div class="work-stat-card">
            <div class="work-stat-number">+412%</div>
            <div class="work-stat-label">Peak Organic Revenue Surge</div>
          </div>
          <div class="work-stat-card">
            <div class="work-stat-number">934</div>
            <div class="work-stat-label">Verified Single-Sprint Conversions</div>
          </div>
          <div class="work-stat-card">
            <div class="work-stat-number">AED 45M+</div>
            <div class="work-stat-label">Client Revenue Pipeline Generated</div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ========================================================================
       3. In-Flow Segmented Category Filter Bar
       ======================================================================== -->
  <section class="work-filter-section">
    <div class="container w-container">
      <div class="work-filter-container">
        <div class="work-filter-pills">
          <button type="button" class="work-filter-btn is-active" data-filter="all">
            <span>All Projects</span>
            <span class="work-filter-count">(13)</span>
          </button>
          <button type="button" class="work-filter-btn" data-filter="seo">
            <span>SEO &amp; Organic Growth</span>
          </button>
          <button type="button" class="work-filter-btn" data-filter="ads">
            <span>Performance Ads (PPC)</span>
          </button>
          <button type="button" class="work-filter-btn" data-filter="web">
            <span>Web Development</span>
          </button>
          <button type="button" class="work-filter-btn" data-filter="ecommerce">
            <span>E-Commerce</span>
          </button>
          <button type="button" class="work-filter-btn" data-filter="industrial">
            <span>Industrial &amp; Energy</span>
          </button>
          <button type="button" class="work-filter-btn" data-filter="corporate">
            <span>Corporate &amp; Healthcare</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       4. Signature Staggered Work Grid (Replicating Homepage Layout)
       ======================================================================== -->
  <section class="section_work_gallery" id="case-studies">
    <div class="container w-container">
      <div class="work-gallery-container">
        
        <!-- Desktop 2-Column Staggered Grid -->
        <div class="work-wrap _01">
          
          <!-- LEFT COLUMN (Items 01, 03, 05, 07, 09, 11, 13) -->
          <div class="work-left-wrap">
            
            <!-- 01. Florkett UAE (E-Commerce & SEO) -->
            <div class="work-cl-item" data-category="seo ecommerce">
              <a href="{{ route('work.show', 'florkett-seo') }}" class="work-single-block w-inline-block">
                <div class="work-image-wrap">
                  <img src="{{ asset('assets/images/industries/ecommerce.jpg') }}" loading="lazy" alt="Florkett UAE Case Study" class="work-image"/>
                  <div class="work-image-hover">
                    <div class="work-category">View Case Study ↗</div>
                  </div>
                </div>
                <div class="work-content-wrap">
                  <div class="work-title-wrap">
                    <div class="work-number-block">
                      <div class="work-dot"></div>
                      <div class="work-number">01</div>
                    </div>
                    <div>
                      <div class="work-item-client">Florkett UAE &bull; Flooring Solutions</div>
                      <div class="work-item-title">Florkett UAE: 412% Organic Revenue Growth &amp; E-Commerce Scale</div>
                      <div class="work-metric-pill">+412% Revenue &bull; Category Architecture</div>
                    </div>
                  </div>
                  <div class="work-arrow-button">
                    <div class="arrow-icon-wrap">
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 03. Dubai Renovation (Interior Design & Meta Ads) -->
            <div class="work-cl-item" data-category="ads corporate">
              <a href="{{ route('work.show', 'dubai-renovation') }}" class="work-single-block w-inline-block">
                <div class="work-image-wrap">
                  <img src="{{ asset('assets/images/industries/real-estate.jpg') }}" loading="lazy" alt="Dubai Renovation Case Study" class="work-image"/>
                  <div class="work-image-hover">
                    <div class="work-category">View Case Study ↗</div>
                  </div>
                </div>
                <div class="work-content-wrap">
                  <div class="work-title-wrap">
                    <div class="work-number-block">
                      <div class="work-dot"></div>
                      <div class="work-number">03</div>
                    </div>
                    <div>
                      <div class="work-item-client">RFS Remodeling &bull; Luxury Interiors</div>
                      <div class="work-item-title">Dubai Renovation: 531 High-Ticket Villa Remodeling Leads</div>
                      <div class="work-metric-pill">531 Leads &bull; AED 1.8M Pipeline</div>
                    </div>
                  </div>
                  <div class="work-arrow-button">
                    <div class="arrow-icon-wrap">
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 05. Statron Middle East (Industrial & Web Dev) -->
            <div class="work-cl-item" data-category="web industrial">
              <a href="{{ route('work.show', 'statron-industrial') }}" class="work-single-block w-inline-block">
                <div class="work-image-wrap">
                  <img src="{{ asset('assets/images/industries/logistics.jpg') }}" loading="lazy" alt="Statron Middle East Case Study" class="work-image"/>
                  <div class="work-image-hover">
                    <div class="work-category">View Case Study ↗</div>
                  </div>
                </div>
                <div class="work-content-wrap">
                  <div class="work-title-wrap">
                    <div class="work-number-block">
                      <div class="work-dot"></div>
                      <div class="work-number">05</div>
                    </div>
                    <div>
                      <div class="work-item-client">Statron International &bull; Power Engineering</div>
                      <div class="work-item-title">Statron Middle East: High-Capacity Industrial Web Platform</div>
                      <div class="work-metric-pill">Sub-second Speed &bull; +195% RFQs</div>
                    </div>
                  </div>
                  <div class="work-arrow-button">
                    <div class="arrow-icon-wrap">
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 07. Spearhead Training (Education & Portals) -->
            <div class="work-cl-item" data-category="web corporate">
              <a href="{{ route('work.show', 'spearhead-training') }}" class="work-single-block w-inline-block">
                <div class="work-image-wrap">
                  <img src="{{ asset('assets/images/work-image-2.webp') }}" loading="lazy" alt="Spearhead Training Case Study" class="work-image"/>
                  <div class="work-image-hover">
                    <div class="work-category">View Case Study ↗</div>
                  </div>
                </div>
                <div class="work-content-wrap">
                  <div class="work-title-wrap">
                    <div class="work-number-block">
                      <div class="work-dot"></div>
                      <div class="work-number">07</div>
                    </div>
                    <div>
                      <div class="work-item-client">Spearhead Training Gulf &bull; Corporate Ed</div>
                      <div class="work-item-title">Spearhead Training: Corporate Course Portal &amp; Enrollments</div>
                      <div class="work-metric-pill">200+ Courses &bull; +185% Enterprise Leads</div>
                    </div>
                  </div>
                  <div class="work-arrow-button">
                    <div class="arrow-icon-wrap">
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 09. Genyard Energy (Energy & Industrial Web) -->
            <div class="work-cl-item" data-category="web industrial">
              <a href="{{ route('work.show', 'genyard-energy') }}" class="work-single-block w-inline-block">
                <div class="work-image-wrap">
                  <img src="{{ asset('assets/images/work-image-8.webp') }}" loading="lazy" alt="Genyard Energy Case Study" class="work-image"/>
                  <div class="work-image-hover">
                    <div class="work-category">View Case Study ↗</div>
                  </div>
                </div>
                <div class="work-content-wrap">
                  <div class="work-title-wrap">
                    <div class="work-number-block">
                      <div class="work-dot"></div>
                      <div class="work-number">09</div>
                    </div>
                    <div>
                      <div class="work-item-client">Genyard Energy Systems &bull; Power Plants</div>
                      <div class="work-item-title">Genyard Energy: Power Generator Showcase &amp; B2B Inquiries</div>
                      <div class="work-metric-pill">+220% Quoting &bull; Parametric Filters</div>
                    </div>
                  </div>
                  <div class="work-arrow-button">
                    <div class="arrow-icon-wrap">
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 11. Corp Creators Dubai (Corporate Services Web) -->
            <div class="work-cl-item" data-category="web corporate">
              <a href="{{ route('work.show', 'corp-creators') }}" class="work-single-block w-inline-block">
                <div class="work-image-wrap">
                  <img src="{{ asset('assets/images/industries/corporate.jpg') }}" loading="lazy" alt="Corp Creators Case Study" class="work-image"/>
                  <div class="work-image-hover">
                    <div class="work-category">View Case Study ↗</div>
                  </div>
                </div>
                <div class="work-content-wrap">
                  <div class="work-title-wrap">
                    <div class="work-number-block">
                      <div class="work-dot"></div>
                      <div class="work-number">11</div>
                    </div>
                    <div>
                      <div class="work-item-client">Corp Creators &bull; Business Setup Advisory</div>
                      <div class="work-item-title">Corp Creators: Mainland &amp; Freezone Licensing Platform</div>
                      <div class="work-metric-pill">+310% Setup Inquiries &bull; -45% CAC</div>
                    </div>
                  </div>
                  <div class="work-arrow-button">
                    <div class="arrow-icon-wrap">
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 13. Tourzone Travel (Flagship Web Platform) -->
            <div class="work-cl-item" data-category="web ecommerce">
              <a href="{{ route('work.show', 'tourzone-travel') }}" class="work-single-block w-inline-block">
                <div class="work-image-wrap">
                  <img src="{{ asset('assets/images/work-image-1.webp') }}" loading="lazy" alt="Tourzone Travel Case Study" class="work-image"/>
                  <div class="work-image-hover">
                    <div class="work-category">View Case Study ↗</div>
                  </div>
                </div>
                <div class="work-content-wrap">
                  <div class="work-title-wrap">
                    <div class="work-number-block">
                      <div class="work-dot"></div>
                      <div class="work-number">13</div>
                    </div>
                    <div>
                      <div class="work-item-client">Tourzone UAE &bull; Experiential Tourism</div>
                      <div class="work-item-title">Tourzone Travel: Digital Platform &amp; Seamless Booking Flow</div>
                      <div class="work-metric-pill">+380% Bookings &bull; 1.2s Experience</div>
                    </div>
                  </div>
                  <div class="work-arrow-button">
                    <div class="arrow-icon-wrap">
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          </div>

          <!-- RIGHT COLUMN (Staggered Down - Items 02, 04, 06, 08, 10, 12) -->
          <div class="work-right-wrap">
            
            <!-- 02. LaLiga Academy UAE (Education & Paid Ads) -->
            <div class="work-cl-item" data-category="ads corporate">
              <a href="{{ route('work.show', 'laliga-ads') }}" class="work-single-block w-inline-block">
                <div class="work-image-wrap">
                  <img src="{{ asset('assets/images/industries/education.jpg') }}" loading="lazy" alt="LaLiga Academy Case Study" class="work-image"/>
                  <div class="work-image-hover">
                    <div class="work-category">View Case Study ↗</div>
                  </div>
                </div>
                <div class="work-content-wrap">
                  <div class="work-title-wrap">
                    <div class="work-number-block">
                      <div class="work-dot"></div>
                      <div class="work-number">02</div>
                    </div>
                    <div>
                      <div class="work-item-client">LaLiga Academy &bull; Sports Education</div>
                      <div class="work-item-title">LaLiga Academy: 934 Student Registrations at AED 44 CPL</div>
                      <div class="work-metric-pill">934 Conversions &bull; Performance Max</div>
                    </div>
                  </div>
                  <div class="work-arrow-button">
                    <div class="arrow-icon-wrap">
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 04. DEWA Approvals (Engineering & SEO) -->
            <div class="work-cl-item" data-category="seo industrial">
              <a href="{{ route('work.show', 'dewa-approvals') }}" class="work-single-block w-inline-block">
                <div class="work-image-wrap">
                  <img src="{{ asset('assets/images/work-image-7.webp') }}" loading="lazy" alt="DEWA Approvals Case Study" class="work-image"/>
                  <div class="work-image-hover">
                    <div class="work-category">View Case Study ↗</div>
                  </div>
                </div>
                <div class="work-content-wrap">
                  <div class="work-title-wrap">
                    <div class="work-number-block">
                      <div class="work-dot"></div>
                      <div class="work-number">04</div>
                    </div>
                    <div>
                      <div class="work-item-client">DEWA Approvals UAE &bull; MEP Engineering</div>
                      <div class="work-item-title">DEWA Approvals: +298% More Qualified Commercial Inquiries</div>
                      <div class="work-metric-pill">+298% Inquiries &bull; #1 Google Rank</div>
                    </div>
                  </div>
                  <div class="work-arrow-button">
                    <div class="arrow-icon-wrap">
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 06. Farm City Dubai (Hospitality & Web Design) -->
            <div class="work-cl-item" data-category="web">
              <a href="{{ route('work.show', 'farm-city') }}" class="work-single-block w-inline-block">
                <div class="work-image-wrap">
                  <img src="{{ asset('assets/images/industries/hospitality.jpg') }}" loading="lazy" alt="Farm City Dubai Case Study" class="work-image"/>
                  <div class="work-image-hover">
                    <div class="work-category">View Case Study ↗</div>
                  </div>
                </div>
                <div class="work-content-wrap">
                  <div class="work-title-wrap">
                    <div class="work-number-block">
                      <div class="work-dot"></div>
                      <div class="work-number">06</div>
                    </div>
                    <div>
                      <div class="work-item-client">Farm City Dubai &bull; Premium Dining</div>
                      <div class="work-item-title">Farm City Dubai: Hospitality Web Experience &amp; Table Bookings</div>
                      <div class="work-metric-pill">+340% Bookings &bull; Commission-Free</div>
                    </div>
                  </div>
                  <div class="work-arrow-button">
                    <div class="arrow-icon-wrap">
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 08. Honest Home Health Care (Healthcare & Portals) -->
            <div class="work-cl-item" data-category="web corporate">
              <a href="{{ route('work.show', 'honest-healthcare') }}" class="work-single-block w-inline-block">
                <div class="work-image-wrap">
                  <img src="{{ asset('assets/images/industries/healthcare.jpg') }}" loading="lazy" alt="Honest Home Health Care Case Study" class="work-image"/>
                  <div class="work-image-hover">
                    <div class="work-category">View Case Study ↗</div>
                  </div>
                </div>
                <div class="work-content-wrap">
                  <div class="work-title-wrap">
                    <div class="work-number-block">
                      <div class="work-dot"></div>
                      <div class="work-number">08</div>
                    </div>
                    <div>
                      <div class="work-item-client">Honest Home Health Care &bull; DHA Clinic</div>
                      <div class="work-item-title">Honest Home Health Care: Patient Portal &amp; Care Bookings</div>
                      <div class="work-metric-pill">DHA Compliant &bull; +280% Consults</div>
                    </div>
                  </div>
                  <div class="work-arrow-button">
                    <div class="arrow-icon-wrap">
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 10. MAI Events Dubai (Luxury Events & Production) -->
            <div class="work-cl-item" data-category="web">
              <a href="{{ route('work.show', 'mai-events') }}" class="work-single-block w-inline-block">
                <div class="work-image-wrap">
                  <img src="{{ asset('assets/images/work-image-4.webp') }}" loading="lazy" alt="MAI Events Case Study" class="work-image"/>
                  <div class="work-image-hover">
                    <div class="work-category">View Case Study ↗</div>
                  </div>
                </div>
                <div class="work-content-wrap">
                  <div class="work-title-wrap">
                    <div class="work-number-block">
                      <div class="work-dot"></div>
                      <div class="work-number">10</div>
                    </div>
                    <div>
                      <div class="work-item-client">MAI Events Dubai &bull; Luxury Productions</div>
                      <div class="work-item-title">MAI Events Dubai: High-Impact VIP Corporate Event Portfolio</div>
                      <div class="work-metric-pill">3.5x RFP Growth &bull; VIP Intake</div>
                    </div>
                  </div>
                  <div class="work-arrow-button">
                    <div class="arrow-icon-wrap">
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 12. Voltronix UAE (Manufacturing & B2B SEO) -->
            <div class="work-cl-item" data-category="seo industrial">
              <a href="{{ route('work.show', 'voltronix-seo') }}" class="work-single-block w-inline-block">
                <div class="work-image-wrap">
                  <img src="{{ asset('assets/images/work-image-5.webp') }}" loading="lazy" alt="Voltronix UAE Case Study" class="work-image"/>
                  <div class="work-image-hover">
                    <div class="work-category">View Case Study ↗</div>
                  </div>
                </div>
                <div class="work-content-wrap">
                  <div class="work-title-wrap">
                    <div class="work-number-block">
                      <div class="work-dot"></div>
                      <div class="work-number">12</div>
                    </div>
                    <div>
                      <div class="work-item-client">Voltronix UAE &bull; Manufacturing &amp; Switchgear</div>
                      <div class="work-item-title">Voltronix UAE: Commercial B2B SEO &amp; Contractor Lead Engine</div>
                      <div class="work-metric-pill">+275% B2B Leads &bull; 52 Top 3 Keywords</div>
                    </div>
                  </div>
                  <div class="work-arrow-button">
                    <div class="arrow-icon-wrap">
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                      <img src="{{ asset('assets/icons/arrow-left.svg') }}" loading="lazy" alt="Arrow Icon" class="arrow-icon"/>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          </div>

        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================================
       6. High-Impact Conversion CTA Section
       ======================================================================== -->
  <section class="work-section-cta">
    <div class="container w-container">
      <div class="work-cta-container">
        <div class="work-eyebrow-pill" style="background: rgba(255, 255, 255, 0.08); color: #cbd5e1; margin-bottom: 1.25rem;">
          <div class="work-eyebrow-dot"></div>
          <span>Start Your Digital Transformation</span>
        </div>
        <h2 class="work-cta-title">
          Ready to Architect Your Next <span class="highlight-text">Growth Milestone?</span>
        </h2>
        <p class="work-cta-desc">
          Speak directly with our senior strategy team at Burjuman Business Tower. Whether you need an enterprise SEO overhaul, high-converting PPC funnels, or custom web engineering, we deliver measurable business outcomes.
        </p>
        <div class="work-cta-actions">
          <a href="{{ route('contact') }}" class="primary-button w-inline-block">
            <div class="button-dot-wrap"><div class="button-dot"></div><div class="button-bg"></div></div>
            <div class="button-text">Partner for Digital Growth</div>
          </a>
          <a href="https://wa.me/971563996631?text=Hello%20Zenerom,%20I%20am%20reviewing%20your%20case%20studies%20and%20would%20like%20to%20discuss%20a%20project." target="_blank" class="secondary-button w-inline-block" style="background:#1e2127; color:#ffffff;">
            <div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div>
            <div class="button-text">WhatsApp Strategy Desk</div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       7. Canonical Global Footer
       ======================================================================== -->

  @push('scripts')
    <script src="{{ asset('js/work.js?v=1') }}"></script>
  @endpush
</x-layouts.app>
