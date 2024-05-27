<?php 

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'hr';

//make connection
$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn)
{
    echo 'No database connection';
}
else{
    //echo 'Successfully connected to database';
}


?>