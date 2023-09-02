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
                <div class="modal-body">
                    <div class="mb-4">
                        <p class="fw-normal" id="questions"></p>
                    </div>
                    <div class="md-btn-group-vertical d-flex flex-column flex-md-row bg-transparent btn-rounded">
                        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
                        <label class="btn btn-outline-secondary btn-rounded m-2" for="option1">N</label>

                        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                        <label class="btn btn-outline-secondary btn-rounded  m-2" for="option2">AN</label>

                        <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
                        <label class="btn btn-outline-secondary btn-rounded m-2" for="option3">S</label>

                        <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                        <label class="btn btn-outline-secondary btn-rounded m-2" for="option4">FO</label>

                        <input type="radio" class="btn-check" name="options" id="option5" autocomplete="off">
                        <label class="btn btn-outline-secondary btn-rounded m-2" for="option5">VO</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="note note-info mb-3">
                        <strong>Note :</strong> <small>N - Never | AN - Almost Never | S - Sometimes | FO -
                            Fairly
                            Often | VO - Very Often</small>
                    </div>
                    <button type="submit" id="btnNext" name="btbNext" class="btn btn-primary btn-floating"
                            style="display: none;"><i class="fas fa-angle-right"></i></button>
                    <!--<button type="submit" name="btnFinish" class="btn btn-primary btn-rounded"><i class="fas fa-check"></i> finish</button>-->
                </div>
            </div>
        </form>
    </div>
</div>
<script src="../accest/js/stress.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    jQuery.ajax({
        url:"php/Code/stress_level.php",
        data: { set: true },
        type: "POST",
        success:function (data){
            $("#questions").html(data);
        },
    });
</script>

