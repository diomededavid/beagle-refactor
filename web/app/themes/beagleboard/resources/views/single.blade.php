@php
    $layout = has_category('newsletter') ? 'layouts.no-sidebar' : 'layouts.app';
    $entry_meta_partial = has_category('newsletter') ? 'partials.entry-meta-newsletter' : 'partials.entry-meta';
    $content_partial = has_category('newsletter') ? 'partials.content-single-newsletter' : 'partials.content-single-' . get_post_type();
@endphp

@extends($layout)
@section('header')
    @include($entry_meta_partial)
@endsection
@section('content')
    @while (have_posts())
        @php the_post() @endphp
        @include($content_partial)
    @endwhile
@endsection
@php wp_reset_query(); @endphp
