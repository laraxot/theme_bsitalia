@extends('pub_theme::base.base', ['title' => 'Iscrizione alla Scuola dell’infanzia - Nome del Comune', 'headerActive3' => 'true'])
@section('content')
<main>
    <div class="container" id="main-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <x-breadcrumbs /cmp-breadcrumbs link1="Home" link2="Servizi" link3="Iscrizioni"></x-breadcrumbs>
                <x-std tpl="heading" title="Iscrizione alla scuola dell'infanzia"
                    description="Hai bisogno di assistenza?
        <a href='#' class='title-small-semi-bold t-primary'>Contattaci</a>">
                </x-std>
            </div>

            <div class="col-12">
                <x-info-progress step-list=iscrizione-graduatoria.info-progress.step-4 step-num="4"
                    step-title="Riepilogo" step-tot="4"></x-info-progress>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                <x-callout calloutType="warning" icon="it-horn" calloutTitle="Attenzione"
                    calloutText="Le informazioni che hai fornito hanno valore di dichiarazione.<span class='d-lg-block'> Verifica
          che siano corrette.</span>"
                    textClass="titillium text-paragraph"></x-callout>

                <h2 class="title-xxlarge mb-4 mt-40">Dati Generali</h2>

                <x-card.content-box class="mb-0" bg-grey=true h3-title=true h3-class="mb-0"
                    margin-class="mb-40 mb-lg-4" card-title="Richiedente">

                    <x-info-summary class="mb-4 mb-lg-30 p-4" info-title="Giulia Bianchi" info=true
                        info-list=info-genitore.info></x-info-summary>

                    <x-info-summary class="mb-4 mb-lg-30 p-4" info-title="Indirizzo" info=true
                        info-list=indirizzo-genitore.info></x-info-summary>

                    <x-info-summary class="mb-4 mb-lg-30 p-4" info-title="Contatti" info=true
                        info-list=contatti-genitore.info></x-info-summary>

                    <x-info-summary class="p-4 mb-0" info-title="Documenti" info=true info-list=documenti-genitore.info>
                    </x-info-summary>

                </x-card.content-box>

                <x-card.content-box class="mb-0" bg-grey=true h3-title=true h3-class="mb-0"
                    margin-class="mb-40 mb-lg-4" card-title="Beneficiario">

                    <x-info-summary class="mb-4 mb-lg-30 p-4" info-title="Francesco Rossi" info=true
                        info-list=info-figli.info></x-info-summary>

                    <x-info-summary class="mb-4 mb-lg-30 p-4" info-title="Indirizzo" info=true
                        info-list=indirizzo-figli.info></x-info-summary>

                    <x-info-summary class="p-4" info-title="Documenti" info=true info-list=documenti-figli.info>
                    </x-info-summary>
                </x-card.content-box>

                <x-card.content-box class="mb-0" bg-grey=true h3-title=true h3-class="mb-0"
                    margin-class="mb-40 mb-lg-4" card-title="Altro Genitore">

                    <x-info-summary class="mb-4 mb-lg-30 p-4" info-title="Mario Rossi" info=true
                        info-list=info-altro-genitore.info></x-info-summary>

                    <x-info-summary class="mb-4 mb-lg-30 p-4" info-title="Indirizzo" info=true
                        info-list=indirizzo-altro-genitore.info></x-info-summary>

                    <x-info-summary class="mb-4 mb-lg-30 p-4" info-title="Contatti" info=true
                        info-list=contatti-altro-genitore.info></x-info-summary>

                    <x-info-summary class="p-4" info-title="Documenti" info=true
                        info-list=allegati-altro-genitore.info></x-info-summary>
                </x-card.content-box>


                <x-card.content-box class="mb-0" bg-grey=true h3-title=true h3-class="mb-0" margin-class="mb-40"
                    card-title="ISEE">
                    <x-info-summary class="p-4" info-title="ISEE: 18.000,00€" info=true
                        info-list=isee-familiare.info></x-info-summary>
                </x-card.content-box>


                <h2 class="title-xxlarge mb-4">Preferenze di servizio</h2>

                <x-card.content-box bg-grey=true>

                    <x-info-summary class="p-4" header-class="pb-2" info=true info-list=preferenze-servizio.info>
                    </x-info-summary>
                </x-card.content-box>

                <x-nav-steps next=true saveBtn=true modalId="modal-terms" aria-label-save="di iscrizione"></x-nav-steps>
            </div>
        </div>
    </div>


    <div class="bg-grey-card shadow-contacts">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3 p-contacts">
                    <x-contact></x-contact>
                </div>
            </div>
        </div>
    </div>

    <x-modal-terms-and-conditions></x-modal-terms-and-conditions>
</main>
@endsection
