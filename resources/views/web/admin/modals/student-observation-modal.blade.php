{{-- resources/views/web/admin/student-observation-modal.blade.php --}}

<div class="modal fade" id="studentObservationModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 terminate-student-modal-content">

            <div class="modal-body p-4">

                <!-- Header -->
                <div class="d-flex justify-content-between align-items-start mb-3">

                    <h4 class="cards-top-heading mb-0">
                        Add Student Observation
                    </h4>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                    </button>

                </div>

                <!-- Observation Date -->
                <div class="mb-4 mt-4 position-relative">

                    <label class="terminate-floating-label">
                        Observation Date
                    </label>

                    <input type="date"
                           class="form-control terminate-student-input">

                </div>

                <!-- Reviewer Type -->
                <h6 class="mb-0">
                    Reviewer Type
                </h6>

                <div class="d-flex align-items-center gap-3 pt-2">

                    <!-- Staff Member -->
                    <div class="form-check custom-radio-wrapper">

                        <input class="form-check-input custom-radio"
                               type="radio"
                               name="reviewer_type"
                               id="staffMember"
                               checked>

                        <label class="form-check-label custom-radio-label"
                               for="staffMember">

                            Select Staff Member

                        </label>

                    </div>

                    <!-- Custom Name -->
                    <div class="form-check custom-radio-wrapper">

                        <input class="form-check-input custom-radio"
                               type="radio"
                               name="reviewer_type"
                               id="customName">

                        <label class="form-check-label custom-radio-label"
                               for="customName">

                            Enter Custom Name

                        </label>

                    </div>

                </div>

                <!-- Staff Dropdown -->
                <div class="pt-2" id="staffSelectWrapper">

                    <select class="form-select terminate-student-input select-new-family">

                        <option selected disabled>
                            Staff Reviewer
                        </option>

                        <option value="Ahmed">
                            Ahmed
                        </option>

                        <option value="Rehman">
                            Rehman
                        </option>

                        <option value="Khan">
                            Khan
                        </option>

                        <option value="Malik">
                            Malik
                        </option>

                    </select>

                </div>

                <!-- Custom Name Input -->
                <div class="pt-2 d-none" id="customNameWrapper">

                    <input type="text"
                           class="form-control terminate-student-input"
                           placeholder="Enter Reviewer Name">

                </div>

                <!-- Observation Questions -->
                <h6 class="mt-3 mb-0">
                    Observation Questions
                </h6>

                <span class="span-in-modals">

                    No observation questions configured.
                    Please add questions in School information settings.

                </span>

                <!-- Notes -->
                <div class="position-relative mt-2">

                    <textarea class="form-control terminate-student-input text-area-in-send-modal"
                              placeholder="Additional Notes (Optional)"></textarea>

                </div>

                <!-- Footer Buttons -->
                <div class="d-flex justify-content-end gap-2 pt-3">

                    <button type="button"
                            class="btn terminate-student-cancel-btn"
                            data-bs-dismiss="modal">

                        Cancel

                    </button>

                    <button type="button"
                            class="btn terminate-student-btn bg-dark">

                        Create Observation

                    </button>

                </div>

            </div>

        </div>

    </div>

</div>
@push('js')
<script>

$(document).on('change', 'input[name="reviewer_type"]', function () {

    if ($('#staffMember').is(':checked')) {

        $('#staffSelectWrapper').removeClass('d-none');
        $('#customNameWrapper').addClass('d-none');

    } else {

        $('#staffSelectWrapper').addClass('d-none');
        $('#customNameWrapper').removeClass('d-none');

    }

});

</script>
@endpush

