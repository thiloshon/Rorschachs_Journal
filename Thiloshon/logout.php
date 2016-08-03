<?php
/**
 * Created by PhpStorm.
 * User: Thiloshon
 * Date: 03-Aug-16
 * Time: 7:38 PM
 */


session_start();
session_destroy();

header('Location: ShoppingCart.php');
