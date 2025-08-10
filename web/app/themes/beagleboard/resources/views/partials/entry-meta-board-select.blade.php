<header class="curves blue-gradient-curves">
  <div class="container">
    <div class="row my-4">
      <div class="col overflow-hidden my-auto">
        <h1 class="entry-title">{{ the_title() }}</h1>
        <h5>{{get_the_excerpt()}}</h5>
      </div>
      <div class="col-lg-6 col-sm-12 align-middle my-auto">
        {!! the_post_thumbnail( 'medium_large', [ 'alt' => get_the_title(), 'class' => 'rounded img-fluid' ] ) !!}
      </div>
    </div>
  </div>
</header>
