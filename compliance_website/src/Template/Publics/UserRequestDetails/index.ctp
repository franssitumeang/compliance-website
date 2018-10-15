<section class="relative about-banner">
    <div class="overlay overlay-bg">

    </div>
    <div class="container" style="height: 200px;">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">

            </div>
        </div>
    </div>
</section>

<section class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-12 mb-30">
                    <h3 class="mb-10">
                        <?= $userRequestHeader->doc_title;?>

                    </h3>
                    <p>
                        <span class="lnr lnr-user"></span><a>
                            <?= $userRequestHeader->user->name;?></a>
                    </p>
                    <div class="button-group-area pull-right">
                        <?php echo $this->Html->link(
                            'Upload Revisi', 
                            array('controller' => 'UserRequestDetails', 'action' => 'add', $userRequestHeader->id),
                            ['class' => 'genric-btn primary radius small']); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Revisi</h5>
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal </th>
                                                    <th>Tipe Request</th>
                                                    <th>Description</th>
                                                    <th>Compliance</th>
                                                    <th>Manager</th>
                                                    <th>More</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($userRequestDetails as $urd): ?>
                                                <tr>
                                                    <td>
                                                        <?=$urd->created?>
                                                    </td>
                                                    <td>
                                                        <?=$urd->request_types ?>
                                                    </td>
                                                    <td>
                                                        <?=$urd->descriptions ?>
                                                    </td>
                                                    <td>
                                                        <?=$urd->approve_c ?>
                                                    </td>
                                                    <td>
                                                        <?=$urd->approve_m ?>
                                                    </td>
                                                    <td>
                                                        <div class="button-group-area">

                                                            <?php echo $this->Html->link(
                                                                'Detail', 
                                                                array('controller' => 'Discussions', 'action' => 'index', $urd->id),
                                                                ['class' => 'genric-btn primary-border radius small']); ?>
                                                            <!-- <button class="btn pull-left btn-sm">
                                                                    <?= $this->Html->link('Download', ['controller' => 'userRequestHeaders', 'action' => 'download',$urd->user_request_header_id]) ?>
                                                                </button>
                                                                <button class="btn pull-left btn-sm">
                                                                    <?php echo $this->Html->link('Diskusi', array('controller' => 'Discussions', 'action'=>'index', $urd->id)); ?>
                                                                </button> -->
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php $i+=1; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php if ($userRequestDetails-> isEmpty()): ?>
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

                <div class="col-lg-4" style="margin-top: 20px;">
                    <input name="searchParticipant" id="searchParticipant" placeholder="Cari untuk menambah Participant"
                        class="common-input form-control" required="" type="text" required>
                </div>
                <div class="col-lg-4" style="margin-top: 20px;">
                    <button type="button" class="genric-btn primary radius">Save</button>
                </div>

                <div class="col-lg-12">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget tag-cloud-widget">
                            <ul id="participant">
                                <li><a href=#> data.item.label </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




<!-- Modal add Participant -->

<div id="addParticipantModal" class="modal fade">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Menambah Participant</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <p>Nama Participant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="genric-btn primary small radius">Submit</button>
                <button type="button" class="genric-btn primary small radius" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showModal(temp) {
        $('#' + temp).modal({
            backdrop: 'static',
            keyboard: false
        });
    }

    $('document').ready(function () {
        $(function () {
            $("#searchParticipant").autocomplete({
                source: function (request, response) {
                    $.ajax({
                        url: "/AjaxAutoCompletes/searchName" +
                            '?name=' + request.term,
                        type: "GET",
                        async: false,
                        headers: {
                            "ACCEPT": "application/json;odata=verbose"
                        }
                    }).done(function (data) {
                        var hasil = null;
                        if (data.result.length == 0) {
                            hasil = [{
                                label: "Tidak ada nama yang mirip",
                                value: '',
                                id: ''
                            }]
                        } else {
                            hasil = $.map(data.result, function (value, key) {
                                return {
                                    label: value,
                                    value: value,
                                    id: key
                                }
                            })
                        }
                        response(hasil);
                    })
                },
                select: function (event, data) {
                    console.log("yang di pilih : ") 
                    console.log(data)
                    console.log("=======================");
                    $("#searchParticipant").val('');
                    if (data.item.id) {
                        $("#participant").append("<li><a href='#'>" + data.item.label +
                            "</a></li>");
                    }
                    return false;
                },
                minLength: 2,
                delay: 100
            });
        });
    });

</script>
