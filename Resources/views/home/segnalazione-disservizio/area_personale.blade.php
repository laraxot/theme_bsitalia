{{-- @extends('pub_theme::base.base', ['title' => 'Area personale - Nome del Comune', 'logged' => 'true']) --}}
@extends('pub_theme::layouts.app', ['title' => 'Area personale - Nome del Comune', 'logged' => 'true'])
@section('content')
    <main>
        <div class="container" id="main-container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">

                    {{-- {{ dddx($_theme->getLinksBreadcrumbs2()) }} --}}
                    <x-breadcrumb.rows :rows="$_theme->getLinksBreadcrumbs2()">
                    </x-breadcrumb.rows>

                    <x-heading type="heading">
                        <x-slot name="title">Giulia Rossi</x-slot>
                        <x-slot name="subTitle">CF: GLARSS72H25H501Y</x-slot>
                    </x-heading>
                </div>
                <div class="col-12 p-0">
                    <x-nav type="tab"></x-nav>
                </div>
            </div>
            <div class="it-page-sections-container">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="data-ex-tab1" role="tabpanel">
                        <div class="row">
                            <div class="col-12 col-lg-3 d-lg-block mb-4 d-none ">
                                <x-nav.rows type="scroll" :rows="$_theme->getSegnalazioneDisservizioAreaPersonaleNavscrollPage1()" id="one" label="INDICE DELLA PAGINA">
                                </x-nav.rows>
                            </div>

                            <div class="col-12 col-lg-8 offset-lg-1">
                                <div class="it-page-section mb-40 mb-lg-60" id="latest-posts">
                                    <x-card type="content_box" :header_m0="true" h2_class="mb-3">
                                        <x-slot name="header"></x-slot>
                                        <x-slot name="title">Ultimi messaggi</x-slot>
                                        <x-card type="latest_messages">
                                            <x-slot name="date">05/04/2022</x-slot>
                                            <x-slot name="card_title">Richiesta servizio mensa scolastica</x-slot>
                                            <x-slot name="header_m0">true</x-slot>
                                            <x-slot name="description">La richiesta AN4059281 è stata approv...</x-slot>
                                            <x-slot name="modalId">modal-message</x-slot>
                                            <x-slot name="id">1</x-slot>
                                            <x-slot name="description_class">text-truncate</x-slot>
                                        </x-card>

                                        <x-card type="latest_messages">
                                            <x-slot name="date">20/03/2022</x-slot>
                                            <x-slot name="card_title">Richiesta servizio mensa scolastica</x-slot>
                                            <x-slot name="header_m0">true</x-slot>
                                            <x-slot name="description">La richiesta AN4059281 è stata ricevu...</x-slot>
                                            <x-slot name="modalId">modal-message</x-slot>
                                            <x-slot name="id">2</x-slot>
                                            <x-slot name="description_class">text-truncate</x-slot>
                                        </x-card>

                                        <x-card type="latest_messages">
                                            <x-slot name="date">15/02/2022</x-slot>
                                            <x-slot name="card_title">Iscrizione alla scuola dell’infanzia</x-slot>
                                            <x-slot name="header_m0">true</x-slot>
                                            <x-slot name="description">La richiesta AFG059281 è stata ricevu...</x-slot>
                                            <x-slot name="modalId">modal-message</x-slot>
                                            <x-slot name="id">3</x-slot>
                                            <x-slot name="description_class">text-truncate</x-slot>
                                        </x-card>

                                        <x-button label="Vedi altri messaggi"
                                            class="btn-xs btn-me btn-label t-primary px-0">
                                        </x-button>
                                    </x-card>
                                </div>

                                <div class="it-page-section mb-50 mb-lg-90" id="latest-activities">
                                    <x-card type="content_box" :header_m0="true" h2_class="mb-3">
                                        <x-slot name="title">Ultime attività</x-slot>
                                        <x-slot name="header"></x-slot>

                                        <x-card type="icon" card-class="pt-20 pb-4 ps-4 pr-30" shadow_card=true :header_m0="true">
                                            <x-slot name="title" class="t-primary mb-2 underline title-small-semi-bold">Segnalazione disservizio</x-slot>
                                            <x-slot name="date">15/04/2022</x-slot>
                                            <x-slot name="icon">it-files</x-slot>
                                        </x-card>

                                        <x-card type="icon" card-class="pt-20 pb-4 ps-4 pr-30" shadow-card=true :header_m0="true">
                                            <x-slot name="title" class="t-primary mb-2 underline title-small-semi-bold">Pagamento contravvenzione</x-slot>
                                            <x-slot name="date">23/01/2022</x-slot>
                                            <x-slot name="icon">it-files</x-slot>
                                        </x-card>

                                        <x-card type="icon" card-class="pt-20 pb-4 ps-4 pr-30"
                                            title-class="t-primary mb-2 underline title-small-semi-bold" shadow-card=true
                                            card-title="Richiesta assegno maternità" :header_m0="true" date="01/10/2021"
                                            icon="it-files">
                                        </x-card>

                                        <x-button label="Vedi altre attività"
                                            class="btn-xs btn-me btn-label
                  t-primary px-0">
                                        </x-button>
                                    </x-card>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="data-ex-tab2" role="tabpanel"></div>
                    <div class="tab-pane" id="data-ex-tab3" role="tabpanel">
                        <div class="row">
                            <div class="d-none d-sm-none d-lg-block col-lg-3">
                                <x-nav.rows type="scroll" :rows="$_theme->getSegnalazioneDisservizioAreaPersonaleNavscrollPage3()" id="Three" label="INDICE DELLA PAGINA">
                                </x-nav.rows>
                            </div>

                            <div class="col-12 col-lg-8 offset-lg-1 px-0 px-sm-3">
                                <section class="it-page-section mb-40 mb-lg-60" id="practices">
                                    <x-filter>
                                        <x-slot name="title">Pratiche</x-slot>
                                        <x-slot name="id_input">pratiche</x-slot>
                                        <x-slot name="id_dropdown">pratiche</x-slot>
                                    </x-filter>

                                    {{-- <x-accordion accordion=segnalazione-disservizio.area-personale.accordion.pratiche>
                                    </x-accordion> --}}

                                    <x-accordion.rows :rows="$_theme->getSegnalazioneDisservizioAreaPersonaleAccordionPratiche()"></x-accordion.rows>

                                    <x-button label="Vedi altre pratiche"
                                        class="accordion-view-more mb-2 pt-3 t-primary
                                                title-xsmall-semi-bold
                                                ps-lg-3">
                                    </x-button>
                                </section>

                                <section class="it-page-section mb-50 mb-lg-90" id="payments">
                                    <x-filter>
                                        <x-slot name="title">Pagamenti</x-slot>
                                        <x-slot name="id_input">pagamenti</x-slot>
                                        <x-slot name="id_dropdown">pagamenti</x-slot>
                                    </x-filter>

                                    {{-- <x-accordion accordion=segnalazione-disservizio.area-personale.accordion.pagamenti>
                                    </x-accordion> --}}
                                    
                                    <x-accordion.rows :rows="$_theme->getSegnalazioneDisservizioAreaPersonaleAccordionPagamenti()"></x-accordion.rows>

                                    {{-- {{>cmp-accordion/cmp-accordion
                accordion=segnalazione-disservizio.area-personale.accordion.pratiche
                }} --}}

                                    <x-button label="Vedi altri pagamenti"
                                        class="accordion-view-more mb-2 t-primary
                                                title-xsmall-semi-bold
                                                ps-lg-3">
                                    </x-button>
                                </section>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="data-ex-tab4" role="tabpanel">

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


        <x-modal.message>
            <x-slot name="id">modal-message</x-slot>
            <x-slot name="date">15/03/2022</x-slot>
            <x-slot name="title">Iscrizione alla scuola dell’infanzia</x-slot>
            <x-slot name="subtitle">Graduatoria 2022/23</x-slot>
            <x-slot name="txt">La graduatoria per l’iscrizione alla Scuola dell’Infanzia,
            a.a. 2022/2023 è stata pubblicata. Consulta la graduatoria online e perfeziona la pratica.</x-slot>
            <x-slot name="link">Graduatoria Scuola dell'infanzia per l'anno scolastico 2022/23</x-slot>
        </x-modal.message>

        {{-- <x-modal type="message" date="15/03/2022" title="Iscrizione alla Scuola dell’infanzia"
            description="La
                graduatoria per l’iscrizione alla Scuola dell’Infanzia, a.a. 2022/2023 è stata pubblicata. Consulta la graduatoria
                online e perfeziona la pratica."
            subtitle="Graduatoria 2022/23"
            link="Graduatoria Scuola dell'infanzia per l'anno
                scolastico 2022/23">
        </x-modal> --}}
    </main>
@endsection
