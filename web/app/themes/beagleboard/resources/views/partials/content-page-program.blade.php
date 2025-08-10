<article @php post_class() @endphp>
  <div>
    <div class="container my-2">
      <div class="row">
        <div class="col">
          {!! the_content() !!}
        </div>
        @if(is_active_sidebar('sidebar-brand-use'))
        <aside class="sidebar col-md-4 col-sm-12">
          @php dynamic_sidebar('sidebar-program') @endphp
        </aside>
        @endif
      </div>
    </div>
  </div>
</article>
