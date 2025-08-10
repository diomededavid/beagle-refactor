@php
  $image = get_field('secondary_image');
  $size = 'medium-custom';
  $iframe = get_field('product_video');
@endphp
<article @php post_class() @endphp>
  <div class="product-curves gray-bottom">
    @include('partials.product.product-bottom-nav')
    <div class="container">
      <div class="row my-4">
        <div class="col">
          @php the_content() @endphp
        </div>

          @if($iframe)
            <div class="col-lg-6 col-sm-12 mb-4 d-flex justify-content-end">
                @php
                  // Load value.
                  // Use preg_match to find iframe src.
                  preg_match('/src="(.+?)"/', $iframe, $matches);
                  $src = $matches[1];

                  // Add extra parameters to src and replace HTML.
                  $params = array(
                    'controls'  => 0,
                    'hd'        => 1,
                    'autohide'  => 1
                  );
                  $new_src = add_query_arg($params, $src);
                  $iframe = str_replace($src, $new_src, $iframe);

                  // Add extra attributes to iframe HTML.
                  $attributes = 'frameborder="0"';
                  $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                  // Display customized HTML.
                  echo $iframe;
               @endphp
            </div>
        @elseif($image)
          <div class="col-lg-6 col-sm-12 mb-4 d-flex justify-content-end">
            <div>
              {!! wp_get_attachment_image( $image, $size, array( "class" => "img-fluid rounded" ) ) !!}
            </div>
          </div>
        @else
        @endif
      </div>
    </div>
  </div>
</article>
