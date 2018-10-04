<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="departments" style="color:#669DE0;"><span class="menu-icon fa fa-building-o"></span>&nbsp; Daftar Perusahaan</a>
                </h5>
                <?= $this->Form->create("",['type'=>'get']) ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="search">Searh</label>
                            <input type="text" class="form-control" name="search_key" placeholder="Enter Searh Key">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Search By</label>
                            <div class="input-group col-xs-12">
                                <select class="form-control" name="attribute">
                                    <option value="dept_code">Kode Departemen</option>
                                    <option value="dept_name">Nama Departemen</option>
                                    <option value="address_1">Induk Departemen</option>
                                    <option value="address_2">Perusahaan</option>
                                </select>
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="submit">Search</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $this->Form->end() ?>
                <br>
                <div class="row">
                    <div class="col-12" style="padding-right: 0px;">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Kode Departemen
                                        </th>
                                        <th>
                                            Nama Departemen
                                        </th>
                                        <th>
                                            Induk Departemen
                                        </th>
                                        <th>
                                            Perusahaan
                                        </th>
                                        <th>
                                            Action
                                        </th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($departments as $d): ?>
                                    <tr>
                                        <td>
                                            <?= h($i);?>
                                        </td>
                                        <td>
                                            <?=$d->dept_code?>
                                        </td>
                                        <td>
                                            <?=$d->dept_name?>
                                        </td>
                                        <td>
                                            <?php if ($d->parent_department): ?>
                                            <?=$d->parent_department->dept_name?>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?=$d->company->company_name?>
                                        </td>
                                        <td>
                                            <button id="<?=$d->id?>" class="btn btn-icons btn-inverse-primary" data-toggle="tooltip" title="edit"
                                                style="margin-top:-22px; margin-bottom:-20px;"><i class="fa fa-edit"></i></button>
                                                <span data-target="#myModal" data-toggle="modal"><button id="btn_delete_<?=$d->id?>" class="btn btn-icons btn-inverse-danger delete" data-toggle="tooltip" data-tooltip="" title="delete"
                                                    style="margin-top:-22px; margin-bottom:-20px;" ><i class="fa fa-trash"></i></button></span>
                                                </td>
                                            </tr>
                                            <?php $i+=1; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <br>
                        <?php if ($departments-> isEmpty()): ?>
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
                    <div class="card-body">
                        <h5 class="card-title" id="title_form">Tambah Departemen</h5>
                        <?= $this->Form->create($department,['class'=>'form','id'=>'form','url'=>['action'=>'add'],
                        'data-bv-feedbackicons-valid'=>'fa fa-check',
                        'data-bv-feedbackicons-invalid'=>'fa fa-warning',
                        'data-bv-feedbackicons-validating'=>'fa fa-spinner']) ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="dept_code">Kode Departemen</label>
                                    <input type="text" class="form-control" id="dept_code" name="dept_code" placeholder="Kode Departemen" required
                                    maxlength="4">
                                </div>
                                <div class="form-group">
                                    <label for="dept_name">Nama Departemen</label>
                                    <input type="text" class="form-control" id="dept_name" name="dept_name" placeholder="Nama Departemen" required
                                    maxlength="50">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Perusahaan</label>
                                    <div class="input-group col-xs-12">
                                        <select class="form-control" name="company_id">
                                            <option value="company_code">Kode Perusahaan</option>
                                            <option value="company_name">Nama Perusahaan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Induk Departemen</label>
                                    <div class="input-group col-xs-12">
                                        <select class="form-control" name="parent_id">
                                            <option value="company_code">Kode Perusahaan</option>
                                            <option value="company_name">Nama Perusahaan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right">
                            <input type="submit" value="Save" class="btn btn-success" id="btn_save">
                            <input type="submit" value="Update" class="btn btn-success" id="btn_update">
                            <button class="btn btn-secondary" type="button" id="btn_cancel">Cancel</button>
                        </div>
                        <?= $this->Form->end() ?>
                        
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
                            <?= $this->Form->create($department,['id'=>'form_delete']) ?>
                            <div class="btn-group">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                            <?= $this->Form->end() ?>
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
            var departments = JSON.parse('<?php echo json_encode($departments); ?>');
            $("button").click(function(e) {
                var id = this.id;
                for(var i=0;i<departments.length;i++) {
                    if(id == departments[i].id) {
                        $("#dept_code").val(departments[i].dept_code);
                        $("#dept_name").val(departments[i].dept_name);
                        $("#company_id").val(departments[i].company_id);
                        $("#parent_id").val(departments[i].parent_id);
                        $("#title_form").text("Update Departemen");
                        $('#form').attr('action','departments/add/'+id);
                        $('html, body').animate({
                            scrollTop: $("form.form").offset().top
                        }, 1000)
                        break;
                    }
                    if(id == 'btn_delete_'+departments[i].id) {
                        $('#form_delete').attr('action','departments/delete/'+departments[i].id);
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
                $('#form').attr('action','companies/add');
                $("#title_form").text("Tambah Perusahaan");
            });
            
        </script>