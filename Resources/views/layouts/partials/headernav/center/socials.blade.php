@if (config('bootstrap-italia.socials'))
    <div class="it-socials d-none d-md-flex">
        <span>{{ trans('pub_theme::bootstrap-italia.follow_us') }}</span>
        <ul>
            @each('pub_theme::layouts.partials.social-links-item-header', config('bootstrap-italia.socials'), 'item')
        </ul>
    </div>
@endif
