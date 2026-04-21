@extends('web.auth.layout.app')
@section('title', 'Sign Up')

@section('content')
<div class="container-fluid px-0">
    <div class="row mx-0">
        <div class="col-md-6 p-sm-5 p-3 left-auth-content">
            <div class="d-flex div-for-circular-images-in-auth">
                <img src="{{asset('web/assets/images/circular-auth-dark.png')}}" alt="">
                <img src="{{asset('web/assets/images/circular-auth-light.png')}}" alt="">
            </div>
            <div class="div-for-hesding-in-auth-left-content">

                <h2>Create your account</h2>
                <span>Secure login portal for eSchool school management system</span>

            </div>
            <div class="div-for-bottom-img-auth-left">
                <img src="{{asset('web/assets/images/auth-left.png')}}" alt="">

            </div>

        </div>
        <div
            class="col-md-6 p-lg-5 p-3 d-flex flex-column align-items-center justify-content-center div-for-auth-right-content">
            <h2>Create your account</h2>
            <form action="" class="form-for-input">
                <div class="mb-3">

                    <input type="text" class="form-control" placeholder="Enter Name">
                </div>
                <div class="mb-3">

                    <input type="text" class="form-control" placeholder="Phone">
                </div>
                <div class="mb-3">

                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Email Address">
                </div>
                <div class="mb-3 position-relative">
                    <input type="password" class="form-control password-field form-control-for-password" placeholder="Password">
                    <span class="fa fa-eye-slash toggle-password"></span>
                </div>

                <div class="mb-4 position-relative">
                    <input type="password" class="form-control password-field form-control-for-password" placeholder="Confirm Password">
                    <span class="fa fa-eye-slash toggle-password"></span>
                </div>
                <div class="d-flex  mb-4">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <span class="span-in-checkbox">I agree to the <a href="#">Terms of Service</a></span>
                </div>
                <div class="w-100">
                    <button type="submit" class="btn btn-primary-auth w-100">Next -> School Information</button>

                </div>
                <div class="text-center pt-3">
                    <span class="span-in-auth">Already have an account? <a href="#"> Log In</a></span>
                </div>

            </form>


        </div>

    </div>

</div>
@endsection