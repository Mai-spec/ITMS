<?php

require $_SERVER['DOCUMENT_ROOT']."/ITMS/Business_Service_Layer/Model_Package/booking_Model.php";

class booking_Controller{
    public $name,$icnumber,$contact,$person,$date;
    
    function insert(){
        $booking = new booking_Model();
        $booking->name = $_POST['name'];
        $booking->icnumber = (isset($_POST['icnumber']) ? $_POST['icnumber'] : ''); 
        $booking->contact = $_POST['contact'];
        $booking->person = $_POST['person'];
        $booking->date = (isset($_POST['date']) ?$_POST['date']: '');
        $stmt = $booking->book();
        if($stmt > 0){
            $message = "Booking Successful!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../ITMS/Homepage.php';</script>";
        }
        else{
            $message = "Booking fail! Please Try Again";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../ITMS/Homepage.php';</script>";
           
    }
}
}

?>