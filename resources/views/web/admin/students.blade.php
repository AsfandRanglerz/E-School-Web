@extends('web.admin.layout.app')
@section('title', 'Students')

@section('content')

<div class="container-fluid px-0">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center p-3 flex-wrap gap-3">

        <div class="d-flex flex-column">
            <h5 class="admin-page-heading">Students</h5>
            <span class="admin-page-span">Students / Overview</span>
        </div>

        <div class="d-flex justify-content-center align-items-center flex-wrap">
            <button class="primary-anchor free-details-a border-0 me-sm-3 me-2 btn-pistd">
                Download All ID Cards
            </button>

            <a href="#" class="dark-anchor-btn dark-anchor-btn-ads">
                + Add Student
            </a>
        </div>

    </div>

    <!-- Cards -->
    <div class="row g-3 px-3 py-4 row-equal">

        <div class="col-xl-3 col-md-6">
            <a href="#" class="student-dash-card student-dash-card-v1 text-decoration-none d-block">
                <img src="{{ asset('web/assets/images/student-dash-v2.png') }}" alt="">
                <h6>Active Students</h6>
                <h3>1</h3>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="#" class="student-dash-card student-dash-card-v2 text-decoration-none d-block">
                <img src="{{ asset('web/assets/images/student-dash-v2.png') }}" alt="">
                <h6>Active Families</h6>
                <h3>0</h3>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="#" class="student-dash-card student-dash-card-v3 text-decoration-none d-block">
                <img src="{{ asset('web/assets/images/student-dash-v3.png') }}" alt="">
                <h6>New Admission (This Month)</h6>
                <h3>0</h3>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="#" class="student-dash-card student-dash-card-v4 text-decoration-none d-block">
                <img src="{{ asset('web/assets/images/student-dash-v4.png') }}" alt="">
                <h6>Terminated Students</h6>
                <h3>0</h3>
            </a>
        </div>

    </div>

    <!-- Table Section -->
    <div class="container-fluid px-0 pt-2 pb-5">

        <div class="dfst px-sm-3 px-1">

            <div class="p-3 dfsti">

                <!-- Pills -->
                <ul class="nav nav-pills mb-3 custom-nav-pills-transactions" role="tablist">

                    <li class="nav-item">
                        <button class="nav-link active all-students-tab" data-bs-toggle="pill"
                            data-bs-target="#allStudents" type="button">

                            All Students <span>4</span>

                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link all-families-tab" data-bs-toggle="pill" data-bs-target="#allFamilies"
                            type="button">

                            All Families <span>4</span>

                        </button>
                    </li>

                </ul>

                <!-- Search Row -->
                <div class="student-search-main-wrapper mb-4">

                    <!-- Select -->
                    <div class="student-filter-wrapper">

                        <select class="form-select form-control select2">
                            <option value="" selected disabled>
                                Filter By Class
                            </option>

                            <option value="1">Class 1</option>
                            <option value="2">Class 2</option>
                            <option value="3">Class 3</option>
                            <option value="4">Class 4</option>
                        </select>

                    </div>

                    <!-- Search -->
                    <div class="student-search-wrapper">

                        <i class="fa-solid fa-magnifying-glass student-search-icon"></i>

                        <input type="text" class="form-control"
                            placeholder="Search by name, roll no, cnic, family or religion...">

                    </div>

                    <!-- Buttons -->
                    <div class="student-search-btns">

                        <button type="button" class="student-search-btn">
                            <i class="fa-solid fa-filter"></i>
                        </button>

                        <button type="button" class="student-search-btn">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>

                    </div>

                </div>

                <!-- Tab Content -->
                <div class="tab-content">

                    <!-- Students -->
                    <div class="tab-pane fade show active" id="allStudents">

                        <div class="table-container">

                            <table class="custom-table">

                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Roll No.</th>
                                        <th>Father/Guardian</th>
                                        <th>CNIC No.</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>DOB</th>
                                        <th>Religion</th>
                                        <th>Admission Date</th>
                                        <th>Status</th>
                                        <th>Discount</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>
                                            <a href="#">Muzamil</a>
                                        </td>
                                        <td>5</td>
                                        <td>Ahmed</td>
                                        <td>N/A</td>
                                        <td>8</td>
                                        <td>B</td>
                                        <td>27 Feb 2026</td>
                                        <td>Muslim</td>
                                        <td>17 Feb 2026</td>
                                        <td>
                                            <span class="badge bg-success-subtle text-success rounded-pill px-3">
                                                Active
                                            </span>
                                        </td>
                                        <td>N/A</td>
                                        <td>01 Mar 2026</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="#">Ali Hamza</a>
                                        </td>
                                        <td>8</td>
                                        <td>Rashid</td>
                                        <td>35201-1234567-1</td>
                                        <td>7</td>
                                        <td>A</td>
                                        <td>14 Jan 2026</td>
                                        <td>Muslim</td>
                                        <td>10 Feb 2026</td>
                                        <td>
                                            <span class="badge bg-success-subtle text-success rounded-pill px-3">
                                                Active
                                            </span>
                                        </td>
                                        <td>10%</td>
                                        <td>03 Mar 2026</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="#">Huzaifa</a>
                                        </td>
                                        <td>11</td>
                                        <td>Akram</td>
                                        <td>N/A</td>
                                        <td>6</td>
                                        <td>C</td>
                                        <td>04 Mar 2026</td>
                                        <td>Muslim</td>
                                        <td>21 Feb 2026</td>
                                        <td>
                                            <span class="badge bg-warning-subtle text-warning rounded-pill px-3">
                                                Pending
                                            </span>
                                        </td>
                                        <td>N/A</td>
                                        <td>05 Mar 2026</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="#">Zain</a>
                                        </td>
                                        <td>14</td>
                                        <td>Imran</td>
                                        <td>35201-9876543-1</td>
                                        <td>9</td>
                                        <td>D</td>
                                        <td>19 Apr 2026</td>
                                        <td>Muslim</td>
                                        <td>28 Feb 2026</td>
                                        <td>
                                            <span class="badge bg-danger-subtle text-danger rounded-pill px-3">
                                                Inactive
                                            </span>
                                        </td>
                                        <td>5%</td>
                                        <td>08 Mar 2026</td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                    <!-- Families -->
                    <div class="tab-pane fade" id="allFamilies">

                        <div class="table-container">

                            <table class="custom-table">

                                <thead>
                                    <tr>
                                        <th>Family Name</th>
                                        <th>Total Students</th>
                                        <th>Guardian</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>Ahmed Family</td>
                                        <td>1</td>
                                        <td>Ahmed</td>
                                        <td>0300-1234567</td>
                                        <td>
                                            <span class="badge bg-success-subtle text-success rounded-pill px-3">
                                                Active
                                            </span>
                                        </td>
                                        <td>01 Mar 2026</td>
                                    </tr>

                                    <tr>
                                        <td>Rashid Family</td>
                                        <td>2</td>
                                        <td>Rashid</td>
                                        <td>0311-9876543</td>
                                        <td>
                                            <span class="badge bg-success-subtle text-success rounded-pill px-3">
                                                Active
                                            </span>
                                        </td>
                                        <td>03 Mar 2026</td>
                                    </tr>

                                    <tr>
                                        <td>Akram Family</td>
                                        <td>3</td>
                                        <td>Akram</td>
                                        <td>0322-4567890</td>
                                        <td>
                                            <span class="badge bg-warning-subtle text-warning rounded-pill px-3">
                                                Pending
                                            </span>
                                        </td>
                                        <td>05 Mar 2026</td>
                                    </tr>

                                    <tr>
                                        <td>Imran Family</td>
                                        <td>1</td>
                                        <td>Imran</td>
                                        <td>0333-6549871</td>
                                        <td>
                                            <span class="badge bg-danger-subtle text-danger rounded-pill px-3">
                                                Inactive
                                            </span>
                                        </td>
                                        <td>08 Mar 2026</td>
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