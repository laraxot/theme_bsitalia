<!DOCTYPE html>
<html lang="it">
  
    {{--  
    <head>
    {% include head.html %}
    </head>
    --}}
    @include('pub_theme::layouts.partials.htmlheader')
  
  <body onload="initCoverAnimation()">
    <a id="skippy" class="visually-hidden-focusable" href="#content">
      <div class="container">
        <span class="skiplink-text">Skip to main content</span>
      </div>
    </a>

    {{--  
    {% include docs-topbar.html %} 
    {% include docs-navbar.html %} 
    --}}
    @include('pub_theme::layouts.partials.headernav')
    <main>
        <x-breadcrumb ></x-breadcrumb>
        @yield('content')
    </main>
    @include('pub_theme::layouts.partials.modals')
    {{--  
    {% include footer.html %} 
    --}}
    @include('pub_theme::layouts.partials.footer')
    {{--  
    {% include scripts.html %}
    --}}
    @include('pub_theme::layouts.partials.scripts')
  </body>
</html>
{{-- https://github.com/italia/bootstrap-italia/blob/main/_layouts/default.html --}}