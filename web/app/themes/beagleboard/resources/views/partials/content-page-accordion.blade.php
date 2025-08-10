@if( have_rows('accordion_repeater') )
  <div class="accordion accordion-flush" id="accordionFlush">
    @while( have_rows('accordion_repeater')) @php the_row() @endphp
    @php
      $accordion_title = get_sub_field('accordion_title');
      $accordion_description = get_sub_field('accordion_description')
    @endphp
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-heading{{get_row_index()}}">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapse{{get_row_index()}}" aria-expanded="false"
                aria-controls="flush-collapse{{get_row_index()}}">
          {{$accordion_title}}
        </button>
      </h2>
      <div id="flush-collapse{{get_row_index()}}" class="accordion-collapse collapse"
           aria-labelledby="flush-heading{{get_row_index()}}"
           data-bs-parent="#accordionFlush{{get_row_index()}}">
        <div class="accordion-body">
          {!! $accordion_description !!}
        </div>
      </div>
    </div>
    @endwhile
  </div>
@endif



