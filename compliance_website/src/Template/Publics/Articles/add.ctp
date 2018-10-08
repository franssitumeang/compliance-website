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

<!-- Start Content-->

<div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Artikel</h4>
              <?= $this->Form->create($article,['class'=>'form','id'=>'form','url'=>['action'=>'add']]);?>
            <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Judul">
                  </div>
                  <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <div class="input-group col-xs-12">
                        <select class="form-control" name="categories_id">
                                <option value="1">CEO'S Letter</option>
                                <option value="2">Serba-Serbi</option>
                                <option value="3">Event Promotion</option>
                                <option value="4">Risk Profile</option>
                                <option value="5">Pamflet Audit</option>
                                <option value="6">Jurnal</option>
                                <option value="7">Komunitas</option>
                                <option value="8">SS/QCC/QCP</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="upload_file">Upload File</label>
                    <div class ="input-group col-xs-12">
                        <input type="file" name ="attachment" value="attachment" id="attachment">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <div class ="input-group col-xs-12"></div>
                        <textarea class="tinymce" name="content" id="content" ></textarea>
                    </div>
                  </div>
              </div>
              <input type="submit" value="Save" class="btn btn-success pull-right" id="btn_save">
          </div>
        </div>
    </div>
    <?php echo $this->Form->end();?>
<!--End Content -->