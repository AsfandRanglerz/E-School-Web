<div class="modal fade" id="addDocumentModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 terminate-student-modal-content">

            <div class="modal-body p-4">

                <div class="d-flex justify-content-between align-items-start mb-3">

                    <h4 class="cards-top-heading mb-0">
                        Add Document
                    </h4>

                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>

                </div>




                <div class="mt-4 position-relative">
                    <input type="text" class="form-control terminate-student-input" placeholder="Document Name">
                </div>
                <!-- File Upload Field -->
                <!-- File Upload Field -->
                <div class="mt-3 custom-upload-wrapper">

                    <input type="file" id="document_file" name="document_file" accept="image/*">

                    <label for="document_file" class="custom-upload-box">

                        <div class="upload-placeholder" id="uploadPlaceholder">
                            <img src="{{asset('web/assets/images/choose-file-vector.png')}}" alt="">
                            <span>upload File</span>
                        </div>

                        <div class="image-preview" id="imagePreview">
                            <img id="previewImg" src="" alt="">
                        </div>

                    </label>

                </div>





                <div class="d-flex justify-content-end gap-2 pt-3">

                    <button type="button" class="btn terminate-student-cancel-btn" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="button" class="btn terminate-student-btn bg-dark">
                        Upload Document
                    </button>



                </div>

            </div>

        </div>

    </div>

</div>
@push('js')
<script>
$(document).on('change', '#document_file', function() {

    let file = this.files[0];

    if (file) {

        let reader = new FileReader();

        reader.onload = function(e) {

            $('#previewImg').attr('src', e.target.result);

            $('#uploadPlaceholder').addClass('d-none');

            $('#imagePreview').css('display', 'block');
        };

        reader.readAsDataURL(file);
    }

});
</script>

@endpush