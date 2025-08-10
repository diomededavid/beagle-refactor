<div class="feature-card bg-light shadow-sm hover-card">
  @if(!empty(get_the_post_thumbnail()) )
{{--    <a href="@if($external_url) {{ $external_url }} @else {{ get_the_permalink() }} @endif" class="stretched-link">--}}
    <a href="{{ get_the_permalink() }}" class="stretched-link">
      {!! the_post_thumbnail( 'small-custom', [ 'alt' => get_the_title() ] ) !!}
      </a>
  @else
    <img src="{{ get_template_directory_uri() . '/images/placeholder-bg.png' }}" alt="" class="img-fluid">
  @endif
  <div class="card-img-overlay">
      <div class="card-body card-content">
        <div>
          <a href="{{ get_the_permalink() }}"
             class="stretched-link mt-auto"><p class="card-title">{{ the_title() }}</p>
          </a>
        </div>
        <div>
          <i class="fas fa-arrow-circle-right fa-lg text-primary float-end"></i>
        </div>
      </div>
  </div>
</div>
