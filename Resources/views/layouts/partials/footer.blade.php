 <!-- Footer -->
    <footer class="it-footer">
        <div class="it-footer-main">
            <div class="container">
                <section>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="it-brand-wrapper">
                                <a href="{{ (config('bootstrap-italia.routes.home.type') === 'route') ? route(config('bootstrap-italia.routes.home.route')) : url(config('bootstrap-italia.routes.home.url')) }}">
                                    @if (config('bootstrap-italia.logo'))
                                        @if (config('bootstrap-italia.logo.type') === 'icon')
                                            <svg class="icon">
                                                <use xlink:href="{{ asset('vendor/bootstrap-italia/dist/svg/sprite.svg#it-') }}{{ config('bootstrap-italia.logo.icon') }}"></use>
                                            </svg>
                                        @else
                                            <img alt="logo" class="icon" src="{{ config('bootstrap-italia.logo.url') }}">
                                        @endif
                                    @endif
                                    <div class="it-brand-text">
                                        <h2 class="no_toc">{!! config('bootstrap-italia.brand-text') !!}</h2>
                                        <h3 class="no_toc d-none d-md-block">{!! config('bootstrap-italia.tagline') !!}</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row">
                        {{--
                            @each('pub_theme::layouts.partials.footer-menu-item', $bootstrapItalia->menu()['footer-menu'], 'item')
                        --}}
                        @each('pub_theme::layouts.partials.footer-menu-item', config('bootstrap-italia.menu.footer'), 'item')

                    </div>
                </section>
                @if (config('bootstrap-italia.address') || config('bootstrap-italia.socials') || config('bootstrap-italia.routes.newsletter'))
                <section class="py-4 border-white border-top">
                    <div class="row">
                        @if (config('bootstrap-italia.address') || config('bootstrap-italia.contacts-links'))
                        <div class="col-lg-4 col-md-4 pb-2">
                            <h4><a href="#" title="{{ trans('pub_theme::bootstrap-italia.go_to') }}: {{ trans('pub_theme::bootstrap-italia.contacts') }}">{{ trans('pub_theme::bootstrap-italia.contacts') }}</a></h4>
                            @if (config('bootstrap-italia.address'))
                            <p>
                                {!! config('bootstrap-italia.address')  !!}
                            </p>
                            @endif
                            @if (config('bootstrap-italia.contacts-links'))
                            <div class="link-list-wrapper">
                                <ul class="footer-list link-list clearfix">
                                    @each('pub_theme::layouts.partials.contacts-links-item', config('bootstrap-italia.contacts-links'), 'item')
                                </ul>
                            </div>
                            @endif
                        </div>
                        @endif
                        @if (config('bootstrap-italia.socials') || config('bootstrap-italia.routes.newsletter'))
                        <div class="col-lg-4 col-md-4 pb-2 ml-auto">
                            @if (config('bootstrap-italia.socials'))
                                <div class="pb-2">
                                    <h4><a href="#" title="{{ trans('pub_theme::bootstrap-italia.go_to') }}: {{ trans('pub_theme::bootstrap-italia.follow_us') }}">{{ trans('pub_theme::bootstrap-italia.follow_us') }}</a></h4>
                                    <ul class="list-inline text-left social">
                                        @each('pub_theme::layouts.partials.social-links-item-footer', config('bootstrap-italia.socials'), 'item')
                                    </ul>
                                </div>
                            @endif
                            @if (config('bootstrap-italia.routes.newsletter'))
                                <div class="pb-2">
                                    <h4><a href="{{ (config('bootstrap-italia.routes.newsletter.type') === 'route') ? route(config('bootstrap-italia.routes.newsletter.route')) : url(config('bootstrap-italia.routes.newsletter.url')) }}">{{ trans('pub_theme::bootstrap-italia.newsletter') }}</a></h4>
                                </div>
                            @endif
                        </div>
                        @endif
                    </div>
                </section>
                @endif
            </div>
        </div>
        <div class="it-footer-small-prints clearfix">
            <div class="container">
                <h3 class="sr-only">{{ trans('pub_theme::bootstrap-italia.useful_links') }}</h3>
                <ul class="it-footer-small-prints-list list-inline mb-0 d-flex flex-column flex-md-row">
                    {{--
                        @each('pub_theme::layouts.partials.footer-bar-item', $bootstrapItalia->menu()['footer-bar'], 'item')
                        --}}
                        @each('pub_theme::layouts.partials.footer-bar-item', config('bootstrap-italia.menu.footer-bar'), 'item')

                </ul>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <a href="#" aria-hidden="true" data-attribute="back-to-top" class="back-to-top" id="example">
        <svg class="icon icon-light"><use xlink:href="{{ asset('vendor/bootstrap-italia/dist/svg/sprite.svg#it-arrow-up') }}"></use></svg>
    </a>
    <div class="cookiebar">
        <p>{!! trans('pub_theme::bootstrap-italia.cookiebar.message') !!}</p>
        <div class="cookiebar-buttons">
            <a href="#" class="cookiebar-btn">{!! trans('pub_theme::bootstrap-italia.cookiebar.preferences') !!}</a>
            <button data-accept="cookiebar" class="cookiebar-btn cookiebar-confirm">{!! trans('pub_theme::bootstrap-italia.cookiebar.accept') !!}</button>
        </div>
    </div>
