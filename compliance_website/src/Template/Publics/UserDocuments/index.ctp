<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container" style="height: 200px;">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">

            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<section class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-5">
                    <h3 class="mb-30">Daftar Dokumen</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample">
                                <div class="row">
                                    <?= $this->Form->create(null,['type'=>'get']) ?>
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
                                                    <option value="created">Tanggal</option>
                                                    <option value="name">Nama</option>
                                                    <option value="status">Status</option>
                                                </select>
                                                <span class="
                                                        input-group-append">
                                                        <button class="genric-btn primary radius medium" type="submit">Search</button>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <?= $this->Form->end() ?>

                                </div>
                            </form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal </th>
                                                    <th>Nomor Dokumen</th>
                                                    <th>Judul Dokumen</th>
                                                    <th>Kategori</th>
                                                    <th>Tipe DOkumen</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                            <?php foreach ($userDocuments as $userDocument): ?>
                                                <tr>
                                                    <td><?= $userDocument->publisher_date; ?></td>
                                                    <td><?= $userDocument->doc_num; ?></td>
                                                    <td><?= $userDocument->name; ?></td>
                                                    <td><?= $userDocument->user_doc_category->category_name; ?></td>
                                                    <td><?= $userDocument->user_doc_type->doc_type_name; ?></td>
                                                    <td><?= $userDocument->status; ?></td>
                                                    <td>
                                                        <?php echo $this->Html->link(
                                                            'View', 
                                                            array('controller' => 'UserDocuments', 'action' => 'view', $userDocument->id),
                                                            ['class' => 'genric-btn primary-border radius small']); ?>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php if ($userDocuments-> isEmpty()): ?>
                                <h5 class="text-center">No Record</h5>
                                <?php endif; ?>
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

            </div>
        </div>
    </div>

</section>
