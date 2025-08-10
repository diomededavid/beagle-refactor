<header class="blue-radial-gradient mb-5">
  <div class="container ">
    <div class="row">
      <div class="col-sm-12 col-md-6 d-flex flex-column align-items-start justify-content-center">
        <h1 class="entry-title text-left mb-4">{!! App::title() !!}</h1>
        @if(has_excerpt() && !empty(has_excerpt()))
          <p class="h5"> {{get_the_excerpt()}}</p>
        @else
        <p class="h5">
          Stay in the loop with the latest products, insider updates! Sign up now to stay informed on all things BeagleBoard.org.
        </p>
        @endif
        {!! do_shortcode('[gravityform id="5" title="false" description="false" ajax="true"]'); !!}
      </div>
      <div class="col-6 d-none d-md-block">
        <img src="{{get_template_directory_uri(). '/images/newsletter-pana.svg'}}"
             class="img-fluid" alt="Stay in the loop byb singing up to our newsletter">
      </div>
    </div>
  </div>
</header>
