    <!-- Header -->
    <div class="it-header-wrapper {{ config('bootstrap-italia.sticky-header') ? 'it-header-sticky' : ''}}" style="{{ config('bootstrap-italia.sticky-header') ? 'z-index: 999' : ''}}">
        <div class="it-header-slim-wrapper {{ config('bootstrap-italia.slim-header-light') ? 'theme-light' : '' }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="it-header-slim-wrapper-content">
                            <a class="d-none d-lg-block navbar-brand" href="{{ config('bootstrap-italia.owner.link') }}">{!! config('bootstrap-italia.owner.description') !!}</a>
                            <div class="nav-mobile">
                                <nav>
                                    <a class="it-opener d-lg-none" data-toggle="collapse" href="#menu-principale" role="button" aria-expanded="false" aria-controls="menu-principale">
                                        <span>{!! config('bootstrap-italia.owner.description') !!}</span>
                                        <svg class="icon">
                                            <use xlink:href="{{ Theme::asset('vendor/bootstrap-italia/dist/svg/sprite.svg#it-expand') }}"></use>
                                        </svg>
                                    </a>
                                    <div class="link-list-wrapper collapse" id="menu-principale">
                                        <ul class="link-list">
                                            {{--
                                                @each('pub_theme::layouts.partials.slim-header-menu-item', $bootstrapItalia->menu()['slim-header-menu'], 'item')
                                            --}}
                                            @php
                                               // dddx(config('bootstrap-italia.menu.slim-header'));
                                            @endphp
                                            @each('pub_theme::layouts.partials.slim-header-menu-item', config('bootstrap-italia.menu.slim-header'), 'item')
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="header-slim-right-zone">

                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                        <span>ITA</span>
                                        <svg class="icon d-none d-lg-block">
                                            <use xlink:href="{{ Theme::asset('vendor/bootstrap-italia/dist/svg/sprite.svg#it-expand') }}"></use>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="link-list-wrapper">
                                                    <ul class="link-list">
                                                        <li><a class="list-item" href="#"><span>ITA</span></a></li>
                                                        <li><a class="list-item" href="#"><span>ENG</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if (config('bootstrap-italia.auth'))
                                <div class="it-access-top-wrapper">
                                    @guest
                                        @if (config('bootstrap-italia.auth.login'))
                                            <button onclick="event.preventDefault(); window.location=this.getAttribute('href')"
                                                    class="btn btn-primary btn-sm"
                                                    href="{{ (config('bootstrap-italia.auth.login.type') === 'route') ? route(config('bootstrap-italia.auth.login.route')) : url(config('bootstrap-italia.auth.login.url')) }}"
                                                    type="button">{{ trans('pub_theme::bootstrap-italia.login') }}</button>
                                        @endif
                                    @endguest
                                    @auth
                                        @if(strtoupper(config('bootstrap-italia.auth.logout.method')) === 'GET' || !config('bootstrap-italia.auth.logout.method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                                            <button onclick="event.preventDefault(); window.location=this.getAttribute('href')"
                                                    class="btn btn-primary btn-sm"
                                                    href="{{ (config('bootstrap-italia.auth.logout.type') === 'route') ? route(config('bootstrap-italia.auth.logout.route')) : url(config('bootstrap-italia.auth.logout.url')) }}"
                                                    type="button">{{ trans('pub_theme::bootstrap-italia.logout') }}</button>
                                        @else
                                            <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                    class="btn btn-primary btn-sm"
                                                    href="#"
                                                    type="button">{{ trans('pub_theme::bootstrap-italia.logout') }}</button>
                                            <form id="logout-form" action="{{ url( config('bootstrap-italia.logout_url', 'auth/logout' )) }}" method="POST" style="display: none;">
                                                @if(config('bootstrap_italia.logout_method'))
                                                    {{ method_field(config('bootstrap_italia.logout_method')) }}
                                                @endif
                                                {{ csrf_field() }}
                                            </form>
                                        @endif
                                    @endauth
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="it-nav-wrapper">
            <div class="it-header-center-wrapper  {{ config('bootstrap-italia.small-header') ? 'it-small-header' : '' }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="it-header-center-content-wrapper">
                                <div class="it-brand-wrapper">
                                    <a href="{{ (config('bootstrap-italia.routes.home.type') === 'route') ? route(config('bootstrap-italia.routes.home.route')) : url(config('bootstrap-italia.routes.home.url')) }}">
                                        @if (config('bootstrap-italia.logo'))
                                            @if (config('bootstrap-italia.logo.type') === 'icon')
                                                <svg class="icon">
                                                    <use xlink:href="{{ Theme::asset('vendor/bootstrap-italia/dist/svg/sprite.svg#it-') }}{{ config('bootstrap-italia.logo.icon') }}"></use>
                                                </svg>
                                            @else
                                                <img alt="logo" class="icon" src="{{ config('bootstrap-italia.logo.url') }}">
                                            @endif
                                        @endif
                                        <div class="it-brand-text">
                                            <h2 class="no_toc d-none d-md-block">{!! config('bootstrap-italia.brand-text') !!}</h2>
                                            <h2 class="no_toc d-block d-md-none">{!! config('bootstrap-italia.brand-text-small') !!}</h2>
                                            <h3 class="no_toc d-none d-md-block">{!! config('bootstrap-italia.tagline') !!}</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="it-right-zone">
                                    @if (config('bootstrap-italia.socials'))
                                        <div class="it-socials d-none d-md-flex">
                                            <span>{{ trans('pub_theme::bootstrap-italia.follow_us') }}</span>
                                            <ul>
                                                @each('pub_theme::layouts.partials.social-links-item-header', config('bootstrap-italia.socials'), 'item')
                                            </ul>
                                        </div>
                                    @endif
                                    @if (config('bootstrap-italia.routes.search'))
                                        <div class="it-search-wrapper">
                                            <span class="d-none d-md-block">{{ trans('pub_theme::bootstrap-italia.search') }}</span>
                                            <a class="search-link rounded-icon" href="{{ (config('bootstrap-italia.routes.search.type') === 'route') ? route(config('bootstrap-italia.routes.search.route')) : url(config('bootstrap-italia.routes.search.url')) }}" aria-label="{{ trans('pub_theme::bootstrap-italia.search') }}">
                                                <svg class="icon">
                                                    <use xlink:href="{{ Theme::asset('vendor/bootstrap-italia/dist/svg/sprite.svg#it-search') }}"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="it-header-navbar-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <nav class="navbar navbar-expand-lg has-megamenu">
                                <button class="custom-navbar-toggler" type="button" aria-controls="nav10" aria-expanded="false" aria-label="{{ trans('pub_theme::bootstrap-italia.toggle_navigation') }}" data-target="#nav10">
                                    <svg class="icon">
                                        <use xlink:href="{{ Theme::asset('vendor/bootstrap-italia/dist/svg/sprite.svg#it-burger') }}"></use>
                                    </svg>
                                </button>
                                <div class="navbar-collapsable" id="nav10">
                                    <div class="overlay"></div>
                                    <div class="close-div sr-only">
                                        <button class="btn close-menu" type="button"><span class="it-close"></span>close</button>
                                    </div>
                                    <div class="menu-wrapper">
                                        <ul class="navbar-nav">
                                            {{--
                                                @each('pub_theme::layouts.partials.header-menu-item', $bootstrapItalia->menu()['header-menu'], 'item')
                                            --}}
                                            @each('pub_theme::layouts.partials.header-menu-item',  config('bootstrap-italia.menu.header'), 'item')
                                        </ul>
                                    </div>

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->
