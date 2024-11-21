@extends('layout.master')

@section('content')
<!--=================================
inner-header -->
<section class="inner-banner bg-overlay-black-70 bg-holder" style="background-image: url('images/bg/04.jpg');">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="text-white">Sign In</h1>
                </div>
                <div class="d-flex justify-content-center ">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"><span>Sign In</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
inner-header -->

<!--=================================
Login -->
<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <div class="section-title">
                    <h2>Sign In To Your Account</h2>
                    <p>Sign in with email id or social media</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7 mb-2">
                <form method="POST" action="{{ route('login') }}" class="login bg-white shadow p-5">
                    @csrf
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                        <span class="focus-border"></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                        <span class="focus-border"></span>
                    </div>
                    <div class="form-group custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="remember">
                        <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <div class="login-social-media mt-4 text-center">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--=================================
Login -->
@endsection
