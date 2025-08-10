@php
  $board_categories = getBoardCategoryList();
  $connect_categories = getConnectivityCategoryList();
  $experience_categories = getProjectExpLevelCategoryList();
@endphp
<div class="card bg-light-gray my-4 p-4">
  <div class="row g-2 align-items-center">
    <form>
        <div class="form-group">
          <label for="boards">Filter Projects</label>
            <select id="boards" class="select-project form-control form-control-sm" name="multi-board[]" required>
              {{--The first option value must be blank, otherwise the placeholder value won't be shown--}}
              <option value=""></option>
              <optgroup label="Difficulty Level">
                @foreach( $experience_categories as $category)
                  <option value="category-{{$category->slug}}">{{$category->cat_name}}</option>
                @endforeach
              </optgroup>
              <optgroup label="Boards">
                @foreach ( $board_categories as $category ) {
                <option value="category-{{$category->slug}}">{{$category->cat_name}}</option>
                @endforeach
              </optgroup>
              <optgroup label="Connectivity features">
                @foreach ( $connect_categories as $category ) {
                <option value="category-{{$category->slug}}">{{$category->cat_name}}</option>
                @endforeach
              </optgroup>
            </select>
        </div>
    </form>
    @include('partials.project.project-submit-button')
    </div>
  </div>
