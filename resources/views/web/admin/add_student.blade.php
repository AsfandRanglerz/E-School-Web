@extends('web.admin.layout.app')
@section('title', 'Add Student')

@section('content')

<div class="container-fluid px-0 add-students-wrapper">

    {{-- Header --}}
    <div class="p-3">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 add-students-header">

            <div class="d-flex flex-column">
                <h5 class="admin-page-heading">Add Student</h5>
                <span class="admin-page-span">Students / Add Student</span>
            </div>

        </div>
    </div>

    {{-- Main Content --}}
    <div class="px-3 pb-4">

        <div class="row g-4">

            {{-- Left Side --}}
            <div class="col-lg-4">

                {{-- Upload Card --}}
                <div class="card border-0  add-students-card">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center p-md-5 p-3 pb-0 ">

                        <div class="mt-3 mb-2 d-flex span-for-profile-img-auth-div">

                            <label for="profileUpload" class="span-for-profile-img-auth">
                                <img src="{{asset('web/assets/images/camera.png')}}" alt="">
                                <span>Upload Photo</span>
                            </label>

                            <input type="file" id="profileUpload" accept="image/*" hidden>

                        </div>

                    </div>

                    <div class="d-flex align-items-center justify-content-center py-3">
                        <span class="span-size-file">
                            Allowed *.jpeg, *.jpg, *.png, *.gif
                        </span>
                    </div>
                </div>

                {{-- Fee Discount --}}
                <div class="card border-0  mt-3 add-students-card">
                    <div class="card-body">

                        <h6 class="add-students-card-heading mb-3">
                            Fee Discount
                        </h6>

                        <select class="form-select add-student-input-feilds-bg select2">
                            <option selected disabled>
                                Discount Type
                            </option>
                            <option value="Sibling Discount">Sibling Discount</option>
                            <option value="Merit Scholarship">Merit Scholarship</option>
                            <option value="Need Based">Need Based</option>
                            <option value="Special Discount">Special Discount</option>
                        </select>

                    </div>
                </div>

                {{-- Documents --}}
                <div class="card border-0  mt-3 add-students-card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="add-students-card-heading mb-0">
                                Documents
                            </h6>

                            <button type="button" class="btn student-detail-bottom-btn">
                                + Add Documents
                            </button>
                        </div>

                        <input type="text"
                            class="form-control add-student-input-feilds-bg mb-3"
                            placeholder="Document Name">

                        <input type="file"
                            class="form-control add-student-input-feilds-bg">

                    </div>
                </div>

            </div>

            {{-- Right Side --}}
            <div class="col-lg-8">

                {{-- Student Detail --}}
                <div class="card border-0  add-students-card">
                    <div class="card-body">

                        <h6 class="add-students-card-heading mb-4">
                            Student Detail
                        </h6>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control add-student-input-feilds-bg"
                                    placeholder="Student Name">
                            </div>

                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control add-student-input-feilds-bg"
                                    placeholder="Roll No">
                            </div>

                            <div class="col-md-6">
                                <select class="form-select add-student-input-feilds-bg select2">
                                    <option selected disabled>Class</option>
                                    <option value="Play Group">Play Group</option>
                                    <option value="Nursery">Nursery</option>
                                    <option value="KG">KG</option>
                                    <option value="One">One</option>
                                    <option value="Two">Two</option>
                                    <option value="Three">Three</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <input type="date"
                                    class="form-control add-student-input-feilds-bg">
                            </div>

                            <div class="col-md-6">
                                <select class="form-select add-student-input-feilds-bg select2">
                                    <option selected disabled>Religion</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Christianity">Christianity</option>
                                    <option value="Hinduism">Hinduism</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <select class="form-select add-student-input-feilds-bg select2">
                                    <option selected disabled>
                                        Gender
                                    </option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <input type="date"
                                    class="form-control add-student-input-feilds-bg">
                            </div>

                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control add-student-input-feilds-bg"
                                    placeholder="CNIC/B-Form No. (Optional)">
                            </div>

                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control add-student-input-feilds-bg"
                                    placeholder="Father / Guardian (Optional)">
                            </div>

                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control add-student-input-feilds-bg"
                                    placeholder="Previous School (Optional)">
                            </div>

                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control add-student-input-feilds-bg"
                                    placeholder="Previous Class (Optional)">
                            </div>

                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control add-student-input-feilds-bg"
                                    placeholder="Previous Result (Optional)">
                            </div>

                            <div class="col-12">
                                <input type="text"
                                    class="form-control add-student-input-feilds-bg"
                                    placeholder="Reference (Optional)">
                            </div>

                            <div class="col-12">
                                <textarea rows="4"
                                    class="form-control add-student-input-feilds-bg"
                                    placeholder="Note (Optional)"></textarea>
                            </div>

                        </div>

                    </div>
                </div>

                {{-- Admission Fee --}}
                <div class="card border-0  mt-4 add-students-card">
                    <div class="card-body">

                        <h6 class="add-students-card-heading mb-4">
                            Admission Fee
                        </h6>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control add-student-input-feilds-bg"
                                    placeholder="Admission Fee">
                            </div>

                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control add-student-input-feilds-bg"
                                    placeholder="Partly">
                            </div>

                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control add-student-input-feilds-bg"
                                    placeholder="Security">
                            </div>

                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control add-student-input-feilds-bg"
                                    placeholder="Pending Dues">
                                    <span class="d-flex justify-content-end pt-2 span-at-bottom-in-add-student">Will Create a fine for the student</span>
                            </div>

                        </div>

                        

                    </div>
                </div>

            </div>
        <div class="text-end mt-4">
                            <button class="btn dark-anchor-btn border-0">
                                Add Student
                            </button>
                        </div>
        </div>

    </div>

</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function () {

        $('.select2').select2({
            width: '100%',
            placeholder: 'Select Option',
            minimumResultsForSearch: Infinity
        });

    });
</script>
@endpush