<div class="container my-4">
  <div class="row">
    <div class="col-2">
      <h2 class="text-primary">Projects</h2>
    </div>
    <div class="col mb-2 text-end">
      <a href="{{home_url('/projects/')}}" class="btn btn-primary btn-sm">View Projects</a>
      <a href="{{home_url('/project-guidelines/')}}" class="btn btn-info btn-sm">Submit Project</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12 h-100">
      <div class="splide" id="splide">
        <div class="splide__track">
          <ul class="splide__list">
            @if($project_related->have_posts())
              @while($project_related->have_posts())
                <li class="splide__slide">
                  @php $project_related->the_post() @endphp
                  <div class="splide__slide__container">
                    @include('partials.project.project-card')
                  </div>
                </li>
              @endwhile
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
