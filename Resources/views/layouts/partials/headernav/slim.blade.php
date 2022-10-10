<div class="it-header-slim-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="it-header-slim-wrapper-content">
                    <a class="d-lg-block navbar-brand" target="_blank" href="#"
                        aria-label="Vai al portale {Nome della Regione} - link esterno - apertura nuova scheda"
                        title="Vai al portale {Nome della Regione}">Nome della Regione</a>
                    <div class="it-header-slim-right-zone" role="navigation">
                        <div class="nav-item dropdown">
                            <button type="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false" aria-controls="languages" aria-haspopup="true">
                                <span class="visually-hidden">Lingua attiva:</span>
                                <span>ITA</span>
                                <svg class="icon">
                                    <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-expand"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu">
                                <div class="row">
                                    <div class="col-12">https://teams.live.com/meet/9491694350802
                                        <div class="link-list-wrapper">
                                            <ul class="link-list">
                                                <li><a class="dropdown-item list-item" href="#"><span>ITA <span
                                                                class="visually-hidden">selezionata</span></span></a>
                                                </li>
                                                <li><a class="dropdown-item list-item"
                                                        href="#"><span>ENG</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-icon btn-full" href="#" data-element="personal-area-login">
                            <span class="rounded-icon" aria-hidden="true">
                                <svg class="icon icon-primary">
                                    <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-user"></use>
                                </svg>
                            </span>
                            @if (Auth::guest())
                                <span class="d-none d-lg-block"
                                    onclick="window.location.href='{{ route('login') }}';">Accedi all'area personale
                        </a></span>
                    @else
                        <span class="d-none d-lg-block"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            @lang('lu::auth.sign_out')
                        </span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
