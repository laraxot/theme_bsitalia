@if (Auth::user())
    @if ($profile->isSuperAdmin() === true)
        <span class="bg-danger text-white p-3">
            <h6>SEI SUPER-ADMIN QUINDI<br>BYPASSI TUTTE LE POLICY</h6>
        </span>
    @endif
@endif
