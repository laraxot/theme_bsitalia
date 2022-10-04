@extends('pub_theme::layouts.app')
@section('content')
    <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
            <nav class="collapse bd-links" id="bd-docs-nav">
                <div class="sidebar-wrapper">
                    <h3 class="no_toc">Documentazione</h3>
                    <div class="sidebar-linklist-wrapper">
                        <div class="link-list-wrapper">
                            <ul class="link-list">
                                <li>
                                    <!-- One:usare ID -->
                                    <a class="list-item large medium right-icon active" href="#collapse-1" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1">
                                        <span>Come iniziare</span>
                                        <svg class="icon icon-sm icon-primary right" aria-hidden="true">
                                            <use xlink:href="/bootstrap-italia/dist/svg/sprite.svg#it-expand"></use>
                                        </svg>
                                    </a>
                                    <ul class="link-sublist collapse show" id="collapse-1">
                                        <li>
                                            <a class="list-item  active" href="/bootstrap-italia/docs/come-iniziare/introduzione/">
                                            <span>Introduzione</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/come-iniziare/strumenti-di-compilazione/">
                                            <span>Strumenti di compilazione</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/come-iniziare/personalizzazione-della-libreria/">
                                            <span>Personalizzazione della libreria</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/come-iniziare/modificare-componenti/">
                                            <span>Modificare Componenti</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/come-iniziare/componente-base/">
                                            <span>Componente base</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <!-- One:usare ID -->
                                    <a class="list-item large medium right-icon " href="#collapse-2" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2">
                                        <span>Organizzare gli spazi</span>
                                        <svg class="icon icon-sm icon-primary right" aria-hidden="true">
                                            <use xlink:href="/bootstrap-italia/dist/svg/sprite.svg#it-expand"></use>
                                        </svg>
                                    </a>
                                    <ul class="link-sublist collapse " id="collapse-2">
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-gli-spazi/introduzione/">
                                            <span>Introduzione</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-gli-spazi/allineamento-verticale/">
                                            <span>Allineamento verticale</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-gli-spazi/bordi/">
                                            <span>Bordi</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-gli-spazi/clearfix/">
                                            <span>Clearfix</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-gli-spazi/dimensionamento/">
                                            <span>Dimensionamento</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-gli-spazi/display/">
                                            <span>Display</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-gli-spazi/flex/">
                                            <span>Flex</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-gli-spazi/float/">
                                            <span>Float</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-gli-spazi/griglie/">
                                            <span>Griglie</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-gli-spazi/ombreggiature/">
                                            <span>Ombreggiature</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-gli-spazi/posizionamento/">
                                            <span>Posizionamento</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-gli-spazi/spaziature/">
                                            <span>Spaziature</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <!-- One:usare ID -->
                                    <a class="list-item large medium right-icon " href="#collapse-3" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3">
                                        <span>Organizzare i contenuti</span>
                                        <svg class="icon icon-sm icon-primary right" aria-hidden="true">
                                            <use xlink:href="/bootstrap-italia/dist/svg/sprite.svg#it-expand"></use>
                                        </svg>
                                    </a>
                                    <ul class="link-sublist collapse " id="collapse-3">
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-i-contenuti/introduzione/">
                                            <span>Introduzione</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-i-contenuti/codice/">
                                            <span>Codice</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-i-contenuti/embed/">
                                            <span>Embed</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-i-contenuti/immagini/">
                                            <span>Immagini</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-i-contenuti/liste/">
                                            <span>Liste</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-i-contenuti/liste-di-immagini/">
                                            <span>Liste di immagini</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-i-contenuti/liste-di-link/">
                                            <span>Liste di link</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-i-contenuti/oggetto-media/">
                                            <span>Oggetto Media</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-i-contenuti/tabelle/">
                                            <span>Tabelle</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-i-contenuti/testo/">
                                            <span>Testo</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/organizzare-i-contenuti/tipografia/">
                                            <span>Tipografia</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <!-- One:usare ID -->
                                    <a class="list-item large medium right-icon " href="#collapse-4" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-4">
                                        <span>Menu di navigazione</span>
                                        <svg class="icon icon-sm icon-primary right" aria-hidden="true">
                                            <use xlink:href="/bootstrap-italia/dist/svg/sprite.svg#it-expand"></use>
                                        </svg>
                                    </a>
                                    <ul class="link-sublist collapse " id="collapse-4">
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/menu-di-navigazione/introduzione/">
                                            <span>Introduzione</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/menu-di-navigazione/bottomnav/">
                                            <span>BottomNav</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/menu-di-navigazione/breadcrumbs/">
                                            <span>Breadcrumbs</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/menu-di-navigazione/header/">
                                            <span>Header</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/menu-di-navigazione/megamenu/">
                                            <span>Megamenu</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/menu-di-navigazione/navscroll/">
                                            <span>Navscroll</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/menu-di-navigazione/sidebar/">
                                            <span>Sidebar</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/menu-di-navigazione/skiplinks/">
                                            <span>Skiplinks</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/menu-di-navigazione/thumbnav/">
                                            <span>Thumbnav</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/menu-di-navigazione/toolbar/">
                                            <span>Toolbar</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/menu-di-navigazione/torna-indietro/">
                                            <span>Torna indietro</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/menu-di-navigazione/torna-su/">
                                            <span>Torna su</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <!-- One:usare ID -->
                                    <a class="list-item large medium right-icon " href="#collapse-5" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-5">
                                        <span>Componenti</span>
                                        <svg class="icon icon-sm icon-primary right" aria-hidden="true">
                                            <use xlink:href="/bootstrap-italia/dist/svg/sprite.svg#it-expand"></use>
                                        </svg>
                                    </a>
                                    <ul class="link-sublist collapse " id="collapse-5">
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/introduzione/">
                                            <span>Introduzione</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/affix/">
                                            <span>Affix</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/alert/">
                                            <span>Alert</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/avatar/">
                                            <span>Avatar</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/badge/">
                                            <span>Badge</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/bottoni/">
                                            <span>Bottoni</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/card/">
                                            <span>Card</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/callout/">
                                            <span>Callout</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/carousel/">
                                            <span>Carousel</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/chips/">
                                            <span>Chips</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/collapse/">
                                            <span>Collapse</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/cookiebar/">
                                            <span>Cookiebar</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/dimmer/">
                                            <span>Dimmer</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/dropdown/">
                                            <span>Dropdown</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/forward/">
                                            <span>Forward</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/hero/">
                                            <span>Hero</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/modale/">
                                            <span>Modale</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/notifiche/">
                                            <span>Notifiche</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/overlay/">
                                            <span>Overlay</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/paginazione/">
                                            <span>Paginazione</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/popover/">
                                            <span>Popover</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/progress-indicators/">
                                            <span>Progress Indicators</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/rating/">
                                            <span>Rating</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/sections/">
                                            <span>Sections</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/steppers/">
                                            <span>Steppers</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/tab/">
                                            <span>Tab</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/timeline/">
                                            <span>Timeline</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/componenti/tooltip/">
                                            <span>Tooltip</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <!-- One:usare ID -->
                                    <a class="list-item large medium right-icon " href="#collapse-6" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-6">
                                        <span>Form</span>
                                        <svg class="icon icon-sm icon-primary right" aria-hidden="true">
                                            <use xlink:href="/bootstrap-italia/dist/svg/sprite.svg#it-expand"></use>
                                        </svg>
                                    </a>
                                    <ul class="link-sublist collapse " id="collapse-6">
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/form/introduzione/">
                                            <span>Introduzione</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/form/input/">
                                            <span>Input</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/form/input-numerico/">
                                            <span>Input Numerico</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/form/input-calendario/">
                                            <span>Input Calendario</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/form/input-ora/">
                                            <span>Input Ora</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/form/upload/">
                                            <span>Upload</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/form/radio-button/">
                                            <span>Radio Button</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/form/select/">
                                            <span>Select</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/form/checkbox/">
                                            <span>Checkbox</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/form/toggles/">
                                            <span>Toggles</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/form/transfer/">
                                            <span>Transfer</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <!-- One:usare ID -->
                                    <a class="list-item large medium right-icon " href="#collapse-7" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-7">
                                        <span>Utilities</span>
                                        <svg class="icon icon-sm icon-primary right" aria-hidden="true">
                                            <use xlink:href="/bootstrap-italia/dist/svg/sprite.svg#it-expand"></use>
                                        </svg>
                                    </a>
                                    <ul class="link-sublist collapse " id="collapse-7">
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/utilities/colori/">
                                            <span>Colori</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/utilities/colori-custom/">
                                            <span>Colori Custom</span></a>
                                        </li>
                                        <li>
                                            <a class="list-item " href="/bootstrap-italia/docs/utilities/icone/">
                                            <span>Icone</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="list-item active" href="/bootstrap-italia/docs/esempi/"><span>Esempi</span></a>
                                </li>
                                <li>
                                    <a class="list-item active" href="/bootstrap-italia/docs/progetti/"><span>Progetti</span></a>
                                </li>
                                <li>
                                    <a class="list-item active" href="/bootstrap-italia/docs/informazioni/"><span>Informazioni</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="d-none d-xl-block col-xl-2 bd-toc">
            <div class="sidebar-wrapper">
                <h3>Introduzione</h3>
                <ul class="section-nav">
                    <li class="toc-entry toc-h2">
                        <a href="#caricare-la-libreria">Caricare la libreria</a>
                        <ul>
                            <li class="toc-entry toc-h3"><a href="#css">CSS</a></li>
                            <li class="toc-entry toc-h3"><a href="#javascript">Javascript</a></li>
                            <li class="toc-entry toc-h3"><a href="#fonts">Fonts</a></li>
                            <li class="toc-entry toc-h3"><a href="#icone">Icone</a></li>
                        </ul>
                    </li>
                    <li class="toc-entry toc-h2">
                        <a href="#pagina-html-di-esempio">Pagina HTML di esempio</a>
                        <ul>
                            <li class="toc-entry toc-h3"><a href="#altri-esempi">Altri esempi</a></li>
                        </ul>
                    </li>
                    <li class="toc-entry toc-h2"><a href="#utilizzo-come-dipendenza">Utilizzo come dipendenza</a></li>
                    <li class="toc-entry toc-h2">
                        <a href="#impostazioni-globali">Impostazioni globali</a>
                        <ul>
                            <li class="toc-entry toc-h3"><a href="#doctype-html5">Doctype HTML5</a></li>
                            <li class="toc-entry toc-h3"><a href="#meta-tag-responsive">Meta tag responsive</a></li>
                            <li class="toc-entry toc-h3"><a href="#box-sizing">Box-sizing</a></li>
                            <li class="toc-entry toc-h3"><a href="#reboot">Reboot</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <main class="col-12 col-md-9 col-xl-8 py-md-3 px-md-3 bd-content">
            <h1 class="bd-title" id="content">Introduzione</h1>
            <p class="bd-lead">Come usare Bootstrap Italia nel tuo progetto</p>
            <h2 id="caricare-la-libreria">Caricare la libreria</h2>
            <p>Per utilizzare il codice compilato di Bootstrap Italia nel tuo progetto, è sufficiente scaricare ed includere nella pagina HTML alcuni file, tra cui un file CSS, un Javascript, i fonts e una SVG sprite, il tutto scaricabile qui:</p>
            <p><a href="https://github.com/italia/bootstrap-italia/releases/download/v1.4.1/bootstrap-italia.zip" class="btn btn-primary">Scarica Bootstrap Italia v1.4.1</a></p>
            <div class="bd-callout bd-callout-warning">
                <h5 id="importante">Importante!</h5>
                <p>È sempre consigliabile utilizzare la <strong>versione più recente della libreria e mantenerla aggiornata</strong> sui propri progetti.</p>
                <p>Non usare semplicemente la versione 1.0.0! La versione più recente tra le <a href="https://github.com/italia/bootstrap-italia/releases">release di progetto</a> contiene anche tutti i miglioramenti e le correzioni disponibili fino ad oggi.</p>
            </div>
            <p>Se preferisci usare i file sorgente di Bootstrap Italia nel tuo progetto attraverso il package manager <strong>npm</strong>, puoi fare riferimento a <a href="/bootstrap-italia/docs/come-iniziare/introduzione#utilizzo-come-dipendenza">queste indicazioni</a>.</p>
            <p>Le librerie Javascript e CSS di Bootstrap Italia personalizzano e comprendono anche il codice originale di <strong>Bootstrap 4.5.0</strong>, ereditandone quindi tutte i selettori, le funzionalità, ecc., che sono consultabili al sito di Bootstrap stesso.</p>
            <p>La libreria è accessibile anche via CDN su <a href="https://www.jsdelivr.com/package/npm/bootstrap-italia">jsDelivr</a> o <a href="https://unpkg.com/bootstrap-italia/">unpkg</a>, di cui però è sconsigliato l’utilizzo in ambienti di produzione.</p>
            <p>Di seguito le informazioni per l’utilizzo dei singoli file.</p>
            <h3 id="css">CSS</h3>
            <p>Una volta scaricato e decompresso il file, all’interno della cartella <code class="language-plaintext highlighter-rouge">css</code> sarà presente un file CSS minificato (<code class="language-plaintext highlighter-rouge">bootstrap-italia.min.css</code>) con la sua <a href="https://www.html5rocks.com/en/tutorials/developertools/sourcemaps/">sourcemap</a> (opzionale).</p>
            <p>Per includere questo file all’interno del tuo progetto sarà quindi sufficiente aggiungere il tag <code class="language-plaintext highlighter-rouge">&lt;link&gt;</code> di seguito riportato all’interno del tag <code class="language-plaintext highlighter-rouge">&lt;head&gt;</code> della pagina, prima di ogni altro CSS già presente, eventualmente correggendo il riferimento al percorso del file:</p>
            <figure class="highlight">
                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"./bootstrap-italia.min.css"</span><span class="nt">&gt;</span></code></pre>
            </figure>
            <h3 id="javascript">Javascript</h3>
            <p>All’interno della cartella <code class="language-plaintext highlighter-rouge">js</code> saranno invece presenti due file, che si differenziano soltanto per l’inclusione <em>in linea</em> delle librerie <em>jQuery</em>, <em>popper.js</em> e <em>Owl Carousel</em> (quest’ultimo necessario soltanto se presenti componenti di tipo <a href="/bootstrap-italia/docs/componenti/carousel">Carousel</a>). Vediamo nel dettaglio di cosa si tratta:</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">JS files</th>
                        <th scope="col">Popper</th>
                        <th scope="col">jQuery</th>
                        <th scope="col">OwlCarousel</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <div><code class="font-weight-normal text-nowrap">bootstrap-italia.bundle.min.js</code></div>
                        </th>
                        <td class="bg-success text-white">Incluso</td>
                        <td class="bg-success text-white">Incluso</td>
                        <td class="bg-success text-white">Incluso</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div><code class="font-weight-normal text-nowrap">bootstrap-italia.min.js</code></div>
                        </th>
                        <td>Non Incluso</td>
                        <td>Non Incluso</td>
                        <td>Non Incluso</td>
                    </tr>
                </tbody>
            </table>
            <p>In questo caso, dopo aver copiato i file all’interno del vostro progetto, sarà sufficiente inserire una versione dei tag <code class="language-plaintext highlighter-rouge">&lt;script&gt;</code> di seguito riportati alla fine della pagina HTML, giusto prima della chiusura del tag <code class="language-plaintext highlighter-rouge">&lt;/body&gt;</code>. Si potrà quindi <strong>scegliere</strong> se includere la versione <code class="language-plaintext highlighter-rouge">*.bundle.*</code> o caricare i singoli file separatamente (questo può rendersi necessario, ad esempio, se jQuery è già incluso nel vostro sito per altri motivi).</p>
            <h3 id="fonts">Fonts</h3>
            <p>È necessario anche includere i file relativi ai font referenziati nel CSS, mantenendo i path dei singoli font utilizzato nei <a href="https://github.com/italia/bootstrap-italia/releases/tag/v1.4.1">file sorgente della libreria</a>. Il path di base della cartella dei font può essere impostato utilizzando la variabile globale <strong>prima</strong> del caricamento della libreria Javascript di Bootstrap Italia:</p>
            <figure class="highlight">
                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;script&gt;</span><span class="nb">window</span><span class="p">.</span><span class="nx">__PUBLIC_PATH__</span> <span class="o">=</span> <span class="dl">'</span><span class="s1">/bootstrap-italia/dist/fonts</span><span class="dl">'</span><span class="nt">&lt;/script&gt;</span></code></pre>
            </figure>
            <p>Se tale variabile non è valorizzata, i font saranno cercati all’interno di una cartella <code class="language-plaintext highlighter-rouge">/bootstrap-italia/dist/fonts/</code>.</p>
            <h3 id="icone">Icone</h3>
            <p>Le icone a disposizione sono un componente assolutamente opzionale e sono pubblicate nella libreria sotto forma di sprite SVG <code class="language-plaintext highlighter-rouge">/bootstrap-italia/dist/svg/</code>, le cui singole SVG sorgenti sono presenti nel repository.</p>
            <p>Per informazioni, si può fare riferimento alla <a href="/bootstrap-italia/docs/utilities/icone/">documentazione sull’utilizzo delle icone</a>.</p>
            <h4 id="versione-bundle">Versione “bundle”</h4>
            <p>Includendo la versione <code class="language-plaintext highlighter-rouge">*.bundle.*</code>, non sarà necessario aggiungere ulteriori riferimenti a jQuery, Popper.js e Owl Carousel, in quanto già inclusi nel file <code class="language-plaintext highlighter-rouge">bootstrap-italia.bundle.min.js</code>.</p>
            <figure class="highlight">
                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"./bootstrap-italia.bundle.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span></code></pre>
            </figure>
            <h4 id="versione-semplice">Versione semplice</h4>
            <p>Al contrario, nel caso si preferisca caricare jQuery, Popper.js e Owl Carousel separatamente, sarà necessario includere i tag <code class="language-plaintext highlighter-rouge">&lt;script&gt;</code> come mostrato di seguito:</p>
            <figure class="highlight">
                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"./bootstrap-italia.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span></code></pre>
            </figure>
            <h2 id="pagina-html-di-esempio">Pagina HTML di esempio</h2>
            <p>In breve, si dovrebbe ottenere qualcosa di simile a ciò che segue:</p>
            <figure class="highlight">
                <pre><code class="language-html" data-lang="html"><span class="cp">&lt;!doctype html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"en"</span><span class="nt">&gt;</span>
<span class="nt">&lt;head&gt;</span>
<span class="c">&lt;!-- Required meta tags --&gt;</span>
<span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">"utf-8"</span><span class="nt">&gt;</span>
<span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1, shrink-to-fit=no"</span><span class="nt">&gt;</span>

<span class="c">&lt;!-- CSS --&gt;</span>
<span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"./bootstrap-italia.min.css"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/head&gt;</span>
<span class="nt">&lt;body&gt;</span>
<span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>
<span class="c">&lt;!-- JS --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"./bootstrap-italia.bundle.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span></code></pre>
            </figure>
            <p>Questo è tutto ciò che è sufficiente per avere a disposizione le funzionalità e gli stili di Bootstrap Italia.</p>
            <h3 id="altri-esempi">Altri esempi</h3>
            <p>Assieme a questa documentazione, si possono consultare una vasta quantità di esempi, consultabili sia alla sezione <a href="/bootstrap-italia/docs/esempi/">esempi</a> e <a href="/bootstrap-italia/docs/progetti/">progetti</a> di questo sito, che <a href="https://getbootstrap.com/docs/4.5/examples/">sul sito di Bootstrap</a>, con i quali è possibile iniziare a personalizzare la tua pagina semplicemente copiando il loro codice sorgente.</p>
            <p>Il codice sorgente di tali esempi si può trovare anche nel repository di Bootstrap Italia, nella <a href="https://github.com/italia/bootstrap-italia/tree/master/docs/esempi">cartella <code class="language-plaintext highlighter-rouge">docs/esempi/</code></a>.</p>
            <p>Tra i <a href="/bootstrap-italia/docs/progetti/">progetti</a> si possono trovare molti riferimenti a progetti terzi che fanno uso di Bootstrap Italia, come i temi per alcuni CMS, generatori di siti statici e framework per il web.</p>
            <h2 id="utilizzo-come-dipendenza">Utilizzo come dipendenza</h2>
            <p>Alternativamente, se si utilizza <a href="https://webpack.github.io/">Webpack</a> o altri module bundler per l’inclusione di librerie esterne attraverso <code class="language-plaintext highlighter-rouge">npm</code>, è possibile aggiungere Bootstrap Italia come dipendenza con il seguente comando:</p>
            <figure class="highlight">
                <pre><code class="language-sh" data-lang="sh">npm i bootstrap-italia <span class="nt">--save</span></code></pre>
            </figure>
            <h2 id="impostazioni-globali">Impostazioni globali</h2>
            <p>Il framework Bootstrap, e di conseguenza il tema Bootstrap Italia, utilizza e richiede alcune impostazioni globali di cui è bene essere al corrente durante lo sviluppo, che tendono <em>normalizzare</em> gli stili tra i vari browser. Di seguito alcune di esse.</p>
            <h3 id="doctype-html5">Doctype HTML5</h3>
            <p>Bootstrap richiede l’uso del doctype HTML5.</p>
            <figure class="highlight">
                <pre><code class="language-html" data-lang="html"><span class="cp">&lt;!doctype html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"it"</span><span class="nt">&gt;</span>
...
<span class="nt">&lt;/html&gt;</span></code></pre>
            </figure>
            <h3 id="meta-tag-responsive">Meta tag responsive</h3>
            <p>Bootstrap è sviluppato in modalità <em>mobile first</em>: per assicurare un rendering e una gestione dello zoom ottimale per ogni dispositivo, è necessario <strong>aggiungere il meta tag responsive che segue</strong> all’interno del tag <code class="language-plaintext highlighter-rouge">&lt;head&gt;</code>.</p>
            <figure class="highlight">
                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1, shrink-to-fit=no"</span><span class="nt">&gt;</span></code></pre>
            </figure>
            <p>Puoi vedere un’esempio di tale codice applicato nella <a href="#pagina-html-di-esempio">pagina html di esempio</a>.</p>
            <h3 id="box-sizing">Box-sizing</h3>
            <p>Per un migliore dimensionamento degli elementi nella pagina, Bootstrap imposta il valore di <code class="language-plaintext highlighter-rouge">box-sizing</code> da <code class="language-plaintext highlighter-rouge">content-box</code> a <code class="language-plaintext highlighter-rouge">border-box</code>. Questo assicura che ogni <code class="language-plaintext highlighter-rouge">padding</code> non abbia effetto sulla dimensione finale di un elemento, ma a volte può causare qualche problema con codice di terze parti come Google Maps o Google Custom Search Engine.</p>
            <p>Nelle rare occasioni sia necessario sovrascrivere il comportamento impostato da Bootstrap, sarà sufficiente utilizzare codice simile a quanto segue:</p>
            <figure class="highlight">
                <pre><code class="language-css" data-lang="css"><span class="nc">.selettore-per-creare-eccezione</span> <span class="p">{</span>
<span class="nl">box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
<span class="p">}</span></code></pre>
            </figure>
            <p>Si possono trovare dettagli aggiuntivi alla <a href="https://getbootstrap.com/docs/4.5/getting-started/introduction/#box-sizing">pagina corrispondente</a> sul sito ufficiale di Bootstrap.</p>
            <h3 id="reboot">Reboot</h3>
            <p>Infine, per <em>normalizzare</em> alcuni comportamenti cross-browser, Bootstrap Italia eredita da Bootstrap il cosiddetto “<a href="/bootstrap-italia/docs/organizzare-i-contenuti/introduzione/#reboot">Reboot</a>”, una serie di regole CSS che correggono inconsistenze tra browsers e dispositivi.</p>
            <hr />
            <h6 id="continua-la-lettura-">Continua la lettura &gt;</h6>
            <p>Se ti interessa contribuire alla libreria o sapere come funziona il processo di compilazione dei file e la creazione della documentazione di Bootstrap Italia,
                continua a leggere alla pagina <a href="/bootstrap-italia/docs/come-iniziare/strumenti-di-compilazione/">strumenti di compilazione</a>.
            </p>
        </main>
    </div>

@endsection
