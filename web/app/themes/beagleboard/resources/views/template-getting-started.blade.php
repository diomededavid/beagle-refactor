{{--
  Template Name: Getting Started Template
--}}

@extends('layouts.app')
@while(have_posts()) @php the_post() @endphp
  @section('header')
    @include('partials.entry-meta')
  @endsection
  @section('content')
    @include('partials.content-page-stepper')
  @endsection
@endwhile
