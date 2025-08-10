<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')
<body @php body_class() @endphp>
@include('partials.google-tracking')
@php do_action('get_header') @endphp
@include('components.nav')
<div role="document">
  <div class="content">
    <main class="main">
      @yield('hero')
      @yield('sections')
      <section class="curves blues">
        @yield('projects')
      </section>
      <section class="container py-4">
        @component('components.section-head')
          {{ __('Featured', 'sage') }}
        @endcomponent
        @section('graphic')
        @endsection
        @yield('featured')
      </section>
    </main>
  </div>
</div>
@php do_action('get_footer') @endphp
@include('partials.footer')
@php wp_footer() @endphp
<script async src="https://cdn.jsdelivr.net/npm/es-module-shims@1/dist/es-module-shims.min.js" crossorigin="anonymous"></script>

</body>
</html>
