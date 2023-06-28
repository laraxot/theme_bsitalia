<head>
  {!! Theme::metatags() !!}
  
 
  <link href="{{ Theme::asset('pub_theme::dist/css/app.css') }}" rel="stylesheet">
  <link href="{{ Theme::asset('pub_theme::assets/css/style.css') }}" rel="stylesheet">
  @stack('styles')
</head>