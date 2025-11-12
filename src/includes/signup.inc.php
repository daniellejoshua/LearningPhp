<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $age = $_POST["age"];



    require_once "../database.php";
    require_once "../Classes/Signup.php";


    



    $signup = new Signup($username,$password,$email,$age);
    $signup -> signupUser();
}
