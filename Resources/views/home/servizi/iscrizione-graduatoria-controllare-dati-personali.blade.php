@extends('pub_theme::base.base', ['title' => 'Iscrizione alla Scuola dell’infanzia - Nome del Comune', 'headerActive3' => 'true'])
@section('content')
    <main>
        <div class="container" id="main-container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <x-breadcrumbs link1="Home" link2="Servizi" link3="Iscrizioni"></x-breadcrumbs>

                    <x-heading title="Iscrizione alla scuola dell'infanzia"
                        subTitle="Inserisci le informazioni necessarie per richiedere l’iscrizione alla Scuola dell’infanzia. <br>
        Potrai ricontrollare tutti i dati nel riepilogo, prima di inviare la richiesta."
                        description="Hai bisogno di assistenza? <a class='title-small-semi-bold t-primary' href='#'>Contattaci</a>"
                        desClass="mt-lg-2 mb-4"></x-heading>
                </div>
                <div class="col-12">
                    <x-info-progress step-list=iscrizione-graduatoria.info-progress.step-2 step-num="2"
                        step-title="Dati generali" step-tot="4"></x-info-progress>
                </div>
            </div>
            <div class="steppers-content" aria-live="polite">
                <div class="row">
                    <div class="col-12 col-lg-3 mb-4 d-none d-lg-block">
                        <x-navscroll accordion-title="INFORMAZIONI RICHIESTE" id="one"
                            link-list=iscrizione-graduatoria.controllare-dati-personali.navscroll br-none="true">
                        </x-navscroll>
                    </div>

                    <div class="col-12 col-lg-8 offset-lg-1 mt-0">
                        <x-alert-box warning=true message="Ci sono alcune informazioni mancanti o errate"
                            alertSpan-class="title-small-semi-bold" description-class="mb-1" class="mb-50"
                            alert-link-list=iscrizione-graduatoria.controllare-dati-personali.alert-list></x-alert-box>

                        <div class="it-page-sections-container">
                            <section class="it-page-section" id="applicant-info">
                                <x-card.content-box h2-class="mb-1" bg-grey=true card-title="Richiedente"
                                    subtitle="Informazione su di te" margin-class="mb-40">

                                    <x-button-card big-title="Giulia Bianchi"
                                        label-2="Codice Fiscale <br> <span>GLABNC72H25H501Y</span>"
                                        show-more-anagrafica-2=true
                                        anagrafica=iscrizione-graduatoria.controllare-dati-personali.anagrafica.list-1
                                        indirizzo=iscrizione-graduatoria.controllare-dati-personali.indirizzo
                                        contatti=iscrizione-graduatoria.controllare-dati-personali.contatti
                                        documenti=iscrizione-graduatoria.controllare-dati-personali.documenti
                                        collapse-id="collapse-parents" modalId="modal-documents">

                                    </x-button-card>
                            </section>

                            <section class="it-page-section" id="beneficiary-info">
                                <x-card.content-box bg-grey=true card-title="Beneficiario" h2-class="mb-1"
                                    subtitle="Seleziona o aggiungi il minore per cui vuoi richiedere l’iscrizione"
                                    margin-class="mb-40">

                                    <fieldset>
                                        <legend class="visually-hidden">Seleziona o aggiungi il minore per cui vuoi
                                            richiedere l’iscrizione
                                        </legend>

                                        <x-info-button-card radio=true group="beneficiaries" idRadio="son"
                                            radio-title="Francesco Rossi"
                                            label-2="Codice Fiscale <br> <span>FRARSS72H25H501Y</span>"
                                            show-more-anagrafica-2=true
                                            anagrafica=iscrizione-graduatoria.controllare-dati-personali.anagrafica.list-1
                                            indirizzo=iscrizione-graduatoria.controllare-dati-personali.indirizzo
                                            contatti=iscrizione-graduatoria.controllare-dati-personali.contatti
                                            documenti=iscrizione-graduatoria.controllare-dati-personali.documenti
                                            collapse-id="collapse-benef-1" modalId="modal-documents"></x-info-button-card>

                                        <x-info-button-card radio=true group="beneficiaries" idRadio="daughter"
                                            radio-title="Lucia Rossi"
                                            label-2="Codice Fiscale <br> <span>LCARSS72H25H501Y</span>"
                                            show-more-anagrafica-2=true
                                            anagrafica=iscrizione-graduatoria.controllare-dati-personali.anagrafica.list-1
                                            indirizzo=iscrizione-graduatoria.controllare-dati-personali.indirizzo
                                            contatti=iscrizione-graduatoria.controllare-dati-personali.contatti
                                            documenti=iscrizione-graduatoria.controllare-dati-personali.documenti
                                            collapse-id="collapse-benef-2" modalId="modal-documents"></x-info-button-card>
                                    </fieldset>

                                    <x-button label="Aggiungi beneficiario" iconBtn="it-plus-circle" sm=true
                                        class="plus-text mt-20 p-0"></x-button>

                                </x-card.content-box>
                            </section>

                            <section class="it-page-section" id="other-parent-info">
                                <x-card.content-box bg-grey=true card-title="Altro genitore" h2-class="mb-1"
                                    subtitle="Informazioni sull’altro genitore" margin-class="mb-40">

                                    <x-info-button-card big-title="Mario Rossi" btnDocumenti=true btn-label-text="Aggiungi"
                                        label-2="Codice Fiscale <br> <span>MRARSS72H25H501Y</span>"
                                        show-more-anagrafica-2=true
                                        anagrafica=iscrizione-graduatoria.controllare-dati-personali.anagrafica.list-2
                                        indirizzo=iscrizione-graduatoria.controllare-dati-personali.indirizzo
                                        contatti=iscrizione-graduatoria.controllare-dati-personali.contatti
                                        documenti=iscrizione-graduatoria.controllare-dati-personali.documenti-warning
                                        collapse-id="collapse1" modalId="modal-documents" acc-open=true>
                                    </x-info-button-card>

                                </x-card.content-box>
                            </section>

                            <section class="it-page-section" id="isee-info">
                                <x-card-content-box bg-grey=true card-title="ISEE" h2-class="mb-1"
                                    subtitle="Informazioni sul valore dell’ISEE del tuo nucleo familiare basato sulla tua
              ultima dichiarazione">

                                    <x-info-button-card big-title="ISEE: 18.000,00€"
                                        label-2="Scadenza ISEE <br> <span>01/10/2019</span>" show-more-isee=true
                                        no-header=true collapse-id="collapse2" modalId="modal-isee" warning=true
                                        classWarning="mb-2" btn-label-text="Correggi" acc-open=true></x-info-button-card>

                                </x-card-content-box>
                            </section>
                        </div>

                        <x-nav-steps save="true" saveBtn=true modalId="modal-save-1" aria-label-save="di iscrizione">
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
        <x-modal-documents label1-text="Documento d'identità" label1-id="doc-id" document1="mario_rossi_carta_di_identit..."
            label2-text="Modulo condizione lavorativa" label2-id="doc-lav" document2="mario_rossi_modulo.pdf">
        </x-modal-documents>

        <x-modal-isee></x-modal-isee>

        <x-modal-save></x-modal-save>
    </main>
@endsection
