<?php 
/* *
    *using mysqli_connect for database connection 
    */ 

    $databaseHost = "localhost";
    $databaseName = "test";
    $databaseUsername = "root";
    $databasePassword = "";

    $koneksi = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName) or die(mysqli_error($koneksi));

    if (mysqli_connect_errno()) {
        printf("something went wrong: %s\n",mysqli_connect_error());
        exit();
    }
?>