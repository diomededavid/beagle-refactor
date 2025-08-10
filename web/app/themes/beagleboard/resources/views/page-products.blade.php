@extends('layouts.app')

@section('header')
  @include('partials.entry-meta-archive')
@endsection

@while(have_posts()) @php the_post() @endphp
@section('content')
  @include('partials.content-page')
@endsection
@endwhile

