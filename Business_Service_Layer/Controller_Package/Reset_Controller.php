<?php

require $_SERVER['DOCUMENT_ROOT']."/ITMS/Business_Service_Layer/Model_Package/Reset_Model.php";

class Reset_Controller{
    public $username, $ic, $usertype, $newpass, $confirmpass;
    
    function reset_password(){
        $user = new Reset_Model();
        $user->username = $_POST['username'];
        $user->ic = $_POST['ic_num'];        
        $user->newpass = $_POST['newpass'];
        $user->confirmpass = $_POST['confirmpass'];
        $user->usertype = $_POST['usertype'];
        if($user->confirmpass !== $user->newpass){
            $message = "Please make sure your confirm password and new password is the same!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else {
        $stmt = $user->validation();
            if($stmt > 0){           
                $message = "Resetting Password";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    $user->reset();
                    $message = "Password Reset!";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location = '../ITMS/Login_Interface.php';</script>";
            }
            else{
                $message = "Reset fail! Please Try Again";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location = '../ITMS/Reset_Password.php';</script>";
            }   
        }
        
    }
}   
?>