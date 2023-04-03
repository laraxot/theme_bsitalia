@extends('pub_theme::layouts.app', ['title' => 'Segnalazione disservizio - Nome del Comune', 'headerActive3' => 'true'])
@section('content')
    <main>
        <div class="container" id="main-container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <x-breadcrumb.rows :rows="$_theme->getLinksBreadcrumbs()">
                    </x-breadcrumb.rows>
                    <x-std tpl="heading">
                        <x-slot name="heading-p0">true</x-slot>
                        <x-slot name="title">Segnalazione inviata</x-slot>
                        <x-slot name="iconTitle">it-check-circle</x-slot>
                        <x-slot name="iconClass">mr-10 icon-sm mb-1</x-slot>
                        <x-slot name="subTitle">
                            Grazie, abbiamo ricevuto la tua <strong>segnalazione AN4059281.</strong></p>
                            <p class='subtitle-small'>Sarà visibile sulla <a href='#' class='t-primary'> lista di
                                    tutte segnalazioni</a> una volta
                                presa in carico dall’amministrazione.</p>
                            <p class='subtitle-small pt-3 pt-lg-4'>Abbiamo inviato il riepilogo all’email:<br><strong>
                                    giulia.bianchi@gmail.com</strong>
                        </x-slot>
                        <x-slot name="button">true</x-slot>
                        <x-slot name="label">Scarica la ricevuta (PDF 100KB)</x-slot>
                        <x-slot name="bg-white">true</x-slot>
                        <x-slot name="outline-primary">true</x-slot>
                        <x-slot name="iconBtn">it-download</x-slot>
                        <x-slot name="sm">true</x-slot>
                    </x-std>
                    <p class="mt-3">
                        <a href="#" class="t-primary text-paragraph">Consulta la richiesta</a>
                        <span class="text-paragraph"> nella tua area riservata</span>
                    </p>
                </div>
            </div>
            <hr class="d-none d-lg-block mt-40 mb-0">
            <div class="row justify-content-center mb-3 mb-md-5">

                <div class="col-12 col-lg-10">
                    <x-lists.icon :rows="$_theme->getServiziCorrelatiDisservizio()"
                        titleClass="mb-lg-4"
                        title="Servizi correlati"
                        id_title="related-service"
                        >
                    </x-lists.icon>
                </div>
            </div>
        </div>

        <div class="bg-primary">
            <div class="container">
                <div class="row d-flex justify-content-center bg-primary">
                    <div class="col-12 col-lg-6 p-lg-0 px-4">
                        <x-rating></x-rating>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-grey-card shadow-contacts">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3 p-contacts">
                        <x-contacts></x-contacts>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
