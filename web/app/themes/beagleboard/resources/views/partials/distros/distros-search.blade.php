@php
  $board_categories = getBoardCategoryList();
  $distrofeats_categories = getDistroFeatsCategoryList()
@endphp


  <div class="card bg-light-gray my-4 p-4">
    <div class="row">
    <form class="col my-auto">
      <div class="form-row">
        <div class="form-group col">
        <label for="boards" aria-label="Filter by Category">Filter Software Distributions</label>
        <select id="boards" class="form-select-lg  select-distros" name="multi-board[]" required>
          {{--The first option value must be blank, otherwise the placeholder value won't be shown--}}
          <option value="" label="Filter Software Distributions" selected></option>
          <optgroup label="Boards">
            @foreach ( $board_categories as $category ) {
            <option value="category-{{$category->slug}}">{{$category->cat_name}}</option>
            @endforeach
          </optgroup>
          <optgroup label="Distro features">
            @foreach ( $distrofeats_categories as $category ) {
            <option value="category-{{$category->slug}}">{{$category->cat_name}}</option>
            @endforeach
          </optgroup>
        </select>
        </div>
      </div>
    </form>
    <div class="col col-lg-4 my-auto ">
      <h5 class="text-lg-right my-4">
        <i class="fas fa-check-circle text-success"></i>
        <span class="sr-only">Circle Checkbox</span> = Latest Version</h5>
    </div>
    </div>
  </div>
