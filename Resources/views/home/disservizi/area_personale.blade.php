@extends('pub_theme::layouts.app')
@section('content')
<main>
  <div class="container" id="main-container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10">
        {{-- <x-breadcrumb type="cmp_breadcrumbs">
            <x-slot name="link2">Home</x-slot>
            <x-slot name="link3">Area personale</x-slot>
        </x-breadcrumb> --}}
        {{-- {{> cmp-breadcrumbs/cmp-breadcrumbs link2="Home" link3="Area personale"}} --}}
        <x-heading>
            <x-slot name="title">Giulia Bianchi</x-slot>
            <x-slot name="subTitle">CF: GLABNC72H25H501Y</x-slot>
        </x-heading>
        {{-- {{> cmp-heading/cmp-heading title="Giulia Bianchi" subTitle=""}} --}}
      </div>
      <div class="col-12 p-0">
        <x-nav.tab>
          <x-slot name="step-list">servizi-pagamento.area-personale.tab-area-personale-1</x-slot>
        </x-nav.tab>
        {{-- {{> cmp-nav-tab/cmp-nav-tab
        step-list=servizi-pagamento.area-personale.tab-area-personale-1
        }} --}}
      </div>
    </div>
    <div class="it-page-sections-container">
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane fade show active" id="data-ex-tab1" role="tabpanel">
          <div class="row">
            <div class="col-12 col-lg-3 d-lg-block mb-4 d-none ">

              <x-nav.scroll :linkList="['link1' => ['title'=> 'aaaa', 'url' => '#']]">
                <x-slot name="accordion_title">INDICE DI PAGINA</x-slot>
                <x-slot name="id">one</x-slot>
              </x-nav.scroll>

              {{-- {{>cmp-navscroll/cmp-navscroll accordion-title="INDICE DI PAGINA" id="one"
              link-list=link-list.links-area-personale-scrivania}} --}}
            </div>

            <div class="col-12 col-lg-8 offset-lg-1">
              <div class="it-page-section mb-40 mb-lg-60" id="latest-posts">

                <x-card type="content_box">
                </x-card>


                {{#>cmp-card/cmp-card-content-box
                card-title="Ultimi messaggi"
                header-m0=true
                h2-class="mb-3"
                }}

                {{-- {{>cmp-card-latest-messages/cmp-card-latest-messages
                date="05/04/2022"
                header-m0=true
                card-title="Richiesta servizio mensa scolastica"
                description="La richiesta AN4059281 è stata approv..."
                modalId="modal-message"
                id="1"
                description-class="text-truncate" }}

                {{>cmp-card-latest-messages/cmp-card-latest-messages
                date="20/03/2022"
                header-m0=true
                card-title="Richiesta servizio mensa scolastica"
                description="La richiesta AN4059281 è stata ricevu..."
                modalId="modal-message"
                id="2"
                description-class="text-truncate"}}

                {{>cmp-card-latest-messages/cmp-card-latest-messages
                date="15/02/2022"
                header-m0=true
                card-title="Iscrizione alla Scuola dell'Infanzia"
                description="La richiesta AN4059281 è stata ricevut..."
                modalId="modal-message"
                id="3"
                description-class="text-truncate"}}

                {{>partials/button/button label="Vedi altri messaggi" class="btn-xs btn-me btn-label
                t-primary px-0"}}
                {{/cmp-card/cmp-card-content-box}} --}}
              </div>

              {{-- <div class="it-page-section mb-50 mb-lg-90" id="latest-activities">
                {{#>cmp-card/cmp-card-content-box
                card-title="Ultime attività"
                header-m0=true
                h2-class="mb-3" }}

                {{>cmp-icon-card/cmp-icon-card
                card-class="pt-20 pb-4 ps-4 pr-30"
                title-class="t-primary mb-2 title-small-semi-bold"
                shadow-card=true
                card-title="Iscrizione alla Scuola d’Infanzia"
                date="15/02/2022"
                icon="it-files"}}

                {{>cmp-icon-card/cmp-icon-card
                card-class="pt-20 pb-4 ps-4 pr-30"
                title-class="t-primary mb-2 title-small-semi-bold"
                shadow-card=true
                card-title="Pagamento contravvenzione"
                date="23/01/2022"
                icon="it-files"}}

                {{>cmp-icon-card/cmp-icon-card
                card-class="pt-20 pb-4 ps-4 pr-30"
                title-class="t-primary mb-2 title-small-semi-bold"
                shadow-card=true
                card-title="Richiesta assegno maternità"
                date="01/10/2022"
                icon="it-files"}}

                {{>partials/button/button label="Vedi altre attività" class="btn-xs btn-me btn-label
                t-primary px-0"}}
                {{/cmp-card/cmp-card-content-box}}
              </div> --}}
            </div>
          </div>
        </div>
        <div class="tab-pane" id="data-ex-tab2" role="tabpanel"></div>
        <div class="tab-pane" id="data-ex-tab3" role="tabpanel">
          {{-- <div class="row">
            <div class="d-none d-sm-none d-lg-block col-lg-3">
              {{>cmp-navscroll/cmp-navscroll
              accordion-title="INDICE DELLA PAGINA" id="Three"
              link-list=servizi-pagamento.area-personale.area-personale-page-3
              }}
            </div>

            <div class="col-12 col-lg-8 offset-lg-1 px-0 px-sm-3">
              <section class="it-page-section mb-40 mb-lg-60" id="practices">
                {{>cmp-filter/cmp-filter
                title="Pratiche"
                id-input="pratiche"
                id-dropdown="pratiche"
                }}
                {{>cmp-accordion/cmp-accordion
                accordion=servizi-pagamento.area-personale.pratiche
                }}
                {{>partials/button/button label="Vedi altre pratiche" class="accordion-view-more mb-2 pt-3 t-primary
                title-xsmall-semi-bold
                ps-lg-3"}}
              </section>

              <section class="it-page-section mb-50 mb-lg-90" id="payments">
                {{>cmp-filter/cmp-filter
                title="Pagamenti"
                id-title="payments"
                id-input="pagamenti"
                id-dropdown="pagamenti"
                }}
                {{>cmp-accordion/cmp-accordion
                accordion=servizi-pagamento.area-personale.pagamenti
                }}
                {{>partials/button/button label="Vedi altri pagamenti" class="accordion-view-more mb-2 t-primary
                title-xsmall-semi-bold
                ps-lg-3"}}
              </section>
            </div>
          </div> --}}
        </div>

        <div class="tab-pane" id="data-ex-tab4" role="tabpanel">

        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="bg-grey-card shadow-contacts">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3 p-contacts">
          <x-contacts></x-contacts>
          {{-- {{>cmp-contacts/cmp-contacts}} --}}
        </div>
      </div>
    </div>
  </div>

  {{-- {{>cmp-modal/modal-message date="15/03/2022" card-title="Iscrizione alla Scuola dell’infanzia" description="La
  graduatoria per l’iscrizione alla Scuola dell’Infanzia, a.a. 2022/2023 è stata pubblicata. Consulta la graduatoria
  online e perfeziona la pratica." subtitle="Graduatoria 2022/23" link="Graduatoria Scuola dell'infanzia per l'anno
  scolastico 2022/23" }} --}}
</main>
@endsection