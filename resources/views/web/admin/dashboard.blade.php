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
            style="background-image: url('{{ asset('web/assets/images/dashbtg.png') }}');">
            <div class="d-flex pb-3">
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

        <div class="row g-3 mx-0 row-equal">

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
                                <h5 class="admin-page-heading aphucd mb-0">Staff Meeting</h5>
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
                                <h5 class="admin-page-heading aphucd mb-0">Vocation Meeting</h5>
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
                    <div class="header-div-admin-dashboard-divs px-0 pt-3">

                        <div class="d-flex align-items-center justify-content-between px-3">

                            <!-- Title -->
                            <span class="admin-page-heading">
                                Attendance
                            </span>

                            <div class="d-flex align-items-center ms-auto gap-2 div-for-header-content">

                                <div class="d-flex align-items-center" id="attendancePicker"
                                    style="cursor:pointer; color:#515B73;">

                                    <span class="fa fa-calendar me-1"></span>

                                    <input type="text" data-input value="Today" readonly
                                        style="border:none; outline:none; width:80px; cursor:pointer; background:transparent; color:#515B73; font-size:14px; text-align:center;">

                                    <span class="fa fa-chevron-down ms-1" data-toggle></span>

                                </div>

                            </div>

                        </div>

                        <hr class="mb-0">
                        <div class="p-3">
                            <ul class="nav nav-pills mb-3 custom-nav-pills-adb" id="pills-tab" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#students"
                                        type="button">
                                        Students
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#teachers"
                                        type="button">
                                        Teachers
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#staff"
                                        type="button">
                                        Other Staff
                                    </button>
                                </li>

                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane fade show active" id="students">
                                    <div class="row justify-content-center g-2">

                                        <div class="col-4">
                                            <div class="adswdbg bglbg d-flex flex-column p-3 text-center">
                                                <h5 class="admin-page-heading aphucd mb-0">01</h5>
                                                <span class="admin-page-span apsucd">Emergency</span>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="adswdbg bglbg d-flex flex-column p-3 text-center">
                                                <h5 class="admin-page-heading aphucd mb-0">01</h5>
                                                <span class="admin-page-span apsucd">Absent</span>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="adswdbg bglbg d-flex flex-column p-3 text-center">
                                                <h5 class="admin-page-heading aphucd mb-0">01</h5>
                                                <span class="admin-page-span apsucd">Late</span>
                                            </div>
                                        </div>
                                        <div class="chart-wrapper mt-5">
                                            <canvas id="chartContainer"></canvas>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center pt-md-5 mt-md-5 mt-1 pt-3">
                                        <a href="#" class="adaidwbg">
                                            View All
                                        </a>

                                    </div>

                                </div>

                                <div class="tab-pane fade" id="teachers">
                                    <div class="row justify-content-center g-2">

                                        <div class="col-4">
                                            <div class="adswdbg bglbg d-flex flex-column p-3 text-center">
                                                <h5 class="admin-page-heading aphucd mb-0">01</h5>
                                                <span class="admin-page-span apsucd">Emergency</span>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="adswdbg bglbg d-flex flex-column p-3 text-center">
                                                <h5 class="admin-page-heading aphucd mb-0">01</h5>
                                                <span class="admin-page-span apsucd">Absent</span>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="adswdbg bglbg d-flex flex-column p-3 text-center">
                                                <h5 class="admin-page-heading aphucd mb-0">01</h5>
                                                <span class="admin-page-span apsucd">Late</span>
                                            </div>
                                        </div>
                                        <div class="chart-wrapper mt-5">
                                            <canvas id="chartContainer2"></canvas>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center pt-md-5 mt-md-5 mt-1 pt-3">
                                        <a href="#" class="adaidwbg">
                                            View All
                                        </a>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="staff">
                                    <div class="row justify-content-center g-2">

                                        <div class="col-4">
                                            <div class="adswdbg bglbg d-flex flex-column p-3 text-center">
                                                <h5 class="admin-page-heading aphucd mb-0">01</h5>
                                                <span class="admin-page-span apsucd">Emergency</span>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="adswdbg bglbg d-flex flex-column p-3 text-center">
                                                <h5 class="admin-page-heading aphucd mb-0">01</h5>
                                                <span class="admin-page-span apsucd">Absent</span>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="adswdbg bglbg d-flex flex-column p-3 text-center">
                                                <h5 class="admin-page-heading aphucd mb-0">01</h5>
                                                <span class="admin-page-span apsucd">Late</span>
                                            </div>
                                        </div>




                                        <div class="chart-wrapper mt-5">
                                            <canvas id="chartContainer3"></canvas>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center pt-md-5 mt-md-5 mt-1 pt-3">
                                        <a href="#" class="adaidwbg">
                                            View All
                                        </a>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>





            </div>
            <div class="col-lg-4 ">
                <div class="addws">
                    <div class="header-div-admin-dashboard-divs px-0 py-3">

                        <div class="d-flex align-items-center justify-content-between px-3">

                            <span class="admin-page-heading">
                                Quick Links
                            </span>



                        </div>
                        <hr class="mb-0">
                        <div class="p-3">
                            <div class="row justify-content-center g-2">

                                <div class="col-4">
                                    <a href="#">
                                        <div class="adswdbg bgqllg d-flex flex-column p-3 text-center">
                                            <span class="sfbiql sfbiqlfb1"> <span class="span-bgql span-fb1"><img
                                                        src="{{asset('web/assets/images/qlv1.png')}}"
                                                        alt=""></span></span>

                                            <span class="admin-page-span apsucd">Calender</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-4">
                                    <a href="#">
                                        <div class="adswdbg bglg d-flex flex-column p-3 text-center">
                                            <span class="sfbiql sfbiqlfb2"> <span class="span-bgql span-fb2"><img
                                                        src="{{asset('web/assets/images/qlv2.png')}}"
                                                        alt=""></span></span>

                                            <span class="admin-page-span apsucd">Events</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-4">
                                    <a href="#">
                                        <div class="adswdbg bgly d-flex flex-column p-3 text-center">
                                            <span class="sfbiql sfbiqlfb3"> <span class="span-bgql span-fb3"><img
                                                        src="{{asset('web/assets/images/qlv3.png')}}"
                                                        alt=""></span></span>

                                            <span class="admin-page-span apsucd">Attendance</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-4">
                                    <a href="#">
                                        <div class="adswdbg bgqlvblb d-flex flex-column p-3 text-center">
                                            <span class="sfbiql sfbiqlfb4"> <span class="span-bgql span-fb4"><img
                                                        src="{{asset('web/assets/images/qlv4.png')}}"
                                                        alt=""></span></span>

                                            <span class="admin-page-span apsucd">Exams</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-4">
                                    <a href="#">
                                        <div class="adswdbg bglp  d-flex flex-column p-3 text-center">
                                            <span class="sfbiql sfbiqlfb5"> <span class="span-bgql span-fb5"><img
                                                        src="{{asset('web/assets/images/qlv5.png')}}"
                                                        alt=""></span></span>

                                            <span class="admin-page-span apsucd">Fees</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-4">
                                    <a href="#">
                                        <div class="adswdbg bglb d-flex flex-column p-3 text-center">
                                            <span class="sfbiql sfbiqlfb6"> <span class="span-bgql span-fb6"><img
                                                        src="{{asset('web/assets/images/qlv6.png')}}"
                                                        alt=""></span></span>

                                            <span class="admin-page-span apsucd">Reports</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <hr>


                        <div class="px-3">
                            <span class="admin-page-heading">
                                Cash vs Online
                            </span>
                            <div class="chart-wrapper">
                                <canvas id="cashOnline"></canvas>
                            </div>
                        </div>

                    </div>




                </div>

            </div>
        </div>

    </div>
</div>
<div class="container-fluid px-0">
    <div class="pt-3 px-1">

        <div class="row g-3 mx-0 row-equal">
            <div class="col-lg-5">
                <div class="addws">
                    <div class="header-div-admin-dashboard-divs px-0 py-3">

                        <div class="d-flex align-items-center justify-content-between px-3 pb-3 border-bottom">

                            <span class="admin-page-heading">
                                Total Profit
                            </span>

                            <div class="d-flex align-items-center ms-auto gap-2 div-for-header-content">

                                <span class="admin-page-heading">
                                    01 - 18 Feb 2026
                                    <span class="fa fa-chevron-down ms-1" data-toggle></span>
                                </span>

                            </div>

                        </div>
                    </div>

                    <div class="chart-wrapper chart-total-profit pb-3">

                        <div class="chart-total-profit-inner">

                            <canvas id="totalProfitChart"></canvas>

                            <div class="chart-total-profit-center">
                                
                            </div>

                        </div>

                    </div>


                </div>
            </div>
            <div class="col-lg-7">
                <div class="addws">
                    <div class="header-div-admin-dashboard-divs pt-3">

                        <div class="d-flex align-items-center justify-content-between px-3 pb-3 border-bottom">

                            <span class="admin-page-heading">
                                Announcement
                            </span>

                            <div class="d-flex align-items-center ms-auto gap-2 div-for-header-content">

                                <a href="#" class="adaidwbg">
                                    View All
                                </a>

                            </div>

                        </div>

                        <div class="announcement-list px-sm-3 px-1 pt-3 ">

                            <!-- Item 1 -->
                            <div class="announcement-item d-flex align-items-start">
                                <div class="icon blue">
                                    <span class="fa fa-book"></span>
                                </div>

                                <div class="content w-100">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="title">New Syllabus Instructions</div>
                                            <div class="date">
                                                <span class="admin-page-span apsucd"><img
                                                        src="{{asset('web/assets/images/calendaruc.png')}}"
                                                        alt=""></span> Added on : 11 Mar 2024
                                            </div>
                                        </div>
                                        <div class="days-badge">
                                            <img src="{{asset('web/assets/images/clock-add.png')}}" class="me-1"
                                                alt=""></span> 20 Days
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="announcement-item d-flex align-items-start">
                                <div class="icon green">
                                    <span class="fa fa-comment"></span>
                                </div>

                                <div class="content w-100">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="title">World Environment Day Program.....!!!!</div>
                                            <div class="date">
                                                <span class="admin-page-span apsucd"><img
                                                        src="{{asset('web/assets/images/calendaruc.png')}}"
                                                        alt=""></span> Added on : 21 Apr 2024
                                            </div>
                                        </div>
                                        <div class="days-badge"> <img src="{{asset('web/assets/images/clock-add.png')}}"
                                                class="me-1" alt="">15 Days</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="announcement-item d-flex align-items-start">
                                <div class="icon pink">
                                    <span class="fa fa-bell"></span>
                                </div>

                                <div class="content w-100">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="title">Exam Preparation Notification!</div>
                                            <div class="date">
                                                <span class="admin-page-span apsucd"><img
                                                        src="{{asset('web/assets/images/calendaruc.png')}}"
                                                        alt=""></span> Added on : 13 Mar 2024
                                            </div>
                                        </div>
                                        <div class="days-badge"><img src="{{asset('web/assets/images/clock-add.png')}}"
                                                class="me-1" alt=""> 12 Days</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="announcement-item d-flex align-items-start">
                                <div class="icon blue">
                                    <span class="fa fa-file-text"></span>
                                </div>

                                <div class="content w-100">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="title">Online Classes Preparation</div>
                                            <div class="date">
                                                <span class="admin-page-span apsucd"><img
                                                        src="{{asset('web/assets/images/calendaruc.png')}}"
                                                        alt=""></span> Added on : 24 May 2024
                                            </div>
                                        </div>
                                        <div class="days-badge">
                                            <img src="{{asset('web/assets/images/clock-add.png')}}" class="me-1"
                                                alt=""></span> 02 Days
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="announcement-item d-flex align-items-start">
                                <div class="icon" style="background:#fff4e6; color:#f59e0b;">
                                    <span class="fa fa-cube"></span>
                                </div>

                                <div class="content w-100">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="title">Exam Time Table Release</div>
                                            <div class="date">
                                                <span class="admin-page-span apsucd"><img
                                                        src="{{asset('web/assets/images/calendaruc.png')}}"
                                                        alt=""></span> Added on : 24 May 2024
                                            </div>
                                        </div>
                                        <div class="days-badge">
                                            <img src="{{asset('web/assets/images/clock-add.png')}}" class="me-1"
                                                alt=""></span> 06 Days
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
<div class="container-fluid px-0">
    <div class="pt-3 px-1">

        <div class="row g-3 mx-0 row-equal">

            <!-- Earnings Card -->
            <div class="col-lg-6">
                <div class="addws">

                    <!-- Header -->
                    <div class="header-div-admin-dashboard-divs py-3">
                        <div class="d-flex align-items-center justify-content-between px-3 pb-3 border-bottom">
                            <span class="admin-page-heading">
                                Yearly Analytics
                            </span>

                            <div class="d-flex align-items-center gap-2">
                                <span class="admin-page-heading">
                                    18 Feb 2025 - 18 Feb 2026
                                    <span class="fa fa-chevron-down ms-1"></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="px-0">
                        <div class="p-3 d-flex justify-content-between align-items-center">
                            <div class="earning-div-for-expenses-analytics">
                                <h6>Total Earnings</h6>
                                <h4>$64,522.24</h4>
                            </div>
                            <span class="adswdbg span-fb2">
                                <img src="{{asset('web/assets/images/analitics-vector.png')}}" class="gwbadan" alt="">
                            </span>
                        </div>
                        <div class="chart-wrapper">
                            <canvas id="earningsChart"></canvas>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Expenses Card -->
            <div class="col-lg-6">
                <div class="addws">

                    <!-- Header -->
                    <div class="header-div-admin-dashboard-divs py-3">
                        <div class="d-flex align-items-center justify-content-between px-3 pb-3 border-bottom">
                            <span class="admin-page-heading">
                                Yearly Analytics
                            </span>

                            <div class="d-flex align-items-center gap-2">
                                <span class="admin-page-heading">
                                    18 Feb 2025 - 18 Feb 2026
                                    <span class="fa fa-chevron-down ms-1"></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="px-0">
                        <div class="p-3 d-flex justify-content-between align-items-center">
                            <div class="earning-div-for-expenses-analytics">
                                <h6>Total Expenses</h6>
                                <h4>$64,522.24</h4>
                            </div>
                            <span class="adswdbg span-fb5">
                                <img src="{{asset('web/assets/images/analitics-vector.png')}}" class="gwbadan" alt="">
                            </span>
                        </div>
                        <div class="chart-wrapper pt-1">
                            <canvas id="expensesChart"></canvas>
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

            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6">
                <a href="#" class="text-decoration-none">
                    <div class="dash-card bgly">

                        <div class="dash-inner">
                            <div class="dash-left d-flex justify-content-center align-items-center">
                                <div class="icon-box me-2 span-fb3">
                                    <img src="{{asset('web/assets/images/qlv3.png')}}" alt="">
                                </div>
                                <span>View Attendance</span>
                            </div>

                            <div class="arrow">
                                <img src="{{asset('web/assets/images/direct-vector.png')}}" alt="">
                            </div>
                        </div>

                    </div>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="dash-card bgqllg">
                    <div class="dash-inner">
                        <div class="dash-left d-flex justify-content-center align-items-center">
                            <div class="icon-box me-2 span-fb1">
                                <img src="{{asset('web/assets/images/nev.png')}}" alt="">
                            </div>
                            <span>New Events</span>
                        </div>
                        <div class="arrow">
                            <img src="{{asset('web/assets/images/direct-vector.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="dash-card bglp">
                    <div class="dash-inner">
                        <div class="dash-left d-flex justify-content-center align-items-center">
                            <div class="icon-box me-2 span-fb5">
                                <img src="{{asset('web/assets/images/mpv.png')}}" alt="">
                            </div>
                            <span>Membership Plans</span>
                        </div>
                        <div class="arrow">
                            <img src="{{asset('web/assets/images/direct-vector.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="dash-card bgqlvblb">
                    <div class="dash-inner">
                        <div class="dash-left d-flex justify-content-center align-items-center">
                            <div class="icon-box me-2 span-fb4">
                                <img src="{{asset('web/assets/images/fav.png')}}" alt="">
                            </div>
                            <span>Finance & Accounts</span>
                        </div>
                        <div class="arrow">
                            <img src="{{asset('web/assets/images/direct-vector.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid px-0">
    <div class="pt-3 px-1">
        <div class="row g-3 mx-0 row-equal">

            <!-- Best Performer -->
            <div class="col-lg-6">
                <div class="best-performer-card w-100">

                    <div class="best-performer-top">
                        <span>Best Performer</span>

                        <div class="best-performer-arrows">
                            <button type="button">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>

                            <button type="button">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <h6>Rabia Khan</h6>
                    <span class="star-best-std-span">Physics Teacher</span>

                    <div class="best-performer-img">
                        <img src="{{asset('web/assets/images/ssstd.png')}}" alt="">
                    </div>

                </div>
            </div>

            <!-- Star Student -->
            <div class="col-lg-6">
                <div class="star-student-card w-100">

                    <div class="star-student-top">
                        <span>Star Students</span>

                        <div class="star-student-arrows">
                            <button type="button">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>

                            <button type="button">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <h6>Arooj Ali</h6>
                    <span class="star-best-std-span">XII, A</span>

                    <div class="star-student-img">
                        <img src="{{asset('web/assets/images/ssstd.png')}}" alt="">
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid px-0">
    <div class="pt-3 px-1">

        <div class="row g-3 mx-0 row-equal">

            <!-- Student Activity -->
            <div class="col-lg-6">
                <div class="addws">

                    <div class="header-div-admin-dashboard-divs px-0 py-3">

                        <div class="d-flex align-items-center justify-content-between px-3">

                            <span class="admin-page-heading">
                                Student Activity
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

                        <!-- HR moved inside header -->
                        <hr class="my-3">

                    </div>

                    <div class="student-activity-content px-3 pb-3">

                        <!-- Item -->
                        <div class="student-activity-item">
                            <div class="student-activity-img">
                                <img src="{{asset('web/assets/images/sact1.png')}}" alt="">
                            </div>

                            <div class="student-activity-text">
                                <h5>1st place in "Chess"</h5>
                                <p>This event took place in Our School</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="student-activity-item">
                            <div class="student-activity-img">
                                <img src="{{asset('web/assets/images/sact2.png')}}" alt="">
                            </div>

                            <div class="student-activity-text">
                                <h5>Participated in "Carrom"</h5>
                                <p>Justin Lee participated in "Carrom"</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="student-activity-item">
                            <div class="student-activity-img">
                                <img src="{{asset('web/assets/images/sact3.png')}}" alt="">
                            </div>

                            <div class="student-activity-text">
                                <h5>1st place in "100M"</h5>
                                <p>This event took place in Our School on our sports day</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="student-activity-item mb-0">
                            <div class="student-activity-img">
                                <img src="{{asset('web/assets/images/sact4.png')}}" alt="">
                            </div>

                            <div class="student-activity-text">
                                <h5>International conference</h5>
                                <p>We attended international conference took place in "Germany"</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Todo -->
            <div class="col-lg-6">
                <div class="addws">

                    <div class="header-div-admin-dashboard-divs px-0 py-3">

                        <div class="d-flex align-items-center justify-content-between px-3">

                            <span class="admin-page-heading">
                                Todo
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

                        <!-- HR moved inside header -->
                        <hr class="my-3">

                    </div>

                    <div class="todo-content px-3 pb-3">

                        <!-- Item -->
                        <div class="todo-item">
                            <div class="todo-left">
                                <input type="checkbox">

                                <div class="todo-text">
                                    <h5>Send Reminder to Students</h5>
                                    <p>01:00 PM</p>
                                </div>
                            </div>

                            <span class="todo-status completed">
                                Completed
                            </span>
                        </div>

                        <!-- Item -->
                        <div class="todo-item">
                            <div class="todo-left">
                                <input type="checkbox">

                                <div class="todo-text">
                                    <h5>Create Routine to new staff</h5>
                                    <p>04:50 PM</p>
                                </div>
                            </div>

                            <span class="todo-status progress">
                                Inprogress
                            </span>
                        </div>

                        <!-- Item -->
                        <div class="todo-item">
                            <div class="todo-left">
                                <input type="checkbox">

                                <div class="todo-text">
                                    <h5>Extra Class Info to Students</h5>
                                    <p>04:55 PM</p>
                                </div>
                            </div>

                            <span class="todo-status pending">
                                Yet to Start
                            </span>
                        </div>

                        <!-- Item -->
                        <div class="todo-item">
                            <div class="todo-left">
                                <input type="checkbox">

                                <div class="todo-text">
                                    <h5>Fees for Upcoming Academics</h5>
                                    <p>04:55 PM</p>
                                </div>
                            </div>

                            <span class="todo-status pending">
                                Yet to Start
                            </span>
                        </div>

                        <!-- Item -->
                        <div class="todo-item border-0 pb-0">
                            <div class="todo-left">
                                <input type="checkbox">

                                <div class="todo-text">
                                    <h5>English - Essay on Visit</h5>
                                    <p>05:55 PM</p>
                                </div>
                            </div>

                            <span class="todo-status pending">
                                Yet to Start
                            </span>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<div class="container-fluid px-0 pt-3 pb-5">
    <div class="dfst dfstsad">

        <div class="p-3 dfsti">

            <!-- Nav Pills -->
            <ul class="nav nav-pills mb-3 custom-nav-pills-transactions" id="pills-tab" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active all-transactions-tab" data-bs-toggle="pill"
                        data-bs-target="#allTransactions" type="button">
                        All <span>5</span>
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link outgoing-transactions-tab" data-bs-toggle="pill"
                        data-bs-target="#outgoingTransactions" type="button">
                        Outgoing <span>1</span>
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link incoming-transactions-tab" data-bs-toggle="pill"
                        data-bs-target="#incomingTransactions" type="button">
                        Incoming <span>4</span>
                    </button>
                </li>

            </ul>

            <!-- Search -->
            <div>
                <form action="" class="form-for-search-dash">
                    <div class="my-3 transaction-search-wrapper">

                        <i class="fa-solid fa-magnifying-glass transaction-search-icon"></i>

                        <input type="text" class="form-control"
                            placeholder="Search by creator, purpose, amount, date...">

                        <button type="button" class="transaction-export-btn">
                            <i class="fa-solid fa-download"></i>
                            Export
                        </button>

                    </div>
                </form>
            </div>

            <!-- Tab Content -->
            <div class="tab-content">

                <!-- All -->
                <div class="tab-pane fade show active all-transactions-content" id="allTransactions">

                    <div class="table-container">
                        <table class="custom-table">

                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Action By</th>
                                    <th>Method</th>
                                    <th>Type</th>
                                    <th>Purpose</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>17 Feb 2026 01:16 PM</td>
                                    <td>3,233 PKR</td>
                                    <td>Ali Ahmad</td>
                                    <td>Online</td>
                                    <td>Incoming</td>
                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Fee Payment
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>17 Feb 2026 12:55 PM</td>
                                    <td>698 PKR</td>
                                    <td>Ali Ahmad</td>
                                    <td>Cash</td>
                                    <td>Outgoing</td>
                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Salary (T0001)
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>17 Feb 2026 12:30 PM</td>
                                    <td>1,500 PKR</td>
                                    <td>Ali Ahmad</td>
                                    <td>Cash</td>
                                    <td>Incoming</td>
                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Admission Fee
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>17 Feb 2026 12:30 PM</td>
                                    <td>99 PKR</td>
                                    <td>Ali Ahmad</td>
                                    <td>Cash</td>
                                    <td>Incoming</td>
                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Security Fee
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>17 Feb 2026 12:30 PM</td>
                                    <td>99 PKR</td>
                                    <td>Ali Ahmad</td>
                                    <td>Cash</td>
                                    <td>Incoming</td>
                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Student Fund
                                        </a>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                </div>

                <!-- Outgoing -->
                <div class="tab-pane fade outgoing-transactions-content" id="outgoingTransactions">

                    <div class="table-container">
                        <table class="custom-table">

                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Action By</th>
                                    <th>Method</th>
                                    <th>Type</th>
                                    <th>Purpose</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>17 Feb 2026 12:55 PM</td>
                                    <td>698 PKR</td>
                                    <td>Ali Ahmad</td>
                                    <td>Cash</td>
                                    <td>Outgoing</td>
                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Salary (T0001)
                                        </a>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                </div>

                <!-- Incoming -->
                <div class="tab-pane fade incoming-transactions-content" id="incomingTransactions">

                    <div class="table-container">
                        <table class="custom-table">

                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Action By</th>
                                    <th>Method</th>
                                    <th>Type</th>
                                    <th>Purpose</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>17 Feb 2026 01:16 PM</td>
                                    <td>3,233 PKR</td>
                                    <td>Ali Ahmad</td>
                                    <td>Online</td>
                                    <td>Incoming</td>
                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Fee Payment
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>17 Feb 2026 12:30 PM</td>
                                    <td>1,500 PKR</td>
                                    <td>Ali Ahmad</td>
                                    <td>Cash</td>
                                    <td>Incoming</td>
                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Admission Fee
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>17 Feb 2026 12:30 PM</td>
                                    <td>99 PKR</td>
                                    <td>Ali Ahmad</td>
                                    <td>Cash</td>
                                    <td>Incoming</td>
                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Security Fee
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>17 Feb 2026 12:30 PM</td>
                                    <td>99 PKR</td>
                                    <td>Ali Ahmad</td>
                                    <td>Cash</td>
                                    <td>Incoming</td>
                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Student Fund
                                        </a>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                </div>

            </div>


        </div>
    </div>
</div>

@endsection
@push('js')




<script>
$(document).ready(function() {

    /* =========================
       DATE PICKER
    ========================== */
    $("#attendancePicker [data-input]").datepicker({

        dateFormat: "yy-mm-dd",

        onSelect: function(dateText) {

            let today = $.datepicker.formatDate(
                "yy-mm-dd",
                new Date()
            );

            if (dateText === today) {
                $(this).val("Today");
            } else {
                $(this).val(dateText);
            }
        }
    });

    // Default text
    $("#attendancePicker [data-input]").val("Today");

});
</script>

<script>
$(function() {

    /* =========================
       CHART STORAGE
    ========================== */
    const dashboardCharts = {};


    /* =========================
       DESTROY CHART
    ========================== */
    function destroy(id) {

        if (dashboardCharts[id]) {

            dashboardCharts[id].destroy();

            delete dashboardCharts[id];
        }
    }


    /* =========================
       COMMON DOUGHNUT CHART
    ========================== */
    function doughnut(id, items, opt = {}) {

        const el = document.getElementById(id);

        if (!el || typeof Chart === "undefined") return;

        destroy(id);

        dashboardCharts[id] = new Chart(el, {

            type: "doughnut",

            data: {

                labels: items.map((i) => i.label),

                datasets: [{
                    data: items.map((i) => i.value),
                    backgroundColor: items.map((i) => i.color),
                    borderWidth: 0
                }]
            },

            options: {

                responsive: true,
                maintainAspectRatio: false,

                cutout: opt.cutout ?? "40%",

                plugins: {

                    legend: {
                        display: opt.legend !== false,
                        position: opt.legendPosition ?? "bottom",

                        labels: {
                            boxWidth: 10,
                            usePointStyle: true
                        }
                    },

                    tooltip: {
                        enabled: true,
                        backgroundColor: "#ffffff",
                        titleColor: "#000000",
                        bodyColor: "#000000",
                        borderColor: "#e5e7eb",
                        borderWidth: 1,
                        cornerRadius: 50,
                        padding: 12,
                        displayColors: false
                    }
                }
            }
        });
    }


    /* =========================
       TOTAL PROFIT CHART
    ========================== */
    function totalProfit() {

        const el =
            document.getElementById("totalProfitChart");

        if (!el || typeof Chart === "undefined") return;

        destroy("totalProfitChart");

        const track = "#EEF2F6";

        dashboardCharts.totalProfitChart =
            new Chart(el, {

                type: "doughnut",

                data: {

                    datasets: [

                        {
                            label: "Profit",
                            data: [70, 30],
                            backgroundColor: [
                                "#22C55E",
                                track
                            ],
                            borderWidth: 0
                        },

                        {
                            label: "Income",
                            data: [80, 20],
                            backgroundColor: [
                                "#EAB308",
                                track
                            ],
                            borderWidth: 0
                        },

                        {
                            label: "Expense",
                            data: [55, 45],
                            backgroundColor: [
                                "#EF4444",
                                track
                            ],
                            borderWidth: 0
                        }
                    ]
                },

                options: {

                    responsive: true,
                    maintainAspectRatio: false,

                    rotation: -90,
                    circumference: 360,

                    // Keep ring thickness + small gaps
                    cutout: ["70%", "60%", "50%"],
                    spacing: 3,

                    plugins: {

                        legend: {
                            position: "bottom",
                            onClick: null,

                            labels: {

                                usePointStyle: true,
                                padding: 20,

                                generateLabels() {

                                    return [

                                        {
                                            text: "Profit",
                                            fillStyle: "#22C55E",
                                            strokeStyle: "#22C55E",
                                            lineWidth: 0,
                                            pointStyle: "circle",
                                            hidden: false,
                                            index: 0,
                                            datasetIndex: 0
                                        },

                                        {
                                            text: "Expense",
                                            fillStyle: "#EF4444",
                                            strokeStyle: "#EF4444",
                                            lineWidth: 0,
                                            pointStyle: "circle",
                                            hidden: false,
                                            index: 1,
                                            datasetIndex: 2
                                        },

                                        {
                                            text: "Income",
                                            fillStyle: "#EAB308",
                                            strokeStyle: "#EAB308",
                                            lineWidth: 0,
                                            pointStyle: "circle",
                                            hidden: false,
                                            index: 2,
                                            datasetIndex: 1
                                        }
                                    ];
                                }
                            }
                        },

                        tooltip: {
                            enabled: true,
                            backgroundColor: "#ffffff",
                            titleColor: "#000000",
                            bodyColor: "#000000",
                            borderColor: "#e5e7eb",
                            borderWidth: 1,
                            cornerRadius: 100,
                            padding: 12,
                            displayColors: false,
                            caretSize: 0,
                            caretPadding: 0,

                            callbacks: {

                                label(ctx) {

                                    const name =
                                        ctx.dataset.label || "";

                                    const val =
                                        ctx.dataset.data[
                                            ctx.dataIndex
                                        ];

                                    return (
                                        name + ": " + val + "%"
                                    );
                                }
                            }
                        }
                    }
                }
            });
    }


    /* =========================
       STUDENT CHART
    ========================== */
    function loadStudentChart() {

        doughnut(

            "chartContainer",

            [{
                    label: "Present",
                    value: 3610,
                    color: "#3D5EE1"
                },

                {
                    label: "Absent",
                    value: 444,
                    color: "#6FCCD8"
                }
            ],

            {
                cutout: "40%"
            }
        );
    }


    /* =========================
       TEACHER CHART
    ========================== */
    function loadTeacherChart() {

        doughnut(

            "chartContainer2",

            [{
                    label: "Present",
                    value: 200,
                    color: "#3D5EE1"
                },

                {
                    label: "Absent",
                    value: 20,
                    color: "#6FCCD8"
                }
            ],

            {
                cutout: "40%"
            }
        );
    }


    /* =========================
       STAFF CHART
    ========================== */
    function loadStaffChart() {

        doughnut(

            "chartContainer3",

            [{
                    label: "Present",
                    value: 120,
                    color: "#3D5EE1"
                },

                {
                    label: "Absent",
                    value: 10,
                    color: "#6FCCD8"
                }
            ],

            {
                cutout: "40%"
            }
        );
    }


    /* =========================
       CASH / ONLINE CHART
    ========================== */
    function loadCashOnlineChart() {

        doughnut(

            "cashOnline",

            [{
                    label: "Cash",
                    value: 50,
                    color: "#FF5A36"
                },

                {
                    label: "Online",
                    value: 50,
                    color: "#3B82F6"
                }
            ],

            {
                cutout: "80%"
            }
        );
    }


    /* =========================
       TAB SWITCH
    ========================== */
    $('button[data-bs-toggle="pill"]').on(

        "shown.bs.tab",

        function(e) {

            const target =
                $(e.target).attr("data-bs-target");

            if (target === "#students") {
                setTimeout(loadStudentChart, 0);
            }

            if (target === "#teachers") {
                setTimeout(loadTeacherChart, 0);
            }

            if (target === "#staff") {
                setTimeout(loadStaffChart, 0);
            }
        }
    );


    /* =========================
       INITIAL LOAD
    ========================== */
    setTimeout(function() {

        if ($("#students").hasClass("show")) {
            loadStudentChart();
        }

        loadCashOnlineChart();

        totalProfit();

    }, 0);


    /* =========================
       WINDOW RESIZE
    ========================== */
    let resizeTimer;

    $(window).on("resize", function() {

        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(function() {

            Object.keys(dashboardCharts).forEach(
                (k) => {

                    if (
                        dashboardCharts[k]?.resize
                    ) {
                        dashboardCharts[k].resize();
                    }
                }
            );

        }, 150);
    });

});
</script>

<script>
/* =========================
   LINE CHART FUNCTION
========================== */
function createLineChart(
    id,
    color,
    bgColor,
    dataValues
) {

    const ctx = document.getElementById(id);

    if (!ctx) return;

    new Chart(ctx, {

        type: "line",

        data: {

            labels: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul"
            ],

            datasets: [{
                data: dataValues,
                borderColor: color,
                backgroundColor: bgColor,
                fill: true,
                tension: 0.4,
                pointRadius: 0
            }]
        },

        options: {

            responsive: true,

            // MUST
            maintainAspectRatio: false,

            plugins: {
                legend: {
                    display: false
                }
            },

            scales: {

                x: {
                    display: false
                },

                y: {
                    display: false
                }
            }
        }
    });
}


/* =========================
   LINE CHART CALLS
========================== */
createLineChart(
    "earningsChart",
    "#3D5EE1",
    "rgba(61,94,225,0.1)",
    [30, 40, 25, 45, 35, 50, 48]
);

createLineChart(
    "expensesChart",
    "#EF4444",
    "rgba(239,68,68,0.1)",
    [40, 30, 20, 45, 35, 50, 28]
);
</script>




@endpush