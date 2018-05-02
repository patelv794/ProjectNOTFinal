<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 20%;
    padding: 10px 18px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}




.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>



<?php
require('mysql_connect.php');
$sql = "select * from allproducts";
$re = mysqli_query($conn,$sql);
if(mysqli_num_rows($re)>0)
{
echo "<h3>Producuts: </h3>
<table> 
 <tr>
    <th>ID</th>
    <th>Img URL</th>
    <th>Name</th>
    <th>Price</th>
    <th>Group</th>
  </tr>"; 
while($row = mysqli_fetch_assoc($re)){

echo "<tr>
	<td>".$row['gam_id']."</td>
    <td>".$row['gam_img']."</td>
    <td>".$row['gam_name']."</td>
    <td>".$row['gam_price']."</td>
    <td>".$row['group_num']."</td>
    </tr>
    ";


}echo"</table>";
}else{
echo "0  ID Found ";
}
mysqli_close($conn);
?>
<br>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	require ('mysql_connect.php');

	
	$img1 = $_POST['gam_img'];
	$name1 = $_POST['gam_name'];
	$price1 = $_POST['gam_price'];
	$group1 = $_POST['group_num'];

$sql = "insert into allproducts values ('$img1','$name1','$price1','$group1');";

 if(mysqli_query($conn, $sql)){
 echo "ID# ".$id1." Added Successfully Added<br>";
 }
 
 mysqli_close($conn);
 }
 ?>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Add Products</button>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
</label><h3>Add Items.</h3>

<p>Image <br><textarea cols="50" rows="4" type="text" name="gam_img"  required>img/</textarea></p>
<p>Name <br><textarea cols="50" rows="4" type="text" name="gam_name" placeholder="Enter Item Name" required ></textarea></p>
<p>Price <input type="text" name="gam_price" placeholder="Enter Items $ Price" required></p>   
<p>Group Name <input type="text" name="group_num" placeholder="Enter Items group" required></p>   
      <button type="submit">Add Products.</button>
      </div>
  </form>
</div>


 
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

require('mysql_connect.php');

$dele_ele = $_POST['delete_ele'];

$sql = "delete from allproducts where gam_id = $dele_ele";

if(mysqli_query($conn, $sql)){
echo "<br>Deleted ID# ".$dele_ele. " Successfully. <BR>";
}
mysqli_close($conn);
}
?>
<button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Delete products</button>
<div id="id04" class="modal">
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
          </label>

      <h3>Delete Electronic</h3>

<p>ID# <input type="text" name="delete_ele" placeholder="Enter id to delete" required></p>
        
      <button type="submit">Delete Toys</button>
  </div>
  </form>
</div>


 
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

require('mysql_connect.php');

$dele_toy = $_POST['delete_toys'];

$sql = "delete from toys where toy_id = $dele_toy";

if(mysqli_query($conn, $sql)){
echo "<br>Deleted ID# ".$dele_toy. " Successfully. <BR>";
}
mysqli_close($conn);
}
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

require('mysql_connect.php');

$toy_id23 = $_POST['to_id32'];
$sql = "$toy_id23";

if(mysqli_query($conn, $sql)){
echo "Created Successfull ";
}
mysqli_close($conn);
}
?>
<h3>Create Anything Table,Databases,Delete,Update,...</h3>
<form action="" method="POST">
<textarea name="to_id32" type="text" cols="80" rows="20"></textarea>
<br>
<input type="submit" value="Run Query">
</form>



<script>
// Get the modal
var modal = document.getElementById('id01 id02 id03 id04 id05');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

























