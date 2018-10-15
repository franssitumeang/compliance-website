<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container" style="height: 200px;">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">

            </div>
        </div>
    </div>
</section>

<section class="contact-page-area section-gap">
    <div class="container">
        <div class="col-lg-12">
            <h3 class="mb-30">Upload Revisi</h3>

            <div class="col-lg-12">
                <?= $this->Form->create($ure, [
                    'type' => 'file',
                    'id' => 'user_request_form',
                    'data-bv-feedbackicons-invalid'=>'fa fa-warning',
                    'data-bv-feedbackicons-validating'=>'fa fa-spinner'
                ]) ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Uraian Dokumen</label>
                            <textarea name="descriptions" class="common-textarea form-control" style="min-height: 136px;"
                                name="" placeholder="Enter Messege" required="" minlength="10"></textarea>
                        </div>
                        <div class="form-group">
                            <p name="namepath">Pilih Dokumen</p>
                            <input name="attachment" id="myFile" class="common-input form-control"
                                required="" type="file" accept="
                            application/pdf,
                            application/msword,
                            application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                onchange="myFunction()" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- <div class="alert-msg" style="text-align: left;"></div> -->
                        <button type="submit" class="genric-btn primary radius">Submit</button>
                        <button type="reset" class="genric-btn primary radius">Reset</button>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="userRequestHeader modal-body">
                            Please upload file having extensions .pdf/ .doc/ .docx only.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="genric-btn primary small radius" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<script>
    $(document).ready(function () {
        $("#user_request_form").bootstrapValidator();

    });

    function myFunction() {
        var fileInput = document.getElementById('myFile');
        var filePath = fileInput.value;
        var allowedExtensions = /(\.pdf|\.doc|\.docx)$/i;
        if (!allowedExtensions.exec(filePath)) {
            $('#myModal').modal('show');
            fileInput.value = '';
            document.getElementById("demo").value = '';
            return false;
        } else {
            //Image preview
            if (fileInput.files && fileInput.files[0]) {
                var txt = fileInput.files[0].name;
                document.getElementById("demo").value = txt;
            }
        }
    }

</script>
