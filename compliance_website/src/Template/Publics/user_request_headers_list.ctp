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
			<h5 class="card-title">Monitoring Approval</h5>
		
			<form class="forms-sample">
			<?= $this->Form->create("",['type'=>'get']) ?>
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
							  <option value="request_dates">Tanggal</option>
							  <option value="status">Status</option>
							</select>
							<span class="input-group-append">
							  <button  class="file-upload-browse btn btn-secondary" type="submit">Search</button>
							</span>
						  </div>
						</div>
					  </div>
					</div>
					<?= $this->Form->end() ?>
			</form>
			<br>
			<div class= "row">
				<div class="col-12" style="padding-right: 1px;">
						<div class="table-responsive">
								<table class="table table-bordered">
										<thead>
											<tr>
												<th>Tanggal </th>
												<th>Nama</th>
												<th>Alasan</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
											</thead>   
											<tbody>
												<?php $i = 1; ?>
                        <?php foreach ($userRequestHeaders as $urh): ?>
												<tr>
													<td><?=$urh->request_dates?></td>
													<td><?=$urh->user->user_name; ?></td>
													<td><?=$urh->reason->reasons_name; ?></td>
													<td><?=$urh->status ?></td>
													<td>
														<button class="btn pull-left btn-sm">
														<?php echo $this->Html->link('Detail', array('controller' => 'UserRequestDetails', $urh->id)); ?>
													</td>
												</tr>
												<?php $i+=1; ?>
                       							<?php endforeach; ?>
											</tbody>
										</table>    
									</div>          
								</div>
								<?php if ($userRequestHeaders-> isEmpty()): ?>
              					<h5 class="text-center">No Record</h5>
          						<?php endif; ?>
								 
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
				</div>
			</div>
			