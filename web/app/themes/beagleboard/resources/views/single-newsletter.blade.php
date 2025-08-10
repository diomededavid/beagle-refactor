@extends('layouts.app')

@section('header')
    @include('partials.entry-meta')
@endsection

@section('content')
    @while (have_posts())
        @php the_post() @endphp
        @include('partials.content-single-' . get_post_type())
    @endwhile
@endsection


<?php
  $post = $wp_query->post;
  if ( in_category('features') ) {
    @include('single-newsletter')
  } else {
    @include('single')
  }
?>
