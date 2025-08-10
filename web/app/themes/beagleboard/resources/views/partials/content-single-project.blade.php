@php
use WPDiscourse\Utilities\Utilities as DiscourseUtilities;
$discourse_comments=DiscourseUtilities::get_discourse_comments(get_the_ID());
$author_name=get_the_author();
$posted_date=get_post_datetime();
$post_cats=wp_get_post_categories(get_the_ID(), ['fields'=>'names']);
$cat_list='';
foreach ($post_cats as $c) {
    if($cat_list) {
        $cat_list=$cat_list . ', ';
    }
    $cat_list=$cat_list . $c;
}
@endphp
<article @php post_class() @endphp>
  <div>
    <div class="container">
      <div class="row">
        @if($author_name)
          <div class="author-name">
            <p>Posted by {{$author_name}}@if($posted_date) on {{$posted_date->format(DateTimeInterface::W3C)}}@endif</p>
          </div>
        @endif
        @if($cat_list)
          <div class="post-categories">
            <p>Categories: {{$cat_list}}</p>
          </div>
        @endif

        <div class="external_reference">
          @php $external_url = get_field( "external_url" ) @endphp
          @if($external_url)
            <div class="ext_url">
              <small>Originally published at <a href="{{ $external_url }}" target="_blank" >{{$external_url}}</a>.</small>
            </div>
          @endif
        </div>
        <div class="col">
          {!! the_content() !!}
        </div>
        @if(is_active_sidebar('sidebar-projects'))
        <aside class="sidebar col-md-4 col-sm-12">
          @php dynamic_sidebar('sidebar-projects') @endphp
        </aside>
        @endif
      </div>
    </div>
  </div>
</article>
<div class="container">
  <div class="row">
    <div class="col">
        {!! $discourse_comments !!}
    </div>
  </div>
</div>
