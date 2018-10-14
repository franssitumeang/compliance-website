<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="archives" style="color:#669DE0;">
                    <span class="menu-icon fa fa-tasks"></span>&nbsp; Daftar Arsip
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
                    <option value="doc_name">Nama Dokumen</option>
                    <option value="process_owner">Tanggal Terbit</option>
                    <!-- <option value="ArticleCategories.name_categories">Kategori Artikel</option> -->
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
                                    <th>No</th>
                                    <th>Histori Nomor Revisi</th>
                                    <th>Nama Dokumen</th>
                                    <th>Pemilik Proses</th>
                                    <th>Tanggal Revisi</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i=1;?>
                                        <?php foreach ($archives as $archive): ?>
                                            <td>
                                                <?= $i; ?>
                                            </td>
                                            <td class="historical_revision_number" value=<?= $archive->historical_revision_number; ?>>
                                                <?= $archive->historical_revision_number; ?>
                                            </td>
                                            <td class="doc_name" value=<?= $archive->doc_name; ?>>
                                                <?= $archive->doc_name; ?>
                                            </td>
                                            <td class="process_owner" value=<?= $archive->process_owner; ?>>
                                                <?= $archive->process_owner; ?>
                                            </td>
                                            <td class="revision_date" value=<?= $archive->revision_date; ?>>
                                                <?= $archive->revision_date; ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->button('<i class="fa fa-edit">', 
                                                                                ['class' => 'btn btn-icons btn-inverse-primary',
                                                                                'data-toggle' => 'tooltip',
                                                                                'id' => $article->id,
                                                                                'title' => 'Edit',
                                                                                'style' => 'margin-top:-22px; margin-bottom:-20px;']); 
                                                ?></i>
                                                <span data-target="#modalView-<?= $article->id; ?>" data-toggle="modal"><button class="btn btn-icons btn-inverse-success view" data-toggle="tooltip" data-tooltip="" title="View"
                                                    style="margin-top:-22px; margin-bottom:-20px;" ><i class="fa fa-eye"></i></button></span>
                                                
                                                <span data-target="#myModal-<?= $article->id; ?>" data-toggle="modal"><button class="btn btn-icons btn-inverse-danger delete" data-toggle="tooltip" data-tooltip="" title="Delete"
                                                    style="margin-top:-22px; margin-bottom:-20px;" ><i class="fa fa-trash"></i></button></span>
                                            </td>
                                        </tr>

                                        <!-- Modal View -->
                                        <!-- <div id="modalView-<?= $article->id; ?>" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="modalViewLongTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalViewLongTitle"><?php echo $archive->doc_name?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                <div class="modal-body">
                                                        <?php echo $archive->content?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div> -->

                                         <!-- Modal Delete -->

                                        <div id="myModal-<?= $article->id; ?>" class="modal fade">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            Are you sure?
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                            <div class="btn-group">
                                                                <div class="btn-group"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                                                                <div class="btn-group">
                                                                <?= $this->Form->postButton('Delete', ['controller' => 'Archives', 'action' => 'delete', $archive->id], 
                                                                                            ['type' => 'submit',
                                                                                            'class' => 'btn btn-danger'
                                                                                            ]); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                        <?php $i++; ?>
                                        <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <?php if($archives->isEmpty()) : ?>
                <h5 class="text-center">No Record</h5>
                <?php endif; ?>
                <div class="row">
                    <div class="col-6">
                    <p>Page <?= $paginate["page"] ?> of <?= $paginate["pageCount"] ?>, showing <?= $paginate["current"] ?> record(s)</p>
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
            <div class="card-body form">
                <h5 class="card-title" id="title_form">Tambah Arsip</h5>
                 <?= $this->Form->create($newArchive, ['url' => ['action' => 'add'], 'id' => 'form', 'class' => 'form',
                 'data-bv-feedbackicons-valid'=>'fa fa-check',
                 'data-bv-feedbackicons-invalid'=>'fa fa-warning',
                 'data-bv-feedbackicons-validating'=>'fa fa-spinner']); ?>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="historical_revision_number">Histori Nomor Revisi</label>
                            <?= $this->Form->control('historical_revision_number', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Nomor Revisi', 
                            'required' => true, 
                            'maxlength' => '50']); ?>
                        </div>

                        <div class="form-group">
                            <label for="doc_name">Nama Dokumen</label>
                            <?= $this->Form->control('doc_name', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Nama Dokumen', 
                            'required' => true, 
                            'maxlength' => '50']); ?>
                        </div>

                        <div class="form-group">
                            <label for="process_owner">Pemilik Proses</label>
                            <?= $this->Form->control('process_owner', ['label' => false, 'class' => 'form-control', 'placeholder' => 'Pemilik Proses', 
                            'required' => true, 
                            'maxlength' => '50']); ?>
                        </div>

                        <div class="form-group">  
                            <label for="categories_id">Status</label>
                            <select class="form-control" name="categories_id">
                                <option value="1">obsolote</option>
                                <option value="2">draft</option>
                                <option value="3">blast</option>
                            </select>
                        </div>
                        <div class="form-group">  
                            <label for="attachment">Upload File</label>
                                <input type = "file" class = "form-control" name ="attachment" value="attachment" id="attachment" >
                        </div>

                        <div class="pull-right">
                            <input type="submit" value="Save" class="btn btn-success" id="btn_save">
                            <input type="submit" value="Update" class="btn btn-success" id="btn_update">
                            <button class="btn btn-secondary" type="button" id="btn_cancel">Cancel</button>
                        </div>
                    </div>
                 </div>
             <?= $this->Form->end(); ?>  
            </div>
        </div>
    </div>
</div>  
<script>
$(document).ready(function(){
    $('#btn_update').hide()
    $('#btn_cancel').hide()
    $('[data-toggle="tooltip"]').tooltip();
    $('#form').bootstrapValidator();
    var archives = JSON.parse('<?= json_encode([$archives]); ?>');
    $("button").click(function(e) {
        var id = this.id;
        for(var i=0;i<archives.length;i++) {
            if(id == archives[i].id) {
                $("input#id").val(archives[i].id);
                $("input#historical_revision_number").val(archives[i].historical_revision_number);
                $("input#doc_name").val(archives[i].doc_name);
                $("input#process_owner").val(archives[i].process_owner);
                $("input#status").html(archives[i].status);
                $("input#attachment").html(archives[i].attachment);
                $('#form').attr('action','archives/add/'+id);
                $('#btn_update').show()
                $('#btn_cancel').show()
                $('#btn_save').hide() 
                $('#title_form').text('Update Arsip')
                $('html, body').animate({
                  scrollTop: $("form.form").offset().top
                }, 1000)
                break;
            }
        };
    });
    $("#btn_cancel").click(function(e) {
        $('#btn_update').hide();
        $('#btn_cancel').hide();
        $('#btn_save').show();
        $('#title_form').text('Tambah Arsip');
        $(':input','#form')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');
        $('#form').attr('action','archives/add/');
    });
}); 
</script>
