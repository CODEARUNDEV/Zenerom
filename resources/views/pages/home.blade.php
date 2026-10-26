<x-layouts.app>
  <x-slot:title>Zenerom - Digital Growth & Marketing Agency Dubai</x-slot:title>
  <x-slot:description>Zenerom is a premier digital growth partner in Dubai delivering data-driven marketing, branding, SEO, web development, CRM automation, and scalable business solutions.</x-slot:description>

  @push('styles')
  <link rel="stylesheet" href="{{ asset('css/bungee-hero.css?v=' . time()) }}"/>
  <style>
  /* Base Slot for Hero & Values Card Marquees - Auto width with uniform 30px gap */
  .brand-logo-slot {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex: 0 0 auto !important;
    width: auto !important;
    height: 32px !important;
    margin-right: 30px !important;
    box-sizing: border-box !important;
  }
  .brand-logo-img {
    width: auto !important;
    height: auto !important;
    max-width: 95px !important;
    max-height: 24px !important;
    object-fit: contain !important;
    -webkit-filter: grayscale(100%) !important;
    filter: grayscale(100%) !important;
    opacity: 0.72 !important;
    transition: filter 0.3s ease, -webkit-filter 0.3s ease, opacity 0.3s ease, transform 0.3s ease !important;
    cursor: pointer !important;
    display: block !important;
  }

  /* Optical Normalization for Hero & Values Carousels */
  .brand-logo-img[src*="techfra-solutions"] {
    max-width: 120px !important;
    max-height: 18px !important;
    transform: scale(1.15) !important;
    opacity: 0.8 !important;
  }
  .brand-logo-img[src*="corp-creators"] {
    max-width: 116px !important;
    max-height: 18px !important;
    transform: scale(1.1) !important;
    opacity: 0.8 !important;
  }
  .brand-logo-img[src*="golden-fortune"] {
    max-width: 115px !important;
    max-height: 24px !important;
    opacity: 0.82 !important;
  }
  .brand-logo-img[src*="voltronix"] {
    max-width: 106px !important;
    max-height: 22px !important;
  }
  .brand-logo-img[src*="statron-international"] {
    max-width: 102px !important;
    max-height: 22px !important;
  }
  .brand-logo-img[src*="florkett"] {
    max-width: 100px !important;
    max-height: 23px !important;
  }
  .brand-logo-img[src*="limax"],
  .brand-logo-img[src*="addhouse"],
  .brand-logo-img[src*="aurae"],
  .brand-logo-img[src*="ontime-business-setup"] {
    max-width: 92px !important;
    max-height: 23px !important;
  }
  .brand-logo-img[src*="hnc"] {
    max-width: 82px !important;
    max-height: 22px !important;
  }
  .brand-logo-img[src*="shuraa-advertising"] {
    max-width: 74px !important;
    max-height: 22px !important;
  }
  .brand-logo-img[src*="h2o-care"] {
    max-width: 70px !important;
    max-height: 22px !important;
  }
  .brand-logo-img[src*="bizzone"] {
    max-width: 48px !important;
    max-height: 24px !important;
    opacity: 0.82 !important;
  }
  .brand-logo-img[src*="trip-factory"] {
    max-width: 22px !important;
    max-height: 22px !important;
  }
  .brand-logo-img[src*="tourzone"] {
    max-width: 25px !important;
    max-height: 25px !important;
  }

  .brand-logo-slot:hover .brand-logo-img {
    -webkit-filter: grayscale(0%) !important;
    filter: grayscale(0%) !important;
    opacity: 1 !important;
    transform: scale(1.1) !important;
  }
  .brand-logo-slot:hover .brand-logo-img[src*="techfra-solutions"] {
    transform: scale(1.24) !important;
  }
  .brand-logo-slot:hover .brand-logo-img[src*="corp-creators"] {
    transform: scale(1.2) !important;
  }

  .hero-marquee,
  .value-marquee {
    overflow: hidden !important;
    position: relative !important;
    width: 100% !important;
    mask-image: linear-gradient(90deg, transparent 0%, black 16px, black calc(100% - 16px), transparent 100%);
    -webkit-mask-image: linear-gradient(90deg, transparent 0%, black 16px, black calc(100% - 16px), transparent 100%);
  }
  .value-flex-wrap {
    display: flex !important;
    align-items: center !important;
    width: max-content !important;
    animation: marqueeLoop 45s linear infinite !important;
    will-change: transform !important;
  }
  .value-flex-wrap:hover {
    animation-play-state: paused !important;
  }
  .value-marquee-item {
    display: flex !important;
    align-items: center !important;
    flex: none !important;
  }

  /* Founder / UAE Trust Section Strip - Auto width with 40px gap */
  .founder-wrap.partners-marquee-wrapper {
    margin-top: 36px !important;
    height: 80px !important;
    background: transparent !important;
    display: flex !important;
    overflow: hidden !important;
    position: relative !important;
    column-gap: 40px !important;
    mask-image: linear-gradient(90deg, transparent 0%, black 8%, black 92%, transparent 100%);
    -webkit-mask-image: linear-gradient(90deg, transparent 0%, black 8%, black 92%, transparent 100%);
  }
  .founder-marquee-block.partners-marquee-block {
    display: flex !important;
    align-items: center !important;
    flex: none !important;
    column-gap: 40px !important;
    animation: bungeePartnersMarquee 45s linear infinite !important;
    will-change: transform !important;
  }
  .founder-wrap:hover .founder-marquee-block {
    animation-play-state: paused !important;
  }
  .founder-logo-slot {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex: 0 0 auto !important;
    width: auto !important;
    height: 44px !important;
    box-sizing: border-box !important;
  }
  .founder-logo-img {
    width: auto !important;
    height: auto !important;
    max-width: 125px !important;
    max-height: 30px !important;
    object-fit: contain !important;
    -webkit-filter: grayscale(100%) !important;
    filter: grayscale(100%) !important;
    opacity: 0.72 !important;
    transition: filter 0.3s ease, -webkit-filter 0.3s ease, opacity 0.3s ease, transform 0.3s ease !important;
    cursor: pointer !important;
    display: block !important;
  }

  /* Optical Normalization for Founder Strip */
  .founder-logo-img[src*="techfra-solutions"] {
    max-width: 155px !important;
    max-height: 25px !important;
    transform: scale(1.15) !important;
    opacity: 0.8 !important;
  }
  .founder-logo-img[src*="corp-creators"] {
    max-width: 150px !important;
    max-height: 25px !important;
    transform: scale(1.1) !important;
    opacity: 0.8 !important;
  }
  .founder-logo-img[src*="golden-fortune"] {
    max-width: 144px !important;
    max-height: 30px !important;
    opacity: 0.82 !important;
  }
  .founder-logo-img[src*="voltronix"] {
    max-width: 138px !important;
    max-height: 28px !important;
  }
  .founder-logo-img[src*="statron-international"] {
    max-width: 132px !important;
    max-height: 28px !important;
  }
  .founder-logo-img[src*="florkett"] {
    max-width: 128px !important;
    max-height: 29px !important;
  }
  .founder-logo-img[src*="limax"],
  .founder-logo-img[src*="addhouse"],
  .founder-logo-img[src*="aurae"],
  .founder-logo-img[src*="ontime-business-setup"] {
    max-width: 118px !important;
    max-height: 29px !important;
  }
  .founder-logo-img[src*="hnc"] {
    max-width: 106px !important;
    max-height: 28px !important;
  }
  .founder-logo-img[src*="shuraa-advertising"] {
    max-width: 95px !important;
    max-height: 27px !important;
  }
  .founder-logo-img[src*="h2o-care"] {
    max-width: 90px !important;
    max-height: 27px !important;
  }
  .founder-logo-img[src*="bizzone"] {
    max-width: 60px !important;
    max-height: 28px !important;
    opacity: 0.82 !important;
  }
  .founder-logo-img[src*="trip-factory"] {
    max-width: 27px !important;
    max-height: 27px !important;
  }
  .founder-logo-img[src*="tourzone"] {
    max-width: 29px !important;
    max-height: 29px !important;
  }

  .founder-logo-slot:hover .founder-logo-img {
    -webkit-filter: grayscale(0%) !important;
    filter: grayscale(0%) !important;
    opacity: 1 !important;
    transform: scale(1.1) !important;
  }
  .founder-logo-slot:hover .founder-logo-img[src*="techfra-solutions"] {
    transform: scale(1.24) !important;
  }
  .founder-logo-slot:hover .founder-logo-img[src*="corp-creators"] {
    transform: scale(1.2) !important;
  }

  @keyframes marqueeLoop {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  @keyframes bungeePartnersMarquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(calc(-100% - 40px)); }
  }
  </style>
  @endpush

<!-- Bungee-Style Signature Hero Section for Zenerom -->
<section class="hero">
  <div class="hero-content-wrapper">
    <div class="hero-top-block">
      <h1 class="hero-large-logo">Zenerom<span class="hero-reg">®</span></h1>
      <div class="heading-style-h5">Creative studio based in Dubai.</div>
    </div>
    
    <div class="hero-bottom-block">
      <div class="hero-bottom-top-block">
        <div class="hero-left-time-block">
          <div class="paragraph-text-mono">(</div>
          <div class="paragraph-text-mono">HAIL</div>
          <div class="paragraph-text-mono">DXB )</div>
        </div>
        <div class="social-links-block">
          <a href="https://www.behance.net" target="_blank" rel="noopener" class="social-link">BE</a>
          <div class="paragraph-text-mono">/</div>
          <a href="https://dribbble.com" target="_blank" rel="noopener" class="social-link">DR</a>
          <div class="paragraph-text-mono">/</div>
          <a href="https://x.com" target="_blank" rel="noopener" class="social-link">X</a>
        </div>
      </div>
      
      <div class="hero-marquee-wrapper-outer-block">
        <div class="hero-marquee-wrapper">
          @for ($b = 0; $b < 4; $b++)
          <div class="hero-marquee-block" @if($b > 0) aria-hidden="true" @endif>
            <div class="hero-marquee-item">
              <div class="hero-item-single _01">
                <div class="hero-marquee-asset w-background-video">
                  <video autoplay loop muted playsinline preload="auto" poster="{{ asset('assets/bungee/video-01-poster.jpg') }}">
                    <source src="{{ asset('assets/bungee/video-01.mp4') }}" type="video/mp4"/>
                  </video>
                </div>
              </div>
              <div class="hero-item-single v2">
                <img loading="lazy" src="{{ asset('assets/bungee/img-02.avif') }}" alt="Zenerom Creative Work" class="hero-marquee-asset _02"/>
              </div>
            </div>
            
            <div class="hero-marquee-item">
              <div class="hero-item-single">
                <div class="hero-marquee-asset w-background-video">
                  <video autoplay loop muted playsinline preload="auto" poster="{{ asset('assets/bungee/video-03-poster.jpg') }}">
                    <source src="{{ asset('assets/bungee/video-03.mp4') }}" type="video/mp4"/>
                  </video>
                </div>
              </div>
              <div class="hero-item-single v2">
                <img loading="lazy" src="{{ asset('assets/bungee/img-04.avif') }}" alt="Zenerom Creative Work" class="hero-marquee-asset _04"/>
              </div>
            </div>
            
            <div class="hero-marquee-item">
              <div class="hero-item-single">
                <img loading="lazy" src="{{ asset('assets/bungee/img-05.avif') }}" alt="Zenerom Creative Work" class="hero-marquee-asset _05"/>
              </div>
              <div class="hero-item-single v2">
                <img loading="lazy" src="{{ asset('assets/bungee/img-06.avif') }}" alt="Zenerom Creative Work" class="hero-marquee-asset _06"/>
              </div>
            </div>
            
            <div class="hero-marquee-item">
              <div class="hero-item-single">
                <img loading="lazy" src="{{ asset('assets/bungee/img-07.avif') }}" alt="Zenerom Creative Work" class="hero-marquee-asset _07"/>
              </div>
              <div class="hero-item-single v2">
                <img loading="lazy" src="{{ asset('assets/bungee/img-08.avif') }}" alt="Zenerom Creative Work" class="hero-marquee-asset"/>
              </div>
            </div>
          </div>
          @endfor
          <div class="hero-marquee-top-mask-effect"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bungee-Style Statement & Partner Logos Marquee Section -->
<section class="home-about">
  <div class="home-about-content-wrapper">
    <div class="home-about-text-block">
      <h2 class="heading-style-h3 split-text-effect">We’re Zenerom® — a creative studio cultivating bold brands, beautiful websites, and ideas that refuse to be ordinary.</h2>
    </div>
    <div class="partners-marquee-wrapper">
      <div class="partners-marquee-effect"></div>
      @for ($p = 0; $p < 4; $p++)
      <div class="partners-marquee-block" @if($p > 0) aria-hidden="true" @endif>
        <img loading="lazy" src="{{ asset('assets/images/clients/statron-international.webp') }}" alt="Statron International logo" title="Statron International" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/h2o-care.webp') }}" alt="H2O Care logo" title="H2O Care" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/hnc.webp') }}" alt="HNC logo" title="HNC" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/bizzone.webp') }}" alt="Bizzone logo" title="Bizzone" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/shuraa-advertising.webp') }}" alt="Shuraa Advertising logo" title="Shuraa Advertising" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/trip-factory.webp') }}" alt="Trip Factory logo" title="Trip Factory" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/tourzone.webp') }}" alt="TourZone logo" title="TourZone" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/aurae.webp') }}" alt="Aurae logo" title="Aurae" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/florkett.webp') }}" alt="FlorKett logo" title="FlorKett" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/limax.webp') }}" alt="Limax logo" title="Limax" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/corp-creators.webp') }}" alt="Corp Creators logo" title="Corp Creators" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/voltronix.webp') }}" alt="Voltronix logo" title="Voltronix" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/addhouse.webp') }}" alt="Addhouse logo" title="Addhouse" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/ontime-business-setup.webp') }}" alt="Ontime Business Setup logo" title="Ontime Business Setup" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/techfra-solutions.webp') }}" alt="Techfra Solutions logo" title="Techfra Solutions" class="partner-logo"/>
        <img loading="lazy" src="{{ asset('assets/images/clients/golden-fortune.webp') }}" alt="Golden Fortune logo" title="Golden Fortune" class="partner-logo"/>
      </div>
      @endfor
    </div>
  </div>
</section>

<!-- Hero Video Showcase Block (Restored) -->
<section class="section hero-video-showcase" style="padding-top: 10px; padding-bottom: 50px;">
  <div class="w-layout-blockcontainer container w-container">
    <div data-w-id="0ed03605-ba69-6f43-8b49-212fbabc3f9c" class="hero-video-block">
      <div data-poster-url="{{ asset('assets/images/hero-poster.webp') }}" data-video-urls="{{ asset('assets/videos/14433878_1920_1080_24fps_(1)_mp4.mp4') }},{{ asset('assets/videos/14433878_1920_1080_24fps_(1)_webm.webm') }}" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="hero-video w-background-video w-background-video-atom">
        <video id="0ed03605-ba69-6f43-8b49-212fbabc3f9d-video" autoplay loop muted playsinline style="background-image:url('{{ asset('assets/images/hero-poster.webp') }}')" data-wf-ignore="true" data-object-fit="cover">
          <source src="{{ asset('assets/videos/14433878_1920_1080_24fps_(1)_mp4.mp4') }}" type="video/mp4" data-wf-ignore="true"/>
          <source src="{{ asset('assets/videos/14433878_1920_1080_24fps_(1)_webm.webm') }}" type="video/webm" data-wf-ignore="true"/>
        </video>
        <noscript>
          <style>
            [data-wf-bgvideo-fallback-img] {
              display: none;
            }
            @media (prefers-reduced-motion: reduce) {
              [data-wf-bgvideo-fallback-img] {
                position: absolute;
                z-index: -100;
                display: inline-block;
                height: 100%;
                width: 100%;
                object-fit: cover;
              }
            }
          </style>
          <img data-wf-bgvideo-fallback-img="true" src="{{ asset('assets/images/hero-poster.webp') }}" alt="Zenerom Video Poster"/>
        </noscript>
        <div aria-live="polite">
          <button type="button" data-w-bg-video-control="true" aria-controls="0ed03605-ba69-6f43-8b49-212fbabc3f9d-video" class="w-backgroundvideo-backgroundvideoplaypausebutton video-play-button w-background-video--control" aria-label="Pause or play video">
            <span><img src="{{ asset('assets/icons/Pause.svg') }}" loading="lazy" alt="Pause video"/></span>
            <span hidden=""><img loading="lazy" alt="Play video" src="{{ asset('assets/icons/Play-24.svg') }}"/></span>
          </button>
        </div>
        <div class="hero-video-content-block">
          <div class="video-avatar-block">
            <div class="video-avatar-wrap">
              <img src="{{ asset('assets/images/video-avatar-1.webp') }}" loading="lazy" alt="Avatar Image" class="avatar-image _01"/>
              <img src="{{ asset('assets/images/video-avatar-2.webp') }}" loading="lazy" alt="Avatar Image" class="avatar-image"/>
              <img src="{{ asset('assets/images/video-avatar-3.webp') }}" loading="lazy" alt="Avatar Image" class="avatar-image"/>
            </div>
            <div class="video-avatar-right">
              <div class="avatar-star-wrap">
                <img src="{{ asset('assets/icons/star-01.svg') }}" loading="lazy" alt="Star" class="avatar-star"/>
                <img src="{{ asset('assets/icons/star-01.svg') }}" loading="lazy" alt="Star" class="avatar-star"/>
                <img src="{{ asset('assets/icons/star-01.svg') }}" loading="lazy" alt="Star" class="avatar-star"/>
                <img src="{{ asset('assets/icons/star-01.svg') }}" loading="lazy" alt="Star" class="avatar-star"/>
                <img src="{{ asset('assets/icons/star-01.svg') }}" loading="lazy" alt="Star" class="avatar-star"/>
              </div>
              <div class="avatar-text">100+ Worldwide Clients</div>
            </div>
          </div>
          <div class="video-bottom-wrap">
            <div class="video-left-wrap">
              <div class="video-left-title">Zenerom™ is built for <span class="white-text">Growth</span></div>
            </div>
            <div class="video-right-wrap">
              <div class="video-content-title">#1 Digital Growth Partner Dubai</div>
              <div class="video-icon-wrapper">
                <img src="{{ asset('assets/icons/newletter-icon-1.svg') }}" loading="lazy" alt="Award Wreath Left" class="video-icon left"/>
                <div class="video-icon-wrap">
                  <img src="{{ asset('assets/icons/newletter-icon-2.svg') }}" loading="lazy" alt="Partner Logo" class="video-icon"/>
                  <img src="{{ asset('assets/icons/newletter-icon-3.svg') }}" loading="lazy" alt="Partner Logo" class="video-icon _02"/>
                  <img src="{{ asset('assets/icons/newletter-icon-4.svg') }}" loading="lazy" alt="Partner Logo" class="video-icon _03"/>
                  <img src="{{ asset('assets/icons/newletter-icon-5.svg') }}" loading="lazy" alt="Partner Logo" class="video-icon _04"/>
                </div>
                <img src="{{ asset('assets/icons/newletter-icon-6.svg') }}" loading="lazy" alt="Award Wreath Right" class="video-icon left"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section_work-list" id="work">
  <div class="work-list_divider">
    <div class="work-list_divider-line" id="workDividerLine"></div>
  </div>
  
  <div class="work-list_component">
    <div class="work-list_container">
      <div class="work-list_head">
        <div class="work-list_heading-wrap work-list_reveal work-list_reveal-delay-1">
          <h2 class="heading-style-display">Selected<br/>Work.</h2>
          <div class="work-list_number"><div>{{ !empty($featuredWorks) && $featuredWorks->count() > 0 ? $featuredWorks->count() : 3 }}</div></div>
        </div>
        <div class="work-list_head-texts work-list_reveal work-list_reveal-delay-2">
          <h3 class="text-style-label hide-tablet">Projects</h3>
          <div class="text-size-grey-400">
            <p>Explore Zenerom’s published UAE case studies across search dominance, high-ROI performance marketing, and enterprise web platforms engineered for measurable growth.</p>
          </div>
        </div>
        <h2 class="heading-style-display hide-tablet work-list_reveal work-list_reveal-delay-3">©26</h2>
      </div>
    </div>

    <!-- Hover Cursor Follower Pill -->
    <div class="hover_wrap" aria-hidden="true">
      <div class="hover_pill" id="workHoverFollowerPill">
        <div class="hover_text-wrap">
          <span class="hover_text">View work</span>
        </div>
      </div>
    </div>

    <div class="work-list_wrapper-v1 w-dyn-list">
      <div role="list" class="work-list_list w-dyn-items">
        @forelse($featuredWorks as $work)
        <div role="listitem" class="work-list_item w-dyn-item">
          <div class="work-list_block">
            <a aria-label="{{ $work->client ?? $work->title }}" href="{{ route('work.show', $work->slug) }}" class="work-list_link w-inline-block">
              <img loading="lazy" src="{{ asset($work->image) }}" alt="{{ $work->title }}" class="work-list_img"/>
              <div class="work-list_name">
                <div class="work-list_dot"></div>
                <h3 class="work-list_title">{{ Str::contains($work->title, ':') ? trim(Str::before($work->title, ':')) : ($work->client ?? $work->title) }}</h3>
              </div>
            </a>
          </div>
        </div>
        @empty
        <div role="listitem" class="work-list_item w-dyn-item">
          <div class="work-list_block">
            <a aria-label="Florkett UAE" href="{{ route('work.show', 'florkett-seo') }}" class="work-list_link w-inline-block">
              <img loading="lazy" src="{{ asset('assets/images/industries/ecommerce.jpg') }}" alt="Florkett UAE" class="work-list_img"/>
              <div class="work-list_name">
                <div class="work-list_dot"></div>
                <h3 class="work-list_title">Florkett UAE</h3>
              </div>
            </a>
          </div>
        </div>
        <div role="listitem" class="work-list_item w-dyn-item">
          <div class="work-list_block">
            <a aria-label="LaLiga Academy" href="{{ route('work.show', 'laliga-ads') }}" class="work-list_link w-inline-block">
              <img loading="lazy" src="{{ asset('assets/images/industries/education.jpg') }}" alt="LaLiga Academy" class="work-list_img"/>
              <div class="work-list_name">
                <div class="work-list_dot"></div>
                <h3 class="work-list_title">LaLiga Academy</h3>
              </div>
            </a>
          </div>
        </div>
        <div role="listitem" class="work-list_item w-dyn-item">
          <div class="work-list_block">
            <a aria-label="Dubai Renovation" href="{{ route('work.show', 'dubai-renovation') }}" class="work-list_link w-inline-block">
              <img loading="lazy" src="{{ asset('assets/images/industries/real-estate.jpg') }}" alt="Dubai Renovation" class="work-list_img"/>
              <div class="work-list_name">
                <div class="work-list_dot"></div>
                <h3 class="work-list_title">Dubai Renovation</h3>
              </div>
            </a>
          </div>
        </div>
        @endforelse
      </div>
    </div>

    <div class="work-list_cta fade-in">
      <a href="{{ route('work') }}" class="button-secondary alture-btn w-inline-block">
        <span class="button_text">View all projects</span>
        <div class="button-line_dot"><div class="button_dot"></div></div>
      </a>
    </div>
  </div>
</section><section class="section about" id="about"><div class="w-layout-blockcontainer container w-container"><div class="about-wrapper"><div data-w-id="71267531-15b2-f795-bfbb-96fbbaee2255"  class="about-image-wrap"><img src="{{ asset('assets/images/about-image.webp') }}" loading="lazy" alt="About Image" class="about-image"/><div class="about-button"><a data-wf--secondary-button--variant="base" data-w-id="5cdb7b2d-4b72-38af-8934-b8c6c6e9359b" href="{{ route('contact') }}" class="secondary-button w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">Partner for Digital Growth</div></a></div></div><div class="about-content-block"><div class="about-top-content"><div class="section-subtitle-block about"><div class="subtitle-wrap"><div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" loading="lazy" alt="Inner Subtitle Icon" class="subtitle-icon"/></div><div class="section-subtitle">About Zenerom</div></div></div><div data-w-id="c48a0b1c-3911-eeed-e050-c391a252c54f"  class="about-top-title">Zenerom™ is a digital growth partner helping businesses turn online visibility into qualified leads and measurable revenue. We unite marketing strategy, modern development, and automation into practical systems built for long-term scale.</div></div><div data-w-id="c704db7b-5726-ec50-d2f6-f3a66a125c5d"  class="about-bottom-content"><div class="result-title-wrap"><div class="dot-circle"></div><div class="result-title">RESULTS</div></div><div class="about-counter-wrap"><div class="about-single-item"><div class="counter-wrapper about"><div class="counter-overflow about"><div class="counter-wrap"><div class="counter-numbers _01"><div class="counter-number">0</div><div class="counter-number">1</div><div class="counter-number">2</div><div class="counter-number">3</div><div class="counter-number">4</div><div class="counter-number">5</div><div class="counter-number">6</div><div class="counter-number">7</div><div class="counter-number">8</div><div class="counter-number">4</div></div><div class="counter-number">.</div><div class="counter-numbers _02"><div class="counter-number">9</div><div class="counter-number">9</div><div class="counter-number">7</div><div class="counter-number">6</div><div class="counter-number">5</div><div class="counter-number">4</div><div class="counter-number">3</div><div class="counter-number">2</div><div class="counter-number">1</div><div class="counter-number">0</div></div><div class="counter-number">%</div></div></div></div><p class="about-item-title">Average Client Rating</p></div><div class="about-single-item"><div class="counter-wrapper about"><div class="counter-overflow about"><div class="counter-wrap"><div class="counter-numbers _01"><div class="counter-number">0</div><div class="counter-number">1</div><div class="counter-number">2</div><div class="counter-number">3</div><div class="counter-number">4</div><div class="counter-number">5</div><div class="counter-number">6</div><div class="counter-number">7</div><div class="counter-number">8</div><div class="counter-number">2</div></div><div class="counter-numbers _02"><div class="counter-number">3</div><div class="counter-number">9</div><div class="counter-number">7</div><div class="counter-number">6</div><div class="counter-number">5</div><div class="counter-number">4</div><div class="counter-number">3</div><div class="counter-number">2</div><div class="counter-number">1</div><div class="counter-number">0</div></div><div class="counter-numbers _01"><div class="counter-number">0</div><div class="counter-number">1</div><div class="counter-number">2</div><div class="counter-number">3</div><div class="counter-number">4</div><div class="counter-number">5</div><div class="counter-number">6</div><div class="counter-number">7</div><div class="counter-number">8</div><div class="counter-number">9</div></div></div></div></div><p class="about-item-title">Completed Projects</p></div><div class="about-single-item"><div class="counter-wrapper about"><div class="counter-overflow about"><div class="counter-wrap"><div class="counter-numbers _01"><div class="counter-number">0</div><div class="counter-number">1</div><div class="counter-number">2</div><div class="counter-number">3</div><div class="counter-number">4</div><div class="counter-number">5</div><div class="counter-number">6</div><div class="counter-number">7</div><div class="counter-number">8</div><div class="counter-number">1</div></div><div class="counter-numbers _02"><div class="counter-number">0</div><div class="counter-number">9</div><div class="counter-number">7</div><div class="counter-number">6</div><div class="counter-number">5</div><div class="counter-number">4</div><div class="counter-number">3</div><div class="counter-number">2</div><div class="counter-number">1</div><div class="counter-number">0</div></div><div class="counter-number">+</div></div></div><div class="years">Years</div></div><p class="about-item-title">Industry Experience</p></div></div></div></div></div></div></section><section class="section capabilities" id="services"><div class="w-layout-blockcontainer container w-container"><div class="capabilities-wrapper"><div class="section-title-wrap capabilities"><div class="section-subtitle-block"><div class="subtitle-wrap"><div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" loading="lazy" alt="Inner Subtitle Icon" class="subtitle-icon"/></div><div class="section-subtitle">Our Capabilities</div></div></div><h2 class="section-title capalilities"><span class="gray-color-text">Engineered for</span> Business Growth</h2></div><div class="capabilities-wrap"><div class="capabilities-item-block"><div class="capabilities-content-block"><div class="capabilities-content-wrap"><div class="capabilities-year-block"><div class="capabilities-year">2026</div></div><div class="capabilities-title-block"><div class="capabilities-title">SEO &amp; Search Marketing</div><div class="capabilities-hover-wrap"><div class="capabilities-hover-content"><div class="capabilities-overview"><div class="overview-top-wrap"><div class="overview-icon-wrap"><img src="{{ asset('assets/icons/overview-icon.svg') }}" loading="lazy" alt="Award Icon" class="overview-icon"/></div><div class="overview-subtitle">Overview</div></div><p class="overview-details">Improves search visibility and drives qualified organic traffic through technical SEO, strategic keyword targeting, on-page optimization, and high-authority search marketing tailored for sustainable UAE market growth.</p></div><div class="overview-image-wrap"><img src="{{ asset('assets/images/service-image-1.webp') }}" loading="lazy" sizes="(max-width: 684px) 100vw, 684px" srcset="{{ asset('assets/images/service-image-1-p-500.webp') }} 500w, {{ asset('assets/images/service-image-1.webp') }} 684w" alt="Overview Image" class="overview-image"/></div></div></div></div></div><div class="capabilities-button-wrap"><a href="{{ route('contact') }}" class="secondary-button capalilities w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">Project Inquiry</div></a></div><div class="capabilities-line-wrap"><div class="capabilities-line"></div></div></div></div><div class="capabilities-item-block"><div class="capabilities-content-block"><div class="capabilities-content-wrap"><div class="capabilities-year-block"><div class="capabilities-year">2023</div></div><div class="capabilities-title-block"><div class="capabilities-title">Performance Marketing &amp; PPC</div><div class="capabilities-hover-wrap"><div class="capabilities-hover-content"><div class="capabilities-overview"><div class="overview-top-wrap"><div class="overview-icon-wrap"><img src="{{ asset('assets/icons/overview-icon.svg') }}" loading="lazy" alt="Award Icon" class="overview-icon"/></div><div class="overview-subtitle">Overview</div></div><p class="overview-details">Maximizes return on advertising spend through targeted Google Ads, Meta campaigns, and conversion-focused paid funnels. We turn campaign data into high-intent inbound leads and measurable customer acquisitions.</p></div><div class="overview-image-wrap"><img src="{{ asset('assets/images/service-image-2.webp') }}" loading="lazy" sizes="(max-width: 684px) 100vw, 684px" srcset="{{ asset('assets/images/service-image-2-p-500.webp') }} 500w, {{ asset('assets/images/service-image-2.webp') }} 684w" alt="Overview Image" class="overview-image"/></div></div></div></div></div><div class="capabilities-button-wrap"><a href="{{ route('contact') }}" class="secondary-button capalilities w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">Project Inquiry</div></a></div><div class="capabilities-line-wrap"><div class="capabilities-line"></div></div></div></div><div class="capabilities-item-block"><div class="capabilities-content-block"><div class="capabilities-content-wrap"><div class="capabilities-year-block"><div class="capabilities-year">2022</div></div><div class="capabilities-title-block"><div class="capabilities-title">Brand Strategy &amp; Identity</div><div class="capabilities-hover-wrap"><div class="capabilities-hover-content"><div class="capabilities-overview"><div class="overview-top-wrap"><div class="overview-icon-wrap"><img src="{{ asset('assets/icons/overview-icon.svg') }}" loading="lazy" alt="Award Icon" class="overview-icon"/></div><div class="overview-subtitle">Overview</div></div><p class="overview-details">Builds distinctive visual identities, positioning frameworks, and brand systems that resonate with target audiences. We craft memorable brand narratives, guidelines, and collateral that elevate credibility across every customer touchpoint.</p></div><div class="overview-image-wrap"><img src="{{ asset('assets/images/service-image-3.webp') }}" loading="lazy" sizes="(max-width: 684px) 100vw, 684px" srcset="{{ asset('assets/images/service-image-3-p-500.webp') }} 500w, {{ asset('assets/images/service-image-3.webp') }} 684w" alt="Overview Image" class="overview-image"/></div></div></div></div></div><div class="capabilities-button-wrap"><a href="{{ route('contact') }}" class="secondary-button capalilities w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">Project Inquiry</div></a></div><div class="capabilities-line-wrap"><div class="capabilities-line"></div></div></div></div><div class="capabilities-item-block"><div class="capabilities-content-block"><div class="capabilities-content-wrap"><div class="capabilities-year-block"><div class="capabilities-year">2019</div></div><div class="capabilities-title-block"><div class="capabilities-title">Custom Website Development</div><div class="capabilities-hover-wrap"><div class="capabilities-hover-content"><div class="capabilities-overview"><div class="overview-top-wrap"><div class="overview-icon-wrap"><img src="{{ asset('assets/icons/overview-icon.svg') }}" loading="lazy" alt="Award Icon" class="overview-icon"/></div><div class="overview-subtitle">Overview</div></div><p class="overview-details">Engineers fast, secure, and responsive web platforms designed for high conversion, search engine dominance, and effortless scalability as your business operations expand.</p></div><div class="overview-image-wrap"><img src="{{ asset('assets/images/service-image-4.webp') }}" loading="lazy" alt="Overview Image" class="overview-image"/></div></div></div></div></div><div class="capabilities-button-wrap"><a href="{{ route('contact') }}" class="secondary-button capalilities w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">Project Inquiry</div></a></div><div class="capabilities-line-wrap"><div class="capabilities-line"></div></div></div></div><div class="capabilities-item-block"><div class="capabilities-content-block"><div class="capabilities-content-wrap"><div class="capabilities-year-block"><div class="capabilities-year">2013</div></div><div class="capabilities-title-block"><div class="capabilities-title">Social Media Marketing</div><div class="capabilities-hover-wrap"><div class="capabilities-hover-content"><div class="capabilities-overview"><div class="overview-top-wrap"><div class="overview-icon-wrap"><img src="{{ asset('assets/icons/overview-icon.svg') }}" loading="lazy" alt="Award Icon" class="overview-icon"/></div><div class="overview-subtitle">Overview</div></div><p class="overview-details">Engages target audiences through creative content production, community management, and strategic paid social campaigns that build brand affinity and drive consistent user action across major digital channels.</p></div><div class="overview-image-wrap"><img src="{{ asset('assets/images/service-image-5.webp') }}" loading="lazy" sizes="(max-width: 684px) 100vw, 684px" srcset="{{ asset('assets/images/service-image-5-p-500.webp') }} 500w, {{ asset('assets/images/service-image-5.webp') }} 684w" alt="Overview Image" class="overview-image"/></div></div></div></div></div><div class="capabilities-button-wrap"><a href="{{ route('contact') }}" class="secondary-button capalilities w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">Project Inquiry</div></a></div><div class="capabilities-line-wrap"><div class="capabilities-line"></div></div></div></div><div class="capabilities-item-block"><div class="capabilities-content-block"><div class="capabilities-content-wrap"><div class="capabilities-year-block"><div class="capabilities-year">2023</div></div><div class="capabilities-title-block"><div class="capabilities-title">Mobile App Development</div><div class="capabilities-hover-wrap"><div class="capabilities-hover-content"><div class="capabilities-overview"><div class="overview-top-wrap"><div class="overview-icon-wrap"><img src="{{ asset('assets/icons/overview-icon.svg') }}" loading="lazy" alt="Award Icon" class="overview-icon"/></div><div class="overview-subtitle">Overview</div></div><p class="overview-details">Builds intuitive, high-performance mobile applications for iOS and Android that solve business challenges, engage users effectively, and unlock scalable digital product experiences.</p></div><div class="overview-image-wrap"><img src="{{ asset('assets/images/service-image-6.webp') }}" loading="lazy" sizes="(max-width: 684px) 100vw, 684px" srcset="{{ asset('assets/images/service-image-6-p-500.webp') }} 500w, {{ asset('assets/images/service-image-6.webp') }} 684w" alt="Overview Image" class="overview-image"/></div></div></div></div></div><div class="capabilities-button-wrap"><a href="{{ route('contact') }}" class="secondary-button capalilities w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">Project Inquiry</div></a></div><div class="capabilities-line-wrap"><div class="capabilities-line"></div></div></div></div><div class="capabilities-item-block"><div class="capabilities-content-block"><div class="capabilities-content-wrap"><div class="capabilities-year-block"><div class="capabilities-year">2021</div></div><div class="capabilities-title-block"><div class="capabilities-title">CRM &amp; Zoho Automation</div><div class="capabilities-hover-wrap"><div class="capabilities-hover-content"><div class="capabilities-overview"><div class="overview-top-wrap"><div class="overview-icon-wrap"><img src="{{ asset('assets/icons/overview-icon.svg') }}" loading="lazy" alt="Award Icon" class="overview-icon"/></div><div class="overview-subtitle">Overview</div></div><p class="overview-details">Streamlines lead pipelines, customer follow-up, and business workflows by deploying custom Zoho CRM architectures and marketing automation systems that maximize operational efficiency.</p></div><div class="overview-image-wrap"><img src="{{ asset('assets/images/service-image-7.webp') }}" loading="lazy" sizes="(max-width: 684px) 100vw, 684px" srcset="{{ asset('assets/images/service-image-7-p-500.webp') }} 500w, {{ asset('assets/images/service-image-7.webp') }} 684w" alt="Overview Image" class="overview-image"/></div></div></div></div></div><div class="capabilities-button-wrap"><a href="{{ route('contact') }}" class="secondary-button capalilities w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">Project Inquiry</div></a></div><div class="capabilities-line-wrap"><div class="capabilities-line"></div></div></div></div><div class="capabilities-item-block"><div class="capabilities-content-block"><div class="capabilities-content-wrap"><div class="capabilities-year-block"><div class="capabilities-year">2025</div></div><div class="capabilities-title-block"><div class="capabilities-title">Ecommerce Growth Solutions</div><div class="capabilities-hover-wrap"><div class="capabilities-hover-content"><div class="capabilities-overview"><div class="overview-top-wrap"><div class="overview-icon-wrap"><img src="{{ asset('assets/icons/overview-icon.svg') }}" loading="lazy" alt="Award Icon" class="overview-icon"/></div><div class="overview-subtitle">Overview</div></div><p class="overview-details">Delivers end-to-end ecommerce platforms with seamless checkout architectures, automated inventory sync, and conversion rate optimization designed to increase average order value.</p></div><div class="overview-image-wrap"><img src="{{ asset('assets/images/service-image-8.webp') }}" loading="lazy" sizes="(max-width: 684px) 100vw, 684px" srcset="{{ asset('assets/images/service-image-8-p-500.webp') }} 500w, {{ asset('assets/images/service-image-8.webp') }} 684w" alt="Overview Image" class="overview-image"/></div></div></div></div></div><div class="capabilities-button-wrap"><a href="{{ route('contact') }}" class="secondary-button capalilities w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">Project Inquiry</div></a></div><div class="capabilities-line-wrap"><div class="capabilities-line"></div></div></div></div><div class="capabilities-item-block"><div class="capabilities-content-block"><div class="capabilities-content-wrap"><div class="capabilities-year-block"><div class="capabilities-year">2024</div></div><div class="capabilities-title-block"><div class="capabilities-title">IT Team Outsourcing</div><div class="capabilities-hover-wrap"><div class="capabilities-hover-content"><div class="capabilities-overview"><div class="overview-top-wrap"><div class="overview-icon-wrap"><img src="{{ asset('assets/icons/overview-icon.svg') }}" loading="lazy" alt="Award Icon" class="overview-icon"/></div><div class="overview-subtitle">Overview</div></div><p class="overview-details">Provides dedicated software developers, digital marketers, and technical specialists who seamlessly integrate with your in-house team to accelerate delivery while reducing overhead.</p></div><div class="overview-image-wrap"><img src="{{ asset('assets/images/service-image-9.webp') }}" loading="lazy" sizes="(max-width: 684px) 100vw, 684px" srcset="{{ asset('assets/images/service-image-9-p-500.webp') }} 500w, {{ asset('assets/images/service-image-9.webp') }} 684w" alt="Overview Image" class="overview-image"/></div></div></div></div></div><div class="capabilities-button-wrap"><a href="{{ route('contact') }}" class="secondary-button capalilities w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">Project Inquiry</div></a></div><div class="capabilities-line-wrap"><div class="capabilities-line"></div></div></div></div><div class="capabilities-item-block"><div class="capabilities-content-block"><div class="capabilities-content-wrap"><div class="capabilities-year-block"><div class="capabilities-year">2026</div></div><div class="capabilities-title-block"><div class="capabilities-title">Lead Generation</div><div class="capabilities-hover-wrap"><div class="capabilities-hover-content"><div class="capabilities-overview"><div class="overview-top-wrap"><div class="overview-icon-wrap"><img src="{{ asset('assets/icons/overview-icon.svg') }}" loading="lazy" alt="Award Icon" class="overview-icon"/></div><div class="overview-subtitle">Overview</div></div><p class="overview-details">Captures and qualifies high-intent B2B and B2C buyer inquiries through multi-channel inbound funnels and systematic nurturing systems.</p></div><div class="overview-image-wrap"><img src="{{ asset('assets/images/service-image-10.webp') }}" loading="lazy" sizes="(max-width: 684px) 100vw, 684px" srcset="{{ asset('assets/images/service-image-10-p-500.webp') }} 500w, {{ asset('assets/images/service-image-10.webp') }} 684w" alt="Overview Image" class="overview-image"/></div></div></div></div></div><div class="capabilities-button-wrap"><a href="{{ route('contact') }}" class="secondary-button capalilities w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">Project Inquiry</div></a></div><div class="capabilities-line-wrap"><div class="capabilities-line"></div></div></div></div></div></div></div></section><section class="section value" id="industries"><div class="w-layout-blockcontainer container w-container"><div class="value-wrapper"><div class="value-top-title-wrap"><div data-w-id="6f5288ea-2d78-873a-d112-bc98af411fb5"  class="value-subtitle-block"><div class="subtitle-wrap"><div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" loading="lazy" alt="Inner Subtitle Icon" class="subtitle-icon"/></div><div class="section-subtitle">Our Values</div></div></div><h2 data-w-id="924142f7-ede2-34fe-0d85-40fbdb6f41cb"  class="value-top-title">Our values guide every partnership we build, shaping how we analyze business goals, craft marketing <span class="gray-color-text">solutions, and engineer scalable systems that drive growth.</span></h2></div><div class="value-wrap"><div class="value-single-block"><div class="value-top-wrap"><img src="{{ asset('assets/icons/Value-icon-1.svg') }}" loading="lazy" alt="Value Icon" class="value-icon"/></div><div class="value-content-block"><div class="value-item-title">Clear Strategy</div><p class="value-item-details">We ground every project in clear analytics, aligning marketing and tech decisions with your business purpose, audience intent, and growth goals.</p></div></div><div class="value-single-block"><div class="value-top-wrap"><img src="{{ asset('assets/icons/Value-icon-2.svg') }}" loading="lazy" alt="Value Icon" class="value-icon"/></div><div class="value-content-block"><div class="value-item-title">Long-Term Partnership</div><p class="value-item-details">We work closely with leadership teams, providing transparent reporting, direct communication, and a shared commitment to sustainable business growth.</p></div></div><div class="value-single-block"><div class="value-top-wrap"><div class="counter-wrapper about"><div class="counter-overflow value"><div class="counter-wrap"><div class="counter-numbers _01"><div class="counter-number">0</div><div class="counter-number">1</div><div class="counter-number">2</div><div class="counter-number">3</div><div class="counter-number">4</div><div class="counter-number">5</div><div class="counter-number">6</div><div class="counter-number">7</div><div class="counter-number">8</div><div class="counter-number">2</div></div><div class="counter-numbers _02"><div class="counter-number">0</div><div class="counter-number">9</div><div class="counter-number">7</div><div class="counter-number">6</div><div class="counter-number">5</div><div class="counter-number">4</div><div class="counter-number">3</div><div class="counter-number">2</div><div class="counter-number">1</div><div class="counter-number">0</div></div><div class="counter-numbers _01"><div class="counter-number">0</div><div class="counter-number">1</div><div class="counter-number">2</div><div class="counter-number">3</div><div class="counter-number">4</div><div class="counter-number">5</div><div class="counter-number">6</div><div class="counter-number">7</div><div class="counter-number">8</div><div class="counter-number">0</div></div><div class="counter-number">+</div></div></div><div class="value-text">Partnerships</div></div></div><div class="value-content-block"><div class="value-marquee"><div class="value-flex-wrap">
      <div class="value-marquee-item">
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/statron-international.webp') }}" alt="Statron International logo" title="Statron International" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/h2o-care.webp') }}" alt="H2O Care logo" title="H2O Care" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/hnc.webp') }}" alt="HNC logo" title="HNC" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/bizzone.webp') }}" alt="Bizzone logo" title="Bizzone" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/shuraa-advertising.webp') }}" alt="Shuraa Advertising logo" title="Shuraa Advertising" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/trip-factory.webp') }}" alt="Trip Factory logo" title="Trip Factory" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/tourzone.webp') }}" alt="TourZone logo" title="TourZone" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/aurae.webp') }}" alt="Aurae logo" title="Aurae" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/florkett.webp') }}" alt="FlorKett logo" title="FlorKett" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/limax.webp') }}" alt="Limax logo" title="Limax" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/corp-creators.webp') }}" alt="Corp Creators logo" title="Corp Creators" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/voltronix.webp') }}" alt="Voltronix logo" title="Voltronix" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/addhouse.webp') }}" alt="Addhouse logo" title="Addhouse" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/ontime-business-setup.webp') }}" alt="Ontime Business Setup logo" title="Ontime Business Setup" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/techfra-solutions.webp') }}" alt="Techfra Solutions logo" title="Techfra Solutions" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/golden-fortune.webp') }}" alt="Golden Fortune logo" title="Golden Fortune" class="brand-logo-img"/></div>
      </div>
      <div class="value-marquee-item" aria-hidden="true">
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/statron-international.webp') }}" alt="Statron International logo" title="Statron International" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/h2o-care.webp') }}" alt="H2O Care logo" title="H2O Care" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/hnc.webp') }}" alt="HNC logo" title="HNC" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/bizzone.webp') }}" alt="Bizzone logo" title="Bizzone" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/shuraa-advertising.webp') }}" alt="Shuraa Advertising logo" title="Shuraa Advertising" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/trip-factory.webp') }}" alt="Trip Factory logo" title="Trip Factory" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/tourzone.webp') }}" alt="TourZone logo" title="TourZone" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/aurae.webp') }}" alt="Aurae logo" title="Aurae" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/florkett.webp') }}" alt="FlorKett logo" title="FlorKett" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/limax.webp') }}" alt="Limax logo" title="Limax" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/corp-creators.webp') }}" alt="Corp Creators logo" title="Corp Creators" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/voltronix.webp') }}" alt="Voltronix logo" title="Voltronix" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/addhouse.webp') }}" alt="Addhouse logo" title="Addhouse" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/ontime-business-setup.webp') }}" alt="Ontime Business Setup logo" title="Ontime Business Setup" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/techfra-solutions.webp') }}" alt="Techfra Solutions logo" title="Techfra Solutions" class="brand-logo-img"/></div>
        <div class="brand-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/golden-fortune.webp') }}" alt="Golden Fortune logo" title="Golden Fortune" class="brand-logo-img"/></div>
      </div>
    </div></div><div class="value-button"><a data-wf--primary-button--variant="base" data-w-id="12e09f55-8dce-f1fa-ec05-e408d323fce0" href="{{ route('about') }}" class="primary-button w-inline-block"><div class="button-dot-wrap"><div class="button-dot"></div><div class="button-bg"></div></div><div class="button-text">About Zenerom</div></a></div></div></div></div></div></div></section><section class="section pricing" id="solutions"><div class="w-layout-blockcontainer container w-container"><div class="pricing-wrapper"><div class="section-title-wrap"><div class="section-subtitle-block center"><div class="subtitle-wrap"><div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" loading="lazy" alt="Inner Subtitle Icon" class="subtitle-icon"/></div><div class="section-subtitle">Growth Solutions</div></div></div><h2 class="section-title">Tailored Plans</h2><p data-w-id="0a677779-4744-335c-e75a-a9388a7b1ff1"  class="section-details pricing">Transparent models designed for ambitious businesses needing strategic marketing, clear ROI,</p></div><div data-w-id="8b7dc256-696c-a748-a33e-acb8f23a1a21"  class="pricing-wrap"><div class="pricing-left-wrap"><div class="pricing-title-wrap"><h3 class="pricing-title">Let’s scale <span class="white-text">business Growth</span></h3><p class="pricing-details"><span class="white-text">Scale your digital presence with</span> data-driven marketing and technology.</p></div><div class="pricing-button"><a data-wf--secondary-button--variant="base" data-w-id="5cdb7b2d-4b72-38af-8934-b8c6c6e9359b" href="{{ route('contact') }}" class="secondary-button w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">Let’s Talk</div></a></div><div class="pricing-item-shape"></div></div><div class="pricing-right-wrap"><div class="pricing-top-content"><div class="pricing-icon-wrap"><img src="{{ asset('assets/icons/price_icon.svg') }}" loading="lazy" alt="pricing icon" class="pricing-icon"/></div><div class="plan-title-wrap"><h4 class="plan-namr">Growth</h4><p class="plan-details"><span class="black-color">Ideal for ambitious startups and</span> enterprises scaling marketing and technology</p></div><div class="pricing-content-block"><div class="plan-price-wrap"><h4 class="price">$4,500</h4><div class="plan-duration">Starting</div></div><ul role="list" class="plan-list-wrap w-list-unstyled"><li class="plan-list-item"><img src="{{ asset('assets/icons/Check-Icon.svg') }}" loading="lazy" alt="Plan Item Icon" class="plan-item-icon"/><div class="plan-list-item-text">Full-funnel performance marketing</div></li><li class="plan-list-item"><img src="{{ asset('assets/icons/Check-Icon.svg') }}" loading="lazy" alt="Plan Item Icon" class="plan-item-icon"/><div class="plan-list-item-text">SEO &amp; search engine ranking</div></li><li class="plan-list-item"><img src="{{ asset('assets/icons/Check-Icon.svg') }}" loading="lazy" alt="Plan Item Icon" class="plan-item-icon"/><div class="plan-list-item-text">High-conversion web development</div></li><li class="plan-list-item"><img src="{{ asset('assets/icons/Check-Icon.svg') }}" loading="lazy" alt="Plan Item Icon" class="plan-item-icon"/><div class="plan-list-item-text">CRM workflow &amp; lead automation</div></li><li class="plan-list-item"><img src="{{ asset('assets/icons/Check-Icon.svg') }}" loading="lazy" alt="Plan Item Icon" class="plan-item-icon"/><div class="plan-list-item-text">Social media &amp; content strategy</div></li><li class="plan-list-item"><img src="{{ asset('assets/icons/Check-Icon.svg') }}" loading="lazy" alt="Plan Item Icon" class="plan-item-icon"/><div class="plan-list-item-text">Dedicated account manager &amp; support</div></li></ul></div></div></div></div><div class="pricing-bottom-wrap"><div data-w-id="722efae9-8c11-c520-bc88-aad7c8e187b5"  class="approach-top-wrap"><h4 class="approach-title">A data-driven approach <span class="gray-color-text">built for business growth</span></h4></div><div class="approach-wrap"><div class="approach-single-wrap"><div class="approach-icon-wrap"><img src="{{ asset('assets/icons/Approach_icon_1.svg') }}" loading="lazy" alt="Process Icon" class="approach-icon"/></div><div class="approach-content-block"><div class="approach-item-title">Growth Strategy</div><p class="approach-item-details">Every engagement starts with audit and strategy, ensuring every channel delivers ROI.</p></div></div><div class="approach-single-wrap"><div class="approach-icon-wrap"><img src="{{ asset('assets/icons/Approach_icon_2.svg') }}" loading="lazy" alt="Process Icon" class="approach-icon"/></div><div class="approach-content-block"><div class="approach-item-title">Domain Experts</div><p class="approach-item-details">Work directly with certified marketing and tech specialists who understand growth.</p></div></div><div class="approach-single-wrap"><div class="approach-icon-wrap"><img src="{{ asset('assets/icons/Approach_icon_3.svg') }}" loading="lazy" alt="Process Icon" class="approach-icon"/></div><div class="approach-content-block"><div class="approach-item-title">Clear Execution</div><p class="approach-item-details">Clear KPIs, defined milestones, and transparent reporting so you always stay ahead.</p></div></div></div></div></div></div></section><section class="section review"><div class="w-layout-blockcontainer container w-container"><div class="review-wrapper"><div class="section-title-wrap"><div class="section-subtitle-block center"><div class="subtitle-wrap"><div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" loading="lazy" alt="Inner Subtitle Icon" class="subtitle-icon"/></div><div class="section-subtitle">Results &amp; Reviews</div></div></div><h2 class="section-title review"><span class="gray-color-text">How businesses</span> grow with Zenerom</h2><p data-w-id="1f491af9-64cd-f682-efdd-328be0894dd1"  class="section-details">See how leading brands partner with Zenerom to expand market reach, attract qualified leads.</p></div><div class="review-wrap"><div class="review-card-wrap"><div class="review-single-block"><div class="review-front-wrap"><div class="review-content-wrap"><div class="review-logo-wrap"><img src="{{ asset('assets/icons/Review_front_icon_-1.svg') }}" loading="lazy" alt=" Review" class="review-logo"/></div><div class="review-counter-wrap"><div class="counter-wrapper"><div class="counter-overflow"><div class="counter-wrap"><div class="counter-number">+</div><div class="counter-numbers _01"><div class="counter-number">0</div><div class="counter-number">1</div><div class="counter-number">2</div><div class="counter-number">3</div><div class="counter-number">4</div><div class="counter-number">5</div><div class="counter-number">6</div><div class="counter-number">7</div><div class="counter-number">8</div><div class="counter-number">3</div></div><div class="counter-numbers _02"><div class="counter-number">8</div><div class="counter-number">9</div><div class="counter-number">7</div><div class="counter-number">6</div><div class="counter-number">5</div><div class="counter-number">4</div><div class="counter-number">3</div><div class="counter-number">2</div><div class="counter-number">1</div><div class="counter-number">0</div></div><div class="counter-number">%</div></div></div></div><div class="review-counter-title">More Inbound Leads</div></div></div><img src="{{ asset('assets/images/review-image-1.webp') }}" loading="lazy" alt="Review Image" class="review-image"/><div class="review-item-overlay"></div></div><div class="review-back-wrap"><div class="review-logo-wrap"><img src="{{ asset('assets/icons/Review_front_icon_-1.svg') }}" loading="lazy" alt=" Review" class="review-logo"/></div><div class="review-details-wrap"><p class="revice-details">“Zenerom transformed our search ranking and lead generation pipeline. Inbound inquiries increased within the first month, delivering high-quality business leads.”</p></div><div class="review-author-block"><div class="review-author-name">Dalgin Wilson</div><div class="review-author-post">Managing Director, Tourzone</div></div></div></div></div><div class="review-card-wrap"><div class="review-single-block"><div class="review-front-wrap"><div class="review-content-wrap"><div class="review-logo-wrap"><img src="{{ asset('assets/icons/Review_icon_-2.svg') }}" loading="lazy" alt=" Review" class="review-logo"/></div><div class="review-counter-wrap"><div class="counter-wrapper"><div class="counter-overflow"><div class="counter-wrap"><div class="counter-numbers _01"><div class="counter-number">0</div><div class="counter-number">1</div><div class="counter-number">2</div><div class="counter-number">3</div><div class="counter-number">4</div><div class="counter-number">5</div><div class="counter-number">6</div><div class="counter-number">7</div><div class="counter-number">8</div><div class="counter-number">9</div></div><div class="counter-numbers _02"><div class="counter-number">2</div><div class="counter-number">9</div><div class="counter-number">7</div><div class="counter-number">6</div><div class="counter-number">5</div><div class="counter-number">4</div><div class="counter-number">3</div><div class="counter-number">2</div><div class="counter-number">1</div><div class="counter-number">0</div></div><div class="counter-number">%</div></div></div></div><div class="review-counter-title">Campaign Growth</div></div></div><img src="{{ asset('assets/images/review-image-2.webp') }}" loading="lazy" alt="Review Image" class="review-image"/><div class="review-item-overlay"></div></div><div class="review-back-wrap _02"><div class="review-logo-wrap"><img src="{{ asset('assets/icons/Review_icon_-2.svg') }}" loading="lazy" alt=" Review" class="review-logo"/></div><div class="review-details-wrap"><p class="revice-details">“Zenerom helped us build targeted ad campaigns that generated high-intent leads and converted into solid sales. Highly recommend their digital marketing team!”</p></div><div class="review-author-block"><div class="review-author-name">Adil K.T.</div><div class="review-author-post">Director, Shuraa Advertising</div></div></div></div></div><div class="review-card-wrap"><div class="review-single-block"><div class="review-front-wrap"><div class="review-content-wrap"><div class="review-logo-wrap"><img src="{{ asset('assets/icons/Review_icon_-3.svg') }}" loading="lazy" alt=" Review" class="review-logo"/></div><div class="review-counter-wrap"><div class="counter-wrapper"><div class="counter-overflow"><div class="counter-wrap"><div class="counter-numbers _01"><div class="counter-number">0</div><div class="counter-number">1</div><div class="counter-number">2</div><div class="counter-number">3</div><div class="counter-number">4</div><div class="counter-number">5</div><div class="counter-number">6</div><div class="counter-number">7</div><div class="counter-number">8</div><div class="counter-number">2</div></div><div class="counter-number">x</div></div></div></div><div class="review-counter-title">Organic Visibility</div></div></div><img src="{{ asset('assets/images/review-image-3.webp') }}" loading="lazy" alt="Review Image" class="review-image"/><div class="review-item-overlay"></div></div><div class="review-back-wrap"><div class="review-logo-wrap"><img src="{{ asset('assets/icons/Review_icon_-3.svg') }}" loading="lazy" alt=" Review" class="review-logo"/></div><div class="review-details-wrap"><p class="revice-details">“Zenerom delivered an outstanding website and effective SEO roadmap. They were very professional, delivered on time, and helped us scale our online visibility.”</p></div><div class="review-author-block"><div class="review-author-name">Bincy Ammu</div><div class="review-author-post">Founder, CorpCreators</div></div></div></div></div></div></div></div></section><section class="section founder"><div class="w-layout-blockcontainer container w-container"><div class="founder-wrapper"><div class="founder-top-wrap"><div data-w-id="23d58744-e8f2-f674-8dd0-e0e52c587e36"  class="founder-title-wrap"><h2 class="founder-title">Businesses across UAE trust us to <span class="gray-color-text">scale digital marketing and technology</span></h2></div><div data-w-id="e22338ec-6fc3-b80c-8b8a-d03f7e177fe8"  class="founder-button-wrap"><a data-wf--primary-button--variant="base" data-w-id="12e09f55-8dce-f1fa-ec05-e408d323fce0" href="{{ route('contact') }}" class="primary-button w-inline-block"><div class="button-dot-wrap"><div class="button-dot"></div><div class="button-bg"></div></div><div class="button-text">Book a Call</div></a></div></div><div data-w-id="9308e84f-40a7-16bf-5c23-b0f825d6145f" class="founder-wrap partners-marquee-wrapper">
    <div class="partners-marquee-effect"></div>
    <div class="founder-marquee-block partners-marquee-block">
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/statron-international.webp') }}" alt="Statron International logo" title="Statron International" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/h2o-care.webp') }}" alt="H2O Care logo" title="H2O Care" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/hnc.webp') }}" alt="HNC logo" title="HNC" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/bizzone.webp') }}" alt="Bizzone logo" title="Bizzone" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/shuraa-advertising.webp') }}" alt="Shuraa Advertising logo" title="Shuraa Advertising" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/trip-factory.webp') }}" alt="Trip Factory logo" title="Trip Factory" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/tourzone.webp') }}" alt="TourZone logo" title="TourZone" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/aurae.webp') }}" alt="Aurae logo" title="Aurae" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/florkett.webp') }}" alt="FlorKett logo" title="FlorKett" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/limax.webp') }}" alt="Limax logo" title="Limax" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/corp-creators.webp') }}" alt="Corp Creators logo" title="Corp Creators" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/voltronix.webp') }}" alt="Voltronix logo" title="Voltronix" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/addhouse.webp') }}" alt="Addhouse logo" title="Addhouse" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/ontime-business-setup.webp') }}" alt="Ontime Business Setup logo" title="Ontime Business Setup" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/techfra-solutions.webp') }}" alt="Techfra Solutions logo" title="Techfra Solutions" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/golden-fortune.webp') }}" alt="Golden Fortune logo" title="Golden Fortune" class="founder-logo-img"/></div>
    </div>
    <div class="founder-marquee-block partners-marquee-block" aria-hidden="true">
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/statron-international.webp') }}" alt="Statron International logo" title="Statron International" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/h2o-care.webp') }}" alt="H2O Care logo" title="H2O Care" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/hnc.webp') }}" alt="HNC logo" title="HNC" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/bizzone.webp') }}" alt="Bizzone logo" title="Bizzone" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/shuraa-advertising.webp') }}" alt="Shuraa Advertising logo" title="Shuraa Advertising" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/trip-factory.webp') }}" alt="Trip Factory logo" title="Trip Factory" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/tourzone.webp') }}" alt="TourZone logo" title="TourZone" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/aurae.webp') }}" alt="Aurae logo" title="Aurae" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/florkett.webp') }}" alt="FlorKett logo" title="FlorKett" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/limax.webp') }}" alt="Limax logo" title="Limax" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/corp-creators.webp') }}" alt="Corp Creators logo" title="Corp Creators" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/voltronix.webp') }}" alt="Voltronix logo" title="Voltronix" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/addhouse.webp') }}" alt="Addhouse logo" title="Addhouse" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/ontime-business-setup.webp') }}" alt="Ontime Business Setup logo" title="Ontime Business Setup" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/techfra-solutions.webp') }}" alt="Techfra Solutions logo" title="Techfra Solutions" class="founder-logo-img"/></div>
      <div class="founder-logo-slot"><img loading="lazy" src="{{ asset('assets/images/clients/golden-fortune.webp') }}" alt="Golden Fortune logo" title="Golden Fortune" class="founder-logo-img"/></div>
    </div>
  </div></div></div>
</section><section class="section faq"><div class="w-layout-blockcontainer container w-container"><div class="faq-wrapper"><div class="section-title-wrap faq"><div class="section-subtitle-block"><div class="subtitle-wrap"><div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" loading="lazy" alt="Inner Subtitle Icon" class="subtitle-icon"/></div><div class="section-subtitle">FAQ</div></div></div><h2 class="section-title faq">Questions</h2></div><div class="faq-wrap"><div class="faq-left"><div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="faq-tabs _01 w-tabs"><div class="faq-tabs-menu w-tab-menu"><button type="button" data-w-tab="Tab 1" class="faq-single-item w-inline-block w-tab-link active w--current" aria-expanded="true"><div class="faq-question-wrap"><div class="faq-question">Do you work with startups and growing businesses?</div><div class="faq-icon-wrap"><img loading="lazy" src="{{ asset('assets/icons/faq-plus.svg') }}" alt="Faq Icon" class="faq-icon plus"/><img loading="lazy" src="{{ asset('assets/icons/faq-minus.svg') }}" alt="Faq Icon" class="faq-icon minus"/></div></div><div class="faq-answer-wrap"><p class="faq-answer">Yes. Many of our clients are startups and emerging brands. We tailor scalable digital marketing and web solutions focused on high-priority growth channels first.</p></div></button><button type="button" data-w-tab="Tab 3" class="faq-single-item w-inline-block w-tab-link" aria-expanded="false"><div class="faq-question-wrap"><div class="faq-question">How is your pricing structured for digital services?</div><div class="faq-icon-wrap"><img loading="lazy" src="{{ asset('assets/icons/faq-plus.svg') }}" alt="Faq Icon" class="faq-icon plus"/><img loading="lazy" src="{{ asset('assets/icons/faq-minus.svg') }}" alt="Faq Icon" class="faq-icon minus"/></div></div><div class="faq-answer-wrap"><p class="faq-answer">Our pricing is based on scope, target channels, and campaign objectives. After assessing your business goals and market competition, we deliver a transparent proposal with clear milestones, deliverables, and measurable performance KPIs.</p></div></button><button type="button" data-w-tab="Tab 4" class="faq-single-item w-inline-block w-tab-link" aria-expanded="false"><div class="faq-question-wrap"><div class="faq-question">How soon can we expect results from SEO and ads?</div><div class="faq-icon-wrap"><img loading="lazy" src="{{ asset('assets/icons/faq-plus.svg') }}" alt="Faq Icon" class="faq-icon plus"/><img loading="lazy" src="{{ asset('assets/icons/faq-minus.svg') }}" alt="Faq Icon" class="faq-icon minus"/></div></div><div class="faq-answer-wrap"><p class="faq-answer">PPC and social campaigns generate qualified leads within days, while SEO delivers substantial ranking and organic traffic improvements typically within 3 to 6 months.</p></div></button><button type="button" data-w-tab="Tab 5" class="faq-single-item w-inline-block w-tab-link" aria-expanded="false"><div class="faq-question-wrap"><div class="faq-question">How do you measure campaign performance and ROI?</div><div class="faq-icon-wrap"><img loading="lazy" src="{{ asset('assets/icons/faq-plus.svg') }}" alt="Faq Icon" class="faq-icon plus"/><img loading="lazy" src="{{ asset('assets/icons/faq-minus.svg') }}" alt="Faq Icon" class="faq-icon minus"/></div></div><div class="faq-answer-wrap"><p class="faq-answer">We track performance with advanced analytics, reporting on conversions, qualified lead quality, cost per acquisition, and organic rankings with complete transparency.</p></div></button><button type="button" data-w-tab="Tab 6" class="faq-single-item w-inline-block w-tab-link" aria-expanded="false"><div class="faq-question-wrap"><div class="faq-question">Do you provide comprehensive 360° digital services?</div><div class="faq-icon-wrap"><img loading="lazy" src="{{ asset('assets/icons/faq-plus.svg') }}" alt="Faq Icon" class="faq-icon plus"/><img loading="lazy" src="{{ asset('assets/icons/faq-minus.svg') }}" alt="Faq Icon" class="faq-icon minus"/></div></div><div class="faq-answer-wrap"><p class="faq-answer">Yes. We provide complete 360° solutions combining branding, SEO, performance marketing, web development, Zoho CRM automation, and dedicated team outsourcing under one roof.</p></div></button></div><div class="faq-tabs-content w-tab-content"><div data-w-tab="Tab 1" class="w-tab-pane w--tab-active"></div><div data-w-tab="Tab 3" class="w-tab-pane"></div><div data-w-tab="Tab 4" class="w-tab-pane"></div><div data-w-tab="Tab 5" class="w-tab-pane"></div><div data-w-tab="Tab 6" class="w-tab-pane"></div></div></div></div><div class="faq-right"><div class="faq-image-wrap"><img src="{{ asset('assets/images/fag-image-1.webp') }}" width="64" height="64" loading="lazy" alt="Faq Avatar Image" class="faq-image"/></div><div class="faq-title-wrap"><div class="faq-title">Have questions? Book a strategy call.</div><p class="faq-details"><span class="black-color">Talk with our strategists about </span>your digital marketing, technology, and next growth steps.</p></div><div class="faq-button"><a data-wf--primary-button--variant="base" data-w-id="12e09f55-8dce-f1fa-ec05-e408d323fce0" href="{{ route('contact') }}" class="primary-button w-inline-block"><div class="button-dot-wrap"><div class="button-dot"></div><div class="button-bg"></div></div><div class="button-text">Start Conversation</div></a></div></div></div></div></div></section><section class="section blog"><div class="w-layout-blockcontainer container w-container"><div class="blog-wrapper"><div class="section-flex-wrap"><div class="section-left-wrap blog"><div class="section-subtitle-block blog"><div class="subtitle-wrap"><div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" loading="lazy" alt="Inner Subtitle Icon" class="subtitle-icon"/></div><div class="section-subtitle">Insights</div></div></div><h2 class="section-title">Growth insights</h2></div><div data-w-id="27b08d8c-1b33-8edd-04dc-69675edc0152"  class="section-right-wrap mobile-off"><a data-wf--secondary-button--variant="base" data-w-id="5cdb7b2d-4b72-38af-8934-b8c6c6e9359b" href="{{ route('blog.index') }}" class="secondary-button w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">All Insights</div></a></div></div><div class="blog-wrap"><div class="blog-cl-wrapper w-dyn-list"><div role="list" class="blog-grid-wrap w-dyn-items">
  @forelse($latestPosts as $post)
    <div role="listitem" class="blog-cl-item w-dyn-item">
      <div data-w-id="51c9e15a-7215-aa77-ac1e-4390e92a7ca5" class="blog-single-block">
        <a href="{{ route('blog.show', $post->slug) }}" class="blog-image-wrap w-inline-block">
          <img src="{{ asset($post->image) }}" loading="lazy" alt="{{ $post->title }}" class="blog-image"/>
          <div class="blog-category-wrap">
            <div class="blog-category">{{ $post->category }}</div>
          </div>
        </a>
        <div class="blog-content-wrap">
          <a href="{{ route('blog.show', $post->slug) }}" class="blog-item-title">{{ $post->title }}</a>
            <div class="blog-meta-wrap">
              <div class="blog-author-block">
                <img src="{{ $post->author_avatar_url }}" loading="lazy" alt="{{ $post->author }}" class="blog-author-image"/>
                <div class="blog-author-details">
                  <div class="blog-author-name">{{ $post->author }}</div>
                  <div class="blog-author-position">{{ $post->reading_time ?? '5 min read' }}</div>
                </div>
              </div>
              <div class="blog-meta-dot"></div>
              <div class="blog-date">{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Recent' }}</div>
            </div>
        </div>
      </div>
    </div>
  @empty
  @endforelse
</div></div></div></div><div data-w-id="ede69467-9aad-b989-5d11-ed3d10fc02ed"  class="blog-button mobile-on"><a data-wf--secondary-button--variant="base" data-w-id="5cdb7b2d-4b72-38af-8934-b8c6c6e9359b" href="{{ route('blog.index') }}" class="secondary-button w-inline-block"><div class="button-dot-wrap"><div class="button-bg black"></div><div class="button-dot black"></div></div><div class="button-text">All Blogs</div></a></div></div></div></section><section class="section cta"><div class="w-layout-blockcontainer container w-container"><div class="cta-wrapper"><div class="cta-wrap"><div class="subtitle-wrapper"><div class="subtitle-wrap"><div class="subtitle-icons"><img src="{{ asset('assets/icons/top-subtitle.svg') }}" loading="lazy" alt="Inner Subtitle Icon" class="subtitle-icon"/></div><div class="subtitle-text"><span>Contact Now</span></div></div></div><h2 class="cta-title">Scale your digital growth together</h2><div class="cta-button"><a data-wf--primary-button--variant="base" data-w-id="12e09f55-8dce-f1fa-ec05-e408d323fce0" href="{{ route('contact') }}" class="primary-button w-inline-block"><div class="button-dot-wrap"><div class="button-dot"></div><div class="button-bg"></div></div><div class="button-text">Partner for Digital Growth</div></a></div></div></div></div><div class="cta-image-block"><div class="cta-image-wrapper"><div class="cta-image-wrap _01"><img loading="lazy" src="{{ asset('assets/images/cta-image-1.webp') }}" alt="Cta Image" sizes="(max-width: 546px) 100vw, 546px" srcset="{{ asset('assets/images/cta-image-1-p-500.webp') }} 500w, {{ asset('assets/images/cta-image-1.webp') }} 546w" class="cta-image"/></div><div class="cta-image-wrap _02"><img loading="lazy" src="{{ asset('assets/images/cta-image-3.webp') }}" alt="Cta Image" class="cta-image"/></div><div class="cta-image-wrap _03"><img loading="lazy" src="{{ asset('assets/images/cta-image-2.webp') }}" alt="Cta Image" class="cta-image"/></div><div class="cta-image-wrap _04"><img loading="lazy" src="{{ asset('assets/images/cta-image-6.webp') }}" alt="Cta Image" class="cta-image"/></div><div class="cta-image-wrap _05"><img loading="lazy" src="{{ asset('assets/images/cta-image-5.webp') }}" alt="Cta Image" class="cta-image"/></div><div class="cta-image-wrap _06"><img loading="lazy" src="{{ asset('assets/images/cta-image-1.webp') }}" alt="Cta Image" sizes="(max-width: 546px) 100vw, 546px" srcset="{{ asset('assets/images/cta-image-1-p-500.webp') }} 500w, {{ asset('assets/images/cta-image-1.webp') }} 546w" class="cta-image"/></div><div class="cta-image-wrap _07"><img loading="lazy" src="{{ asset('assets/images/cta-image-7.webp') }}" alt="Cta Image" class="cta-image"/></div><div class="cta-image-wrap _08"><img loading="lazy" src="{{ asset('assets/images/cta-image-8.webp') }}" alt="Cta Image" class="cta-image"/></div><div class="cta-image-wrap _09"><img loading="lazy" src="{{ asset('assets/images/cta-image-9.webp') }}" alt="Cta Image" class="cta-image"/></div></div></div></section>

</x-layouts.app>
