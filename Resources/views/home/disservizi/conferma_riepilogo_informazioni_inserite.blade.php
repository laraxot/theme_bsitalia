{{-- @extends('pub_theme::base.base', ['title' => 'Area personale - Nome del Comune', 'logged' => 'true']) --}}
@extends('pub_theme::layouts.app', ['title' => 'Area personale - Nome del Comune', 'logged' => 'true'])
@section('content')
    <main>
        <div class="container" id="main-container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <x-breadcrumb type="v2" :rows="collect([])">
                    </x-breadcrumb>

                    <x-heading type="heading" {{-- title="Segnalazionedisservizio" --}}>
                        <x-slot name="title">Segnalazione disservizio</x-slot>
                    </x-heading>
                </div>

                <div class="col-12">
                    {{-- <x-info type="progress" step-list=step-list.disservizio-step-3 step-num="3" step-title="Riepilogo"
                        step-tot="3">
                    </x-info> --}}

                    <x-info.rows type="progress" :rows="$_theme->getSteps()">
                        <x-slot name="step_title">Riepilogo</x-slot>
                        <x-slot name="step_num">3</x-slot>
                        <x-slot name="step_tot">3</x-slot>
                    </x-info.rows>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">

                    <x-callout type="cmp">
                        <x-slot name="calloutType">warning</x-slot>
                        <x-slot name="icon">it-horn</x-slot>
                        <x-slot name="title">Attenzione</x-slot>
                        <x-slot name="txt">Le informazioni che hai fornito hanno valore di dichiarazione.<span
                                class='d-lg-block'> Verifica
                                che siano corrette.</span></x-slot>
                        <x-slot name="textClass">titillium text-paragraph</x-slot>
                    </x-callout>

                    {{-- <x-callout calloutType="warning" icon="it-horn" calloutTitle="Attenzione"
                        calloutText="Le informazioni che hai fornito hanno valore di dichiarazione.<span class='d-lg-block'> Verifica che siano corrette.</span>"
                        textClass="titillium text-paragraph"></x-callout> --}}

                    <h2 class="title-xxlarge mb-4 mt-40">Segnalazione</h2>

                    <x-card type="content_box" class="mb-0" bg-grey=true header-m0=true h3-title=true h3-class="mb-4"
                        margin-class="mb-4" card-title="Disservizio">

                        <x-info.rows type="summary" :rows="$_theme->getDisservizioInfoList()">
                            <x-slot name="header_class">pb-2</x-slot>
                            <x-slot name="info">{{ true }}</x-slot>
                            <x-slot name="class">p-3 p-lg-4</x-slot>
                        </x-info.rows>


                        {{-- <x-info-summary class="p-3 p-lg-4" header-class="pb-2" info=true info-list=disservizio-info.list>
                        </x-info-summary> --}}
                    </x-card>

                    <h2 class="title-xxlarge mb-4 mt-40">Dati Generali</h2>

                    <x-card type="content_box" class="mb-0" bg-grey=true header-m0=true h3-title=true h3-class="mb-4"
                        margin-class="mb-4" card-title="Autore della segnalazione">

                        <x-info.rows type="summary" type="no_modify" :rows="$_theme->getDisservizioInfoAuthor()">
                            <x-slot name="class">mb-4 mb-lg-30 p-3 p-lg-4</x-slot>
                            <x-slot name="info-title">Giulia Bianchi</x-slot>
                            <x-slot name="info">true</x-slot>
                            <x-slot name="disservizio-page">true</x-slot>
                        </x-info.rows>

                        <x-info.rows type="summary" type="no_modify" :rows="$_theme->getDisservizioInfoContacts()">
                            <x-slot name="class">p-3 p-lg-4</x-slot>
                            <x-slot name="info-title">Contatti</x-slot>
                            <x-slot name="info">true</x-slot>
                            <x-slot name="disservizio-page">true</x-slot>
                        </x-info.rows>

                    </x-card>

                    <x-nav type="steps">
                        <x-slot name="next">true</x-slot>
                        <x-slot name="modalId">modal-terms</x-slot>
                        <x-slot name="saveBtn">true</x-slot>
                        <x-slot name="aria-label-save">di segnalazione disservizio</x-slot>
                    </x-nav>
                </div>
            </div>
        </div>
        {{-- </div> --}}

        {{-- <div class="bg-grey-card shadow-contacts">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3 p-contacts">
                        <x-card.rows type="contacts" :rows="collect([])">
                        </x-card.rows>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <x-modal type="terms_and_conditions"></x-modal> --}}
    </main>
@endsection
