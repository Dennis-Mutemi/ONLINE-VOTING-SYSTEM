<?php require("header.php");
?>

<style>
	/* style scroll images */
	.image_scroll{    
				width: 100%;    
				background: brown;
				min-height: 400px;
			}
			.image_scrol_inner{
				display: flex;   
				width: 90%;
				height: 18em;
				margin: auto;
				
			}
			.iner_container{   
				display: flex;     
				width: 100%;
			
			}
			.to_left{
				flex: 0 0 10%;
				float: left;
				margin-top: 4.5em;
				padding: 1em;    
				transition: all 1s;
			}

			.to_right{
				flex: 0 0 10%;
				float: right;
				margin-top: 4.5em;
				padding: 1em;    
				transition: all 1s;
			}

			.to_right:hover{
				transform: translateX(20px);
			}
			.to_left:hover{
				transform: translateX(-20px);
			}
			.iner_container{
				flex: 0 0 80%;
				transition: all .5s ease;

			
			}
			.iner_container img{
				flex: 0 0 800px;
				width: 10%;
				height: 23em;
				


			}
			.contaier{
				overflow: hidden;
				margin: auto;
				
			}
			.push{
				margin-right: auto;
			}
			.inner{
				display: grid;
				grid-template-columns: 1fr 1fr;
				gap:2em;
			}
			img{
				width: 50%;
			}
			.intro_tittle{
				margin: 0 auto;
			}
			a{
				text-decoration: none;
			}
	   
</style>
			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title" id="js_user_name">
							Welcome back, Rubel!
						</h1>
						<p class="header-subtitle">You have 24 new messages and 5 new notifications.</p>
					</div>

					<div class="row">
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-header">
									
									
								</div>
								<div class="card-body px-4">
								<div class="image_scroll">
								<div class="image_scrol_inner">
									<div class="to_left" onclick='move("left")' style="font-size:1.5em;cursor:pointer;">          
										<i class="fas fa-arrow-alt-circle-left" ></i>
									</div>
									<div class="contaier">
										<div class="iner_container">
											<img src="11.jpg" alt="">
											<img src="12.jpg" alt="">
											<img src="13.jpg" alt="">
											<img src="ggg.jpg" alt="">           
										</div>
									</div>
									<div class="to_right" id="right" irene="right" onclick="move('right')"  style='font-size:1.5em;cursor:pointer;' >    
										<i class="fas fa-arrow-alt-circle-right"></i> 
									</div>
								</div>
							    </div>
								</div>
							</div>
						</div>			
					
					</div>

					<div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
							<div class="card flex-fill">
								<div class="card-header">
									
									<h5 class="card-title mb-0">Calendar</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
							<div class="card flex-fill w-100">
								<div class="card-header">
									
									<h5 class="card-title mb-0">Quick Links</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
										<img src="9.jpg" alt="" style="width:90%;height:40%;margin:0 auto";>
										</div>
										<table class="table mb-0">
											<tbody>
												<tr>
												<td><a href="liversults.php">Live Results</a></td>
												</tr>
												<tr>
												<td><a href="vote.php">Vote</a></td>
												</tr>
												<tr>
													<td><a href="chat.php">Chat</a></td>
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					

				</div>
			</main>
			<?php require("footer.php");?>
	<script>
	(function(window,document){
		let current_pos=0;
		let img_width=800;
		let tran=document.querySelector('.iner_container');
		let im=tran.querySelectorAll('img');
		let len=(im.length-1)*-1;
		window.move=function (direction){
			if(direction=='left'){ 
				current_pos+=1; 
			}
			if(direction=='right'){
				current_pos-=1; 
			}
			if(current_pos > 0){
				current_pos = len;
			}
			if(current_pos < len){
				current_pos=0; 
			}
			let image_tra=current_pos*img_width;        
			tran.style.transform="translateX("+image_tra+"px)";
		}
	window.auto=function(){       
		let righ=document.querySelector("#right").getAttribute('irene');          
		if(righ=="right"){
				current_pos-=1; 
			}
			if(current_pos > 0){
				current_pos = len;
			}
			if(current_pos < len){
				current_pos=0; 
			}
			let image_tra=current_pos*img_width;        
			tran.style.transform="translateX("+image_tra+"px)";
			

	}

	})(window,document);
		setInterval(() => {
			auto();
		},5000);

	</script>
