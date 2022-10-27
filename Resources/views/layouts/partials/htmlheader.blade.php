<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>{{config('metatag.title','Titolo')}}</title>

  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="">
  {{--  
  <link rel="stylesheet" href="../assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css">
  <link href="../assets/css/style.css" rel="stylesheet">
  --}}
  <link href="{{ Theme::asset('pub_theme::dist/css/app.css') }}" rel="stylesheet">
  <link href="{{ Theme::asset('pub_theme::assets/css/style.css') }}" rel="stylesheet">
  @stack('styles')
</head>