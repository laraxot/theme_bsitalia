    <!-- Header -->
    <div class="it-header-wrapper {{ config('bootstrap-italia.sticky-header') ? 'it-header-sticky' : '' }}"
        style="{{ config('bootstrap-italia.sticky-header') ? 'z-index: 999' : '' }}">
        <div class="it-header-slim-wrapper {{ config('bootstrap-italia.slim-header-light') ? 'theme-light' : '' }}">
            @include('pub_theme::layouts.partials.headernav.slim')

        </div>
        <div class="it-nav-wrapper">
            @include('pub_theme::layouts.partials.headernav.center')

            @include('pub_theme::layouts.partials.headernav.menu')


        </div>
    </div>
    <!-- End Header -->
