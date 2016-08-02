<?php
/**
 * Created by PhpStorm.
 * User: Thiloshon
 * Date: 01-Aug-16
 * Time: 7:01 PM
 */
?>

<!DOCTYPE html>
<html lang="en" xmlns:width="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>THE film CART</title>
    <link rel="stylesheet" href="css/cart_Interface.css">

    <!--<link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/googleapi.css">-->

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <Link type="text/css" rel="stylesheet" href="css/customMaterialize.css">
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style2.css"> <!-- Resource style -->
    <script src="js/tabs/modernizr.js"></script> <!-- Modernizr -->

</head>
<body>


<header role="banner" id="fh5co-header">
    <div class="containerOuter" id="containerOuter">
        <!-- <div class="row"> -->


        <div id="navbar-header" class="navbar-header">
            <img src="images/Logo.png" alt="Movie Hub" style="width:136px;height:100px;">

            <!--<a id="navbar-brand" class="navbar-brand" href="MainPage.html">The Film Cart</a>-->
        </div>


        <div id="searchbox" class="z-depth-4">

            <nav>
                <div class="nav-wrapper">
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" value="Search for any products">
                            <label for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
            </nav>

        </div>


        <div id="login" class="Login">
            <a class="login" href="#">Login/Profile</a>
        </div>


        <!-- </div> -->
    </div>

</header>

<!--<div class="behind">
    <img src="images/collage-copy.jpg" id="image" class="behind" alt="Movie Hub" style="width:1550px;height:750px;" >
</div>-->

<section id="body">


    <div class="gradient"></div>
    <div class="slant"></div>

    <div class="gradient"></div>
    <div class="slant"></div>

    <div>

        <div id="sidebar">

            <!--<div id="legion">
                <div class="row demo-samples">
                    <div class="col-xs-4">
                        <div class="todo">
                            <div class="todo-search">
The Legion

&lt;!&ndash;<input class="todo-search-field" type="search" value="" placeholder="Search" />&ndash;&gt;
                            </div>


                            <div class="todo-checkout">
END
                            </div>
                        </div>&lt;!&ndash; /.todo &ndash;&gt;
                    </div>&lt;!&ndash; /.col-xs-4 &ndash;&gt;
                </div>
            </div>-->
            <div id="cart">
                <div class="row demo-samples">
                    <div class="col-xs-4">
                        <div class="todo">
                            <div class="todo-search">
                                Shopping Cart

                                <!--<input class="todo-search-field" type="search" value="" placeholder="Search" />-->
                            </div>
                            <ul>
                                <li class="todo-done">
                                    <div class="todo-icon fui-user"></div>
                                    <div class="todo-content">
                                        <h4 class="todo-name">
                                            Meet <strong>Adrian</strong> at <strong>6pm</strong>
                                        </h4>
                                        Times Square
                                    </div>
                                </li>
                                <li>
                                    <div class="todo-icon fui-list"></div>
                                    <div class="todo-content">
                                        <h4 class="todo-name">
                                            Chat with <strong>V.Kudinov</strong>
                                        </h4>
                                        Skype
                                    </div>
                                </li>
                                <li>
                                    <div class="todo-icon fui-eye"></div>
                                    <div class="todo-content">
                                        <h4 class="todo-name">
                                            Watch <strong>Iron Man</strong>
                                        </h4>
                                        1998
                                    </div>
                                </li>
                                <li>
                                    <div class="todo-icon fui-time"></div>
                                    <div class="todo-content">
                                        <h4 class="todo-name">
                                            Fix bug on a <strong>Website</strong>
                                        </h4>
                                        As soon as possible
                                    </div>
                                </li>

                            </ul>
                            <div class="todo-checkout">
                                Checkout Now
                            </div>
                        </div><!-- /.todo -->
                    </div><!-- /.col-xs-4 -->
                </div>
            </div>
        </div>
        <div id="body-outer">

            <div id="body-inner">
                <div id="shop_main_title">
                    <!--<div id="prod_name">
    DVDs
                    </div>
                    <div id="sort">
    sort here
</div>-->

                </div>
                <section id="products">


                    <div class="cd-tabs">
                        <nav>
                            <ul class="cd-tabs-navigation">
                                <li><a data-content="inbox" class="selected" href="#0">DVDs</a></li>
                                <li><a data-content="new" href="#0">Cosplay</a></li>
                                <li><a data-content="gallery" href="#0">Souvenir</a></li>


                            </ul> <!-- cd-tabs-navigation -->
                        </nav>

                        <ul class="cd-tabs-content">
                            <li data-content="inbox" class="selected">

                                <div id="can">
                                    <div class="ddd" id="ddd">
                                        <img src="images/batman-vs-superman-poster-alfred.jpg" alt="Movie Hub" class="z-depth-5" style="width:270px;height:400px;">

                                    </div>
                                    <div>
                                        <div id="text">
                                            </br>
                                            <p>Batman vs Superman</br>  Price: 99$</p>

                                        </div>
                                        
                                        <div id="addCart"><p>Add to Cart</p></br><i id="addCartIcon" class="material-icons">shopping_cart</i></div>

                                    </div>


                                </div>

                                <div id="can">
                                    <div class="ddd" id="ddd">
                                        <img src="images/inception.jpg" alt="Movie Hub" class="z-depth-5" style="width:270px;height:400px;">
                                    </div>
                                    <div>
                                        <div id="text">
                                            </br>
                                            <p>Inception</br>  Price: 99$</p>
                                        </div>
                                        <div id="addCart"><p>Add to Cart</p></div>
                                    </div>


                                </div>

                                <div id="can">
                                    <div class="ddd" id="ddd">
                                        <img src="images/inglorious.jpg" alt="Movie Hub" class="z-depth-5" style="width:270px;height:400px;">
                                    </div>
                                    <div>
                                        <div id="text">
                                            </br>
                                            <p>Inglorious Bastards</br>  Price: 99$</p>
                                        </div>
                                        <div id="addCart"><p>Add to Cart</p></div>
                                    </div>


                                </div>

                                <div id="can2">
                                    <div class="ddd" id="ddd">
                                        <img src="images/drive-movie-poster.jpeg" alt="Movie Hub" style="height:400px;"
                                             class="z-depth-5">
                                    </div>
                                    <div>
                                        <div id="text">
                                            </br>
                                            <p>Drive</br>  Price: 99$</p>
                                        </div>
                                        <div id="addCart"><p>Add to Cart</p></div>
                                    </div>


                                </div>



                                <div id="can">
                                    <div class="ddd" id="ddd">
                                        <img src="images/enemy%2001.jpg" alt="Movie Hub" class="z-depth-5" style="width:270px;height:400px;">

                                    </div>
                                    <div>
                                        <div id="text">
                                            </br>
                                            <p>Enemy</br>  Price: 99$</p>
                                        </div>
                                        <div id="addCart"><p>Add to Cart</p></div>
                                    </div>


                                </div>

                                <div id="can">
                                    <div class="ddd" id="ddd">
                                        <img src="images/TheDarkKnightRises_TeaserPoster.jpg" alt="Movie Hub" class="z-depth-5" style="width:270px;height:400px;">
                                    </div>
                                    <div>
                                        <div id="text">
                                            </br>
                                            <p>The Dark Knight Rises Extended Cut</br>  Price: 99$</p>
                                        </div>
                                        <div id="addCart"><p>Add to Cart</p></div>
                                    </div>


                                </div>

                            </li>


                            <li data-content="new">

                                    <?php
                                    include "config.php";
                                    $query = "select * from DVDs";
                                    $results = mysqli_query($con, $query);


                                    while ($row = mysqli_fetch_array($results)) {


                                        echo "<div id=\"can\">
                                    <div class=\"ddd\" id=\"ddd\">
                                        <img src=\"images/batman-vs-superman-poster-alfred.jpg\" alt=\"Movie Hub\" class=\"z-depth-4\" >
                                    </div>
                                    <div>
                                        <div id=\"text\">
                                            </br>
                                            <p >Batman vs Superman</p>
                                        </div>
                                        <div id=\"addCart\"><p>Add to Cart</p></div>
                                    </div>
                                    
                                    
                                    
                                </div> ";

                                        /*echo "<p> $row[Name]</p>";*/


                                    }


                                    ?>



                                <?php
                                include "config.php";
                                $query = "select * from DVDs";
                                $results = mysqli_query($con, $query);


                                while ($row = mysqli_fetch_array($results)) {


                                    echo "<div id=\"can\">
                                    <div class=\"ddd\" id=\"ddd\">
                                        <img src=\"images/batman-vs-superman-poster-alfred.jpg\" alt=\"Movie Hub\" class=\"z-depth-4\" >
                                    </div>
                                    <div>
                                        <div id=\"text\">
                                            </br>
                                            <p >Batman vs Superman</p>
                                        </div>
                                        <div id=\"addCart\"><p>Add to Cart</p></div>
                                    </div>
                                    
                                    
                                    
                                </div> ";

                                    /*echo "<p> $row[Name]</p>";*/


                                }


                                ?>


                            </li>


                            <li data-content="gallery">






                            </li>

                            <li data-content="store">
                            </li>

                            <li data-content="settings">
                            </li>

                            <li data-content="trash">
                            </li>
                        </ul> <!-- cd-tabs-content -->
                    </div> <!-- cd-tabs -->

                </section>
            </div>
            <div id="paging">
                <div id="page" class="pagify">

                    <ul id="pagification" class="pagination">
                        <li class="previous"><a href="#" class="fui-arrow-left"></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li class="next"><a href="#" class="fui-arrow-right"></a></li>
                    </ul>

                </div>
            </div>


        </div>
    </div>


</section>


</body>

<script src="js/jquery.min.js"></script>
<script src="js/application.js"></script>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/tabs/jquery-2.1.1.js"></script>
<script src="js/tabs/main.js"></script>

</html>