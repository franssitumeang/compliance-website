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

<section class="contact-page-area section-gap">
    <div class="container">
        <div class="col-lg-12">
            <h3 class="mb-30">Pengajuan Dokumen Baru</h3>
            
            <div class="col-lg-12">
                <form class="form-area" id="myForm" action="mail.php" method="post">
                    <div class="row">	
                        <div class="col-lg-6 form-group">
                            <p>Jenis Pengajuan Dokumen</p>
                            <div class="common-select" id="common-select">
                                <select class="common-select mb-20 form-control">
                                    <option value="SOAP">SOP</option>
                                    <option value="IK">IK</option>
                                    <option value="FORM">Form</option>
                                    <option value="SK-DIR">SK-DIR</option>
                                </select>
                            </div>
                            <p>Kategori</p>
                            <div class="common-select" id="common-select">
                                <select class="common-select mb-20 form-control">
                                    <option value="Baru">Baru</option>
                                    <option value="Revisi">Revisi</option>
                                </select>
                            </div>
                            <p>Alasan Pengajuan : </p>
                            <div style="padding-left: 1em; padding-right: 1em;">
                                <input onclick="document.getElementById('alasanPengajuanTxtBox').disabled = true;" type="radio" name="alasanPengajuan" checked="checked" value="Hasil MR/Management" id="hasil_mr"> <label for="hasil_mr"> Hasil MR/Management</label><br>  
                                <input onclick="document.getElementById('alasanPengajuanTxtBox').disabled = true;" type="radio" name="alasanPengajuan" value="Hasil Audit" id="hasil_audit"> <label for="hasil_audit">Hasil Audit</label><br>   
                                <input onclick="document.getElementById('alasanPengajuanTxtBox').disabled = true;" type="radio" name="alasanPengajuan" value="other" id="qcc"> <label for="qcc">QCC / SS</label><br>    
                                <input onclick="document.getElementById('alasanPengajuanTxtBox').disabled = true;" type="radio" name="alasanPengajuan" value="other" id="supervisi"> <label for="supervisi">Supervisi</label><br>   
                                <input onclick="document.getElementById('alasanPengajuanTxtBox').disabled = false;" type="radio" name="alasanPengajuan" id="others"> <label for="others">Others :</label>
                                <input class="common-select mb-20 form-control" type="text" disabled="disabled" name="alasanPengajuanTxtBox" id="alasanPengajuanTxtBox" placeholder="Alasan pengajuan" >
                            </div>
                            </div>
                        <div class="col-lg-6 form-group">
                            <p>Judul Dokumen</p>
                            <input name="email" placeholder="Enter email address" class="common-select mb-20 form-control" required="" type="email">
                            <p>Uraian Dokumen</p>
                            <textarea class="common-textarea mb-20 form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
                            <input name="subject" placeholder="Enter subject" class="common-input mb-20 form-control" required="" type="text">
                        </div>
                        <div class="col-lg-12">
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button class="genric-btn primary" style="float: right;">Request Pengajuan</button>											
                        </div>
                    </div>
                </form>	
            </div>
        </div>
    </section>