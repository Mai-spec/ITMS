<?php

require $_SERVER['DOCUMENT_ROOT']."/ITMS/Business_Service_Layer/Model_Package/statesRenter_Model.php";

class statesRenter_Controller{
    public $name,$person,$image,$price,$amenities;
    
    function insert(){
        $airbnb = new statesRenter_Model();
        $airbnb->name = $_POST['name'];
        $airbnb->person = $_POST['person']; 
        $airbnb->image = $_POST['image'];
        $airbnb->price = $_POST['price'];
        $airbnb->amenities = $_POST['amenities'];
        $stmt = $airbnb->upload();
        if($stmt > 0){
            $message = "Upload Successful!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../ITMS/statesRenter.php';</script>";
        }
        else{
            $message = "Upload fail! Please Try Again";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../ITMS/statesRenter.php';</script>";
           
    }
}
}

?>