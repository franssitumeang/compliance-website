<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="userrequestdetails" style="color:#669DE0;">
                    <span class="menu-icon fa fa-user-circle-o"></span>&nbsp; Daftar Request Details User
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
                            <option value="UserRequestHeaders.doc_title">Nama Dokumen</option>
                            <option value="UserRequestDetails.approve_m">Persetujuan M</option>
                            <option value="UserRequestDetails.approve_c">Persetujuan Compliance</option>
                            <option value="UserRequestDetails.request_types">Status Pengajuan</option>
                            <option value="UserRequestDetails.descriptions">Deskripsi</option>
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
                                        <th>Deskripsi</th>
                                        <th>Persetujuan Compliance</th>
                                        <th>Status Pengajuan</th>
                                        <th>Deskripsi</th>
                                        <th>Lampiran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($userRequestDetails as $userRequestDetail): ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $userRequestDetail->user_request_header->doc_title; ?></td>
                                        <td><?= $userRequestDetail->approve_m; ?></td>
                                        <td><?= $userRequestDetail->approve_c; ?></td>
                                        <td><?= $userRequestDetail->request_types; ?></td>
                                        <td><?= $userRequestDetail->descriptions; ?></td>
                                        <td><?= $userRequestDetail->attachment; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
                <br>
                <?php if($userRequestDetails->isEmpty()): ?>
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