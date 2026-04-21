@extends('web.auth.layout.app')
@section('title', 'Forgot Password')

@section('content')
<div class="container-fluid px-0">
    <div class="row mx-0">
        <div class="col-md-6 p-sm-5 p-3 left-auth-content">
            <div class="d-flex div-for-circular-images-in-auth">
                <img src="{{asset('web/assets/images/circular-auth-dark.png')}}" alt="">
                <img src="{{asset('web/assets/images/circular-auth-light.png')}}" alt="">
            </div>
            <div class="div-for-hesding-in-auth-left-content">

                <h2>Reset Your Password</h2>
                <span>Enter your email to receive a password reset link for your school administration account</span>

            </div>
            <div class="div-for-bottom-img-auth-left">
                <img src="{{asset('web/assets/images/auth-left.png')}}" alt="">

            </div>

        </div>
        <div
            class="col-md-6 p-lg-5 p-3 d-flex flex-column align-items-center justify-content-center div-for-auth-right-content">
            <div class="mb-4 div-for-lock-img">
                <img src="{{asset('web/assets/images/lock.png')}}" alt="">

            </div>
            <h2>Forgot Your Password</h2>
            <span class="span-in-auth-password">Please enter the email address associated with your account and we'll email you a link to reset your password.</span>
            <form action="" class="form-for-input">
                
                
                <div class="mb-4">

                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Email Address">
                </div>
                
                
                <div class="pt-3 w-100">
                    <button type="submit" class="btn btn-primary-auth w-100">Send Request</button>

                </div>
                <div class="text-center pt-4">
                    <span class="span-in-auth"> <a href="#"> <- Return to Log In</a></span>
                </div>

            </form>


        </div>

    </div>

</div>
@endsection