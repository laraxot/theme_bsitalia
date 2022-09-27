@extends('pub_theme::base.base', ['title' => 'Segnalazione disservizio - Nome del Comune', 'headerActive3' => 'true'])
@section('content')
    <main>
        <div class="container" id="main-container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <x-breadcrumb type="v2" :rows="$panel->getBreads()">
                    </x-breadcrumb>
                    <x-heading type="heading" heading-p0=true title="Segnalazione inviata" iconTitle="it-check-circle"
                        iconClass="mr-10 icon-sm mb-1"
                        subTitle="Grazie, abbiamo ricevuto la tua <strong>segnalazione AN4059281.</strong></p>
        <p class='subtitle-small'>Sarà visibile sulla <a href='#' class='t-primary'> lista di tutte segnalazioni</a> una volta
          presa in carico dall’amministrazione.</p>
        <p class='subtitle-small pt-3 pt-lg-4'>Abbiamo inviato il riepilogo all’email:<br><strong>
            giulia.bianchi@gmail.com</strong>"
                        button=true label="Scarica la ricevuta (PDF 100KB)" bg-white=true outline-primary=true
                        iconBtn="it-download" sm=true>
                    </x-heading>
                    <p class="mt-3">
                        <a href="#" class="t-primary text-paragraph">Consulta la richiesta</a>
                        <span class="text-paragraph"> nella tua area riservata</span>
                    </p>
                </div>
            </div>
            <hr class="d-none d-lg-block mt-40 mb-0">
            <div class="row justify-content-center mb-3 mb-md-5">

                <div class="col-12 col-lg-10">
                    <x-icon-list title="Servizi correlati" titleClass="mb-lg-4" id-title="related-service"
                        icon-list=servizi-pagamento.finalizzare-procedura.servizi-correlati-disservizio></x-icon-list>
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
                        <x-card.rows type="contacts" :rows="collect([])">
                        </x-card.rows>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
