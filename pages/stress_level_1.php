<!-- Modal -->
<div class="modal fade bg-glass_sub" id="stress_1" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="" method="post">
            <div class="modal-content" style="width: auto">
                <div class="modal-header">
                    <div class="d-flex justify-content-centered">
                        <h5 class="modal-title fw-bold txt-gradient" id="exampleModalLabel">Test Your Mind
                            Status
                            (PSS)
                        </h5>
                    </div>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body" id="q_body">
                    <div class="mb-4">
                        <p class="fw-normal" id="questions"></p>
                    </div>
                    <div class="md-btn-group-vertical d-flex flex-column flex-md-row bg-transparent btn-rounded">
                        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" value="0">
                        <label class="btn btn-outline-secondary btn-rounded m-2" for="option1">N</label>

                        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" value="1">
                        <label class="btn btn-outline-secondary btn-rounded  m-2" for="option2">AN</label>

                        <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" value="2">
                        <label class="btn btn-outline-secondary btn-rounded m-2" for="option3">S</label>

                        <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off" value="3">
                        <label class="btn btn-outline-secondary btn-rounded m-2" for="option4">FO</label>

                        <input type="radio" class="btn-check" name="options" id="option5" autocomplete="off" value="4">
                        <label class="btn btn-outline-secondary btn-rounded m-2" for="option5">VO</label>
                    </div>
                </div>
                <div class="modal-body" id="success" style="display: none;">
                    <div class="alert alert-success" role="alert">
                        Thank you for taking the time  for your responses.<br>
                        <small class="fw-light">Whenever you're ready, please click the <strong>"Finish"</strong> button to view your personalized stress level.</small>
                    </div>
                </div>
                <div class="modal-footer" >
                    <div class="note note-info mb-3" id="q_note">
                        <strong>Note :</strong> <small>N - Never | AN - Almost Never | S - Sometimes | FO -
                            Fairly
                            Often | VO - Very Often</small>
                    </div>
                    <button type="button" id="btnNext" name="btbNext" class="btn btn-primary btn-floating" style="display: none;"><i class="fas fa-angle-right"></i></button>
                    <button type="button" id="btnFinish" name="btnFinish" class="btn btn-primary btn-rounded" style="display: none;"><i class="fas fa-check"></i> finish</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/stress.js"></script>


