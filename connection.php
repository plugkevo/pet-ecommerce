<?php
$server="localhost";
$username="root";
$password="";
$database="ecommerce";

$conn= mysqli_connect($server, $username, $password, $database);
if($conn){
    //echo "Database connected successfully";
}
else
    echo"Not connected";
?>