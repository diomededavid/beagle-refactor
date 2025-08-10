@extends('layouts.app')

@section('header')
  @include('partials.entry-meta-archive')
@endsection

@section('content')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="container">
    @include('partials.distros.distros-search')
    <div id="workOuterShell" class="row">
      @while (have_posts()) @php the_post() @endphp
      <div @php(post_class("col-lg-4 col-sm-12 mb-4"))>
        @include('components.description-card')
      </div>
      @endwhile
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col my-4 d-flex justify-content-center">
        <button id="loadMore" class="btn btn-primary">Load More</button>
      </div>
    </div>
  </div>
@endsection
