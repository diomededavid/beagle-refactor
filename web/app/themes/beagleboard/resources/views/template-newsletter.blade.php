{{--
  Template Name: Newsletter Archive Template
--}}
@extends('layouts.app')

@section('header')
  @include('partials.entry-meta')
@endsection

@section('content')
  @include('partials.content-page')
  <div class="container">
    <div class="row">
      @if($newsletter_archive->have_posts())
        @while ($newsletter_archive->have_posts()) @php $newsletter_archive->the_post() @endphp
        <div class="col-lg-3 col-sm-6 my-4">
          @include('components.card')
        </div>
        @endwhile
    </div>
    @endif
  </div>
@endsection

