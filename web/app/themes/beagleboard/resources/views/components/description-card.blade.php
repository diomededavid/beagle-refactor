<div class="card gray-to-white-grad shadow-sm hover-card distros-card item-load">
  <div class="card-body bg-transparent">
    <div class="distros-heading">
      <div>
        <a href="{{ get_permalink() }}">
          <p class="card-title">{{the_title()}}</p>
        </a>
      </div>
      <i class="fas fa-arrow-circle-right fa-lg text-primary"></i>
    </div>
    {{ the_excerpt() }}
  </div>
  <div class="card-footer bg-transparent">
    <div>
      @if(get_field('download_link'))
        <a class="btn btn-primary btn-sm" href="{{ get_field('download_link') }}" role="button" itemtype="https://schema.org/SoftwareApplication" itemprop="downloadURL">
          @include('partials.distros.itemprops-distros')
          <i class="fas fa-download text-center" aria-hidden="true"></i>&nbsp;Image
        </a>
      @endif
      @if(get_field('checksum'))
        @php(get_field('checksum'))
        <a class="btn btn-primary btn-sm" href="{{get_field('download_link') . '.sha256sum'}}" role="button">
          <i class="fas fa-download text-center" aria-hidden="true"></i>&nbsp;sha256
        </a>
      @endif
      @if(get_field('bmap-url'))
        <a class="btn btn-primary btn-sm" href="{{ get_field('bmap-url') }}" role="button">
          <i class="fas fa-download text-center" aria-hidden="true"></i>&nbsp;bmap
        </a>
      @endif
        {{get_the_date()}}
      @if(get_field('latest'))
        <i class="fas fa-check-circle text-success fa-2x float-end" title="Latest Version"></i>
        <span class="sr-only">Latest Version</span>
      @endif
    </div>
  </div>
</div>
