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
            <h3 class="mb-30">Pengajuan Dokumen Baru</h3>
            
            <div class="col-lg-12">
                <?= $this->Form->create(null, [
                'url' => ['controller' => 'UserRequestHeaders', 'action' => 'add'],
                'type' => 'file',
                'id' => 'user_request_form',
                'data-bv-feedbackicons-invalid'=>'fa fa-warning',
                'data-bv-feedbackicons-validating'=>'fa fa-spinner'
                ]) ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>User</label>
                            <div class="common-select" id="common-select">
                                <select class="common-select form-control" name="user_id" required>
                                    <option value="">Select user</option>
                                    <?php foreach ($users as $user) : ?>
                                    <option value=<?=$user->id ?>>
                                        <?= $user->name ?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <p>Pengajuan Dokumen : </p>
                            <div class="common-select" id="common-select">
                                <select class="common-select form-control" name="user_doc_type_id" required>
                                    <option value="">Select Pengajuan Dokumen</option>
                                    <?php foreach ($UserDocTypes as $udt) : ?>
                                    <option value=<?=$udt->id ?>>
                                        <?= $udt->doc_type_name ?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <p>Kategori</p>
                            <div class="common-select" id="common-select">
                                <select class="common-select form-control" name="user_doc_category_id" required>
                                    <option value="">Select Kategori</option>
                                    <?php foreach ($UserDocCategories as $udc) : ?>
                                    <option value=<?=$udc->id ?>>
                                        <?= $udc->category_name ?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <p>Alasan Pengajuan : </p>
                            <div class="common-select" id="common-select">
                                <select class="common-select form-control" name="user_request_reason_id" required>
                                    <option value="">Select Alasan Pengajuan</option>
                                    <?php foreach ($UserRequestReasons as $urr) : ?>
                                    <option value=<?=$urr->id ?>>
                                        <?= $urr->reason_name ?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Uraian Dokumen</label>
                            <textarea name="descriptions" class="common-textarea form-control" style="min-height: 136px;" name=""
                            placeholder="Enter Messege" required="" minlength="10"></textarea>
                        </div>
                        <div class="form-group">
                            <p>Judul Dokumen</p>
                            <input name="doc_title" placeholder="Masukkan judul dokumen" class="common-input form-control"
                            required="" type="text" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" >Nomor Dokumen</label>
                            <input name="doc_no" placeholder="Masukkan nomor dokumen" class="common-input form-control"
                            required="" type="text" required>
                        </div>
                        <div class="form-group">
                            <p name="namepath">Pilih Dokumen</p>
                            <input  name="file_attachment" id="myFile" placeholder="Masukkan nomor dokumen" class="common-input form-control"
                            required="" type="file" accept="
                            application/pdf,
                            application/msword,
                            application/vnd.openxmlformats-officedocument.wordprocessingml.document" onchange="myFunction()" required>
                            <!-- <div class="row">
                                <div class="col-lg-3">
                                    <input value="Browse..." onclick="document.getElementById('myFile').click();" class="genric-btn danger-border circle"
                                    type="button">
                                </div>
                                <div class="col-lg-9">
                                    <input id="demo" readonly placeholder="File Name" class="common-input form-control" type="text">
                                </div>
                            </div> -->
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