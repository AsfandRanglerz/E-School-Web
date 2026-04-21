@extends('web.layout.app')
@section('title', 'Home')

@section('content')
<div class="container-fluid px-0 row-div-for-index">
    <div class="row g-2 mx-0 ">
        <div class="col-md-6">
            <div class="p-md-5 p-3 left-content-top-div">
                <h2>Pakistan's First</h2>
                <h2>AI-Based School System</h2>
                <span>Complete school management solution designed specifically for Pakistani schools. Manage
                    admissions, attendance, fees, exams, and communication—all in one place. No IT expertise
                    needed.</span>
                <div class="sign-login-top-div my-sm-5 my-3">
                    <a href="#" class="dark-anchor m-0 dap">Sign Up</a>
                    <a href="#" class="transparent-anchor-border">Login</a>

                </div>
            </div>
        </div>
        <div class="col-md-6">

            <div class="d-flex justify-content-center align-items-center  p-3">
                <img src="{{asset('web/assets/images/index-img-main.png')}}" alt="" class="index-img">
            </div>
        </div>


    </div>
</div>
<div class="container-fluid px-0 py-4 conteiner-for-why-eschool">
    <h1 class="px-sm-1 px-2">Why <span>eSchool?</span></h1>
    <div class="row mx-0 p-sm-4 p-2 row-for-why-eschool">
        <div class="col-md-4 pb-3">
            <div class="row mx-0">
                <div class="col-1 d-flex justify-content-center align-items-start">

                    <img src="{{asset('web/assets/images/automated.png')}}" alt="" class="img-for-why-eschool">

                </div>
                <div class="col-11">
                    <h6>Automated Fee Management</h6>
                    <span>Track fees, send payment reminders via SMS, and process online payments. Each family has a
                        digital wallet showing pending dues, payment history, and balance. Reduce fee collection time by
                        70%.</span>
                </div>

            </div>

        </div>
        <div class="col-md-4 pb-3">
            <div class="row mx-0">
                <div class="col-1 d-flex justify-content-center align-items-start">
                    <img src="{{asset('web/assets/images/realname.png')}}" alt="" class="img-for-why-eschool">
                </div>
                <div class="col-11">
                    <h6>Real-Time Communication</h6>
                    <span>Send instant announcements to specific classes or the entire school. Parents eceive SMS
                        notifications and can chat directly with teachers through the mobile app. Keep everyone
                        informed, always.</span>
                </div>

            </div>
        </div>
        <div class="col-md-4 pb-3">
            <div class="row mx-0">
                <div class="col-1 d-flex justify-content-center align-items-start">
                    <img src="{{asset('web/assets/images/export.png')}}" alt="" class="img-for-why-eschool">
                </div>
                <div class="col-11">
                    <h6>Complete Financial Control</h6>
                    <span>Monitor all income and expenses with detailed ledger reports. Generate financia statements,
                        track profit/loss, and manage school funds—all with automated calculations and exportable
                        reports.</span>
                </div>

            </div>
        </div>

    </div>

</div>
<div class="container-fluid px-0 conteiner-for-we-have-eschool">
    <h1 class="px-sm-1 px-2">We've Got The <span>Answers</span></h1>
    <div class="row mx-0 p-sm-4 p-2 row-for-we-have-eschool">
        <div class="p-3 div-for-we-have-eschool bg-cclass border-cclass">
            <div class="d-flex justify-content-between align-items-center div-for-we-have-eschool-inner">
                <h6 class="mb-0">What makes eSchool different from other school management systems?</h6>
                <span>-</span>
            </div>
            <span class="span-for-we-have-eschool">eSchool is built specifically for Pakistani schools. We understand
                local challenges like cash-based fee collection, large student populations, and the need for bilingual
                support. Our system includes SMS notifications, offline mobile apps, Urdu/English interface, and
                features designed for Pakistani school workflows. Plus, we offer 24/7 support in both languages.</span>

        </div>
        <div class="p-3 div-for-we-have-eschool bg-cclass border-cclass">
            <div class="d-flex justify-content-between align-items-center div-for-we-have-eschool-inner">
                <h6 class="mb-0">Can eSchool handle schools with 1000+ students?</h6>
                <span>-</span>
            </div>
            <span class="span-for-we-have-eschool">eSchool is built specifically for Pakistani schools. We understand
                local challenges like cash-based fee collection, large student populations, and the need for bilingual
                support. Our system includes SMS notifications, offline mobile apps, Urdu/English interface, and
                features designed for Pakistani school workflows. Plus, we offer 24/7 support in both languages.</span>

        </div>
        <div class="p-3 div-for-we-have-eschool bg-cclass border-cclass">
            <div class="d-flex justify-content-between align-items-center div-for-we-have-eschool-inner">
                <h6 class="mb-0">Do I need an IT team or technical knowledge to use eSchool?</h6>
                <span>-</span>
            </div>
            <span class="span-for-we-have-eschool">eSchool is built specifically for Pakistani schools. We understand
                local challenges like cash-based fee collection, large student populations, and the need for bilingual
                support. Our system includes SMS notifications, offline mobile apps, Urdu/English interface, and
                features designed for Pakistani school workflows. Plus, we offer 24/7 support in both languages.</span>

        </div>
        <div class="p-3 div-for-we-have-eschool bg-cclass border-cclass">
            <div class="d-flex justify-content-between align-items-center div-for-we-have-eschool-inner">
                <h6 class="mb-0">How does the fee collection and wallet system work?</h6>
                <span>-</span>
            </div>
            <span class="span-for-we-have-eschool">eSchool is built specifically for Pakistani schools. We understand
                local challenges like cash-based fee collection, large student populations, and the need for bilingual
                support. Our system includes SMS notifications, offline mobile apps, Urdu/English interface, and
                features designed for Pakistani school workflows. Plus, we offer 24/7 support in both languages.</span>

        </div>
        <div class="p-3 div-for-we-have-eschool bg-cclass border-cclass">
            <div class="d-flex justify-content-between align-items-center div-for-we-have-eschool-inner">
                <h6 class="mb-0">Can parents communicate with teachers through eSchool?</h6>
                <span>-</span>
            </div>
            <span class="span-for-we-have-eschool">eSchool is built specifically for Pakistani schools. We understand
                local challenges like cash-based fee collection, large student populations, and the need for bilingual
                support. Our system includes SMS notifications, offline mobile apps, Urdu/English interface, and
                features designed for Pakistani school workflows. Plus, we offer 24/7 support in both languages.</span>

        </div>
        <div class="p-3 div-for-we-have-eschool bg-cclass border-cclass">
            <div class="d-flex justify-content-between align-items-center div-for-we-have-eschool-inner">
                <h6 class="mb-0">Is my school data secure and backed up?</h6>
                <span>-</span>
            </div>
            <span class="span-for-we-have-eschool">eSchool is built specifically for Pakistani schools. We understand
                local challenges like cash-based fee collection, large student populations, and the need for bilingual
                support. Our system includes SMS notifications, offline mobile apps, Urdu/English interface, and
                features designed for Pakistani school workflows. Plus, we offer 24/7 support in both languages.</span>

        </div>
        <div class="p-3 div-for-we-have-eschool bg-cclass border-cclass">
            <div class="d-flex justify-content-between align-items-center div-for-we-have-eschool-inner">
                <h6 class="mb-0">What happens if I lose internet connection?</h6>
                <span>-</span>
            </div>
            <span class="span-for-we-have-eschool">eSchool is built specifically for Pakistani schools. We understand
                local challenges like cash-based fee collection, large student populations, and the need for bilingual
                support. Our system includes SMS notifications, offline mobile apps, Urdu/English interface, and
                features designed for Pakistani school workflows. Plus, we offer 24/7 support in both languages.</span>

        </div>
        <div class="p-3 div-for-we-have-eschool bg-cclass border-cclass">
            <div class="d-flex justify-content-between align-items-center div-for-we-have-eschool-inner">
                <h6 class="mb-0">Can I customize eSchool for my school's specific needs?</h6>
                <span>-</span>
            </div>
            <span class="span-for-we-have-eschool">eSchool is built specifically for Pakistani schools. We understand
                local challenges like cash-based fee collection, large student populations, and the need for bilingual
                support. Our system includes SMS notifications, offline mobile apps, Urdu/English interface, and
                features designed for Pakistani school workflows. Plus, we offer 24/7 support in both languages.</span>

        </div>


    </div>
</div>
<div class="container-fluid px-0 pb-4 pt-2 conteiner-for-we-have-eschool">
    <h1 class="px-sm-1 px-2">Still have <span>Questions</span></h1>
    <div class="d-flex flex-column justify-content-center align-items-center p-3">
        <span class="text-center pspan">Please describe your case to receive the most accurate advice</span>
        <a href="#" class="dark-anchor-btn justify-content-center align-items-center mt-4"><img
                src="{{asset('web/assets/images/message-icon.png')}}" class="px-2 icon-message-img" alt="">Contact Us</a>

    </div>
</div>
<div class="container-fluid px-0 pb-5 mt-sm-5 mt-3">

    <div class="row-div-for-index-bottom">
        <div class="row mx-0">
        <div class="col-md-5 d-flex justify-content-center align-items-center">
          <img src="{{asset('web/assets/images/boast-icons.png')}}" class="boast-icon-img" alt="">
        </div>
        <div class="col-md-7 d-flex flex-column justify-content-center right-content-index-bottom">
          <h1>Ready to Transform Your School Management?</h1>
          <h1>Get Started <span>Today</span></h1>

          <div class="mt-3">
            <a href="#" class="primary-anchor">Start Free Trial</a>
          </div>
        </div>
    </div>
    </div>


</div>

@endsection