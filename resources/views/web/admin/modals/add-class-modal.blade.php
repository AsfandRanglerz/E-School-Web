<div class="modal fade" id="addClassModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body p-4">

                <!-- Heading -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="fw-bold mb-0">Class Details</h4>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Class Fields -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text"
                               class="form-control terminate-student-input"
                               placeholder="Class Name">
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text"
                               class="form-control terminate-student-input"
                               placeholder="Class Fee">
                    </div>
                </div>

                <!-- Sections -->
                <div class="mt-3">
                    <h6 class="fw-bold mb-3">Sections</h6>

                    <!-- Wrapper -->
                    <div id="sectionWrapper">

                        <!-- First Section Row -->
                        <div class="row section-row align-items-center mb-3">
                            <div class="col-md-10">
                                <input type="text"
                                       name="sections[]"
                                       class="form-control terminate-student-input"
                                       placeholder="Section Name">
                            </div>

                            <div class="col-md-2">
                                <button type="button"
                                        id="addSectionBtn"
                                        class="btn btn-outline-dark w-100 rounded-3">
                                    Add Section
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Bottom Right Button -->
                <div class="d-flex justify-content-end mt-4">
                    <button type="button" class="btn btn-dark px-4 py-2 rounded-3">
                        Create Class
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    $(document).ready(function () {

        // Add New Section
        $(document).on('click', '#addSectionBtn', function () {

            let html = `
                <div class="row section-row align-items-center mb-3">
                    <div class="col-md-10">
                        <input type="text"
                               name="sections[]"
                               class="form-control terminate-student-input"
                               placeholder="Section Name">
                    </div>

                    <div class="col-md-2 d-flex gap-2">

                        <button type="button"
                                class="btn btn-outline-dark addSectionBtnNew rounded-3 w-50">
                            +
                        </button>

                        <button type="button"
                                class="btn btn-outline-danger removeSectionBtn rounded-3 w-50">
                            -
                        </button>

                    </div>
                </div>
            `;

            $('#sectionWrapper').append(html);
        });

        // Add More Sections From Dynamic Buttons
        $(document).on('click', '.addSectionBtnNew', function () {

            let html = `
                <div class="row section-row align-items-center mb-3">
                    <div class="col-md-10">
                        <input type="text"
                               name="sections[]"
                               class="form-control terminate-student-input"
                               placeholder="Section Name">
                    </div>

                    <div class="col-md-2 d-flex gap-2">

                        <button type="button"
                                class="btn btn-outline-dark addSectionBtnNew rounded-3 w-50">
                            +
                        </button>

                        <button type="button"
                                class="btn btn-outline-danger removeSectionBtn rounded-3 w-50">
                            -
                        </button>

                    </div>
                </div>
            `;

            $('#sectionWrapper').append(html);
        });

        // Remove Section
        $(document).on('click', '.removeSectionBtn', function () {
            $(this).closest('.section-row').remove();
        });

    });
</script>