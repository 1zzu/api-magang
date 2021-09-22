<?php

//username, host, dll
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "project_pkl";

    $db = new mysqli($servername, $username, $password, $databasename);
    
    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if(!$conn){
        die("koneksi gagal");
    }
?>