<div class="container-fluid">
  <div class="container search-container">
    <form action="/" method="get" id="search_box" role="search" class="form-inline d-flex search_box" aria-expanded="false">
      <input class="form-control mr-2" type="search" id="searchright" placeholder="Search" name="s" aria-label="Search"
             value="@php the_search_query() @endphp">
      <button class="btn btn-primary m-2" type="submit">Search</button>
    </form>
  </div>
</div>



