
<?php
	include "connection.php";
	include "navbar.php";
	?>
<!DOCTYPE html>
<html>
<head>

	<script>
	function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
	</script>
	<title>Login</title>
	<meta charset="utf-8">
	<style>
	body
	{
		width: 100%;
		height: 100%;

    background-image: url("image/reg.png");
	background-size: cover;
	background-repeat: no-repeat;
    background-attachment: fixed;


	}

	
div.container
{
	
	width: 300px;
	height: 350px;
	background-color: #191414;
	margin: 0 auto;
	margin-top: 80px;
	padding-top: 10px;
	padding-left: 50px;
	border-radius: 15px;
	border-top-style: 
	color: #FFFFFF;
	font-weight: bolder;
	box-shadow: 4px 4px rgba(1,1,1,0.5);

}
div.container input[type="text"]
{
	width: 210px;
	height: 30px;
	border: 0;
	border-radius: 5px;
	padding-left: 5px;


}
div.container input[type="password"]
{
	width: 210px;
	height: 30px;
	border: 0;
	border-radius: 5px;
	padding-left: 5px;

}
div.container input[type="submit"]
{
	width: 100px;
	height: 30px;
	border: 0;
	border-radius: 5px;
	font-weight: bolder;
	font-size: "50";
}
</style>
</head>
<body>

			<div class="background_wallpaper">
				
			<div class="header-content">
				<header>
				<h1 style="text-align:center">SAFAR TOURS AND TRAVELS</h1><br><br>
			</header>
			</div>
			<div class="container">

				<P style="color:#FFFFFF;">Please enter details to login</P>
				<div class="hello">
			<form name="Login" id="login-form" action="valid.php" method="post" role="form" style="display: block;">
									<div class="form-group"><p style="color: #FFF">user name</p>
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									
									<div class="form-group">
										<p style="color: #FFF">password</p>
										<input type="password" name="pass" id="pass" tabindex="2" class="form-control" placeholder="Password">
										<br><br>
										<input type="checkbox" onclick="myFunction()">Show Password
									</div>
									<br>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="go" id="go" tabindex="4" class="form-control btn btn-login" onclick="myFunction()" value="Log In">
											</div>
										</div>
									</div>
								</form>
				</div>
				<p style="color:#FFFFFF;">New User?&nbsp;&nbsp;<a href="registration.php" target="_blank" title="sign up" >Sign Up</a> </p>

			</div>
			</div>
				
</body>
</html>

