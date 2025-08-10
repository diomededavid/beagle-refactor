@if( (have_rows('distributors')) )
  <div class="distributors">
    <div>
      @php
        the_row();
        $distInfo=get_sub_field_object('distributor');
        $distImg=$distInfo['value'];
      @endphp
      @if($distImg == 'seed-studio.svg')
        <h2 class="small text-black text-end has-text-align-right">Created<br>by</h2>
      @else
        <h2 class="small text-black text-end">Purchase<br>at</h2>
      @endif
    </div>
    @php
        reset_rows('distributors');
    @endphp
    @while (have_rows('distributors'))
      @php  the_row();
        $distributor_url = get_sub_field('product_url');
        $distInfo=get_sub_field_object('distributor');
        $distImg=$distInfo['value'];
        $distChoices=$distInfo['choices'];
        $distLabel=$distChoices[$distImg];
      @endphp
      <div class="card hover-card">
        <div class="my-auto">
          <a href="{{$distributor_url}}" class="stretched-link align-middle">
            <img src="{{ get_template_directory_uri() . '/images/distributors/' . $distImg}}" class="card-img"
                 alt="{{$distLabel}}" width="116" height="auto" style="max-height: 43px">
          </a>
        </div>
      </div>
    @endwhile
  </div>
@endif
