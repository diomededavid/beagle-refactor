<article @php post_class() @endphp>
  <div>
    <div class="container my-2">
      <div class="row">
        <div class="col">
          {!! the_content() !!}
        </div>
        @if(is_active_sidebar('sidebar-educate'))
          <aside class="sidebar col-md-4 col-sm-12">
            @php dynamic_sidebar('sidebar-educate') @endphp
          </aside>
        @endif
      </div>
    </div>
  </div>
</article>
