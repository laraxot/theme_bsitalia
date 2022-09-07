<!doctype html>
<html lang="it">

  
  @include('pub_theme::layouts.partials.htmlheader')

  <body>
    @include('pub_theme::layouts.partials.headernav')
     <main>
      <div class="container" id="main-container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="cmp-breadcrumbs" role="navigation">
              <nav class="breadcrumb-container">
                <ol class="breadcrumb p-0" data-element="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a><span class="separator">/</span></li>
                  <li class="breadcrumb-item"><a href="#">Servizi</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><span class="separator">/</span>Segnalazione disservizio</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="cmp-heading pb-3 pb-lg-4">
              <div class="row">
                <div class="col-lg-8">
                    <h1 class="title-xxxlarge" data-element="service-title">Segnalazione disservizio</h1>
            
                    <div class="d-flex flex-wrap cmp-heading__tag">
                      <div class="cmp-tag">
                        <span class="cmp-tag__tag title-xsmall" data-element="service-status">Servizio attivo</span>
                      </div>
                    </div>
            
                    <p class="subtitle-small mb-3">Un servizio aperto a tutti i cittadini per segnalare disservizi, guasti e criticità
                      rilevati sul territorio comunale.</p>
            
            
            
                    <div class="d-lg-flex gap-30 mb-2">
                        <button type="button" class="btn fw-bold btn-primary mr-lg-30">
                        
                        
                        
                         <span class="">Segnala disservizio</span>
                        </button>
                        <button type="button" class="btn fw-bold btn-outline-primary t-primary">
                        
                        
                        
                         <span class="">Tutte le segnalazioni</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 mt-5 mt-lg-0">
                  <div class="dropdown">
                    <button aria-label="condividi sui social" class="btn btn-dropdown dropdown-toggle text-decoration-underline d-inline-flex align-items-center fs-0" type="button" id="shareActions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon" aria-hidden="true">
                        <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-share"></use>
                      </svg>
                      <small>Condividi</small>
                    </button>
                    <div class="dropdown-menu shadow-lg" aria-labelledby="shareActions">
                      <div class="link-list-wrapper">
                        <ul class="link-list" role="menu">
                          <li role="none">
                            <a class="list-item" href="#" role="menuitem">
                              <svg class="icon" aria-hidden="true">
                                <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-facebook"></use>
                              </svg>
                              <span>Facebook</span>
                            </a>
                          </li>
                          <li role="none">
                            <a class="list-item" href="#" role="menuitem">
                              <svg class="icon" aria-hidden="true">
                                <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-twitter"></use>
                              </svg>
                              <span>Twitter</span>
                            </a>
                          </li>
                          <li role="none">
                            <a class="list-item" href="#" role="menuitem">
                              <svg class="icon" aria-hidden="true">
                                <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-linkedin"></use>
                              </svg>
                              <span>Linkedin</span>
                            </a>
                          </li>
                          <li role="none">
                            <a class="list-item" href="#" role="menuitem">
                              <svg class="icon" aria-hidden="true">
                                <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-whatsapp"></use>
                              </svg>
                              <span>Whatsapp</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button aria-label="vedi azioni da compiere sulla pagina" class="btn btn-dropdown dropdown-toggle text-decoration-underline d-inline-flex align-items-center fs-0" type="button" id="viewActions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon" aria-hidden="true">
                        <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-more-items"></use>
                      </svg>
                      <small>Vedi azioni</small>
                    </button>
                    <div class="dropdown-menu shadow-lg" aria-labelledby="viewActions">
                      <div class="link-list-wrapper">
                        <ul class="link-list" role="menu">
                          <li role="none">
                            <a class="list-item" href="#" role="menuitem">
                              <svg class="icon" aria-hidden="true">
                                <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-download"></use>
                              </svg>
                              <span>Scarica</span>
                            </a>
                          </li>
                          <li role="none">
                            <a class="list-item" href="#" role="menuitem">
                              <svg class="icon" aria-hidden="true">
                                <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-print"></use>
                              </svg>
                              <span>Stampa</span>
                            </a>
                          </li>
                          <li role="none">
                            <a class="list-item" href="#" role="menuitem">
                              <svg class="icon" aria-hidden="true">
                                <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-hearing"></use>
                              </svg>
                              <span>Ascolta</span>
                            </a>
                          </li>
                          <li role="none">
                            <a class="list-item" href="#" role="menuitem">
                              <svg class="icon" aria-hidden="true">
                                <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-mail"></use>
                              </svg>
                              <span>Invia</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>      </div>
          <hr class="d-none d-lg-block mb-0 mt-2">
        </div>
      </div>
    
      <div class="container">
        <div class="row mt-lg-80 mt-3">
    
          <div class="col-12 col-lg-3 mb-4 border-col">
            <aside class="cmp-navscroll sticky-top" aria-labelledby="accordion-title-one">
              <div class="inline-menu">
                <div class="link-list-wrapper">
                  <ul>
                    <li>
                      <a class="list-item large medium right-icon p-0 text-decoration-none" href="#collapse-one" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapse-one" data-focus-mouse="true">
                        <span class="list-item-title-icon-wrapper pb-10 px-3">
                          <span id="accordion-title-one" class="title-xsmall-semi-bold">INDICE DELLA PAGINA</span>
                          <svg class="icon icon-xs right">
                            <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-expand"></use>
                          </svg>
                        </span>
                        <!-- Progress Bar -->
                        <div class="progress bg-light">
                          <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </a>
                      <ul class="link-sublist collapse show" id="collapse-one" data-element="page-index">
                        <li>
                          <a class="list-item" href="#who-needs">
                            <span class="title-medium">A chi è rivolto</span>
                          </a>
                        </li>
                        <li>
                          <a class="list-item" href="#description">
                            <span class="title-medium">Descrizione</span>
                          </a>
                        </li>
                        <li>
                          <a class="list-item" href="#how-to">
                            <span class="title-medium">Come fare</span>
                          </a>
                        </li>
                        <li>
                          <a class="list-item" href="#needed">
                            <span class="title-medium">Cosa serve</span>
                          </a>
                        </li>
                        <li>
                          <a class="list-item" href="#obtain">
                            <span class="title-medium">Cosa si ottiene</span>
                          </a>
                        </li>
                        <li>
                          <a class="list-item" href="#costs">
                            <span class="title-medium">Costi</span>
                          </a>
                        </li>
                        <li>
                          <a class="list-item" href="#service-access">
                            <span class="title-medium">Accedi al servizio</span>
                          </a>
                        </li>
                        <li>
                          <a class="list-item" href="#conditions">
                            <span class="title-medium">Condizioni di servizio</span>
                          </a>
                        </li>
                        <li>
                          <a class="list-item" href="#contacts">
                            <span class="title-medium">Contatti</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </aside>      </div>
    
          <div class="col-12 col-lg-8 offset-lg-1">
    
            <section class="mb-30">
              <h2 class="title-xxlarge mb-3" id="who-needs">A chi è rivolto</h2>
              <p class="text-paragraph lora mb-0">
                Possono segnalare un disservizio tutte le persone residenti e non residenti nel comune.
              </p>
            </section>
    
            <section class="mb-30">
              <h2 class="title-xxlarge mb-3" id="description">Descrizione</h2>
              <p class="text-paragraph lora mb-0">
                Il servizio permette di segnalare in modo dettagliato un problema all’amministrazione comunale. È possibile
                indicare il luogo del disservizio su mappa o tramite indirizzo e allegare foto. Le segnalazioni sono gestite
                dall’Ufficio Relazioni con il Pubblico (URP).
              </p>
            </section>
            
            <section class="mb-30">
              <h2 class="title-xxlarge mb-3" id="how-to">Come fare</h2>
              <p class="text-paragraph lora mb-0">
                Si può inviare una segnalazione online da smartphone o computer, oppure a sportello presso l’URP.
                <br><br>
                Alcune tipologie di segnalazioni online richiedono l'accesso con identità digitale SPID o CIE. Non ci sono
                limitazioni per le segnalazioni generiche.
                <br><br>
                Le segnalazioni per disservizi e guasti possono riguardare solo il territorio comunale.
              </p>
            </section>
    
            <section class="mb-30 has-bg-grey p-3">
              <h2 class="title-xxlarge mb-3" id="needed">Cosa serve</h2>
              <p class="text-paragraph lora mb-0">Per accedere al servizio, assicurati di avere:</p>
                <ul class="list-wrapper link-list lora">
                  <li class="list-item"><span>informazioni sul tipo di disservizio e sul luogo all'interno del territorio comunale;</span></li>
                  <li class="list-item"><span>foto, se disponibili.</span></li>
                </ul>
            </section>
    
            <section class="mb-30">
               <h2 class="title-xxlarge mb-3" id="obtain">Cosa si ottiene</h2>
               <p class="text-paragraph lora mb-0">
                Chi segnala un disservizio online identificandosi con identità digitale riceverà, tramite posta elettronica, gli
                aggiornamenti sullo stato di avanzamento della segnalazione.
                </p>
            </section>
    
            <section class="mb-30">
              <h2 class="title-xxlarge mb-3" id="costs">Costi</h2>
              <p class="text-paragraph lora">Il servizio è gratuito </p>
              <div class="cmp-icon-link">
                <a class="list-item icon-left d-inline-block" href="#" aria-label="Scarica Allegato se necessario " title="Scarica Allegato se necessario ">
                  <span class="list-item-title-icon-wrapper">
                    <svg class="icon icon-primary icon-sm me-1" aria-hidden="true">
                      <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-clip"></use>
                    </svg>
                    <span class="list-item">Allegato se necessario </span>
                  </span>
                </a>
              </div>
            </section>
    
            <section class="mb-30 has-bg-grey p-3">
              <h2 class="title-xxlarge mb-3" id="service-access">Fai una segnalazione</h2>
              <p class="text-paragraph lora">Invia una segnalazione online dal tuo smartphone o computer</p>
              <button type="button" class="btn btn-primary mobile-full">
              
              
              
               <span class="">Segnala disservizio</span>
              </button>
              <p class="text-paragraph mt-4 lora">Oppure, prenota un appuntamento all’Ufficio Relazioni con il Pubblico (URP)</p>
              <button type="button" class="btn mobile-full btn-outline-primary t-primary bg-white">
              
              
              
               <span class="">Prenota appuntamento</span>
              </button>
            </section>
    
            <section class="mb-30">
              <h2 class="title-xxlarge mb-3" id="conditions">Condizioni di servizio</h2>
              <p class="text-paragraph lora">Per conoscere i dettagli di scadenze, requisiti e altre informazioni importanti, leggi i termini e le condizioni di servizio.</p>
              <div class="cmp-icon-link">
                <a class="list-item icon-left d-inline-block" href="#" aria-label="Scarica Termini e condizioni di servizio (PDF 1MB)" title="Scarica Termini e condizioni di servizio (PDF 1MB)">
                  <span class="list-item-title-icon-wrapper">
                    <svg class="icon icon-primary icon-sm me-1" aria-hidden="true">
                      <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-clip"></use>
                    </svg>
                    <span class="list-item">Termini e condizioni di servizio (PDF 1MB)</span>
                  </span>
                </a>
              </div>
            </section>
    
            <section class="it-page-section">
              <h2 class="mb-3" id="contacts">Contatti</h2>
              <div class="row">
                <div class="col-12 col-md-8 col-lg-6 mb-30">
                  <div class="card-wrapper rounded h-auto pb-0">
                  <div class="card card-teaser card-teaser-info rounded shadow-sm p-3">
                    <div class="card-body pe-3">
                      <span class="title-small">
                        <a class="text-decoration-none" href="#" data-element="service-area">Ufficio Servizio pubblico</a>
                      </span>
                        <p class="subtitle-small mb-0">Via Dei Transiti 21, 50302
                          <br>
                           05 0505
                          <br>
                          <a class="" href="mailto:ufficioserviziopubblico@email.it" aria-label="Invia una email a ufficioserviziopubblico@email.it" title="Invia una email a ufficioserviziopubblico@email.it">ufficioserviziopubblico@email.it</a>
                        </p>
                    </div>
                    <div class="avatar size-xl">
                      <img src="https://picsum.photos/200/200" alt="Immagine">
                    </div>
                  </div>
                </div>
                </div>
    
                <div class="col-12 mb-30">
                  <span class="text-paragraph-small">Argomenti:</span>
                  <div class="d-flex flex-wrap gap-2 mt-10 mb-30">
                    <div class="cmp-tag">
                      <a class="chip chip-simple t-primary bg-tag text-decoration-none" href="#" data-element="service-topic">
                      <span class="chip-label">Gestione rifiuti</span>
                      </a>
                    </div>
                    <div class="cmp-tag">
                      <a class="chip chip-simple t-primary bg-tag text-decoration-none" href="#" data-element="service-topic">
                      <span class="chip-label">Igiene pubblica</span>
                      </a>
                    </div>
                    <div class="cmp-tag">
                      <a class="chip chip-simple t-primary bg-tag text-decoration-none" href="#" data-element="service-topic">
                      <span class="chip-label">Spazi verdi</span>
                      </a>
                    </div>
                    <div class="cmp-tag">
                      <a class="chip chip-simple t-primary bg-tag text-decoration-none" href="#" data-element="service-topic">
                      <span class="chip-label">Inquinamento</span>
                      </a>
                    </div>
                  </div>
                  <p class="text-paragraph-small mb-0">Pagina aggiornata il 14/04/2022</p>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    
      <div class="bg-primary">
        <div class="container">
          <div class="row d-flex justify-content-center bg-primary">
            <div class="col-12 col-lg-6 p-lg-0 px-4">
              <div class="cmp-rating pt-lg-80 pb-lg-80" id="">
                <div class="card shadow card-wrapper" data-element="feedback">
                  <div class="cmp-rating__card-first">
                    <div class="card-header border-0">
                      <h2 class="title-medium-2-semi-bold mb-0">Quanto sono utili le informazioni in questa pagina?</h2>
                    </div>
                    <div class="card-body">
                      <fieldset class="rating">
                        <legend class="visually-hidden">Valuta da 1 a 5 stelle la pagina</legend>
                        <input type="radio" id="star5a" name="ratingA" value="5">
                        <label class="full rating-star" for="star5a">
              
                            <svg class="icon icon-sm" role="img" aria-labelledby="first-star">
                              <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-star-full"></use>
                            </svg>
                            <span class="visually-hidden" id="first-star">Valuta 5 stelle su 5</span>
              
                        </label>
                        <input type="radio" id="star4a" name="ratingA" value="4">
                        <label class="full rating-star" for="star4a">
              
                            <svg class="icon icon-sm" role="img" aria-labelledby="second-star">
                              <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-star-full"></use>
                            </svg>
                            <span class="visually-hidden" id="second-star">Valuta 4 stelle su 5</span>
              
                        </label>
                        <input type="radio" id="star3a" name="ratingA" value="3">
                        <label class="full rating-star" for="star3a">
              
                            <svg class="icon icon-sm" role="img" aria-labelledby="third-star">
                              <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-star-full"></use>
                            </svg>
                            <span class="visually-hidden" id="third-star">Valuta 3 stelle su 5</span>
              
              
                        </label>
                        <input type="radio" id="star2a" name="ratingA" value="2">
                        <label class="full rating-star" for="star2a">
              
                            <svg class="icon icon-sm" role="img" aria-labelledby="fourth-star">
                              <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-star-full"></use>
                            </svg>
                            <span class="visually-hidden" id="fourth-star">Valuta 2 stelle su 5</span>
              
                        </label>
                        <input type="radio" id="star1a" name="ratingA" value="1">
                        <label class="full rating-star" for="star1a">
              
                            <svg class="icon icon-sm" role="img" aria-labelledby="fifth-star">
                              <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-star-full"></use>
                            </svg>
                            <span class="visually-hidden" id="fifth-star">Valuta 1 stelle su 5</span>
              
                        </label>
                      </fieldset>
                    </div>
                  </div>
                  <div class="cmp-rating__card-second d-none" data-step="3">
                    <div class="card-header border-0 mb-0">
                      <h2 class="title-medium-2-bold mb-0" id="rating-feedback">Grazie, il tuo parere ci aiuterà a migliorare il servizio!</h2>
                    </div>
                  </div>
              
                  <div class="form-rating d-none">
                    <div class="d-none" data-step="1">
              <div class="cmp-steps-rating">
                <fieldset>
                  <div class="iscrizioni-header w-100">
                    <h3 class="step-title d-flex align-items-center justify-content-between drop-shadow">
                      <legend class="d-block d-lg-inline">
                        Cosa ha funzionato meglio?
                      </legend>
                      <span class="step">1/2</span>
                    </h3>
                  </div>
                  <div class="cmp-steps-rating__body">
                            <div class="cmp-radio-list">
                              <div class="card-teaser shadow-rating">
                                <div class="card-body">
                                  <div class="form-check m-0">
                                    <div class="radio-body border-bottom border-light cmp-radio-list__item">
                                    <input name="rating" type="radio" id="radio-1">
                                    <label for="radio-1">Alcune indicazioni non erano chiare</label>
                                    </div>
                                    <div class="radio-body border-bottom border-light cmp-radio-list__item">
                                    <input name="rating" type="radio" id="radio-2">
                                    <label for="radio-2">Alcune indicazioni non erano corrette</label>
                                    </div>
                                    <div class="radio-body border-bottom border-light cmp-radio-list__item">
                                    <input name="rating" type="radio" id="radio-3">
                                    <label for="radio-3">Non capivo se quello che facevo era corretto</label>
                                    </div>
                                    <div class="radio-body border-bottom border-light cmp-radio-list__item">
                                    <input name="rating" type="radio" id="radio-4">
                                    <label for="radio-4">Ho avuto problemi tecnici</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                  </div>
                </fieldset>
              </div>
              
                    </div>
              
                    <div class="d-none" data-step="2">
              <div class="cmp-steps-rating">
                <fieldset>
                  <div class="iscrizioni-header w-100">
                    <h3 class="step-title d-flex align-items-center justify-content-between drop-shadow mb-5">
                      <legend class="d-block d-lg-inline">
                        Vuoi aggiungere altri dettagli?
                      </legend>
                      <span class="step">2/2</span>
                    </h3>
                  </div>
                  <div class="cmp-steps-rating__body">
                            <div class="form-group">
                              <label for="formGroupExampleInputWithHelp">Dettaglio</label>
                              <input type="text" class="form-control" id="formGroupExampleInputWithHelp" aria-describedby="formGroupExampleInputWithHelpDescription" maxlength="200">
                              <small id="formGroupExampleInputWithHelpDescription" class="form-text">Inserire massimo 200
                                caratteri</small>
                            </div>
                  </div>
                </fieldset>
              </div>
              
                    </div>
              
                    <div class="d-flex flex-nowrap pt-4 w-100 justify-content-center button-shadow">
                      <button class="btn btn-outline-primary fw-bold me-4 btn-back" type="button">Indietro</button>
                      <button class="btn btn-primary fw-bold btn-next" type="submit" form="rating">Avanti</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="bg-grey-card shadow-contacts">
        <div class="container">
          <div class="row">
            <div class="col-12 pt-5">
              <div class="it-carousel-wrapper carousel-4-card splide cmp-carousel" data-bs-carousel-splide>
                <div class="it-header-block">
                  <div class="it-header-block-title">
                    <h2 class="text-center border-0 cmp-carousel__title pb-0">Contenuti correlati</h2>
                  </div>
                </div>
                <div class="splide__track">
                  <ul class="splide__list it-carousel-all">
                    <li class="splide__slide">
                      <div class="card-wrapper card-space h-100 pb-4">
                        <div class="card card-bg single-card rounded shadow-sm">
                          <div class="cmp-carousel__header">
                            <svg class="icon icon-md">
                              <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-pa"></use>
                            </svg>
                            <span class="ms-3 cmp-carousel__header-title">Amministrazione</span>
                          </div>
                          <div class="card-body">
                            <div class="link-list-wrapper">
                              <ul class="card-body__list">
                                <li><a class="list-item px-0" href="#"><span>Area Servizi
                                      Civici</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="card-wrapper card-space h-100 pb-4">
                        <div class="card card-bg single-card rounded shadow-sm">
                          <div class="cmp-carousel__header">
                            <svg class="icon icon-md" aria-hidden="true">
                              <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-settings"></use>
                            </svg>
                            <span class="ms-3 cmp-carousel__header-title">Servizi</span>
                          </div>
                          <div class="card-body">
                            <div class="link-list-wrapper">
                              <ul class="card-body__list">
                                <li><a class="list-item px-0" href="#"><span>Pagamento retta
                                      scolastica</span></a></li>
                                <li><a class="list-item px-0" href="#"><span>Servizio di
                                      trasporto scolastico</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="card-wrapper card-space h-100 pb-4">
                        <div class="card card-bg single-card rounded shadow-sm">
                          <div class="cmp-carousel__header">
                            <svg class="icon icon-md" aria-hidden="true">
                              <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-file"></use>
                            </svg>
                            <span class="ms-3 cmp-carousel__header-title">Documenti</span>
                          </div>
                          <div class="card-body">
                            <div class="link-list-wrapper">
                              <ul class="card-body__list">
                                <li><a class="list-item px-0" href="#"><span>Attestazione ISEE</span></a></li>
                                <li><a class="list-item px-0" href="#"><span>Carta dei servizi
                                      educativi all'infanzia</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="card-wrapper card-space h-100 pb-4">
                        <div class="card card-bg single-card rounded shadow-sm">
                          <div class="cmp-carousel__header">
                            <svg class="icon icon-md" aria-hidden="true">
                              <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-calendar"></use>
                            </svg>
                            <span class="ms-3 cmp-carousel__header-title">Notizie</span>
                          </div>
                          <div class="card-body">
                            <div class="link-list-wrapper">
                              <ul class="card-body__list">
                                <li><a class="list-item px-0" href="#"><span>Justo eget magna fermentum</span></a></li>
                                <li><a class="list-item px-0" href="#"><span>Dolor magna eget est lorem</span></a></li>
                                <li><a class="list-item px-0" href="#"><span>Justo eget magna fermentum</span></a></li>
                                <li><a class="list-item px-0" href="#"><span>Dolor magna eget est lorem</span></a></li>
                                <li>
                                  <a class="show-more px-0" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <span class="show-more d-flex align-items-center">Vedi altri 2
                                      <svg class="icon icon-primary icon-md">
                                        <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-expand"></use>
                                      </svg>
                                    </span>
                                  </a>
                                  <ul class="collapse" id="collapseExample">
                                    <li><a class="list-item px-0" href="#"><span>Servizio di
                                          trasporto scolastico</span></a></li>
                                    <li><a class="list-item px-0" href="#"><span>Servizio di
                                          trasporto scolastico</span></a></li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <span class="hr-shadow-sm d-none d-lg-block">
              </span></div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-3 p-contacts">
              <div class="cmp-contacts">
                <div class="card w-100">
                  <div class="card-body">
                    <h2 class="title-medium-2-semi-bold">Contatta il comune</h2>
                    <ul class="contact-list p-0">
                      <li><a class="list-item" href="#">
                          <svg class="icon icon-primary icon-sm" aria-hidden="true">
                            <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-help-circle"></use>
                          </svg><span>Leggi le domande frequenti</span></a></li>
              
                      <li><a class="list-item" href="#" data-element="contacts">
                          <svg class="icon icon-primary icon-sm" aria-hidden="true">
                            <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-mail"></use>
                          </svg><span>Richiedi assistenza</span></a></li>
              
                      <li><a class="list-item" href="#">
                          <svg class="icon icon-primary icon-sm" aria-hidden="true">
                            <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-hearing"></use>
                          </svg><span>Chiama il numero verde 05 0505</span></a></li>
              
                      <li><a class="list-item" href="#" data-element="appointment-booking">
                          <svg class="icon icon-primary icon-sm" aria-hidden="true">
                            <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-calendar"></use>
                          </svg><span>Prenota appuntamento</span></a></li>
                    </ul>
              
              
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="modal fade search-modal" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content perfect-scrollbar">
          <div class="modal-body">
            <form>
              <div class="container">
                <div class="row variable-gutters">
                  <div class="col">
                    <div class="modal-title">
                      <button class="search-link d-md-none" type="button" data-bs-toggle="modal" data-bs-target="#search-modal" aria-label="Chiudi e torna alla pagina precedente">
                        <svg class="icon icon-md">
                          <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-left"></use>
                        </svg>
                      </button>
                      <h2>Cerca</h2>
                      <button class="search-link d-none d-md-block" type="button" data-bs-toggle="modal" data-bs-target="#search-modal" aria-label="Chiudi e torna alla pagina precedente">
                        <svg class="icon icon-md">
                          <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-close-big"></use>
                        </svg>
                      </button>
                    </div>
                    <div class="form-group autocomplete-wrapper">
                    <label for="autocomplete-two" class="visually-hidden">Cerca nel sito</label>
                    <input type="search" class="autocomplete ps-5" placeholder="Cerca nel sito" id="autocomplete-two" name="autocomplete-two" data-bs-autocomplete="[]">
                    <span class="autocomplete-icon" aria-hidden="true">
                      <svg class="icon"><use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-search"></use></svg>
                    </span>
                      <button type="button" class="btn btn-primary">
                      
                      
                      
                       <span class="">Cerca</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="row variable-gutters">
                  <div class="col-lg-5">
                    <div class="searches-list-wrapper">
                      <div class="other-link-title">FORSE STAVI CERCANDO</div>
                      <ul class="searches-list" role="list">
                        <li role="listitem">
                          <a href="#">Rilascio Carta Identità Elettronica (CIE)</a>
                        </li>
                        <li role="listitem">
                          <a href="#">Cambio di residenza</a>
                        </li>
                        <li role="listitem">
                          <a href="#">Tributi online</a>
                        </li>
                        <li role="listitem">
                          <a href="#">Prenotazione appuntamenti</a>
                        </li>
                        <li role="listitem">
                          <a href="#">Rilascio tessera elettorale</a>
                        </li>
                        <li role="listitem">
                          <a href="#">Voucher connettività</a>
                        </li>
                      </ul><!-- /searches-list -->
                    </div><!-- /searches-list-wrapper -->
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>    <footer class="it-footer" id="footer">
      <div class="it-footer-main">
        <div class="container">
          <div class="row">
            <div class="col-12 footer-items-wrapper logo-wrapper">
              <img class="ue-logo" src="../assets/images/logo-eu-inverted.svg" alt="logo Unione Europea">
              <div class="it-brand-wrapper">
                <a href="#">
                  <svg class="icon" aria-hidden="true">
                    <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-pa"></use>
                  </svg>
                  <div class="it-brand-text">
                    <h2 class="no_toc">Nome del Comune</h2>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 footer-items-wrapper">
              <h3 class="footer-heading-title">Amministrazione</h3>
              <ul class="footer-list">
                <li>
                  <a href="#">Organi di governo</a>
                </li>
                <li>
                  <a href="#">Aree amministrative</a>
                </li>
                <li>
                  <a href="#">Uffici</a>
                </li>
                <li>
                  <a href="#">Enti e fondazioni</a>
                </li>
                <li>
                  <a href="#">Politici</a>
                </li>
                <li>
                  <a href="#">Personale amministrativo</a>
                </li>
                <li>
                  <a href="#">Documenti e dati</a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 footer-items-wrapper">
              <h3 class="footer-heading-title">Categorie di servizio</h3>
              <div class="row">
                <div class="col-md-6">
                  <ul class="footer-list">
                    <li>
                      <a href="#">Anagrafe e stato civile</a>
                    </li>
                    <li>
                      <a href="#">Cultura e tempo libero</a>
                    </li>
                    <li>
                      <a href="#">Vita lavorativa</a>
                    </li>
                    <li>
                      <a href="#">Imprese e commercio</a>
                    </li>
                    <li>
                      <a href="#">Appalti pubblici</a>
                    </li>
                    <li>
                      <a href="#">Catasto e urbanistica</a>
                    </li>
                    <li>
                      <a href="#">Turismo</a>
                    </li>
                    <li>
                      <a href="#">Mobilità e trasporti</a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="footer-list">
                    <li>
                      <a href="#">Educazione e formazione</a>
                    </li>
                    <li>
                      <a href="#">Giustizia e sicurezza pubblica</a>
                    </li>
                    <li>
                      <a href="#">Tributi, finanze e contravvenzioni</a>
                    </li>
                    <li>
                      <a href="#">Ambiente</a>
                    </li>
                    <li>
                      <a href="#">Salute, benessere e assistenza</a>
                    </li>
                    <li>
                      <a href="#">Autorizzazioni</a>
                    </li>
                    <li>
                      <a href="#">Agricoltura e pesca</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 footer-items-wrapper">
              <h3 class="footer-heading-title">Novità</h3>
              <ul class="footer-list">
                <li>
                  <a href="#">Notizie</a>
                </li>
                <li>
                  <a href="#">Comunicati</a>
                </li>
                <li>
                  <a href="#">Avvisi</a>
                </li>
              </ul>
              <h3 class="footer-heading-title">Vivere il comune</h3>
              <ul class="footer-list">
                <li>
                  <a href="#">Luoghi</a>
                </li>
                <li>
                  <a href="#">Eventi</a>
                </li>
              </ul>
            </div>
            <div class="col-md-9 mt-md-4 footer-items-wrapper">
              <h3 class="footer-heading-title">Contatti</h3>
              <div class="row">
                <div class="col-md-4">
                  <p class="footer-info">Comune di Nome Comune<br>
                    Via Roma 123 - 00100 Comune<br>
                    Codice fiscale / P. IVA: 00123456789<br><br>
                    <a href="#">Ufficio Relazioni con il Pubblico</a><br>
                    Numero verde: 800 016 123<br>
                    SMS e WhatsApp: +39 320 1234567<br>
                    Posta Elettronica Certificata<br>
                    Centralino unico: 012 3456
                  </p>
                </div>
                <div class="col-md-4">
                  <ul class="footer-list">
                    <li>
                      <a href="#" data-element="faq">Leggi le FAQ</a>
                    </li>
                    <li>
                      <a href="#">Prenotazione appuntamento</a>
                    </li>
                    <li>
                      <a href="#" data-element="report-inefficiency">Segnalazione disservizio</a>
                    </li>
                    <li>
                      <a href="#">Richiesta d'assistenza</a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul class="footer-list">
                    <li>
                      <a href="#">Amministrazione trasparente</a>
                    </li>
                    <li>
                      <a href="#" data-element="privacy-policy-link">Informativa privacy</a>
                    </li>
                    <li>
                      <a href="#">Note legali</a>
                    </li>
                    <li>
                      <a href="#" data-element="accessibility-link">Dichiarazione di accessibilità</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-md-4 footer-items-wrapper">
              <h3 class="footer-heading-title">Seguici su</h3>
              <ul class="list-inline text-start social">
                <li class="list-inline-item">
                  <a class="p-1 text-white" href="#" target="_blank">
                    <svg class="icon icon-sm icon-white align-top">
                      <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-twitter"></use>
                    </svg>
                    <span class="visually-hidden">Twitter</span></a>
                </li>
                <li class="list-inline-item">
                  <a class="p-1 text-white" href="#" target="_blank">
                    <svg class="icon icon-sm icon-white align-top">
                      <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-facebook"></use>
                    </svg>
                    <span class="visually-hidden">Facebook</span></a>
                </li>
                <li class="list-inline-item">
                  <a class="p-1 text-white" href="#" target="_blank">
                    <svg class="icon icon-sm icon-white align-top">
                      <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-youtube"></use>
                    </svg>
                    <span class="visually-hidden">YouTube</span></a>
                </li>
                <li class="list-inline-item">
                  <a class="p-1 text-white" href="#" target="_blank">
                    <svg class="icon icon-sm icon-white align-top">
                      <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-telegram"></use>
                    </svg>
                    <span class="visually-hidden">Telegram</span></a>
                </li>
                <li class="list-inline-item">
                  <a class="p-1 text-white" href="#" target="_blank">
                    <svg class="icon icon-sm icon-white align-top">
                      <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-whatsapp"></use>
                    </svg>
                    <span class="visually-hidden">Whatsapp</span></a>
                </li>
                <li class="list-inline-item">
                  <a class="p-1 text-white" href="#" target="_blank">
                    <svg class="icon icon-sm icon-white align-top">
                      <use xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-rss"></use>
                    </svg>
                    <span class="visually-hidden">RSS</span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-12 footer-items-wrapper">
              <div class="footer-bottom">
                <a href="#">Media policy</a>
              <a href="#">Mappa del sito</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    @include('pub_theme::layouts.partials.scripts')
    
    

</html>
