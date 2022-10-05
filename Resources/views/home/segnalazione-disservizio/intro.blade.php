@extends('pub_theme::layouts.app')
@section('content')
	<main>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					@include($view_work.'.disservizi.partials.header')
				</div>
				<hr class="d-none d-lg-block mb-0 mt-2">
			</div>
		</div>
		<div class="container">
			@include($view_work.'.disservizi.partials.content')
		</div>
		<div class="bg-primary">
			<div class="container">
				<div class="row d-flex justify-content-center bg-primary">
					<div class="col-12 col-lg-6 p-lg-0 px-4">
						<div class="cmp-rating pt-lg-80 pb-lg-80" id="">
							<div class="card shadow card-wrapper" data-element="feedback">
								<div class="cmp-rating__card-first">
									<div class="card-header border-0">
										<h2 class="title-medium-2-semi-bold mb-0">Quanto è stato facile usare questo servizio?</h2>
									</div>
									<div class="card-body">
										<fieldset class="rating">
											<legend class="visually-hidden">Valuta da 1 a 5 stelle la pagina</legend>
											<input type="radio" id="star5a" name="ratingA" value="5">
											<label class="full rating-star active" for="star5a">
												<svg class="icon icon-sm" role="img" aria-labelledby="first-star" viewBox="0 0 24 24" id="it-star-full" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 1.7L9.5 9.2H1.6L8 13.9l-2.4 7.6 6.4-4.7 6.4 4.7-2.4-7.6 6.4-4.7h-7.9L12 1.7z"/>
													<path fill="none" d="M0 0h24v24H0z"/>
												</svg>
												<span class="visually-hidden" id="first-star">Valuta 5 stelle su 5</span>
											</label>
											<input type="radio" id="star4a" name="ratingA" value="4">
											<label class="full rating-star active" for="star4a">
												<svg class="icon icon-sm" role="img" aria-labelledby="second-star" viewBox="0 0 24 24" id="it-star-full" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 1.7L9.5 9.2H1.6L8 13.9l-2.4 7.6 6.4-4.7 6.4 4.7-2.4-7.6 6.4-4.7h-7.9L12 1.7z"/>
													<path fill="none" d="M0 0h24v24H0z"/>
												</svg>
												<span class="visually-hidden" id="second-star">Valuta 4 stelle su 5</span>
											</label>
											<input type="radio" id="star3a" name="ratingA" value="3">
											<label class="full rating-star active" for="star3a">
												<svg class="icon icon-sm" role="img" aria-labelledby="third-star" viewBox="0 0 24 24" id="it-star-full" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 1.7L9.5 9.2H1.6L8 13.9l-2.4 7.6 6.4-4.7 6.4 4.7-2.4-7.6 6.4-4.7h-7.9L12 1.7z"/>
													<path fill="none" d="M0 0h24v24H0z"/>
												</svg>
												<span class="visually-hidden" id="third-star">Valuta 3 stelle su 5</span>
											</label>
											<input type="radio" id="star2a" name="ratingA" value="2">
											<label class="full rating-star active" for="star2a">
												<svg class="icon icon-sm" role="img" aria-labelledby="fourth-star" viewBox="0 0 24 24" id="it-star-full" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 1.7L9.5 9.2H1.6L8 13.9l-2.4 7.6 6.4-4.7 6.4 4.7-2.4-7.6 6.4-4.7h-7.9L12 1.7z"/>
													<path fill="none" d="M0 0h24v24H0z"/>
												</svg>
												<span class="visually-hidden" id="fourth-star">Valuta 2 stelle su 5</span>
											</label>
											<input type="radio" id="star1a" name="ratingA" value="1">
											<label class="full rating-star active" for="star1a">
												<svg class="icon icon-sm" role="img" aria-labelledby="fifth-star" viewBox="0 0 24 24" id="it-star-full" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 1.7L9.5 9.2H1.6L8 13.9l-2.4 7.6 6.4-4.7 6.4 4.7-2.4-7.6 6.4-4.7h-7.9L12 1.7z"/>
													<path fill="none" d="M0 0h24v24H0z"/>
												</svg>
												<span class="visually-hidden" id="fifth-star">Valuta 1 stelle su 5</span>
											</label>
										</fieldset>
									</div>
								</div>
								<div class="cmp-rating__card-second d-none" data-step="3">
									<div class="card-header border-0 mb-0">
										<h2 class="title-medium-2-bold mb-0" id="rating-feedback">Grazie, il tuo parere ci aiuterà a migliorare il
											servizio!
										</h2>
									</div>
								</div>
								<div class="form-rating d-none">
									<div class="d-none" data-step="1">
										<div class="cmp-steps-rating">
											<fieldset class="fieldset-rating-one d-none">
												<div class="iscrizioni-header w-100">
													<h3 class="step-title d-flex align-items-center justify-content-between drop-shadow">
														<legend class="d-block d-lg-inline">
															Quali sono stati gli aspetti che hai preferito?
														</legend>
														<span class="step">1/2</span>
													</h3>
												</div>
												<div class="cmp-steps-rating__body">
													<div class="cmp-radio-list">
														<div class="card card-teaser shadow-rating">
															<div class="card-body">
																<div class="form-check m-0">
																	<div class="radio-body border-bottom border-light cmp-radio-list__item">
																		<input name="rating1" type="radio" id="radio-1">
																		<label for="radio-1" class="active">Le indicazioni erano chiare</label>
																	</div>
																	<div class="radio-body border-bottom border-light cmp-radio-list__item">
																		<input name="rating1" type="radio" id="radio-2">
																		<label for="radio-2" class="active">Le indicazioni erano complete</label>
																	</div>
																	<div class="radio-body border-bottom border-light cmp-radio-list__item">
																		<input name="rating1" type="radio" id="radio-3">
																		<label for="radio-3" class="active">Capivo sempre che stavo procedendo correttamente</label>
																	</div>
																	<div class="radio-body border-bottom border-light cmp-radio-list__item">
																		<input name="rating1" type="radio" id="radio-4">
																		<label for="radio-4" class="active">Non ho avuto problemi tecnici</label>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</fieldset>
											<fieldset class="fieldset-rating-two d-none">
												<div class="iscrizioni-header w-100">
													<h3 class="step-title d-flex align-items-center justify-content-between drop-shadow">
														<legend class="d-block d-lg-inline">
															Dove hai incontrato le maggiori difficoltà?
														</legend>
														<span class="step">1/2</span>
													</h3>
												</div>
												<div class="cmp-steps-rating__body">
													<div class="cmp-radio-list">
														<div class="card card-teaser shadow-rating">
															<div class="card-body">
																<div class="form-check m-0">
																	<div class="radio-body border-bottom border-light cmp-radio-list__item">
																		<input name="rating2" type="radio" id="radio-5">
																		<label for="radio-5" class="active">A volte le indicazioni non erano chiare</label>
																	</div>
																	<div class="radio-body border-bottom border-light cmp-radio-list__item">
																		<input name="rating2" type="radio" id="radio-6">
																		<label for="radio-6" class="active">A volte le indicazioni non erano complete</label>
																	</div>
																	<div class="radio-body border-bottom border-light cmp-radio-list__item">
																		<input name="rating2" type="radio" id="radio-7">
																		<label for="radio-7" class="active">A volte non capivo se stavo procedendo correttamente</label>
																	</div>
																	<div class="radio-body border-bottom border-light cmp-radio-list__item">
																		<input name="rating2" type="radio" id="radio-8">
																		<label for="radio-8" class="active">Ho avuto problemi tecnici</label>
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
													<h3 class="step-title d-flex align-items-center justify-content-between drop-shadow mb-3">
														<legend class="d-block d-lg-inline">
															Vuoi aggiungere altri dettagli?
														</legend>
														<span class="step">2/2</span>
													</h3>
												</div>
												<div class="cmp-steps-rating__body">
													<div class="form-group">
														<label for="formGroupExampleInputWithHelp" class="">Dettaglio</label>
														<input type="text" class="form-control" id="formGroupExampleInputWithHelp" aria-describedby="formGroupExampleInputWithHelpDescription" maxlength="200">
														<small id="formGroupExampleInputWithHelpDescription" class="form-text">
														Inserire massimo 200 caratteri</small>
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
																Civici</span></a>
															</li>
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
																scolastica</span></a>
															</li>
															<li><a class="list-item px-0" href="#"><span>Servizio di
																trasporto scolastico</span></a>
															</li>
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
																educativi all'infanzia</span></a>
															</li>
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
																	<span class="show-more d-flex align-items-center">
																		Vedi altri 2
																		<svg class="icon icon-primary icon-md">
																			<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-expand"></use>
																		</svg>
																	</span>
																</a>
																<ul class="collapse" id="collapseExample">
																	<li><a class="list-item px-0" href="#"><span>Servizio di
																		trasporto scolastico</span></a>
																	</li>
																	<li><a class="list-item px-0" href="#"><span>Servizio di
																		trasporto scolastico</span></a>
																	</li>
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
							</span>
						</div>
					</div>
        			@include($view_work.'.disservizi.partials.contatta_comune')
				</div>
			</div>
		</div>
	</main>
@endsection