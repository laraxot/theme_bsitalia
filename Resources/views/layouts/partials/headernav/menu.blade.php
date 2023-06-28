<div class="it-header-navbar-wrapper" id="header-nav-wrapper">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <!--start nav-->
              <nav class="navbar navbar-expand-lg has-megamenu" aria-label="Navigazione principale">
                  <button class="custom-navbar-toggler" type="button" aria-controls="nav4" aria-expanded="false"
                      aria-label="Mostra/Nascondi la navigazione" data-bs-target="#nav4"
                      data-bs-toggle="navbarcollapsible" role="navigation">
                      <svg class="icon">
                          <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-burger"></use>
                      </svg>
                  </button>
                  <div class="navbar-collapsable" id="nav4">
                      <div class="overlay" style="display: none;"></div>
                      <div class="close-div">
                          <button class="btn close-menu" type="button">
                              <span class="visually-hidden">Nascondi la navigazione</span>
                              <svg class="icon">
                                  <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-close-big"></use>
                              </svg>
                          </button>
                      </div>
                      <div class="menu-wrapper">
                          <a href="#" aria-label="home {{config('metatag.title','Titolo')}}" class="logo-hamburger">
                              {{--<svg class="icon" aria-hidden="true">
                                  <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-pa"></use>
                              </svg>--}}
                              <img src="{{config('metatag.logo_img','#')}}">
                              <div class="it-brand-text">
                                  <div class="it-brand-title">{{config('metatag.title','Titolo')}}</div>
                              </div>
                          </a>



                          {{-- dddx($_theme->getMenuItemsByName('rhc')) --}}

                          <ul class="navbar-nav" data-element="main-navigation">
                              @foreach ($_theme->getMenuItemsByName('rhc') as $item)
                                  @php
                                      $subitems = $item->getsons($item->id);
                                      //dddx($subitems);
                                  @endphp

                                  @if ($subitems->count() > 0)
                                      <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" role="button"
                                              data-bs-toggle="dropdown" aria-expanded="false">
                                              {{ $item->label }}
                                          </a>
                                          <ul class="dropdown-menu">
                                              @foreach ($subitems as $subitem)
                                                  <li><a class="dropdown-item"
                                                          href="{{$subitem->link}}">{{ $subitem->label }}</a></li>
                                              @endforeach
                                          </ul>
                                      </li>
                                  @else
                                      <li class="nav-item">
                                          <a class="nav-link {{-- active --}}" href="#"
                                              data-element="management">
                                              <span>{{ $item->label }}</span>
                                          </a>
                                      </li>
                                  @endif
                              @endforeach
                          </ul>


                         {{-- Disabilitato temporaneamente. Bisogna fare settaggio
                           <ul class="navbar-nav navbar-secondary">
                              <li class="nav-item">
                                  <a class="nav-link" href="#">Iscrizioni</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#">Estate in città</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#">Polizia locale</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#" data-element="all-topics">
                                      <span class="fw-bold">Tutti gli argomenti...</span>
                                  </a>
                              </li>
                          </ul>--}}
                          {{--<div class="it-socials">
                              <span>Seguici su</span>
                              <ul>
                                  <li>
                                      <a href="#" target="_blank">
                                          <svg class="icon icon-sm icon-white align-top">
                                              <use
                                                  xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-twitter">
                                              </use>
                                          </svg>
                                          <span class="visually-hidden">Twitter</span></a>
                                  </li>
                                  <li>
                                      <a href="#" target="_blank">
                                          <svg class="icon icon-sm icon-white align-top">
                                              <use
                                                  xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-facebook">
                                              </use>
                                          </svg>
                                          <span class="visually-hidden">Facebook</span></a>
                                  </li>
                                  <li>
                                      <a href="#" target="_blank">
                                          <svg class="icon icon-sm icon-white align-top">
                                              <use
                                                  xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-youtube">
                                              </use>
                                          </svg>
                                          <span class="visually-hidden">YouTube</span></a>
                                  </li>
                                  <li>
                                      <a href="#" target="_blank">
                                          <svg class="icon icon-sm icon-white align-top">
                                              <use
                                                  xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-telegram">
                                              </use>
                                          </svg>
                                          <span class="visually-hidden">Telegram</span></a>
                                  </li>
                                  <li>
                                      <a href="#" target="_blank">
                                          <svg class="icon icon-sm icon-white align-top">
                                              <use
                                                  xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-whatsapp">
                                              </use>
                                          </svg>
                                          <span class="visually-hidden">Whatsapp</span></a>
                                  </li>
                                  <li>
                                      <a href="#" target="_blank">
                                          <svg class="icon icon-sm icon-white align-top">
                                              <use
                                                  xlink:href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-rss">
                                              </use>
                                          </svg>
                                          <span class="visually-hidden">RSS</span></a>
                                  </li>
                              </ul>
                          </div>--}}
                      </div>
                  </div>
              </nav>
          </div>
      </div>
  </div>
</div>
