 @php
        if(is_user_logged_in()) {
          $btnUrl='/submit-project';
          $btnLabel='Submit A Project';
          } else {
          /* $btnUrl=home_url('?discourse_sso=1&redirect_to=' . urlencode_deep(home_url('/submit-project'))); */
          $btnUrl=home_url(Roots\WPConfig\Config::get('DISCOURSE_AUTH_URL') . urlencode_deep(home_url(Roots\WPConfig\Config::get('DISCOURSE_AUTH_REDIRECT'))));
          $btnLabel='Submit A Project';
          };
      @endphp
      <a href="{{$btnUrl}}">
        <button class="btn btn-info" type="button">{{$btnLabel}}</button>
      </a>
