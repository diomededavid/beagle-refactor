<div class="offcanvas offcanvas-end" id="main-menu">
    <div class="offcanvas-header">
        <div>
            <div>
                <div class="row justify-content-end">
                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="offcanvas"></button>
                </div>
            </div>
            <div>
                <div class="mt-4">
                    <a href="{{ home_url('/') }}">
                        <img src="{{ get_template_directory_uri() . '/images/beagleboard-logo.svg' }}"
                            alt="BeagleBoard.org®" width="275" height="auto">
                    </a>
                </div>
                <div class="offcanvas-body mt-4">
                    @php
                        wp_nav_menu([
                            'theme_location' => 'primary_navigation',
                            'container' => true,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav justify-content-end mb-2 mb-md-0 text-nowrap %2$s">%3$s</ul>',
                            'depth' => 2,
                        ]);
                    @endphp
                    <hr class="solid">
                    <div class="navbar-nav justify-content">
                        @if (is_user_logged_in())
                            @php
                                global $current_user;
                            @endphp
                            {!! get_avatar($current_user->ID, 32) !!}


                            <a href="{{ home_url('/project-guidelines/') }}" class="" type="link">Submit
                                A Project</a>
                            <a href="{{ $logoutUrl }}">Logout</a>
                        @else
                            @php
                                global $current_user;
                            @endphp


                            <a href="{!! wp_login_url(get_permalink()) !!}" class=""type="link">Login</a>
                            <a href="{{ $loginUrl }}" class="" type="link">Register</a>
                            <a href="{{ home_url('/project-guidelines/') }}" class="" type="link">Submit A Project</a>
                      @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid d-lg-none">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#main-menu">
        <span>
            <i class="fas fa-bars black"></i>
        </span>
    </button>
</div>
