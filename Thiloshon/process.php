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

if (isset($_SESSION["username"])){

    /*if ()*/

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

include "config.php";
$item = $_GET["product"];
echo $item;

?>

















