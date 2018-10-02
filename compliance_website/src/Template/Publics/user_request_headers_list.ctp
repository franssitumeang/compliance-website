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

<!--tabel-->
<div class="whole-wrap">
	<div class="container">
		<div class="section-top-border">
			<h3 class="mb-30">Monitoring Approval</h3>
			<div class="progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
						<div class="serial">Tanggal</div>
						<div class="country percentage">Oleh</div>
						<div class="country percentage">Alasan</div>
						<div class="serial">Status</div>
                        <div class="serial">Action</div>
					</div>
	    			<div class="table-row">
                        <?php $i = 1; ?>
                        <?php foreach ($user_request_headers as $urh): ?>
						<div class="serial"><?=$urh->request_dates?></div>
						<div class="country percentage"><?=$urh->users_id?></div>
						<div class="serial"><?=$urh->reasons_id?></div>
						<div class="serial"><?=$urh->status?></div>
                        <div class="serial">test</div>
                        <?php $i+=1; ?>
                  <?php endforeach; ?>
					</div>						
				</div>
			</div>
		</div>
    </div>   
</div>


<!--tabel-->