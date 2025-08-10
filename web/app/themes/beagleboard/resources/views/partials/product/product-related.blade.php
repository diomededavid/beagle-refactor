@php
    //$post = get_post();
    //$cat = $post->post_category;
  $cats=wp_get_post_categories($post->ID, array('fields'=> 'ids'));
  if ( in_array(CATEGORY_PARENT_ID_BOARDS,$cats) ) {
      $product_title = 'Capes';
      $results_to_show = $related_capes;
  } else {
      $product_title = 'Related Products';
      $results_to_show = $related_boards;
  }
@endphp
@if($results_to_show->have_posts())
  <div class="container-fluid product-related-curves curves grays">
    <section class="container">
      @component('components.section-head')
        {{ __($product_title, 'sage') }}
      @endcomponent
      <div class="row">
        @while($results_to_show->have_posts())
          @php $results_to_show->the_post() @endphp
          <div class="col-lg-3 col-sm-6 mb-5">
            @include('partials.product.product-card')
          </div>
        @endwhile
      </div>
    </section>
  </div>
@endif
