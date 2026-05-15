@extends('web.admin.layout.app')
@section('title', 'Add Staff')

@section('content')

<div class="container-fluid px-0 add-students-wrapper">

    {{-- Header --}}
    <div class="p-3">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 add-students-header">

            <div class="d-flex flex-column">
                <h5 class="admin-page-heading">
                    Add Staff
                </h5>

                <span class="admin-page-span">
                    Overview / Staff / Add
                </span>
            </div>

        </div>
    </div>

    {{-- Main Content --}}
    <div class="px-3 pb-4">

        <div class="row g-4">

            {{-- Left Side --}}
            <div class="col-lg-4">

                {{-- Upload Card --}}
                <div class="card border-0 add-students-card">

                    <div class="card-body d-flex flex-column justify-content-center align-items-center p-md-5 p-3 pb-0">

                        <div class="mt-3 mb-2 d-flex span-for-profile-img-auth-div">

                            <label for="staffUpload" class="span-for-profile-img-auth">
                                <img src="{{ asset('web/assets/images/camera.png') }}" alt="">

                                <span>
                                    Upload Photo
                                </span>
                            </label>

                            <input type="file" id="staffUpload" accept="image/*" hidden>

                        </div>

                    </div>

                    <div class="d-flex align-items-center justify-content-center py-3">

                        <span class="span-size-file">
                            Allowed *.jpeg, *.jpg, *.png, *.gif
                        </span>

                    </div>

                </div>

            </div>

            {{-- Right Side --}}
            <div class="col-lg-8">

                {{-- Staff Detail --}}
                <div class="card border-0 add-students-card">

                    <div class="card-body">

                        <h6 class="add-students-card-heading mb-4">
                            Add Staff
                        </h6>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <input type="text" class="form-control add-student-input-feilds-bg"
                                    placeholder="Name *">
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control add-student-input-feilds-bg"
                                    placeholder="Father Name">
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control add-student-input-feilds-bg"
                                    placeholder="Email (Optional)">
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control add-student-input-feilds-bg"
                                    placeholder="Phone Number">
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control add-student-input-feilds-bg" placeholder="Pay">
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control add-student-input-feilds-bg" placeholder="CNIC">
                            </div>

                            <div class="col-md-6">
                                <input type="date" class="form-control add-student-input-feilds-bg">
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control add-student-input-feilds-bg"
                                    placeholder="WhatsApp Number">
                            </div>

                            <div class="col-md-6">

                                <select class="form-select add-student-input-feilds-bg select2">
                                    <option selected disabled>Select Role</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Coordinator">Coordinator</option>
                                </select>

                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control add-student-input-feilds-bg"
                                    placeholder="Subject (Optional)">
                            </div>

                            <div class="col-md-6">

                                <select class="form-select add-student-input-feilds-bg select2">
                                    <option selected disabled>Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>

                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control add-student-input-feilds-bg"
                                    placeholder="Note (Optional)">
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control add-student-input-feilds-bg"
                                    placeholder="Address">
                            </div>

                        </div>

                    </div>

                </div>

                {{-- Assign Classes --}}
                <div class="card border-0 add-students-card mt-4">

                    <div class="card-body">

                        <h6 class="add-students-card-heading mb-4">
                            Assign Classes
                        </h6>

                        <div class="row g-3">

                            <div class="col-12">

                                <div class="d-flex align-items-center flex-wrap gap-2">

                                    {{-- Select Box --}}
                                    <div class="col-6">

                                        <select id="classSelect" class="form-select add-student-input-feilds-bg">

                                            <option value="">
                                                Select Class
                                            </option>

                                            <option value="English">
                                                English
                                            </option>

                                            <option value="Science">
                                                Science
                                            </option>

                                            <option value="Pak Study">
                                                Pak Study
                                            </option>

                                            <option value="Math">
                                                Math
                                            </option>

                                            <option value="Computer">
                                                Computer
                                            </option>

                                        </select>

                                    </div>

                                    {{-- Selected Subjects --}}
                                    <div id="selectedClasses" class="d-flex align-items-center flex-wrap gap-2">

                                    </div>

                                </div>

                            </div>

                            {{-- Class Teacher --}}
                            <div class="col-md-6">

                                <label class="mb-2 small text-muted">
                                    Class Teacher
                                </label>

                                <select class="form-select add-student-input-feilds-bg">

                                    <option selected disabled>
                                        Select Class
                                    </option>

                                    <option>
                                        Class 1
                                    </option>

                                    <option>
                                        Class 2
                                    </option>

                                    <option>
                                        Class 3
                                    </option>

                                </select>

                            </div>

                        </div>

                    </div>

                </div>

                {{-- Documents --}}
                <div class="card border-0 add-students-card mt-4">

                    <div class="card-body">

                        <div class="row g-3">

                            {{-- Experience Letter --}}
                            <div class="col-md-4">

                                <div class="custom-upload-wrapper">

                                    <input type="file" id="experience_letter" accept="image/*,.pdf">

                                    <label for="experience_letter"
                                        class="custom-upload-box custom-upload-box-add-family">

                                        <div class="upload-placeholder uph-fs">

                                            <img src="{{asset('web/assets/images/choose-file-vector.png')}}" alt="">

                                            <span>
                                                Upload Experience Letter (Optional)
                                            </span>

                                        </div>

                                    </label>

                                </div>

                            </div>

                            {{-- CNIC Front --}}
                            <div class="col-md-4">

                                <div class="custom-upload-wrapper">

                                    <input type="file" id="staff_cnic_front" accept="image/*">

                                    <label for="staff_cnic_front"
                                        class="custom-upload-box custom-upload-box-add-family">

                                        <div class="upload-placeholder uph-fs">

                                            <img src="{{asset('web/assets/images/choose-file-vector.png')}}" alt="">

                                            <span>
                                                CNIC Front (Optional)
                                            </span>

                                        </div>

                                    </label>

                                </div>

                            </div>

                            {{-- CNIC Back --}}
                            <div class="col-md-4">

                                <div class="custom-upload-wrapper">

                                    <input type="file" id="staff_cnic_back" accept="image/*">

                                    <label for="staff_cnic_back" class="custom-upload-box custom-upload-box-add-family">

                                        <div class="upload-placeholder uph-fs">

                                            <img src="{{asset('web/assets/images/choose-file-vector.png')}}" alt="">

                                            <span>
                                                CNIC Back (Optional)
                                            </span>

                                        </div>

                                    </label>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="text-end mt-4 mb-sm-5 mb-3">

                    <button class="btn dark-anchor-btn border-0 px-4">
                        Add Staff
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection


@push('js')

<script>

$(document).ready(function () {

    /*
    |--------------------------------------------------------------------------
    | Select Subject
    |--------------------------------------------------------------------------
    */

    $('#classSelect').on('change', function () {

        let selectedSubject = $(this).val();

        if(selectedSubject == ''){
            return;
        }

        // duplicate not allowed
        if($('.subject-tag[data-subject="'+selectedSubject+'"]').length){
            return;
        }

        let subjectHtml = `
            <div class="subject-tag"
                 data-subject="${selectedSubject}">

                <span>${selectedSubject}</span>

                <button type="button"
                        class="subject-remove">
                    ×
                </button>

                <input type="hidden"
                       name="assign_classes[]"
                       value="${selectedSubject}">
            </div>
        `;

        // append only
        $('#selectedClasses').append(subjectHtml);

    });



    /*
    |--------------------------------------------------------------------------
    | Remove Subject
    |--------------------------------------------------------------------------
    */

    $(document).on('click', '.subject-remove', function () {

        $(this).closest('.subject-tag').remove();

    });

});

</script>

@endpush