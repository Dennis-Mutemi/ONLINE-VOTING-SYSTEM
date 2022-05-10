<?php require("header.php");?>
			<main class="content">
				<div class="container-fluid">
				<div class="header">
						<h1 class="header-title">
							Settings
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="home.php">Actions</a></li>																
								<li class="breadcrumb-item active" aria-current="page">Settings</li>
							</ol>
						</nav>
					</div>					
					<div class="row">
					
						<div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="account" role="tabpanel">
									<div class="card">
										<div class="card-header">
											<div class="card-actions float-right">
												<a href="#" class="mr-1">
													<i class="align-middle" data-feather="refresh-cw"></i>
												</a>
												<div class="d-inline-block dropdown show">
													<a href="#" data-toggle="dropdown" data-display="static">
														<i class="align-middle" data-feather="more-vertical"></i>
													</a>

													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
													</div>
												</div>
											</div>
											<h5 class="card-title mb-0">Public info</h5>
										</div>
										<div class="card-body">
											<form>
												<div class="row">
													<div class="col-md-8 border border-secondary">
														<div class="form-group">
															<label for="inputUsername">Name</label>
															<input type="text" class="form-control" id="Name" placeholder="Username" readonly>
														</div>
														<div class="form-group">
															<label for="inputUsername">Course</label>
														    <input type="text" class="form-control" id="Course" placeholder="Username" readonly>
														</div>
														<div class="form-group">
															<label for="inputUsername">School</label>
														    <input type="text" class="form-control" id="School" placeholder="Username" readonly>
														</div>
														<div class="form-group">
															<label for="inputUsername">Registration Number</label>
														    <input type="text" class="form-control" id="Number" placeholder="Username" readonly>
														</div>
														<div class="form-group">
															<label for="inputUsername">Gender</label>
														    <input type="text" class="form-control" id="Gender" placeholder="Username" readonly>
														</div>
														<div class="form-group">
															<label for="inputUsername">Email</label>
														    <input type="text" class="form-control" id="Email" placeholder="Username" readonly>
														</div>
													</div>
													<div class="col-md-4">
														<div class="text-center border border-secondary">
															<div id="setting">
																
															</div>

															<div class="mt-2">
															    <input type="file" class="form-control" id="upload" placeholder="Username" style="display:none" onchange="upload_progile_image(this.files)">
																<label for="upload""><span class="btn btn-primary"><i class="fas fa-upload" ></i> Upload</span></label>
																</div>
															<small>For best results, use an image at least 128px by 128px in .jpg
																format</small>
														</div>
													</div>
												</div>
												<button type="submit" class="btn btn-primary">Save changes</button>
											</form>

										</div>
									</div>						
							</div>
						</div>
					</div>
				</div>
			</main>
		<?php require("footer.php");?>