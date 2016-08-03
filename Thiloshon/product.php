<?php
/**
 * Created by PhpStorm.
 * User: Thiloshon
 * Date: 03-Aug-16
 * Time: 10:59 PM
 */

$name = $_GET["prod"];

include "config.php";

$query2 = "SELECT * FROM products";
$result2 = mysqli_query($con, $query2);

while ($row = mysqli_fetch_array($result2)) {


    if ($row['productID'] == $name) {
        $path = $row["imagePath"];
        $name1 = $row["name"];
        $des = $row["description"];
        $amount = $row["Amount"];
        $price = $row["price"];

        echo "
        
<div id=\"body\">
    <div id=\"image\">       
        
        <img src=\"".$path."\" alt=\"Movie Hub\" class=\"z-depth-5\"
     style=\"height:300px;\">
        
    </div>
    <div id=\"details\">
        <div id=\"name\">
            ".$name."
        </div>
        <div id=\"description\">
".$des."
        </div>
        <div id=\"remaining\">
".$amount."
        </div>
        <div id=\"price\">
".$price."
        </div>
        <div id=\"addtocart\">

        </div>
    </div>
</div>

        
        ";

    }


}

echo $name;
?>

<div id="body">
    <div id="image">


    </div>
    <div id="details">
        <div id="name">

        </div>
        <div id="description">

        </div>
        <div id="remaining">

        </div>
        <div id="price">

        </div>
        <div id="addtocart">

        </div>
    </div>
</div>
