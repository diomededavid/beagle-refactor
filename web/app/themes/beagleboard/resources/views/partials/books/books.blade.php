<div class="container my-5">
  <div class="row mt-4">
    <div class="col-2">
      <h2 class="text-primary">Books</h2>
    </div>
    <div class="col mb-2 text-end">
      <a href="/books" class="btn btn-primary btn-sm">Browse Books</a>
    </div>
  </div>
  <div class="row">
    @if(isset($book_list) && $book_list->have_posts())
      @while($book_list->have_posts())
        @php $book_list->the_post() @endphp
        <div class="col-lg-3 col-sm-6 mh-100">
          @include('partials.content-book')
        </div>
      @endwhile
    @endif
  </div>
</div>
