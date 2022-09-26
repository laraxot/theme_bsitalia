@extends('pub_theme::layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <h1 class="title-xxxlarge mb-4">Segnalazione disservizio</h1>
                </div>
                <div class="col-12">
                    <div class="cmp-info-progress d-flex" data-progress="">
                        <!-- Desktop -->
                        <div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end step-active">
                            <div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                                <span class="d-block h-100 title-medium text-uppercase">Informativa sulla Privacy</span>
                            </div>
                        </div>
                        <!-- Desktop -->
                        <div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end">
                            <div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                                <span class="d-block h-100 title-medium text-uppercase">Dati di segnalazione</span>
                            </div>
                        </div>
                        <!-- Desktop -->
                        <div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end">
                            <div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                                <span class="d-block h-100 title-medium text-uppercase">Riepilogo</span>
                            </div>
                        </div>
                        <!-- Mobile -->
                        <div class="iscrizioni-header d-lg-none w-100">
                            <h4 class="step-title d-flex align-items-center justify-content-between drop-shadow">
                                <span class="d-block d-lg-inline">
                                Autorizzazioni e condizioni
                                </span>
                                <span class="step">1/3</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 pb-40 pb-lg-80">
                    <p class="text-paragraph mb-lg-4">
                        Il Comune di Firenze gestisce i dati personali forniti e liberamente comunicati sulla base dell’articolo 13
                        del Regolamento (UE) 2016/679 General data protection regulation (Gdpr) e degli articoli 13 e successive
                        modifiche e integrazione del decreto legislativo (di seguito d.lgs) 267/2000 (Testo unico enti locali).
                    </p>
                    <p class="text-paragraph mb-0">
                        Per i dettagli sul trattamento dei dati personali consulta l’
                        <a href="#" class="t-primary">informativa sulla privacy.</a>
                    </p>
                    <div class="form-check mt-4 mb-3 mt-md-40 mb-lg-40">
                        <div class="checkbox-body d-flex align-items-center">
                            <input type="checkbox" id="privacy" name="privacy-field" value="privacy-field">
                            <label class="title-small-semi-bold pt-1" for="privacy">Ho letto e compreso l’informativa sulla
                            privacy</label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary mobile-full">
                    <span class="">Avanti</span>
                    </button>
                </div>
            </div>
        </div>
        @include($view_work.'.disservizi.partials.contatta_comune')
    </main>
@endsection