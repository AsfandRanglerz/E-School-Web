@extends('web.auth.layout.app')
@section('title', 'School Profile')

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
            <h2>School Information</h2>
            <div class="mt-3 mb-2 d-flex span-for-profile-img-auth-div">

                <label for="profileUpload" class="span-for-profile-img-auth">
                    <img src="{{asset('web/assets/images/camera.png')}}" alt="">
                    <span>Upload Photo</span>
                </label>

                <input type="file" id="profileUpload" accept="image/*" hidden>
                

            </div>
            <div class="d-flex align-items-center justify-content-center">
                <span class="span-size-file">Max file size: 3MB</span>
            </div>
            <form action="" class="form-for-input">
                <div class="mb-3">

                    <input type="text" class="form-control" placeholder="Enter Name">
                </div>
                <div class="mb-3">

                    <input type="email" class="form-control" placeholder="School Email">
                </div>
                <div class="mb-3">

                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="School Address">
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control" placeholder="School Phone">

                </div>



                <div class="w-100">
                    <button type="submit" class="btn btn-primary-auth w-100">Register School</button>

                </div>


            </form>


        </div>

    </div>

</div>
@endsection
