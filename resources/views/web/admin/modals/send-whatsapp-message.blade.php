{{-- resources/views/web/admin/send-whatsapp-message.blade.php --}}

<div class="modal fade" id="sendWhatsAppModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 terminate-student-modal-content">

            <div class="modal-body p-4">

                <div class="d-flex justify-content-between align-items-start mb-3">

                    <h4 class="cards-top-heading mb-0">
                        Send WhatsApp Message
                    </h4>

                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>

                </div>
                <span class=" span-in-modals">
                    Send a WhatsApp message to Adeel Abbasi's family (03356226026). The message will be queued and sent
                    via Schooliee Sender.
                </span>



                <div class="mt-4 position-relative">



                    <textarea class="form-control terminate-student-input text-area-in-send-modal" placeholder="Message"></textarea>

                </div>



                <div class="d-flex justify-content-end gap-2 pt-3">

                    <button type="button" class="btn terminate-student-cancel-btn" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="button" class="btn terminate-student-btn bg-in-sen-d-modal">
                        Send Message
                    </button>

                    

                </div>

            </div>

        </div>

    </div>

</div>