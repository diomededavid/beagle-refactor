<div class="container my-2">
  <div class="row">
    <div class="col">
      {!! the_content() !!}

      <div id="stepper2" class="bs-stepper">
        @while( have_rows('stepper_repeater') )  @php the_row() @endphp
        @php
          $stepper_title = get_sub_field('stepper_title');
          $stepper_description = get_sub_field('stepper_description')
        @endphp
        <div class="bs-stepper-header">
          <div class="step" data-target="#lv-{{get_row_index()}}">
            <button type="button" class="btn step-trigger">
              <span class="bs-stepper-circle">{{get_row_index()}}</span>
              <span class="bs-stepper-label">{{$stepper_title}}</span>
            </button>
          </div>
          <div class="line"></div>
        </div>
        <div class="bs-stepper-content">
          <div id="lv-{{get_row_index()}}" class="content">
            {!! $stepper_description !!}
          </div>
        </div>
        @endwhile
      </div>
    </div>
    @if( is_active_sidebar('sidebar-stepper'))
      <aside class="sidebar col-md-4 col-sm-12">
        {!! dynamic_sidebar('sidebar-stepper') !!}
      </aside>
    @endif
  </div>
</div>
<section class="curves blues">
  @include('partials.books.books')
</section>
