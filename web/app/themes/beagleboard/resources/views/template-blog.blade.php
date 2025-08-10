{{--
  Template Name: Blog Template
--}}
@extends('layouts.app')

@section('header')
  @include('partials.entry-meta')
@endsection

@section('content')
  @include('partials.content-page')
  <div class="container">
    <div class="row">
      @if($blog_archive->have_posts())
        @while ($blog_archive->have_posts()) @php $blog_archive->the_post() @endphp
        <div class="col-lg-3 col-sm-6 my-4">
          @include('components.card')
        </div>
        @endwhile
    </div>
    @endif
  </div>
@endsection

