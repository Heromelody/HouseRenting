<?php 

require 'config.php';



if(isset($_POST['submit'])){
//get data

$city_name = $_POST['city_name'];
$description = $_POST['description'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];



//validation

if(empty($city_name)){
    echo 'city_Name is required';
}

elseif(empty($description)){
    echo 'description is required';
}

elseif(empty($longitude)){
    echo 'longitude is required';
}

elseif(empty($latitude)){
    echo 'latitude is required';
}





else{

    
//register user

$sql = "INSERT INTO location(city_name,description,longitude,latitude) VALUES('$city_name','$description','$longitude','$latitude')";

//execute query
$result = mysqli_query($conn, $sql);

//check 
if(!$result){

    echo 'Failed to register user';
} else{

    //echo 'User registered successfully';
    //redirect to login page
   header("Location: ../viewLocation.php");
}








}

}




?>