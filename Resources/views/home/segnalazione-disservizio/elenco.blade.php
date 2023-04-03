@extends('pub_theme::layouts.app')
@section('content')
<main>
	<div class="container" id="main-container">
		<div class="row justify-content-center mb-md-40 mb-lg-80">
			<div class="col-12 col-lg-10">
				{{--
				<x-breadcrumb type="cmp_breadcrumbs">
					<x-slot name="link2">Home</x-slot>
					<x-slot name="link3">Elenco segnalazioni</x-slot>
				</x-breadcrumb>
				--}}
				{{--> cmp-breadcrumbs/cmp-breadcrumbs
				link2="Home"
				link3="Elenco segnalazioni"
				--}}
				<x-std tpl="heading">
					<x-slot name="title">Elenco segnalazioni</x-slot>
					<x-slot name="subTitle">Negli ultimi 12 mesi sono state risolte 73 segnalazioni.</x-slot>
					<x-slot name="heading_p0">true</x-slot>
					<x-slot name="iconTitle"></x-slot>
					<x-slot name="iconClass"></x-slot>
				</x-std>
				{{--> cmp-heading/cmp-heading
				title="Elenco segnalazioni"
				subTitle="Negli ultimi 12 mesi sono state risolte 73 segnalazioni."
				heading-p0=true
				--}}
			</div>
			<hr class="d-none d-lg-block mt-30 mb-2">
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-3 d-none d-lg-block">
				{{--> cmp-category-list/category-list category=categories--}}
				{{--
				<x-category.lists>
					<x-slot name="categories"></x-slot>
				</x-category.lists>
				--}}
			</div>
			<div class="col-lg-8 offset-lg-1">
				<div class="d-flex justify-content-between border-bottom border-light pb-3 mt-5">
					<span class="search-results">645 Risultati</span>


					{{-->partials/button/button label="Filtra" label-class="t-primary title-xsmall-semi-bold ms-1"
					iconBtn="it-funnel" class="p-0 pe-2 d-lg-none" xs=true
					modalId="modal-categories"--}}
					{{--
					<x-partials.button.button>
						<x-slot name="label">Filtra</x-slot>
						<x-slot name="label_class">t-primary title-xsmall-semi-bold ms-1</x-slot>
						<x-slot name="iconBtn">it-funnel</x-slot>
						<x-slot name="class">p-0 pe-2 d-lg-none</x-slot>
						<x-slot name="xs">true</x-slot>
						<x-slot name="modalId">modal-categories</x-slot>
						<x-slot name="class_icon"></x-slot>
          			</x-partials.button.button>
					--}}


					{{-->partials/button/button label="Rimuovi tutti i filtri" label-class="title-xsmall-semi-bold ms-1"
					class="p-0 pe-2 d-none d-lg-block" xs=true--}}
				</div>
				<ul class="nav nav-tabs w-100 flex-nowrap border-bottom border-light mb-40 mt-3 shadow-none" id="tabDisservizio"
					role="tablist">
					<li class="nav-item w-100" role="tab">
						<a class="nav-link active title-medium-semi-bold pt-0" href="#data-ex-disservizio1" aria-current="page"
							data-bs-toggle="tab" role="button" aria-controls="disservizio1" aria-selected="true">
						Mappa
						</a>
					</li>
					<li class="nav-item w-100" role="tab">
						<a class="nav-link title-medium-semi-bold pt-0" href="#data-ex-disservizio2" aria-current="page"
							data-bs-toggle="tab" role="button" aria-controls="disservizio2" aria-selected="true">
						Elenco
						</a>
					</li>
				</ul>

				@php
				/*


				<div class="tab-content">
					<div class="tab-pane fade show active" id="data-ex-disservizio1" role="tabpanel">
						<div class="row">
							<div class="col-12">
								{{> cmp-map/cmp-map}}
							</div>
							<div class="col-lg-6 mt-50 mb-4 mb-lg-0">
								{{#>cmp-text-button/cmp-text-button
								cardTitle="Fai una segnalazione"
								cardDescription="Se vuoi aggiungere una segnalazione, puoi farlo dopo esserti autenticato con le tue
								credenziali SPID o CIE."
								subtitle-class="mt-3"
								disservizioBtn=true}}
								{{>partials/button/button label="Segnala disservizio" modalId="modal-disservizio"
								class="btn btn-primary mobile-full py-3 mt-2 mb-4 mb-lg-0"}}
								{{/cmp-text-button/cmp-text-button}}
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="data-ex-disservizio2" role="tabpanel">
						<div class="row">
							{{#>cmp-card/cmp-card-content-box bg-grey=true margin-class="mb-4 mb-lg-30"}}
							{{> cmp-info-button-card/cmp-info-button-card
							medium-title="Buca in via Solferino"
							label-2="Tipologia di segnalazione <br>
							<span>Verde pubblico e arredo urbano</span>"
							show-more-disservizio="true"
							collapse-class="pb-0"
							collapse-id="collapse1"
							info=true
							}}
							{{/cmp-card/cmp-card-content-box}}
							{{#>cmp-card/cmp-card-content-box bg-grey=true margin-class="mb-4 mb-lg-30"}}
							{{> cmp-info-button-card/cmp-info-button-card
							medium-title="Titolo segnalazione 2"
							label-2="Tipologia segnalazione"
							show-more-disservizio="true"
							collapse-id="collapse2"
							info=true
							}}
							{{/cmp-card/cmp-card-content-box}}
							{{#>cmp-card/cmp-card-content-box bg-grey=true margin-class="mb-4 mb-lg-30"}}
							{{> cmp-info-button-card/cmp-info-button-card
							medium-title="Titolo segnalazione 3"
							label-2="Tipologia segnalazione"
							show-more-disservizio="true"
							collapse-id="collapse3"
							info=true
							}}
							{{/cmp-card/cmp-card-content-box}}
						</div>
						<div class="col-12 text-center">
							{{>partials/button/button label="Carica altre segnalazioni"
							class="btn btn-outline-primary mobile-full py-3 mt-10 mx-auto"}}
						</div>
						<div class="col-lg-6 mt-50 mb-4 mb-lg-0">
							{{#>cmp-text-button/cmp-text-button
							cardTitle="Fai una segnalazione"
							cardDescription="Se vuoi aggiungere una segnalazione, puoi farlo dopo esserti autenticato con le tue
							credenziali SPID o CIE."
							subtitle-class="mt-3"
							disservizioBtn=true}}
							{{>partials/button/button label="Segnala disservizio" modalId="modal-disservizio" class="btn btn-primary mobile-full py-3 mt-2 mb-4 mb-lg-0"}}
							{{/cmp-text-button/cmp-text-button}}
						</div>
					</div>
				</div>
				*/
				@endphp

			</div>
		</div>
	</div>
	<div class="bg-primary">
		<div class="container">
			<div class="row d-flex justify-content-center bg-primary">
				<div class="col-12 col-lg-6 p-lg-0 px-3">
					{{-->cmp-rating/cmp-rating public-template=true--}}
				</div>
			</div>
		</div>
	</div>
	<div class="bg-grey-card shadow-contacts">
		<div class="container">
			<div class="row d-flex justify-content-center p-contacts">
				<div class="col-12 col-lg-5">
					{{-->cmp-contacts/cmp-contacts--}}
				</div>
			</div>
		</div>
	</div>

	{{-->cmp-modal/modal-clickMap--}}

</main>
@endsection
