@extends('web.admin.layout.app')
@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid  px-0">
    <div class="d-flex justify-content-between align-items-center p-3">
        <div class="d-flex flex-column">
            <h5 class="admin-page-heading">Admin Dashboard</h5>
            <span class="admin-page-span">Dashboard / Admin Dashboard</span>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <a href="#" class="primary-anchor free-details-a">Free Details</a>
        </div>
    </div>

</div>
<div class="container-fluid px-0">
    <div class="p-3">
        <div class="main-for-admin-banner"
            style="background: url('{{ asset('web/assets/images/dashbtg.png') }}') no-repeat center center; background-size: cover; height: 15rem;">
            <div class="d-flex pb-0">
                <h2>Welcome Back, eSchool </h2> <a href="#"><span><img src="{{asset('web/assets/images/editiad.png')}}"
                            alt=""></span></a>

            </div>
            <span class="second-span-in-adb pt-0">Have a good day at work</span>

        </div>
    </div>

</div>
<div class="container-fluid px-0">
    <div class="p-1">

        <div class="row g-3 mx-0">

            <!-- Card 1 -->
            <div class="col-md-6">
                <div class="addws p-3 h-100">

                    <div class="d-flex justify-content-between align-items-center pb-3">
                        <div>
                            <h5 class="admin-page-heading">3654</h5>
                            <span class="admin-page-span">Total Students</span>
                        </div>

                        <span class="adswdbg bglp">
                            <img src="{{asset('web/assets/images/gwbad.png')}}" class="gwbad" alt="">
                        </span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center pt-3 adbtdi">

                        <div class="d-flex align-items-center">
                            <span class="admin-page-span">Active :</span>
                            <h6 class="admin-page-heading ms-1 mb-0">3643</h6>
                        </div>

                        <div class="d-flex align-items-center">
                            <span class="admin-page-span">Inactive :</span>
                            <h6 class="admin-page-heading ms-1 mb-0">11</h6>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6">
                <div class="addws p-3 h-100">

                    <div class="d-flex justify-content-between align-items-center pb-3">
                        <div>
                            <h5 class="admin-page-heading">163</h5>
                            <span class="admin-page-span">Total Staff</span>
                        </div>

                        <span class="adswdbg bgly">
                            <img src="{{asset('web/assets/images/stsad.png')}}" class="gwbad" alt="">
                        </span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center pt-3 adbtdi">

                        <div class="d-flex align-items-center">
                            <span class="admin-page-span">Active :</span>
                            <h6 class="admin-page-heading ms-1 mb-0">161</h6>
                        </div>

                        <div class="d-flex align-items-center">
                            <span class="admin-page-span">Inactive :</span>
                            <h6 class="admin-page-heading ms-1 mb-0">02</h6>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<div class="container-fluid px-0">
    <div class="pt-3 px-1">

        <div class="row g-3 mx-0">

            <div class="col-lg-4 ">
                <div class="addws">
                    <div class="header-div-admin-dashboard-divs px-0 py-3">

                        <div class="d-flex align-items-center justify-content-between px-3">

                            <span class="admin-page-heading">
                                Upcoming Events
                            </span>

                            <div class="d-flex align-items-center ms-auto gap-2">

                                <button class="dark-anchor-btn adbtnwbfs">
                                    + Add New
                                </button>

                                <a href="#" class="adaidwbg">
                                    View All
                                </a>

                            </div>

                        </div>
                        <hr class="mb-0">

                        <div class="d-flex align-items-center p-3">
                            <span class="adswdbg bglb">
                                <img src="{{asset('web/assets/images/teachpm.png')}}" class="upciad" alt="">
                            </span>
                            <div class="ms-2">
                                <h5 class="admin-page-heading aphucd mb-0">Parents, Teacher Meet</h5>
                                <span class="admin-page-span apsucd"><img
                                        src="{{asset('web/assets/images/calendaruc.png')}}" alt="">15 July 2025</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mx-3 pt-3 adbtdi">

                            <div class="d-flex align-items-center ms-auto">
                                <span class="admin-page-span apsucd d-flex align-items-center gap-2">
                                    <img src="{{asset('web/assets/images/watchuc.png')}}" alt="">
                                    09:10 AM - 10:50 PM
                                </span>
                            </div>

                        </div>
                        <hr class="mb-0">
                        <div class="d-flex align-items-center p-3">
                            <span class="adswdbg bglg">
                                <img src="{{asset('web/assets/images/staffm.png')}}" class="upciad" alt="">
                            </span>
                            <div class="ms-2">
                                <h5 class="admin-page-heading aphucd mb-0">Parents, Teacher Meet</h5>
                                <span class="admin-page-span apsucd"><img
                                        src="{{asset('web/assets/images/calendaruc.png')}}" alt="">15 July 2025</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mx-3 pt-3 adbtdi">

                            <div class="d-flex align-items-center ms-auto">
                                <span class="admin-page-span apsucd d-flex align-items-center gap-2">
                                    <img src="{{asset('web/assets/images/watchuc.png')}}" alt="">
                                    09:10 AM - 10:50 PM
                                </span>
                            </div>

                        </div>
                        <hr class="mb-0">
                        <div class="d-flex align-items-center p-3">
                            <span class="adswdbg bglp">
                                <img src="{{asset('web/assets/images/vmeet.png')}}" class="upciad" alt="">
                            </span>
                            <div class="ms-2">
                                <h5 class="admin-page-heading aphucd mb-0">Parents, Teacher Meet</h5>
                                <span class="admin-page-span apsucd"><img
                                        src="{{asset('web/assets/images/calendaruc.png')}}" alt="">15 July 2025</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mx-3 pt-3 adbtdi">

                            <div class="d-flex align-items-center ms-auto">
                                <span class="admin-page-span apsucd d-flex align-items-center gap-2">
                                    <img src="{{asset('web/assets/images/watchuc.png')}}" alt="">
                                    09:10 AM - 10:50 PM
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

             <div class="addws">
                    <div class="header-div-admin-dashboard-divs px-0 py-3">

                        <div class="d-flex align-items-center justify-content-between px-3">

                            <span class="admin-page-heading">
                                Attendance
                            </span>

                            <div class="d-flex align-items-center ms-auto gap-2">

                                

                                <a href="#" class="adaidwbg">
                                    View All
                                </a>

                            </div>

                        </div>
                        <hr class="mb-0">
                        
                           
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection