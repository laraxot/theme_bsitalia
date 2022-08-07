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
                                @if ($menu_items->isEmpty())
                                    @each('pub_theme::layouts.partials.headernav.menu.header-menu-item', config('bootstrap-italia.menu.header'), 'item')
                                @else
                                    {{-- html originale in layouts\partials\headernav\menu\header-menu-item.blade.php
                                    bisognerebbe mettere anche il tasto dropdown,
                                    rimando a quando avrò un menu adatto --}}
                                    @foreach ($menu_items as $item)
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{ $item->link }}"
                                                {{-- data-toggle="dropdown" --}} aria-expanded="false">
                                                <span>{{ $item->label }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
