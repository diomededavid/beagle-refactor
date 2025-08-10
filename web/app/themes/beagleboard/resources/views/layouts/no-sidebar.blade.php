<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
<body @php body_class() @endphp>
@include('partials.google-tracking')
  @php do_action('get_header') @endphp
  @include('partials.header')
  @yield('header')
<main>
  @yield('content')
</main>
  @php do_action('get_footer') @endphp
  @include('partials.footer')
  @php wp_footer() @endphp
</body>
</html>
