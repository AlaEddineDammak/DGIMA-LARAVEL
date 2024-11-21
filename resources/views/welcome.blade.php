@extends('layout.master')


@section('content')
    <!--=================================
    Banner -->
    <section class="banner position-ralative">
        <div id="main-slider" class="swiper-container h-800 h-lg-700 h-md-600 h-sm-400">
            <div class="swiper-wrapper">
                <!-- Swiper Slider 1-->
                <div class="swiper-slide align-items-center d-flex bg-overlay-black-40" style="background-image: url(images/bg/01.jpg); background-size: cover; background-position: center center;">
                    <div class="swipeinner container">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-10 col-md-12">
                                <div class="slider-1">
                                    <div class="animated" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">
                                        <h1 class="animated text-white mb-4" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="0.25s">Exceptional Education. Exceptional Value.</h1>
                                        <div class="animated text-white px-lg-5" data-swiper-animation="fadeInUp" data-duration="2.5s" data-delay="0.25s">
                                            <p class="d-none d-sm-block">The first thing to remember about success is that it is a process nothing more, nothing less. There is really no magic to it and it’s not reserved only for a select few people.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Swiper Slider 2-->
                <div class="swiper-slide align-items-center d-flex bg-overlay-black-40" style="background-image: url(images/bg/03.jpg); background-size: cover; background-position: center center;">
                    <div class="swipeinner container">
                        <div class="row justify-content-start">
                            <div class="col-xl-8 col-lg-10 col-md-12">
                                <div class="slider-2">
                                    <div class="animated" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">
                                        <h1 class="animated text-white mb-4" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">The Education You Want. The Attention You Deserve</h1>
                                        <div class="animated text-dark" data-swiper-animation="fadeInUp" data-duration="2.5s" data-delay="0.25s">
                                            <p class="text-white d-none d-sm-block">There are basically six key areas to higher achievement. Some people will tell you there are four while others may tell you there are eight.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <div class="swiper-button-prev text-white"><i class="fa fa-arrow-left"></i></div>
        <div class="swiper-button-next text-white"><i class="fa fa-arrow-right"></i></div>
    </section>
    <!--=================================
    Banner -->

    <!--=================================
    Form -->
    <section class="mt-md-n5 mt-4 position-relative z-index-9">
        <div class="container">
        </div>
    </section>
    <!--=================================
    Form -->

    <!--=================================
    About -->
    <section class="space-ptb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 pr-xl-6">
                    <div class="section-title mb-4">
                        <h2 class="title">Personal Education, Extraordinary Success</h2>
                        <p class="lead mb-0">Commitment is something that comes from understanding that everything has its price and then having the willingness to pay that price.</p>
                    </div>
                    <p class="mb-4 mb-lg-5">The other virtues practice in succession by Franklin were silence, order, resolution, frugality, industry, sincerity, Justice, moderation, cleanliness, tranquility, chastity and humility. For the summary order he followed a little
                        scheme of employing his time each day.</p>
                    <a href="/about" class="btn btn-primary btn-round">Read More</a>
                </div>
                <div class="col-lg-6 pr-lg-5">
                    <div class="row">
                        <div class="col-sm-7">
                            <img class="img-fluid w-100 border-radius" src="images/about/01.jpg" alt="">
                        </div>
                        <div class="col-sm-5 mt-sm-5 mt-4">
                            <img class="img-fluid mb-sm-2 w-100 border-radius" src="images/about/02.jpg" alt="">
                            <div class="position-relative bg-overlay-black-50 border-radius overflow-hidden mt-4">
                                <img class="img-fluid border-radius" src="images/about/03.jpg" alt="image">
                                <a class="btn-animation position-center popup-youtube" href="#">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    About -->

    <!--=================================
    Counter -->
    <section class="space-pb">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="flaticon-team-1"></i>
                        </div>
                        <div class="counter-content">
                            <span class="timer" data-to="+200" data-speed="1000">+200</span>
                            <label>Satisfied Students</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="flaticon-diploma-1"></i>
                        </div>
                        <div class="counter-content align-self-center">
                            <span class="timer" data-to="+75" data-speed="1000">+75</span>
                            <label>Course Completed</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-md-0">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <div class="counter-content">
                            <span class="timer" data-to="30" data-speed="1000">+30</span>
                            <label>Professor</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="flaticon-trophy-1"></i>
                        </div>
                        <div class="counter-content">
                            <span class="timer" data-to="30" data-speed="1000">+30</span>
                            <label>Award Winning</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Counter -->

    <!--=================================
    Action box -->
    <section class="space-ptb bg-overlay-black-80 bg-holder" data-jarallax='{"speed": 0.5}' style="background-image: url(images/bg/09.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <span class="text-white d-block mb-4 h6 font-weight-normal">Are you ready to start your journey with us?</span>
                    <h2 class="text-white mb-4 display-7">Education for Individual and Social Responsibility</h2>
                    <a class="btn btn-primary mr-sm-3 mt-3" href="/cursus">Become A Student</a>
                    <a class="btn btn-white mt-3" href="/about">Discover More</a>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Action box -->
    <!--=================================
    Why choose us -->
    <section class="bg-dark">
        <div class="container-fluid">
            <div class="row no-guuters">
                <div class="col-lg-6 bg-holder d-none d-lg-block" style="background-image: url(images/bg/dgima.jpg);">
                </div>
                <div class="col-lg-6 px-4 px-md-5 px-lg-6 py-6 px-lg-6" style="background-image: url(images/about/pattern.png);">
                    <div class="section-title">
                        <h2 class="title">Why Choose Us</h2>
                        <p class="mb-0">Let success motivate you. Find a picture of what epitomizes success to you and then pull it out when you are in need of motivation.</p>
                    </div>
                    <div class="media">
                        <i class="flaticon-knowledge mr-3 fa-3x text-white border border-white border-radius p-3 mb-0 font-weight-normal"></i>
                        <div class="media-body">
                            <h5 class="mt-0 mb-3">Multidisciplinary study programs</h5>
                            <p class="text-white mb-0">For the summary order he followed a little scheme of employing his time each day. From five to seven each morning he spent in bodily personal attention,</p>
                        </div>
                    </div>
                    <span class="border-bottom d-block my-5 border-light"></span>
                    <div class="media">
                        <i class="flaticon-mortarboard-2 mr-3 fa-3x text-white border border-white border-radius p-3 mb-0 font-weight-normal"></i>
                        <div class="media-body">
                            <h5 class="mt-0 mb-3">International study programs</h5>
                            <p class="text-white mb-0">saying a short prayer, thinking over the day’s business and resolutions, studying and eating breakfast. From eight till twelve he worked at his trade.</p>
                        </div>
                    </div>
                    <span class="border-bottom d-block my-5 border-light"></span>
                    <div class="media">
                        <i class="flaticon-team-1 mr-3 fa-3x text-white border border-white border-radius p-3 mb-0 font-weight-normal"></i>
                        <div class="media-body">
                            <h5 class="mt-0 mb-3">Highly qualified teaching staff</h5>
                            <p class="text-white mb-0">From twelve to one he read or overlooked his accounts and dined. From two to five he worked at his trade. The rest of the evening music, or diversion of some sort.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
  Why choose us -->

    <!--=================================
    Course item -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="section-title">
                        <h2 class="title">Latest actualities</h2>
                    </div>
                </div>
                <div class="col-sm-4 text-md-right mb-4 mb-sm-0">
                    <a class="btn btn-primary" href="/actualities">All Actualities</a>
                </div>
            </div>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Course item -->
    <section class="positoin-relative z-index-9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-4 bg-primary border-radius">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row justify-content-between">
                                    <div class="col-lg-7 col-md-8 align-self-center mb-4 mb-md-0">
                                        <h2>Subscribe</h2>
                                        <p class="mb-0 text-white">Now go push your own limits and succeed!</p>
                                    </div>
                                    <div class="col-lg-5 col-md-4 justify-content-end align-self-center">
                                        <div class="subscribe-form">
                                            <form action="#">
                                                <input class="form-control" placeholder="Enter your email" type="email">
                                                <a href="#"><a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                            </form>
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

    <!--=================================
    <!--=================================


    <!--=================================
   

    <!--=================================
    Call to action -->

    <!--=================================
    Call to action -->

@endsection

    