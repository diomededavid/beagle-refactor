<footer class="content-info">
  <div class="container py-5">
    <div class="row">
      <a class="navbar-brand" href="{{ home_url('/') }}">
        <h6 hidden aria-label="BeagleBoard.org" aria-hidden="true">BeagleBoard.org</h6>
      </a>
    </div>
    <div class="row">
      @if('sidebar-footer')
        @php dynamic_sidebar('sidebar-footer')@endphp
      @endif
    </div>
    <div class="text-white my-4 border-top border-primary  d-flex flex-wrap justify-content-end align-items-center gap-3 bg-light">
      <p class="text-white m-2 h4">Connect with us</p>
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
      </a>
      <a href="https://www.youtube.com/user/jadonk" title="Check us out on YouTube">
        <i class="fab fa-youtube fa-lg"></i>
      </a>
      <a href="https://openbeagle.org" title="Visit OpenBeagle">
        <i class="fab fa-gitlab fa-lg"></i>
      </a>
      <a href="https://github.com/beagleboard" title="View BeagleBoard GitHub">
        <i class="fab fa-github fa-lg"></i>
      </a>
      <a href="https://forum.beagleboard.org" title="Join the BeagleBoard Forum">
        <i class="fab fa-discourse fa-lg"></i>
      </a>
      <a href="https://www.beagleboard.org/discord" title="Join BeagleBoard on Discord">
        <i class="fab fa-discord fa-lg"></i>
      </a>
      <a href="https://www.beagleboard.org/blog" title="Read BeagleBoard Blog">
        <i class="fas fa-rss fa-lg"></i>
      </a>
    </div>
  </div>
</footer>
