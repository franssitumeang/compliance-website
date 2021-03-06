<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="articlecategories" style="color:#669DE0;">
                    <span class="menu-icon fa fa-user-circle-o"></span>&nbsp; Daftar Kategori Artikel
                    </a>
                </h5>
                <?= $this->Form->create("",['type'=>'get']) ?>
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                        <label for="search">Searh</label>
                        <input type="text" class="form-control" name="search_key" placeholder="Enter Search Key">
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                        <label>Search By</label>
                        <div class="input-group col-xs-12">
                        <select class="form-control" name="attribute">
                            <option value="name">Nama</option>
                            <option value="status">Status</option>
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
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($articleCategories as $articleCategory): ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $articleCategory->name_categories; ?></td>
                                        <td>
                                            <button id="<?= $articleCategory->id; ?>" class="btn btn-icons btn-inverse-primary" data-toggle="tooltip" title="edit"
                                                style="margin-top:-22px; margin-bottom:-20px;"><i class="fa fa-edit"></i></button>
                                                <span data-target="#myModal" data-toggle="modal"><button id="btn_delete_<?= $articleCategory->id; ?>" class="btn btn-icons btn-inverse-danger delete" data-toggle="tooltip" data-tooltip="" title="delete"
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
                <?php if($articleCategories->isEmpty()): ?>
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
                <h5 class="card-title" id="title_form">Tambah Kategori</h5>
                 <?= $this->Form->create($newArticleCategory, ['url' => ['action' => 'add'], 'id' => 'form', 'class' => 'form',
                 'data-bv-feedbackicons-valid'=>'fa fa-check',
                 'data-bv-feedbackicons-invalid'=>'fa fa-warning',
                 'data-bv-feedbackicons-validating'=>'fa fa-spinner']); ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Nama Kategori</label>
                            <?= $this->Form->control('name_categories', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Nama', 
                            'id' => 'name_categories',
                            'required' => true]); ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Deskripsi</label>
                            <?= $this->Form->control('description', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Nama', 
                            'id' => 'description']); ?>
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
                    <?= $this->Form->create($newArticleCategory,['id'=>'form_delete']) ?>
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
    var articleCategories = JSON.parse('<?php echo json_encode($articleCategories); ?>');
    $("button").click(function(e) {
        var id = this.id;
        for(var i=0;i<articleCategories.length;i++) {
            if(id == articleCategories[i].id) {
                $("input#id").val(articleCategories[i].id);
                $("input#name_categories").val(articleCategories[i].name_categories);
                $("input#description").val(articleCategories[i].description);
                $("#title_form").text("Update Kategori Artikel");
                $('#form').attr('action','articlecategories/add/'+id);
                $('html, body').animate({
                scrollTop: $("form.form").offset().top
                }, 1000)
                break;
            }
            if(id == 'btn_delete_'+articleCategories[i].id) {
                $('#form_delete').attr('action','articlecategories/delete/'+articleCategories[i].id);
                $('#btn_update').hide()
                $('#btn_cancel').hide()
                $('#btn_save').show()
                $(':input','#form')
                .not(':button, :submit, :reset, :hidden')
                .val('')
                .removeAttr('checked')
                .removeAttr('selected');
                $('#form').attr('action','articlecategories/add');
                $("#title_form").text("Tambah Kategori Artikel");
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
        $('#form').attr('action','articlecategories/add');
        $("#title_form").text("Tambah Kategori Artikel");
    });

</script>