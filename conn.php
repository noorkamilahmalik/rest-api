<?php

    $server = "localhost";
    $username = "root";
    $password = "mysql";
    $database = "lat_restapi";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("koneksi gagal!!!");
    } 

?>