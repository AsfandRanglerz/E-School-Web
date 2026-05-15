@extends('web.admin.layout.app')
@section('title', 'Add Family')

@section('content')

<div class="container-fluid px-0 add-students-wrapper">

    {{-- Header --}}
    <div class="p-3">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 add-students-header">

            <div class="d-flex flex-column">
                <h5 class="admin-page-heading">
                    Add Family
                </h5>

                <span class="admin-page-span">
                    Families / Add Family
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

                            <label for="familyUpload" class="span-for-profile-img-auth">
                                <img src="{{ asset('web/assets/images/camera.png') }}" alt="">

                                <span>
                                    Upload Photo
                                </span>
                            </label>

                            <input type="file" id="familyUpload" accept="image/*" hidden>

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

                {{-- Family Detail --}}
                <div class="card border-0 add-students-card">

                    <div class="card-body">

                        <h6 class="add-students-card-heading mb-4">
                            Add Family
                        </h6>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <input type="text"
                                       class="form-control add-student-input-feilds-bg"
                                       placeholder="Father/Gardian">
                            </div>

                            <div class="col-md-6">
                                <input type="text"
                                       class="form-control add-student-input-feilds-bg"
                                       placeholder="Email">
                            </div>

                            <div class="col-md-6">
                                <input type="text"
                                       class="form-control add-student-input-feilds-bg"
                                       placeholder="CNIC Number">
                            </div>

                            <div class="col-md-6">
                                <input type="text"
                                       class="form-control add-student-input-feilds-bg"
                                       placeholder="Phone">
                            </div>

                            <div class="col-12">
                                <input type="email"
                                       class="form-control add-student-input-feilds-bg"
                                       placeholder="Occupation (Optional)">
                            </div>

                            <div class="col-12">
                                <input type="text"
                                       class="form-control add-student-input-feilds-bg"
                                       placeholder="Whatsapp (Optional)">
                            </div>

                            {{-- WhatsApp Toggle --}}
                            <div class="col-12">

                                <div class="form-check form-switch d-flex align-items-center gap-2">

                                    <input class="form-check-input form-check-input-in-add-family"
                                           type="checkbox"
                                           id="whatsappVerified">

                                    <label class="form-check-label"
                                           for="whatsappVerified">
                                        WhatsApp Verified
                                    </label>

                                </div>

                                <span class="span-at-bottom-in-add-student">
                                    Add WhatsApp number to enable verification
                                </span>

                            </div>

                            <div class="col-12">
                                <input type="text"
                                       class="form-control add-student-input-feilds-bg"
                                       placeholder="Address (optional)">
                            </div>

                            <div class="col-12">
                                <textarea rows="4"
                                          class="form-control add-student-input-feilds-bg"
                                          placeholder="Note (Optional)"></textarea>
                            </div>

                            {{-- CNIC Front --}}
                            <div class="col-md-6">

                                <div class="custom-upload-wrapper">

                                    <input type="file"
                                           id="cnic_front"
                                           name="cnic_front"
                                           accept="image/*">

                                    <label for="cnic_front" class="custom-upload-box custom-upload-box-add-family">

                                        <div class="upload-placeholder" id="uploadPlaceholderFront">

                                            <img src="{{asset('web/assets/images/choose-file-vector.png')}}" alt="">

                                            <span>
                                                CNIC Front (Optional)
                                            </span>

                                        </div>

                                        <div class="image-preview"
                                             id="imagePreviewFront">

                                            <img id="previewImgFront"
                                                 src=""
                                                 alt="">

                                        </div>

                                    </label>

                                </div>

                            </div>

                            {{-- CNIC Back --}}
                            <div class="col-md-6">

                                <div class="custom-upload-wrapper">

                                    <input type="file"
                                           id="cnic_back"
                                           name="cnic_back"
                                           accept="image/*">

                                    <label for="cnic_back" class="custom-upload-box custom-upload-box-add-family">

                                        <div class="upload-placeholder" id="uploadPlaceholderBack">

                                            <img src="{{asset('web/assets/images/choose-file-vector.png')}}" alt="">

                                            <span>
                                                CNIC Back (Optional)
                                            </span>

                                        </div>

                                        <div class="image-preview"
                                             id="imagePreviewBack">

                                            <img id="previewImgBack"
                                                 src=""
                                                 alt="">

                                        </div>

                                    </label>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="text-end mt-4 mb-sm-5 mb-3 me-3">

                        <button class="btn dark-anchor-btn border-0">
                            Add Family
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

@push('scripts')
<script>
$(document).ready(function() {

    $('.select2').select2({
        width: '100%',
        placeholder: 'Select Option',
        minimumResultsForSearch: Infinity
    });

});


// CNIC Front Preview
$(document).on('change', '#cnic_front', function() {

    let file = this.files[0];

    if (file) {

        let reader = new FileReader();

        reader.onload = function(e) {

            $('#previewImgFront').attr('src', e.target.result);

            $('#uploadPlaceholderFront').addClass('d-none');

            $('#imagePreviewFront').css('display', 'block');
        };

        reader.readAsDataURL(file);
    }

});


// CNIC Back Preview
$(document).on('change', '#cnic_back', function() {

    let file = this.files[0];

    if (file) {

        let reader = new FileReader();

        reader.onload = function(e) {

            $('#previewImgBack').attr('src', e.target.result);

            $('#uploadPlaceholderBack').addClass('d-none');

            $('#imagePreviewBack').css('display', 'block');
        };

        reader.readAsDataURL(file);
    }

});
</script>
@endpush