{{--
  Template Name: Board Selection Template
--}}
@extends('layouts.app')

@section('header')
  @include('partials.entry-meta-board-select')
@endsection

@section('content')
  @include('partials.content-page')
  <div class="container">
    @if(is_page( 'boards' ))
    <div class="row mt-2 mb-2">
      <div class="col">
        <h2 class="text-primary">Featured</h2>
      </div>
    </div>
    <div class="row h-100">
      @if($board_selection->have_posts())
        @while ($board_selection->have_posts())
          @php $board_selection->the_post() @endphp
          <div @php post_class("col-lg-4 col-sm-6 my-4 product-list h-100" . get_the_ID()) @endphp>
            @include('partials.product.product-card')
          </div>
        @endwhile
      @endif
    </div>
    <div class="row my-4">
      <div class="col">
        <h2 class="text-primary">BeagleV&reg; - RISC-V Boards</h2>
      </div>
    </div>
    <div class="row h-100">
      @if($risc_v_selection->have_posts())
        @while ($risc_v_selection->have_posts())
          @php $risc_v_selection->the_post() @endphp
          <div @php post_class("col-lg-4 col-sm-6 my-4 product-list h-100" . get_the_ID()) @endphp>
            @include('partials.product.product-card')
          </div>
        @endwhile
      @endif
    </div>
    @endif
    @if(is_page( 'ecosystem' ))
    {{--  Compatible Boards  --}}
    <div class="row my-4">
      <div class="col">
        <h2 class="text-primary">Compatible Boards</h2>
      </div>
    </div>
    <div class="row">
    @if($compatible_board_selection->have_posts())
        @while ($compatible_board_selection->have_posts())
          @php $compatible_board_selection->the_post() @endphp
          <div @php post_class("col-lg-4 col-sm-6 my-4 product-list " . get_the_ID()) @endphp>
            @include('partials.product.product-card')
          </div>
        @endwhile
    @endif
    </div>
{{--  Capes and Kits  --}}
    <div class="row my-4">
      <div class="col">
        <h2 class="text-primary">Capes and Kits</h2>
      </div>
    </div>
    <div class="row">
    @if($accessory_selection->have_posts())
        @while ($accessory_selection->have_posts())
          @php $accessory_selection->the_post() @endphp
          <div @php post_class("col-lg-4 col-sm-6 my-4 product-list " . get_the_ID()) @endphp>
            @include('partials.product.product-card')
          </div>
        @endwhile
    @endif
    </div>
  </div>
  @endif
  {!! get_the_posts_navigation() !!}
@endsection

