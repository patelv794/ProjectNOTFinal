
<?php
include('Menu.php');
include('ele_Search.php');
//include('countList.php');
require('mysql_connect.php');

$sql = "SELECT * FROM allproducts where group_num = 'electronic1'";
$result = mysqli_query($conn, $sql);
$r = mysqli_num_rows($result);
if($r>0){
echo"
<div class='w3-row-padding' id='about'>
    <div class='w3-center w3-padding-64'>
    </div>

";
while($row = mysqli_fetch_assoc($result)){
$id12 = $row['gam_id'];
$img12 = $row['gam_img'];
$name21 = $row['gam_name'];
$price12 = $row['gam_price'];

echo "<div style=' margin-top:-200px'></div>
	 <div class='w3-third w3-margin-bottom'>
      <div class='w3-card-3'>
        <img height='300px' src='".$img12."' style='width:80%;'>
        <div class='w3-container'>
          <p class='w3-opacity' style='width:200%'>".$name21."</p>
          <p>$".number_format($price12,2)."</p>
          
    <form action='' method='GET'>
          <p><button name='deleteitfromproddd_jeknvjkwtivjn35i_unikjkjdfnv_jk59988er_' value='".$id12."' class='w3-button w3-black w3-block' style='width:80%' >Add</button></p>
           
</form>
         
         
        </div>
      </div>
    </div>
  
";
}echo" </div>";

$removProId = $_GET['deleteitfromproddd_jeknvjkwtivjn35i_unikjkjdfnv_jk59988er_'];
$sqlromv =  "INSERT INTO PRODUCTS (pro_img,pro_name,pro_price,pro_Group)
			SELECT gam_img, gam_name, gam_price, group_num FROM allproducts where gam_id = $removProId;";
if(mysqli_query($conn,$sqlromv)){
echo'<script type="text/javascript">
    
    window.location.href = "electronic.php";

    
    </script>';
}

}else{
echo "<center><h3><font color='red'>0 Electronic Product found</font></h3></center>";
}

mysqli_close($conn);
?>


</body>
</html>