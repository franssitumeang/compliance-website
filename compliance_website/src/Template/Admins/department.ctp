<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">
            <a href="companies" style="color:#669DE0;"><span class="menu-icon fa fa-building-o"></span>&nbsp; Daftar Perusahaan</a>
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
                      <option value="company_code">Kode Perusahaan</option>
                      <option value="company_name">Nama Perusahaan</option>
                      <option value="address_1">Alamat 1</option>
                      <option value="address_2">Alamat 2</option>
                      <option value="phone_num">No. Telepon</option>
                      <option value="fax_num">Fax</option>
                      <option value="url_link">URL</option>
                      <option value="website">Website</option>
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
                        Kode Departemen
                      </th>
                      <th>
                        Nama Departemen
                      </th>
                      <th>
                        Induk Departemen
                      </th>
                      <th>
                        Perusahaan
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($departemens as $d): ?>
                    <tr>
                      <td>
                        <?= h($i);?>
                      </td>
                      <td>
                        <?=$d->dept_code?>
                      </td>
                      <td>
                        <?=$d->dept_name?>
                      </td>
                      <td>
                        <?=$d->dept_name?>
                      </td>
                      <td>
                        <?=$d->dept_name?>
                      </td>
                    </tr>
                    <?php $i+=1; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-2" style="padding-left: 0px;">
              <!-- <div class="table-responsive"> -->
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="text-align: center;">
                        Action
                      </th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($companies as $c): ?>
                    <tr>
                      <td>
                        <button id="<?=$c->id?>" class="btn btn-icons btn-inverse-primary" data-toggle="tooltip" title="edit"
                        style="margin-top:-22px; margin-bottom:-20px;"><i class="fa fa-edit"></i></button>
                        <span data-target="#myModal" data-toggle="modal"><button id="btn_delete_<?=$c->id?>" class="btn btn-icons btn-inverse-danger delete" data-toggle="tooltip" data-tooltip="" title="delete"
                        style="margin-top:-22px; margin-bottom:-20px;" ><i class="fa fa-trash"></i></button></span>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <!-- </div> -->
              </div>
            </div>
            
            <br>
            <?php if ($companies-> isEmpty()): ?>
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
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" id="title_form">Tambah Perusahan</h5>
            <?= $this->Form->create($company,['class'=>'form','id'=>'form','url'=>['action'=>'add'],
            'data-bv-feedbackicons-valid'=>'fa fa-check',
            'data-bv-feedbackicons-invalid'=>'fa fa-warning',
            'data-bv-feedbackicons-validating'=>'fa fa-spinner']) ?>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="company_code">Kode Perusahaan</label>
                    <input type="text" class="form-control" id="company_code" name="company_code" placeholder="Kode" required
                    maxlength="5">
                  </div>
                  <div class="form-group">
                    <label for="company_name">Nama Perusahaan</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Nama" required
                    maxlength="100">
                  </div>
                  <div class="form-group">
                    <label for="address_1">Alamat 1</label>
                    <input type="text" class="form-control" id="address_1" name="address_1" placeholder="Alamat 1" required
                    maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="address_2">Alamat 2</label>
                    <input type="text" class="form-control" id="address_2" name="address_2" placeholder="Alamat 2" maxlength="50">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="phone_num">No. Telepon</label>
                    <input type="text" class="form-control" id="phone_num" name="phone_num" placeholder="No. Telepon" required
                    maxlength="30">
                  </div>
                  <div class="form-group">
                    <label for="fax_num">Fax</label>
                    <input type="text" class="form-control" id="fax_num" name="fax_num" placeholder="Fax" required
                    maxlength="30">
                  </div>
                  <div class="form-group">
                    <label for="url_link">URL</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" style="font-size: small;">http://</span>
                      </div>
                      <input type="text" class="form-control" id="url_link" name="url_link" placeholder="ex : wahana.com" maxlength="100">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" style="font-size: small;">http://</span>
                      </div>
                      <input type="text" class="form-control" id="website" name="website" placeholder="ex : wahanahonda.com" maxlength="50">
                    </div>
                  </div>
                </div>
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
                            <?= $this->Form->create($company,['id'=>'form_delete']) ?>
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
          $('[data-toggle="tooltip"]').tooltip();
          $('#btn_update').hide()
          $('#btn_cancel').hide()
          $('#form').bootstrapValidator();
        });
        var companies = JSON.parse('<?php echo json_encode($companies); ?>');
        $("button").click(function(e) {
          var id = this.id;
          for(var i=0;i<companies.length;i++) {
              if(id == companies[i].id) {
                  $("#company_code").val(companies[i].company_code);
                  $("#company_name").val(companies[i].company_name);
                  $("#address_1").val(companies[i].address_1);
                  $("#address_2").val(companies[i].address_2);
                  $("#phone_num").val(companies[i].phone_num);
                  $("#fax_num").val(companies[i].fax_num);
                  $("#url_link").val(companies[i].url_link);
                  $("#website").val(companies[i].website);
                  $("#title_form").text("Update Perusahaan");
                  $('#form').attr('action','companies/add/'+id);
                  $('html, body').animate({
                    scrollTop: $("form.form").offset().top
                  }, 1000)
                  break;
              }
              if(id == 'btn_delete_'+companies[i].id) {
                $('#form_delete').attr('action','companies/delete/'+companies[i].id);
                break;
              }
          };
          $('#btn_update').show()
          $('#btn_cancel').show()
          $('#btn_save').hide()
          
        });
        $('#btn_cancel').click(function(e){
          $('#btn_update').hide()
          $('#btn_cancel').hide()
          $('#btn_save').show()
          $(':input','#form')
          .not(':button, :submit, :reset, :hidden')
          .val('')
          .removeAttr('checked')
          .removeAttr('selected');
          $('#form').attr('action','companies/add');
          $("#title_form").text("Tambah Perusahaan");
        });
        
      </script>