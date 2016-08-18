<?php
session_start();
if (isset($_SESSION["goodCredentials"])) {
    include "config.php";


    $query2 = "SELECT * FROM sales";
    $result2 = mysqli_query($con, $query2);

    $nameNow = $_SESSION["username"];


    require('html_table.php');

    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);

    $html = ' <table border="1">
<tr>
<td width="300" height="30" bgcolor="#16A085">Username</td><td width="300" height="30" bgcolor="#16A085">Product ID</td>
</tr></br>';




   /* echo "<div id=\"contentPanel\">

    <h1>Your Summary</h1></br>

    You Ordered:";

    echo "</br>";*/

    while ($row = mysqli_fetch_array($result2)) {

        $uname = $row['username'];
        $pid = $row['productID'];
        $amo = $row['Amount'];


        if ($uname == $nameNow) {

            $html .= "<tr>
<td width=\"300\" height=\"30\"> " . $uname . "</td><td width=\"300\" height=\"30\" bgcolor=\"#D0D0FF\">" . $pid . "</td>
</tr>";


            /*echo "$pid";
            echo "</br>";
            echo "$amo";*/
            $query4 = "UPDATE products SET Amount = Amount - $amo WHERE productID = $pid";
            $_result4 = mysqli_query($con, $query4);
            $query3 = "INSERT INTO tracking (username, productID, amount) VALUES ('$uname', '$pid','$amo')";
            $_result3 = mysqli_query($con, $query3);

        }

    }

    $html = $html . "</table>";

    $pdf->WriteHTML($html);
    $pdf->Output();




    $query4 = "DELETE FROM sales WHERE username='$nameNow'";
    $result4 = mysqli_query($con, $query4);


    /*header('Location: ShoppingCart.php');*/




}

?>





