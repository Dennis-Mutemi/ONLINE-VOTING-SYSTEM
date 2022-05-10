<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	

	<title>KCAU ONLINE VOTING SYSTEM</title>	
	<style>
		body {
			opacity: 0;
		}
		#val{
            background:#eab310;
            color:white;
            max-width:600px;
            min-height:20px;
            text-align:center;
            padding:0.5em;
            display:none;
        }
	</style>
	<script src="js/settings.js"></script>	
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120946860-7');
</script></head>
<!-- SET YOUR THEME -->

<body class="theme-blue">
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<main class="main h-100 w-100">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2"></h1>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="img/avatars/avatar.jpg" alt="Linda Miller" class="img-fluid rounded-circle" width="132" height="132" />
									</div>
									<div id="val">
										
									</div>
									<form id="main">
										<div class="form-group">
											<label>Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter Your Username" />
										</div>
										<div class="form-group">
											<label>Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
											<small>
												<a href="reset-password.php">Forgot password?</a>
											</small>
										</div>
										<div>
											<div class="custom-control custom-checkbox align-items-center">
												<input id="customControlInline" type="checkbox" class="custom-control-input" value="remember-me"
													name="remember-me">
												<label class="custom-control-label text-small" for="customControlInline">Remember me next time</label>
											</div>
										</div>
										<div class="text-center mt-3">
											<p class="btn btn-lg btn-primary" id="Signin">Sign in</p>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

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

</body>
</html>
<script>
	function _(elemen){
        return document.getElementById(elemen);
          }
    let elem=_("main");
    let elements=elem.getElementsByTagName("INPUT");
    let data={}
    function collectdata(e){        
        for (let index = 0; index < elements.length; index++) {
        let element = elements[index].name;
        switch (element) {
            case "username":
                data.username= elements[index].value;       
                break;                      
            case "password":
                data.password= elements[index].value;      
                break;
                
        }
        
        }
        senddata(data,"sign_in");
    }  
    let kk=_("Signin");
    kk.addEventListener("click",collectdata);
    function senddata(data,type){
        let ajax = new XMLHttpRequest()
        ajax.onload=function(){
            if(ajax.status==200||ajax.readystate==4){
				disp(ajax.responseText);
             }
        }
        data.data_type=type;
        let dat_string=JSON.stringify(data);
        ajax.open("post","API.php",true);
        ajax.send(dat_string);
    }    
    function disp(result){
		let erro=_("val");       
        let obj=JSON.parse(result);
        if(obj.data_type=="info" ){
           window.location="home.php";                
               }
			else{   
        erro.innerHTML=obj.mess;
		erro.style.display="block";
				}  
                       
               }
    
   
</script>