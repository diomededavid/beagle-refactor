@if(!empty($processor) || !empty($features) )
<div class="container">
  <div class="row">
    @if($processor)
      <div class="col-lg-6 col-sm-12">
        <div class="chipset-features-icon">
          <h5 class="text-center mb-4">Chipset Features</h5>
        </div>
        {!! $processor !!}
      </div>
    @endif
    @if($features)
      <div class="col-lg-6 col-sm-12">
        <div class="features">
          <h5 class="text-center mb-4">Board Features</h5>
        </div>
        {!! $features !!}
      </div>
    @endif
      @if(isset($resources) && $resources)
        <div class="col-lg-6 col-sm-12">
          <div class="resources-icon">
            <h5 class="text-center mb-4">Resources</h5>
          </div>
          {!! $resources !!}
        </div>
      @endif
  </div>
</div>
@endif
