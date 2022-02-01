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
<h2> <?php echo $product[title] ?></h2>
<h3><?php echo $product[price] ?> руб.</h3>
<img src="<?php echo $product[image] ?>" >
<p><?php echo $product[description] ?></p>
    </main>

<footer>
    <span>2022 &copy;</span>
</footer>
    
</body>
</html>