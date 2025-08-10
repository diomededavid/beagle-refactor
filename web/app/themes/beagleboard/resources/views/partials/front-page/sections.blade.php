@if($featured_sections->have_posts())
  <div class="container">
    <div class="row my-4">
        @while($featured_sections->have_posts())
          @php $featured_sections->the_post() @endphp
        <div class="col-lg-3 col-md-6 col-sm-6 my-2">
            <div class="card gray-to-white-grad shadow-sm hover-card h-100">
              <div class="card-body">
                <i class="fas fa-arrow-circle-right fa-2x text-primary float-end"></i>
                <h4 class="card-title">
                  <a href="{{ the_permalink() }}" class="stretched-link">
                    {{ the_title() }}
                  </a>
                </h4>
                <p class="card-text">{{ get_the_excerpt() }}</p>
              </div>
              {{ the_post_thumbnail('medium', array('class' => 'card-img-bottom mb-2')) }}
            </div>
          </div>
        @endwhile
      </div>
  </div>
@endif
