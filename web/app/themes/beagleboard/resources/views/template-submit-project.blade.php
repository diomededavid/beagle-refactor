{{--
  Template Name: Submit Project Template
--}}

@extends('layouts.app')

@php
  if (!is_user_logged_in()){
      wp_redirect('/project-guidelines');
      exit;
  } else {
      $curUser=wp_get_current_user();
  }
@endphp

@section('header')
  @include('partials.entry-meta')
@endsection

@section('content')
  @while(have_posts())
    @php the_post() @endphp
      <div class="container my-4">
        <div class="row">
          <div class="col-lg-8 col-sm-12 mx-auto">
            {!! the_content() !!}
          </div>
        </div>
      </div>
  @endwhile
@endsection
