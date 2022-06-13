<?php
require $_SERVER['DOCUMENT_ROOT']."/ITMS/Library/Database.php";

class Registration_Model{
  
    public $id,$name,$ic,$phoneNumber,$email,$username,$password,$usertype;
    
    function register(){
        if($this->usertype == "user"){
            $query = "insert into user(user_name, user_ic, user_phone, user_email, username, password, usertype) values(:name, :ic, :phoneNumber, :email, :username, :password, :usertype)";
            $param = [':name'=>$this->name,':ic'=>$this->ic, ':phoneNumber'=>$this->phoneNumber, ':email' => $this->email, ':username' => $this->username, ':password' => $this->password, ':usertype' => $this->usertype];
            $result = DB::run($query, $param);
            $cek = $result->rowCount();
            return $cek;
        } 
        else if($this->usertype == "admin"){
            $query = "insert into admin(admin_name, admin_ic, admin_phone,  admin_email, username, password, usertype) values(:name, :ic, :phoneNumber, :email, :username, :password, :usertype)";
            $param = [':name'=>$this->name,':ic'=>$this->ic, ':phoneNumber'=>$this->phoneNumber, ':email' => $this->email, ':username' => $this->username, ':password' => $this->password, ':usertype' => $this->usertype];
            $result = DB::run($query, $param);
            $cek = $result->rowCount();
            return $cek;
        } 
        else if($this->usertype == "renter"){
            $query = "insert into renter(renter_name, renter_ic, renter_phone, renter_email, username, password, usertype) values(:name, :ic, :phoneNumber, :email, :username, :password, :usertype)";
            $param = [':name'=>$this->name,':ic'=>$this->ic, ':phoneNumber'=>$this->phoneNumber, ':email' => $this->email, ':username' => $this->username, ':password' => $this->password, ':usertype' => $this->usertype];
            $result = DB::run($query, $param);
            $cek = $result->rowCount();
            return $cek;
        }
    }
    
    function viewalluser(){
        $sql = "select * from user";
        return DB::run($sql);
    }
    
    function viewalladmin(){
        $sql = "select * from admin";
        return DB::run($sql);
    }
    
    function viewuser(){
        $sql = "select * from user where user_id=:viewUser";
        $args = [':viewUser'=>$this->id];
        return DB::run($sql,$args);
    }
    
    function viewinstructor(){
        $sql = "select * from instructor where ins_id=:viewIns";
        $args = [':viewIns'=>$this->id];
        return DB::run($sql,$args);
    }
    
    function studdel(){
        $sql = "delete from student where stud_id=:stud_id";
        $args = [':stud_id'=>$this->stud_id];
        return DB::run($sql,$args);
    }
    
    function insdel(){
        $sql = "delete from instructor where ins_id=:ins_id";
        $args = [':ins_id'=>$this->ins_id];
        return DB::run($sql,$args);
    }
}
?>