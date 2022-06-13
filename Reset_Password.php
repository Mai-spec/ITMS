<?php
    require "Header.php";
    
    require $_SERVER['DOCUMENT_ROOT']."/ITMS/Business_Service_Layer/Controller_Package/Reset_Controller.php";
    $user = new Reset_Controller();

    if(isset($_POST['reset-submit'])){
        $user->reset_password();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h1>Forgot Password</h1>
    <div class="container">
            <form class="modal-content animate" action="" method="post">
                <br>
                <br><label for="username"><b>Username:</b></label><br>
                <input type="text" name="username" placeholder="Enter your account username" required><br>
                <br><label for="ic_num"><b>I/C Number:</b></label><br>
                <input type="text" name="ic_num" placeholder="Enter your I/C number" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"required><br>
                <br><label for="newpassword"><b>New Password:</b></label><br>
                <input type="password" name="newpass" placeholder="Enter your new password" required><br>
                <br><label for="newpassword"><b>Confirm New Password:</b></label><br>
                <input type="password" name="confirmpass" placeholder="Enter your new password" required><br>
                <br><label for="usertype"><b>User Category: </b></label><br>
                <select  class="form-control" id="lvl" name="usertype" required>
                    <option selected="selected" value="user">User </option>
                    <option value="admin">Admin</option>
                    <option value="renter">Renter</option>
                </select><br>
                
                <button type="submit" name="reset-submit" value="update">Update</button>
                <br>
            </form>
        
    </div>
</body>
</html>