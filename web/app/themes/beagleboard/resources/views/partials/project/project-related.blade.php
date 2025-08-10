@if($related_projects->have_posts())
  <section class="container">
    @component('components.section-head')
      {{ __('Projects', 'sage') }}
    @endcomponent
    <div class="row">
      @while($related_projects->have_posts())
        @php $related_projects->the_post() @endphp
      <div class="col-lg-3 col-sm-12">
        @include('partials.project.project-card')
      </div>
      @endwhile
    </div>
  </section>
@endif
