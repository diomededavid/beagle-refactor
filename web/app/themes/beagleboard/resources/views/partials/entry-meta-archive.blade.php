<header class="curves blue-gradient-curves">
  <div class="container">
    <div class="row">
      <div class="page-header col my-auto">
        <h1>{!! App::title() !!}</h1>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 align-middle my-auto">
        @if(is_post_type_archive('distros'))
          <img src="{{get_template_directory_uri(). '/images/download-pana.svg'}}"
               class="img-fluid" alt="Download software images" width="356" height="356">
        @endif
        @if(is_post_type_archive('book'))
          <img src="{{get_template_directory_uri(). '/images/book-lover-pana.svg'}}"
               class="img-fluid" alt="Books" style="width: 100%; height: auto" width="356" height="356">
        @endif
        @if(is_post_type_archive('product'))
          <img src="{{get_template_directory_uri(). '/images/board-selection.png'}}"
               class="img-fluid" alt="Board Selection" width="356" height="356">
        @endif
          @if(is_post_type_archive('project'))
            <img src="{{get_template_directory_uri(). '/images/coworking-pana.svg'}}"
                 class="img-fluid" alt="Projects" width="356" height="356">
          @endif
      </div>
    </div>
  </div>
</header>
