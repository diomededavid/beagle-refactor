@if (is_singular('product'))
    @php the_post(); @endphp
    @if (have_rows('distributors'))
            <div class="dropdown mx-2">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Buy
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    @while (have_rows('distributors'))
                        @php
                            the_row();
                            $distUrl = get_sub_field('product_url');
                            $distInfo = get_sub_field_object('distributor');
                            $distImg = $distInfo['value'];
                            $distChoices = $distInfo['choices'];
                            $distLabel = $distChoices[$distImg];
                        @endphp
                        <li><a class="dropdown-item" href="{{ $distUrl }}" target="_blank">{{ $distLabel }}</a>
                        </li>
                    @endwhile
                </ul>
            </div>
    @endif
@endif
