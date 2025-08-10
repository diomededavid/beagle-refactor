@php $size = get_field( 'product_image_max_width' ) @endphp

@section('header')
  <header class="container-fluid product-bg {{$background_style}}">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center">
          <div>
            {!! the_post_thumbnail( 'small-custom', [ 'alt' => get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true), 'class' => 'img-fluid mx-auto' ] ) !!}
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-white align-middle my-auto">
          <h1 class="entry-title text-white">
            @if(get_field('beagleboard_compatible'))
              <img src="{{get_template_directory_uri(). '/images/logos/beagleboard-compatible.svg'}}"
                   class="float-end mb-2"
                   alt="Beagleboard Compatible®" width="160px" height="auto">
            @endif
            {{ the_title() }}
          </h1>
          @include('partials/product/product-distributors')
        </div>
      </div>
    </div>
  </header>
@endsection
