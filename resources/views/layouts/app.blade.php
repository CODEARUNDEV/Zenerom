<!DOCTYPE html>
<html data-wf-domain="zenerom.ae" data-wf-site="69b872c55e2dc7cedb9bfcab" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#0c0238"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="format-detection" content="telephone=no"/>
    <title>{{ $title ?? 'Zenerom UAE | Digital Growth, Performance Marketing & Technology Agency Dubai' }}</title>
    <meta name="description" content="{{ $description ?? 'Zenerom is Dubai\'s premier digital growth, enterprise SEO, performance marketing, and bespoke technology agency headquartered at Burjuman Business Tower, Dubai.' }}"/>
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="{{ $ogType ?? 'website' }}"/>
    <meta property="og:title" content="{{ $title ?? 'Zenerom UAE | Digital Growth Agency Dubai' }}"/>
    <meta property="og:description" content="{{ $description ?? 'Scale your enterprise with performance marketing and bespoke web engineering.' }}"/>
    <meta property="og:image" content="{{ $ogImage ?? asset('assets/images/Social_Share.webp') }}"/>
    <meta property="og:url" content="{{ $canonical ?? url()->current() }}"/>
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="{{ $title ?? 'Zenerom UAE | Digital Growth Agency Dubai' }}"/>
    <meta name="twitter:description" content="{{ $description ?? 'Scale your enterprise with performance marketing and bespoke web engineering.' }}"/>
    <meta name="twitter:image" content="{{ $ogImage ?? asset('assets/images/Social_Share.webp') }}"/>
    
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}"/>
    <link rel="shortcut icon" href="{{ asset('assets/images/Fav.png') }}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/Web_Clip.png') }}"/>
    
    <!-- Typography: Chivo Mono & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,400;0,500;0,600;1,400&family=Outfit:wght@800;900&display=swap" rel="stylesheet">
    
    <!-- Critical Asset Preloading for Sub-Second FCP & LCP -->
    <link rel="preload" href="{{ asset('assets/fonts/InterDisplay-Regular.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous"/>
    @if(request()->is('about'))
    <link rel="preload" as="image" href="{{ asset('assets/images/bungee-about-hero-poster.jpg') }}" type="image/jpeg" fetchpriority="high"/>
    @else
    <link rel="preload" as="image" href="{{ asset('assets/images/hero-poster-mobile.webp') }}" type="image/webp" media="(max-width: 767px)" fetchpriority="high"/>
    <link rel="preload" as="image" href="{{ asset('assets/images/hero-poster.webp') }}" type="image/webp" media="(min-width: 768px)" fetchpriority="high"/>
    @endif

    <!-- Optimized Baseline Stylesheets (Pre-compressed Gzip) -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css?v=140') }}"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.min.css?v=140') }}"/>
    <link rel="preload" href="{{ asset('css/animations.min.css?v=140') }}" as="style" onload="this.onload=null;this.rel='stylesheet'"/>
    <noscript><link rel="stylesheet" href="{{ asset('css/animations.min.css?v=140') }}"/></noscript>
    
    <!-- Global Structured Data / Schema -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@type": "Organization",
          "@id": "{{ url('/') }}#organization",
          "name": "Zenerom UAE",
          "url": "{{ url('/') }}",
          "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('assets/images/Logo.svg') }}"
          },
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Burjuman Business Tower, Office 929, 9th Floor",
            "addressLocality": "Dubai",
            "addressRegion": "Dubai",
            "addressCountry": "AE"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+971563996631",
            "contactType": "sales",
            "areaServed": "AE",
            "availableLanguage": ["English", "Arabic"]
          },
          "sameAs": [
            "https://www.linkedin.com/company/zenerom",
            "https://www.instagram.com/zenerom"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "{{ url('/') }}#website",
          "url": "{{ url('/') }}",
          "name": "Zenerom UAE",
          "publisher": {
            "@id": "{{ url('/') }}#organization"
          }
        }
      ]
    }
    </script>

    @stack('styles')
    @stack('schema')
</head>
<body class="{{ $bodyClass ?? '' }}">
<a href="#main-content" class="skip-to-content">Skip to content</a>
<div class="page-wrapper">
    <x-navbar />
    <x-sidemenu />

    <main id="main-content">
        {{ $slot }}
    </main>

    <x-footer />
</div>

<!-- Core Engine Script (Bundled & Deferred for 0ms Total Blocking Time) -->
<script src="{{ asset('js/app.min.js?v=140') }}" defer></script>

@stack('scripts')
</body>
</html>
