@php
    $board_hero_image = wp_get_attachment_image( get_theme_mod( 'board_hero_image' ), 'medium-custom' ) ;
    $board_hero_title = get_theme_mod('board_hero_title', 'What is PocketBeagle®?');
    $board_hero_description = get_theme_mod('board_hero_description', 'PocketBeagle features an incredible low cost, slick design and simple usage, making PocketBeagle the ideal development board for beginners and professionals alike.');
    $board_hero_button_text = get_theme_mod('board_hero_button_text', 'Details');
    $board_hero_button_url = home_url() . get_theme_mod('board_hero_button_url', '')
@endphp


<section class="row">
  <div class="container py-5">
    <div class="card mb-3  bg-light-gray">
      <div class="row no-gutters">
        <div class="col-md-4">
          {!!  $board_hero_image !!}
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title">{{$board_hero_title}}</h2>
            <p class="card-text">{!! $board_hero_description !!}</p>
            <div class="d-grid gap-2 col-6 mx-end">
              <a href="{{$board_hero_button_url}}" class="btn btn-primary">{{$board_hero_button_text}}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
