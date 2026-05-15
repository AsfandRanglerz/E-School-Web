@extends('web.admin.layout.app')
@section('title', 'Classes')

@section('content')
@include('web.admin.modals.add-class-modal')
@include('web.admin.modals.reorganize-classes-modal')

<div class="container-fluid px-0">

    <div class="d-flex justify-content-between align-items-center p-3 flex-wrap gap-3">

        <div class="d-flex flex-column">
            <h5 class="admin-page-heading">Classes</h5>
            <span class="admin-page-span">Overview / Classes</span>
        </div>

        <div class="d-flex justify-content-center align-items-center flex-wrap">

            

            <button class="primary-anchor free-details-a py-sm-2 py-1 me-sm-3 me-2 btn-pistd text-dark bg-transparent" data-bs-toggle="modal" data-bs-target="#reorganizeClassModal">
                Reorganize
            </button>

            <a href="#" class="dark-anchor-btn dark-anchor-btn-ads" data-bs-toggle="modal" data-bs-target="#addClassModal">
                + Add Class
            </a>

        </div>

    </div>

</div>
<div class="container-fluid px-0 pt-2 pb-5">

    <div class="dfst px-sm-3 px-1">

        <div class="p-3 dfsti">

            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">

                <h4 class="mb-0 fw-semibold w-100">All Classes</h4>

                <div class="student-search-wrapper">

                    <i class="fa-solid fa-magnifying-glass student-search-icon"></i>

                    <input type="text"
                        class="form-control"
                        placeholder="Search by class, section, fee, creator...">

                </div>

            </div>

            <div class="table-container">

                <table class="custom-table">

                    <thead>

                        <tr>
                            <th>Class</th>
                            <th>Sections</th>
                            <th>Students</th>
                            <th>Fee</th>
                            <th>Created By</th>
                            <th>Actions</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>8</td>
                            <td>A</td>
                            <td>1</td>
                            <td>1,500 PKR</td>
                            <td>eSchool</td>

                            <td>

                                <div class="d-flex align-items-center gap-3 justify-content-center">

                                    <a href="#">
                                        <img src="{{ asset('web/assets/images/student-detail-edit-blue-vector.png') }}"
                                            alt="">
                                    </a>

                                    <a href="#">
                                        <img src="{{ asset('web/assets/images/student-detail-delete-red-vector.png') }}"
                                            alt="">
                                    </a>

                                </div>

                            </td>

                        </tr>

                        <tr>

                            <td>8</td>
                            <td>B</td>
                            <td>0</td>
                            <td>7,897 PKR</td>
                            <td>eSchool</td>

                            <td>

                                <div class="d-flex align-items-center gap-3 justify-content-center">

                                    <a href="#">
                                        <img src="{{ asset('web/assets/images/student-detail-edit-blue-vector.png') }}"
                                            alt="">
                                    </a>

                                    <a href="#">
                                        <img src="{{ asset('web/assets/images/student-detail-delete-red-vector.png') }}"
                                            alt="">
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

@endsection