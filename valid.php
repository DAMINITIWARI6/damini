
<?php
	
	include"navbar.php";
	$con = mysqli_connect("localhost","root","");
	
		if(!$con)
		{
			echo "not connected";
		}
	
		if(!mysqli_select_db($con,'project'))
		{
			echo "data base not connected";
		}
		$myusername=$_POST['username'];
		$mypassword=$_POST['pass'];


		$query="SELECT * FROM register WHERE username='$myusername' and pass='$mypassword'";

		
		$result = mysqli_query($con,$query);
		$count = mysqli_num_rows($result);
		if($count==1)
		{
			$row=mysqli_fetch_row($result);
			$sname=$row[0];
			session_start();
			$_SESSION['username']=$myusername;
			$_SESSION['loggedIn_cust_id'] = $row["cust_id"];
			$cookie_name = "user";
			$cookie_value = $myusername;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
			$_SESSION['Status']="Session Status: Login Success!!!";
			header("location:user.php");
		}
		else 
		{	
			session_start();
			if (isset($_SESSION['SName'])){
			unset($_SESSION['SName']);
		    }
		$_SESSION['Status']="Session Expired!!!";
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Registration</title>
	<meta charset="utf-8">
	<style>
		body
		{
			width: 100%;
		height: 100%;

    background-image: url("image/reg.png") ;
	background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;overflow-x: 
		}

				div.error
		{
			width: 300px;
		height:300px;
		background-color: rgba(0,0,0,0.65);
		margin: 0 auto;
		margin-top: 15px;
		padding-top: 10px;
		padding-left: 30px;
		padding-right: 20px;
		border-radius: 15px;
		color: white;
		font-weight: bolder;
		box-shadow: 4px 4px rgba(1,1,1,1);
		background-image: url("image/error.png");
		background-size: fill;
		 background-repeat: no-repeat;
		
		}
		h3{
			color: black;
			font-style: bolder;


		}
		</style>
	</head>
	<body>
		<div class="error">
			
	<form  name ="myForm" action='regn.php' method='POST' autocomplete="on">
		
		</form>

			
		</div>
<center>
<h3 style= "text-align:bottom"> <a href="login.php "> LogIn Failed!!<br>Please LogIn again!!</a></h3></center>
	</body>
	</html>

