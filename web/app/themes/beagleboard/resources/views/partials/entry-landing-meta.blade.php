
<header class="container-fluid">
    <div class="row">
      @if(has_post_thumbnail())
      <div class="col">
        {!! the_post_thumbnail('2048x2048', [ 'loading' => false, 'class' => 'img-fluid', 'alt' => get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ) ]) !!}
      </div>
      @else()
        <div class="col">
          {!! TemplateLandingPage::sliderRevolution() !!}
        </div>
      @endif
    </div>
</header>

