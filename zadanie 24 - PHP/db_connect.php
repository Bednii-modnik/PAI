<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "gry_db";

    $conn = mysqli_connect($host,$username,$password,$database);

    if($conn -> connect_error){
        die("Połączenie się nie powidiodło!".$conn -> connect_error);
    }
?>