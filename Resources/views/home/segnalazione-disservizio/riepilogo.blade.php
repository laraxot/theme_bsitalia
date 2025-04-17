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
						<div class="cmp-info-progress d-flex" data-progress="">
							<!-- Desktop -->
							<div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end completed">
								<div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
									<span class="d-block h-100 title-medium text-uppercase">Autorizzazioni e condizioni</span>
									<svg class="d-block icon icon-primary icon-sm" aria-hidden="true">
										<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-check"></use>
									</svg>
								</div>
							</div>
							<!-- Desktop -->
							<div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end completed">
								<div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
									<span class="d-block h-100 title-medium text-uppercase">Dati di segnalazione</span>
									<svg class="d-block icon icon-primary icon-sm" aria-hidden="true">
										<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-check"></use>
									</svg>
								</div>
							</div>
							<!-- Desktop -->
							<div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end step-active">
								<div class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
									<span class="d-block h-100 title-medium text-uppercase">Riepilogo</span>
								</div>
							</div>
							<!-- Mobile -->
							<div class="iscrizioni-header d-lg-none w-100">
								<h4 class="step-title d-flex align-items-center justify-content-between drop-shadow">
									<span class="d-block d-lg-inline">
									Riepilogo
									</span>
									<span class="step">3/3</span>
								</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-12 col-lg-8">
						<div class="callout callout-highlight ps-3 warning">
							<div class="callout-title mb-20 d-flex align-items-center">
								<svg class="icon icon-sm" aria-hidden="true">
									<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-horn"></use>
								</svg>
								<span>Attenzione</span>
							</div>
							<p class="titillium text-paragraph">Le informazioni che hai fornito hanno valore di dichiarazione.<span class="d-lg-block"> Verifica
								che siano corrette.</span>
							</p>
						</div>
						<h2 class="title-xxlarge mb-4 mt-40">Segnalazione</h2>
						<div class="cmp-card mb-4">
							<div class="card has-bkg-grey shadow-sm mb-0">
								<div class="card-header border-0 p-0 mb-lg-30 m-0">
									<div class="d-flex">
										<h3 class="subtitle-large mb-4">Disservizio</h3>
									</div>
								</div>
								<div class="card-body p-0">
									<div class="cmp-info-summary bg-white p-3 p-lg-4">
										<div class="card">
											<div class="card-header border-bottom border-light p-0 mb-0 pb-2 d-flex justify-content-end">
												<a href="#" class="text-decoration-none"><span class="text-button-sm-semi t-primary">Modifica</span></a>
											</div>
											<div class="card-body p-0">
												<div class="single-line-info border-light">
													<div class="text-paragraph-small">Indirizzo</div>
													<div class="border-light">
														<p class="data-text">
															Via Solferino - 50100 Firenze (FI)
														</p>
													</div>
												</div>
												<div class="single-line-info border-light">
													<div class="text-paragraph-small">Tipo di disservizio</div>
													<div class="border-light">
														<p class="data-text">
															Danneggiamento proprietà pubblica
														</p>
													</div>
												</div>
												<div class="single-line-info border-light">
													<div class="text-paragraph-small">Titolo</div>
													<div class="border-light">
														<p class="data-text">
															Panchina danneggiata
														</p>
													</div>
												</div>
												<div class="single-line-info border-light">
													<div class="text-paragraph-small">Dettagli</div>
													<div class="border-light">
														<p class="data-text">
															La seduta della panchina risulta inutilizzabile e pericolosa dato che ci sono molte schegge e parti appuntite
														</p>
													</div>
												</div>
												<div class="single-line-info border-light">
													<div class="text-paragraph-small">Immagini</div>
													<div class="border-light">
														<p class="data-text">
															6yhakandsahm413d8da.jpg
														</p>
													</div>
												</div>
											</div>
											<div class="card-footer p-0">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<h2 class="title-xxlarge mb-4 mt-40">Dati Generali</h2>
						<div class="cmp-card mb-4">
							<div class="card has-bkg-grey shadow-sm mb-0">
								<div class="card-header border-0 p-0 mb-lg-30 m-0">
									<div class="d-flex">
										<h3 class="subtitle-large mb-4">Autore della segnalazione</h3>
									</div>
								</div>
								<div class="card-body p-0">
									<div class="cmp-info-summary bg-white mb-4 mb-lg-30 p-3 p-lg-4">
										<div class="card">
											<div class="card-header border-bottom border-light p-0 mb-0 d-flex justify-content-between d-flex justify-content-end">
												<h3 class="title-large-semi-bold mb-3">Giulia Bianchi</h3>
											</div>
											<div class="card-body p-0">
												<div class="single-line-info border-light">
													<div class="text-paragraph-small">Codice Fiscale</div>
													<div class="border-light">
														<p class="data-text">
															GLABNC72H25H501Y
														</p>
													</div>
												</div>
											</div>
											<div class="card-footer p-0 d-none">
											</div>
										</div>
									</div>
									<div class="cmp-info-summary bg-white p-3 p-lg-4">
										<div class="card">
											<div class="card-header border-bottom border-light p-0 mb-0 d-flex justify-content-between d-flex justify-content-end">
												<h3 class="title-large-semi-bold mb-3">Contatti</h3>
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
															giulia.bianchi@gmail.com
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
								<button type="button" class="btn btn-primary btn-sm steppers-btn-confirm send" data-bs-toggle="modal" data-bs-target="#modal-terms">
								<span class="text-button-sm">Invia</span>
								</button>
							</nav>
							<div id="alert-message" class="alert alert-success cmp-disclaimer rounded d-none" role="alert">
								<span class="d-inline-block text-uppercase cmp-disclaimer__message">Richiesta salvata con successo</span>
							</div>
						</div>
					</div>
				</div>
			</div>

            @include($view_work.'.disservizi.partials.contatta_comune')
    
            
            <div class="cmp-modal">
				<div class="modal fade" tabindex="-1" role="dialog" id="modal-terms" aria-labelledby="modal-terms-modal-title">
					<div class="modal-dialog modal-dialog-centered small" role="document">
						<div class="modal-content modal-dimensions">
							<div class="cmp-modal__header modal-header pb-0">
								<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Chiudi finestra modale">
								</button>
								<h2 class="cmp-modal__header-title title-mini" id="modal-terms-modal-title">Termini e condizioni</h2>
								<p class="cmp-modal__header-info header-font">Cliccando su Conferma e invia confermi di aver preso visione dei termini e delle condizioni di servizio.</p>
								<a href="#" class="cmp-modal__header-link text-success underline mt-1">Leggi termini e condizioni</a>
							</div>
							<div class="modal-body">
							</div>
							<div class="modal-footer pb-70 pt-0">
								<button class="btn btn-primary w-100 mx-0 fw-bold mb-4" type="submit" data-bs-toggle="modal" data-bs-target="#" form="">Conferma e invia</button>
								<button class="btn btn-outline-primary w-100 mx-0" data-bs-dismiss="modal fw-bold" type="button">Annulla</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

@endsection