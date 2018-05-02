<?php
include('session.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Address</title>
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
<script>
            function loadXMLDoc() {
                var xhttp = new XMLHttpRequest();
                var zipcode = document.getElementById("zip5").value;
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        myFunction(this);
                    }
                };
                xhttp.open("GET", "http://production.shippingapis.com/ShippingAPITest.dll?API=CityStateLookup&XML=<CityStateLookupRequest USERID='023STUDE0706'><ZipCode ID='0'><Zip5>" + zipcode + "</Zip5></ZipCode></CityStateLookupRequest>", true);
                xhttp.send();
            }
            function myFunction(xml) {
                var x, i, xmlDoc, txt;
                xmlDoc = xml.responseXML;
                txt = "";
                x = xmlDoc.getElementsByTagName("CityStateLookupResponse");
                for (i = 0; i < x.length; i++) {
                    document.getElementById("citytxt").value = x[i].getElementsByTagName("City")[0].childNodes[0].nodeValue;
                    document.getElementById("statetxt").value = x[i].getElementsByTagName("State")[0].childNodes[0].nodeValue;
                    document.getElementById("respose").innerHTML = "City: " + x[i].getElementsByTagName("City")[0].childNodes[0].nodeValue + "\nState: " + x[i].getElementsByTagName("State")[0].childNodes[0].nodeValue;;
                }
                
            }
        </script>
        
 <?php
   include('countList.php');
   
//totle final prices 
include'mysql_connect.php';


$sql221 = "select FinalPrice from totlePrice ORDER BY id_Final_price DESC LIMIT 1;";
$runnnre = mysqli_query($conn, $sql221);
if($runnnre){

while($rowss = mysqli_fetch_assoc($runnnre)){
echo'<div style="margin-left:90%; margin-top:70px; margin-bottom:-83px; color:green; font-weight:bold;">Totle: '.$rowss['FinalPrice'].'</div>';

}

}
mysqli_close($conn);

   ?>
</head>
<body style="min-width:450px; margin-top:17px;">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
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
      <a href="#">Games</a>
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

$Fn = $_POST['F_name'];
$Ln = $_POST['L_name'];
$Add = $_POST['Addre'];
$Add1 = $_POST['Addre1'];
$zip = $_POST['Zipp'];
$city = $_POST['cityy'];
$stat = $_POST['statt'];
$phon = $_POST['phoneee'];
$mess = $_POST['messs'];

$sql = "insert into Delivery_address values('','$Fn','$Ln','$Add','$Add1','$zip','$city','$stat','$phon','$mess',NOW());";
if (mysqli_query ($conn, $sql)){
	echo"<script>alert('Delivery takes 5-6 Business days');</script>";
	echo'<script type="text/javascript">
    
    window.location.href = "Review.php";

    
    </script>';
	}else{
	echo "<span style='margin-left:30px; margin-bottom:20px;' class='login100-form-title p-b-26'>Something Not Right... try agin later<br></span>";
	}

mysqli_close($conn);
}
?>
	<div id="letsGoUp" style="margin-top: -110px;"></div><br><br>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<span class="login100-form-title p-b-26">
						Delivery Address
					</span>
					
<div class="wrap-input100 validate-input" data-validate = "Enter First Name">
						<input class="input100" type="text" name="F_name">
						<span class="focus-input100" data-placeholder="First Name"></span>
					</div>

<div class="wrap-input100 validate-input" data-validate = "Enter Last Name">
						<input class="input100" type="text" name="L_name">
						<span class="focus-input100" data-placeholder="Last Name"></span>
					</div>
					
					
					
<div class="wrap-input100 validate-input" data-validate = "Enter Address">
						<input class="input100" type="text" minlength="8" name="Addre">
						<span class="focus-input100" data-placeholder="Address"></span>
					</div>
					
<div class="wrap-input100 validate-input" data-validate = "#APT-Suit-Floor">
						<input class="input100" type="text" name="Addre1">
						<span class="focus-input100" data-placeholder="#APT-Suit-Floor"></span>
					</div>
					
										
<div class="wrap-input100 validate-input" data-validate = "Zip Code">
						<input class="input100" type="number" id="zip5" name="Zipp" maxlength="5">
						<span class="focus-input100" data-placeholder="Zip"></span>
					</div>
					
					
										
<div class="wrap-input100 validate-input" data-validate = "City">
						<input class="input100" type="text" onclick="loadXMLDoc();" id="citytxt" name="cityy" readonly>
						<span class="focus-input100" data-placeholder="City"></span>
					</div>
					
					
										
<div class="wrap-input100 validate-input" data-validate = "State">
						<input class="input100" type="text"  id="statetxt" name="statt" readonly>
						<span class="focus-input100" data-placeholder="State"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Phone Number (123)-456-7890">
						<input class="input100" type="tel" maxlength="10" name="phoneee">
						<span class="focus-input100" data-placeholder="Phone Number"></span></div>



<div class="wrap-input100">
						<input class="input100" type="text" name="messs">
						<span class="focus-input100" data-placeholder="Messages not Required"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Continue
							</button>
						</div>
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