<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><span class="menu-icon fa fa-user-circle-o"></span>&nbsp; Daftar Roles</h5>
                <div class="row">
                    <div class="col-12" style="padding-right: 0px;">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i=1;?>
                                        <?php foreach ($roles as $role): ?>
                                            <td>
                                                <?= $i; ?>
                                            </td>
                                            <td class="role-name" value=<?= $role->name; ?>>
                                                <?= $role->name; ?>
                                            </td>
                                            <td class="role-description" value=<?= $role->description; ?>>
                                                <?= $role->description; ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->button('<i class="fa fa-edit">', 
                                                                                ['class' => 'btn btn-icons btn-inverse-primary',
                                                                                'data-toggle' => 'tooltip',
                                                                                'id' => $role->id,
                                                                                'title' => 'Edit',
                                                                                'style' => 'margin-top:-22px; margin-bottom:-20px;']); 
                                                ?></i>
                                                <span data-target="#myModal-<?= $role->id; ?>" data-toggle="modal"><button class="btn btn-icons btn-inverse-danger delete" data-toggle="tooltip" data-tooltip="" title="Delete"
                                                    style="margin-top:-22px; margin-bottom:-20px;" ><i class="fa fa-trash"></i></button></span>
                                                
                                            </td>
                                        </tr>
                                        <div id="myModal-<?= $role->id; ?>" class="modal fade">
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
                                                                <?= $this->Form->postButton('Delete', ['controller' => 'Roles', 'action' => 'delete', $role->id], 
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
                <h5 class="card-title" id="title_form">Tambah Role</h5>
                 <?= $this->Form->create($newRole, ['url' => ['action' => 'add'], 'id' => 'form', 'class' => 'form']); ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <?= $this->Form->control('name', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Nama']); ?>
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
    var roles = JSON.parse('<?= json_encode($roles); ?>');
    $("button").click(function(e) {
        var id = this.id;
        for(var i=0;i<roles.length;i++) {
            if(id == roles[i].id) {
                $("input#id").val(roles[i].id);
                $("input#name").val(roles[i].name);
                $("input#description").val(roles[i].description);
                $('#form').attr('action','roles/add/'+id);
                $('#btn_update').show()
                $('#btn_cancel').show()
                $('#btn_save').hide()
                $('#title_form').text('Update Role')
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
        $('#title_form').text('Tambah Role');
        $(':input','#form')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');
        $('#form').attr('action','roles/add/');
    });
}); 
</script>
