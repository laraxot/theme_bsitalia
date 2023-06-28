@php
    //NOTA BENE, ESEMPIO PAGINA DI LOGIN QUI
    //https://docs.italia.it/accounts/login/
@endphp

@extends('pub_theme::layouts.app')
@section('content')
    <section class="container mt-5" style="max-width: 40em">
        <h1 class="pb-5">Log in</h1>
        <form class="login" method="POST" action="{{ route('login', ['referrer' => $referrer]) }}">
            @csrf

            <x-input.group label="Email Address" type="email" name="email" col_size="12" id="id_login"></x-input.group>
            <x-input.group label="Password" type="password" name="password" col_size="12" id="id_password"
                autocomplete="current-password"></x-input.group>

            <div class="form-check">
                <input id="id_remember" name="remember" type="checkbox">
                <label for="id_remember">Ricordami</label>
            </div>
            <div class="py-4 login_buttons">
                <button class="btn btn-primary" type="submit">Log in</button>
                {{-- <span class="px-3 my-3 my-md-0">oppure</span>
                <a class="btn btn-icon btn-outline-primary github" href="/accounts/github/login/?process=login"
                    title="GitHub">
                    <svg class="icon icon-sm icon-primary">
                        <use
                            xlink:href="https://docs.italia.it/media/static/vendor/bootstrap-italia/svg/sprite.svg#it-github">
                        </use>
                    </svg>
                    <span>
                        Autenticati con GitHub
                    </span>
                </a>
                <p></p> --}}
            </div>
            <p>Se non hai ancora creato un account, <a href="/accounts/signup/">registrati</a> adesso.</p>
            <p>Se invece hai dimenticato la password, puoi <a href="/accounts/password/reset/">reimpostarla</a>.</p>
        </form>
    </section>
@endsection
