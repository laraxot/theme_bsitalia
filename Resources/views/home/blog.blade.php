<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-10">
			<div class="cmp-hero">
				<section class="it-hero-wrapper bg-white align-items-start">
					<div class="it-hero-text-wrapper pt-0 ps-0 pb-4 pb-lg-70">
						<h1 class="text-black hero-title" data-element="page-name">Vivere il comune</h1>
						<div class="hero-text">
							<p>Tutti gli eventi, le iniziative e i luoghi d’interesse per scoprire e vivere il territorio comunale.</p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
{{--  
<section class="hero-img mb-20 mb-lg-50">
	<section class="it-hero-wrapper it-hero-small-size cmp-hero-img-small">
		<div class="img-responsive-wrapper">
			<div class="img-responsive">
				<div class="img-wrapper"><img src="../assets/images/roma-colosseo.png" title="titolo immagine" alt="descrizione immagine"></div>
			</div>
		</div>
	</section>
	<p class="title-xsmall cmp-hero-img-small__description">Colosseo, Roma. Foto di Griffin Wooldridge.</p>
</section>
--}}
<div class="bg-grey-dsk py-5">
	<div class="container">
		<h2 class="title-xxlarge mb-4">Eventi in evidenza</h2>
		<div class="row g-4">
			@php
				//dddx($_theme->getFeaturedArticles()->last()->title);
			@endphp
			@foreach ($_theme->getFeaturedArticles() as $article)
				@php
					//dddx($article->title);
				@endphp
				<div class="col-lg-6 col-xl-4">
					<!--start card-->
						<x-card-simple type="v2">
							<x-slot name="img_src">../assets/images/eventi-estate.png</x-slot>
							<x-slot name="title">aaaa</x-slot>
							<x-slot name="txt">Una iniziativa di invito alla lettura nel parco della Vittoria, dove verrà presentato il concorso “vivere il comune”</x-slot>
							<x-slot name="url">#</x-slot>
						</x-card-simple>
				</div>
			@endforeach
			<div class="d-flex justify-content-end">
				<button type="button" class="btn btn-primary px-5 py-3 full-mb">
				<span class="">Tutti gli eventi</span>
				</button>
			</div>
		</div>
	</div>
</div>
<div class="container p-3 p-md-5">
	<h2 class="title-xxlarge mb-40">Luoghi in evidenza</h2>
	<div class="row g-4">
		<div class="col-lg-6 col-xl-4">
			<!--start card-->
			<div class="card-wrapper shadow-sm rounded cmp-list-card-img">
				<div class="card card-img no-after rounded">
					<div class="img-responsive-wrapper cmp-list-card-img__wrapper">
						<div class="img-responsive img-responsive-panoramic h-100">
							<figure class="img-wrapper">
								<img class="rounded-top img-fluid" src="../assets/images/luoghi-castello-1.png" title="titolo immagine" alt="descrizione immagine">
							</figure>
						</div>
					</div>
					<div class="card-body">
						<div class="category-top cmp-list-card-img__body">
							<a class="text-decoration-none fw-bold cmp-list-card-img__body-heading-title" href="#">Categoria</a>
						</div>
						<h3 class="cmp-list-card-img__body-title"><a href="#" class="text-decoration-none">Il castello normanno</a></h3>
						<p class="cmp-list-card-img__body-description">Sorta a metà Seicento come residenza di caccia di Carlo Emanuele II, che fece del centrale Salone di Diana uno snodo ideale fra palazzo e giardini.</p>
						<a class="read-more t-primary text-uppercase cmp-list-card-img__body-link" href="#" aria-label="Leggi di più sulla pagina di Il castello normanno">
							<span class="text">Leggi di più</span>
							<span class="visually-hidden">su Lorem ipsum dolor sit amet, consectetur adipiscing elit…</span>
							<svg class="icon icon-primary icon-xs ml-10">
								<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right"></use>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-xl-4">
			<!--start card-->
			<div class="card-wrapper shadow-sm rounded cmp-list-card-img">
				<div class="card card-img no-after rounded">
					<div class="img-responsive-wrapper cmp-list-card-img__wrapper">
						<div class="img-responsive img-responsive-panoramic h-100">
							<figure class="img-wrapper">
								<img class="rounded-top img-fluid" src="../assets/images/luoghi-castello-2.png" title="titolo immagine" alt="descrizione immagine">
							</figure>
						</div>
					</div>
					<div class="card-body">
						<div class="category-top cmp-list-card-img__body">
							<a class="text-decoration-none fw-bold cmp-list-card-img__body-heading-title" href="#">Categoria</a>
						</div>
						<h3 class="cmp-list-card-img__body-title"><a href="#" class="text-decoration-none">Il castello normanno</a></h3>
						<p class="cmp-list-card-img__body-description">Scopri il programma degli eventi dell’estate, fra feste, cultura, attività all’aperto e momenti di socializzazione.</p>
						<a class="read-more t-primary text-uppercase cmp-list-card-img__body-link" href="#" aria-label="Leggi di più sulla pagina di Il castello normanno">
							<span class="text">Leggi di più</span>
							<span class="visually-hidden">su Lorem ipsum dolor sit amet, consectetur adipiscing elit…</span>
							<svg class="icon icon-primary icon-xs ml-10">
								<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right"></use>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-xl-4">
			<!--start card-->
			<div class="card-wrapper shadow-sm rounded cmp-list-card-img">
				<div class="card card-img no-after rounded">
					<div class="img-responsive-wrapper cmp-list-card-img__wrapper">
						<div class="img-responsive img-responsive-panoramic h-100">
							<figure class="img-wrapper">
								<img class="rounded-top img-fluid" src="../assets/images/luoghi-castello-3.png" title="titolo immagine" alt="descrizione immagine">
							</figure>
						</div>
					</div>
					<div class="card-body">
						<div class="category-top cmp-list-card-img__body">
							<a class="text-decoration-none fw-bold cmp-list-card-img__body-heading-title" href="#">Categoria</a>
						</div>
						<h3 class="cmp-list-card-img__body-title"><a href="#" class="text-decoration-none">Il castello normanno</a></h3>
						<p class="cmp-list-card-img__body-description">Scopri il programma degli eventi dell’estate, fra feste, cultura, attività all’aperto e momenti di socializzazione.</p>
						<a class="read-more t-primary text-uppercase cmp-list-card-img__body-link" href="#" aria-label="Leggi di più sulla pagina di Il castello normanno">
							<span class="text">Leggi di più</span>
							<span class="visually-hidden">su Lorem ipsum dolor sit amet, consectetur adipiscing elit…</span>
							<svg class="icon icon-primary icon-xs ml-10">
								<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right"></use>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-xl-4">
			<!--start card-->
			<div class="card-wrapper shadow-sm rounded cmp-list-card-img">
				<div class="card card-img no-after rounded">
					<div class="img-responsive-wrapper cmp-list-card-img__wrapper">
						<div class="img-responsive img-responsive-panoramic h-100">
							<figure class="img-wrapper">
								<img class="rounded-top img-fluid" src="../assets/images/luoghi-gipsoteca.png" title="titolo immagine" alt="descrizione immagine">
							</figure>
						</div>
					</div>
					<div class="card-body">
						<div class="category-top cmp-list-card-img__body">
							<a class="text-decoration-none fw-bold cmp-list-card-img__body-heading-title" href="#">Categoria</a>
							<span class="data">18 MAG 2018</span>
						</div>
						<h3 class="cmp-list-card-img__body-title"><a href="#" class="text-decoration-none">La Gipsoteca canoviana</a></h3>
						<p class="cmp-list-card-img__body-description">Il complesso è situato a Possagno e contiene i modelli in gesso e i bozzetti in argilla dello scultore neoclassico Antonio Canova.</p>
						<a class="read-more t-primary text-uppercase cmp-list-card-img__body-link" href="#" aria-label="Leggi di più sulla pagina di La Gipsoteca canoviana">
							<span class="text">Leggi di più</span>
							<span class="visually-hidden">su Lorem ipsum dolor sit amet, consectetur adipiscing elit…</span>
							<svg class="icon icon-primary icon-xs ml-10">
								<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right"></use>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-xl-4">
			<!--start card-->
			<div class="card-wrapper shadow-sm rounded cmp-list-card-img">
				<div class="card card-img no-after rounded">
					<div class="img-responsive-wrapper cmp-list-card-img__wrapper">
						<div class="img-responsive img-responsive-panoramic h-100">
							<figure class="img-wrapper">
								<img class="rounded-top img-fluid" src="../assets/images/luoghi-tomba.png" title="titolo immagine" alt="descrizione immagine">
							</figure>
						</div>
					</div>
					<div class="card-body">
						<div class="category-top cmp-list-card-img__body">
							<a class="text-decoration-none fw-bold cmp-list-card-img__body-heading-title" href="#">Categoria</a>
						</div>
						<h3 class="cmp-list-card-img__body-title"><a href="#" class="text-decoration-none">Tomba Brion</a></h3>
						<p class="cmp-list-card-img__body-description">La Tomba Brion si trova in via Brioni a San Vito di Altivole. Luogo estremamente affascinante e carico di simbologia, si può raggiungere solamente in auto. </p>
						<a class="read-more t-primary text-uppercase cmp-list-card-img__body-link" href="#" aria-label="Leggi di più sulla pagina di Tomba Brion">
							<span class="text">Leggi di più</span>
							<span class="visually-hidden">su Lorem ipsum dolor sit amet, consectetur adipiscing elit…</span>
							<svg class="icon icon-primary icon-xs ml-10">
								<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right"></use>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-xl-4">
			<!--start card-->
			<div class="card-wrapper shadow-sm rounded cmp-list-card-img">
				<div class="card card-img no-after rounded">
					<div class="img-responsive-wrapper cmp-list-card-img__wrapper">
						<div class="img-responsive img-responsive-panoramic h-100">
							<figure class="img-wrapper">
								<img class="rounded-top img-fluid" src="../assets/images/luoghi-castello-4.png" title="titolo immagine" alt="descrizione immagine">
							</figure>
						</div>
					</div>
					<div class="card-body">
						<div class="category-top cmp-list-card-img__body">
							<a class="text-decoration-none fw-bold cmp-list-card-img__body-heading-title" href="#">Categoria</a>
						</div>
						<h3 class="cmp-list-card-img__body-title"><a href="#" class="text-decoration-none">Il castello normanno</a></h3>
						<p class="cmp-list-card-img__body-description">Scopri il programma degli eventi dell’estate, fra feste, cultura, attività all’aperto e momenti di socializzazione.</p>
						<a class="read-more t-primary text-uppercase cmp-list-card-img__body-link" href="#" aria-label="Leggi di più sulla pagina di Il castello normanno">
							<span class="text">Leggi di più</span>
							<span class="visually-hidden">su Lorem ipsum dolor sit amet, consectetur adipiscing elit…</span>
							<svg class="icon icon-primary icon-xs ml-10">
								<use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-arrow-right"></use>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--end card-->
		<div class="d-flex justify-content-end">
			<button type="button" class="btn btn-primary px-5 py-3 full-mb">
			<span class="">Tutti i luoghi</span>
			</button>
		</div>
	</div>
</div>