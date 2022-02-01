<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP shop</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
<h1>starenkaya_shop.loc</h1>
</header>
<main>
    <?php foreach($products as $product): ?>
<div id = "card">
    <img src="<?php echo $product[image] ?>" />
<a href="/product.php?id=<?php echo $product[id] ?>"><h2> <? echo $product[title] ?></h2></a>
<p><?php echo $product[price] ?>руб.</p>
</div>
    <?php endforeach; ?>
    </main>

<footer>
    <span>2022 &copy;</span>
</footer>
    
</body>
</html>