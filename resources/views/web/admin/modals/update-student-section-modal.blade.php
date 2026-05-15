{{-- resources/views/web/admin/update-student-section-modal.blade.php --}}

<div class="modal fade" id="updateStudentSectionModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 terminate-student-modal-content rounded-4">

            <div class="modal-body p-4">

                {{-- Header --}}
                <div class="d-flex justify-content-between align-items-center mb-4">

                    <h4 class="fw-semibold mb-0">
                        Update Student Section
                    </h4>

                    {{-- Optional Close Button --}}
                    {{-- 
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    --}}

                </div>

              

                {{-- Section --}}
                <div class="position-relative mb-4">

                    <label class="terminate-floating-label">
                        Section
                    </label>

                    <select class="form-select terminate-student-input select-section">
                        <option selected disabled>
                            Select Section
                        </option>

                        <option value="A">
                            Section A
                        </option>

                        <option value="B">
                            Section B
                        </option>

                        <option value="C">
                            Section C
                        </option>

                    </select>

                </div>

                

                {{-- Footer Buttons --}}
                <div class="d-flex justify-content-end gap-2 pt-2">

                    <button type="button"
                            class="btn terminate-student-cancel-btn"
                            data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="button"
                            class="btn terminate-student-btn bg-dark text-white px-4">
                        Update Student Section
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

@push('scripts')
<script>
    $(document).ready(function () {

        $('.select-class').select2({
            width: '100%',
            minimumResultsForSearch: Infinity,
            dropdownParent: $('#updateStudentSectionModal')
        });

        $('.select-section').select2({
            width: '100%',
            placeholder: 'Select Section',
            minimumResultsForSearch: Infinity,
            dropdownParent: $('#updateStudentSectionModal')
        });

    });
</script>
@endpush