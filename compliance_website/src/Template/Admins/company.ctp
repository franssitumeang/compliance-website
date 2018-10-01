<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><span class="menu-icon fa fa-building-o"></span>&nbsp; Daftar Perusahaan</h5>
        
        <form class="forms-sample">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="search">Searh</label>
                <input type="email" class="form-control" id="search" placeholder="Enter Searh Key">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Search By</label>
                <div class="input-group col-xs-12">
                  <select class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Search</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </form>
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
                      Kode
                    </th>
                    <th>
                      Nama
                    </th>
                    <th>
                      Alamat 1
                    </th>
                    <th>
                      Alamat 2
                    </th>
                    <th>
                      No. Telepon
                    </th>
                    <th>
                      Fax
                    </th>
                    <th>
                      URL
                    </th>
                    <th>
                      Website
                    </th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($companies as $c): ?>
                  <tr>
                    <td>
                      <?= h($i);?>
                    </td>
                    <td>
                      <?=$c->company_code?>
                    </td>
                    <td>
                      <?=$c->company_name?>
                    </td>
                    <td>
                      <?=$c->address_1?>
                    </td>
                    <td>
                      <?=$c->address_2?>
                    </td>
                    <td>
                      <?=$c->phone_num?>
                    </td>
                    <td>
                      <?=$c->fax_num?>
                    </td>
                    <td>
                      <a href="http://<?=$c->url_link?>" target="_blank">http://<?=$c->url_link?></a>
                    </td>
                    <td>
                      <a href="http://<?=$c->website?>" target="_blank"><?=$c->website?></a>
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
                      <button class="btn btn-icons btn-inverse-primary" data-toggle="tooltip" title="edit"
                      style="margin-top:-22px; margin-bottom:-20px;"><i class="fa fa-edit"></i></button>
                      <button class="btn btn-icons btn-inverse-danger" data-toggle="tooltip" title="delete"
                      style="margin-top:-22px; margin-bottom:-20px;"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <!-- </div> -->
            </div>
          </div>
          
          <br>
          <div class="row">
            <div class="col-6">
              <p>Page 0 of 1, showing 10 record(s)</p>
            </div>
            <div class="col-6">
              <div class="pull-right">
                <a href="#" class="btn btn-light"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-light"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tambah Perusahan</h5>
          <?= $this->Form->create($company,['url'=>['action'=>'add']]) ?>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="company_code">Kode Perusahaan</label>
                  <input type="text" class="form-control" id="company_code" name="company_code" placeholder="Kode">
                </div>
                <div class="form-group">
                  <label for="company_name">Nama Perusahaan</label>
                  <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="address_1">Alamat 1</label>
                  <input type="text" class="form-control" id="address_1" name="address_1" placeholder="Alamat 1">
                </div>
                <div class="form-group">
                  <label for="address_2">Alamat 2</label>
                  <input type="text" class="form-control" id="address_2" name="address_2" placeholder="Alamat 2">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="phone_num">No. Telepon</label>
                  <input type="text" class="form-control" id="phone_num" name="phone_num" placeholder="No. Telepon">
                </div>
                <div class="form-group">
                  <label for="fax_num">Fax</label>
                  <input type="text" class="form-control" id="fax_num" name="fax_num" placeholder="Fax">
                </div>
                <div class="form-group">
                  <label for="url_link">URL</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="font-size: small;">http://</span>
                    </div>
                    <input type="text" class="form-control" id="url_link" name="url_link" placeholder="ex : wahana.com">
                  </div>
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="font-size: small;">http://</span>
                    </div>
                    <input type="text" class="form-control" id="website" placeholder="ex : wahanahonda.com">
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" value="Save" class="btn btn-success pull-right">
            <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
  <div>
    <script>
      $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
        console.log('oke');
      });
    </script>