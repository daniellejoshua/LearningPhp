<?php 



$db_server = "mysql"; 
$db_user = "user";
$db_pass = "userpassword"; 
$db_name = "businessdb"; 

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}

echo "You are connected";


?>