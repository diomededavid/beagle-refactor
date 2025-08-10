{{--
  Template Name: Educate Template
--}}

@extends('layouts.app')
@php
  $book_list=$books_education;
@endphp

@section('header')
  @include('partials.entry-meta')
@endsection

@section('content')
  @while(have_posts())
    @php the_post() @endphp
    @include('partials.content-page-educate')
    <section class="curves blues">
      @include('partials.books.books')
    </section>
    @include('partials.project.project-ideas')
  @endwhile
@endsection
