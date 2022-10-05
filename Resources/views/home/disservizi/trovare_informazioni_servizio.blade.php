@extends('pub_theme::layouts.app', ['title' => 'Segnalazione disservizio - Nome del Comune', 'headerActive3' => 'true'])
@section('content')
    <main>
        <div class="container" id="main-container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <x-breadcrumb.rows :rows="$_theme->getLinksBreadcrumbs()">
                    </x-breadcrumb.rows>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <x-heading type="detail">
                        <x-slot name="title">Segnalazione disservizio</x-slot>
                        <x-slot name="subTitle">Un servizio aperto a tutti i cittadini per segnalare disservizi, guasti e criticità rilevati sul territorio comunale.</x-slot>
                        <x-slot name="pClass">mb-3</x-slot>
                        <x-slot name="double_button">true</x-slot>
                        <x-slot name="label">Segnala disservizio</x-slot>
                        <x-slot name="second_label">Tutte le segnalazioni</x-slot>
                        <x-slot name="class">text-button</x-slot>
                        <x-slot name="label_tag_up">Servizio attivo</x-slot>
                        <x-slot name="servizio_attivo">true</x-slot>
                    </x-heading>
                </div>
                <hr class="d-none d-lg-block mb-0 mt-2">
            </div>
        </div>

        <div class="container">
            <div class="row row-column-menu-left mt-lg-80 mt-3">

                <div class="col-12 col-lg-3 mb-4 border-col">
                    {{-- <x-nav type="scroll" accordion-title="INDICE DELLA PAGINA" id="one"
                        link-list=link-list.segnalazioni-disservizio-1>
                    </x-nav> --}}

                    <x-nav.rows type="scroll" :rows="$_theme->segnalazioniDisservizio1()" id="one">
                        <x-slot name="label">INDICE DELLA PAGINA</x-slot>
                        <x-slot name="id">one</x-slot>
                    </x-nav.rows>
                </div>

                <div class="col-12 col-lg-8 offset-lg-1">
                    <div class="it-page-sections-container">
                        <section class="it-page-section mb-30" id="who-needs">
                            <h2 class="title-xxlarge mb-3">A chi è rivolto</h2>
                            <p class="text-paragraph lora mb-0">
                                Possono segnalare un disservizio tutte le persone residenti e non residenti nel comune.
                            </p>
                        </section>

                        <section class="it-page-section mb-30" id="description">
                            <h2 class="title-xxlarge mb-3">Descrizione</h2>
                            <p class="text-paragraph lora mb-0">
                                Il servizio permette di segnalare in modo dettagliato un problema all’amministrazione
                                comunale. È
                                possibile
                                indicare il luogo del disservizio su mappa o tramite indirizzo e allegare foto. Le
                                segnalazioni sono
                                gestite
                                dall’Ufficio Relazioni con il Pubblico (URP).
                            </p>
                        </section>

                        <section class="it-page-section mb-30" id="how-to">
                            <h2 class="title-xxlarge mb-3">Come fare</h2>
                            <p class="text-paragraph lora mb-0">
                                Si può inviare una segnalazione online da smartphone o computer, oppure a sportello presso
                                l’URP.
                                <br><br>
                                Alcune tipologie di segnalazioni online richiedono l'accesso con identità digitale SPID o
                                CIE. Non ci sono
                                limitazioni per le segnalazioni generiche.
                                <br><br>
                                Le segnalazioni per disservizi e guasti possono riguardare solo il territorio comunale.
                            </p>
                        </section>

                        <section class="it-page-section mb-30 has-bg-grey p-3" id="needed">
                            <h2 class="title-xxlarge mb-3">Cosa serve</h2>
                            <p class="text-paragraph lora mb-0">Per accedere al servizio, assicurati di avere:</p>
                            <ul class="list-wrapper link-list lora">
                                <li class="list-item"><span>informazioni sul tipo di disservizio e sul luogo all'interno del
                                        territorio
                                        comunale;</span></li>
                                <li class="list-item"><span>foto, se disponibili.</span></li>
                            </ul>
                        </section>

                        <section class="it-page-section mb-30" id="obtain">
                            <h2 class="title-xxlarge mb-3">Cosa si ottiene</h2>
                            <p class="text-paragraph lora mb-0">
                                Chi segnala un disservizio online identificandosi con identità digitale riceverà, tramite
                                posta
                                elettronica, gli
                                aggiornamenti sullo stato di avanzamento della segnalazione.
                            </p>
                        </section>

                        <section class="it-page-section mb-30" id="costs">
                            <h2 class="title-xxlarge mb-3">Costi</h2>
                            <p class="text-paragraph lora">Il servizio è gratuito </p>
                            <x-icon type="link">
                                <x-slot name="link">Allegato se necessario</x-slot>
                            </x-icon>
                        </section>

                        <section class="it-page-section mb-30 has-bg-grey p-3" id="service-access">
                            <h2 class="title-xxlarge mb-3">Fai una segnalazione</h2>
                            <p class="text-paragraph lora">Invia una segnalazione online dal tuo smartphone o computer</p>
                            <x-button label="Segnala disservizio" primary="true" class="mobile-full"></x-button>
                            <p class="text-paragraph mt-4 lora">Oppure, prenota un appuntamento all’Ufficio Relazioni con il
                                Pubblico
                                (URP)</p>
                            <x-button label="Prenota appuntamento"
                                class="mobile-full btn-outline-primary t-primary bg-white"></x-button>
                        </section>

                        <section class="it-page-section mb-30" id="conditions">
                            <h2 class="title-xxlarge mb-3">Condizioni di servizio</h2>
                            <p class="text-paragraph lora">Per conoscere i dettagli di scadenze, requisiti e altre
                                informazioni
                                importanti, leggi i termini e le condizioni di servizio.</p>
                            <x-icon type="link">
                                <x-slot name="link">Termini e condizioni di servizio</x-slot>
                                <x-slot name="dimensione_file">(PDF 1MB)</x-slot>
                            </x-icon>
                        </section>

                        <section class="it-page-section" id="contacts">
                            <h2 class="mb-3">Contatti</h2>
                            <div class="row">
                                <div class="col-12 col-md-8 col-lg-6 mb-30">
                                    <div class="card-wrapper rounded h-auto pb-0">
                                        <div class="card card-teaser card-teaser-info rounded shadow-sm p-3">
                                            <div class="card-body pe-3">
                                                <span class="title-small">
                                                    <a class="text-decoration-none" href="#"
                                                        data-element="service-area">Ufficio Servizio
                                                        pubblico</a>
                                                </span>
                                                <p class="subtitle-small mb-0">Via Dei Transiti 21, 50302
                                                    <br>
                                                    05 0505
                                                    <br>
                                                    <a class="" href='mailto:ufficioserviziopubblico@email.it'
                                                        aria-label='Invia una email a ufficioserviziopubblico@email.it'
                                                        title='Invia una email a ufficioserviziopubblico@email.it'>ufficioserviziopubblico@email.it</a>
                                                </p>
                                            </div>
                                            <div class="avatar size-xl">
                                                <img src="https://picsum.photos/200/200" alt="Immagine" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mb-30">
                                    <span class="text-paragraph-small">Argomenti:</span>
                                    <div class="d-flex flex-wrap gap-2 mt-10 mb-30">
                                        <x-icon type="tag" label-tag="Gestione rifiuti" class="t-primary bg-tag">
                                        </x-icon>
                                        <x-icon type="tag" label-tag="Igiene pubblica" class="t-primary bg-tag">
                                        </x-icon>
                                        <x-icon type="tag" label-tag="Spazi verdi" class="t-primary bg-tag"></x-icon>
                                        <x-icon type="tag" label-tag="Inquinamento" class="t-primary bg-tag">
                                        </x-icon>
                                    </div>
                                    <p class="text-paragraph-small mb-0">Pagina aggiornata il 14/04/2022</p>
                                </div>
                            </div>
                        </section>
                    </div>
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
                    <div class="col-12 pt-5">
                        <x-carousel carousel-title="Contenuti correlati" class="carousel-4-card"></x-carousel>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-3 p-contacts">
                        <x-card.rows type="contacts" :rows="collect([])">
                        </x-card.rows>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
