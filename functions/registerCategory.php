<?php 

require 'config.php';

//validation

if(empty($name)){
    echo 'Name is required';
}



elseif(empty($description)){
    echo 'description is required';
}




    
//register user

$sql = "INSERT INTO house_category(name,description) VALUES('$name','$description')";

//execute query
$result = mysqli_query($conn, $sql);

//check 
if(!$result){

    echo 'Failed to register user';
} else{

    echo 'category registered successfully';
    
    //redirect to login page
   header("Location: ../dashboard.php");
}








}





?>