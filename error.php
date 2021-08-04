<?php
    header('Refresh: 5; url=contact.php');
    require_once('header.php');
?>

<div class="container">
    <h1>Вы ввели ошибку в вводе email или телефона! Проверьте введенные данные и повторите отправку формы!</h1>
    <p>Через 5 секунд вы будете перенаправлены в раздел Contact </p>
</div>

<?php

require_once('footer.php');

?>