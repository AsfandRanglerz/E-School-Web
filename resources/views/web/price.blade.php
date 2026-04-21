@extends('web.layout.app')
@section('title', 'Prices Plans')

@section('content')
<div class="container-fluid px-0 py-4 contqiner-for-pricing-plans">
    <div class="text-center px-sm-1 px-2 pt-3">
        <h1>Pricing <span>Plans</span></h1>
        <span class="pricing-span  ">Choose from flexible pricing options tailored for your current needs — with
            future-ready
            plans coming soon!</span>

    </div>
    <div class="d-flex justify-content-center align-items-center gap-2 pt-4">

        <span class="monthly-yearly-span">MONTHLY</span>

        <label class="switch">
            <input type="checkbox" id="planToggle">
            <span class="slider"></span>
        </label>

        <span class="monthly-yearly-span">YEARLY</span>

    </div>
    <div class="pt-4 text-center">
        <span class="switch-monthly-yearly-span"><img src="{{asset('web/assets/images/switch-monthly.png')}}" alt=""
                class="px-2 smy-img">Save 10% - Switch to year</span>
    </div>


</div>
<div class="container-fluid px-0 mt-sm-5 mt-3">
        <div class="tab-content px-sm-5 px-3 pb-sm-5 pb-3" id="nav-tabContent">

            
            <div class="tab-pane fade show active monthly-content" id="nav-monthly" role="tabpanel">
                <div class="row mx-0">
                  <div class="col-md-4 p-sm-5 p-3 br-n div-for-pricing-card">
                    <div class="d-flex  justify-content-between align-items-center gap-3">
                      <h6>Standard</h6>
                      <h6>Rs 3,000 / month</h6>
                    </div>
                    <span class="lighted-span-in-cards">Up to 150 students</span>
                    <div class="my-3 pt-3 d-flex flex-column div-for-pricing-card-content">
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">  Upto 150 students</span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Manage All student records </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Family Profiles & Linked Student</span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Class Promotions & Section management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Add & Manage Staff </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Complete Fee Management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Family Wallet </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Receipt & Invoice Generation </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Funds Management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Profit & Loss Ledger </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Financial Reports (PDF Export) </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">User Roles & Permissions </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Full Activity Logs</span>
                    </div>
                    <div class="pt-5">
                        <a href="#" class="dark-anchor-btn d-flex justify-content-center ">Get Started</a>
                    </div>
                  </div>
                  <div class="col-md-4 p-sm-5 p-3 br-n div-for-pricing-card">
                    <div class="d-flex  justify-content-between align-items-center gap-3">
                      <h6>Plus</h6>
                      <h6>Rs 5,000 / month</h6>
                    </div>
                    <span class="lighted-span-in-cards bdr-cl1">Unlimited Studends</span>
                    <div class="my-3 pt-3 d-flex flex-column div-for-pricing-card-content">
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Unlimited Students</span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Manage All student records </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Family Profiles & Linked Student</span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Class Promotions & Section management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Add & Manage Staff </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Complete Fee Management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Family Wallet </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Receipt & Invoice Generation </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Funds Management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Profit & Loss Ledger </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Financial Reports (PDF Export) </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">User Roles & Permissions </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Full Activity Logs</span>
                    </div>
                    <div class="pt-5">
                        <a href="#" class="dark-anchor-btn d-flex justify-content-center ">Get Started</a>
                    </div>
                  </div>
                  <div class="col-md-4 p-sm-5 p-3  div-for-pricing-card">
                    <div class="d-flex  justify-content-between align-items-center gap-3">
                      <h6>Premium</h6>
                      <h6>Rs 10,000 / month</h6>
                    </div>
                    <span class="lighted-span-in-cards bdr-cl2">Unlimited Students</span>
                    <div class="my-3 pt-3 d-flex flex-column div-for-pricing-card-content">
                        <span class="cl-span-in-price-card"><img src="{{asset('web/assets/images/click-icon-cl.png')}}" alt="" class="me-2">Everything in plus plan</span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Manage All student records </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Family Profiles & Linked Student</span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Class Promotions & Section management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Add & Manage Staff </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Complete Fee Management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Family Wallet </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Receipt & Invoice Generation </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Funds Management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Profit & Loss Ledger </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Financial Reports (PDF Export) </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">User Roles & Permissions </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Full Activity Logs</span>
                    </div>
                    <div class="pt-5">
                        <a href="#" class="dark-anchor-btn d-flex justify-content-center ">Get Started</a>
                    </div>
                  </div>
                  
                </div>
            </div>

            <!-- Early Content -->
            <div class="tab-pane fade early-content" id="nav-early" role="tabpanel">
                <div class="row mx-0">
                  <div class="col-md-4 p-sm-5 p-3 br-n div-for-pricing-card">
                    <div class="d-flex  justify-content-between align-items-center gap-3">
                      <h6>Standard</h6>
                      <h6>Rs 36,000 / year</h6>
                    </div>
                    <span class="lighted-span-in-cards">Up to 150 students</span>
                    <div class="my-3 pt-3 d-flex flex-column div-for-pricing-card-content">
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">  Upto 150 students</span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Manage All student records </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Family Profiles & Linked Student</span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Class Promotions & Section management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Add & Manage Staff </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Complete Fee Management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Family Wallet </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Receipt & Invoice Generation </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Funds Management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Profit & Loss Ledger </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Financial Reports (PDF Export) </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">User Roles & Permissions </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Full Activity Logs</span>
                    </div>
                    <div class="pt-5">
                        <a href="#" class="dark-anchor-btn d-flex justify-content-center ">Get Started</a>
                    </div>
                  </div>
                  <div class="col-md-4 p-sm-5 p-3 br-n div-for-pricing-card">
                    <div class="d-flex  justify-content-between align-items-center gap-3">
                      <h6>Plus</h6>
                      <h6>Rs 50,000 / year</h6>
                    </div>
                    <span class="lighted-span-in-cards bdr-cl1">Unlimited Studends</span>
                    <div class="my-3 pt-3 d-flex flex-column div-for-pricing-card-content">
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Unlimited Students</span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Manage All student records </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Family Profiles & Linked Student</span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Class Promotions & Section management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Add & Manage Staff </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Complete Fee Management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Family Wallet </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Receipt & Invoice Generation </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Funds Management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Profit & Loss Ledger </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Financial Reports (PDF Export) </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">User Roles & Permissions </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Full Activity Logs</span>
                    </div>
                    <div class="pt-5">
                        <a href="#" class="dark-anchor-btn d-flex justify-content-center ">Get Started</a>
                    </div>
                  </div>
                  <div class="col-md-4 p-sm-5 p-3  div-for-pricing-card">
                    <div class="d-flex  justify-content-between align-items-center gap-3">
                      <h6>Premium</h6>
                      <h6>Rs 100,000 / year</h6>
                    </div>
                    <span class="lighted-span-in-cards bdr-cl2">Unlimited Students</span>
                    <div class="my-3 pt-3 d-flex flex-column div-for-pricing-card-content">
                        <span class="cl-span-in-price-card"><img src="{{asset('web/assets/images/click-icon-cl.png')}}" alt="" class="me-2">Everything in plus plan</span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Manage All student records </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Family Profiles & Linked Student</span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Class Promotions & Section management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Add & Manage Staff </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Complete Fee Management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Family Wallet </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Receipt & Invoice Generation </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Funds Management </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Profit & Loss Ledger </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Financial Reports (PDF Export) </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">User Roles & Permissions </span>
                        <span><img src="{{asset('web/assets/images/click-icon.png')}}" alt="" class="me-2">Full Activity Logs</span>
                    </div>
                    <div class="pt-5">
                        <a href="#" class="dark-anchor-btn d-flex justify-content-center ">Get Started</a>
                    </div>
                  </div>
                  
                </div>
            </div>

        </div>
    </div>
@endsection