<header class="curves @if(! is_singular( 'post' )) blue-gradient-curves @endif">
  <div class="container my-auto">
    <div class="row">
      <div class="col overflow-hidden align-self-center">
        <h1 class="entry-title">{!! the_title() !!}</h1>
        @if(has_excerpt() && !is_search())
          <p>{{get_the_excerpt()}}</p>
        @endif
        @if(is_singular( 'post' ))
          <p class="byline author vcard">
            {{ __('By', 'sage') }}
            <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
              {{ get_the_author() }}
            </a>
          </p>
          <p>
            <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date('D M j') }}</time>
          </p>
        @endif
      </div>
      @if(is_singular('distros'))
        <div class="col-lg-3 col-sm-12 align-middle my-auto">
          <img src="{{get_template_directory_uri(). '/images/download-pana.svg'}}"
               class="img-fluid" alt="Download software images">
        </div>
      @elseif(is_search())
        <div class="col-lg-4 col-sm-12 align-middle my-auto">
          <img src="{{get_template_directory_uri(). '/images/search-pana.svg'}}"
               class="float-end mb-2"
               alt="Search Image">
        </div>
      @else
        <div class="col-lg-6 col-sm-12 align-middle my-auto">
          {!! the_post_thumbnail( 'medium_large', [ 'class' => 'img-fluid w-75 rounded ', 'alt' => get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ) ] ) !!}
        </div>
      @endif
    </div>
  </div>
</header>
