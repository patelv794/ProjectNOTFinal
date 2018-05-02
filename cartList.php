
<!DOCTYPE html>
<html lang="en" >

<head>
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

  <meta charset="UTF-8">
  <title>Shopping Cart</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">
<style>
/*
I wanted to go with a mobile first approach, but it actually lead to more verbose CSS in this case, so I've gone web first. Can't always force things...

Side note: I know that this style of nesting in SASS doesn't result in the most performance efficient CSS code... but on the OCD/organizational side, I like it. So for CodePen purposes, CSS selector performance be damned.
*/
/* Global settings */
/* Global "table" column settings */
.product-image {
  float: left;
  width: 20%;
}

.product-details {
  float: left;
  width: 37%;
}

.product-price {
  float: left;
  width: 12%;
}

.product-quantity {
  float: left;
  width: 10%;
}

.product-removal {
  float: left;
  width: 9%;
}

.product-line-price {
  float: left;
  width: 12%;
  text-align: right;
}

/* This is used as the traditional .clearfix class */
.group:before, .shopping-cart:before, .column-labels:before, .product:before, .totals-item:before,
.group:after,
.shopping-cart:after,
.column-labels:after,
.product:after,
.totals-item:after {
  content: '';
  display: table;
}

.group:after, .shopping-cart:after, .column-labels:after, .product:after, .totals-item:after {
  clear: both;
}

.group, .shopping-cart, .column-labels, .product, .totals-item {
  zoom: 1;
}

/* Apply clearfix in a few places */
/* Apply dollar signs */
.product .product-price:before, .product .product-line-price:before, .totals-value:before {
  content: '$';
}

/* Body/Header stuff */
body {
  padding: 0px 30px 30px 20px;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 100;
}

h1 {
  font-weight: 100;
}

label {
  color: #aaa;
}

.shopping-cart {
  margin-top: -45px;
}

/* Column headers */
.column-labels label {
  padding-bottom: 15px;
  margin-bottom: 15px;
  border-bottom: 1px solid #eee;
}
.column-labels .product-image, .column-labels .product-details, .column-labels .product-removal {
  text-indent: -9999px;
}

/* Product entries */
.product {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}
.product .product-image {
  text-align: center;
}
.product .product-image img {
  width: 100px;
}
.product .product-details .product-title {
  margin-right: 20px;
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
}
.product .product-details .product-description {
  margin: 5px 20px 5px 0;
  line-height: 1.4em;
}
.product .product-quantity input {
  width: 40px;
}
.product .remove-product {
  border: 0;
  padding: 4px 8px;
  background-color: #c66;
  color: #fff;
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
  font-size: 12px;
  border-radius: 3px;
}
.product .remove-product:hover {
  background-color: #a44;
}

/* Totals section */
.totals .totals-item {
  float: right;
  clear: both;
  width: 100%;
  margin-bottom: 10px;
}
.totals .totals-item label {
  float: left;
  clear: both;
  width: 79%;
  text-align: right;
}
.totals .totals-item .totals-value {
  float: right;
  width: 21%;
  text-align: right;
}
.totals .totals-item-total {
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
}

.checkout {
  float: right;
  border: 0;
  margin-top: 20px;
  padding: 6px 25px;
  background-color: #6b6;
  color: #fff;
  font-size: 25px;
  border-radius: 3px;
}

.checkout:hover {
  background-color: #494;
}

/* Make adjustments for tablet */
@media screen and (max-width: 650px) {
  .shopping-cart {
    margin: 0;
    padding-top: 20px;
    border-top: 1px solid #eee;
  }

  .column-labels {
    display: none;
  }

  .product-image {
    float: right;
    width: auto;
  }
  .product-image img {
    margin: 0 0 10px 10px;
  }

  .product-details {
    float: none;
    margin-bottom: 10px;
    width: auto;
  }

  .product-price {
    clear: both;
    width: 70px;
  }

  .product-quantity {
    width: 100px;
  }
  .product-quantity input {
    margin-left: 20px;
  }

  .product-quantity:before {
    content: 'x';
  }

  .product-removal {
    width: auto;
  }

  .product-line-price {
    float: right;
    width: 70px;
  }
}
/* Make more adjustments for phone */
@media screen and (max-width: 350px) {
  .product-removal {
    float: right;
  }

  .product-line-price {
    float: right;
    clear: left;
    width: auto;
    margin-top: 10px;
  }

  .product .product-line-price:before {
    content: 'Item Total: $';
  }

  .totals .totals-item label {
    width: 60%;
  }
  .totals .totals-item .totals-value {
    width: 40%;
  }
}
@import "compass/css3";


/* Global settings */
$color-border: #eee;
$color-label: #aaa;
$font-default: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif;
$font-bold: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';


/* Global "table" column settings */
.product-image { float: left; width: 20%; }
.product-details { float: left; width: 37%; }
.product-price { float: left; width: 12%; }
.product-quantity { float: left; width: 10%; }
.product-removal { float: left; width: 9%; }
.product-line-price { float: left; width: 12%; text-align: right; }


/* This is used as the traditional .clearfix class */
.group:before,
.group:after {
    content: '';
    display: table;
} 
.group:after {
    clear: both;
}
.group {
    zoom: 1;
}


/* Apply clearfix in a few places */
.shopping-cart, .column-labels, .product, .totals-item {
  @extend .group;
}


/* Apply dollar signs */
.product .product-price:before, .product .product-line-price:before, .totals-value:before {
  content: '$';
}


/* Body/Header stuff */
body {
  padding: 0px 30px 30px 20px;
  font-family: $font-default;
  font-weight: 100;
}

h1 {
  font-weight: 100;
}

label {
  color: $color-label;
}

.shopping-cart {
  margin-top: -45px;
}


/* Column headers */
.column-labels {
  label {
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid $color-border;
  }
  
  .product-image, .product-details, .product-removal {
    text-indent: -9999px;
  }
}


/* Product entries */
.product {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid $color-border;
  
  .product-image {
    text-align: center;
    img {
      width: 100px;
    }
  }
  
  .product-details {
    .product-title {
      margin-right: 20px;
      font-family: $font-bold;
    }
    .product-description {
      margin: 5px 20px 5px 0;
      line-height: 1.4em;
    }
  }
  
  .product-quantity {
    input {
      width: 40px;
      
    }
  }
  
  .remove-product {
    border: 0;
    padding: 4px 8px;
    background-color: #c66;
    color: #fff;
    font-family: $font-bold;
    font-size: 12px;
    border-radius: 3px;
  }
  
  .remove-product:hover {
    background-color: #a44;
  }
}


/* Totals section */
.totals {
  .totals-item {
    float: right;
    clear: both;
    width: 100%;
    margin-bottom: 10px;
    
    label {
      float: left;
      clear: both;
      width: 79%;
      text-align: right;
    }
    
    .totals-value {
      float: right;
      width: 21%;
      text-align: right;
    }
  }
  
  .totals-item-total {
    font-family: $font-bold;
  }
}

.checkout {
  float: right;
  border: 0;
  margin-top: 20px;
  padding: 6px 25px;
  background-color: #6b6;
  color: #fff;
  font-size: 25px;
  border-radius: 3px;
}

.checkout:hover {
  background-color: #494;
}

/* Make adjustments for tablet */
@media screen and (max-width: 650px) {
  
  .shopping-cart {
    margin: 0;
    padding-top: 20px;
    border-top: 1px solid $color-border;
  }
  
  .column-labels {
    display: none;
  }
  
  .product-image {
    float: right;
    width: auto;
    img {
      margin: 0 0 10px 10px;
    }
  }
  
  .product-details {
    float: none;
    margin-bottom: 10px;
    width: auto;
  }
  
  .product-price {
    clear: both;
    width: 70px;
  }
  
  .product-quantity {
    width: 100px;
    input {
      margin-left: 20px;
    }
  }
  
  .product-quantity:before {
    content: 'x';
  }
  
  .product-removal {
    width: auto;
  }
  
  .product-line-price {
    float: right;
    width: 70px;
  }
  
}


/* Make more adjustments for phone */
@media screen and (max-width: 350px) {
  
  .product-removal {
    float: right;
  }
  
  .product-line-price {
    float: right;
    clear: left;
    width: auto;
    margin-top: 10px;
  }
  
  .product .product-line-price:before {
    content: 'Item Total: $';
  }
  
  .totals {
    .totals-item {
      label {
        width: 60%;
      }
      
      .totals-value {
        width: 40%;
      }
    }
  }
}
</style>
  <?php
   include('countList.php');
   ?>
   <!-- 
it stop to Go Back to Previous
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
 -->
</head>

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

<br><BR><br>
<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <!-- 
<label class="product-quantity">Quantity</label>
    
 --><label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>
  

<?php
//TRUNCATE products;
//include('Menu.php');
//include('ele_Search.php');
//include('countList.php');
require('mysql_connect.php');
$sql = "select * from products ORDER BY pro_id DESC;";
$run = mysqli_query($conn, $sql);
if(mysqli_num_rows($run)>0){

while($row = mysqli_fetch_assoc($run)){
$namees = $row['pro_name'];


echo" <div class='product'>
    <div class='product-image'>
      <img src='".$row['pro_img']."'>
    </div>
    <div class='product-details'>
      <div class='product-title'>".strtoupper($namees)."</div>
      
      <p class='product-description'>Designed by Products Co., <br>Powered by ProZone<br>Category, ".ucwords($row['pro_Group'])."<spam style='color:green;'>10% OFF On Every Order</spam></p>
    </div>
    <div class='product-price'>".$row['pro_price']."</div>
    <div class='product-quantity'>
    
     
    </div>
    
    
   <form action='' method='post'>
    <div class='product-removal'>
      <button  class='remove-product' name='deleteitfromproddd_jeknvjkwtivjn35i_unikjkjdfnv_jk59988er_' value='".$row['pro_id']."' >
        Remove
      </button>
   </div>
     </form>
     
     
      
    <div class='product-line-price'>".$row['pro_price']."</div>
  </div>
  
 
";

}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
require('mysql_connect.php');
$GrandTotleetd3353 = $_POST['delete5i_unikjkjdfnv_jk59988er_'];
$sqltotle =  "INSERT INTO `totlePrice`VALUES ('',$GrandTotleetd3353,NOW());";
if(mysqli_query($conn,$sqltotle)){


echo'<script type="text/javascript">
    
    window.location.href = "login.php";

    
    </script>';
}
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
require('mysql_connect.php');
$removProId = $_POST['deleteitfromproddd_jeknvjkwtivjn35i_unikjkjdfnv_jk59988er_'];
$sqlromv =  "delete from products where pro_id = '$removProId';";
if(mysqli_query($conn,$sqlromv)){
echo'<script type="text/javascript">
    
    window.location.href = "cartList.php";

    
    </script>';
}
}
$sqli = "call count_Totle_price();";
$runn = mysqli_query($conn,$sqli);
if(mysqli_num_rows($runn)>0){

while($rows = mysqli_fetch_assoc($runn)){
$plus = 0.05;
$plus *= $rows['sum(pro_price)'];
$shoppingfee = -0.10;
$shoppingfee *= $rows['sum(pro_price)'];
$totle = $rows['sum(pro_price)'];
$grandTotle =$shoppingfee + $plus + $totle;


echo"<div class='totals'>
    <div class='totals-item'>
      <label>Subtotal</label>
      <div class='totals-value' id='cart-subtotal'>".number_format($rows['sum(pro_price)'],2)."</div>
    </div> 
     <div class='totals-item'>
      <label>Tax (5%)</label>
      <div class='totals-value' id='cart-tax'>".number_format($plus,2)."</div>
    </div>
    <div class='totals-item'>
      <label style='color:red; font-weight:normal;'>Discount (10%)</label>
      <span style='color:red;'><div class='totals-value' id='cart-shipping'>".number_format($shoppingfee,2)."</span></div>
    </div><div class='totals-item'>
      <label>Shipping</label>
      <div class='totals-value' id='cart-shipping'>0.00</div>
    </div>
    <div class='totals-item totals-item-total'>
      <label>Grand Total</label>
      <div class='totals-value' id='cart-total'>".number_format($grandTotle,2)."</div>
    </div>
  </div>
  
  
      <form action='' method='Post'>
      <button class='checkout' name='delete5i_unikjkjdfnv_jk59988er_' value='".$grandTotle."'>Checkout</button></a>
      </form>
      
      
      
<a href='index.php'><button style='float:left;' class='checkout'>Continue Shopping</button></a>

</div>";

}


}

}else{
echo"<center><h3><font color='red'>Cart is Empty</font></h3></center>";
}
mysqli_close($conn);


?>
 
    <script>
   /* Set rates + misc */
var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;


/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});


/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}
    </script>




</body>

</html>
