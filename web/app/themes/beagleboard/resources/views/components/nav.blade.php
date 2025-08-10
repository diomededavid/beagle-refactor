<div class="container-fluid bg-black-seven">
  <div class="container">
    <div class="row">
      <div class="col text-white py-2 d-flex flex-wrap justify-content-end align-items-center gap-3">
        <a href="https://facebook.com/beagleboard" title="Follow us on Facebook">
          <i class="fab fa-facebook fa-lg"></i>
          <span class="sr-only">Follow us on Facebook</span>
        </a>
        <a href="https://twitter.com/beagleboardorg" title="Follow us on Twitter">
          <i class="fab fa-twitter fa-lg"></i>
          <span class="sr-only">Follow us on Twitter</span>
        </a>
        <a href="https://www.linkedin.com/groups/BeagleBoardorg-1474607?gid=1474607" title="Connect with us on LinkedIn">
          <i class="fab fa-linkedin fa-lg"></i>
          <span class="sr-only">Connect with us on LinkedIn</span>
        </a>
        <a href="https://youtube.com/@beagleorg" title="Check us out on YouTube">
          <i class="fab fa-youtube fa-lg"></i>
          <span class="sr-only">Check us out on YouTube</span>
        </a>
        <a href="https://openbeagle.org" title="Visit OpenBeagle">
          <i class="fab fa-gitlab fa-lg"></i>
          <span class="sr-only">Visit OpenBeagle</span>
        </a>
        <a href="https://github.com/beagleboard" title="View BeagleBoard GitHub">
          <i class="fab fa-github fa-lg"></i>
          <span class="sr-only">View BeagleBoard GitHub</span>
        </a>
        <a href="https://forum.beagleboard.org" title="Join the BeagleBoard Forum">
          <i class="fab fa-discourse fa-lg"></i>
          <span class="sr-only">Join the BeagleBoard Forum</span>
        </a>
        <a href="https://www.beagleboard.org/discord" title="Join BeagleBoard on Discord">
          <i class="fab fa-discord fa-lg"></i>
          <span class="sr-only">Join BeagleBoard on Discord</span>
        </a>
        <a href="https://www.beagleboard.org/blog" title="Read BeagleBoard Blog">
          <i class="fas fa-rss fa-lg"></i>
          <span class="sr-only">Read BeagleBoard Blog</span>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="navbar navbar-expand-lg bg-white banner shadow-sm sticky-top py-4 d-flex flex-column  flex-nowrap">
  <div class="container-fluid">
    <div class="col-sm-1 col-lg-3">
      <a href="{{ home_url('/') }}">
        <img src="{{ get_template_directory_uri() . '/images/beagleboard-logo.svg' }}" alt="BeagleBoard.org®"
             width="170" height="auto" class="navbar-brand">
      </a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      @php
        wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'container' => true,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav justify-content-start text-nowrap mt-2 %2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new bootstrap_5_wp_nav_menu_walker(),
        ]);
      @endphp
    </nav>
    <div class="d-flex align-items-center">
      @include('partials.product.buy-menu')
      <button class="btn btn-primary mx-2" id="search">
        <span class="fas fa-search" id="searchIconToggle" aria-hidden="true"></span>
        <span class="sr-only">Toggle search</span>
      </button>
      <div class="d-none d-lg-flex">
        @include('components.login')
      </div>
      <div>
        @include('partials.menu_drawer')
      </div>
    </div>
  </div>
  <div class="container-fluid">
    @include('partials/search-field')
  </div>
</div>
