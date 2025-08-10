{{--
  Title: Photo Card
  Description: Customer testimonial
  Category: formatting
  Icon: admin-comments
  Keywords: card
  Mode: auto
  Align: center
  PostTypes: page post
  SupportsMode: false
  SupportsInnerBlocks: false
  SupportsAlignContent: true
--}}

@php
  $image = get_field('card_image');
  $card_title = get_field('card_title');
  $page_link = get_field('page_link');
  $external_link = get_field('external_link')
@endphp


  <div class="col" data-{{ $block['id'] }}>
  <div class="card hover-card gray-to-white-grad {{ $block['classes'] }}">
    <div class="row no-gutters">
      <div class="col-md-4 icon-card-img">
        @if (!empty($image))
          <img src="{{ $image[ 'url' ] }}" alt="{{ $image[ 'alt' ] }}" class="img-fluid text-center">
        @endif
      </div>
      <div class="col">
        <div class="card-body">
          @if ($page_link)
            <a href="{{ $page_link }}" class="stretched-link">
              <h4 class="card-title">{{ $card_title }}</h4>
            </a>
          @elseif (!empty($external_link))
            <a href="{{ $external_link }}" class="stretched-link" target="_blank">
              <h4 class="card-title">{{ $card_title }}</h4>
            </a>
          @else
            <h4 class="card-title">{{ $card_title }}</h4>
          @endif
          {!! the_field('card_description') !!}
        </div>
      </div>
      </div>
    </div>
  </div>
