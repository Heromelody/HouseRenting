<?php 

//session start
session_start();

require 'config.php';



if(isset($_POST['login'])){
//get data

$email = $_POST['email'];
$password = $_POST['password'];


//validation
if(empty($email)){
    echo 'Email is required';
}
elseif(empty($password)){
    echo 'Password is required';
} else{

    //login user

$sql = "SELECT * FROM users WHERE email ='$email' AND password ='$password'";
$result = mysqli_query($conn,$sql);

//check if user is registered
$row = mysqli_num_rows($result);


if(!$row){
 echo 'User not registered';
}
else{
    //echo 'Logged in successfully';

    //create session and redirect user to dashboard
    $_SESSION['email'] = $email;
    header("Location: ../dashboard.php");

}
}
}






?>