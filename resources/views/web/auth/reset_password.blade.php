@extends('web.auth.layout.app')
@section('title', 'Reset Password')

@section('content')
<div class="container-fluid px-0">
    <div class="row mx-0">
        <div class="col-md-6 p-sm-5 p-3 left-auth-content">
            <div class="d-flex div-for-circular-images-in-auth">
                <img src="{{asset('web/assets/images/circular-auth-dark.png')}}" alt="">
                <img src="{{asset('web/assets/images/circular-auth-light.png')}}" alt="">
            </div>
            <div class="div-for-hesding-in-auth-left-content">

                <h2>Update The Password</h2>
                <span>Secure your account with strong password</span>

            </div>
            <div class="div-for-bottom-img-auth-left">
                <img src="{{asset('web/assets/images/auth-left.png')}}" alt="">

            </div>

        </div>
        <div
            class="col-md-6 p-lg-5 p-3 d-flex flex-column align-items-center justify-content-center div-for-auth-right-content">
            <div class="mb-4 div-for-lock-img">
                <img src="{{asset('web/assets/images/flight.png')}}" alt="">

            </div>
            <h2>Request sent successfully!</h2>
            <span class="span-in-auth-password mb-0">We've sent a 6-digit confirmation email to your email.</span>
            <span class="span-in-auth-password m-0">Please enter the code in below box to verify your email.</span>
            <form action="" class="form-for-input form-for-reset-password">


                <div class="mb-4">

                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Email Address">
                </div>
                <div class="row mx-0 d-flex gap-2 justify-content-between mb-4 otp-div">
                    <input type="text" maxlength="1" class="form-control otp-input text-center" placeholder="-">
                    <input type="text" maxlength="1" class="form-control otp-input text-center" placeholder="-">
                    <input type="text" maxlength="1" class="form-control otp-input text-center" placeholder="-">
                    <input type="text" maxlength="1" class="form-control otp-input text-center" placeholder="-">
                    <input type="text" maxlength="1" class="form-control otp-input text-center" placeholder="-">
                    <input type="text" maxlength="1" class="form-control otp-input text-center" placeholder="-">
                </div>
                <div class="mb-4 position-relative">
                    <input type="password" class="form-control password-field form-control-for-password"
                        placeholder="Password">
                    <span class="fa fa-eye-slash toggle-password"></span>
                </div>

                <div class="mb-4 position-relative">
                    <input type="password" class="form-control password-field form-control-for-password"
                        placeholder="Confirm Password">
                    <span class="fa fa-eye-slash toggle-password"></span>
                </div>


                <div class="pt-3 w-100">
                    <button type="submit" class="btn btn-primary-auth w-100">Update Password</button>

                </div>
                <div class="text-center pt-4">
                    <span class="span-in-auth"> <a href="#">
                            <- Return to Log In</a></span>
                </div>

            </form>


        </div>

    </div>

</div>
@endsection