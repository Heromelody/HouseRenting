<?php 

require 'config.php';


if(isset($_POST['submit'])){
//get data

$name = $_POST['name'];

$mobile = $_POST['mobile'];

//-- phone number validation
$numberAsString = (string)$mobile; //convert number to string

$length = strlen($numberAsString); //count 


//validation

if(empty($name)){
    echo 'Name is required';
}



elseif(empty($mobile)){
    echo 'Mobile Number is required';
}





elseif($length > 10){
    echo 'Mobile Number is invalid';

} else{

    
//register user

$sql = "INSERT INTO landlord(name,mobile) VALUES('$name','$mobile')";

//execute query
$result = mysqli_query($conn, $sql);

//check 
if(!$result){

    echo 'Failed to register user';
} else{

    echo 'Landlord registered successfully';
    
    //redirect to login page
   header("Location: ../viewLandlord.php");
}








}

}




?>