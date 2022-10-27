@if (Auth::user())
    @if ($profile->isSuperAdmin() === true)
        <span class="bg-danger text-white p-3">
            SA
        </span>
    @endif
@endif
