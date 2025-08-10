@php
  $header_text_color = get_theme_mod('landing_small_header_color', '');
  $header_description_color = get_theme_mod('landing_description_color', '');
  $landing_textarea = get_theme_mod('landing_textarea', 'PocketBeagle Grove Kit is a scalable tool for working with sensors and actuators');
  $landing_url = home_url() . get_theme_mod('landing_url', '');
@endphp

<div class="col col-lg-6 mx-auto p-4">
  <a href="{{ $landing_url }}">
    <h1 class="{{$header_text_color }} text-center mx-2">{{ get_theme_mod('landing_small_header', '') }}</h1>
  </a>
  <div class="text-center mw-100">
    <a href="{{ $landing_url }}" class="text-center">
      {!!  wp_get_attachment_image( get_theme_mod( 'landing_image' ), 'medium' )  !!}
    </a>
  </div>
  <div class="d-flex flex-row mb-3 align-items-center justify-content-center mt-2 pb-5 mx-4">
      <h2 class="{{$header_description_color}} text-center text-wrap">
        <a href="{{ $landing_url }}" class="{{$header_description_color}}">{!! $landing_textarea !!}</a>
      </h2>
    <a href="{{ $landing_url }}" class="{{$header_description_color}}">
      <i class="fas fa-arrow-circle-right fa-2x text-primary float-end mx-2 {{$header_description_color}}"></i>
    </a>
  </div>
</div>
