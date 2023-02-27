<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="cmp-hero">
                <section class="it-hero-wrapper bg-white align-items-start">
                    <div class="it-hero-text-wrapper pt-0 ps-0 pb-4 pb-lg-70">
                        <h1 class="text-black hero-title" data-element="page-name">Vivere il comune</h1>
                        <div class="hero-text">
                            <p>Tutti gli eventi, le iniziative e i luoghi d’interesse per scoprire e vivere il
                                territorio comunale.</p>
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
            <div class="col-lg-6 col-xl-4">
                <!--start card-->
                <x-card-simple tpl="v2">
                    <x-slot name="img_src">../assets/images/eventi-estate.png</x-slot>
                    <x-slot name="title">Un&#x27;estate indimenticabile!!</x-slot>
                    <x-slot name="txt">Una iniziativa di invito alla lettura nel parco della Vittoria, dove verrà
                        presentato il concorso “vivere il comune”</x-slot>
                    <x-slot name="url">#</x-slot>
                    <x-slot name="calendar">26 Agosto 19:00</x-slot>
                    <x-slot name="category">Categoria</x-slot>
                    <x-slot name="url_category">#</x-slot>
                </x-card-simple>
            </div>
            <div class="col-lg-6 col-xl-4">
                <!--start card-->
                <x-card-simple tpl="v2">
                    <x-slot name="img_src">../assets/images/eventi-estate.png</x-slot>
                    <x-slot name="title">Un&#x27;estate indimenticabile!!</x-slot>
                    <x-slot name="txt">Una iniziativa di invito alla lettura nel parco della Vittoria, dove verrà
                        presentato il concorso “vivere il comune”</x-slot>
                    <x-slot name="url">#</x-slot>
                    <x-slot name="calendar">26 Agosto</x-slot>
                    <x-slot name="category">Categoria</x-slot>
                    <x-slot name="url_category">#</x-slot>
                    <x-slot name="date">18 MAG 2018</x-slot>
                </x-card-simple>
            </div>
            <!--end card-->
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
            <x-card-simple tpl="v2">
                <x-slot name="img_src">../assets/images/eventi-estate.png</x-slot>
                <x-slot name="title">Un&#x27;estate indimenticabile!!</x-slot>
                <x-slot name="txt">Una iniziativa di invito alla lettura nel parco della Vittoria, dove verrà
                    presentato il concorso “vivere il comune”</x-slot>
                <x-slot name="url">#</x-slot>
                <x-slot name="category">Categoria</x-slot>
                <x-slot name="url_category">#</x-slot>
                <x-slot name="date">15 Ottobre 2022</x-slot>
            </x-card-simple>
        </div>

        <!--end card-->
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary px-5 py-3 full-mb">
                <span class="">Tutti i luoghi</span>
            </button>
        </div>
    </div>
</div>
