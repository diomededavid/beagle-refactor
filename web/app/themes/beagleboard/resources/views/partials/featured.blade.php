 <div class="one-to-three my-5">
    @if($featured_posts->have_posts())
      @while($featured_posts->have_posts())
        @php $featured_posts->the_post() @endphp
        <div class="card">
          <a href="{{ the_permalink() }}"
             class="stretched-link">{{the_post_thumbnail('medium', array('class' => 'card-img-top'))}}</a>
          <div class="card-body">
            <h5 class="card-title">{{ the_title() }}</h5>
            <p class="card-text">
              <small class="text-muted">
                By @php the_author() @endphp
              </small>
            </p>
          </div>
        </div>
      @endwhile
    @endif
      @include('partials.twitter-feed')
  </div>
