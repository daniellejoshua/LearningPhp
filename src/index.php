<?php
include("database.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
        username: <input type="text" name="username"><br>
        email: <input type="password" name="email"><br>
        <input type="submit" name="reg">
    </form>
</body>
</html>
<?php 






try{
    if (!empty($_POST["username"]) && !empty($_POST["email"])){
    $username = $_POST["username"];
    $email = password_hash($_POST["email"],PASSWORD_BCRYPT);
    $query = "INSERT INTO users (username,email) values ('$username', '$email')";
mysqli_query($conn,$query);
echo "<h1>Thankyou</h1>";
} else{
    echo "Please complete the for first";
}

}catch(mysqli_sql_exception){
    echo"Error!!";
}

mysqli_close($conn);

?>