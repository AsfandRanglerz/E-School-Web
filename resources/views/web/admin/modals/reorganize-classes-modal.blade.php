<div class="modal fade" id="reorganizeClassModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content border-0 terminate-student-modal-content">

            <div class="modal-body p-4">

                <div class="d-flex justify-content-between align-items-start mb-4">

                    <h4 class="cards-top-heading mb-0">
                        Reorganize
                    </h4>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                </div>

                <div id="sortableClasses">

                    <div class="reorganize-class-item d-flex align-items-center justify-content-between py-4 border-bottom">

                        <div class="d-flex align-items-center gap-3">

                            <img src="{{ asset('web/assets/images/order-six-vector.png') }}"
                                alt="">

                            <div>

                                <h5 class="mb-1 fw-semibold">8</h5>

                                <p class="mb-0 text-muted">
                                     A
                                </p>

                            </div>

                        </div>

                        <div>

                            <span class="badge bg-light text-secondary px-3 py-2 rounded-pill">
                                1 students
                            </span>

                        </div>

                    </div>

                    <div class="reorganize-class-item d-flex align-items-center justify-content-between py-4 border-bottom">

                        <div class="d-flex align-items-center gap-3">

                            <img src="{{ asset('web/assets/images/order-six-vector.png') }}"
                                alt="">

                            <div>

                                <h5 class="mb-1 fw-semibold">9</h5>

                                <p class="mb-0 text-muted">
                                     A
                                </p>

                            </div>

                        </div>

                        <div>

                            <span class="badge bg-light text-secondary px-3 py-2 rounded-pill">
                                0 students
                            </span>

                        </div>

                    </div>

                    <div class="reorganize-class-item d-flex align-items-center justify-content-between py-4 border-bottom">

                        <div class="d-flex align-items-center gap-3">

                            <img src="{{ asset('web/assets/images/order-six-vector.png') }}"
                                alt="">

                            <div>

                                <h5 class="mb-1 fw-semibold">10</h5>

                                <p class="mb-0 text-muted">
                                     A
                                </p>

                            </div>

                        </div>

                        <div>

                            <span class="badge bg-light text-secondary px-3 py-2 rounded-pill">
                                5 students
                            </span>

                        </div>

                    </div>

                    <div class="reorganize-class-item d-flex align-items-center justify-content-between py-4">

                        <div class="d-flex align-items-center gap-3">

                            <img src="{{ asset('web/assets/images/order-six-vector.png') }}"
                                alt="">

                            <div>

                                <h5 class="mb-1 fw-semibold">11</h5>

                                <p class="mb-0 text-muted">
                                     B
                                </p>

                            </div>

                        </div>

                        <div>

                            <span class="badge bg-light text-secondary px-3 py-2 rounded-pill">
                                3 students
                            </span>

                        </div>

                    </div>

                </div>

                <div class="d-flex justify-content-end pt-4">

                    <button type="button" class="btn terminate-student-btn bg-dark">
                        Save Order
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>
@push('js')
<script>
    $(function () {

        $("#sortableClasses").sortable({
            items: ".reorganize-class-item",
            cursor: "move",
            opacity: 0.8
        });

    });
</script>
@endpush