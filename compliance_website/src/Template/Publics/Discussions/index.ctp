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

 <!--Start Content-->
<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
		<h3 class="card-title"><center><b>Forum Diskusi</b></center></h3>
			<div class="container-fluid">
				<div class="row content">
					<div class="col-sm-8">
						<p><b>Nama Dokumen</b></h4></p>
						<object data="/document/Peraturan.pdf#page=2" type="application/pdf" width="100%" height="90%">
							<p><b>Example fallback content</b>: This browser does not support PDFs. Please download the PDF to view it: <a href="/document/Peraturan.pdf">Download PDF</a>.</p>
						</object>
					</div>
					<div class="col-sm-4 sidebar-widgets">
						<p><b>Deskripsi :</b><?= $discussion->has('user_request_detail') ? $this->Html->link($discussion->user_request_detail->descriptions, ['controller' => 'UserRequestDetails', 'action' => 'view', $discussion->user_request_detail->user_request_detail_id]) : '' ?>
							<br>PT. WAHANA MAKMUR SEJATI bergerak dibidang perdagangan dalam arti kata
							seluas-luasnya dengan kantor pusat di Gedung Wahanaartha Jl Gunung Sahari Raya No
							32 Jakarta Pusat dengan cabang-cabang di wilayah Indonesia.
						</p>
						<div class="widget-wrap">
							<center><b>Komentar</b></center>
							<div class="myScrollBox">
								<?php $i = 1; ?>
								<?php foreach ($discussions as $d): ?>
								<div class="single-sidebar-widget">
									<br><b>"Fany Johanna Nelly Siregar"</b> <br><small><?=$d->created?></small>
									<br><?=$d->contents?><br/>
								</div>
								<?php $i+=1; ?>
                       			<?php endforeach; ?>
							</div>
							<div class="single-sidebar-widget">
								<form>
								<div class="form-group">
									<textarea class="form-control mb-10" rows="3" name="Tambahkan Komentar" placeholder="Tambahkan Komentar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tambahkan Komentar'" required=""></textarea>
								</div>
								<a href="#" class="primary-btn text-uppercase">Post Comment</a>	
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>




	
				
	
			