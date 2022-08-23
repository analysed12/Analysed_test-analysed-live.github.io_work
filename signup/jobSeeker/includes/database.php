<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "analysed";

$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if(!$conn)
{
    Die("Database connection failed!!");
}


?>
