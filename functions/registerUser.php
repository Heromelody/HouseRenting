<?php 

require 'config.php';

if(isset($_POST['register'])){
//get data

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

//-- phone number validation
$numberAsString = (string)$mobile; //convert number to string

$length = strlen($numberAsString); //count 


//validation

if(empty($name)){
    echo 'Name is required';
}

elseif(empty($email)){
    echo 'Email is required';
}

elseif(empty($mobile)){
    echo 'Mobile Number is required';
}

elseif(empty($password)){
    echo 'Password is required';
}



elseif($length > 10){
    echo 'Mobile Number is invalid';

} else{

    
//register user

$sql = "INSERT INTO users(name,email,mobile,password) VALUES('$name','$email','$mobile','$password')";

//execute query
$result = mysqli_query($conn, $sql);

//check 
if(!$result){

    echo 'Failed to register user';
} else{

    echo 'User registered successfully';
    //redirect to login page
   // header("location: ./login.php");
}








}

}




?>