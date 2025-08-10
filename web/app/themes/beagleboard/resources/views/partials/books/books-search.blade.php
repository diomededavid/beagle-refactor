@php
  $board_categories = getBoardCategoryList();
  $application_categories = getApplicationCategoryList();
@endphp
<div class="card bg-light-gray my-4 p-4">
  <div class="row">
    <form>
      <div class="form-row">
        <div class="form-group col-12">
          <label for="books">Filter Books</label>
          <select id="books" class="select-book form-control form-control-sm" name="multi-book[]" required>
            {{--The first option value must be blank, otherwise the placeholder value won't be shown--}}
            <option value=""></option>
            <optgroup label="Application">
              @foreach ( $application_categories as $category ) {
              <option value="category-{{$category->slug}}">{{$category->cat_name}}</option>
              @endforeach
            </optgroup>
            <optgroup label="Boards">
              @foreach ( $board_categories as $category ) {
              <option value="category-{{$category->slug}}">{{$category->cat_name}}</option>
              @endforeach
            </optgroup>
          </select>
        </div>
      </div>
    </form>
  </div>
</div>
