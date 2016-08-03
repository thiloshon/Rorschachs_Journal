<?php
/**
 * Created by PhpStorm.
 * User: Thiloshon
 * Date: 03-Aug-16
 * Time: 6:02 PM
 */

session_start();
if (isset($_SESSION["goodCredentials"])){
    include "config.php";

    $query2 = "SELECT * FROM sales";
    $result2 = mysqli_query($con, $query2);

    while($row = mysqli_fetch_array($result2)) {


        if ($row['username'] == $_SESSION["username"]) {

            echo $row['productID'];
            echo "</br>";
            echo $row['Amount'];
            echo "</br>";
            echo "</br>";

        }
        /*header('Location: process.php');*/


    }
}

?>



<form id="logout" method="get" action="logout.php">

    

    <input type="submit" value="Logout" >

</form>
