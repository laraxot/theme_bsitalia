<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="it-header-slim-wrapper-content">
                <a class="d-none d-lg-block navbar-brand"
                    href="{{ config('bootstrap-italia.owner.link') }}">{!! config('bootstrap-italia.owner.description') !!}</a>
                <div class="nav-mobile">
                    <nav>
                        <a class="it-opener d-lg-none" data-toggle="collapse" href="#menu-principale" role="button"
                            aria-expanded="false" aria-controls="menu-principale">
                            <span>{!! config('bootstrap-italia.owner.description') !!}</span>
                            <svg class="icon">
                                <use xlink:href="{{ Theme::asset('pub_theme::dist/svg/sprite.svg') }}#it-expand">
                                </use>
                            </svg>
                        </a>
                        <div class="link-list-wrapper collapse" id="menu-principale">
                            <ul class="link-list">
                                {{-- @each('pub_theme::layouts.partials.slim-header-menu-item', $bootstrapItalia->menu()['slim-header-menu'], 'item') --}}
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
                                <use xlink:href="{{ Theme::asset('pub_theme::dist/svg/sprite.svg') }}#it-expand">
                                </use>
                            </svg>
                        </a>
                        <div class="dropdown-menu">
                            <div class="row">
                                <div class="col-12">
                                    <div class="link-list-wrapper">
                                        <ul class="link-list">
                                            <li><a class="list-item" href="#"><span>ITA</span></a>
                                            </li>
                                            <li><a class="list-item" href="#"><span>ENG</span></a>
                                            </li>
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
                                        href="{{ config('bootstrap-italia.auth.login.type') === 'route' ? route(config('bootstrap-italia.auth.login.route')) : url(config('bootstrap-italia.auth.login.url')) }}"
                                        type="button">{{ trans('pub_theme::bootstrap-italia.login') }}</button>
                                @endif
                            @endguest
                            @auth
                                @if (strtoupper(config('bootstrap-italia.auth.logout.method')) === 'GET' ||
                                    (!config('bootstrap-italia.auth.logout.method') &&
                                        version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<')))
                                    <button onclick="event.preventDefault(); window.location=this.getAttribute('href')"
                                        class="btn btn-primary btn-sm"
                                        href="{{ config('bootstrap-italia.auth.logout.type') === 'route' ? route(config('bootstrap-italia.auth.logout.route')) : url(config('bootstrap-italia.auth.logout.url')) }}"
                                        type="button">{{ trans('pub_theme::bootstrap-italia.logout') }}</button>
                                @else
                                    <button
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="btn btn-primary btn-sm" href="#"
                                        type="button">{{ trans('pub_theme::bootstrap-italia.logout') }}</button>
                                    <form id="logout-form"
                                        action="{{ url(config('bootstrap-italia.logout_url', 'auth/logout')) }}"
                                        method="POST" style="display: none;">
                                        @if (config('bootstrap_italia.logout_method'))
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
