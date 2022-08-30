<div class="nav-mobile">
    <nav>
        @if ($menu_items->isEmpty())
            <a class="it-opener d-lg-none" data-toggle="collapse" href="#menu-principale" role="button"
                aria-expanded="false" aria-controls="menu-principale">
                <span>{!! config('bootstrap-italia.owner.description') !!}</span>
                {{--  
                <svg class="icon">
                    <use xlink:href="{{ Theme::asset('pub_theme::dist/svg/sprite.svg') }}#it-expand">
                    </use>
                </svg>
                --}}
            </a>
            <div class="link-list-wrapper collapse" id="menu-principale">
                <ul class="link-list">
                    @each('pub_theme::layouts.partials.headernav.slim.slim-header-menu-item', config('bootstrap-italia.menu.slim-header'), 'item')
                </ul>
            </div>
        @else
            <a class="it-opener d-lg-none" data-toggle="collapse" href="#menu-principale" role="button"
                aria-expanded="false" aria-controls="menu-principale">
                <span>{{ config('metatag.description') }}</span>
                <svg class="icon">
                    <use xlink:href="{{ Theme::asset('pub_theme::dist/svg/sprite.svg') }}#it-expand">
                    </use>
                </svg>
            </a>
            <div class="link-list-wrapper collapse" id="menu-principale">
                <ul class="link-list">
                    {{-- @each('pub_theme::layouts.partials.headernav.slim.slim-header-menu-item',$menu_items_array,'item') --}}
                    @foreach ($menu_items as $item)
                        <li>
                            <a href="{{ $item->link }}">{{ $item->label }}
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
        @endif
    </nav>
</div>
