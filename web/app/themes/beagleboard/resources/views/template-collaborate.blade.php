{{--
  Template Name: Collaborate Template
--}}

@extends('layouts.app')
@section('header')
  @include('partials.entry-meta')
@endsection
@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.content-page-collaborate')
  @endwhile
@endsection
