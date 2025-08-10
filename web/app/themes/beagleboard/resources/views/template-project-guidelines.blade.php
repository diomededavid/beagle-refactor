{{--
  Template Name: Project Guidelines
--}}

@extends('layouts.app')

@section('header')
  @include('partials.entry-meta')
@endsection
@while(have_posts()) @php the_post() @endphp @endwhile
@section('content')
  @include('partials.content-page-project-guidelines')
  <div class="container">
    <div class="d-grid gap-2 d-md-block">
      @include('partials.project.project-submit-button')
      <a href="/projects" class="">
        <button class="btn btn-primary" type="button">View Projects</button>
      </a>
    </div>
  </div>
@endsection

