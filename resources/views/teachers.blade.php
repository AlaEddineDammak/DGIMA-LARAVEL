@extends('layout.master')



@section('content')
        <!--=================================
    inner-header -->
    <section class="inner-banner bg-overlay-black-70 bg-holder" style="background-image: url('images/bg/10.jpg');">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-12">
              <div class="text-center">
                <h1 class="text-white">Teachers</h1>
              </div>
              <div class="d-flex justify-content-center ">
                <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active"><span>Teachers</span></li>
              </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      inner-header -->
  
      <!--=================================
      Team -->
      <section class="space-ptb">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
              <!-- Section Title START -->
              <div class="section-title">
                <h2>Our Teachers</h2>
                <p>Meet the outstanding performers in our industry-award-winning team of professionals</p>
              </div>
              <!-- Section Title END -->
            </div>
          </div>
          <div class="row mb-xl-4">
            @foreach ($professors as $professor)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4 mb-sm-0">
                <!-- team-01 START -->
                <div class="team">
                    <div class="team-img">
                        <img class="img-fluid" src="{{ 'upload/users_images/' . $professor->photo }}" style="max-height: 263.89px !important; min-height: 263.89px !important; max-width: 263.89px !important; min-width: 263.89px !important" alt="">
                    </div>
                    <div class="team-info">
                        <p>{{ $professor->name }}</p>
                        <p class="team-leader">Professor</p>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fi fi-rs-file-pdf"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- team-01 END -->
            </div>
            @endforeach

        </div>
        
          
        </div>
      </section>
      <!--=================================
      Team -->
  
      <!--=================================
      Call to action -->
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
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
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
      Call to action -->
  
@endsection