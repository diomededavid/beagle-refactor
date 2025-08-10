<div class="card gray-to-white-grad shadow-sm hover-card mb-3">
  <div class="row g-0">
    <div class="col-md-3">
      @if(has_post_thumbnail() )
          {!! the_post_thumbnail( 'medium', [ 'alt' => get_the_title(), 'class' => 'img-fluid' ] ) !!}
      @else
        <img src="{{ get_template_directory_uri() . '/images/placeholder-bg.png' }}" alt="" class="img-fluid">
      @endif
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <a href="{{ the_permalink() }}" class="stretched-link">
          <h5 class="card-title">{{the_title()}}</h5>
        </a>
        {{ the_excerpt() }}
      </div>
    </div>
  </div>
</div>
