<div class="row align-items-center align-content-center bg-info position-relative" style="background: url({{ get_template_directory_uri() . '/images/object-background.svg' }})">
  <div class="col">
      <div class="d-flex justify-content-center flex-column mx-auto">
    <h1 class="text-white text-center">PocketBeagle<sup>®</sup></h1>
      <img src="{{ get_template_directory_uri() . '/images/PocketBeagle_Front.png' }}" alt="Beagleboard.org" style="width: 56mm; height: 35mm;" class="mx-auto">
      <h3 class="text-white text-center">A $25 pocket sized board <br>with giant sized power for your projects</h3>
        <div class="mx-auto">
      <button type="button" class="btn btn-primary">Details</button>
        </div>
      </div>
  </div>
  @include('.partials.get-started-front')
  </div>



