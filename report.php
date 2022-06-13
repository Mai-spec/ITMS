<?php

require $_SERVER['DOCUMENT_ROOT']."/ITMS/Business_Service_Layer/Controller_Package/statesRenter_Controller.php";
$airbnb = new statesRenter_Controller();
require 'Header.php';

if(isset($_POST['upload-submit'])){
    $airbnb->insert();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="modal-content">
<h1>BOOKING REPORT</h1>

<button onclick="document.getElementById('id01').style.display='block'" style="width:150px;">CONTINUE</button> <br>
<button onClick="window.location.href='Homepage.php';" style="width:150px;">BACK</button><br>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
      
    <div class="container">
      <label for="name"><b>Name:</b></label><br>
      <h2>Encik Ali bin Abu</h2>

      <br><label for="person"><b>IC Number:</b></label><br>
       <h2>990730085196</h2>

      <br><label for="picture"><b>Phone Number:</b></label><br>
       <h2>0103925196</h2>

      <br><label for="price"><b>Person: </b></label><br>
      <h2>5</h2>

      <br><label for="amenities"><b>Date: </b></label><br>
      <h2>24/6/2022</h2>
          
      <button onClick="window.location.href='stripe_payment_gateaway_integration-php/index.php';" style="width:150px;">CONFIRM</button><br>
    </div>
    
  </form>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

