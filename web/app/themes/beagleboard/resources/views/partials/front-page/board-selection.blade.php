@if($boardSelection->have_posts())
          @php $boardSelection->the_post() @endphp
          <div class="col-lg-6 col-sm-12 gray-to-white-grad hero p-4">
            <div class="card-body">
              <div class="d-flex w-100 justify-content-between align-content-center">
                <div>
                <a href="{{ get_the_permalink() }}">
                  <h2 class="card-title text-primary">{{ the_title() }}</h2>
                </a>
                  <p class="card-text">{{ get_the_excerpt() }}</p>
                </div>
                <a href="{{ get_the_permalink() }}">
                  <i aria-hidden="true" class="fas fa-arrow-circle-right fa-2x text-primary" title="Visit Board Selection to select your next board"></i>
                  <span class="fa-sr-only">Visit Board Selection to select your next board</span>
                </a>
              </div>
            </div>
            <div class="text-center">
              {!! the_post_thumbnail( 'medium_large', [ 'class' => 'img-fluid', 'alt' => get_the_title(), 'loading' => false ] ) !!}
            </div>
          </div>
        @endif
