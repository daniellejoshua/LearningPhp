<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once "../database.php";
    require_once "../Classes/Signup.php";

    $signup = new Signup($username,$password);
    $signup -> signupUser();
}
