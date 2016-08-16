<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" href="css/materialize.min.css">
<link rel="stylesheet" href="css/customMaterialize2.css">

<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Compiled and minified JavaScript -->
<script src="js/materialize.min.js"></script>



<script>
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('#modal1').openModal();
    });
</script>





<?php
/**
 * Created by PhpStorm.
 * User: Thiloshon
 * Date: 03-Aug-16
 * Time: 1:22 AM
 */

session_start();




if (isset($_SESSION["goodCredentials"])){   /*Runs if the user is logged in and has valid sessiosn ids*/

    $_SESSION["currentProduct"] = $_GET["product"];
    $_SESSION["currentNumber"] = $_GET["number"];

    $_pass = $_SESSION["password"];
    $_name = $_SESSION["username"];


    include "config.php";
    $_query = "select * from users";
    $_result = mysqli_query($con, $_query);

    while($row = mysqli_fetch_array($_result)) {
        if ($row['username'] == $_SESSION["username"]) {
            echo "Good Credentials";


            $_prodID = $_GET["product"];
            $_amount = $_GET["number"];
            echo $_SESSION["currentProduct"];
            echo $_SESSION["currentNumber"];


            $query2 = "INSERT INTO sales (username, productID, Amount) VALUES ('$_name','$_prodID','$_amount')";
            $_result2 = mysqli_query($con, $query2);
            header('Location: cart.php');
        }

    }



    /*$value = mysqli_fetch_object($_result);
    if ($_name == $value->password){
        echo "Good Credentials";

        $_SESSION["currentProduct"] = $_GET["product"];
        $_SESSION["currentNumber"] = $_GET["number"];
        $_prodID = $_GET["product"];
        $_amount = $_GET["number"];
        echo $_SESSION["currentProduct"];
        echo $_SESSION["currentNumber"];


        $query2 = "INSERT INTO sales (username, productID, Amount) VALUES ('$name','$_prodID','$_amount')";
        /*header('Location: cart.php');

    }*/







}else{
    echo " <div id=\"modal1\" class=\"modal modal-fixed-footer\">
    <div class=\"modal-content\">
    </br>
        <h4>OOPS!!!</h4>
        <p>It Looks Like You have not Logged in, Please Log in to Add Products to Cart</p>
        </br></br>

        <div class=\"row\">
            <form class=\"col s12\" action=\"login.php\">
                <div class=\"row\">
                    <div class=\"input-field col s6\">
                        <i class=\"material-icons prefix\">account_circle</i>
                        <input id=\"username\" name=\"username\" type=\"text\" class=\"validate\">
                        <label for=\"icon_prefix\">User Name</label>
                    </div>
                    <div class=\"input-field col s6\">
                        <i class=\"material-icons prefix\">vpn_key</i>
                        <input id=\"password\" name=\"password\" type=\"password\" class=\"validate\">
                        <label for=\"password\">Password</label>
                    </div>
                </div>
                <input type=\"submit\" id=\"submit1\" class=\"modal-action modal-close waves-effect waves-green btn-flat \" value=\"Login\" >
            </form>
        </div>
        


    </div>

    
    
    
</div> ";
}