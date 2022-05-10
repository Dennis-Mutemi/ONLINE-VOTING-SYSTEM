<?php require("header.php");?>	
			<main class="content">
				<div class="container-fluid">
					<div class="header">
							<h1 class="header-title">
								Live Results
							</h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="home.php">Dashbord</a></li>																	
									<li class="breadcrumb-item active" aria-current="page">Live Results</li>
								</ol>
							</nav>
						</div>			
                   	<div class="row">
						<div class="col-12 col-lg-12 d-flex">
							<div class="card flex-fill" style="overflow-y: scroll; max-height:320px;">
								<div class="card-header">
									<div class="card-actions float-right">
										<a href="liversults.php" class="mr-1">
											<i class="align-middle" data-feather="refresh-cw"></i>
										</a>
										<div class="d-inline-block dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
												<i class="align-middle" data-feather="more-vertical"></i>
											</a>
										</div>
									</div>
									<h5 class="card-title mb-0">Live Preview</h5>
								</div>
								<table id="datata" class="table table-striped my-0" >
									
								</table>
							</div>
						</div>				
						
					</div>

				</div>
			</main>
			<?php require("footer.php");?>