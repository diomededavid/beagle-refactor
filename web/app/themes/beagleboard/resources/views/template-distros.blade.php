{{--
  Template Name: Distros Archive Template
--}}
@extends('layouts.app')

@section('header')
  @include('partials.entry-meta')
@endsection

@section('content')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  @if (have_posts())
    @while(have_posts()) @php the_post() @endphp
      @include('partials.content-page-distros')
    @endwhile
  @endif
  <section class="container my-4">
    @include('partials.distros.distros-search')
    <div id="workOuterShell" class="row">
      @if($distros_archive->have_posts())
        @while($distros_archive->have_posts())
          @php $distros_archive->the_post() @endphp
          <div {!! post_class('col-lg-4 col-sm-6 mb-4') !!}>
            @include('components.description-card')
          </div>
        @endwhile
      @endif
    </div>
  </section>
@endsection
