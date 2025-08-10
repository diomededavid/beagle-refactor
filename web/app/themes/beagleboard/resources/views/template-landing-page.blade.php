{{--
  Template Name: Landing Page Template
--}}

@extends('layouts.app')

@section('header')
  @include('partials.entry-landing-meta')
@endsection

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-landing-page')
  @endwhile
@endsection
