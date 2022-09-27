@extends('pub_theme::base.base', ['title' => 'Area personale - Nome del Comune', 'logged' => 'true'])
@section('content')
    <main>
        <div class="container" id="main-container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <x-breadcrumbs link1="Home" link2="Servizi" link3="Segnalazione disservizio"></x-breadcrumbs>
                    <x-heading title="Segnalazione disservizio"></x-heading>
                </div>

                <div class="col-12">
                    <x-info-progress step-list=step-list.disservizio-step-3 step-num="3" step-title="Riepilogo"
                        step-tot="3"></x-info-progress>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">


                    <x-callout calloutType="warning" icon="it-horn" calloutTitle="Attenzione"
                        calloutText="Le informazioni che hai fornito hanno valore di dichiarazione.<span class='d-lg-block'> Verifica
            che siano corrette.</span>"
                        textClass="titillium text-paragraph"></x-callout>

                    <h2 class="title-xxlarge mb-4 mt-40">Segnalazione</h2>

                    <x-card.content-box class="mb-0" bg-grey=true header-m0=true h3-title=true h3-class="mb-4"
                        margin-class="mb-4" card-title="Disservizio">

                        <x-info-summary class="p-3 p-lg-4" header-class="pb-2" info=true info-list=disservizio-info.list>
                        </x-info-summary>


                    </x-card.content-box>

                    <h2 class="title-xxlarge mb-4 mt-40">Dati Generali</h2>

                    <x-card.content-box class="mb-0" bg-grey=true header-m0=true h3-title=true h3-class="mb-4"
                        margin-class="mb-4" card-title="Autore della segnalazione">

                        <x-info-summary.no-modify class="mb-4 mb-lg-30 p-3 p-lg-4" info-title="Giulia Bianchi" info=true
                            disservizio-page=true info-list=disservizio-info.info-author></x-info-summary.no-modify>

                        <x-info-summary.no-modify class="p-3 p-lg-4" info-title="Contatti" info=true disservizio-page=true
                            info-list=disservizio-info.info-contacts></x-info-summary.no-modify>

                    </x-card.content-box>

                    <x-nav-steps next=true modalId="modal-terms" saveBtn=true aria-label-save="di segnalazione disservizio">
                    </x-nav-steps>
                </div>
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
