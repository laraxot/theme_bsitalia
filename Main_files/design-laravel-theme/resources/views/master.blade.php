<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title_prefix', config('bootstrap-italia.title_prefix', ''))
        @yield('title', config('bootstrap-italia.title', 'Bootstrap-Italia'))
        @yield('title_postfix', config('bootstrap-italia.title_postfix', ''))</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ Theme::asset('pub_theme::dist/css/bootstrap-italia.min.css') }}" rel="stylesheet">

    @yield('bootstrapitalia_css')

    <script>window.__PUBLIC_PATH__ = '{{ Theme::asset('pub_theme::dist/fonts') }}'</script>
</head>
<body>
@yield('body')

@yield('bootstrapitalia_js')
</body>
</html>