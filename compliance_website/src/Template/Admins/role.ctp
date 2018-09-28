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
                                    <th>ID</th>
                                    <th>Menu ID</th>
                                    <th>User Group ID</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i=1;?>
                                        <?php foreach ($roles as $role): ?>
                                            <td>
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <?= $role->id; ?>
                                            </td>
                                            <td>
                                                <?= $role->menu_id; ?>
                                            </td>
                                            <td>
                                                <?= $role->user_group_id; ?>
                                            </td>
                                        <?php $i++; ?>
                                        <?php endforeach;?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-2" style="padding-left: 0px;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($roles as $role): ?>
                                <tr>
                                    <td>
                                        <button class="btn btn-icons btn-inverse-primary" data-toggle="tooltip" title="edit" style="margin-top:-22px; margin-bottom:-20px;"><i
                                            class="fa fa-edit"></i></button>
                                        <button class="btn btn-icons btn-inverse-danger" data-toggle="tooltip" title="delete" style="margin-top:-22px; margin-bottom:-20px;"><i
                                            class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>                  
        </div>
    </div>
    <!-- <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Role</h5>
                <?= $this->Form->create($roles, ['url' => ['action' => 'add']]); ?>
                    <?= $this->Form->control('id', ['type' => 'hidden']); ?>
                    <div class="form-group">
                        <?= $this->Form->control('menu_id'); ?>
                    </div>
                    <div class="form-group">  
                        <?= $this->Form->control('user_group_id'); ?>
                    </div>
                    <?= $this->Form->button(__('Save Article')); ?>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div> -->
</div>
