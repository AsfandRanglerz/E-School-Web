@extends('web.admin.layout.app')
@section('title', 'Student Detail')

@section('content')
@include('web.admin.modals.terminate-student-modal')
@include('web.admin.modals.change-family-modal')
@include('web.admin.modals.send-whatsapp-message')
@include('web.admin.modals.record-fine-blade')
@include('web.admin.modals.add-recuring-modal')
@include('web.admin.modals.add-document')
@include('web.admin.modals.add-certificate-modal')
@include('web.admin.modals.student-observation-modal')
@include('web.admin.modals.student-promote-modal')
@include('web.admin.modals.update-student-section-modal')

<div class="container-fluid px-0 student-detail-wrapper">
    <div class="p-3">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 student-detail-header">

            <div class="d-flex flex-column">
                <h5 class="admin-page-heading">Student Detail</h5>
                <span class="admin-page-span">Students / Overview / Muzamil</span>
            </div>

        </div>

        <div class="student-detail-profile-section mt-md-5 mt-3 mb-3">

            <div class="student-detail-profile-card">

                <div class="student-detail-profile-img">
                    <img src="{{ asset('web/assets/images/sact3.png') }}" alt="student">
                </div>

                <div class="student-detail-info">

                    <h4 class="student-detail-name">Muzamil</h4>

                    <div class="student-detail-meta">

                        <span class="student-detail-id">
                            S0001
                        </span>

                        <button class="btn student-detail-terminated" data-bs-toggle="modal"
                            data-bs-target="#terminateStudentModal">
                            ✖ Terminate
                        </button>

                        <label class="student-detail-star">
                            Star Student Of The Year

                            <input type="checkbox" class="student-detail-checkbox">
                        </label>

                    </div>

                </div>

            </div>

            <!-- Buttons -->
            <div class="student-detail-btns">

                <button class="dark-anchor-btn dabtn-stdetail" data-bs-toggle="modal"
                            data-bs-target="#changeFamilyModal">
                    Change Family
                </button>

                <button class="dark-anchor-btn dabtn-stdetail student-detail-whatsapp-btn" data-bs-toggle="modal"
                            data-bs-target="#sendWhatsAppModal">
                    Send WhatsApp
                </button>

                <button class="dark-anchor-btn dabtn-stdetail" data-bs-toggle="modal"
                            data-bs-target="#recordFineModal">
                    Record Fine
                </button>

                <button class="dark-anchor-btn dabtn-stdetail" data-bs-toggle="modal"
                            data-bs-target="#addRecurringModal">
                    Add Recurring Payment
                </button>

                <button class="dark-anchor-btn dabtn-stdetail" data-bs-toggle="modal"
                            data-bs-target="#addDocumentModal">
                    Add Document
                </button>

                <button class="dark-anchor-btn dabtn-stdetail" data-bs-toggle="modal"
                            data-bs-target="#addCertificateModal">
                    Issue Certificate
                </button>

                <button class="dark-anchor-btn dabtn-stdetail" data-bs-toggle="modal"
                            data-bs-target="#studentObservationModal">
                    Add Observation
                </button>
                <button class="dark-anchor-btn dabtn-stdetail" data-bs-toggle="modal"
                            data-bs-target="#studentPromoteModal">
                    Promote Student
                </button>
                <button class="dark-anchor-btn dabtn-stdetail" data-bs-toggle="modal"
                            data-bs-target="#updateStudentSectionModal">
                    Update Section
                </button>
                 


            </div>

        </div>

        <div class="row pt-3 g-3">

            <div class="col-md-4">
                <div class="std-detail-cards">
                    <h2>654 PKR</h2>
                    <span>Total Due</span>
                </div>
            </div>

            <div class="col-md-4">
                <div class="std-detail-cards">
                    <h2>654 PKR</h2>
                    <span>Total Paid</span>
                </div>
            </div>

            <div class="col-md-4">
                <div class="std-detail-cards">
                    <h2>654 PKR</h2>
                    <span>Total Balance</span>
                </div>
            </div>

        </div>
        <div class="student-detail-bottom-wrapper pt-4">

            <div class="row g-4 row-equal">

                <!-- About Card -->
                <div class="col-xl-4">

                    <div class="student-detail-bottom-card w-100">

                        <div class="student-detail-bottom-header">

                            <h4 class="student-detail-bottom-title">
                                About
                            </h4>

                            <button class="student-detail-bottom-btn">

                                <img src="{{ asset('web/assets/images/pencil-edit-icon-vector.png') }}" alt="edit">

                                Edit

                            </button>

                        </div>

                        <div class="student-detail-bottom-list">

                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-roll-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        Roll No
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    5
                                </span>

                            </div>

                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-name-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        Name
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    aa
                                </span>

                            </div>

                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-name-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        Father / Guardian
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    Ali Ahmad
                                </span>

                            </div>

                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-religion-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        Religion
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    M
                                </span>

                            </div>

                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-gender-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        Gender
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    Male
                                </span>

                            </div>

                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-dob-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        DOB
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    27/02/2026
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Class Card -->
                <div class="col-xl-4">

                    <div class="student-detail-bottom-card w-100">

                        <div class="student-detail-bottom-header">

                            <h4 class="student-detail-bottom-title">
                                Class
                            </h4>

                            <button class="student-detail-bottom-btn">
                                Promote Class
                            </button>

                        </div>

                        <div class="student-detail-bottom-list">

                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-class-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        Class
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    8
                                </span>

                            </div>

                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-section-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        Section
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    b
                                </span>

                            </div>

                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-class-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        Class Fee
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    1,500 PKR
                                </span>

                            </div>
                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-calendar-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        Admission Date
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    20/02/2026
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Family Card -->
                <div class="col-xl-4">

                    <div class="student-detail-bottom-card w-100">

                        <div class="student-detail-bottom-header">

                            <h4 class="student-detail-bottom-title">
                                Family
                            </h4>

                            <button class="student-detail-bottom-btn">

                                <img src="{{ asset('web/assets/images/pencil-edit-icon-vector.png') }}" alt="edit">

                                Edit

                            </button>

                        </div>

                        <div class="student-detail-bottom-list">

                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-name-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        Father / Guardian
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    Ahmad
                                </span>

                            </div>

                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-phone-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        Phone Number
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    4523453464
                                </span>

                            </div>

                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-wapp-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        Whatsapp
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    4523453464
                                </span>

                            </div>

                            <div class="student-detail-bottom-item">

                                <div class="student-detail-bottom-left">

                                    <span class="student-detail-bottom-icon">
                                        <img src="{{ asset('web/assets/images/student-detail-bottom-email-vector.png') }}"
                                            alt="">
                                    </span>

                                    <span class="student-detail-bottom-label">
                                        Email
                                    </span>

                                </div>

                                <span class="student-detail-bottom-value">
                                    aliahmad@gmail.com
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


</div>
<div class="container-fluid px-0 pt-3 pb-5">
    <div class="dfst dfstsad px-3">

        <div class="p-3 dfsti">

            <!-- Nav Pills -->
            <ul class="nav nav-pills mb-3 custom-nav-pills-transactions" id="pills-tab" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active all-transactions-tab" data-bs-toggle="pill"
                        data-bs-target="#allTransactions" type="button">
                        All Fine
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link outgoing-transactions-tab" data-bs-toggle="pill"
                        data-bs-target="#outgoingTransactions" type="button">
                        Transactions
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link incoming-transactions-tab" data-bs-toggle="pill"
                        data-bs-target="#incomingTransactions" type="button">
                        Activities
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link incoming-transactions-tab" data-bs-toggle="pill"
                        data-bs-target="#documentsTab" type="button">
                        Documents
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link incoming-transactions-tab" data-bs-toggle="pill"
                        data-bs-target="#certificatesTab" type="button">
                        Certificates
                    </button>
                </li>

            </ul>

            <!-- Tab Content -->
            <div class="tab-content">

                <!-- All Fine -->
                <div class="tab-pane fade show active all-transactions-content" id="allTransactions">

                    <div class="table-container">
                        <table class="custom-table">

                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Reason</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>99 PKR</td>

                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Pending Dues
                                        </a>
                                    </td>

                                    <td>eSchool</td>

                                    <td>17 Feb 2026 12:30 PM</td>

                                    <td class="text-success fw-semibold">
                                        Paid
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center gap-3  justify-content-center ">

                                            <a href="#">
                                                <img src="{{ asset('web/assets/images/student-detail-edit-blue-vector.png') }}"
                                                    alt="edit">
                                            </a>

                                            <a href="#">
                                                <img src="{{ asset('web/assets/images/student-detail-delete-red-vector.png') }}"
                                                    alt="delete">
                                            </a>

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>134 PKR</td>

                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            N/A
                                        </a>
                                    </td>

                                    <td>eSchool</td>

                                    <td>17 Feb 2026 12:34 PM</td>

                                    <td class="text-success fw-semibold">
                                        Paid
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center gap-3  justify-content-center ">

                                            <a href="#">
                                                <img src="{{ asset('web/assets/images/student-detail-edit-blue-vector.png') }}"
                                                    alt="edit">
                                            </a>

                                            <a href="#">
                                                <img src="{{ asset('web/assets/images/student-detail-delete-red-vector.png') }}"
                                                    alt="delete">
                                            </a>

                                        </div>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                </div>

                <!-- Transactions -->
                <div class="tab-pane fade outgoing-transactions-content" id="outgoingTransactions">

                    <div class="table-container">
                        <table class="custom-table">

                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Reason</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>250 PKR</td>

                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Library Fine
                                        </a>
                                    </td>

                                    <td>Admin</td>

                                    <td>18 Feb 2026 11:20 AM</td>

                                    <td class="text-success fw-semibold">
                                        Paid
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center gap-3  justify-content-center ">

                                            <a href="#">
                                                <img src="{{ asset('web/assets/images/student-detail-edit-blue-vector.png') }}"
                                                    alt="edit">
                                            </a>

                                            <a href="#">
                                                <img src="{{ asset('web/assets/images/student-detail-delete-red-vector.png') }}"
                                                    alt="delete">
                                            </a>

                                        </div>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                </div>

                <!-- Activities -->
                <div class="tab-pane fade incoming-transactions-content" id="incomingTransactions">

                    <div class="table-container">
                        <table class="custom-table">

                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Reason</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>75 PKR</td>

                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Uniform Fine
                                        </a>
                                    </td>

                                    <td>Teacher</td>

                                    <td>19 Feb 2026 10:15 AM</td>

                                    <td class="text-success fw-semibold">
                                        Paid
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center gap-3  justify-content-center ">

                                            <a href="#">
                                                <img src="{{ asset('web/assets/images/student-detail-edit-blue-vector.png') }}"
                                                    alt="edit">
                                            </a>

                                            <a href="#">
                                                <img src="{{ asset('web/assets/images/student-detail-delete-red-vector.png') }}"
                                                    alt="delete">
                                            </a>

                                        </div>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                </div>

                <!-- Documents -->
                <div class="tab-pane fade incoming-transactions-content" id="documentsTab">

                    <div class="table-container">
                        <table class="custom-table">

                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Reason</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>0 PKR</td>

                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Birth Certificate
                                        </a>
                                    </td>

                                    <td>Office</td>

                                    <td>20 Feb 2026 09:00 AM</td>

                                    <td class="text-success fw-semibold">
                                        Uploaded
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center gap-3  justify-content-center ">

                                            <a href="#">
                                                <img src="{{ asset('web/assets/images/student-detail-edit-blue-vector.png') }}"
                                                    alt="edit">
                                            </a>

                                            <a href="#">
                                                <img src="{{ asset('web/assets/images/student-detail-delete-red-vector.png') }}"
                                                    alt="delete">
                                            </a>

                                        </div>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                </div>

                <!-- Certificates -->
                <div class="tab-pane fade incoming-transactions-content" id="certificatesTab">

                    <div class="table-container">
                        <table class="custom-table">

                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Reason</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>0 PKR</td>

                                    <td>
                                        <a href="#" class="transaction-purpose-link">
                                            Character Certificate
                                        </a>
                                    </td>

                                    <td>Principal</td>

                                    <td>21 Feb 2026 01:45 PM</td>

                                    <td class="text-success fw-semibold">
                                        Issued
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center gap-3  justify-content-center ">

                                            <a href="#">
                                                <img src="{{ asset('web/assets/images/student-detail-edit-blue-vector.png') }}"
                                                    alt="edit">
                                            </a>

                                            <a href="#">
                                                <img src="{{ asset('web/assets/images/student-detail-delete-red-vector.png') }}"
                                                    alt="delete">
                                            </a>

                                        </div>
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