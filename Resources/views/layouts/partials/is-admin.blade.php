@if (Auth::user())
    @if (Modules\LU\Services\ProfileService::make()->getUser()->isSuperAdmin() === true)
        <div class="fixed-top w-100 bg-success text-white text-center">
            <h6>SEI ADMIN QUINDI BYPASSI TUTTE LE POLICY</h6>
        </div>
    @endif
@endif
