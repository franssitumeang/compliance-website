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

<div class = "row">

<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
		  <div class="card-body">
			<h5 class="card-title">Request Details</h5>
		
			<form class="forms-sample">
					<div class="row">
					  <div class="col-6">
						<div class="form-group">
						  <label for="search">Search</label>
						  <input type="text" class="form-control" name="search_key" placeholder="Enter Searh Key">
						</div>
					  </div>
					  <div class="col-6">
						<div class="form-group">
						  <label>Search By</label>
						  <div class="input-group col-xs-12">
							<select class="form-control" name="attribute">
							  <option value="created">Tanggal</option>
							  <option value="request_types">Tipe Request</option>
							</select>
							<span class="input-group-append">
							  <button  class="file-upload-browse btn btn-secondary" type="submit">Search</button>
							</span>
						  </div>
						</div>
					  </div>
					</div>
			</form>
			<br>
			<div class= "row">
				<div class="col-12" style="padding-right: 1px;">
						<div class="table-responsive">
								<table class="table table-bordered">
										<thead>
											<tr>
												<th>Tanggal </th>
												<th>Tipe Request</th>
												<th>Description</th>
												<th>Compliance</th>
												<th>Manager</th>
											</tr>
											</thead>   
											<tbody>
												<?php $i = 1; ?>
                        <?php foreach ($userRequestDetails as $urh): ?>
												<tr>
													<td><?=$urh->created?></td>
													<td><?=$urh->request_types ?></td>
													<td><?=$urh->descriptions ?></td>
													<td><?=$urh->approve_c ?></td>
													<td><?=$urh->approve_m ?></td>
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
             					<p>Page <?= $paginate["page"] ?> of <?= $paginate["pageCount"] ?>, showing <?= $paginate["current"] ?> record(s) out of <?= $paginate["count"] ?> total</p>
            		</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	
			