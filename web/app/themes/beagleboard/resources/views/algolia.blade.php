@extends('layouts.app')

@section('header')
  @include('partials.entry-meta')
@endsection

@section('content')
  @if (!have_posts())
    <div class="container">
      <div class="row">
        <div class="col">
          <h4 class="text-center">{{ __('Sorry, no results were found.', 'sage') }}</h4>
        </div>
      </div>
    </div>
  @endif
  <div class="container">
    <div id="workOuterShell" class="row">
      @while(have_posts()) @php the_post() @endphp
      @include('partials.content-search')
      @endwhile</div>
  </div>
@endsection
