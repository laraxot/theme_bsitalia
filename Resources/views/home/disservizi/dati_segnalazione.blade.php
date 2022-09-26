@extends('pub_theme::layouts.app')
@section('content')
		<main>
			<div class="container" id="main-container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-10">
						<div class="cmp-heading pb-3 pb-lg-4">
							<h1 class="title-xxxlarge">Segnalazione disservizio</h1>
						</div>
					</div>
					<div class="col-12">
						<div class="cmp-info-progress d-flex mb-lg-80" data-progress="">
							<!-- Desktop -->
							<div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end completed">
								<div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
									<span class="d-block h-100 title-medium text-uppercase">Informativa sulla privacy</span>
									<svg class="d-block icon icon-primary icon-sm" aria-hidden="true">
										<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-check"></use>
									</svg>
								</div>
							</div>
							<!-- Desktop -->
							<div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end step-active">
								<div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
									<span class="d-block h-100 title-medium text-uppercase">Dati di segnalazione</span>
								</div>
							</div>
							<!-- Desktop -->
							<div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end">
								<div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
									<span class="d-block h-100 title-medium text-uppercase">Riepilogo</span>
								</div>
							</div>
							<!-- Mobile -->
							<div class="iscrizioni-header d-lg-none w-100">
								<h4 class="step-title d-flex align-items-center justify-content-between drop-shadow">
									<span class="d-block d-lg-inline">
									Dati di segnalazione
									</span>
									<span class="step">2/3</span>
								</h4>
								<p class="title-xsmall mt-40 mb-3">I campi contraddistinti dal simbolo asterisco sono obbligatori</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-lg-3 d-lg-block mb-4 d-none">
						<div class="cmp-navscroll sticky-top" aria-labelledby="accordion-title-one">
							<nav class="navbar it-navscroll-wrapper navbar-expand-lg" data-bs-navscroll>
								<div class="navbar-custom" id="navbarNavProgress">
									<div class="menu-wrapper">
										<div class="link-list-wrapper">
											<div class="accordion">
												<div class="accordion-item">
													<span class="accordion-header" id="accordion-title-one">
														<button class="accordion-button pb-10 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-one" aria-expanded="true" aria-controls="collapse-one">
															INFORMAZIONI RICHIESTE
															<svg class="icon icon-xs right">
																<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-expand"></use>
															</svg>
														</button>
													</span>
													<div class="progress">
														<div class="progress-bar it-navscroll-progressbar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div id="collapse-one" class="accordion-collapse collapse show" role="region" aria-labelledby="accordion-title-one">
														<div class="accordion-body">
															<ul class="link-list" data-element="page-index">
																<li class="nav-item">
																	<a class="nav-link" href="#report-place">
																	<span class="title-medium">Luogo</span>
																	</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link" href="#report-info">
																	<span class="title-medium">Disservizio</span>
																	</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link" href="#report-author">
																	<span class="title-medium">Autore della segnalazione</span>
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
							</nav>
						</div>
					</div>
					<div class="col-12 col-lg-8 offset-lg-1">
						<div class="steppers-content" aria-live="polite">
							<div class="it-page-sections-container">
								<section class="it-page-section" id="report-place">
									<div class="cmp-card mb-40">
										<div class="card has-bkg-grey shadow-sm p-big p-lg-4">
											<div class="card-header border-0 p-0 mb-lg-30 m-0">
												<div class="d-flex">
													<h2 class="title-xxlarge mb-1">Luogo</h2>
												</div>
												<p class="subtitle-small mb-0">Indica il luogo del disservizio</p>
											</div>
											<div class="card-body p-0">
												<div class="cmp-input-autocomplete">
													<div class="form-group bg-white p-3 mb-0 mt-3">
														<label class="label-input d-none mb-2" for="autocomplete-regioni">Cerca un luogo*</label>
														<input type="search" class="autocomplete" placeholder="Cerca un luogo*" id="autocomplete-regioni" name="autocomplete-regioni" data-bs-autocomplete='[{"text":"Abruzzo","link":"#"},{"text":"Basilicata","link":"#"},{"text":"Calabria","link":"#"},{"text":"Campania","link":"#"},{"text":"Emilia Romagna","link":"#"},{"text":"Friuli Venezia Giulia","link":"#"},{"text":"Lazio","link":"#"},{"text":"Liguria","link":"#"},{"text":"Lombardia","link":"#"},{"text":"Marche","link":"#"},{"text":"Molise","link":"#"},{"text":"Piemonte","link":"#"},{"text":"Puglia","link":"#"},{"text":"Sardegna","link":"#"},{"text":"Sicilia","link":"#"},{"text":"Toscana","link":"#"},{"text":"Trentino Alto Adige","link":"#"},{"text":"Umbria","link":"#"},{"text":"Valle d’Aosta","link":"#"},{"text":"Veneto","link":"#"}]'>
														<div class="link-wrapper mt-3">
															<a class="list-item active icon-left" href="#">
																<span class="list-item-title-icon-wrapper">
																	<svg class="icon icon-sm icon-primary mb-1" aria-hidden="true">
																		<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-map-marker"></use>
																	</svg>
																	<span class="list-item-title t-primary">Usa la tua posizione</span>
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<section class="it-page-section" id="report-info">
									<div class="cmp-card mb-40">
										<div class="card has-bkg-grey shadow-sm p-big">
											<div class="card-header border-0 p-0 mb-lg-30 m-0">
												<div class="d-flex">
													<h2 class="title-xxlarge mb-3 icon-required">Disservizio</h2>
												</div>
											</div>
											<div class="card-body p-0">
												<div class="select-wrapper p-md-3 p-lg-4 pb-lg-0 select-partials">
													<label for="inefficiency" class="visually-hidden">Tipo di disservizio*</label>
													<select id="inefficiency" class="u-grey-dark">
														<option selected="selected" value="">Tipo di disservizio*</option>
														<option value="Danneggiamento proprietà pubblica">Danneggiamento proprietà pubblica</option>
													</select>
												</div>
												<div class="text-area-wrapper p-3 px-lg-4 pt-lg-5 pb-lg-0 bg-white">
													<div class="form-group cmp-input mb-0">
														<label class="cmp-input__label" for="title">Titolo*</label>
														<input type="text" class="form-control" id="title" name="title" required>
													</div>
												</div>
												<div class="cmp-text-area m-0 p-3 px-lg-4 pt-lg-5 pb-lg-4 bg-white">
													<div class="form-group">
														<label for="details" class="d-block">Dettagli*</label>
														<textarea class="text-area" id="details" rows="2"></textarea>
														<span class="label">Inserire al massimo 200 caratteri</span>
													</div>
												</div>
												<div class="btn-wrapper px-3 pt-2 pb-3 px-lg-4 pb-lg-4 pt-lg-0 bg-white">
													<label class="title-xsmall-bold u-grey-dark pb-2 ms-2">Immagini</label>
													<div class="upload-wrapper d-flex justify-content-between align-items-center">
														<img src="../assets/images/img-disservizio-thumbnail.png" alt="" class="img">
														<span class="t-primary fw-bold w-100 ms-2">6yhakandsahm413d8.jpg</span>
														<a href="#" class="align-self-center" aria-label="elimina immagina caricata">
															<svg class="icon icon-primary icon-sm mb-1">
																<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-close"></use>
															</svg>
														</a>
													</div>
													<hr>
													<button type="button" aria-label="Carica file per il disservizio" class="btn btn-primary w-100 fw-bold">
														<span class="rounded-icon">
															<svg class="icon icon-white icon-sm" aria-hidden="true">
																<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-upload"></use>
															</svg>
														</span>
														<span class="">Carica file</span>
													</button>
													<p class="title-xsmall u-grey-dark pt-10 mb-0">Seleziona una o più immagini da allegare alla
														segnalazione
													</p>
												</div>
											</div>
										</div>
									</div>
								</section>
								<section class="it-page-section" id="report-author">
									<div class="cmp-card">
										<div class="card has-bkg-grey shadow-sm">
											<div class="card-header border-0 p-0 mb-lg-30 m-0">
												<div class="d-flex">
													<h2 class="title-xxlarge mb-1">Autore della segnalazione</h2>
												</div>
												<p class="subtitle-small mb-0">Informazione su di te</p>
											</div>
											<div class="card-body p-0">
												<div class="cmp-info-button-card mt-3">
													<div class="card p-3 p-lg-4">
														<div class="card-body p-0">
															<h3 class="big-title mb-0">Giulia Bianchi</h3>
															<p class="card-info">Codice Fiscale <br> <span>GLABNC72H25H501Y</span></p>
															<div class="accordion-item">
																<div class="accordion-header" id="heading-collapse-parents">
																	<button class="collapsed accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-parents" aria-expanded="false" aria-controls="collapse-parents">
																		<span class="d-flex align-items-center">
																			Mostra tutto
																			<svg class="icon icon-primary icon-sm">
																				<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-expand"></use>
																			</svg>
																		</span>
																	</button>
																</div>
																<div id="collapse-parents" class="accordion-collapse collapse" role="region">
																	<div class="accordion-body p-0">
																		<div class="cmp-info-summary bg-white has-border">
																			<div class="card">
																				<div class="card-header border-bottom border-light p-0 mb-0 d-flex justify-content-between d-flex justify-content-end">
																					<h4 class="title-large-semi-bold mb-3">Contatti</h4>
																					<a href="#" class="d-none text-decoration-none"><span class="text-button-sm-semi t-primary">Modifica</span></a>
																				</div>
																				<div class="card-body p-0">
																					<div class="single-line-info border-light">
																						<div class="text-paragraph-small">Telefono</div>
																						<div class="border-light">
																							<p class="data-text">
																								+39 331 1234567
																							</p>
																						</div>
																					</div>
																					<div class="single-line-info border-light">
																						<div class="text-paragraph-small">Email</div>
																						<div class="border-light">
																							<p class="data-text">
																								mario.rossi@gmail.com
																							</p>
																						</div>
																					</div>
																				</div>
																				<div class="card-footer p-0 d-none">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
							<div class="cmp-nav-steps">
								<nav class="steppers-nav">
									<button type="button" class="btn btn-sm steppers-btn-prev p-0">
										<svg class="icon icon-primary icon-sm" aria-hidden="true">
											<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-chevron-left"></use>
										</svg>
										<span class="text-button-sm t-primary">Indietro</span>
									</button>
									<button type="button" class="btn btn-outline-primary bg-white btn-sm steppers-btn-save d-none d-lg-block saveBtn">
									<span class="text-button-sm t-primary">Salva Richiesta</span>
									</button>
									<button type="button" class="btn btn-outline-primary bg-white btn-sm steppers-btn-save d-block d-lg-none saveBtn center">
									<span class="text-button-sm t-primary">Salva</span>
									</button>
									<button type="button" class="btn btn-primary btn-sm steppers-btn-confirm" data-bs-toggle="modal" data-bs-target="#">
										<span class="text-button-sm">Avanti</span>
										<svg class="icon icon-white icon-sm" aria-hidden="true">
											<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-chevron-right"></use>
										</svg>
									</button>
								</nav>
								<div id="alert-message" class="alert alert-success cmp-disclaimer rounded d-none" role="alert">
									<span class="d-inline-block text-uppercase cmp-disclaimer__message">Richiesta salvata con successo</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            @include($view_work.'.disservizi.partials.contatta_comune')
		</main>
@endsection