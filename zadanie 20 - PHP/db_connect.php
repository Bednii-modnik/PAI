<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "warehouse";

    $conn = mysqli_connect($host,$username,$password,$database);

    if($conn ->connect_error){
        die("Połączenie  nie powidło się: " . $conn -> connect_error);
    }
    echo "Połączenie powidło się";
?>