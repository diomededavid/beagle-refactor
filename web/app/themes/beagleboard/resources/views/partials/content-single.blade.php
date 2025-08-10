<article @if(is_singular('post')) {{post_class(['curves', 'grays'])}} @endif>
  <div class="container my-2">
    <div class="row">
      <div class="col">
        @php the_content() @endphp
      </div>
      @include('partials.sidebar')
    </div>
  </div>
</article>
