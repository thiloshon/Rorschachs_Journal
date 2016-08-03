<?php
/**
 * Created by PhpStorm.
 * User: Thiloshon
 * Date: 03-Aug-16
 * Time: 2:47 AM
 */

session_start();

$item = $_GET["username"];
$item2 = $_GET["password"];
include "config.php";

$query2 = "SELECT * FROM users";
$result2 = mysqli_query($con, $query2);

while($row = mysqli_fetch_array($result2)) {


    if ($row['username'] == $item) {
        if ($row['password'] == $item2) {
            mysqli_close($con);
            $_SESSION["username"] = $item;
            $_SESSION["password"] = $item2;
            $_SESSION["goodCredentials"] = true;

        }

    }
    header('Location: process.php');


}


