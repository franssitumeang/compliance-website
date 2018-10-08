<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="userrequestdetails" style="color:#669DE0;">
                    <span class="menu-icon fa fa-user-circle-o"></span>&nbsp; Daftar Approval Dokumen
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
                    <div class="col-12" style="padding-right: 0px;">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Dokumen</th>
                                        <th>Nama Pemberi Approve</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($userDocApprovals as $userDocApproval): ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $userDocApproval->user_request_header->doc_title; ?></td>
                                        <td><?= $userDocApproval->user->user_name; ?></td>
                                        <td><?= $userDocApproval->status; ?></td>
                                        <td><?= $userDocApproval->created; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <?php if($userDocApprovals->isEmpty()): ?>
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