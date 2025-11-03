<?php 



$db_server = "mysql"; 
$db_user = "root";
$db_pass = "rootpassword"; 
$db_name = "LearningSql"; 

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}




?>