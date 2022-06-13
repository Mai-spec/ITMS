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
<h1>AIRBNB</h1>

<button onclick="document.getElementById('id01').style.display='block'" style="width:150px;">UPLOAD</button> <br>
<button onClick="window.location.href='statesRenter.php';" style="width:150px;">BACK</button><br>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
      
    <div class="container">
      <label for="name"><b>Name of Airbnb:</b></label><br>
      <input type="text" name="name" class="form-control" required><br>

      <br><label for="person"><b>No. of Person:</b></label><br>
       <input type="person" name="person" class="form-control" required><br>

      <br><label for="picture"><b>Picture:</b></label><br>
      	<input type="file" name="image"><br>

      <br><label for="price"><b>Price/night: </b></label><br>
      <input type="price" name="price" class="form-control" required><br>

      <br><label for="amenities"><b>Amenities: </b></label><br>
      <input type="amenities" name="amenities" class="form-control" required><br>
          
      <button type="submit" name="upload-submit" value="upload">Upload</button>
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

