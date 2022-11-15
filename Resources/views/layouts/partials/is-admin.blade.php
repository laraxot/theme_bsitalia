@if (Auth::user())
    @if ($profile->isSuperAdmin() === true)
        {{--  
        <span class="bg-danger text-white p-3">
            SA
           
        </span>
        --}}
        <img src="{{ Theme::asset('theme::svg/superman.svg') }}" width="50"/>
    @endif
@endif
