@extends('pub_theme::layouts.app')   
@section('content')
<main>
	{{-- 
	<h1 class="visually-hidden" id="search-container">Ricerca</h1>
	<div class="container" id="main-container">
		<div class="mb-md-5">
			<div class="cmp-breadcrumbs" role="navigation">
				<nav class="breadcrumb-container">
					<ol class="breadcrumb p-0" data-element="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><span class="separator">/</span>Ricerca</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	--}}
	<div class="container">
		<div class="form-group cmp-input-search-button mt-2 mb-4 mb-lg-50">
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<svg class="icon icon-md">
							<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-search"></use>
						</svg>
					</div>
				</div>
				<label for="input-group-1" class="active">Con Etichetta</label>
				<input type="search" class="form-control" id="input-group-1" name="input-group-1" placeholder="Pagamento TARI" data-focus-mouse="false">
			</div>
			<button type="button" data-bs-toggle="modal" data-bs-target="#" class="btn btn-primary">
			<span class="">Cerca</span>
			</button>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-lg-3 d-none d-lg-block scroll-filter-wrapper">
				<h2 class="visually-hidden" id="filter">filtri da applicare</h2>
				<fieldset>
					<div class="categoy-list pb-4">
						<legend class="h6 text-uppercase category-list__title">Tipologie</legend>
						<ul>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="unit" name="category" value="unità organizzativa">
										<label for="unit" class="subtitle-small_semi-bold mb-0 category-list__list">Unità organizzativa (21)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="public-person" name="category" value="persona pubblica">
										<label for="public-person" class="subtitle-small_semi-bold mb-0 category-list__list">Persona pubblica (14)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="documents" name="category" value="documenti">
										<label for="documents" class="subtitle-small_semi-bold mb-0 category-list__list">Documenti (7)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="services" name="category" value="servizi">
										<label for="services" class="subtitle-small_semi-bold mb-0 category-list__list">Servizi (208)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="news" name="category" value="notizie">
										<label for="news" class="subtitle-small_semi-bold mb-0 category-list__list">Notizie (321)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="places" name="category" value="luoghi">
										<label for="places" class="subtitle-small_semi-bold mb-0 category-list__list">Luoghi (42)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="events" name="category" value="eventi">
										<label for="events" class="subtitle-small_semi-bold mb-0 category-list__list">Eventi (302)</label> 
									</div>
								</div>
							</li>
						</ul>
					</div>
				</fieldset>
				<fieldset>
					<div class="categoy-list pb-4">
						<legend class="h6 text-uppercase category-list__title">Argomenti</legend>
						<ul>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="access" name="category" value="accesso all&#x27;informazione">
										<label for="access" class="subtitle-small_semi-bold mb-0 category-list__list">Accesso all&#x27;informazione (8)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="water" name="category" value="acqua">
										<label for="water" class="subtitle-small_semi-bold mb-0 category-list__list">Acqua (15)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="agriculture" name="category" value="agricoltura">
										<label for="agriculture" class="subtitle-small_semi-bold mb-0 category-list__list">Agricoltura (3)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="pet" name="category" value="notianimale domestico">
										<label for="pet" class="subtitle-small_semi-bold mb-0 category-list__list">Animale domestico (3)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="air" name="category" value="aria">
										<label for="air" class="subtitle-small_semi-bold mb-0 category-list__list">Aria (2)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="assistance-disabled" name="category" value="assistenza agli invalidi">
										<label for="assistance-disabled" class="subtitle-small_semi-bold mb-0 category-list__list">Assistenza agli invalidi (2)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="social-care" name="category" value="assistenza sociale">
										<label for="social-care" class="subtitle-small_semi-bold mb-0 category-list__list">Assistenza sociale (2)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="associations" name="category" value="associazioni">
										<label for="associations" class="subtitle-small_semi-bold mb-0 category-list__list">Associazioni (13)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="balance" name="category" value="bilancio">
										<label for="balance" class="subtitle-small_semi-bold mb-0 category-list__list">Bilancio (2)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="wholesale" name="category" value="commercio all&#x27;ingrosso">
										<label for="wholesale" class="subtitle-small_semi-bold mb-0 category-list__list">Commercio all&#x27;ingrosso (10)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="retail-trade" name="category" value="commercio al minuto">
										<label for="retail-trade" class="subtitle-small_semi-bold mb-0 category-list__list">Commercio al minuto (6)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="itinerant-trade" name="category" value="commercio ambulante">
										<label for="itinerant-trade" class="subtitle-small_semi-bold mb-0 category-list__list">Commercio ambulante (8)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="institutional-communication" name="category" value="comunicazione istituzionale">
										<label for="institutional-communication" class="subtitle-small_semi-bold mb-0 category-list__list">Comunicazione istituzionale (6)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="political-communication" name="category" value="comunicazione politica">
										<label for="political-communication" class="subtitle-small_semi-bold mb-0 category-list__list">Comunicazione politica (3)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="competitions" name="category" value="concorsi">
										<label for="competitions" class="subtitle-small_semi-bold mb-0 category-list__list">Concorsi (21)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="covid-19" name="category" value="covid-19">
										<label for="covid-19" class="subtitle-small_semi-bold mb-0 category-list__list">Covid-19 (9)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="elections" name="category" value="elezioni">
										<label for="elections" class="subtitle-small_semi-bold mb-0 category-list__list">Elezioni (7)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="abroad" name="category" value="estero">
										<label for="abroad" class="subtitle-small_semi-bold mb-0 category-list__list">Estero (6)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="renewable-energies" name="category" value="Energie rinnovabili">
										<label for="renewable-energies" class="subtitle-small_semi-bold mb-0 category-list__list">Energie rinnovabili (13)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="forests" name="category" value="foreste">
										<label for="forests" class="subtitle-small_semi-bold mb-0 category-list__list">Foreste (2)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="professional-training" name="category" value="formazione professionale">
										<label for="professional-training" class="subtitle-small_semi-bold mb-0 category-list__list">Formazione professionale (27)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="twinning" name="category" value="gemellaggi">
										<label for="twinning" class="subtitle-small_semi-bold mb-0 category-list__list">Gemellaggi (6)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="waste-management" name="category" value="gestione-rigiuti">
										<label for="waste-management" class="subtitle-small_semi-bold mb-0 category-list__list">Gestione rifiuti (10)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="justice" name="category" value="giustizia">
										<label for="justice" class="subtitle-small_semi-bold mb-0 category-list__list">Giustizia (3)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="public-hygiene" name="category" value="igiene pubblica">
										<label for="public-hygiene" class="subtitle-small_semi-bold mb-0 category-list__list">Igiene pubblica (7)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="immigration" name="category" value="immigrazione">
										<label for="immigration" class="subtitle-small_semi-bold mb-0 category-list__list">Immigrazione (34)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="taxes" name="category" value="imposte">
										<label for="taxes" class="subtitle-small_semi-bold mb-0 category-list__list">Imposte (3)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="businesses" name="category" value="imprese">
										<label for="businesses" class="subtitle-small_semi-bold mb-0 category-list__list">Imprese (14)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="pollution" name="category" value="inquinamento">
										<label for="pollution" class="subtitle-small_semi-bold mb-0 category-list__list">Inquinamento (36)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="social-integration" name="category" value="integrazione sociale">
										<label for="social-integration" class="subtitle-small_semi-bold mb-0 category-list__list">Integrazione sociale (18)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="thermal-insulation" name="category" value="isolamento termico">
										<label for="thermal-insulation" class="subtitle-small_semi-bold mb-0 category-list__list">Isolamento termico (21)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="instruction" name="category" value="istruzione">
										<label for="instruction" class="subtitle-small_semi-bold mb-0 category-list__list">Istruzione (13)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="work" name="category" value="lavoro">
										<label for="work" class="subtitle-small_semi-bold mb-0 category-list__list">Lavoro (24)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="marriage" name="category" value="matrimonio">
										<label for="marriage" class="subtitle-small_semi-bold mb-0 category-list__list">Matrimonio (16)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="market" name="category" value="mercato">
										<label for="market" class="subtitle-small_semi-bold mb-0 category-list__list">Mercato (11)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="sustainable mobility" name="category" value="mobilità sostenibile">
										<label for="sustainable mobility" class="subtitle-small_semi-bold mb-0 category-list__list">Mobilità sostenibile (32)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="death" name="category" value="Morte">
										<label for="death" class="subtitle-small_semi-bold mb-0 category-list__list">Morte (6)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="birth" name="category" value="nascita">
										<label for="birth" class="subtitle-small_semi-bold mb-0 category-list__list">Nascita (13)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="parking" name="category" value="parcheggi">
										<label for="parking" class="subtitle-small_semi-bold mb-0 category-list__list">Parcheggi (2)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="cultural-heritage" name="category" value="patrimonio culturale">
										<label for="cultural-heritage" class="subtitle-small_semi-bold mb-0 category-list__list">Patrimonio culturale (27)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="fishing" name="category" value="pesca">
										<label for="fishing" class="subtitle-small_semi-bold mb-0 category-list__list">Pesca (6)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="development-plan" name="category" value="piano di sviluppo">
										<label for="development-plan" class="subtitle-small_semi-bold mb-0 category-list__list">Piano di sviluppo (10)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="bicycle-lane" name="category" value="pista ciclabile">
										<label for="bicycle-lane" class="subtitle-small_semi-bold mb-0 category-list__list">Pista ciclabile (3)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="commercial-policy" name="category" value="politica commerciale">
										<label for="commercial-policy" class="subtitle-small_semi-bold mb-0 category-list__list">Politica commerciale (7)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="police" name="category" value="polizia">
										<label for="police" class="subtitle-small_semi-bold mb-0 category-list__list">Polizia (34)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="foodstuffs" name="category" value="prodotti alimentari">
										<label for="foodstuffs" class="subtitle-small_semi-bold mb-0 category-list__list">Prodotti alimentari (3)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="civil-protection" name="category" value="protezione civile">
										<label for="civil-protection" class="subtitle-small_semi-bold mb-0 category-list__list">Protezione civile (14)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="residence" name="category" value="residenza">
										<label for="residence" class="subtitle-small_semi-bold mb-0 category-list__list">Residenza (36)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="emergency-response" name="category" value="risposta alle emergenze">
										<label for="emergency-response" class="subtitle-small_semi-bold mb-0 category-list__list">Risposta alle emergenze (18)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="legal-system" name="category" value="Sistema giuridico">
										<label for="legal-system" class="subtitle-small_semi-bold mb-0 category-list__list">Sistema giuridico (21)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="green-space" name="category" value="Spazio verde">
										<label for="green-space" class="subtitle-small_semi-bold mb-0 category-list__list">Spazio verde (13)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="sport" name="category" value="sport">
										<label for="sport" class="subtitle-small_semi-bold mb-0 category-list__list">Sport (24)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="sustainable-development" name="category" value="Sviluppo sostenibile">
										<label for="sustainable-development" class="subtitle-small_semi-bold mb-0 category-list__list">Sviluppo sostenibile (16)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="service-charge" name="category" value="Tassa sui servizi">
										<label for="service-charge" class="subtitle-small_semi-bold mb-0 category-list__list">Tassa sui servizi (11)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="free-time" name="category" value="Tempo libero">
										<label for="free-time" class="subtitle-small_semi-bold mb-0 category-list__list">Tempo libero (32)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="administrative-transparency" name="category" value="Trasparenza amministrativa">
										<label for="administrative-transparency" class="subtitle-small_semi-bold mb-0 category-list__list">Trasparenza amministrativa (13)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="public-transport" name="category" value="Trasporto pubblico">
										<label for="public-transport" class="subtitle-small_semi-bold mb-0 category-list__list">Trasporto pubblico (24)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="tourism" name="category" value="Turismo">
										<label for="tourism" class="subtitle-small_semi-bold mb-0 category-list__list">Turismo (16)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="urbanization" name="category" value="Urbanizzazione">
										<label for="urbanization" class="subtitle-small_semi-bold mb-0 category-list__list">Urbanizzazione (11)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="travel" name="category" value="Viaggi">
										<label for="travel" class="subtitle-small_semi-bold mb-0 category-list__list">Viaggi (32)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="areas" name="category" value="Zone pedonali">
										<label for="areas" class="subtitle-small_semi-bold mb-0 category-list__list">Zone pedonali (6)</label> 
									</div>
								</div>
							</li>
							<li>
								<div class="form-check">
									<div class="checkbox-body border-light py-3">
										<input type="checkbox" id="ztl" name="category" value="ztl">
										<label for="ztl" class="subtitle-small_semi-bold mb-0 category-list__list">ZTL (13)</label> 
									</div>
								</div>
							</li>
						</ul>
					</div>
				</fieldset>
			</div>
			<div class="col-lg-8 offset-lg-1">
				<div class="d-flex justify-content-between align-items-center border-bottom border-light pb-3 mb-2">
					<h2 class="visually-hidden" id="search-result">Risultati di ricerca</h2>
					<span class="search-results u-grey-light"><span class="numResult">645</span> Risultati</span>
					<button type="button" data-bs-toggle="modal" data-bs-target="#modal-categories" class="btn p-0 pe-2 d-lg-none">
						<span class="rounded-icon">
							<svg class="icon icon-primary icon-xs" aria-hidden="true">
								<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-funnel"></use>
							</svg>
						</span>
						<span class="t-primary title-xsmall-semi-bold ms-1">Filtra</span>
					</button>
					<button type="button" class="btn d-none d-lg-block btn-result" disabled="disabled">Rimuovi tutti i filtri</button>
				</div>
				<div class="container p-0">
					<div class="row flex-column-reverse flex-lg-row">
						<div class="col-12 pt-3">
							<div class="cmp-card-latest-messages mb-3 mb-30" data-bs-toggle="modal" data-bs-target="#" id="">
								<div class="card shadow-sm px-4 pt-4 pb-4 rounded">
									<div class="card-header border-0 p-0">
										<a class="text-decoration-none title-xsmall-bold mb-2 category text-uppercase" href="#">Servizi</a>
									</div>
									<div class="card-body p-0 my-2">
										<h3 class="green-title-big t-primary mb-8"><a href="#" class="text-decoration-none" data-element="service-link">Consegna contenitori rifiuti</a></h3>
										<p class="text-paragraph">Consegna dei contenitori per il corretto conferimento dei rifiuti nel sistema di raccolta
											porta a porta.
										</p>
									</div>
								</div>
							</div>
							<div class="cmp-card-latest-messages mb-3 mb-30" data-bs-toggle="modal" data-bs-target="#" id="">
								<div class="card shadow-sm px-4 pt-4 pb-4 rounded">
									<div class="card-header border-0 p-0">
										<a class="text-decoration-none title-xsmall-bold mb-2 category text-uppercase" href="#">Servizi</a>
									</div>
									<div class="card-body p-0 my-2">
										<h3 class="green-title-big t-primary mb-8"><a href="#" class="text-decoration-none" data-element="service-link">Consegna contenitori rifiuti</a></h3>
										<p class="text-paragraph">Consegna dei contenitori per il corretto conferimento dei rifiuti nel sistema di raccolta
											porta a porta.
										</p>
									</div>
								</div>
							</div>
							<div class="cmp-card-latest-messages mb-3 mb-30" data-bs-toggle="modal" data-bs-target="#" id="">
								<div class="card shadow-sm px-4 pt-4 pb-4 rounded">
									<div class="card-header border-0 p-0">
										<a class="text-decoration-none title-xsmall-bold mb-2 category text-uppercase" href="#">Servizi</a>
									</div>
									<div class="card-body p-0 my-2">
										<h3 class="green-title-big t-primary mb-8"><a href="#" class="text-decoration-none" data-element="service-link">Conferimento rifiuti presso isole ecologiche mobili</a></h3>
										<p class="text-paragraph">Le isole ecologiche mobili sono dei piccoli eco-centri nei quali è possibile conferire
											rifiuti di piccole dimensioni
										</p>
									</div>
								</div>
							</div>
							<div class="cmp-card-latest-messages mb-3 mb-30" data-bs-toggle="modal" data-bs-target="#" id="">
								<div class="card shadow-sm px-4 pt-4 pb-4 rounded">
									<div class="card-header border-0 p-0">
										<a class="text-decoration-none title-xsmall-bold mb-2 category text-uppercase" href="#">Servizi</a>
									</div>
									<div class="card-body p-0 my-2">
										<h3 class="green-title-big t-primary mb-8"><a href="#" class="text-decoration-none" data-element="service-link">Chiedere un rimborso Tari (Tassa sui rifiuti)</a></h3>
										<p class="text-paragraph">Come chiedere un rimborso per la Tassa sui rifiuti (Tari).</p>
									</div>
								</div>
							</div>
							<div class="cmp-card-latest-messages mb-3 mb-30" data-bs-toggle="modal" data-bs-target="#" id="">
								<div class="card shadow-sm px-4 pt-4 pb-4 rounded">
									<div class="card-header border-0 p-0">
										<a class="text-decoration-none title-xsmall-bold mb-2 category text-uppercase" href="#">NOTIZIE</a>
									</div>
									<div class="card-body p-0 my-2">
										<h3 class="green-title-big t-primary mb-8"><a href="#" class="text-decoration-none" data-element="service-link">Agevolazioni tariffarie a favore delle categorie svantaggiate</a></h3>
										<p class="text-paragraph">Da lunedì 16 dicembre sarà possibile richiedere o rinnovare gli abbonamenti</p>
									</div>
								</div>
							</div>
							<div class="cmp-card-latest-messages mb-3 mb-30" data-bs-toggle="modal" data-bs-target="#" id="">
								<div class="card shadow-sm px-4 pt-4 pb-4 rounded">
									<div class="card-header border-0 p-0">
										<a class="text-decoration-none title-xsmall-bold mb-2 category text-uppercase" href="#">NOTIZIE</a>
									</div>
									<div class="card-body p-0 my-2">
										<h3 class="green-title-big t-primary mb-8"><a href="#" class="text-decoration-none" data-element="service-link">Accertamenti TaRi: il sindaco e l’assessore fanno il punto</a></h3>
										<p class="text-paragraph">Circa 17mila le utenze che hanno presentato spontaneamente autodenuncia al Comune e che ora
											fanno la raccolta differenziata.
										</p>
									</div>
								</div>
							</div>
							<div class="cmp-card-latest-messages mb-3 mb-30" data-bs-toggle="modal" data-bs-target="#" id="">
								<div class="card shadow-sm px-4 pt-4 pb-4 rounded">
									<div class="card-header border-0 p-0">
										<a class="text-decoration-none title-xsmall-bold mb-2 category text-uppercase" href="#">NOTIZIE</a>
									</div>
									<div class="card-body p-0 my-2">
										<h3 class="green-title-big t-primary mb-8"><a href="#" class="text-decoration-none" data-element="service-link">Accordo tra Cin-Tirrenia e continuità territoriale</a></h3>
										<p class="text-paragraph">A partire dal 25 febbraio 2019 sarà possibile acquistare l’abbonamento mensile CTM di marzo
											con le nuove tariffe agevolate.
										</p>
									</div>
								</div>
							</div>
							<div class="cmp-card-latest-messages mb-3 mb-30" data-bs-toggle="modal" data-bs-target="#" id="">
								<div class="card shadow-sm px-4 pt-4 pb-4 rounded">
									<div class="card-header border-0 p-0">
										<a class="text-decoration-none title-xsmall-bold mb-2 category text-uppercase" href="#">NOTIZIE</a>
									</div>
									<div class="card-body p-0 my-2">
										<h3 class="green-title-big t-primary mb-8"><a href="#" class="text-decoration-none" data-element="service-link">Accertamento TARI</a></h3>
										<p class="text-paragraph">Risultati degli accertamenti TARI</p>
									</div>
								</div>
							</div>
							<div class="cmp-card-latest-messages mb-3 mb-30" data-bs-toggle="modal" data-bs-target="#" id="">
								<div class="card shadow-sm px-4 pt-4 pb-4 rounded">
									<div class="card-header border-0 p-0">
										<a class="text-decoration-none title-xsmall-bold mb-2 category text-uppercase" href="#">NOTIZIE</a>
									</div>
									<div class="card-body p-0 my-2">
										<h3 class="green-title-big t-primary mb-8"><a href="#" class="text-decoration-none" data-element="service-link">Agevolazioni tariffarie a carattere sociale delle utenze del Servizio Idrico Integrato</a></h3>
										<p class="text-paragraph">Pubblicato bando, allegati e modulistica</p>
									</div>
								</div>
							</div>
							<div class="cmp-card-latest-messages mb-3 mb-4" data-bs-toggle="modal" data-bs-target="#" id="">
								<div class="card shadow-sm px-4 pt-4 pb-4 rounded">
									<div class="card-header border-0 p-0">
										<a class="text-decoration-none title-xsmall-bold mb-2 category text-uppercase" href="#">NOTIZIE</a>
									</div>
									<div class="card-body p-0 my-2">
										<h3 class="green-title-big t-primary mb-8"><a href="#" class="text-decoration-none" data-element="service-link">La TARI scende del 17,7%</a></h3>
										<p class="text-paragraph">I dati diffusi dall’Osservatorio prezzi e tariffe di Cittadinanzattiva</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container p-0">
					<div class="d-flex justify-content-center">
						<button type="button" class="btn btn-outline-primary pt-15 pb-15 pl-90 pr-90 mb-30 mb-lg-50 full-mb text-button">
						<span class="">Carica altri risultati</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-primary">
		<div class="container">
			<div class="row d-flex justify-content-center bg-primary">
				<div class="col-12 col-lg-6">
					<div class="cmp-rating pt-lg-80 pb-lg-80" id="">
						<div class="card shadow card-wrapper" data-element="feedback">
							<div class="cmp-rating__card-first">
								<div class="card-header border-0">
									<h2 class="title-medium-2-semi-bold mb-0">Quanto sono utili le informazioni in questa
										pagina?
									</h2>
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
			<div class="row d-flex justify-content-center p-contacts">
				<div class="col-12 col-lg-6">
					<div class="cmp-contacts">
						<div class="card w-100">
							<div class="card-body">
								<h2 class="title-medium-2-semi-bold">Contatta il comune</h2>
								<ul class="contact-list p-0">
									<li>
										<a class="list-item" href="#">
											<svg class="icon icon-primary icon-sm" aria-hidden="true">
												<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-help-circle"></use>
											</svg>
											<span>Leggi le domande frequenti</span>
										</a>
									</li>
									<li>
										<a class="list-item" href="#" data-element="contacts">
											<svg class="icon icon-primary icon-sm" aria-hidden="true">
												<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-mail"></use>
											</svg>
											<span>Richiedi assistenza</span>
										</a>
									</li>
									<li>
										<a class="list-item" href="#">
											<svg class="icon icon-primary icon-sm" aria-hidden="true">
												<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-hearing"></use>
											</svg>
											<span>Chiama il numero verde 05 0505</span>
										</a>
									</li>
									<li>
										<a class="list-item" href="#" data-element="appointment-booking">
											<svg class="icon icon-primary icon-sm" aria-hidden="true">
												<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-calendar"></use>
											</svg>
											<span>Prenota appuntamento</span>
										</a>
									</li>
								</ul>
								<h2 class="title-medium-2-semi-bold mt-4">Problemi in città</h2>
								<ul class="contact-list p-0">
									<li>
										<a class="list-item" href="#">
											<svg class="icon icon-primary icon-sm" aria-hidden="true">
												<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-map-marker-circle"></use>
											</svg>
											<span>Segnala disservizio </span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="it-example-modal">
		<div class="modal fade" tabindex="-1" role="dialog" id="modal-disservizio" aria-labelledby="modal2Title">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="modal-title title-small-semi-bold" id="modal2Title">Buca in via Solferino</h2>
						<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Chiudi finestra modale">
							<svg class="icon">
								<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-close"></use>
							</svg>
						</button>
					</div>
					<div class="modal-body text-black">
						<div class="border-bottom border-light">
							<h3 class="title-xsmall border-light pt-2">Titolo</h3>
							<p class="subtitle-small pb-2">Buca in via Solferino</p>
						</div>
						<div class="border-bottom border-light">
							<h3 class="title-xsmall border-light pt-2">Tipologia di segnalazione</h3>
							<p class="subtitle-small pb-2">Verde pubblico e arredo urbano</p>
						</div>
						<div class="border-bottom border-light">
							<h3 class="title-xsmall border-light pt-2">Indirizzo</h3>
							<p class="subtitle-small pb-2">Via Solferino - 50100 Firenze</p>
						</div>
						<div class="border-bottom border-light">
							<h3 class="title-xsmall border-light pt-2">Dettaglio</h3>
							<p class="subtitle-small pb-2">Sulla strada c’è una buca piuttosto profonda che andrebbe  sistemata con urgenza</p>
						</div>
						<h3 class="title-xsmall border-light pt-2">Immagini</h3>
						<img src="../assets/images/modal-disservizio-placeholder.png" class="w-100 mb-2" alt="immagine della mappa di dove si trova il disservizio">
					</div>
					<div class="modal-footer">
						<button class="btn btn-outline-primary w-100 btn-sm" type="button" data-bs-dismiss="modal" aria-label="Chiudi finestra modale">Chiudi</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection