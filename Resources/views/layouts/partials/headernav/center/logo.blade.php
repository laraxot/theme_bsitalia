{{-- <div class="it-brand-wrapper">
    <a
        href="{{ config('bootstrap-italia.routes.home.type') === 'route' ? route(config('bootstrap-italia.routes.home.route')) : url(config('bootstrap-italia.routes.home.url')) }}">
        @if (config('bootstrap-italia.logo'))
            @if (config('bootstrap-italia.logo.type') === 'icon')
                <svg class="icon">
                    <use
                        xlink:href="{{ Theme::asset('pub_theme::dist/svg/sprite.svg') }}#it-{{ config('bootstrap-italia.logo.icon') }}">
                    </use>
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
</div> --}}
<div class="it-brand-wrapper">
    <a href="{{ url('/') }}">
        <img class="icon" src="{{ Theme::asset(Theme::metatag('logo_img')) }}" alt="logo" />
    </a>
</div>
