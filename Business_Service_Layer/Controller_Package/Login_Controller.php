<?php
if(empty($_SESSION['username'])){
    session_start();
}
require $_SERVER['DOCUMENT_ROOT']."/ITMS/Business_Service_Layer/Model_Package/Login_Model.php";

class Login_Controller{

	function Validate(){
            $user = new Login_Model();
            $user->username = $_POST['username'];
            $user->password = $_POST['password'];
            $user->usertype = $_POST['usertype'];
            $stmt = $user->Login();
            if($stmt > 0)

            {
                if($user->usertype == "user")
                {
                    $_SESSION['username']=$username;
                    $message = "Welcome!";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location = '../ITMS/Homepage.php';</script>"; #for login success link!!!
                }

                else if($user->usertype == "admin")
                {    
                    $_SESSION['username']=$username;
                    $message = "Welcome!";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location = '../ITMS/HomepageAdmin.php';</script>"; #for login success link!!!
                }

                else if($user->usertype == "renter")
                {    
                    $_SESSION['username']=$username;
                    $message = "Welcome!";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location = '../ITMS/HomepageRenter.php';</script>"; #for login success link!!!

                }
               
                

                }
            
            }
        }


            
        
        function user(){
            $user = new Login_Model();
            $stmt = $user->User();
            return $stmt;
        }
        
        function user1(){
            $user = new Login_Model();
            $stmt = $user->User1();
            return $stmt;
        }

        function user2(){
            $user = new Login_Model();
            $stmt = $user->User2();
            return $stmt;
        }


?>