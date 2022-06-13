<?php
require $_SERVER['DOCUMENT_ROOT']."/ITMS/Library/Database.php";

class Login_Model{
  
    public $username,$password,$usertype;
    
    function Login(){
        if($this->usertype == "user"){
            $query = "select * from user where username=:username and password=:password";
            $param = [':username' => $this->username, ':password' => $this->password];
            $result = DB::run($query, $param);
            $check = $result->rowCount();
            return $check;
        }
        if($this->usertype == "admin"){
            $query = "select * from admin where username=:username and password=:password";
            $param = [':username' => $this->username, ':password' => $this->password];
            $result = DB::run($query, $param);
            $check = $result->rowCount();
            return $check;
        }
        if($this->usertype == "renter"){
            $query = "select * from renter where username=:username and password=:password";
            $param = [':username' => $this->username, ':password' => $this->password];
            $result = DB::run($query, $param);
            $check = $result->rowCount();
            return $check;
        }
    }
    
    function User(){
        $sql = "select * from user where user_id='".$_SESSION['username']."'";
        $stmt = DB::run($sql);
        return $stmt;
    }
    
    function User1(){
        $sql = "select * from admin where admin_id='".$_SESSION['username']."'";
        $stmt = DB::run($sql);
        return $stmt;
    }

    function User2(){
        $sql = "select * from renter where renter_id='".$_SESSION['username']."'";
        $stmt = DB::run($sql);
        return $stmt;
    }

}