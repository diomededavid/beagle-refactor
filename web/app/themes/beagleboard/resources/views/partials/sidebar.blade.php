@if(is_singular( 'post' ) && is_active_sidebar('sidebar-primary'))
  <aside class="sidebar col-md-4 col-sm-12">
    @php dynamic_sidebar('sidebar-primary') @endphp
  </aside>
@endif
@if(is_singular('distros') && is_active_sidebar('sidebar-distros'))
  <aside class="sidebar col-md-4 col-sm-12">
      @php dynamic_sidebar('sidebar-distros') @endphp
  </aside>
@endif
@if(is_singular('project') && is_active_sidebar('sidebar-projects'))
  <aside class="sidebar col-md-4 col-sm-12">
    @php dynamic_sidebar('sidebar-projects') @endphp
  </aside>
@endif
