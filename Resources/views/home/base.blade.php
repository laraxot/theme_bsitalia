<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $htmlWebpackPlugin->options->description }}" />

    @if (isset($path))
        <link rel="stylesheet"
            href="{{ $path }}assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css">
    @else
        <link rel="stylesheet" href="../assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css">
    @endif

    @if (isset($service_json))
        <script data-element="metatag" type="application/ld+json">
			{
			  "name": "Iscrizione alla Scuola dell’infanzia",
			  "serviceType": "P1Y",
			  "serviceOperator": {
			    "name": "Lorem"
			  },
			  "areaServed": {
			    "name": "Lorem ipsum"
			  },
			  "audience": {
			    "name": "Lorem ipsum"
			  },
			  "availableChannel": {
			    "serviceUrl": "Lorem ipsum",
			    "serviceLocation": {
			      "name": "Lorem ipsum",
			      "address": {
			        "streetAddress": "Lorem ipsum",
			        "postalCode": "Lorem ipsum",
			        "addressLocality": "Lorem ipsum"
			      }
			    }
			  }
			}
		</script>
    @endif
</head>

<body>
    <div class="skiplink">
        <a class="visually-hidden-focusable" href="#main-container">Vai ai contenuti</a>
        <a class="visually-hidden-focusable" href="#footer">Vai al
            footer</a>
        </ul>
    </div>
    <!-- /skiplink -->
    @if (isset($headerActive1))
        <x-header logged=logged active1=headerActive1></x-header>
    @else
        @if (isset($headerActive2))
            <x-header logged=logged active2=headerActive2></x-header>
        @else
            @if (isset($headerActive3))
                <x-header logged=logged active3=headerActive3></x-header>
            @else
                @if (isset($headerActive4))
                    <x-header logged=logged active4=headerActive4></x-header>
                @else
                    <x-header logged=logged></x-header>
                @endif
            @endif
        @endif
    @endif
    @yield('content')
    <x-modal type="header_search"></x-modal>
    <x-footer></x-footer>
    @if (isset($path))
        <script>
            window.__PUBLIC_PATH__ = "{{ $path }}assets/bootstrap-italia/dist/fonts"
        </script>
        <script src="{{ $path }}assets/bootstrap-italia/dist/js/bootstrap-italia.bundle.min.js"></script>
    @else
        <script>
            window.__PUBLIC_PATH__ = "../assets/bootstrap-italia/dist/fonts"
        </script>
        <script src="../assets/bootstrap-italia/dist/js/bootstrap-italia.bundle.min.js"></script>
    @endif
</body>

</html>
