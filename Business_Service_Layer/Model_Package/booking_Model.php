<?php
require $_SERVER['DOCUMENT_ROOT']."/ITMS/Library/Database.php";

class booking_Model{
  
    public $id,$name,$icnumber,$contact,$person,$date;
    
    function book(){
            $query = "insert into booking(name, icnumber, contact, person, date) values(:name, :icnumber, :contact, :person, :date)";
            $param = [':name'=>$this->name, ':icnumber'=>$this->icnumber, ':contact'=>$this->contact, ':person' => $this->person, ':date' => $this->date];
            $result = DB::run($query, $param);
            $cek = $result->rowCount();
            return $cek;

        }
    }

?>