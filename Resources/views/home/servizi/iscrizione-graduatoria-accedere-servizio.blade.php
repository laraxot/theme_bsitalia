{{-- #>base/base title="Accesso area riservata - Nome del Comune" --}}
@extends('pub_theme::base.base', ['title' => 'Accesso area riservata - Nome del Comune'])
@section('content') 
<main>
    <div class="container" id="main-container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">
                <x-breadcrumbs link2="Home" link3="Accesso"></x-breadcrumbs>
                <x-heading title="Accedi"
                    subTitle="Per accedere al sito e ai suoi servizi, utilizza una delle seguenti modalità."></x-heading>
            </div>
        </div>
        <hr class="d-none d-lg-block mt-0 mb-4">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                {{-- estende --}}
                <x-button>
                    <x-button.label cardTitle="SPID"
                        cardDescription="Accedi con SPID, il sistema Pubblico di Identità Digitale."
                        linkLabel="Come attivare SPID" class="mb-2" classLink="" textBtnClass="mt-3">
                    </x-button.label>
                    <x-button.button label="Entra con SPID" class="btn-icon btn-re square"
                        iconBtnUrl="../assets/images/spid.svg"></x-button.button>
                </x-button>

                <x-button>
                    <x-button.label cardTitle="CIE" cardDescription="Accedi con la tua Carta d’Identità Elettronica."
                        linkLabel="Come richiedere CIE" class="mb-2" classLink="">
                    </x-button.label>
                    <x-button.button label="Entra con CIE" class="btn-icon btn-re square"
                        iconBtnUrl="../assets/images/cie.svg"></x-button.button>
                </x-button>

                <x-button>
                    <x-button.label cardTitle="Altre utenze"
                        cardDescription="In alternativa puoi utilizzare le seguenti modalità." class="d-md-flex">
                    </x-button.label>
                    <x-button.button label="Accedi con ID azienda" outline-primary=true class="btn-re pr-md-4 bg-white">
                    </x-button.button>
                    <x-button.button label="Accedi come dipendente" outline-primary=true class="btn-re bg-white">
                    </x-button.button>
                </x-button>
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
</main>
@endsection