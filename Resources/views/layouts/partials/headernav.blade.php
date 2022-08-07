@php
$menu_items = $_theme->getMenuItemsByName('navbar');
@endphp
<!-- Header -->
<div class="it-header-wrapper {{ config('bootstrap-italia.sticky-header') ? 'it-header-sticky' : '' }}"
    style="{{ config('bootstrap-italia.sticky-header') ? 'z-index: 999' : '' }}">

    @include('pub_theme::layouts.partials.headernav.slim', ['menu_items' => $menu_items])


    <div class="it-nav-wrapper">
        @include('pub_theme::layouts.partials.headernav.center')

        @include('pub_theme::layouts.partials.headernav.menu', ['menu_items' => $menu_items])


    </div>
</div>
<!-- End Header -->
