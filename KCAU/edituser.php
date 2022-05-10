<?php include_once("updatedisp.php");?>
<?php require("header.php");?>

			<main class="content">
				<div class="container-fluid" style="background:#eab310" id="scroled">
				<div class="header">
						<h1 class="header-title">
							Edit User Details
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="home.php">Actions</a></li>
								<li class="breadcrumb-item"><a href="pages-clients.php">Users</a></li>								
								<li class="breadcrumb-item active" aria-current="page">Edit</li>
							</ol>
						</nav>
					</div>
					<div class="row my-7">				
						<div class="col-12 col-md-10 col-xxl-4 d-flex mx-auto">
							<div class="card flex-fill w-100 mx-auto">
								<div class="card-header">
								    <div id="val" class="text-white bg-danger mx-auto">
										<p style="cursor: pointer">
											<img src="img/avatars/close.png" width="2%" height="1%" class="img-fluid rounded-circle mb-2 float-right" onclick="close()">
                                        </p>						
									</div>	
									
			                    </div>
								<div class="card-body d-flex w-100">
								<p class="card-text">									
									<form id="main" class="mx-auto">
										<div class="form-group">
											<label>Name</label>
											<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name"  value="<?=$name;?>" />
										</div>
										<div class="form-group">
											<label>Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter your username" value="<?=$username;?>" />
										</div>
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" value="<?= $email;?>" />
										</div>
										<div class="form-group">
											<label>Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" value="<?=$pass;?>"/>
                                            
         								</div>
										<input type="hidden" value="<?=$iddd?>" name="useriddd">
										<div class="form-group">
											<label>Registration Number</label>
											<input class="form-control form-control-lg" type="text" name="registration" placeholder="Enter reg.No"  value="<?=$reg;?>"/>
										</div>
										
										<div class="form-group">
										<label>Select Your School</label>
											<select name="course" id="school" class="form-control form-control-lg">
												<option><?=$schol;?></option>
												<option value="School of Technology">School of Technology</option>
												<option value="School of Business">School of Business</option>
												<option value="School of Education">School of Education</option>
												<option value="School of Graduate Studies">School of Graduate Studies</option>
											</select>
										</div>
										<div class="form-group">
										<label id="values">Select Your Course</label> 
											<select id="course" class="form-control form-control-lg">
												<option><?= $course;?></option>
												<option value="Bachelor of Arts Counselling Psychology">Bachelor of Arts Counselling Psychology</option>
												<option value="Bachelor of Arts in Criminology">Bachelor of Arts in Criminology</option>
												<option value="Bachelor of Arts in Film Technology and Performing Arts">Bachelor of Arts in Film Technology and Performing Arts</option>
												<option value="Bachelor of Arts in Journalism and Digital Media">Bachelor of Arts in Journalism and Digital Media</option>
												<option value="Bachelor of Education Arts">Bachelor of Education Arts</option>
												<option value="Bachelor of Education Early Childhood Education">Bachelor of Education Early Childhood Education</option>
												<option value="Bachelor of Science in Actuarial Science">Bachelor of Science in Actuarial Science</option>
												<option value="Bachelor of Science in Gaming and Animation Technology">Bachelor of Science in Gaming and Animation Technology</option>
												<option value="Bachelor of Business Information Technology">Bachelor of Business Information Technology</option>
												<option value="Bachelor of Science in Applied Computing">Bachelor of Science in Applied Computing</option>
												<option value="Bachelor of Science in Information and Communications Technology">Bachelor of Science in Information and Communications Technology</option>
												<option value="Bachelor of Science in Information Security and Forensics">Bachelor of Science in Information Security and Forensics</option>
												<option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
												<option value="Bachelor of Science in Software Development">Bachelor of Science in Software Development</option>
												<option value="Bachelor of Arts in Economics and Business Studies">Bachelor of Arts in Economics and Business Studies</option>
												<option value="Bachelor of Commerce">Bachelor of Commerce</option>
												<option value="Bachelor of International Business Management">Bachelor of International Business Management</option>
												<option value="Bachelor of Procurement and Logistics">Bachelor of Procurement and Logistics</option>
												<option value="Bachelor of Public Management">Bachelor of Public Management</option>
												<option value="Bachelor of Science in Economics & Statistics">Bachelor of Science in Economics & Statistics</option>
											</select>
										</div>
										<div class="form-group">
										<label>Select Gender</label>
										<select name="gender" id="genderr" class="form-control form-control-lg">
												<option><?=$gender;?></option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>											
											</select>
										</div>
								</form>
									</p>
								</div>
								<div class="card-footer text-center mt-3">
								<p class="btn btn-danger btn-sm p-1">Cancel</p>
                                <p class="btn btn-secondary btn-sm ms-4 p-1" onclick="update_user()">Update</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
			<?php require("footer.php");?>

