<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="userrequestheaders" style="color:#669DE0;">
                    <span class="menu-icon fa fa-user-circle-o"></span>&nbsp; Daftar Request Header User
                    </a>
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
                    <div class="col-10" style="padding-right: 0px;">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>No Dokumen</th>
                                        <th>Nama Dokumen</th>
                                        <th>Kategori</th>
                                        <th>Tipe</th>
                                        <th>Alasan Pengajuan</th>
                                        <th>Status</th>
                                        <th>Nama Pengaju Dokumen</th>
                                        <th>Tanggal Pengajuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($userRequestHeaders as $userRequestHeader): ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $userRequestHeader->doc_no; ?></td>
                                        <td><?= $userRequestHeader->doc_title; ?></td>
                                        <td><?= $userRequestHeader->user_doc_category->category_name; ?></td>
                                        <td><?= $userRequestHeader->user_doc_type->doc_type_name; ?></td>
                                        <td><?= $userRequestHeader->user_request_reason->reason_name; ?></td>
                                        <td><?= $userRequestHeader->status; ?></td>
                                        <td><?= $userRequestHeader->user->user_name; ?></td>
                                        <td><?= $userRequestHeader->request_dates; ?></td>
                                    </tr>
                                    <?php $i++; ?>
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
                                <?php foreach ($userRequestHeaders as $userRequestHeader): ?>
                                <tr>
                                <td>
                                    <button id="<?=$userRequestHeader->id?>" class="btn btn-icons btn-inverse-primary" data-toggle="tooltip" title="edit"
                                    style="margin-top:-22px; margin-bottom:-20px;"><i class="fa fa-edit"></i></button>
                                    <span data-target="#myModal" data-toggle="modal"><button id="btn_delete_<?=$userRequestHeader->id?>" class="btn btn-icons btn-inverse-danger delete" data-toggle="tooltip" data-tooltip="" title="delete"
                                    style="margin-top:-22px; margin-bottom:-20px;" ><i class="fa fa-trash"></i></button></span>
                                </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <?php if($userRequestHeaders->isEmpty()): ?>
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
</div>