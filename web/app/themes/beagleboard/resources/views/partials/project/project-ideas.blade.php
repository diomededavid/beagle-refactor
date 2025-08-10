<div class="container">
  <div class="row mt-4">
    <div class="col-2">
      <h2 class="text-primary">Projects</h2>
    </div>
    <div class="col mb-2 text-end">
      <a href="/projects" class="btn btn-primary btn-sm">View Projects</a>
      <a href="/project-guidelines" class="btn btn-info btn-sm">Submit Project</a>
    </div>
  </div>
  <div class="row">
    @if($project_education->have_posts())
      @while($project_education->have_posts())
        @php $project_education->the_post() @endphp
        <div class="col-lg-4 col-sm-12">
          @include('partials.project.project-card')
        </div>
      @endwhile
    @endif
  </div>
</div>
