
<html>
<head>


<style>
#shoppingcartIcorn img{
width:50px; 
height:50px;
margin-top:-3px;
margin-left: 92%;
border:solid black 2px;
border-radius:50%;

}

.contatt p{
margin-left:94%;
margin-bottom:-50px;
margin-top:-44px;
color:black;
font-weight:bold;
font-size:18px;
}

 </style>
</head>
<body>
 <?php

include'mysql_connect.php';


$sql = "call count_shoopingList();";
$run = mysqli_query($conn, $sql);

mysqli_close($conn);

?>
<div id="countNumberList"><p><?php if(mysqli_num_rows($run)>0){

while($row = mysqli_fetch_assoc($run)){
//$row['count(*)'];

	echo "
	
	
	   <div id='shoppingcartIcorn'><a href='cartList.php'><img src='img/shoppingIcon.png'></a>
      <div class='contatt'><p style='color:red; font-weight:normal;'>".$row['count(*)']."</p></div>
      </div>";
	
}
}else{
echo"<div class='contatt'><p>0</p></div>
      </div>";
}  ?></p>

</div>

</body>
</html>

 
 
 
 
 
 
 
 
 
 