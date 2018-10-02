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
            <form>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" placeholder="Judul">
                  </div>
                  <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <div class="input-group col-xs-12">
                        <select class="form-control">
                                <option value="ceo_letter">CEO'S Letter</option>
                                <option value="serba_serbi">Serba-Serbi</option>
                                <option value="event_promotion">Event Promotion</option>
                                <option value="risk_profile">Risk Profile</option>
                                <option value="pamflet">Pamflet Audit</option>
                                <option value="jurnal">Jurnal</option>
                                <option value="komunitas">Komunitas</option>
                                <option value="lainnya">SS/QCC/QCP</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="upload_file">Upload File</label>
                    <div class ="input-group col-xs-12">
                        <input type="file" name ="fileupload" value="fileupload" id="fileupload">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <div class ="input-group col-xs-12"></div>
                        <textarea rows="5" cols="80"></textarea>
                    </div>
                  </div>
              </div>
              <input type="submit" value="Save" class="btn btn-success pull-right">
            </form>
          </div>
        </div>
    </div>
<!--End Content -->    





