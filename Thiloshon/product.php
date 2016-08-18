<HTML>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>THE film CART</title>
    <link rel="stylesheet" href="css/header/flat-ui.min.css">



</head>
<body>
<?php
include "Header.php";
echo "<link rel=\"stylesheet\" href=\"css/product.css\">";
?>


<?php


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
    <div id=\"sidePanel\" class=\"sidePanel\">  
        
        <img src=\"" . $path . "\" alt=\"Movie Hub\" class=\"z-depth-5\" id=\"image\"
     style=\"width: 50%\">
        
    </div>
    <div id=\"contentPanel\">
        <div id=\"name3\">
            " . $name1 . "
        </div>
        <div id=\"description\">
" . $des . "
        </div>
        <div id=\"remaining\">
        Remaining : 
" . $amount . "
        </div>
        <div id=\"price\">
        Price: 
" . $price . "
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

<!--<a href="ShoppingCart.php">Add to cart</a>-->


</body>

<script>
    function checkData() {

    }
</script>

</html>


<!--888888888888888888888888888888888-->


<div id="body" >
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
