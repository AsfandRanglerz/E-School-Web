{{-- resources/views/web/admin/terminate-student-modal.blade.php --}}

<div class="modal fade" id="terminateStudentModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 terminate-student-modal-content">

            <div class="modal-body p-4">

                <div class="d-flex justify-content-between align-items-start mb-3">

                    <h4 class="cards-top-heading mb-0">
                        Terminate Student
                    </h4>

                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>

                </div>

                <span class=" span-in-modals">
                    Are you sure you want to terminate Adeel Abbasi?
                </span>

                <div class="mb-4 mt-4 position-relative">

                    <label class="terminate-floating-label">
                        Termination Date
                    </label>

                    <input type="date" class="form-control terminate-student-input">

                </div>

                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn terminate-student-btn">
                        Terminate
                    </button>

                    <button type="button" class="btn terminate-student-cancel-btn" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    

                </div>

            </div>

        </div>

    </div>

</div>