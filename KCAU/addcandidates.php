<?php require("header.php");?>

          <!-- rank view start -->	

	<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Set Rank</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						
					</div>
					<div class="modal-body">
					<div id="rapop"></div>
					<form id="rankset">
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Enter Rank:</label>
						<input type="text" class="form-control" name="rankname" id="rankvalue">
					</div>
					<div class="mb-3">
						<label  class="col-form-label">Specificity</label>
						 <select name="" id="speci" class="form-control form-control-lg"> 
						     <option value="">Select specificity</option>
							 <option value="General">General</option>
							 <option value="Specific">Specific</option>
						 </select>
					</div>												
					
					</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary"  onclick="set_rank()">Add</button>
					</div>
					</div>
				</div>
				</div>
		  <!-- rank view end -->
		<!-- set sime pop up start -->											
		<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">														
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Set Time</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div id="diff"></div>
													<div class="modal-body">
														<form>
														<div class="mb-3">
															<label for="recipient-name" class="col-form-label">Start Time:</label>
															<input type="datetime-local" class="form-control" name="start">
														</div>
														<div class="mb-3">
															<label for="recipient-name" class="col-form-label">End Time:</label>
															<input type="datetime-local" class="form-control" name="end" >
														</div>												
														
														</form>
													</div>
													<div class="modal-footer">
														<p class="btn btn-secondary" data-bs-dismiss="modal">Close</p>
														<p class="btn btn-primary" onclick="set_time()">Save</p>
													</div>
													</div>
												</div>
			  </div>
				
											
												<!-- set sime pop up end -->
			<main class="content">
				<div class="container-fluid" style="background:#eab310">
				<div class="header">
						<h1 class="header-title">
							Add Candidates
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="home.ph">Dashboard</a></li>								
								<li class="breadcrumb-item active" aria-current="page">Candidates</li>
							</ol>
						</nav>
					</div>
					<div class="row my-7">
						<div class="col-12 col-md-12 col-xxl-4 d-flex">
							<div class="card flex-fill w-100">
							  <div class="card-header">
									<div class="card-actions text-center">									
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Candidate</button>										
									</div>
									<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Add Candidate</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
											<div id="erro_call">
										
										</div>
									<form>
												<div class="form-group row">
														<label for="colFormLabelSm" class="col-sm-5 col-form-label">Select user:</label>
														<div class="col-sm-7">
															<input type="text" class="form-control form-control-sm" id="js_val" readonly>
															<input type="hidden" class="form-control form-control-sm" id="js_userid" readonly><br>
															<input type="text" class="form-control form-control-sm" oninput="search(this.value)" placeholder="Search...."><br>
															<div id="js_displayval">

															</div>
															
														</div>
												</div>
												<div class="form-group row">
														<label for="colFormLabelSm" class="col-sm-5 col-form-label">Select Role:</label>
														<div class="col-sm-7">
															<Select type="text" class="form-control form-control-sm" id="colFormLabelSm" >
																
															</select>
														</div>
													</div>
								</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary" onclick="send_datac()" data-bs-dismiss="modal">Add Candidate</button>
											</div>
											</div>
										</div>
										</div>				
							  </div>								
							</div>
						</div>
						<div class="col-12 col-md-12 col-xxl-4 d-flex">
							<div class="card flex-fill" >
								<div class="card-header" style="position: relative;">									
								  <h5 class="card-title mb-0">Available candidates</h5>								
									<div class="card-actions float-right" style="position: absolute; top:0;right: 0;" id="disabble">										
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static" style="color:blue;!important">												
												<img src="img/avatars/set.png" width='70%' height='20%'>
											</a>

											   <div class="dropdown-menu dropdown-menu-right">							
										    	<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Set Voting Time</a>
												<a class="dropdown-item"  href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Candidate</a>										
												<p  class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
				                                 Add Rank
				                                 </p>
											</div>
										</div>
									</div><hr>		
								</div>
								<div class="card-body">
								<p class="card-text" id="no_candidat"></p>
								<p class="card-text">
									<table class="table table-bordered" style="width:100%">
										<thead id="tableheade">
										
										</thead>
										<tbody id="js-userva">										
				
										</tbody>
                                    </table>
                                </p>
								</div>
							</div>
						</div>						
					</div>
				</div>				
			</main>							
			<?php require("footer.php");?>
		