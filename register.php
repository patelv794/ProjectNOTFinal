<!DOCTYPE html>
<html lang="en">
<head>
<title>Prozone/Electronics</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="allstyle.css">
<style>
#letsGoUp{

margin-top:-70px;
}
</style>
 <?php
   include('countList.php');
   ?>
</head>
<body style="min-width:450px; margin-top:17px;">

<div class="headcolor"><br>
<div class="heaLOGIO">
      <a href="index.php"><img src="img/prozone-360-X-240-TLOGO.png"></a> 
  
</div>

<br>
<div class="navbar1">
  <div class="dropdown1">
    <button class="dropbtn1"><a href="category.php">Category 
    </button></a>
    <div class="dropdown-content1">
      <a href="electronic.php">Electronics</a>
      <a href="toys.php">Toys</a>
<a href="videogames.php">Video Games</a>
      <a href="#">iPhones</a>
      <a href="#">Link 3</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  <a href=""><button class="dropbtn1">ProZone's Special 
    </button></a>
     <a href=""><button class="dropbtn1">Gift Card 
    </button></a>


</div>
</div>

<br><BR><br>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
require('mysql_connect.php');

$Fn1 = $_POST['F__name'];
$Ln1 = $_POST['L__name'];
$UserNa1 = $_POST['email'];
$Pass1 = $_POST['pass__word'];

$sql = "insert into Account_Register values('','$Fn1','$Ln1','$UserNa1',SHA1('$Pass1'),NOW());";
if (mysqli_query ($conn, $sql)){
	echo "<span style='margin-left:30px; margin-bottom:20px;' class='login100-form-title p-b-26'>Account Successfully Created.<br><a href='login.php'>Ready To Continue <h4>Log in</h4></a></span>";
	}else{
	echo "<span style='margin-left:30px; margin-bottom:20px;' class='login100-form-title p-b-26'>Something Wrong... try agin later<br></span>";
	}

mysqli_close($conn);
}
?>
	<div id="letsGoUp"></div><br><br>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<span class="login100-form-title p-b-26">
						Sign Up
					</span>
					
<div class="wrap-input100 validate-input" data-validate = "Enter First Name">
						<input class="input100" type="text" name="F__name">
						<span class="focus-input100" data-placeholder="First Name"></span>
					</div>

<div class="wrap-input100 validate-input" data-validate = "Enter Last Name">
						<input class="input100" type="text" name="L__name">
						<span class="focus-input100" data-placeholder="Last Name"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a123@g.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" minlength="6" name="pass__word">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="login.php">
							Log in
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>