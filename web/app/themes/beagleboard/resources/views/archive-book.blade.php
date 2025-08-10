@extends('layouts.app')

@section('header')
    @include('partials.entry-meta-archive')
@endsection

@section('content')
    @if (!have_posts())
        <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif

    <div class="container">
        @include('partials.books.books-search')
        <div class="book-grid">
            @while (have_posts())
                @php the_post() @endphp
                @include('partials.content-book')
            @endwhile
        </div>
    </div>
    {!! get_the_posts_navigation() !!}
@endsection
