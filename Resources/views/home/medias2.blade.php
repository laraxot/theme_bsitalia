<div class="row">
    @foreach ($_theme->lastSiteClips() as $media)
        <div class="col-sm-6 col-lg-4">
            <x-card.press.clip :clip="$media" type="bs_italia">
            </x-card.press.clip>
        </div>
    @endforeach
</div>
