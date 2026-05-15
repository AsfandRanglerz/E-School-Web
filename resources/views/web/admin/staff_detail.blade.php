@extends('web.admin.layout.app')
@section('title', 'Staff Detail')

@section('content')
@include('web.admin.modals.give-money-to-staff-modal')
<div class="container-fluid px-0 student-detail-wrapper">

    <div class="p-3">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 student-detail-header">

            <div class="d-flex flex-column">
                <h5 class="admin-page-heading">
                    Staff Detail
                </h5>

                <span class="admin-page-span">
                    Staff / Overview / Alex
                </span>
            </div>

        </div>

        {{-- Profile --}}
        <div class="student-detail-profile-section mt-md-5 mt-3 mb-4">

            <div class="student-detail-profile-card">

                <div class="student-detail-profile-img">
                    <img src="{{ asset('web/assets/images/sact3.png') }}" alt="">
                </div>

                <div class="student-detail-info">

                    <h4 class="student-detail-name">
                        Alex

                        <span class="staff-role-text">
                            (Teacher)
                        </span>
                    </h4>

                    <div class="student-detail-meta">

                        <span class="student-detail-id">
                            T0001
                        </span>

                        <button class="btn student-detail-terminated">
                            ✖ Terminated
                        </button>

                        <button class="dark-anchor-btn dabtn-stdetail btn-in-sdintro-section">
                            ✎ Edit Detail
                        </button>

                        

                        <label class="student-detail-star">

                            Best Performer Of The Year

                            <input type="checkbox" class="student-detail-checkbox">

                        </label>

                    </div>

                </div>

            </div>

        </div>

        {{-- Main Content --}}
        <div class="row g-4">

            {{-- Left --}}
            <div class="col-lg-8">

                <div class="student-detail-bottom-card">

                    {{-- Tabs --}}
                    <ul class="nav nav-pills mb-4 custom-nav-pills-transactions" id="staffTabs" role="tablist">

                        <li class="nav-item" role="presentation">
                            <button class="nav-link active"
                                    id="transactions-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#transactions"
                                    type="button"
                                    role="tab">
                                Transactions
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link"
                                    id="activities-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#activities"
                                    type="button"
                                    role="tab">
                                Activities
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link"
                                    id="attendance-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#attendance"
                                    type="button"
                                    role="tab">
                                Attendance
                            </button>
                        </li>

                    </ul>

                    {{-- Filters --}}
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

                        <input type="date"
                               class="form-control staff-date-filter-btn">

                        <div class="student-search-wrapper">

                        <i class="fa-solid fa-magnifying-glass student-search-icon"></i>

                        <input type="text" class="form-control"
                            placeholder="Search....">

                    </div>

                    </div>

                    {{-- Tabs Content --}}
                    <div class="tab-content" id="staffTabsContent">

                        {{-- Transactions --}}
                        <div class="tab-pane fade show active"
                             id="transactions"
                             role="tabpanel">

                            <div class="table-container">

                                <table class="custom-table">

                                    <thead>

                                        <tr>
                                            <th>Created By</th>
                                            <th>Amount</th>
                                            <th>Reason</th>
                                            <th>Type</th>
                                            <th>Document</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td>eSchool</td>

                                            <td>
                                                <span class="staff-amount-badge">
                                                    0 PKR
                                                </span>
                                            </td>

                                            <td>Paid Loan</td>

                                            <td>Loan</td>

                                            <td>No Document</td>

                                        </tr>

                                        <tr>

                                            <td>eSchool</td>

                                            <td>
                                                <span class="staff-amount-badge green-badge">
                                                    898 / 658 PKR
                                                </span>
                                            </td>

                                            <td>Salary</td>

                                            <td>Transaction</td>

                                            <td>No Document</td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                        {{-- Activities --}}
                        <div class="tab-pane fade"
                             id="activities"
                             role="tabpanel">

                            <div class="table-container">

                                <table class="custom-table">

                                    <thead>

                                        <tr>
                                            <th>Activity</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Remarks</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>Lecture Conducted</td>
                                            <td>2026-02-14</td>
                                            <td>Completed</td>
                                            <td>Science Class</td>
                                        </tr>

                                        <tr>
                                            <td>Meeting Attended</td>
                                            <td>2026-02-16</td>
                                            <td>Present</td>
                                            <td>Monthly Staff Meeting</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                        {{-- Attendance --}}
                        <div class="tab-pane fade"
                             id="attendance"
                             role="tabpanel">

                            <div class="table-container">

                                <table class="custom-table">

                                    <thead>

                                        <tr>
                                            <th>Date</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                            <th>Status</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>2026-02-20</td>
                                            <td>08:00 AM</td>
                                            <td>02:00 PM</td>
                                            <td>Present</td>
                                        </tr>

                                        <tr>
                                            <td>2026-02-21</td>
                                            <td>08:15 AM</td>
                                            <td>02:05 PM</td>
                                            <td>Late</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            {{-- Right --}}
            <div class="col-lg-4">

                {{-- Balance Card --}}
                <div class="staff-balance-card mb-4">

                    <span class="staff-balance-title">
                        Current balance
                    </span>

                    <h2 class="staff-balance-amount">
                        0 PKR ₨
                    </h2>

                    <div class="d-flex align-items-center gap-2 flex-wrap mt-4 justify-content-between align-items-center">

                        <button class="staff-balance-btn">
                            <span>- </span> <span>Take Money</span>
                        </button>

                        <button class="staff-balance-btn" data-bs-toggle="modal" data-bs-target="#giveMoneyToStaffModal">
                            <span>+ </span> <span>Give Money</span>
                        </button>

                    </div>

                </div>

                {{-- Detail Card --}}
                <div class="student-detail-bottom-card">

                    <div class="student-detail-bottom-header">

                        <h4 class="student-detail-bottom-title">
                            Detail
                        </h4>

                    </div>

                    <div class="student-detail-bottom-list">

                        <div class="student-detail-bottom-item">

                            <span class="student-detail-bottom-label">
                                Full Name
                            </span>

                            <span class="student-detail-bottom-value">
                                Alex
                            </span>

                        </div>

                        <div class="student-detail-bottom-item">

                            <span class="student-detail-bottom-label">
                                Father Name
                            </span>

                            <span class="student-detail-bottom-value">
                                John
                            </span>

                        </div>

                        <div class="student-detail-bottom-item">

                            <span class="student-detail-bottom-label">
                                WhatsApp Number
                            </span>

                            <span class="student-detail-bottom-value">
                                3847567547
                            </span>

                        </div>

                        <div class="student-detail-bottom-item">

                            <span class="student-detail-bottom-label">
                                Phone Number
                            </span>

                            <span class="student-detail-bottom-value">
                                3156620049
                            </span>

                        </div>

                        <div class="student-detail-bottom-item">

                            <span class="student-detail-bottom-label">
                                CNIC
                            </span>

                            <span class="student-detail-bottom-value">
                                3810121454876
                            </span>

                        </div>

                        <div class="student-detail-bottom-item">

                            <span class="student-detail-bottom-label">
                                Pay
                            </span>

                            <span class="student-detail-bottom-value">
                                986 PKR
                            </span>

                        </div>

                        <div class="student-detail-bottom-item">

                            <span class="student-detail-bottom-label">
                                Subject
                            </span>

                            <span class="student-detail-bottom-value">
                                N/A
                            </span>

                        </div>

                        <div class="student-detail-bottom-item">

                            <span class="student-detail-bottom-label">
                                Address
                            </span>

                            <span class="student-detail-bottom-value">
                                Bhakkar Lodhran
                            </span>

                        </div>

                        <div class="student-detail-bottom-item">

                            <span class="student-detail-bottom-label">
                                Note
                            </span>

                            <span class="student-detail-bottom-value">
                                N/A
                            </span>

                        </div>

                        <div class="student-detail-bottom-item">

                            <span class="student-detail-bottom-label">
                                Class Teacher
                            </span>

                            <span class="student-detail-bottom-value">
                                9th
                            </span>

                        </div>

                        <div class="student-detail-bottom-item border-0 pb-0">

                            <span class="student-detail-bottom-label">
                                Subjects
                            </span>

                            <span class="student-detail-bottom-value">
                                English, Science
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

