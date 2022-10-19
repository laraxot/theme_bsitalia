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
            {{-- <input type='hidden' name='csrfmiddlewaretoken'
                value='saxz92N0NAOO95HAGWI3Q9PIgo1xBhpw32xXbwHIlxTX2Q2O5qEnstLOKTxUMqXz' /> --}}

            <x-input.group label="Email Address" type="email" name="email" col_size="12" id="id_login"></x-input.group>


            {{-- <div class="form-group">
                <input type="email" name="email" class="form-control " id="id_login">
                <label for="id_login">Email</label>
            </div> --}}


            {{-- <div class="form-group">
                <input type="text" name="login" class="form-control " id="id_login">
                <label for="id_login">Login</label>
            </div> --}}
            <div class="form-group">
                <input type="password" name="password" class="form-control input-password" id="id_password">
                <label for="id_password">Password</label>
                <span class="password-icon bg-transparent" aria-hidden="true">
                    <svg class="password-icon-visible icon icon-sm">
                        <use
                            xlink:href="https://docs.italia.it/media/static/vendor/bootstrap-italia/svg/sprite.svg#it-password-visible">
                        </use>
                    </svg>
                    <svg class="password-icon-invisible icon icon-sm d-none">
                        <use
                            xlink:href="https://docs.italia.it/media/static/vendor/bootstrap-italia/svg/sprite.svg#it-password-invisible">
                        </use>
                    </svg>
                </span>
            </div>
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
