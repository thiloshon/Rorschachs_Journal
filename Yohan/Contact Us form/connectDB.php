<?php
//set up the database security
    $host = "localhost";
    $dbuser = "customer";
    $dbpass = "";
    $dbase = "rorschachs journal";

//connect to the database server
    $conn = mysqli_connect($host, $dbuser, $dbpass);
    if (!$conn) {
        die("Connection to the database server failed");
    }

//connect to the database
    $dbconn = mysqli_select_db($conn, $dbase);
    if (!$dbconn) {
        die("Connection to the database failed");
    }

//getting all the form details
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['ratings'];
    $comment = $_POST['comments'];

//sql query to insert data into the database
    $select = "INSERT INTO commentsdb(Full_Name, Email, Rating, Comment) VALUES($name,$email,$rating,$comment)";
    if ($sql = mysqli_query($conn,$select)){
        echo "name : $name , mail : $email , rating : $rating , comment : $comment";
        mysqli_close($conn);
        echo "Successfully sent!";
    }else{
        echo "Sending failed!";
    }

//displaying appropiate messages whether data is stored properly
    //echo '<h1 align="center">'.$msg.'</h1>';

?>