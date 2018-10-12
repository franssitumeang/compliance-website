<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="groups" style="color:#669DE0;">
                        <span class="menu-icon fa fa-user-circle-o"></span>&nbsp; Daftar Group User
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
                                    <option value="Groups.title">Nama</option>
                                    <option value="Groups.description">Deskripsi</option>
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
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php $i=1;?>
                                        <?php foreach ($groups as $group): ?>
                                        <tr>
                                        <td>
                                            <?= $i; ?>
                                        </td>
                                        <td class="group-title" value=<?= $group->title; ?>>
                                            <?= $group->title; ?>
                                        </td>
                                        <td class="group-description" value=<?= $group->description; ?>>
                                            <?= $group->description; ?>
                                        </td>
                                        <td>
                                            <?= $this->Form->button('<i class="fa fa-edit">', 
                                                ['class' => 'btn btn-icons btn-inverse-primary',
                                                'data-toggle' => 'tooltip',
                                                'id' => $group->id,
                                                'title' => 'Edit',
                                                'style' => 'margin-top:-22px; margin-bottom:-20px;']); 
                                                ?></i>
                                                <span data-target="#myModal-<?= $group->id; ?>" data-toggle="modal"><button class="btn btn-icons btn-inverse-danger delete" data-toggle="tooltip" data-tooltip="" title="Delete"
                                                    style="margin-top:-22px; margin-bottom:-20px;" ><i class="fa fa-trash"></i></button></span>
                                                    
                                                </td>
                                            </tr>
                                            <div id="myModal-<?= $group->id; ?>" class="modal fade">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                Are you sure?
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                                <div class="btn-group">
                                                                    <div class="btn-group"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                                                                    <div class="btn-group">
                                                                        <?= $this->Form->postButton('Delete', ['controller' => 'Groups', 'action' => 'delete', $group->id], 
                                                                        ['type' => 'submit',
                                                                        'class' => 'btn btn-danger'
                                                                        ]); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php $i++; ?>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php if($groups->isEmpty()) : ?>
                        <h5 class="text-center">No Record</h5>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-6">
                                <p>Page <?= $paginate["page"] ?> of <?= $paginate["pageCount"] ?>, showing <?= $paginate["current"] ?> record(s)</p>
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
                        <h5 class="card-title" id="title_form">Tambah Group User</h5>
                        <?= $this->Form->create($newGroup, ['url' => ['action' => 'add'], 'id' => 'form', 'class' => 'form',
                        'data-bv-feedbackicons-valid'=>'fa fa-check',
                        'data-bv-feedbackicons-invalid'=>'fa fa-warning',
                        'data-bv-feedbackicons-validating'=>'fa fa-spinner']); ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="title">Nama</label>
                                    <?= $this->Form->control('title', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Nama', 
                                    'required' => true]); ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">  
                                    <label for="description">Deskripsi</label>
                                    <?= $this->Form->control('description', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Deskripsi']); ?>
                                </div>
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
        <script>
            $(document).ready(function(){
                $('#btn_update').hide()
                $('#btn_cancel').hide()
                $('[data-toggle="tooltip"]').tooltip();
                $('#form').bootstrapValidator();
                var groups = JSON.parse('<?= json_encode($groups); ?>');
                $("button").click(function(e) {
                    var id = this.id;
                    for(var i=0;i<groups.length;i++) {
                        if(id == groups[i].id) {
                            $("input#id").val(groups[i].id);
                            $("input#title").val(groups[i].title);
                            $("input#description").val(groups[i].description);
                            $('#form').attr('action','groups/add/'+id);
                            $('#btn_update').show()
                            $('#btn_cancel').show()
                            $('#btn_save').hide()
                            $('#title_form').text('Update Group User')
                            $('html, body').animate({
                                scrollTop: $("form.form").offset().top
                            }, 1000)
                            break;
                        }
                    };
                });
                $("#btn_cancel").click(function(e) {
                    $('#btn_update').hide();
                    $('#btn_cancel').hide();
                    $('#btn_save').show();
                    $('#title_form').text('Tambah Group User');
                    $(':input','#form')
                    .not(':button, :submit, :reset, :hidden')
                    .val('')
                    .removeAttr('checked')
                    .removeAttr('selected');
                    $('#form').attr('action','groups/add/');
                });
            }); 
        </script>
        