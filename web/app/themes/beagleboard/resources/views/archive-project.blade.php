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
    @include('partials.project.project-search')
    <div class="row">
        @while (have_posts()) @php the_post() @endphp
          <div @php post_class("col-lg-3 col-sm-6 my-4"); @endphp>
            @include('partials.project.project-card')
          </div>
        @endwhile
    </div>
  </div>
  {!! get_the_posts_navigation() !!}
@endsection
