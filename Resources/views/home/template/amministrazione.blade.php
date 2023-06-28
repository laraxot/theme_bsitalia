@extends('pub_theme::layouts.app', ['title' => 'Amministrazione - Nome del Comune', $headerActive1=true])
@section('content')
  <main>
    <div class="container" id="main-container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          {{-- {{> cmp-breadcrumbs/cmp-breadcrumbs link2="Home" link3="Amministrazione"}} --}}
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">

        <x-hero type="hero">
            <x-slot name="wrapper" class="pt-0 ps-0 pb-4 pb-lg-60"></x-slot>
            <x-slot name="title">Amministrazione</x-slot>
            <x-slot name="txt">Tutte le informazioni sulla struttura amministrativa del Comune. Scopri gli organi politici, gli
        uffici e il personale e consulta i documenti pubblici, le statistiche e i bandi di gara.</x-slot>
        </x-hero>


          {{-- {{>cmp-hero/cmp-hero
        hero-title="Amministrazione"
        hero-text="Tutte le informazioni sulla struttura amministrativa del Comune. Scopri gli organi politici, gli
        uffici e il personale e consulta i documenti pubblici, le statistiche e i bandi di gara."
        wrapper-class="pt-0 ps-0 pb-4 pb-lg-60"}} --}}
        </div>
      </div>
    </div>

    {{-- <div class="bg-grey-card py-5">
      <div class="container">
        <h2 class="title-xxlarge mb-4">In evidenza</h2>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            {{>cmp-card/cmp-card-simple
              borderlight=true
              card-title="Sindaco"
              card-text="Il sindaco, o primo cittadino, è a capo del governo del Comune e dell’amministrazione
              comunale."
              card-link="Vai alla pagina"
              card-link-accessibility="Vai alla pagina"
              icon="it-arrow-right"
              classTitle="title-xlarge"
              data-element="amministration-element"
              }}
          </div>
          <div class="col-md-6 col-lg-4">
            {{>cmp-card/cmp-card-simple
              borderlight=true
              card-title="Turismo"
              card-text="Sportello unico per le attività produttive e l'edilizia (Suape), commercio e somministrazione,
              commercio su area pubblica, concessioni suolo, turismo, incentivi alle imprese, mercati"
              card-link="Vai alla pagina"
              card-link-accessibility="Vai alla pagina"
              icon="it-arrow-right"
              classTitle="title-xlarge"
              data-element="amministration-element"
              }}
          </div>
          <div class="col-md-6 col-lg-4">
            {{>cmp-card/cmp-card-simple
              borderlight=true
              card-title="Mercato civico"
              card-text="Luogo simbolo della città, il mercato offre una vasta scelta di prodotti ittici, ortofrutta,
              carni, alimentari, generi vari e servizi."
              card-link="Vai alla pagina"
              card-link-accessibility="Vai alla pagina"
              icon="it-arrow-right"
              classTitle="title-xlarge"
              data-element="amministration-element"
              }}
          </div>
        </div>
      </div>
    </div>

    <div class="container py-5">
      <h2 class="title-xxlarge mb-4">Esplora l'amministrazione</h2>
      <div class="row g-4">
        <div class="col-12 col-md-6 col-lg-4">
          {{>cmp-card/cmp-card-simple
            borderlight=true
            card-title="Aree amministrative"
            card-text="La struttura organizzativa è suddivisa in aree di competenze che gestiscono i servizi erogati
            alla comunità."
            icon="it-arrow-right"
            classTitle="title-xlarge"
            data-element="amministration-element"
            }}
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          {{>cmp-card/cmp-card-simple
            borderlight=true
            card-title="Documenti e dati"
            card-text="Bandi di concorso, avvisi, graduatorie, statistiche e documenti pubblici."
            icon="it-arrow-right"
            classTitle="title-xlarge"
            data-element="amministration-element"
            }}
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          {{>cmp-card/cmp-card-simple
            borderlight=true
            card-title="Enti e fondazioni"
            card-text="I consorzi, gli enti e le società partecipate di cui il Comune fa parte per rappresentare al
            meglio gli interessi della comunità."
            icon="it-arrow-right"
            classTitle="title-xlarge"
            data-element="amministration-element"
            }}
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          {{>cmp-card/cmp-card-simple
            borderlight=true
            card-title="Organi di governo"
            card-text="Le informazioni sulla Giunta e il Consiglio comunale, incluse le convocazioni, le registrazioni
            delle sedute e i verbali."
            icon="it-arrow-right"
            classTitle="title-xlarge"
            data-element="amministration-element"
            }}
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          {{>cmp-card/cmp-card-simple
            borderlight=true
            card-title="Personale amministrativo"
            card-text="Personale da contattare per informazioni e supporto ai servizi erogati dagli uffici."
            icon="it-arrow-right"
            classTitle="title-xlarge"
            data-element="amministration-element"
            }}
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          {{>cmp-card/cmp-card-simple
            borderlight=true
            card-title="Politici"
            card-text="Tutti i rappresentanti dei cittadini che compongono gli organi di indirizzo politico del Comune."
            icon="it-arrow-right"
            classTitle="title-xlarge"
            data-element="amministration-element"
            }}
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          {{>cmp-card/cmp-card-simple
            borderlight=true
            card-title="Uffici"
            card-text="Le informazioni e i contatti degli Uffici di Città, gli uffici aperti al pubblico e gli uffici
            assistenziali."
            icon="it-arrow-right"
            classTitle="title-xlarge"
            data-element="amministration-element"
            }}
        </div>

      </div>
    </div> --}}

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
    </div>

    <div class="bg-grey-card shadow-contacts">
      <div class="container">
        <div class="row d-flex justify-content-center p-contacts">
          <div class="col-12 col-lg-6">
            {{-- {{>cmp-contacts/cmp-contacts}} --}}
            <x-contacts></x-contacts>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
@endsection