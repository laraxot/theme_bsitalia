<li>
    <a href="{{ $item['url'] }}" aria-label="{{ $item['text'] }}" target="_blank">
        <svg class="icon">
            <use xlink:href="{{ Theme::asset('pub_theme::dist/svg/sprite.svg') }}#it-{{ $item['icon'] }}"></use>
        </svg>
    </a>
</li>