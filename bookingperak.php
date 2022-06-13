<?php

require $_SERVER['DOCUMENT_ROOT']."/ITMS/Business_Service_Layer/Controller_Package/booking_Controller.php";
$booking = new booking_Controller();
require 'Header.php';

if(isset($_POST['book-submit'])){
    $booking->insert();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="modal-content">
<h1>AIRBNB BOOKING</h1>

<button onclick="document.getElementById('id01').style.display='block'" style="width:150px;">CONTINUE</button> <br>
<button onClick="window.location.href='perakairbnb.php';" style="width:150px;">BACK</button><br>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
      
    <div class="container">
      <label for="name"><b>Full Name:</b></label><br>
      <input type="text" name="name" class="form-control" required><br>

      <br><label for="icnumber"><b>IC Number:</b></label><br>
       <input type="text" name="icnumber" class="form-control" required><br>

      <br><label for="contact"><b>Contact Number:</b></label><br>
      	<input type="text" name="contact"><br>

      <br><label for="person"><b>How many person?: </b></label><br>
      <input type="text" name="person" class="form-control" required><br>

      <br><label for="date"><b>Date: </b></label><br>
      <input type="date" name="date" class="form-control" required><br>
          
      <button type="submit" name="book-submit" value="book">BOOK</button>
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

