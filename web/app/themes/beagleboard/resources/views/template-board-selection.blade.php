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
    @if(is_page('boards'))
      <div class="row mt-2 mb-2">
        <div class="col">
          <h2 class="text-primary">Featured</h2>
        </div>
      </div>
      <div class="row h-100">
        @if($boardSelection->have_posts())
          @while($boardSelection->have_posts())
            @php $boardSelection->the_post() @endphp
            <div @php post_class('col-lg-4 col-sm-6 my-4 product-list h-100 ' . get_the_ID()) @endphp>
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
        @if($riscVSelection->have_posts())
          @while($riscVSelection->have_posts())
            @php $riscVSelection->the_post() @endphp
            <div @php post_class('col-lg-4 col-sm-6 my-4 product-list h-100 ' . get_the_ID()) @endphp>
              @include('partials.product.product-card')
            </div>
          @endwhile
        @endif
      </div>
    @endif

    @if(is_page('ecosystem'))
      {{-- Compatible Boards --}}
      <div class="row my-4">
        <div class="col">
          <h2 class="text-primary">Compatible Boards</h2>
        </div>
      </div>
      <div class="row">
        @if($compatibleBoardSelection->have_posts())
          @while($compatibleBoardSelection->have_posts())
            @php $compatibleBoardSelection->the_post() @endphp
            <div @php post_class('col-lg-4 col-sm-6 my-4 product-list ' . get_the_ID()) @endphp>
              @include('partials.product.product-card')
            </div>
          @endwhile
        @endif
      </div>
      {{-- Capes and Kits --}}
      <div class="row my-4">
        <div class="col">
          <h2 class="text-primary">Capes and Kits</h2>
        </div>
      </div>
      <div class="row">
        @if($accessorySelection->have_posts())
          @while($accessorySelection->have_posts())
            @php $accessorySelection->the_post() @endphp
            <div @php post_class('col-lg-4 col-sm-6 my-4 product-list ' . get_the_ID()) @endphp>
              @include('partials.product.product-card')
            </div>
          @endwhile
        @endif
      </div>
    @endif
    {!! get_the_posts_navigation() !!}
  </div>
@endsection
