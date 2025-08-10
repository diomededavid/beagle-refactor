@extends('layouts.app')

@section('header')
  @include('partials.entry-meta')
@endsection

@section('content')
  @include('partials.content-page')
  <div class="container">
    
    <div class="row">
        @while (have_posts()) @php the_post() @endphp
          <div @php post_class("col-lg-3 col-sm-6 my-4 product-list"); @endphp>
            @include('partials.product.product-card')
          </div>
        @endwhile
    </div>
  </div>
  {!! get_the_posts_navigation() !!}
@endsection
