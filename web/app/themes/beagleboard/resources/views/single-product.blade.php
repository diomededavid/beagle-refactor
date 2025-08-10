@extends('layouts.app')

@section('header')
    @include('partials/entry-meta-' . get_post_type())
@endsection

@section('content')
    @while (have_posts())
        @php the_post() @endphp
        @include('partials.content-single-' . get_post_type())
    @endwhile
    @include('partials.product.product-features')
    @include('partials.product.product-related')
    @include('partials.project.project-related')
@endsection
