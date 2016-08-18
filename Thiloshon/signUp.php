<HTML>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>THE film CART</title>
    <link rel="stylesheet" href="css/header/flat-ui.min.css">
    <link rel="stylesheet" href="css/signUp.css">


</head>
<body>


<?php
include "Header.php";
?>
<div>
    <div id="sidePanel" class="sidePanel">

        <img id="image" src="images/gone.png" style="width: 80%">
    </div>
    <div id="contentPanel">
        <div id="top">

            <h1 id="heading">
                Sign Up
            </h1>
            <h4 id="snippet">
                Get Set Go!!!
            </h4>

        </div>
        <div id="bottom">
            <form id="addToCart" method="get" action="SignUpProcess.php">


                <input type="text" class="form-control login-field" value="" placeholder="Enter your name" id="login-name" name="login-name">
                </br>
                <input type="text" class="form-control login-field" value="" placeholder="Enter your Username" id="login-username" name="login-username">
                </br>
                <input type="email" class="form-control login-field" value="" placeholder="Email ID" id="login-email" name="login-email">
                </br>
                <input type="password" class="form-control login-field" value="" placeholder="Enter your Password" id="login-pass" name="login-pass">
                </br></br>

                <input type="submit" value="Sign Up" id="submit">
                </br></br>

            </form>

        </div>
    </div>
</div>


<!--<a href="ShoppingCart.php">Add to cart</a>-->


</body>


</html>
