  <main>
    <div class="container" id="main-container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
        <x-breadcrumb.rows type="v2" :rows="collect([])">
            <x-slot name="class"></x-slot>
        </x-breadcrumb>
          {{-- {{> cmp-breadcrumbs/cmp-breadcrumbs link2="Home" link3="Vivere il comune" }} --}}
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <x-hero>
            <x-slot name="title">Vivere il comune</x-slot>
            <x-slot name="txt">Tutti gli eventi, le iniziative e i luoghi
              d’interesse per scoprire e vivere il territorio comunale.</x-slot>
            <x-slot name="wrapper" class="pt-0 ps-0 pb-4 pb-lg-70"></x-slot>
            
          </x-hero>
          {{-- {{>cmp-hero/cmp-hero hero-title="Vivere il comune" 
          hero-text="Tutti gli eventi, le iniziative e i luoghi
        d’interesse per scoprire e vivere il territorio comunale." 
        wrapper-class="pt-0 ps-0 pb-4 pb-lg-70"}} --}}
        </div>
      </div>
    </div>

    <section class="hero-img mb-20 mb-lg-50">
      <x-hero type="img_small">
        <x-slot name="txt">Colosseo, Roma. Foto di Griffin Wooldridge.</x-slot>
        <x-slot name="img_path">roma-colosseo.png</x-slot>
      </x-hero>
      {{-- {{>cmp-hero-img/cmp-hero-img-small description="Colosseo, Roma. Foto di Griffin Wooldridge." img-path="roma-colosseo.png"}} --}}
    </section>

    <div class="bg-grey-dsk py-5">
      <div class="container">
        <h2 class="title-xxlarge mb-4">Eventi in evidenza</h2>
        <x-card.rows type="list_img" :rows="collect([])" label="Tutti gli eventi" buttonNext="true">
        </x-card>
        {{-- {{>cmp-list-card-img/cmp-list-card-img cards=cards.card-events label="Tutti gli eventi" buttonNext=true}} --}}
      </div>
    </div>

    <div class="container p-3 p-md-5">
      <h2 class="title-xxlarge mb-40 ">Luoghi in evidenza</h2>
      <x-card.rows type="list_img" :rows="collect([])" label="Tutti i luoghi" buttonNext="true">
      </x-card>
      {{-- {{>cmp-list-card-img/cmp-list-card-img cards=cards.card-places label="Tutti i luoghi" buttonNext=true}} --}}
    </div>

    <div class="bg-primary">
      <div class="container">
        <div class="row d-flex justify-content-center bg-primary">
          <div class="col-12 col-lg-6">
            <x-rating public_template="true"></x-rating>
            {{-- {{>cmp-rating/cmp-rating public-template=true}} --}}
          </div>
        </div>
      </div>
    </div>

    <div class="bg-grey-card shadow-contacts">
      <div class="container">
        <div class="row d-flex justify-content-center p-contacts">
          <div class="col-12 col-lg-6">
            <x-contacts city_problems="true"></x-contacts>
            {{-- {{>cmp-contacts/cmp-contacts city-problems=true}} --}}
          </div>
        </div>
      </div>
    </div>
  </main>
  