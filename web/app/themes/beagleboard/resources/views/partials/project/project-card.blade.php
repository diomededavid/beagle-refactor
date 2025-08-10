@php $external_url = get_field( "external_url" ) @endphp
@php
  $pClass="project-related-card bg-light shadow-sm hover-card";
@endphp
@if(is_home())
    @php($pClass=$pClass . " project-card")
@endif

<div @php(post_class($pClass))>
  @if(has_post_thumbnail() )
{{--    <a href="@if($external_url) {{ $external_url }} @else {{ get_the_permalink() }} @endif" class="stretched-link">--}}
    <a href="{{ get_the_permalink() }}" class="stretched-link">
      {!! the_post_thumbnail( 'medium', [ 'alt' => get_the_title() ] ) !!}
    </a>
  @else
    <img src="{{ get_template_directory_uri() . '/images/placeholder-bg.png' }}" alt="">
  @endif
  <div class="card-img-overlay">
    <div class="card-body card-content">
{{--        <a href="@if($external_url) {{ $external_url }} @else {{ get_the_permalink() }} @endif" class="stretched-link mt-auto">--}}
      <a href="{{ get_the_permalink() }}" class="stretched-link mt-auto">
          <p class="card-title">{{ the_title() }}</p>
        </a>
      <div>

{{--        @if($external_url)--}}
{{--          <i class="fas fa-external-link-alt text-primary float-end"></i>--}}
{{--        @else--}}
          <i class="fas fa-arrow-circle-right fa-lg text-primary float-end"></i>
{{--        @endif--}}
      </div>
    </div>
  </div>
</div>
