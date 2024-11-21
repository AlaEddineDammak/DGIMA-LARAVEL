@extends('layout.master')


@section('content')
        <!--=================================
    inner-header -->
    <section class="inner-banner bg-overlay-black-70" style="background-image: url('images/bg/08.jpg');">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1 class="text-white">Actualities</h1>
                    </div>
                    <div class="d-flex justify-content-center ">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item active"><span>Actualities</span></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    inner-header -->

    <!--=================================
    Course item -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                
                <style>
                    .card-wrapper {
                        border: 1px solid #ccc; /* Bordure grise */
                        border-radius: 10px; /* Rayon de bordure */
                        overflow: hidden; /* Pour couper le contenu débordant */
                        width: 100%; /* Ajout pour forcer la largeur à 100% */
                        height: 100%; /* Ajout pour forcer la hauteur à 100% */
                    }
                
                    .card-content {
                        padding: 20px; /* Marge intérieure */
                    }
                
                    .see-more {
                        background-color: #a61d37; /* Couleur de fond rouge */
                        color: #fff; /* Couleur du texte blanc */
                        border: none; /* Pas de bordure */
                        padding: 10px 20px; /* Remplissage */
                        border-radius: 5px; /* Rayon de bordure */
                        cursor: pointer; /* Curseur de pointeur */
                        transition: background-color 0.3s ease; /* Transition en douceur pour la couleur de fond */
                        display: block; /* Pour centrer le bouton */
                        margin: 0 auto; /* Pour centrer le bouton */
                    }
                
                    .see-more:hover {
                        background-color: #eb4d6a; /* Changement de couleur de fond au survol */
                    }
                </style>
                
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-3">
                        @foreach ($actuality as $item)
                        <div class="col mb-4">
                            <!-- item START -->
                            <div class="card-wrapper">
                                <img class="card-img" src="{{url($item->image)}}" alt="banner">
                                <div class="card-content">
                                    <span class="date">{{$item->type}}</span>
                                    <h3 class="card-title">{{$item->title}}</h3>
                                    <p class="description">{{$item->description}}</p>
                                </div>
                                <button class="see-more">Voir plus <span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"></path>
                                    </svg>
                                </span>
                                </button>
                            </div>
                            <!-- item End -->
                        </div>
                        @endforeach
                    </div>
                </div>
                
                </div>
                
            </div>
            
        </div>
    </section>
    <!--=================================
    Course item -->
@endsection