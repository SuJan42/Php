<?php

$server = "localhost";
$username = "root";
$password = '';
$db = "register";     

//create connection
$conn = mysqli_connect($server, $username, $password, $db);

//check connection  
if($conn -> connect_error){
    die("Failed connection : ".$conn->connect_error);
}
?>