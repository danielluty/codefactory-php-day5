<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "techstore";

$conn = mysqli_connect(hostname: $host, username: $user, password: $password, database: $database);

if(!$conn){
    die("Connection failed");
}
