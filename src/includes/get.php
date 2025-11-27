<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/src/includes/get.php" method="get">
        username:
        <input type="text" name="username">
           <input type="submit">
    </form>
</body>
</html>

<?php

$username = $_GET["username"];

