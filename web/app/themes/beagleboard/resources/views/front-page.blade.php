@extends('layouts.home')

@section('hero')
      @include('partials.front-page.hero')
@endsection

@section('sections')
  @include('partials.front-page.sections')
@endsection

@section('featured')
  @include('partials.front-page.featured')
@endsection

@section('projects')
  @include('partials.front-page.card-carousel')
@endsection
