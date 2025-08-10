{{--
  Template Name: Program Template
--}}

@extends('layouts.app')

@while(have_posts()) @php the_post() @endphp
  @section('header')
    @include('partials.entry-meta')
  @endsection
  @section('content')
  @include('partials.content-page-program')
  @endsection
@endwhile
