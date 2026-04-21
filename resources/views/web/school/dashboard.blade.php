@extends('web.school.layout.app')
@section('title', 'School Dashboard')

@section('content')
<div class="container-fluid px-0">
    <div class="my-3 mx-4 p-3 dfsdt">
        <span>Grace Period - Payment Required</span>
    </div>

</div>
<div class="container-fluid px-0">
    <div class="px-4">
        <div class="row g-3">

            <div class="col-md-4">
                <div class="d-flex flex-column dcssp bgs p-3">
                    <span>Total Schools</span>
                    <h2 class="mb-0">1</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="d-flex flex-column dcssp bgst p-3">
                    <span>Total Students</span>
                    <h2 class="mb-0">2</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="d-flex flex-column dcssp bgp p-3">
                    <span>Pending Payments</span>
                    <h2 class="mb-0">3</h2>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid px-0 mt-3">
    <div class="px-4">
        <div class="row g-3">

            <!-- Left Welcome Card -->
            <div class="col-lg-8">
                <div class="dfwbai px-3">
                    <div class="row align-items-center">
                        <div class="col-md-7 p-3">
                            <h3 class="mb-2">Welcome back, Muzamil 👋</h3>
                            <span>Here's an overview of your schools and financial status. </span>
                        </div>
                        <div class="col-md-5 wdid">
                            <img src="{{asset('web/assets/images/wdash.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Card -->
            <div class="col-lg-4">
                <div class="d-flex flex-column p-3 h-100 dovd">
                    <h6>Overview</h6>
                    <span>School status summary</span>
                    <div class="d-flex my-3 align-items-center">
                        <h6 class="mb-0">1</h6>
                        <span>Active Schools</span>
                    </div>
                    <div class="d-flex mb-3 align-items-center">
                        <h6 class="mb-0">0</h6>
                        <span>Terminated Schools</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid px-0 mt-3">
    <div class="px-4 dfst">
        <h5>Schools</h5>

        <div class="p-3 dfsti">

            <!-- Nav Pills -->
            <ul class="nav nav-pills mb-3 custom-nav-pills-schools" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active all-schools-tab" data-bs-toggle="pill" data-bs-target="#allSchools" type="button">
                        All <span>1</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active-schools-tab" data-bs-toggle="pill" data-bs-target="#activeSchools" type="button">
                        Active <span>1</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link terminated-schools-tab" data-bs-toggle="pill" data-bs-target="#terminatedSchools" type="button">
                        Terminated <span>1</span>
                    </button>
                </li>
            </ul>

            <!-- Search (same) -->
            <div>
                <form action="" class="form-for-search-dash">
                    <div class="my-3">
                        <input type="text" class="form-control"
                            placeholder="Search by school name, phone, students... ">
                    </div>
                </form>
            </div>

            <!-- Tab Content -->
            <div class="tab-content">

                <!-- All -->
                <div class="tab-pane fade show active all-schools-content" id="allSchools">
                    <div class="table-container">
                        <table class="custom-table">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>School Name</th>
                                    <th>Phone number</th>
                                    <th>Students</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="logo-td"><div class="logo-circle">ST</div></td>
                                    <td>eSchool</td>
                                    <td>4324141456</td>
                                    <td>5435</td>
                                    <td>3,000 PKR</td>
                                    <td><span class="status-badge status-active">Active</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Active -->
                <div class="tab-pane fade active-schools-content" id="activeSchools">
                    <div class="table-container">
                        <table class="custom-table">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>School Name</th>
                                    <th>Phone number</th>
                                    <th>Students</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="logo-td"><div class="logo-circle">ST</div></td>
                                    <td>eSchool</td>
                                    <td>4324141456</td>
                                    <td>5435</td>
                                    <td>3,000 PKR</td>
                                    <td><span class="status-badge status-active">Active</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Terminated -->
                <div class="tab-pane fade terminated-schools-content" id="terminatedSchools">
                    <div class="table-container">
                        <table class="custom-table">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>School Name</th>
                                    <th>Phone number</th>
                                    <th>Students</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="logo-td"><div class="logo-circle">ST</div></td>
                                    <td>eSchool</td>
                                    <td>4324141456</td>
                                    <td>5435</td>
                                    <td>3,000 PKR</td>
                                    <td><span class="status-badge status-active">Active</span></td>
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