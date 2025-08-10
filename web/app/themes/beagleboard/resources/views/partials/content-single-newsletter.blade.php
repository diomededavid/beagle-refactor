<?php

// Load value.
  $iframe = get_field('newsletter_embed');
?>


<article>
  <div class="container my-2">
    @if(!get_field($iframe)) @endif
    <div class="row">
      <div class="col">
        <div class="embed-container">
          <iframe class="embed-responsive-item'" src="{!! $iframe !!}" title="{!! the_title() !!}" allowfullscreen></iframe>
        </div>
        </div>
      </div>
    <div class="row">
        <div class="col">
          @php the_content() @endphp
        </div>
      </div>
    </div>
</article>


