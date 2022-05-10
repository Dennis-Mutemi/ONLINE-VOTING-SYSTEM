<?php require("header.php");?>
			<main class="content" onload="userch()">
				<div class="container-fluid">
				<div class="header">
						<h1 class="header-title">
							Chats
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="home.php">Actions</a></li>																
								<li class="breadcrumb-item active" aria-current="page">Chats</li>
							</ol>
						</nav>
					</div>
					<div class="card">
						<div class="row no-gutters">
							<div class="col-12 col-lg-5 col-xl-3 border-right">
								<div class="px-4 d-none d-md-block">
									<div class="media align-items-center">
										<div class="media-body">
											<input type="text" class="form-control my-3" placeholder="Search..."  oninput="search_rec(this.value)">
										</div>
									</div>
								</div>								
									<div id='search_user' class="text-center">
										
									</div>								
							<hr class="d-block d-lg-none mt-1 mb-0"/>
							</div>
							<div class="col-12 col-lg-7 col-xl-9">
								<div class="py-2 px-4 border-bottom d-none d-lg-block">
									<div class="media align-items-center py-1">
										<div class="position-relative">

										</div>
										<div class="media-body pl-3">
											<strong id="toname"></strong>
											<div class="text-muted small"><em></em></div>
										</div>
										<div>
											<button class="btn btn-primary btn-lg mr-1 px-3"><i class="feather-lg" data-feather="phone"></i></button>
											<button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><i class="feather-lg"
													data-feather="video"></i></button>
											<button class="btn btn-light border btn-lg px-3"><i class="feather-lg" data-feather="more-horizontal"></i></button>
										</div>
									</div>
								</div>

								<div class="position-relative" style="max-height: 200px">
									<div class="chat-messages p-4" id="senderreceiver" style="max-height: 200px" >
																											
									</div>
								</div>
								<div class="flex-grow-0 py-3 px-4 border-top">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Type your message" id="massage_id" onkeyup='send_onenter(event)'>
										<div class="input-group-append">
											<p class="btn btn-primary" onclick="send_massege(event)">Send</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</main>
			<footer class="footer mb-0">
				<div class="container-fluid ">
					<div class="row text-muted">
						<div class="col-8 text-left">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms of Service</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Contact</a>
								</li>
							</ul>
						</div>
						<div class="col-4 text-right">
							<p class="mb-0">
								&copy; 2022 - <a href="home.php" class="text-muted">DENNO</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>

	</div>
				<svg width="0" height="0" style="position:absolute">
					<defs>
						<symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
							<path
								d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
							</path>
						</symbol>
					</defs>
				</svg>
				<script src="js/app.js"></script>	
				<script>
					$(function() {
						$('#datatables-dashboard-projects').DataTable({
							pageLength: 6,
							lengthChange: false,
							bFilter: false,
							autoWidth: false
						});
					});
				</script>			

			<script src="style/js/bootstrap.bundle.js"></script>

</body>
</html>			
			<script>			
			function _(elemen){
			return document.getElementById(elemen);
			}
			let receiver_id="";
				function userch(){					
					hundledata({},"chadisp");
				}
				userch();
				function userchaid(e){    
					let userid=e.target.getAttribute('userid');
					receiver_id=userid;				
					hundledata({"userchatid":userid},"userchats");  
							
				} 
				function hundledata(data,type){
						let ajax = new XMLHttpRequest()
						ajax.onload=function(){
							if(ajax.status==200||ajax.readystate==4){
								hunledisp(ajax.responseText);
							}
						}
						data.data_type=type;
						let dat_string=JSON.stringify(data);
						ajax.open("post","API.php",true);
						ajax.send(dat_string);
					}    
				function hunledisp(result){
					// alert(result)					
					if(result!=""){
						let obj=JSON.parse(result);
						switch (obj.datatype) {
							case "userschat":                                               
								_("search_user").innerHTML=obj.val_data;
								break;
                           case "chatdsp":                        
								_("toname").innerHTML=`TO: ${obj.valu}`;
								_("search_user").innerHTML=`NOW CHATTING WITH<BR> ${obj.valu}`;
								receiver=obj.dataid;
                                break;							
							case "sender":
                                _("senderreceiver").innerHTML=obj.message1;
								break;
							case "receiver":							
                                _("senderreceiver").innerHTML=obj.message1;
							   break;
							
								
						}

					}
					

					}
            // send  massege function
			
			function send_massege(e){		
			let mes_conte=_("massage_id");   
			if(mes_conte.value.trim()=="" ){
				alert("you cannot send an empty text");        
				
				}
			else{  				    
				let sender_info={};
				sender_info.id=receiver_id;				
				sender_info.message=_('massage_id').value;
				hundledata(sender_info,"chatsend");				

				}
			}
			//sent massage on enter
			function send_onenter(e){
				if(e.keyCode==13){
				send_massege(e);
			}
			//refresh chats every time
			}
			setInterval(() => {
				hundledata({},"refresh");  

			}, 5000);
		
			</script>
			