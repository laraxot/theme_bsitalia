{{-- #>base/base title="Area personale - Nome del Comune" logged=true --}}
@extends('pub_theme::base.base', ['title' => 'Area personale - Nome del Comune', 'logged' => 'true'])
@section('content') 
<main>
    <div class="container" id="main-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <x-breadcrumbs link2="Home" link3="Documenti"></x-breadcrumbs>
                <x-heading title="Graduatoria scuola dell'infanzia per l'anno educativo 2022/23"></x-heading>
            </div>
            <hr class="d-none d-lg-block mb-2">
        </div>
        <div class="row mt-3 mt-lg-40 justify-content-center">
            <div class="col-12 col-lg-8">
                <x-card.content-box>
                    <p class="text-paragraph mb-3">Ultima graduatoria disponibile: 14 luglio 2022
                        La graduatoria qui pubblicata riguarda tutte le richieste pervenute nel mese di febbraio 2022 ed
                        è distinta
                        in:
                    </p>
                    <div class="mb-3 mt-3">
                        <x-ul-list info-list=area-personale-page-2.list-1></x-ul-list>
                    </div>
                    <p class="text-paragraph mb-3">È valida per inserimenti alla scuola dell’infanzia comunale o servizi
                        accreditati,
                        secondo quanto previsto dal regolamento vigente, articolo 8 comma 6.
                        Le età dei bambini indicate nella graduatoria si intendono compiuti al 1° settembre </p>
                    <p class="text-paragraph mb-3">Si ricorda che
                        eventuali variazioni, legate alla composizione del nucleo familiare o alla situazione lavorativa
                        di uno o
                        entrambi i genitori, potranno essere comunicate nel periodo settembre/novembre 2021 per
                        integrare l'attuale
                        graduatoria che, unitamente alle richieste che perverranno in tale periodo, sarà tenuta in
                        considerazione per
                        eventuali posti disponibili da gennaio 2022.</p>

                </x-card.content-box>

                {{-- <x-icon-list title="Allegati" icon-list=icon-list.allegati-area-personale default=true>
                </x-icon-list> --}}

                <x-lists.icon :rows="collect([])">
                    <x-slot name="title">Allegati</x-slot>
                    <x-slot name="default">{{true}}</x-slot>
                </x-lists.icon>

                <x-timeline title="Tempi e scadenze" timeline=timeline.area-personale></x-timeline>
                <div class="mb-40 mb-lg-90 mt-lg-30 mt-4">
                    <p class="text-paragraph mb-3">Le graduatorie verranno aggiornate ogni mese con nuove assegnazioni e
                        trasferimenti
                        in base ai posti che si renderanno disponibili.</p>
                    <a href="#" class="t-primary text-paragraph">Consulta la richiesta</a>
                    <span class="text-paragraph">nella tua area riservata</span>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-grey-card shadow-contacts">
        <div class="container">
            <div class="row d-flex justify-content-center p-contacts">
                <div class="col-12 col-lg-5">
                    <x-contact></x-contact>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection