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
                                            <td>
                                                <?= $role->name; ?>
                                            </td>
                                            <td>
                                                <?= $role->description; ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->button('<i class="fa fa-edit">', 
                                                                                ['class' => 'btn btn-icons btn-inverse-primary',
                                                                                'data-toggle' => 'tooltip',
                                                                                'id' => 'edit-'.$role->id,
                                                                                'title' => 'Edit',
                                                                                'style' => 'margin-top:-22px; margin-bottom:-20px;']); 
                                                ?></i>
                                                <?= $this->Form->button('<i class="fa fa-trash">', 
                                                                                ['class' => 'btn btn-icons btn-inverse-danger',
                                                                                'data-toggle' => 'tooltip',
                                                                                'id' => 'delete-'.$role->id,
                                                                                'title' => 'Delete',
                                                                                'style' => 'margin-top:-22px; margin-bottom:-20px;']); 
                                                ?></i> 
                                            </td>
                                        <?php $i++; ?>
                                        <?php endforeach;?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>                  
        </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Role</h5>
                <?= $this->Form->create($roles, ['url' => ['action' => 'add']]); ?>
                    <?= $this->Form->control('id', ['type' => 'hidden']); ?>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <?= $this->Form->control('name', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Nama']); ?>
                    </div>
                    <div class="form-group">  
                        <label for="description">Deskripsi</label>
                        <?= $this->Form->control('description', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Deskripsi']); ?>
                    </div>
                    <?= $this->Form->button(__('Save'), ['class' => 'btn btn-success pull-right']); ?>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $("button").click(function(e){
        alert('ID = ' + this.id);
    });
});
</script>
