@extends('pub_theme::base.base', ['title' => 'Segnalazione disservizio - Nome del Comune', 'headerActive3' => 'true'])
@section('content')
    <main>
        <div class="container" id="main-container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <x-breadcrumb type="v2" :rows="$_theme->getBreads()">
                    </x-breadcrumb>
                    <x-heading type="heading">
                        <x-slot name="title">Segnalazione disservizio</x-slot>
                    </x-heading>
                </div>
                <div class="col-12">
                    <x-info.rows type="progress" :rows="$_theme->getDisservizioStep2()">
                        <x-slot name="step_title">Riepilogo</x-slot>
                        <x-slot name="step_num">2</x-slot>
                        <x-slot name="step_tot">3</x-slot>
                        <x-slot name="class">mb-lg-80</x-slot>
                        <x-slot name="step_title">Dati di segnalazione</x-slot>
                        <x-slot name="subtitle">I campi contraddistinti dal simbolo asterisco sono obbligatori</x-slot>
                        <x-slot name="classSubtitle">mt-40 mb-3</x-slot>
                    </x-info.rows>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-3 d-lg-block mb-4 d-none ">
                    <x-nav.rows type="scroll" :rows="$_theme->getDisservizioDatiSpecifici()">
                        <x-slot name="id">one</x-slot>
                        <x-slot name="accordion_title">INFORMAZIONI RICHIESTE</x-slot>
                    </x-nav>
                </div>
                <div class="col-12 col-lg-8 offset-lg-1">
                    <div class="steppers-content" aria-live="polite">
                        <div class="it-page-sections-container">
                            <section class="it-page-section" id="report-place">
                                <x-card type="content_box">
                                    <x-slot name="class">p-big p-lg-4</x-slot>
                                    <x-slot name="bg_grey">true</x-slot>
                                    <x-slot name="h2_class">mb-1</x-slot>
                                    <x-slot name="header_m0">true</x-slot>
                                    <x-slot name="card_title">Luogo</x-slot>
                                    <x-slot name="subtitle">Indica il luogo del disservizio</x-slot>
                                    <x-slot name="margin_class">mb-40</x-slot>

                                    <x-input :attrs="['autocomplete']">
                                        <x-slot name="placeholder">Cerca un luogo*</x-slot>
                                        <x-slot name="link">true</x-slot>
                                        <x-slot name="class">mt-3</x-slot>
                                    </x-input>
                                </x-card>
                            </section>

                            <section class="it-page-section" id="report-info">
                                <x-card type="content_box" class="p-big" bg-grey=true h2-class="mb-3" header-m0=true
                                    required-icon=true card-title="Disservizio" margin-class="mb-40">
                                    <x-input.select placeholder="Tipo di disservizio*" class="p-md-3 p-lg-4 pb-lg-0"
                                        select-option-list=serv-1-disservizio.list label-text="Tipo di disservizio*"
                                        label-hidden=true id="inefficiency" selectClass="u-grey-dark"></x-input.select>
                                    <div class="text-area-wrapper p-3 px-lg-4 pt-lg-5 pb-lg-0 bg-white">
                                        <x-input.text id="title" label="Titolo" required=true name="title"
                                            formClass="mb-0"></x-input.text>
                                    </div>
                                    <x-input.text-area placeholder="Dettagli*" id="details" visible=true
                                        class="m-0 p-3 px-lg-4
                pt-lg-5 pb-lg-4 bg-white" num="2"
                                        label="Inserire al massimo 200 caratteri"></x-input.text-area>

                                    <div class="btn-wrapper px-3 pt-2 pb-3 px-lg-4 pb-lg-4 pt-lg-0 bg-white">
                                        <label class="title-xsmall-bold u-grey-dark pb-2 ms-2">Immagini</label>
                                        <div class="upload-wrapper d-flex justify-content-between align-items-center">
                                            <img src="../assets/images/img-disservizio-thumbnail.png" alt=""
                                                class=" img" />
                                            <span class="t-primary fw-bold w-100 ms-2">6yhakandsahm413d8.jpg</span>
                                            <a href="#" class="align-self-center"
                                                aria-label="elimina immagina caricata">
                                                <svg class="icon icon-primary icon-sm mb-1 ">
                                                    <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-close">
                                                    </use>
                                                </svg>
                                            </a>
                                        </div>
                                        <hr>
                                        <x-button label="Carica file" primary=true iconBtn="it-upload" iconWhite=true
                                            sm=true class="w-100 fw-bold" aria-label="Carica file per il disservizio">
                                        </x-button>
                                        <p class="title-xsmall u-grey-dark pt-10 mb-0">Seleziona una o più immagini da
                                            allegare alla
                                            segnalazione</p>
                                    </div>
                                </x-card.content_box>
                            </section>

                            <section class="it-page-section" id="report-author">
                                <x-card type="content_box" h2-class="mb-1" header-m0=true bg-grey=true
                                    card-title="Autore della segnalazione" subtitle="Informazione su di te">

                                    <x-info-button-card big-title="Giulia Bianchi"
                                        label-2="Codice Fiscale <br> <span>GLABNC72H25H501Y</span>" card-class="mt-3"
                                        onlyContact=true no-header=true show-more-anagrafica="true"
                                        collapse-id="collapse-parents" modalId="modal-documents" bnt-label-text="Modifica">
                                    </x-info-button-card>
                                    </x-card.content_box>
                            </section>
                        </div>
                        <x-nav-steps save="true" saveBtn=true aria-label-save="di segnalazione disservizio">
                        </x-nav-steps>
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-grey-card shadow-contacts">
            <div class="container">
                <div class="row d-flex justify-content-center p-contacts">
                    <div class="col-12 col-lg-5">
                        <x-card.rows type="contacts" :rows="collect([])">
                        </x-card.rows>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
