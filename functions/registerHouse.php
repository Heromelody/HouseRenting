<?php 

require 'config.php';


if(isset($_POST['regBtn'])){


    //get data
    $house_number = $_POST['house_number'];
    $landlord_id = $_POST['landlord_id'];
    $location_id = $_POST['location_id'];

    //validation

    if(empty($house_number)){
        echo 'House Number is required';
    }

    else if(empty($landlord_id)){
        echo 'Select Landlord';
    }

    else if(empty($location_id)){

        echo 'Add House Location';
    }

    else{

        //insert query
        $sql = "INSERT INTO property(house_number,landlord_id,location_id) VALUES('$house_number','$landlord_id','$location_id')";

        //execute query
        $result = mysqli_query($conn,$sql);

        if(!$result){

            echo 'Fail to insert data to database';
        }

        else{
            echo 'Property saved successfully';

            header("Location: ../viewHouse.php");
        }
    }





}


?>