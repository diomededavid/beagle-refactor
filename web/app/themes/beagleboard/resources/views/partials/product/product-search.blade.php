@php
  $board_categories = getBoardCategoryList();
  $processor_categories = getProcessorsCategoryList();
  $connect_categories = getConnectivityCategoryList();
  $memory_categories = getMemoryCategoryList()
@endphp


<div class="card bg-light-gray my-4 p-4">
  <div class="row">
    <form>
      <div class="form-row">
        <div class="form-group col-12">
          <label for="boards">Search products</label>
          <select id="boards" class="select-multi-board form-control form-control-sm" name="multi-board[]" required>
            {{--The first option value must be blank, otherwise the placeholder value won't be shown--}}
            <option value=""></option>
            <optgroup label="Boards">
              @foreach ( $board_categories as $category ) {
              <option value="category-{{$category->slug}}">{{$category->cat_name}}</option>
              @endforeach
            </optgroup>
            <optgroup label="Connectivity Options">
              @foreach ( $connect_categories as $category ) {
              <option value="category-{{$category->slug}}">{{$category->cat_name}}</option>
              @endforeach
            </optgroup>
            <optgroup label="Processor">
              @foreach ( $processor_categories as $category ) {
              <option value="category-{{$category->slug}}">{{$category->cat_name}}</option>
              @endforeach
            </optgroup>
            <optgroup label="Memory">
              @foreach ( $memory_categories as $category ) {
              <option value="category-{{$category->slug}}">{{$category->cat_name}}</option>
              @endforeach
            </optgroup>
          </select>
        </div>
      </div>
    </form>
  </div>
</div>
