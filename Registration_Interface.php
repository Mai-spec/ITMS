<?php
    require "Header.php";
    
    require $_SERVER['DOCUMENT_ROOT']."/ITMS/Business_Service_Layer/Controller_Package/Registration_Controller.php";
    $user = new Registration_Controller();

    if(isset($_POST['register-submit'])){
        $user->insert();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

    <h1>ITMS Registration</h1>
    <div class="container">
            <form class="modal-content animate" action="" method="post">

                <br><label for="fullname"><b>Full Name (Same as IC):</b></label><br>
                <input type="text" name="fullname" placeholder="Enter your full name" required><br>    
                <br><label for="ic_num"><b>I/C Number:</b></label><br>
                <input type="text" name="ic_num" placeholder="Enter your I/C number" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"required><br>
                <br><label for="phone_num"><b>Contact Number:</b></label><br>
                <input type="text" name="phone_num" placeholder="Enter your phone number" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"required><br>
                <br><label for="email"><b>E-mail:</b></label><br>
                <input type="text" name="email" placeholder="Enter your email" required><br>
                <br><label for="username"><b>Username:</b></label><br>
                <input type="text" name="username" placeholder="Enter your account username" required><br>
                <br><label for="password"><b>Password:</b></label><br>
                <input type="password" name="password" placeholder="Enter your password" required><br>
                <br><label for="usertype"><b>User Category: </b></label><br>
                <select  class="form-control" id="lvl" name="usertype" required>
                    <option selected="selected" value="user">User</option>
                    
                    <option value="renter">Renter</option>
                </select><br>
                
                <button type="submit" name="register-submit" value="register">Register</button>
            
                <button onClick="window.location.href='Login_interface.php'">Cancel</button><br>
            </form>
        
    </div>
</body>
</html>