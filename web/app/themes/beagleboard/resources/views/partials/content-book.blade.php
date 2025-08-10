@php $link = get_field( 'external_url' ); @endphp

<div @php(post_class("card border bg-light h-100"))>
  <div class="text-center p-2">
    {!! the_post_thumbnail( 'medium', [ 'alt' => get_the_title(), 'class' => 'img-fluid' ] ) !!}
  </div>
  <div class="card-body">
    <a href="{{ the_permalink() }}">
      <p class="text-center" >{{ the_title() }}</p>
    </a>
  </div>
  <div class="card-footer">
    <div class="d-grid gap-2">
    <a href="{{$link}}" class="btn btn-primary btn-sm btn-block" target="_blank">Buy on Amazon</a>
    </div>
  </div>
</div>
