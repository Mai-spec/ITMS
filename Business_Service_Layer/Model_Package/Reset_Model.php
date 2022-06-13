<?php

require $_SERVER['DOCUMENT_ROOT']."/ITMS/Library/Database.php";

class Reset_Model{
    public $username, $ic, $usertype, $newpass, $confirmpass;
    
    function validation(){
        if($this->usertype == "user"){
            $query = "SELECT username FROM user WHERE username = :username AND user_ic = :ic";
            $param = [':username'=>$this->username,':ic'=>$this->ic];
            $result = DB::run($query, $param);
            $check = $result->rowCount();
            return $check;
        }
        else if($this->usertype == "admin"){
            $query = "SELECT username FROM admin WHERE username = :username AND admin_ic = :ic";
            $param = [':username'=>$this->username,':ic'=>$this->ic];
            $result = DB::run($query, $param);
            $check = $result->rowCount();
            return $check;
        } 
        else if($this->usertype == "renter"){
            $query = "SELECT username FROM renter WHERE username = :username AND renter_ic = :ic";
            $param = [':username'=>$this->username,':ic'=>$this->ic];
            $result = DB::run($query, $param);
            $check = $result->rowCount();
            return $check;
        }
    }
    
    function reset(){
        if($this->usertype == "user"){
            $query = "UPDATE user SET password = :newpass WHERE username = :username AND user_ic = :ic";
            $param = [':newpass'=>$this->newpass, ':username'=>$this->username, ':ic'=>$this->ic];
            $result = DB::run($query, $param);
            $check = $result->rowCount();
            return $check;
        }
        else if($this->usertype == "admin"){
            $query = "UPDATE admin SET password = :newpass WHERE username = :username AND admin_ic = :ic";
            $param = [':newpass'=>$this->newpass, ':username'=>$this->username, ':ic'=>$this->ic];
            $result = DB::run($query, $param);
            $check = $result->rowCount();
            return $check;
        } 
        else if($this->usertype == "renter"){
            $query = "UPDATE renter SET password = :newpass WHERE username = :username AND renter_ic = :ic";
            $param = [':newpass'=>$this->newpass, ':username'=>$this->username, ':ic'=>$this->ic];
            $result = DB::run($query, $param);
            $check = $result->rowCount();
            return $check;
        }
    }
  
}
?>
