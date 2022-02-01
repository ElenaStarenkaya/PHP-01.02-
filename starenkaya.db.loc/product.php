<?php

include('./functions.php');

$mysqli = mysqli_connect("localhost", "root", "", "starenkaya_shop");

$id = mysqli_escape_string($mysqli, $_GET[id]);

$query = "SELECT * FROM `product` WHERE id = " . $id;
$result = mysqli_query($mysqli, $query);

$product = mysqli_fetch_assoc($result);

$template = get_template('./templates/goods.php', ["product" => $product]);

echo ($template);