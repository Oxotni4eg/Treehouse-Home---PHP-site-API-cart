<?php

require_once('functions.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<meta http-equiv="Cache-Control" content="private">-->
    <title>Treehouse-Home</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/catalogStyle.css" />
    <script src="https://unpkg.com/cookielib/src/cookie.js"></script>
    <script defer src="js/scripts.js"></script>
</head>
<body>

<div class="container">
    <div class="cart">
        <img src="img/reload.png" alt="reload" class="reload">
        <a href="cart"><img src="img/cart.png" alt="cart"></a>
        <span class="sumInCart">0</span>
        <span>$ <?php showCartPrice(); ?></span>
    </div>
</div>

<header class="header">
    <div class="container">
    <a href="index.php"><img src="img/Logo.png" alt="#" /></a>
<?php

require_once('nav.php');

?>
    </div>
</header>