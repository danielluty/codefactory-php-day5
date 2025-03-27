<?php

require_once "./db.php";
$query = "SELECT * FROM `product`";

//go button 
$result = mysqli_query(mysql: $conn, query: $query);

// var to store a layout
$output = "";



while($row = mysqli_fetch_assoc(result: $result)) {
    $output .= "
    <div class='card'>
        <img src='{$row["image"]}'>
        <h3>{$row["name"]}</h3>
        <p>Price: 20€</p>
        <a href=''>details</a>
        <hr>
    </div>
    ";
} 

mysqli_close(mysql: $conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        All Products
    </h1>
    <hr>

</body>

</html>