<div class="row">
<div class="one-to-three">
    @if($featured_posts->have_posts())
      @while($featured_posts->have_posts())
        @php $featured_posts->the_post() @endphp
      @include('components.card')
      @endwhile
    @endif
  </div>
</div>
