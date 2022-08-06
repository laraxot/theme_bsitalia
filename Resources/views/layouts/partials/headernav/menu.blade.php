<div class="it-header-navbar-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <nav class="navbar navbar-expand-lg has-megamenu">
                    <button class="custom-navbar-toggler" type="button" aria-controls="nav10" aria-expanded="false"
                        aria-label="{{ trans('pub_theme::bootstrap-italia.toggle_navigation') }}" data-target="#nav10">
                        <svg class="icon">
                            <use xlink:href="{{ Theme::asset('pub_theme::dist/svg/sprite.svg') }}#it-burger">
                            </use>
                        </svg>
                    </button>
                    <div class="navbar-collapsable" id="nav10">
                        <div class="overlay"></div>
                        <div class="close-div sr-only">
                            <button class="btn close-menu" type="button"><span class="it-close"></span>close</button>
                        </div>
                        <div class="menu-wrapper">
                            <ul class="navbar-nav">
                                @each('pub_theme::layouts.partials.headernav.menu.header-menu-item', config('bootstrap-italia.menu.header'), 'item')
                                @php
                                    //dddx([config('bootstrap-italia.menu.header'), $_theme->getMenuItemsByName('navbar')]);
                                    //dddx($_theme->getMenuItemsByName('navbar'));
                                @endphp
                                {{-- @each('pub_theme::layouts.partials.headernav.menu.header-menu-item',$_theme->getMenuItemsByName('navbar'),'item') --}}
                            </ul>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
