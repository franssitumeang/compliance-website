<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="users" style="color:#669DE0;"><span class="menu-icon fa fa-building-o"></span>&nbsp;
                        Daftar User</a>
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
                                        <option value="Users.name">Nama</option>
                                        <option value="Positions.name">Jabatan</option>
                                        <option value="Departments.dept_name">Departemen</option>
                                        <option value="Companies.company_name">Perusahaan</option>
                                        <option value="Users.phone_num">No. Telepon</option>
                                        <option value="Users.email">Email</option>
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
                        <div class="col-10" style="padding-right: 0px;">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Nama
                                            </th>
                                            <th>
                                                Jabatan
                                            </th>
                                            <th>
                                                Departemen
                                            </th>
                                            <th>
                                                Perusahaan
                                            </th>
                                            <th>
                                                No. Telepon
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Group User
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($users as $u): ?>
                                        <tr>
                                            <td>
                                                <?= h($i);?>
                                            </td>
                                            <td>
                                                <?=$u->name?>
                                            </td>
                                            <td>
                                                <?=$u->position->name?>
                                            </td>
                                            <td>
                                                <?=$u->department->dept_name?>
                                            </td>
                                            <td>
                                                <?=$u->department->company->company_name?>
                                            </td>
                                            <td>
                                                <?=$u->phone_num?>
                                            </td>
                                            <td>
                                                <?=$u->email?>
                                            </td>
                                            <td>
                                                <?php foreach ($u->groups as $gr): ?>
                                                <?php if ($gr->title == "Admin"): ?>
                                                    <mark class="bg-primary text-white"><?=$gr->title?></mark>
                                                <?php else: ?>
                                                    <mark class="bg-success text-white"><?=$gr->title?></mark>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </td>
                                        </tr>
                                        <?php $i+=1; ?>
                                        <?php endforeach; ?>
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
                                    <?php foreach ($users as $s): ?>
                                    <tr>
                                        <td>
                                            <button id="<?=$s->id?>" class="btn btn-icons btn-inverse-primary" data-toggle="tooltip"
                                                title="edit" style="margin-top:-22px; margin-bottom:-20px;"><i class="fa fa-edit"></i></button>
                                                <span data-target="#myModal" data-toggle="modal"><button id="btn_delete_<?=$s->id?>"
                                                    class="btn btn-icons btn-inverse-danger delete" data-toggle="tooltip"
                                                    data-tooltip="" title="delete" style="margin-top:-22px; margin-bottom:-20px;"><i
                                                    class="fa fa-trash"></i></button></span>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <br>
                            <?php if ($users-> isEmpty()): ?>
                            <h5 class="text-center">No Record</h5>
                            <?php endif; ?>
                            <div class="row">
                                
                                <div class="col-6">
                                    <p>Page
                                        <?= $paginate["page"] ?> of
                                        <?= $paginate["pageCount"] ?>, showing
                                        <?= $paginate["current"] ?> record(s) out of
                                        <?= $paginate["count"] ?> total</p>
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
                                <h5 class="card-title" id="title_form">Tambah Perusahan</h5>
                                <?= $this->Form->create(null,['class'=>'form','id'=>'form','url'=>['controller'=>'Users','action'=>'add'],
                                'data-bv-feedbackicons-valid'=>'fa fa-check',
                                'data-bv-feedbackicons-invalid'=>'fa fa-warning',
                                'data-bv-feedbackicons-validating'=>'fa fa-spinner']) ?>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap"
                                            required maxlength="50">
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <div class="input-group col-xs-12">
                                                <select class="form-control" name="position_id" required>
                                                    <option value="" disabled selected>-- Pilih Jabatan --</option>
                                                    <?php foreach ($positions as $p): ?>
                                                    <option value="<?=$p->id?>">
                                                        <?=$p->name?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Departemen</label>
                                            <div class="input-group col-xs-12">
                                                <select class="form-control selectpicker" name="department_id" id="department_id"
                                                required>
                                                <option value="" disabled selected>-- Pilih Departemen --</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="phone_num">No. Telepon</label>
                                        <input type="text" class="form-control" id="phone_num" name="phone_num" placeholder="No. Telepon"
                                        required maxlength="30">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                                        required maxlength="50">
                                    </div>
                                    <div class="form-group">
                                        <label>Group User</label>
                                        <div class="input-group col-xs-12">
                                            <select id="multiselect" multiple="multiple" name="groups_id">
                                                <?php foreach ($groups as $g): ?>
                                                <option value="<?=$g->id?>">
                                                    <?=$g->title?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id_group" id="id_group">
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
                                    <?= $this->Form->create($user,['id'=>'form_delete']) ?>
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
                        $("select[name='groups_id']").change(function () {
                            $("#id_group").val($(this).val());
                        });
                        $('[data-toggle="tooltip"]').tooltip();
                        $('#btn_update').hide()
                        $('#btn_cancel').hide()
                        $('#form').bootstrapValidator();
                        $('#multiselect').multiselect();
                    });
                    var users = JSON.parse('<?php echo json_encode($allUser); ?>');
                    $("button").click(function (e) {
                        var id = this.id;
                        for (var i = 0; i < users.length; i++) {
                            if (id == users[i].id) {
                                $("#name").val(users[i].name);
                                $("#phone_num").val(users[i].phone_num);
                                $("#email").val(users[i].email);
                                $("#title_form").text("Update User");
                                $('#form').attr('action', 'users/add/' + id);
                                $('html, body').animate({
                                    scrollTop: $("form.form").offset().top
                                }, 1000)
                                break;
                            }
                            if (id == 'btn_delete_' + users[i].id) {
                                $('#form_delete').attr('action', 'users/delete/' + users[i].id);
                                break;
                            }
                        };
                        $('#btn_update').show()
                        $('#btn_cancel').show()
                        $('#btn_save').hide()
                        
                    });
                    $('#btn_cancel').click(function (e) {
                        $('#btn_update').hide()
                        $('#btn_cancel').hide()
                        $('#btn_save').show()
                        empty_form();
                        $('#form').attr('action', 'users/add');
                        $("#title_form").text("Tambah User");
                    });
                    var empty_form = function () {
                        $(':input', '#form')
                        .not(':button, :submit, :reset, :hidden')
                        .val('')
                        .removeAttr('checked')
                        .removeAttr('selected');
                    }
                    var companies = JSON.parse('<?php echo json_encode($companies); ?>');
                    var departments = JSON.parse('<?php echo json_encode($departments); ?>');
                    var func_get_dept = function () {
                        for (var i = 0; i < companies.length; i++) {
                            $('#department_id').append("<optgroup label='" + companies[i].company_name + "'>");
                                for (var j = 0; j < departments.length; j++) {
                                    if (departments[j].company_id == companies[i].id) {
                                        $('#department_id').append("<option value='" + departments[j].id + "'>" + departments[j].dept_name + "</option>");
                                    }
                                }
                                $('#department_id').append("</optgroup>");
                            }
                        }
                        func_get_dept();
                        
                    </script>