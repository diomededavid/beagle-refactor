<article @php post_class() @endphp>
    <div class="container my-2">
      <div class="row">
        <div class="col">
          {!! the_content() !!}
        </div>
          @include('partials.sidebar')
      </div>
    </div>
</article>
