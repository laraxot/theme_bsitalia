@if (config('metatag.subtitle') == '')
    <a class="d-none d-lg-block navbar-brand" href="{{ config('bootstrap-italia.owner.link') }}">
        {!! config('bootstrap-italia.owner.description') !!}
    </a>
@else
    <div class="d-none d-lg-block navbar-brand">{!! config('metatag.subtitle') !!}</div>
@endif
