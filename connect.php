<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "demo";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

    if($conn){
        mysqli_query($conn, "SET NAMES 'utf8'"); //tieng viet
    }else{
        echo "Thất bại! " .mysqli_connect_error();
    }
?>