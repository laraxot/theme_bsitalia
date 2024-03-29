<script>
    var base_url = '{{ asset('/') }}';
    var lang = '{{ app()->getLocale() }}';
    {{-- var google_maps_api='{{ config('xra.google.maps.api') }}'; --}}
    @if (\Request::has('address'))
        var address ="{{ \Request::input('address') }}";
    @endif
    @if (\Request::has('lat') && \Request::has('lng'))
        var lat ="{{ \Request::input('lat') }}";
        var lng ="{{ \Request::input('lng') }}";
    @endif
    
    window.__PUBLIC_PATH__ = '/themes/BsItalia/dist/fonts';
</script>
@stack('scripts_before')

@php
Theme::add('pub_theme::dist/js/manifest.js');
Theme::add('pub_theme::dist/js/vendor.js');
Theme::add('pub_theme::dist/js/app.js');
Theme::add('pub_theme::assets/script/scripts.js');
 
@endphp

{!! Theme::showScripts(false) !!}

<livewire:scripts />

@stack('scripts')
