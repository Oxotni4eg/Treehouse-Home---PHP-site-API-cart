<?php
require_once ('header.php');
require_once ('functions.php');
?>
    <div class="container">
        <h1 class="headerCart">Ваша корзина</h1>
        <?php showCartProducts(); ?>
        <p class="summ">Общая сумма заказа: <?php showCartPrice(); ?> $</p>
    </div>

<?php
require_once ('footer.php');
?>