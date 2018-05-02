
<?php
require ('mysql_connect.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$mes_name = $_POST['mes_name1'];
$mes_email = $_POST['mes_email1'];
$mes_subject = $_POST['mes_subject1'];
$mes_message = $_POST['mes_message1'];

$sql="insert into customer_question values('','$mes_name','$mes_email','$mes_subject','$mes_message',NOW());";
$run = mysqli_query($conn,$sql);
if($run){

echo "<script type='text/javascript'>alert('Your Question/Request Has Been Send It, We Will Replay To Your Email ASAP. Thank You');</script>";

}
mysqli_close($conn);
}
?>

<!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Contact</h4>
        <p>Questions? Go ahead.</p>
        <form action="index.php" method="POST">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="mes_name1" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="mes_email1" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="mes_subject1" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="mes_message1" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form>
      </div>

     <!-- <div class="w3-col s4">
        <h4>About</h4>
        <p><a href="#">About us</a></p>
        <p><a href="#">We're hiring</a></p>
        <p><a href="#">Support</a></p>
        <p><a href="#">Find store</a></p>
        <p><a href="#">Shipment</a></p>
        <p><a href="#">Payment</a></p>
        <p><a href="#">Gift card</a></p>
        <p><a href="#">Return</a></p>
        <p><a href="#">Help</a></p>
      </div>-->

      <div style="margin-left:33%" class="w3-col s4 w3-justify">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Prozone</p>
        <p><i class="fa fa-fw fa-phone"></i> (212)-837-2732</p>
        <p><i class="fa fa-fw fa-envelope"></i><a href="mailto:Patelv794@gmail.com">Patelv794@gmail.com</a></p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div>
  </footer>