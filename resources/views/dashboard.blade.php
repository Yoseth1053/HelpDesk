@include('layouts.app')
@section('head')

@endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <br>
    <div class="card-header" style="background-color: #33A2C5;">
    <h1 style="text-align: center; color:white;"><i class="fas fa-home"></i><b>
                            <font face="nirvana">Dashboard</font>
                        </b> </h1>
    </div>
    <br>
    <br>
    <br>
    <link href="{{ asset('css/styleCards.css') }}" rel="stylesheet" />

        
        <section class="card-area" >

            

            <!-- Card: Beach -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--beach">
                                               <h2 class="card-front__heading">
                                                   Territorium
                                               </h2>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--beach">
                                        Ver Mas
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                            <a class="navbar-brand ps-3"><img style="align-items: center;" src="{{ asset('img/Territorium.png') }}" width="220" height="200">
                    </a>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--beach">
                                Territorium
                            </h3>
                            <p class="inside-page__text">
                               Plataforma Sena para la gestion de evidencias.
                            </p>
                            <a href="https://sena.territorio.la/index.php?login=true" class="inside-page__btn inside-page__btn--beach">Visitar</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Camping -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--camping">
                                    
                                               <h2 class="card-front__heading">
                                                   Sena Sofia Plus
                                               </h2>
                                               
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--camping">
                                        Ver Mas
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                            <a class="navbar-brand ps-3"><img style="align-items: center;" src="{{ asset('img/SofiaPlus.png') }}" width="230" height="220">
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--camping">
                                Sena Sofia Plus
                            </h3>
                            <p class="inside-page__text">
                               Plataforma Sena para inscripciones.
                            </p>
                            <a style="font-size: 95%;" href="https://oferta.senasofiaplus.edu.co/sofia-oferta/" class="inside-page__btn inside-page__btn--camping">Visitar</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        

@include('layouts.footer')
