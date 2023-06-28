{{-- #>base/base title="Area personale - Nome del Comune" logged=true --}}
@extends('pub_theme::base.base', ['title' => 'Area personale - Nome del Comune', 'logged' => 'true'])
@section('content')
<main>
    <div class="container" id="main-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <x-breadcrumbs link2="Home" link3="Area personale"></x-breadcrumbs>
                <x-std tpl="heading" title="Giulia Bianchi" subTitle="CF: GLABNC72H25H501Y" class="pb-2"></x-std>
            </div>
            <div class="col-12 p-0">
                <x-nav-tab step-list=step-list.tab-area-personale-1></x-nav-tab>
            </div>
        </div>
        <div class="it-page-sections-container">
            <!-- Tab panels -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="data-ex-tab1" role="tabpanel">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-lg-block mb-4 d-none ">
                            <x-navscroll accordion-title="INDICE DI PAGINA" id="one"
                                link-list=link-list.links-area-personale-scrivania></x-navscroll>
                        </div>

                        <div class="col-12 col-lg-8 offset-lg-1">
                            <div class="it-page-section mb-40 mb-lg-60" id="latest-posts">
                                <x-card.content-box card-title="Ultimi messaggi" header-m0=true h2-class="mb-3">

                                    <x-card-latest-messages date="07/03/2022"
                                        card-title="Iscrizione alla Scuola
                dell’infanzia" header-m0=true
                                        description="La richiesta AN4059281 è stata perfezio..." modalId="modal-message"
                                        id="1" description-class="text-truncate"></x-card-latest-messages>

                                    <x-card-latest-messages date="02/03/2022"
                                        card-title="Iscrizione alla Scuola dell’infanzia" header-m0=true
                                        description="La graduatoria per l’iscrizione alla scuola..."
                                        modalId="modal-message" id="2" description-class="text-truncate">
                                    </x-card-latest-messages>

                                    <x-card-latest-messages date="28/02/2022"
                                        card-title="Iscrizione alla Scuola dell'Infanzia" header-m0=true
                                        description="La richiesta AN4059281 è stata ricevut..." modalId="modal-message"
                                        id="3" description-class="text-truncate"></x-card-latest-messages>

                                    <x-button label="Vedi altri messaggi"
                                        class="btn-xs btn-me btn-label
                t-primary px-0">
                                </x-card.content-box>
                            </div>

                            <div class="it-page-section mb-50 mb-lg-90" id="latest-activities">
                                <x-card.content-box card-title="Ultime attività" header-m0=true h2-class="mb-3">

                                    <x-icon-card card-class="pt-20 pb-4 ps-4 pr-30"
                                        title-class="t-primary mb-2 title-small-semi-bold" shadow-card=true
                                        card-title="Iscrizione alla Scuola d’Infanzia" header-m0=true date="15/02/2022"
                                        icon="it-files"></x-icon-card>

                                    <x-icon-card card-class="pt-20 pb-4 ps-4 pr-30"
                                        title-class="t-primary mb-2 title-small-semi-bold" shadow-card=true
                                        card-title="Pagamento contravvenzione" header-m0=true date="23/01/2022"
                                        icon="it-files"></x-icon-card>

                                    <x-icon-card card-class="pt-20 pb-4 ps-4 pr-30"
                                        title-class="t-primary mb-2 title-small-semi-bold" shadow-card=true
                                        card-title="Richiesta assegno maternità" header-m0=true date="01/10/2022"
                                        icon="it-files"></x-icon-card>

                                    <x-button label="Vedi altre attività"
                                        class="btn-xs btn-me btn-label
                t-primary px-0"></x-button>
                                </x-card.content-box>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="data-ex-tab2" role="tabpanel"></div>
                <div class="tab-pane" id="data-ex-tab3" role="tabpanel">
                    <div class="row">
                        <div class="d-none d-sm-none d-lg-block col-lg-3">
                            <x-navscroll id="Three" accordion-title="INDICE DI PAGINA"
                                link-list=link-list.area-personale-page-3></x-navscroll>
                        </div>

                        <div class="col-12 col-lg-8 offset-lg-1 px-0 px-sm-3">
                            <section class="it-page-section mb-40 mb-lg-60" id="practices">
                                <x-filter title="Pratiche" id-input="pratiche" id-dropdown="pratiche"></x-filter>
                                <x-accordion accordion=accordion.area-personale-page-3.pratiche id="accordion-1">
                                </x-accordion>
                                <x-button label="Vedi altre pratiche"
                                    class="accordion-view-more mb-2 pt-3 t-primary
                title-xsmall-semi-bold
                ps-lg-3">
                                </x-button>
                            </section>
                            <section class="it-page-section mb-50 mb-lg-90" id="payments">
                                <x-filter title="Pagamenti" id-input="pagamenti" id-dropdown="pagamenti"></x-filter>
                                <x-accordion accordion=accordion.area-personale-page-3.pagamenti id="accordion-2">
                                </x-accordion>
                                <x-button label="Vedi altri pagamenti"
                                    class="accordion-view-more mb-2 t-primary
                d-block
                title-xsmall-semi-bold
                ps-lg-3">
                                </x-button>
                            </section>

                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="data-ex-tab4" role="tabpanel"></div>
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

    <x-modal-message date="15/03/2022" card-title="Iscrizione alla Scuola dell’infanzia"
        description="La
  graduatoria per l’iscrizione alla Scuola dell’Infanzia, a.a. 2022/2023 è stata pubblicata. Consulta la graduatoria
  online e perfeziona la pratica."
        subtitle="Graduatoria 2022/23" link="Graduatoria Scuola dell'infanzia per l'anno
  scolastico 2022/23">
    </x-modal-message>
</main>
@endsection
