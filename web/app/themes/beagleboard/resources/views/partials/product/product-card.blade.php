@php $background_style = get_field('background_style', get_the_ID()) @endphp
@php $categories = get_the_category() @endphp
@php $separator = ' ' @endphp
@php $output = '' @endphp
@php $category_tags = '' @endphp

@if ( ! empty( $categories ) )
  @foreach( $categories as $category )
    @php  $category_tags = $category_tags . ' ' . $category->slug @endphp
  @endforeach
@endif


  <div id="post-{{ the_ID() }}" class="card {{$background_style}} h-100 shadow-sm hover-card">
    <div class="card-header bg-white d-flex justify-content-between">
      <a href="{{ the_permalink() }}"
         class="stretched-link mt-auto">
        {{ the_title() }}
      </a>
      <a href="{{ the_permalink() }}">
        <i aria-hidden="true" class="fas fa-arrow-circle-right fa-lg text-primary" title="Get more details on {{ the_title() }}"></i>
        <span class="fa-sr-only">Get more details on {{ the_title() }}</span>
      </a>
    </div>
    <div class="{{$background_style}} p-2" style="min-height: 267px; max-height: 300px;">
      {!! the_post_thumbnail( 'small-custom', [ 'class' => 'mx-auto',  'style' => 'width:100%; height:100%; object-fit:contain;' ] ) !!}
    </div>

    <div class="card-body bg-white h-100">
      <p class="card-text">{{the_excerpt()}}</p>
    </div>
  </div>

