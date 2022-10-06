{{-- 
{{#>base/base title="Vivere il comune - Nome del Comune" headerActive4=true}}
--}}
@extends('pub_theme::layouts.app',['title'=>"Vivere il comune - Nome del Comune",'headerActive4'=>true])
@section('content')
  <main>
    <div class="container" id="main-container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          {{--  
          {{> cmp-breadcrumbs/cmp-breadcrumbs link2="Home" link3="Vivere il comune" }}
          --}}
            <x-breadcrumb.rows :rows="$_theme->getBreads()" />
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          {{--  
          {{>cmp-hero/cmp-hero hero-title="Vivere il comune" hero-text="Tutti gli eventi, le iniziative e i luoghi
        d’interesse per scoprire e vivere il territorio comunale." wrapper-class="pt-0 ps-0 pb-4 pb-lg-70"}}
          --}}
            <x-hero type="hero">
                <x-slot:wrapper class="pt-0 ps-0 pb-4 pb-lg-70">AA</x-slot>
                <x-slot name="title">Vivere il comune</x-slot>
                <x-slot name="txt">Tutti gli eventi, le iniziative e i luoghi d’interesse per scoprire e vivere il territorio comunale</x-slot>
            </x-hero>
        </div>
      </div>
    </div>

    <section class="hero-img mb-20 mb-lg-50">
      {{--  
      {{>cmp-hero-img/cmp-hero-img-small description="Colosseo, Roma. Foto di Griffin Wooldridge." img-path="roma-colosseo.png"}}
      --}}
      <x-hero type="img-small">
          <x-slot name="txt">Colosseo, Roma. Foto di Griffin Wooldridge.</x-slot>
          <x-slot name="img_src">roma-colosseo.png</x-slot>
      </x-hero>
    </section>

    <div class="bg-grey-dsk py-5">
      <div class="container">
        <h2 class="title-xxlarge mb-4">Eventi in evidenza</h2>
        {{--
        {{>cmp-list-card-img/cmp-list-card-img cards=cards.card-events label="Tutti gli eventi" buttonNext=true}}
        --}}
        <x-card.rows type="img" :rows="$_theme->getCardEvents()" buttonNext=true label="Tutti gli eventi"></x-card.rows>
      </div>
    </div>

    <div class="container p-3 p-md-5">
      <h2 class="title-xxlarge mb-40 ">Luoghi in evidenza</h2>
      {{--
      {{>cmp-list-card-img/cmp-list-card-img cards=cards.card-places label="Tutti i luoghi" buttonNext=true}}
      --}}
      <x-card.rows type="img" :rows="$_theme->getCardPlaces()" buttonNext=true label="Tutti i luoghi"></x-card.rows>
    </div>

    <div class="bg-primary">
      <div class="container">
        <div class="row d-flex justify-content-center bg-primary">
          <div class="col-12 col-lg-6">
            {{--
            {{>cmp-rating/cmp-rating public-template=true}}
            --}}
            <x-rating public-template=true ></x-rating>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-grey-card shadow-contacts">
      <div class="container">
        <div class="row d-flex justify-content-center p-contacts">
          <div class="col-12 col-lg-6">
            {{--
            {{>cmp-contacts/cmp-contacts city-problems=true}}
            --}}
            <x-contacts></x-contacts>

          </div>
        </div>
      </div>
    </div>
  </main>
  {{-- 
  {{/base/base }}
   --}}
   @endsection
