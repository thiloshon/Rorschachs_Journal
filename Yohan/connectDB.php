<?php
//set up the database security
    $host = "localhost";
    $dbuser = "root";
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



?>