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


<link rel="stylesheet" type="text/css" href="allstyle.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<style>

</style>
<body style="min-width:450px">

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

<br>

<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
 <?php
 require('mysql_connect.php');

$sql = "SELECT * FROM Delivery_address ORDER BY da_id DESC LIMIT 1;";
$result = mysqli_query($conn, $sql);
$r = mysqli_num_rows($result);
if($r>0){

while($row = mysqli_fetch_assoc($result)){

$phone = $row['da_phone'];
$numbers_only = preg_replace("/[^\d]/", "", $phone);
$dattt = -1;
echo "<address>
                        <strong>".ucfirst($row['da_fname']).", ".ucfirst($row['da_lname'])."</strong>
                        <br>
                        ".$row['da_Addre'].", #".$row['da_Addre1']."
                        <br>
                        ".$row['da_city'].", ".$row['da_stat']." ".$row['da_zip']."
                        <br>
                        Phone: ".preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "($1)-$2-$3", $numbers_only)."
                    </address>
                </div>";
}echo"<div class='col-xs-6 col-sm-6 col-md-6 text-right'>
                    <p>
                        <em>Date: ".date("F d, Y")."</em>
                    </p>
                   ";

}else{
echo "<center><h3><font color='red'>0 Electronic Product found</font></h3></center>";
}

mysqli_close($conn);
?>

<?php
$randnum = rand(1111111111,9999999999);
echo" <p>
                        <em>Receipt #: ".$randnum."</em>
                    </p>";
?>
                
                </div></div>
            
            <div class="row">
                <div class="text-center">
                    <h1>Order Review</h1>
                </div>
                </span>
<?php
 require('mysql_connect.php');

$sql = "(SELECT * FROM products);";
$result = mysqli_query($conn, $sql);
$r = mysqli_num_rows($result);
if($r>0){
echo"<table class='table table-hover'>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th style='margin-right:-20px'>Name</th>
                            <th></th>
                            <th class='text-center'>Price</th>
                            
                             </tr>
                    </thead>
                    <tbody>";
while($row = mysqli_fetch_assoc($result)){

echo "<tr>
	 	<td class='col-md-9'><em></em><img height='100px' src='".$row['pro_img']."' style='width:100px;'>
        </h4></td>
    	<td class='col-md-1' style='text-align: center'>".ucfirst($row['pro_name'])."</td>
    	<th></th>
        <td class='col-md-1 text-center'>$".$row['pro_price']."</td>
        
        
                       </tr>";

}
$sql221 = "select FinalPrice from totlePrice ORDER BY id_Final_price DESC LIMIT 1;";
$runnnre = mysqli_query($conn, $sql221);
if($runnnre){

while($rowss = mysqli_fetch_assoc($runnnre)){
echo "<thead>
                        <tr style='background-color:white;'>
                            <th style='color:red;'>10% Off Included </th>
                            <th style='color:black; font-size:18px;'>GrandTotle: </th>
                            <th></th>
                            <th style='color:black; font-size:18px;' class='text-center'>$".$rowss['FinalPrice']."</th>
                            
                             </tr>
                    </thead>";
}

}

}
mysqli_close($conn);
?>          
<tr>
	<td>   </td>
    <td>   </td>
    <td class="text-right">
    </td>
                           
                        </tr>
                        
                    </tbody>
                </table>
                <a href="payment.php"><button type="button" class="btn btn-success btn-lg btn-block">
                    Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>
                </button></a><br>
                 <a href="index.php"><button type="button" class="btn btn-success btn-lg btn-block">
                    <span class="glyphicon glyphicon-chevron-left"></span> Continue Shopping  
                </button></a>
                </td>
            </div>
        </div>
    </div>

</body>
</html>