<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><span class="menu-icon fa fa-user-circle-o"></span>&nbsp; Daftar Jabatan</h5>
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
                                        <?php foreach ($positions as $position): ?>
                                            <td>
                                                <?= $i; ?>
                                            </td>
                                            <td class="role-name" value=<?= $role->name; ?>>
                                                <?= $position->name; ?>
                                            </td>
                                            <td class="role-description" value=<?= $role->description; ?>>
                                                <?= $position->description; ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->button('<i class="fa fa-edit">', 
                                                                                ['class' => 'btn btn-icons btn-inverse-primary',
                                                                                'data-toggle' => 'tooltip',
                                                                                'id' => $position->id,
                                                                                'title' => 'Edit',
                                                                                'style' => 'margin-top:-22px; margin-bottom:-20px;']); 
                                                ?></i>
                                                <br>
                                                <?= $this->Form->postButton('<i class="fa fa-trash"></i>', ['controller' => 'Positions', 'action' => 'delete', $role->id], 
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
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Jabatan</h5>
                <?= $this->Form->create($positions, ['url' => ['action' => 'add']]); ?>
                    <?= $this->Form->control('id', ['type' => 'hidden']); ?>
                    <div class="form-group">
                        <label for="name">Nama</label>
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
            var positions = JSON.parse('<?= json_encode($positions); ?>');
            $("button").click(function(e) {
                var id = this.id;
                for(var i=0;i<positions.length;i++) {
                    if(id == positions[i].id) {
                        $("input#id").val(positions[i].id);
                        $("input#name").val(positions[i].name);
                        $("input#description").val(positions[i].description);
                        break;
                    }
                };
            });
        }); 
        </script>
        