@if (config('metatag.logo_img') == '')
    <a class="d-none d-lg-block navbar-brand"
        href="{{ config('bootstrap-italia.owner.link') }}">{!! config('bootstrap-italia.owner.description') !!}</a>
@else
    <a href="{{ url('/') }}">
        <img class="class="d-none d-lg-block navbar-brand" src="{{ Theme::asset(Theme::metatag('logo_img')) }}"
            alt="logo" />
    </a>
@endif
