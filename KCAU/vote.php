<?php require("header.php");?>
		<main class="content">
			<div id="toast"></div>
			<div class="container-fluid">
				<div class="row my-7">
				   <div class="col-12 col-md-12 col-xxl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-header">									
									<h5 class="card-title mb-0">Vote Status</h5><hr>
								</div>
								<div class="card-body">
								    <p id="vstatus">You Have Not Yet Casted Your Vote</p>
								</div>
							</div>						
                   </div>
				   <div class="col-12 col-md-12 col-xxl-4 d-flex">
							<div class="card flex-fill" style="overflow-y:scroll; max-height:310px;">
								<div class="card-header">									
									<h5 class="card-title mb-0">Available candidates</h5><hr>
								</div>
								<div class="card-body">
								    <p class="card-text" id="no_candidat"></p>
										<p class="card-text">
											<table id="datatables" class="table table-bordered" style="width:100%">
												
											</table>
										</p>
								</div>
							</div>						
                    </div>
                </div>						
			</div>
		</main>
<?php require("footer.php");?>