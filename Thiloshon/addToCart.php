<?php
/**
 * Created by PhpStorm.
 * User: Thiloshon
 * Date: 02-Aug-16
 * Time: 7:29 PM
 */

?>
<!--Import Google Icon Font-->
<!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"-->
<!--Import materialize.css-->
<!--<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection"/>-->


<form id="addToCart" method="get" action="process.php">

    Choose Product:

    <select name="product" id="product">
        <option value="1000001">Batman vs Superman</option>
        <option value="1000002">Inception</option>
        <option value="1000003">Mercedes</option>
        <option value="1000004">Audi</option>
    </select>

    Choose Number:
    <select name="number" id="number">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>

    <input type="submit" value="Add to cart" >

</form>
    <!--<a href="ShoppingCart.php">Add to cart</a>-->

<script>
    function checkData() {
        
    }
</script>
<!--
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>-->
