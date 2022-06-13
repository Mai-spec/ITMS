<?php
session_start();
session_destroy();
require $_SERVER['DOCUMENT_ROOT']."/ITMS/Business_Service_Layer/Controller_Package/Login_Controller.php";
require 'Header.php';

if(isset($_POST['login-submit'])){
    $user = new Login_Controller();
    $user->Validate();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="modal-content">
<h1>Interstate Travel in Malaysia System</h1>

<button onclick="document.getElementById('id01').style.display='block'" style="width:150px;">Login</button>
<button onclick="location.href='Registration_Interface.php'" type ="button" style="width:150px;">Register</button> <br>
<button onclick="location.href='index.php'" type ="button" style="width:150px;">Back</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/avatar.png" alt="Avatar" class="avatar" style="width:240px;height:240px;">
    </div>
      
    <div class="container">
      <label for="username"><b>Username:</b></label><br>
      <input type="text" name="username" class="form-control" placeholder="Enter username" required><br>

      <label for="password"><b>Password:</b></label><br>
      <input type="password" name="password" class="form-control" placeholder="Enter Password" required><br>
      <label for="usertype"><b>User Category: </b></label><br>
          <select  class="container" id="lvl" name="usertype">
            <option selected="selected" value="user">User </option>
            <option value="admin">Admin</option>
            <option value="renter">Renter</option>
          </select><br> 
      <button type="submit" name="login-submit" value="login">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <a href="Reset_Password.php"><span class="psw">Forgot password?</span></a>
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
