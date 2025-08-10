@php
    $callbackUrl = home_url($_SERVER['REQUEST_URI']);
    $logoutUrl = wp_logout_url($callbackUrl);
    $logoutUrl = str_replace('&amp;', '&', $logoutUrl);
    $loginUrl = home_url(Roots\WPConfig\Config::get('DISCOURSE_AUTH_URL') . urlencode_deep($callbackUrl));
@endphp

    @if (is_user_logged_in())
        <div class="d-grid gap-2">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    @php
                        global $current_user;
                    @endphp
                    {!! get_avatar($current_user->ID, 32) !!}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2" style="left: -94px">
                    <li>
                      <a href="{{ home_url('/project-guidelines/') }}" class="dropdown-item" type="link">
                        Submit a Project
                      </a>
                    </li>
                    <li>
                      <a href="{{ $logoutUrl }}"><button class="dropdown-item" type="button">Logout</button>
                      </a>
                    </li>
                </ul>
            </div>
        </div>
    @else
        <div class="d-none d-lg-flex mx-2">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"
                    aria-expanded="false" aria-label="Login Or Register">
                    @php
                        global $current_user;
                    @endphp
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 49.09 49.09">
                        <path d="M27.27,49.09A21.82,21.82,0,1,0,5.45,27.27,21.82,21.82,0,0,0,27.27,49.09Z"
                            fill="#f26322" />
                        <path d="M22.91,44.73A21.82,21.82,0,1,0,1.09,22.91,21.82,21.82,0,0,0,22.91,44.73Z"
                            fill="none" stroke="#4f4f51" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2.18" />
                        <path d="M43.27,42.09a17.47,17.47,0,0,0-32,0,21.77,21.77,0,0,0,32,0Z" fill="#f26322" />
                        <path d="M38.9,37.72a17.46,17.46,0,0,0-32,0,21.74,21.74,0,0,0,32,0Z" fill="none"
                            stroke="#4f4f51" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2.18" />
                        <path d="M27.27,31.64a8.73,8.73,0,1,0-8.72-8.73A8.73,8.73,0,0,0,27.27,31.64Z" fill="#f26322" />
                        <path d="M22.91,27.27a8.73,8.73,0,1,0-8.73-8.72A8.72,8.72,0,0,0,22.91,27.27Z" fill="none"
                            stroke="#4f4f51" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2.18" />
                    </svg>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu2" >
                    <li><a href="{!! wp_login_url(get_permalink()) !!}" class="dropdown-item" type="link">Login</a></li>
                    <li><a href="{{ $loginUrl }}" class="dropdown-item" type="link">Register</a></li>
                    <li><a href="{{ home_url('/project-guidelines/') }}" class="dropdown-item" type="link">Submit A
                            Project</a></li>
                </ul>
            </div>
        </div>
    @endif

