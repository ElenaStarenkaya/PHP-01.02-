<?php

include('./functions.php');

// $mysqli = new mysqli("localhost", "root", "", "starenkaya_shop");

$mysqli = mysqli_connect("localhost", "root", "", "starenkaya_shop");
// $query = "SELECT * FROM `product` WHERE `category_id` = 1";
$query = "SELECT * FROM `product`";

$result = mysqli_query($mysqli, $query);

// $row = mysqli_fetch_assoc($result);

$products = [];
$row = null;
while($row = mysqli_fetch_assoc($result)){
    $products[] = $row;
}

$template = get_template('./templates/main.php', ["products" => $products]);

echo ($template);