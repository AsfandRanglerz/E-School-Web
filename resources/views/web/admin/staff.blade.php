@extends('web.admin.layout.app')
@section('title', 'Staff')

@section('content')

<div class="container-fluid px-0">

    <div class="d-flex justify-content-between align-items-center p-3 flex-wrap gap-3">

        <div class="d-flex flex-column">
            <h5 class="admin-page-heading">Staff</h5>
            <span class="admin-page-span">Overview / Staff</span>
        </div>

        <div class="d-flex justify-content-center align-items-center flex-wrap">

            <button class="primary-anchor free-details-a border-0 me-sm-3 me-2 btn-pistd">
                Download All ID Cards
            </button>

            <button class="primary-anchor free-details-a py-sm-2 py-1 me-sm-3 me-2 btn-pistd text-dark bg-transparent"">
                Pay Staff
            </button>

            <a href="#" class="dark-anchor-btn dark-anchor-btn-ads">
                + Add Staff
            </a>

        </div>

    </div>

    <div class="row g-3 px-3 py-4 row-equal">

        <div class="col-xl-3 col-md-6">
            <a href="#" class="student-dash-card student-dash-card-v1 text-decoration-none d-block">
                <img src="{{ asset('web/assets/images/student-dash-v2.png') }}" alt="">
                <h6>Total Staff</h6>
                <h3>0</h3>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="#" class="student-dash-card student-dash-card-v2 text-decoration-none d-block">
                <img src="{{ asset('web/assets/images/student-dash-v2.png') }}" alt="">
                <h6>Active Staff</h6>
                <h3>0</h3>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="#" class="student-dash-card student-dash-card-v3 text-decoration-none d-block">
                <img src="{{ asset('web/assets/images/student-dash-v3.png') }}" alt="">
                <h6>Newly Hired</h6>
                <h3>0</h3>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="#" class="student-dash-card student-dash-card-v4 text-decoration-none d-block">
                <img src="{{ asset('web/assets/images/student-dash-v4.png') }}" alt="">
                <h6>Terminated</h6>
                <h3>0</h3>
            </a>
        </div>

    </div>

    <div class="container-fluid px-0 pt-2 pb-5">

        <div class="dfst px-sm-3 px-1">

            <div class="p-3 dfsti">

                <ul class="nav nav-pills mb-3 custom-nav-pills-transactions" role="tablist">

                    <li class="nav-item">
                        <button class="nav-link active all-students-tab" data-bs-toggle="pill"
                            data-bs-target="#allTeachers" type="button">

                            All Teacher <span>4</span>

                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link all-families-tab" data-bs-toggle="pill"
                            data-bs-target="#otherStaff" type="button">

                            Other Staff <span>4</span>

                        </button>
                    </li>

                </ul>

                <div class="student-search-main-wrapper mb-4">

                    <div class="student-search-wrapper">

                        <i class="fa-solid fa-magnifying-glass student-search-icon"></i>

                        <input type="text" class="form-control"
                            placeholder="Search by name, phone, email, subject, cnic...">

                    </div>

                    <div class="student-search-btns">

                        <button type="button" class="student-search-btn">
                            <i class="fa-solid fa-filter"></i>
                        </button>

                        <button type="button" class="student-search-btn">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>

                    </div>

                </div>

                <div class="tab-content">

                    <div class="tab-pane fade show active" id="allTeachers">

                        <div class="table-container">

                            <table class="custom-table">

                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Father / Guardian</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Pay</th>
                                        <th>Role</th>
                                        <th>CNIC</th>
                                        <th>Status</th>
                                        <th>Address</th>
                                        <th>Created By</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>

                                        <td>
                                            <a href="#">Muzamil</a>
                                        </td>

                                        <td>Ahmed</td>
                                        <td>0354354663</td>
                                        <td>Alex@gmail.com</td>
                                        <td>N/A</td>
                                        <td>698 PKR</td>
                                        <td>Teacher</td>
                                        <td>1234567891234</td>

                                        <td>
                                            <span class="badge bg-success-subtle text-success rounded-pill px-3">
                                                Active
                                            </span>
                                        </td>

                                        <td>
                                            House#22, St#4, Housing Colony#1
                                        </td>

                                        <td>eSchool</td>

                                        <td>

                                            <div class="d-flex align-items-center gap-3">

                                                <a href="#">
                                                    <img src="{{ asset('web/assets/images/student-detail-edit-blue-vector.png') }}"
                                                        alt="">
                                                </a>

                                                <a href="#">
                                                    <img src="{{ asset('web/assets/images/three-dots.png') }}"
                                                        alt="">
                                                </a>

                                            </div>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="otherStaff">

                        <div class="table-container">

                            <table class="custom-table">

                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Father / Guardian</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Pay</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>

                                        <td>
                                            <a href="#">Ali Hamza</a>
                                        </td>

                                        <td>Rashid</td>
                                        <td>03111234567</td>
                                        <td>ali@gmail.com</td>
                                        <td>Accountant</td>
                                        <td>45000 PKR</td>

                                        <td>
                                            <span class="badge bg-success-subtle text-success rounded-pill px-3">
                                                Active
                                            </span>
                                        </td>

                                        <td>03 Mar 2026</td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection