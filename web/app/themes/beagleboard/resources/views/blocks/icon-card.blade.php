{{--
  Title: Icon Card
  Description: Horizonal content card
  Category: formatting
  Icon: id
  Keywords: card
  Mode: auto
  Align: center
  PostTypes: page post product
  SupportsMode: false
  SupportsInnerBlocks: false
  SupportsAlignContent: true
--}}

@php
  $image = get_field('card_image');
  $card_title = get_field('card_title');
  $page_link = get_field('page_link');
  $page_anchor = get_field('page_anchor');
  $external_link = get_field('external_link')
@endphp

<section class="row">
  <div class="col">
    <div data-{{ $block['id'] }} class="card @if (!empty($page_link) || !empty($external_link)) hover-card @endif gray-to-white-grad {{ $block['classes'] }}">
      <div class="row no-gutters">
        <div class="col-md-3 icon-card-img">
          @if (!empty($image))
            <img src="{{ $image[ 'url' ] }}" alt="{{ $image[ 'alt' ] }}" class="img-fluid text-center">
          @endif
        </div>
        <div class="col">
          <div class="card-body">
            @if (!empty($page_link))
              <h2 class="card-title">
                <a href="{{ $page_link}}@if(!empty(  $page_anchor)){{ $page_anchor }} @endif" class="stretched-link">
                  {{ $card_title }}
                </a>
              </h2>
            @elseif(!empty($external_link))
              <a href="{{ $external_link }}" class="stretched-link">
                <h2 class="card-title">{{ $card_title }}</h2>
              </a>
            @else
              <h2 class="card-title">{{ $card_title }}</h2>
            @endif
            {!! the_field('card_description') !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
