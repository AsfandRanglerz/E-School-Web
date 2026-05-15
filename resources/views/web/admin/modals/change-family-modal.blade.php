{{-- resources/views/web/admin/change-family-modal.blade.php --}}

<div class="modal fade" id="changeFamilyModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 terminate-student-modal-content">

            <div class="modal-body p-4">

                <div class="d-flex justify-content-between align-items-start mb-3">

                    <h4 class="cards-top-heading mb-0">
                        Change Family
                    </h4>

                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>

                </div>

              

                <div class="mt-5 position-relative">

                    <label class="terminate-floating-label">
                        Current Family
                    </label>

                    <input type="text" class="form-control terminate-student-input" placeholder="Ali Rehman">

                </div>

                <div class="pt-3">

                    <select class="form-select terminate-student-input select-new-family">
                        <option selected disabled>
                            Select New Family
                        </option>

                        <option value="Ahmed Family">
                            Ahmed Family
                        </option>

                        <option value="Rehman Family">
                            Rehman Family
                        </option>

                        <option value="Khan Family">
                            Khan Family
                        </option>

                        <option value="Malik Family">
                            Malik Family
                        </option>
                    </select>

                </div>

                <div class="d-flex justify-content-end gap-2 pt-3">
                    <button type="button" class="btn terminate-student-cancel-btn" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="button" class="btn terminate-student-btn bg-dark">
                        Change Family
                    </button>

                    

                </div>

            </div>

        </div>

    </div>

</div>

@push('scripts')
<script>
    $(document).ready(function () {

        $('.select-new-family').select2({
            width: '100%',
            placeholder: 'Select New Family',
            minimumResultsForSearch: Infinity,
            dropdownParent: $('#changeFamilyModal')
        });

    });
</script>
@endpush