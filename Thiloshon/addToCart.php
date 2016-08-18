<HTML>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>THE film CART</title>
    <link rel="stylesheet" href="css/header/flat-ui.min.css" >
    <link rel="stylesheet" href="css/addToCart.css" >


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

            <h1 id="heading" >
                Shopping Cart
            </h1>
            <h4 id="snippet">
                Add Products to the cart
            </h4>

        </div>
        <div id="bottom">
            <form id="addToCart" method="get" action="process.php">

                Choose Product:

                <select name="product" id="product" class="select">
                    <option value="1"> <pre>Batman vs Superman</pre></br></option>
                    <option value="2">Inception<span></span></option>
                    <option value="3">The Dark Knight Rises <span></span></option>
                    <option value="4">Drive<span></span></option>
                    <option value="5"> Enemy</br></option>
                    <option value="6">Inglorious Bastards<span></span></option>
                    <option value="7">Assasin's Creed Costume <span></span></option>
                    <option value="8">                        Darth Vader Mask<span></span></option>
                    <option value="9"> Skyrim Sword</br></option>
                    <option value="10">Wolverine Blade<span></span></option>
                    <option value="11">500$ Gift Voucher <span></span></option>
                    <option value="12">1000$ Gift Voucher<span></span></option>
                    <option value="13">1500$ Gift Voucher<span></span></option>
                </select>
                </br>
                </br>

                Choose Number:
                <select name="number" id="number">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                </br>
                </br>
                </br>

                <input type="submit" value="Add to cart">

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
