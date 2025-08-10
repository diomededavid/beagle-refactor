{{--
  Title: Donate
  Description: Donate buttons
  Category: widgets
  Icon: money-alt
  Keywords: donate
  Mode: auto
  Align: left
  PostTypes: page post
  SupportsMode: false
  SupportsInnerBlocks: false
  SupportsAlignContent: true
--}}

  <div class="row" data-{{ $block['id'] }}>
    <div class="col-2">
      <a href="https://paypal.me/beagleboard" target="_blank">
        <img src="{{get_template_directory_uri(). '/images/icons/paypal-icon.svg'}}" alt="Donate via PayPal">
      </a>
    </div>
    <div class="col-2">
      <a href="https://paypal.me/beagleboard" target="_blank">
        <img src="{{get_template_directory_uri(). '/images/icons/patreon-icon.svg'}}" alt="Donate via Patreon">
      </a>
    </div>
    <div class="col-2">
      <a href="https://github.com/sponsors/beagleboard" target="_blank">
        <img src="{{get_template_directory_uri(). '/images/icons/github-icon.svg'}}" alt="Sponsor via GitHub">
      </a>
    </div>
  </div>
