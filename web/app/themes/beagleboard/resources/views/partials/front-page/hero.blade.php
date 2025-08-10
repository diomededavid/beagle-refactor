<section class="position-relative overflow-hidden bg-info">
  <div class="row hero" style="background: url({{ get_template_directory_uri() . '/images/product-bgs/' . get_theme_mod('landing_background_pattern', '') }}) center bottom; background-size: 272px; background-position: center bottom; background-attachment: fixed; background-color: {{ get_theme_mod('landing_background_color', '') }} " >
    @include('partials.front-page.hero-ad')
    @include('partials.front-page.board-selection')
  </div>
  <div class="swish-bg"></div>
</section>

