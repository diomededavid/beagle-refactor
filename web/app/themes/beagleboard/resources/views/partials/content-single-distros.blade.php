<article @if(is_singular('post')) {{post_class(['curves', 'grays'])}} @endif>
  <div class="container my-2">
    <div class="row">
      <div class="col">
        @php the_content() @endphp
      </div>
        <aside class="sidebar col-md-4 col-sm-12">
          <h5 class="font-weight-bold">Downloads</h5>
            @if(get_field('download_link'))
             <p class="font-weight-bold mb-0">Image file</p>
              <a href="{{get_field('download_link')}}" itemtype="https://schema.org/SoftwareApplication" itemprop="downloadURL">
                @include('partials.distros.itemprops-distros')
                <p class="text-wrap">{{after_last("/",get_field('download_link'))}}</p>
              </a>
            @endif
          <p class="font-weight-bold mb-0">Checksum</p>
          <a href="{{get_field('download_link') . '.sha256sum'}}">
            <p class="d-inline-block break-word" style="display: inline-block; word-wrap: break-word; max-width: 100%;">{{get_field('checksum')}}</p>
          </a>
            @if(get_field('bmap-url'))
              <p class="font-weight-bold mb-0">bmap file: <a
                  href="{{get_field('bmap-url')}}">{{after_last("/",get_field('bmap-url'))}}</a></p>
            @endif
            <p class="text-break">
            </p>
            <a class="btn btn-primary btn-sm btn-block" href="{{ get_field('download_link') }}" role="button">
              <i class="fas fa-download text-center"
                 aria-hidden="true"></i>&nbsp;Download
{{--              {{after_last("/",get_field('download_link'))}}--}}
            </a>
          @include('partials.sidebar')

        </aside>

    </div>
  </div>
</article>
<section role="comment">
  @php comments_template('/partials/comments.blade.php') @endphp
</section>

