<section class="header">
  <div data-animation="over-left" data-collapse="all" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="container w-container">
      <div class="navbar-wrapper">
        <a href="{{ route('home') }}" class="brand-logo-wrap w-nav-brand {{ request()->routeIs('home') ? 'w--current' : '' }}">
          <img alt="Zenerom Creative Lab" src="{{ asset('assets/images/zenerom-logo.webp') }}" class="brand-logo" width="160" height="38" style="height:38px; width:auto; max-width:170px; object-fit:contain; display:block;"/>
        </a>
        <div class="navbar-manu-block">
          <div data-w-id="b8c574c9-6698-c675-209e-924ed1584dca" class="menu-open-block">
            <img loading="lazy" src="{{ asset('assets/icons/menu-plus.svg') }}" alt="Menu Open Icon" class="menu-open-icon"/>
            <div class="menu-open">Menu</div>
          </div>
          <div class="menu-link-wrap">
            <a data-wf--nav-link--variant="desktop-on" href="{{ route('services') }}" class="nav-link w-variant-8bf4848c-d668-0e79-80f7-76227d1ca8df w-inline-block {{ request()->routeIs('services*') ? 'w--current' : '' }}">
              <div text-top="" class="nav-link-text">Services</div>
              <div text-bottom="" class="nav-link-text">Services</div>
              <div class="nav-link-line"></div>
            </a>
            <a data-wf--nav-link--variant="desktop-on" href="{{ route('solutions') }}" class="nav-link w-variant-8bf4848c-d668-0e79-80f7-76227d1ca8df w-inline-block {{ request()->routeIs('solutions') ? 'w--current' : '' }}">
              <div text-top="" class="nav-link-text">Solutions</div>
              <div text-bottom="" class="nav-link-text">Solutions</div>
              <div class="nav-link-line"></div>
            </a>
            <a data-wf--nav-link--variant="desktop-on" href="{{ route('industries') }}" class="nav-link w-variant-8bf4848c-d668-0e79-80f7-76227d1ca8df w-inline-block {{ request()->routeIs('industries') ? 'w--current' : '' }}">
              <div text-top="" class="nav-link-text">Industries</div>
              <div text-bottom="" class="nav-link-text">Industries</div>
              <div class="nav-link-line"></div>
            </a>
            <a data-wf--nav-link--variant="desktop-on" href="{{ route('work') }}" class="nav-link w-variant-8bf4848c-d668-0e79-80f7-76227d1ca8df w-inline-block {{ request()->routeIs('work*') ? 'w--current' : '' }}">
              <div text-top="" class="nav-link-text">Works</div>
              <div text-bottom="" class="nav-link-text">Works</div>
              <div class="nav-link-line"></div>
            </a>
            <a data-wf--nav-link--variant="desktop-on" href="{{ route('about') }}" class="nav-link w-variant-8bf4848c-d668-0e79-80f7-76227d1ca8df w-inline-block {{ request()->routeIs('about') ? 'w--current' : '' }}">
              <div text-top="" class="nav-link-text">About</div>
              <div text-bottom="" class="nav-link-text">About</div>
              <div class="nav-link-line"></div>
            </a>
            <a data-wf--nav-link--variant="desktop-on" href="{{ route('blog.index') }}" class="nav-link w-variant-8bf4848c-d668-0e79-80f7-76227d1ca8df w-inline-block {{ request()->routeIs('blog*') ? 'w--current' : '' }}">
              <div text-top="" class="nav-link-text">Blog</div>
              <div text-bottom="" class="nav-link-text">Blog</div>
              <div class="nav-link-line"></div>
            </a>
          </div>
        </div>
        <div class="navbar-button-block">
          <a href="{{ route('contact') }}" class="secondary-button nav w-inline-block">
            <div class="button-dot-wrap">
              <div class="button-bg black"></div>
              <div class="button-dot black"></div>
            </div>
            <div class="button-text">Partner for Digital Growth</div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
