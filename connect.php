<?php

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = '';

    $conn = mysqli_connect($host,$username,$password,$database);

    if($conn->connect_error){
        die("Connection Failed: " . $conn->conn_error);
    }

?>