<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><span class="menu-icon fa fa-user-circle-o"></span>&nbsp; Daftar Roles</h5>
                <div class="row">
                    <div class="col-10" style="padding-right: 0px;">
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
                                                <br>
                                                <?= $this->Form->postButton('<i class="fa fa-trash"></i>', ['controller' => 'Roles', 'action' => 'delete', $role->id], 
                                                    ['class' => 'btn btn-icons btn-inverse-danger',
                                                    'id' => 'delete-button',
                                                    'data-toggle' => 'confirmation',
                                                    'title' => 'Delete',
                                                    'style' => 'margin-top:-22px; margin-bottom:-20px;']); ?>
                                                
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>                  
        </div>
    </div>     
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Role</h5>
            <?= $this->Form->create($newRole, ['url' => ['action' => 'add'], 'id' => 'form']); ?>
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
                        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-success pull-right', 'id' => 'btn_save']); ?>
                        <?= $this->Form->button(__('Cancel'), ['class' => 'btn btn-secondary pull-right', 'style' => 'display:none;', 'id' => 'btn_cancel']); ?>
                        <?= $this->Form->button(__('Update'), ['class' => 'btn btn-success pull-right', 'style' => 'display:none;', 'id' => 'btn_update']); ?>
                    </div>
                 </div>
             <?= $this->Form->end(); ?>  
            </div>
        </div>
    </div>
</div>     
<script>
$(document).ready(function(){
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
                break;
            }
        };
    });
    $("#btn_cancel").click(function(e) {
        $('#btn_update').hide();
        $('#btn_cancel').hide();
        $('#btn_save').show();
        $(':input','#form')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');
        $('#form').attr('action','roles/add/');
    });
}); 
</script>
