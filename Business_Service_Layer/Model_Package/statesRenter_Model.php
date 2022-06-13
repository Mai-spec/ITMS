<?php
require $_SERVER['DOCUMENT_ROOT']."/ITMS/Library/Database.php";

class statesRenter_Model{
  
    public $id,$name,$person,$image,$price,$amenities;
    
    function upload(){
            $query = "insert into airbnb(name, person, image, price, amenities) values(:name, :person, :image, :price, :amenities)";
            $param = [':name'=>$this->name,':person'=>$this->person, ':image'=>$this->image, ':price' => $this->price, ':amenities' => $this->amenities];
            $result = DB::run($query, $param);
            $cek = $result->rowCount();
            return $cek;

        }
    }

?>