<HTML>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>THE film CART</title>
    <link rel="stylesheet" href="css/header/flat-ui.min.css">
    <link rel="stylesheet" href="css/addToCart.css">


    <script>
        $(document).ready(function () {
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('#modal1').openModal();
        });
    </script>


</head>
<body>


<?php
include "Header.php";
?>
<div>
    <div id="sidePanel" class="sidePanel">

        <img id="image2" src="images/joker.png" style="width: 75%">
    </div>
    <div id="contentPanel">
        <div id="top">


            <h1 id="headingVariant">Your</h1>
            <h1 id="heading2">
                Shopping Cart
            </h1>
            <h4 id="snippet">
                View Your Cart Here
            </h4>

        </div>
        <div id="bottom">
            <table id="table">
                <tr>
                    <th>Product ID</th>
                    <th>Amount</th>
                </tr>

                <?php
                /**
                 * Created by PhpStorm.
                 * User: Thiloshon
                 * Date: 03-Aug-16
                 * Time: 6:02 PM
                 */

                session_start();
                if (isset($_SESSION["goodCredentials"])) {
                    include "config.php";

                    $query2 = "SELECT * FROM sales";
                    $result2 = mysqli_query($con, $query2);

                    while ($row = mysqli_fetch_array($result2)) {
                        if ($row['username'] == $_SESSION["username"]) {
                            echo "<tr><td>";
                            echo $row['productID'];
                            /*echo "</br>";*/
                            echo "</td><td>";
                            echo $row['Amount'];
                            echo "</td></tr>";


                            /*echo "</br>";
                            echo "</br>";*/

                        }

                    }
                }

                ?>
            </table>
            </br>
            </br>

            <form id="checkout" method="get" action="checkOut.php">

                <input type="submit" value="Place Order ">

            </form>

            <form id="logout" method="get" action="logout.php">

                <input type="submit" value="Logout">

            </form>

        </div>
    </div>
</div>


<!--<a href="ShoppingCart.php">Add to cart</a>-->


</body>

<script>
    function checkData() {

    }
</script>

</html>















