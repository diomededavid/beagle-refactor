{{--
  Template Name: Accordion Template
--}}
@extends('layouts.app')

@section('header')
  @include('partials.entry-meta')
@endsection

@section('content')
  <article @php post_class() @endphp>
    <div>
      <div class="container">
        <div class="row">
          <div class="col">
            {!! the_content() !!}
            @include('partials.content-page-accordion')
          </div>
        @if(is_active_sidebar('sidebar-accordion'))
          <aside class="sidebar col-md-4 col-sm-12">
            @php dynamic_sidebar('sidebar-accordion') @endphp
          </aside>
        @endif
        </div>
      </div>
    </div>
  </article>
@endsection
