<?php
include "Header.php";
echo "<link rel=\"stylesheet\" href=\"css/product.css\">";
?>

<?php
session_start();
if (isset($_SESSION["goodCredentials"])) {
    include "config.php";


    $query2 = "SELECT * FROM sales";
    $result2 = mysqli_query($con, $query2);

    $nameNow = $_SESSION["username"];


    echo "<div id=\"contentPanel\">

    <h1>Your Summary</h1></br>

    You Ordered:";

    echo "</br>";

    while ($row = mysqli_fetch_array($result2)) {

        $uname = $row['username'];
        $pid = $row['productID'];
        $amo = $row['Amount'];


        if ($uname == $nameNow) {
            echo"$pid";
            echo "</br>";
            echo"$amo";
            $query3 = "INSERT INTO tracking (username, productID, amount) VALUES ('$uname', '$pid','$amo')";
            $_result3 = mysqli_query($con, $query3);

        }

    }


    echo "</div>";



    $query4 = "DELETE FROM sales WHERE username='$nameNow'";
    $result4 = mysqli_query($con, $query4);








    /*header('Location: ShoppingCart.php');*/

}

?>

</br>



