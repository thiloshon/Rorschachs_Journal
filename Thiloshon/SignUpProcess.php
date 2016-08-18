<?php


$name = $_GET["login-name"];
$username = $_GET["login-username"];
$email = $_GET["login-email"];
$pass = $_GET["login-pass"];

include "config.php";

$query2 = "INSERT INTO users (username, password, name1, mail) VALUES ('$username', '$pass','$name','$email')";
$_result2 = mysqli_query($con, $query2);
header('Location: ShoppingCart.php');
