@extends('pub_theme::layouts.app', ['title' => 'Nome del Comune'])
@section('content')
<main>
  <h1 class="visually-hidden" id="main-container">Nome del comune</h1>
  <section id="head-section">
    <h2 class="visually-hidden">Ultime notizie</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1 order-lg-2 px-0 px-lg-2">
          <img src="https://picsum.photos/800/600" title="titolo immagine" alt="descrizione immagine"
            class="img-fluid" />
        </div>
        <div class="col-lg-5 order-lg-1">
          <div class="card mb-5">
            <div class="card-body pb-5">
              <div class="category-top">
                <svg class="icon icon-sm" aria-hidden="true">
                  <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-calendar"></use>
                </svg>
                <span class="title-xsmall-semi-bold fw-semibold">Notizie</span>
                <span class="data fw-normal">18 mag 2022</span>
              </div>
              <a href="#" class="text-decoration-none">
                <h3 class="h4 card-title title-xlarge">Parte l'estate con oltre 300 eventi in centro e nei quartieri</h3>
              </a>
              <p class="mb-4 subtitle-small pt-3 lora"><strong>Inaugurazione lunedì 2 luglio</strong> con il concerto
                gratuito in
                piazza XX Settembre degli Sweet Soul Music Revue. Sul palco 20 musicisti dal tutto il mondo</p>
              <div class="chip chip-simple">
                <a href="#" class="chip-label">Estate in città</a>
              </div>
              <a class="read-more pb-3" href="#">
                <span class="text">Tutte le novità</span>
                <svg class="icon">
                  <use xlink:href="{{--Theme::asset('pub_theme::assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right')--}}"></use>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="calendario">
    <div class="section section-muted pb-90 pb-lg-50 px-lg-5 pt-0">
      <div class="container">
        <div class="row mb-2">
          <div
            class="card-wrapper px-0 card-overlapping card-teaser-wrapper card-teaser-wrapper-equal card-teaser-block-3">
            <div
              class="card card-teaser card-teaser-image card-flex no-after rounded shadow-sm border border-light mb-0">
              <div class="card-image-wrapper with-read-more">
                <div class="card-body p-3 pb-5">
                  <div class="category-top">
                    <span class="title-xsmall-semi-bold fw-semibold">Organi di governo</span>
                  </div>
                  <h3 class="card-title text-paragraph-medium u-grey-light">Mario Rossi</h3>
                  <p class="text-paragraph-card u-grey-light m-0">Il Sindaco della città</p>
                </div>
                <div class="card-image card-image-rounded pb-5">
                  <img src="https://picsum.photos/150/200" alt="Immagine di esempio" />
                </div>
              </div>

              <a class="read-more ps-3 position-absolute bottom-0 mb-3" href="#">
                <span class="text">Vai alla pagina</span>
                <svg class="icon">
                  <use xlink:href="{{--Theme::asset('pub_theme::assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right')--}}"></use>
                </svg>
              </a>
            </div>

            <div class="card card-teaser no-after rounded shadow-sm mb-0 border border-light">
              <div class="card-body pb-5">
                <div class="category-top">
                  <span class="title-xsmall-semi-bold fw-semibold">Organi di governo</span>
                </div>
                <h3 class="card-title text-paragraph-medium u-grey-light">La giunta comunale</h3>
                <p class="text-paragraph-card u-grey-light m-0">La giunta, nominata dal sindaco, esercita collegialmente
                  le funzioni ad essa
                  attribuite dalla legge.</p>
              </div>
              <a class="read-more" href="#">
                <span class="text">Vai alla pagina</span>
                <svg class="icon ms-0">
                  <use xlink:href="{{--Theme::asset('pub_theme::assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right')--}}"></use>
                </svg>
              </a>
            </div>

            <div class="card card-teaser no-after rounded shadow-sm mb-0 border border-light">
              <div class="card-body pb-5">
                <div class="category-top">
                  <span class="title-xsmall-semi-bold fw-semibold">Organi di governo</span>
                </div>
                <h3 class="card-title text-paragraph-medium u-grey-light">Il consiglio comunale</h3>
                <p class="text-paragraph-card u-grey-light m-0">Il Consiglio è un organo collegiale ed elettivo che
                  rimane in carica per 5 anni.
                </p>
              </div>
              <a class="read-more" href="#">
                <span class="text">Vai alla pagina</span>
                <svg class="icon ms-0">
                  <use xlink:href="{{--Theme::asset('pub_theme::assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right')--}}"></use>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="row row-title pt-5 pt-lg-60 pb-3">
          <div class="col-12 d-lg-flex justify-content-between">
            <h2 class="mb-lg-0">Eventi</h2>
          </div>
        </div>
        <div class="row row-calendar">
          <div class="it-carousel-wrapper it-carousel-landscape-abstract-four-cols it-calendar-wrapper splide"
            data-bs-carousel-splide>
            <div class="it-header-block">
              <div class="it-header-block-title">
                <h3 class="mb-0 text-center home-carousel-title">Settembre 2022</h3>
              </div>
            </div>
            <div class="splide__track">
              <ul class="splide__list it-carousel-all">
                <li class="splide__slide">
                  <div class="it-single-slide-wrapper h-100">
                    <div class="card-wrapper h-100">
                      <div class="card card-bg">
                        <div class="card-body">
                          <h4 class="card-title pb-4 mb-10">15<span>lun</span></h4>
                          <p class="card-text px-2 pb-10 mb-10"><a href="#">Saldo
                                TASI</a>
                          </p>
                          <p class="card-text px-2 pb-10 mb-10 d-flex">
                            <img src="https://picsum.photos/200" alt="random image" class="me-3 rounded">
                            <a href="#">Concerto gratuito piazza
                              XXIV maggio</a>
                          </p>
                          <p class="card-text px-2 pb-10 mb-10"><a href="#">Convocazione
                              Consiglio Comunale - Prima seduta</a></p>
                          <p class="card-text px-2 "><a href="#">Seconda rata TARI</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="it-single-slide-wrapper h-100">
                    <div class="card-wrapper h-100">
                      <div class="card card-bg">
                        <div class="card-body">
                          <h4 class="card-title pb-4 mb-10">16<span>mar</span></h4>

                          <p class="card-text px-2 pb-10 mb-10"><a href="#">Presentazione mostra
                              “Mediterraneo”</a></p>
                          <p class="card-text px-2 pb-10 mb-10 d-flex">
                            <img src="https://picsum.photos/200" alt="random image" class="me-3 rounded">
                            <a href="#">Convocazione
                              Consiglio Comunale - Seconda seduta</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="it-single-slide-wrapper h-100">
                    <div class="card-wrapper h-100">
                      <div class="card card-bg">
                        <div class="card-body">
                          <h4 class="card-title pb-4 mb-10">17<span>mar</span></h4>
                          <p class="card-text px-2 pb-10 mb-10"><a href="#">Presentazione piano
                              lavori pubblici 2018</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="it-single-slide-wrapper h-100">
                    <div class="card-wrapper h-100">
                      <div class="card card-bg">
                        <div class="card-body">
                          <h4 class="card-title pb-4 mb-10">18<span>mar</span></h4>
                          <p class="card-text px-2 pb-10 mb-10"><a href="#">Evento ”La notte bianca
                              dei bambini”</a>
                          </p>
                          <p class="card-text px-2 pb-10 mb-10"><a href="#">Concerto della
                              Banda Civica in piazza San Vittore</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="it-single-slide-wrapper h-100">
                    <div class="card-wrapper h-100">
                      <div class="card card-bg">
                        <div class="card-body">
                          <h4 class="card-title pb-4 mb-10">19<span>mar</span></h4>
                          <p class="card-text px-2 pb-10 mb-10"><a href="#">Saldo
                                TASI</a>
                          </p>
                          <p class="card-text px-2 pb-10 mb-10 d-flex">
                            <img src="https://picsum.photos/200" alt="random image" class="me-3 rounded">
                            <a href="#">Concerto gratuito piazza
                              XXIV maggio</a>
                          </p>
                          <p class="card-text px-2 pb-10 mb-10"><a href="#">Convocazione Consiglio Comunale - Prima seduta</a></p>
                          <p class="card-text px-2 "><a href="#">Seconda rata TARI</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="it-single-slide-wrapper h-100">
                    <div class="card-wrapper h-100">
                      <div class="card card-bg">
                        <div class="card-body">
                          <h4 class="card-title pb-4 mb-10">20<span>mar</span></h4>
                          <p class="card-text px-2 pb-10 mb-10"><a href="#">Saldo
                                TASI</a>
                          </p>
                          <p class="card-text px-2 pb-10 mb-10 d-flex">
                            <img src="https://picsum.photos/200" alt="random image" class="me-3 rounded">
                            <a href="#">Concerto gratuito piazza
                              XXIV maggio</a>
                          </p>
                          <p class="card-text px-2 pb-10 mb-10"><a href="#"
                             >Convocazione
                              Consiglio Comunale - Prima seduta</a></p>
                          <p class="card-text px-2 "><a href="#">Seconda rata TARI</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="it-single-slide-wrapper">
                    <div class="card-wrapper">
                      <div class="card card-bg">
                        <div class="card-body">
                          <h4 class="card-title pb-4 mb-10">21<span>mar</span></h4>
                          <p class="card-text px-2 pb-10 mb-10"><a href="#">Saldo
                                TASI</a>
                          </p>
                          <p class="card-text px-2 pb-10 mb-10 d-flex">
                            <img src="https://picsum.photos/200" alt="random image" class="me-3 rounded">
                            <a href="#">Concerto gratuito piazza
                              XXIV maggio</a>
                          </p>
                          <p class="card-text px-2 pb-10 mb-10"><a href="#">Convocazione
                              Consiglio Comunale - Prima seduta</a></p>
                          <p class="card-text px-2"><a href="#">Seconda rata TARI</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="evidence-section">
    <div class="section py-5 pb-lg-80 px-lg-5 position-relative"
      style="background-image: url(../assets/images/evidenza-header.png)">
      <div class="container">
        <div class="row">
          <h2 class="text-white title-xlarge mb-3">Argomenti in evidenza</h2>
        </div>
        <div>
          <div class="card-wrapper card-teaser-wrapper card-teaser-wrapper-equal card-teaser-block-3">
            <div class="card card-teaser no-after rounded shadow-sm border border-light">
              <div class="card-body pb-5">
                <h3 class="card-title title-xlarge-card">Trasporto pubblico</h3>
                <p class="card-text pb-3">Informazioni sui servizi di trasporto pubblico e servizi taxi</p>
                <p class="mb-10 text-paragraph-small-semi">Visita il sito:</p>
                <a href="#" class="card card-teaser card-bg-blue no-after rounded mt-0 p-3">
                  <div class="avatar size-lg me-3">
                    <img src="https://picsum.photos/200/200" alt="Immagine">
                  </div>
                  <div class="card-body">
                    <h4 class="card-title text-white mb-1">Mobilità in Comune</h4>
                    <p class="card-text text-sans-serif text-white">Il sito del turismo del Comune e della Città
                      Metropolitana.
                    </p>
                  </div>
                </a>
              </div>
              <a class="read-more pt-0" href="#">
                <span class="text">Esplora argomento</span>
                <svg class="icon ms-0">
                  <use xlink:href="{{--Theme::asset('pub_theme::assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right')--}}"></use>
                </svg>
              </a>
            </div>
            <div class="card card-teaser no-after rounded shadow-sm border border-light">
              <div class="card-body pb-5">
                <h3 class="card-title">Animale domestico</h3>
                <p class="card-text">Informazioni sui servizi e le norme previste dal comune per gli animali domestici.
                </p>
                <div class="link-list-wrapper mt-4">
                  <ul class="link-list" role="list">
                    <li role="listitem">
                      <a class="list-item active icon-left mb-2" href="#">
                        <span class="list-item-title-icon-wrapper">
                          <span class="text-success">Come adottare un cane al Canile Municipale</span>
                        </span>
                      </a>
                    </li>
                    <li role="listitem">
                      <a class="list-item active icon-left mb-2" href="#">
                        <span class="list-item-title-icon-wrapper">
                          <span class="text-success">Elenco delle aree per cani</span>
                        </span>
                      </a>
                    </li>
                    <li role="listitem">
                      <a class="list-item active icon-left mb-2" href="#">
                        <span class="list-item-title-icon-wrapper">
                          <span class="text-success">Come segnalare una colonia felina e ricevere il
                            tesserino di riconoscimento come referente</span>
                        </span>
                      </a>
                    </li>
                    <li role="listitem">
                      <a class="list-item active icon-left" href="#">
                          <span class="text-success">Come segnalare lo smarrimento del proprio
                            animale</span>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <a class="read-more pt-0" href="#">
                <span class="list-item-title-icon-wrapper">
                  <span class="text">Esplora argomento</span>
                  <svg class="icon">
                    <use xlink:href="{{--Theme::asset('pub_theme::assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right')--}}"></use>
                  </svg>
                </span>
              </a>
            </div>
            <div class="card card-teaser no-after rounded shadow-sm border border-light">
              <div class="card-body pb-5">
                <h3 class="card-title">Sport</h3>
                <p class="card-text">Tutto quello che c’è da sapere sulle strutture sportive comunali a disposizione del
                  pubblico e delle Associazioni, le iniziative a sostegno dello sport e gli eventi che coinvolgono la
                  città. </p>
                <div class="link-list-wrapper mt-4">
                  <ul class="link-list" role="list">
                    <li role="listitem">
                      <a class="list-item active icon-left mb-2" href="#">
                          <span class="text-underline">Tutte le strutture sportive della città</span>
                        </span>
                      </a>
                    </li>
                    <li role="listitem">
                      <a class="list-item active icon-left mb-2" href="#">
                          <span class="text-underline">Da lunedì 3 settembre chiudono le vasche della piscina
                            comunale</span>
                        </span>
                      </a>
                    </li>
                    <li role="listitem">
                      <a class="list-item active icon-left" href="#">
                          <span class="text-underline">Concessione di contributi ad enti, associazioni, società
                            sportive</span>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <a class="read-more pt-0" href="#">
                <span class="text">Esplora argomento</span>
                <svg class="icon">
                  <use xlink:href="{{--Theme::asset('pub_theme::assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right')--}}"></use>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="row pt-30">
          <div class="col-lg-10 col-xl-6 offset-lg-1 offset-xl-2">
            <div class="row d-lg-inline-flex">
              <div class="col-lg-3">
                <h3 class="text-uppercase mb-3 title-xsmall-bold text u-grey-light">Altri argomenti</h3>
              </div>
              <div class="col-lg-9 argomenti">
                <div class="chip chip-simple pb-0 mb-2">
                  <a href="#" class="chip-label">Associazioni</a>
                </div>
                <div class="chip chip-simple pb-0 mb-2">
                  <a href="#" class="chip-label">Concorsi</a>
                </div>
                <div class="chip chip-simple pb-0 mb-2">
                  <a href="#" class="chip-label">Energie rinnovabili</a>
                </div>
                <div class="chip chip-simple pb-0 mb-2">
                  <a href="#" class="chip-label">Gestione rifiuti</a>
                </div>
                <div class="chip chip-simple pb-0 mb-2">
                  <a href="#" class="chip-label">Imposte</a>
                </div>
                <div class="chip chip-simple pb-0 mb-2">
                  <a href="#" class="chip-label">Istruzione</a>
                </div>
                <div class="chip chip-simple pb-0 mb-2">
                  <a href="#" class="chip-label">Pista ciclabile</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 text-center">
            <a href="#" class="btn btn-primary mt-40"
              >Vedi tutti</a>
          </div>
        </div>
        <div class="row pt-5">
          <h3 class="mb-0 u-grey-light">Siti tematici</h3>
        </div>
        <div class="pt-4 pt-lg-30">
          <div class="card-wrapper card-teaser-wrapper card-teaser-wrapper-equal card-teaser-block-3 pb-0">
            <a href="#" class="card card-teaser card-bg-blue rounded mt-0 p-3">
              <div class="avatar size-lg me-3">
                <img src="https://picsum.photos/200/200" alt="Immagine">
              </div>
              <div class="card-body">
                <h4 class="card-title text-white sito-tematico">
                  Mobilità in Comune
                </h4>
                <p class="card-text text-sans-serif text-white">
                  Il sito del turismo del Comune e della Città Metropolitana
                </p>
              </div>
            </a>
            <a href="#" class="card card-teaser card-bg-warning rounded mt-0 p-3">
              <div class="avatar size-lg me-3">
                <img src="https://picsum.photos/200/200" alt="Immagine">
              </div>
              <div class="card-body">
                <h4 class="card-title sito-tematico">
                  Turismo
                </h4>
                <p class="card-text text-sans-serif">
                  Il sito che offre informazioni sulle attività turistiche attive in città
                </p>
              </div>
            </a>
            <a href="#" class="card card-teaser card-bg-dark rounded p-3 mt-0">
              <div class="avatar size-lg me-3">
                <img src="https://picsum.photos/200/200" alt="Immagine">
              </div>
              <div class="card-body">
                <h4 class="card-title sito-tematico">
                  Musei Civici
                </h4>
                <p class="card-text text-sans-serif">
                  Tutte le informazioni sui musei e gli eventi culturali della città
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="useful-links-section">
    <div class="section section-muted p-0 py-5">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-lg-6">

            <x-input.search id="autocomplete-three"
                label="Cerca una parola chiave" placeholder="Cerca una parola chiave"
                icon-class="icon-primary"
                :btnSearch=true
                >
                <x-slot name="wrapper" class="mb-2 mb-lg-4"></x-slot>
            </x-input.search>

            {{-- {{>partials/input-search/input-search
            id="autocomplete-three"
            label-text="Cerca una parola chiave"
            placeholder-text="Cerca una parola chiave"
            wrapper-class="mb-2 mb-lg-4"
            icon-class="icon-primary"
            btnSearch=true
            }} --}}

            <div class="link-list-wrapper">
              <div class="link-list-heading text-uppercase mb-3 ps-0">Link utili</div>
              <ul class="link-list" role="list">
                <li role="listitem">
                  <a class="list-item mb-3 active ps-0" href="#"><span class="text-button-normal">Rilascio Carta Identità Elettronica (CIE)</span></a>
                </li>
                <li role="listitem">
                  <a class="list-item mb-3 active ps-0" href="#"><span class="text-button-normal">Cambio di
                      residenza</span></a>
                </li>
                <li role="listitem">
                  <a class="list-item mb-3 active ps-0" href="#">Tributi
                      online</span></a>
                </li>
                <li role="listitem">
                  <a class="list-item mb-3 active ps-0" href="#"><span class="text-button-normal">Prenotazione
                      appuntamenti</span></a>
                </li>
                <li role="listitem">
                  <a class="list-item mb-3 active ps-0" href="#"><span class="text-button-normal">Rilascio tessera
                      elettorale</span></a>
                </li>
                <li role="listitem">
                  <a class="list-item active ps-0" href="#"><span class="text-button-normal">Voucher
                      connettività</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="bg-primary">
    <div class="container">
      <div class="row d-flex justify-content-center bg-primary">
        <div class="col-12 col-lg-6">
          {{-- {{>cmp-rating/cmp-rating public-template=true}} --}}
          <x-rating></x-rating>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-grey-card shadow-contacts">
    <div class="container">
      <div class="row d-flex justify-content-center p-contacts">
        <div class="col-12 col-lg-6">
          {{-- {{>cmp-contacts/cmp-contacts city-problems=true}} --}}
          <x-contacts city_problems=true></x-contacts>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection