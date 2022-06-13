<?php

require $_SERVER['DOCUMENT_ROOT']."/ITMS/Business_Service_Layer/Model_Package/Registration_Model.php";

class Registration_Controller{
    public $name,$ic,$phoneNumber,$email,$username,$password,$usertype;
    
    function insert(){
        $user = new Registration_Model();
        $user->name = $_POST['fullname'];
        $user->ic = $_POST['ic_num']; 
        $user->phoneNumber = $_POST['phone_num'];
        $user->email = $_POST['email'];
        $user->username = $_POST['username'];
        $user->password = $_POST['password'];
        $user->usertype = $_POST['usertype'];
        $stmt = $user->register();
        if($stmt > 0){
            $message = "Registration Successful!";
		echo "<script type='text/javascript'>alert('$message');
		window.location = '../ITMS/Login_Interface.php';</script>";
        }
        else{
            $message = "Registration fail! Please Try Again";
		echo "<script type='text/javascript'>alert('$message');
		window.location = '../Manage_Login_Registration_Interface/Registration_Interface.php';</script>";
        }   
    }
    
    function viewStudent(){
        $user = new Registration_Model();
        return $user->viewallstudent();
    }
    
    function viewInstructor(){
        $user = new Registration_Model();
        return $user->viewallinstructor();
    }
    
    function viewstud($viewstud){
        $user = new Registration_Model();
        $user->id = $viewstud;
        return $user->viewstud();
    }
    
    function viewins($viewins){
        $user = new Registration_Model();
        $user->id = $viewins;
        return $user->viewins();
    }
    
    function delstud(){
        $user = new Registration_Model();
        $user ->stud_id = $_POST['stud_id'];
        if($user->studdel()){
            $message = "Success Delete!";
		echo "<script type='text/javascript'>alert('$message');
		window.location = '../../view/admin/User.php';</script>";
        }
    }
    
    function delins(){
        $user = new Registration_Model();
        $user ->ins_id = $_POST['ins_id'];
        if($user->insdel()){
            $message = "Success Delete!";
		echo "<script type='text/javascript'>alert('$message');
		window.location = '../../view/admin/User.php';</script>";
        }
    }
}
?>