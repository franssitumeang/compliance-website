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
			<p>
				<h3><b><?=$userRequestDetails->user_request_header->doc_title?></b> </h3><br>
				<b>Nomor Dokumen :</b> <?=$userRequestDetails->user_request_header->doc_no?>
			</p>
			<div class="container-fluid">
				<div class="row content">
					<div class="col-sm-8">
						
						<object data="/document/Peraturan.pdf#page=2" type="application/pdf" width="100%" height="90%">
							<p><b>Example fallback content</b>: This browser does not support PDFs. Please download the PDF to view it: <a href="/document/Peraturan.pdf">Download PDF</a>.</p>
						</object>
					</div>
					<div class="col-sm-4 sidebar-widgets">
						<p></p>
						<p><b>Departemen :</b>  <?=$userRequestDetails->user_request_header->user->department->dept_name?> <br>
							<b>Deskripsi :</b>
							<br><?=$userRequestDetails->descriptions?>
						</p>
						<p><b>Participant</b>  
							<?php foreach ($discussionParticipants as $dp): ?>
                            	<?=$dp->user->name?><br>
                            <?php endforeach; ?>
							<div class="input-group col-xs-12">
								<select class="form-control" name="company_id" required>
									<option value="" disabled selected>-- Tambah Partisipan --</option>
									<?php foreach ($users as $s): ?>
										<option value="<?=$s->id?>"><?=$s->name?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<br>
							
						</p>
						<div class="widget-wrap">
							<center><b>Komentar</b></center>
							<div class="myScrollBox">
								<?php $i = 1; ?>
								<?php foreach ($discussions as $d): ?>
								<div class="single-sidebar-widget">
									<br><b>"<?=$d->discussion_participant->user->name?>"</b> <br><small><?=$d->created?></small>
									<br><?=$d->contents?><br/>
								</div>
								<?php $i+=1; ?>
                       			<?php endforeach; ?>
							</div>
							<?= $this->Form->create($discussion) ?>
							<div class="single-sidebar-widget">
								<form>
								<div class="form-group">
									<textarea class="form-control mb-10" rows="3" id="contents" name="contents" placeholder="Tambahkan Komentar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tambahkan Komentar'" required=""></textarea>
									<input type="hidden" class="form-control" id="user_request_detail_id" name="user_request_detail_id" value="$userRequestDetails->id">
									<input type="hidden" class="form-control" id="user_request_detail_id" name="user_request_detail_id" value="$userRequestDetails->id">
								</div>
								<a href="#" class="primary-btn text-uppercase">Post Comment</a>	
							</form>
							<?= $this->Form->end() ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>




	
				
	
			