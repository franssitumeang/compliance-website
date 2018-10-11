<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="userrequestreasons" style="color:#669DE0;">
                    <span class="menu-icon fa fa-user-circle-o"></span>&nbsp; Daftar Alasan Pengajuan
                    </a>
                </h5>
                <?= $this->Form->create("",['type'=>'get']) ?>
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                        <label for="search">Search</label>
                        <input type="text" class="form-control" name="search_key" placeholder="Enter Searh Key">
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                        <label>Search By</label>
                        <div class="input-group col-xs-12">
                        <select class="form-control" name="attribute">
                            <option value="UserRequestReasons.reason_name">Alasan</option>
                        </select>
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="submit">Search</button>
                        </span>
                        </div>
                    </div>
                    </div>
                </div>
                <?= $this->Form->end() ?>
                <div class="row">
                    <div class="col-12" style="padding-right: 0px;">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Alasan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($userRequestReasons as $userRequestReason): ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $userRequestReason->reason_name; ?></td>
                                        <td>
                                            <button id="<?= $userRequestReason->id; ?>" class="btn btn-icons btn-inverse-primary" data-toggle="tooltip" title="edit"
                                                style="margin-top:-22px; margin-bottom:-20px;"><i class="fa fa-edit"></i></button>
                                                <span data-target="#myModal" data-toggle="modal"><button id="btn_delete_<?= $userRequestReason->id; ?>" class="btn btn-icons btn-inverse-danger delete" data-toggle="tooltip" data-tooltip="" title="delete"
                                                style="margin-top:-22px; margin-bottom:-20px;" ><i class="fa fa-trash"></i></button></span>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <?php if($userRequestReasons->isEmpty()): ?>
                    <h5 class="text-center">No Record</h5>
                <?php endif; ?>
                <div class="row">
                    <div class="col-6">
                        <p>Page <?= $paginate["page"] ?> of <?= $paginate["pageCount"] ?>, showing <?= $paginate["current"] ?> record(s) out of <?= $paginate["count"] ?> total</p>
                    </div>
                    <div class="col-6">
                        <div class="pull-right">
                        <?php if ($paginate["prevPage"]): ?>
                        <a href="?page=<?= $paginate['page']-1 ?>" class="btn btn-light"><i class="fa fa-chevron-left"></i></a>
                        <?php else: ?>
                        <a class="btn btn-light disabled"><i class="fa fa-chevron-left"></i></a>
                        <?php endif; ?>
                        <?php if ($paginate["nextPage"]): ?>
                        <a href="?page=<?= $paginate['page']+1 ?>" class="btn btn-light"><i class="fa fa-chevron-right"></i></a>
                        <?php else: ?>
                        <a class="btn btn-light disabled"><i class="fa fa-chevron-right"></i></a>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body form">
                <h5 class="card-title" id="title_form">Tambah Alasan Pengajuan</h5>
                 <?= $this->Form->create($newUserRequestReason, ['url' => ['action' => 'add'], 'id' => 'form', 'class' => 'form',
                 'data-bv-feedbackicons-valid'=>'fa fa-check',
                 'data-bv-feedbackicons-invalid'=>'fa fa-warning',
                 'data-bv-feedbackicons-validating'=>'fa fa-spinner']); ?>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name">Alasan Pengajuan</label>
                            <?= $this->Form->control('reason_name', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Alasan Pengajuan', 
                            'id' => 'reason_name',
                            'required' => true]); ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pull-right">
                                <input type="submit" value="Save" class="btn btn-success" id="btn_save">
                                <input type="submit" value="Update" class="btn btn-success" id="btn_update">
                                <button class="btn btn-secondary" type="button" id="btn_cancel">Cancel</button>
                        </div>
                    </div>
                 </div>
             <?= $this->Form->end(); ?>  
            </div>
        </div>
    </div>                  
</div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                Are you sure?
            </div>
            <div class="modal-body">
                <p>Do you really want to delete these records? This process cannot be undone.</p>
                <div class="btn-group btn-group-justified">
                    <div class="btn-group"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                    <?= $this->Form->create($newUserRequestReason,['id'=>'form_delete']) ?>
                        <div class="btn-group">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    <?= $this->Form->end();  ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('#btn_update').hide()
        $('#btn_cancel').hide()
        $('#form').bootstrapValidator();
    });
    var userRequestReasons = JSON.parse('<?php echo json_encode($userRequestReasons); ?>');
    $("button").click(function(e) {
        var id = this.id;
        for(var i=0;i<userRequestReasons.length;i++) {
            if(id == userRequestReasons[i].id) {
                $("input#id").val(userRequestReasons[i].id);
                $("input#reason_name").val(userRequestReasons[i].reason_name);
                $("#title_form").text("Update Alasan Pengajuan Dokumen Dokumen");
                $('#form').attr('action','userrequestreasons/add/'+id);
                $('html, body').animate({
                scrollTop: $("form.form").offset().top
                }, 1000)
                break;
            }
            if(id == 'btn_delete_'+userRequestReasons[i].id) {
                $('#form_delete').attr('action','userrequestreasons/delete/'+userRequestReasons[i].id);
                $('#btn_update').hide()
                $('#btn_cancel').hide()
                $('#btn_save').show()
                $(':input','#form')
                .not(':button, :submit, :reset, :hidden')
                .val('')
                .removeAttr('checked')
                .removeAttr('selected');
                $('#form').attr('action','userrequestreasons/add');
                $("#title_form").text("Tambah Alasan Pengajuan Dokumen");
                break;
            }
        };
        $('#btn_update').show()
        $('#btn_cancel').show()
        $('#btn_save').hide()
        
    });
    $('#btn_cancel').click(function(e){
        $('#btn_update').hide()
        $('#btn_cancel').hide()
        $('#btn_save').show()
        $(':input','#form')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');
        $('#form').attr('action','userrequestreasons/add');
        $("#title_form").text("Tambah Alasan Pengajuan Dokumen");
    });
</script>