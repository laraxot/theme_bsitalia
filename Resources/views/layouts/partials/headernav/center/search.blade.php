@if (config('bootstrap-italia.routes.search'))
    <div class="it-search-wrapper">
        <span class="d-none d-md-block">{{ trans('pub_theme::bootstrap-italia.search') }}</span>
        <a class="search-link rounded-icon"
            href="{{ config('bootstrap-italia.routes.search.type') === 'route' ? route(config('bootstrap-italia.routes.search.route')) : url(config('bootstrap-italia.routes.search.url')) }}"
            aria-label="{{ trans('pub_theme::bootstrap-italia.search') }}">
            <svg class="icon">
                <use xlink:href="{{ Theme::asset('pub_theme::dist/svg/sprite.svg') }}#it-search">
                </use>
            </svg>
        </a>
    </div>
@endif
