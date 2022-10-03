@extends('pub_theme::layouts.app')
@section('content') 
    <main>
        <div class="container" id="main-container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <x-breadcrumb.rows :rows="$_theme->getLinksBreadcrumbs()">
                    </x-breadcrumb>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <x-heading type="detail">
                        <x-slot name="title">Segnalazione disservizio</x-slot>
                        <x-slot name="sub_title">Un servizio aperto a tutti i cittadini per segnalare disservizi, guasti e criticità
                            rilevati sul territorio comunale.</x-slot>
                        <x-slot name="label_tag_up">Servizio attivo</x-slot>
                        <x-slot name="second_label">Tutte le segnalazioni</x-slot>
                        <x-slot name="label">Segnala disservizio</x-slot>
                        <x-slot name="servizio_attivo">{{ true }}</x-slot>
                        <x-slot name="double_button">{{ true }}</x-slot>
                        <x-slot name="class">text-button</x-slot>
                        <x-slot name="pClass">mb-3</x-slot>
                    </x-heading>
                </div>
                <hr class="d-none d-lg-block mb-0 mt-2">
            </div>
        </div>

        {{-- <div class="container">
            <div class="row row-column-menu-left mt-lg-80 mt-3">

                <div class="col-12 col-lg-3 mb-4 border-col">
                    <x-nav type="scroll" accordion-title="INDICE DELLA PAGINA" id="one"
                        link-list=link-list.segnalazioni-disservizio-1>
                    </x-nav>
                </div>
                <div class="col-12 col-lg-8 offset-lg-1 pb-lg-80">
                    <div class="it-page-sections-container">
                        <section class="it-page-section mb-30" id="who-needs">
                            <h2 class="title-xxlarge mb-3">A chi è rivolto</h2>
                            <p class="text-paragraph lora mb-0">
                                Il servizio è accessibile a persone residenti e non residenti.
                                <br><br>
                                Chi preferisce non utilizzare le nuove tecnologie può contattare l'Urp (Ufficio relazioni
                                con il pubblico)
                                attraverso numero verde, whatsapp e sportello.
                                <br><br>
                                Le segnalazioni per disservizi e guasti possono riguardare solo il territorio comunale.
                            </p>
                        </section>

                        <section class="it-page-section mb-30" id="description">
                            <h2 class="title-xxlarge mb-3">Descrizione</h2>
                            <p class="text-paragraph lora mb-0">
                                Tramite il servizio online è possibile segnalare in modo dettagliato il problema, fissare
                                con il cursore
                                la
                                posizione sulla mappa,
                                oppure inserire l'indirizzo esatto e, se serve, allegare una foto del luogo in cui si è
                                verificato il
                                disservizio.
                            </p>
                        </section>

                        <section class="it-page-section mb-30" id="how-to">
                            <h2 class="title-xxlarge mb-3">Come fare</h2>
                            <p class="text-paragraph lora">
                                Si può inviare la segnalazione di disservizio dal proprio smartphone o computer, seguendo la
                                procedura
                                online.
                                <br><br>
                                Per alcune tipologie di segnalazioni è richiesto l'accesso con credenziali Spid (Sistema
                                pubblico di
                                identità
                                digitale). Nessuna limitazione per richiedere informazioni e inviare segnalazioni generiche.
                            </p>
                        </section>

                        <section class="it-page-section mb-30 has-bg-grey p-3" id="needed">
                            <h2 class="title-xxlarge mb-3">Cosa serve</h2>
                            <p class="text-paragraph lora mb-0">Per accedere al servizio, assicurati di avere:</p>
                            <ul class="list-wrapper lora">
                                <li class="list-item"><span> Informazioni sul luogo del disservizio all’interno del
                                        territorio
                                        comunale</span></li>
                                <li class="list-item"><span>Foto, se disponibili</span></li>
                            </ul>
                        </section>

                        <section class="it-page-section mb-30" id="obtain">
                            <h2 class="title-xxlarge mb-3">Cosa si ottiene</h2>
                            <p class="text-paragraph lora mb-0">
                                Chi effettua la segnalazione, identificandosi con le proprie credenziali Spid, riceverà
                                sulla sua casella
                                di
                                posta elettronica le comunicazioni sullo stato di avanzamento della sua richiesta,
                                dall'assegnazione
                                all'ufficio
                                competente fino alla chiusura dell'intervento.
                            </p>
                        </section>

                        <section class="it-page-section mb-30" id="costs">
                            <h2 class="title-xxlarge mb-3">Costi</h2>
                            <p class="text-paragraph lora">Il servizio è gratuito </p>
                            <x-icon-link link="Allegato se necessario"></x-icon-link>
                        </section>

                        <section class="it-page-section mb-30 has-bg-grey p-3" id="service-access">
                            <h2 class="title-xxlarge mb-3">Fai una segnalazione</h2>
                            <p class="text-paragraph lora">Si può presentare la segnalazione online oppure all'Urp (Ufficio
                                relazioni
                                con il pubblico)</p>
                            <x-button label="Segnala disservizio" primary="true" class="mobile-full"></x-button>
                            <p class="text-paragraph mt-4 lora">Uffici dove presentare la richiesta su appuntamento.</p>
                            <x-button label="Prenota appuntamento"
                                class="mobile-full btn-outline-primary t-primary bg-white"></x-button>
                        </section>

                        <section class="it-page-section mb-30" id="conditions">
                            <h2 class="title-xxlarge mb-3">Condizioni di servizio</h2>
                            <p class="text-paragraph lora">Per conoscere i dettagli di scadenze, requisiti e altre
                                informazioni
                                importanti, leggi i termini e le condizioni di servizio.</p>
                            <x-icon-link link="Termini e condizioni di servizio"></x-icon-link>
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
                                                        data-element="service-area">Ufficio servizio
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
                                        <x-tag label-tag="Servizio pubblico" class="t-primary bg-tag"></x-tag>
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
                    <div class="col-12 pt-5 pb-4 pt-lg-30">
                        <x-carousel carousel-title="Contenuti correlati" class="carousel-4-card"></x-carousel>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-3 p-contacts">
                        <x-card.rows type="contacts" :rows="collect([])">
                        </x-card.rows>
                    </div>
                </div>
            </div>
        </div> --}}
    </main>
@endsection
