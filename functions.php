<?php

function getProducts() {
    $ch = curl_init();

    $options = [
    CURLOPT_URL => "https://fakestoreapi.com/products",
    CURLOPT_RETURNTRANSFER => true
    ];

    curl_setopt_array($ch, $options);

    $result = curl_exec($ch);

    $errors = curl_errno($ch);

    if ($errors) {
        echo 'Errors (' . $errors . '): ' . curl_error($ch);
        } else {
        return json_decode($result, true);
    }
}

function showProducts() {
    $data = getProducts();
    $html = '';

    foreach($data as $product) {
        $html .= '
            <div class="product">
                <img src="' . $product['image'] . '" alt="' . $product['title'] . '" />
                <h3>' . $product['title'] . '</h3>
                <div class="product_price">$ ' . $product['price'] . '</div>
                <div><button class="btn_cart" id="'. $product['id'] .'">Add to cart</button></div>
            </div>
            ';
    }

    if (!empty($html)) echo '<div class="products_list">' . $html . '</div>';
}

function showCartProducts() {
    $data = getProducts();
    $html = '';
    $dataId = $_COOKIE;

    foreach ($dataId as $productId => $count) {

        $index = ((int)$productId)-1;
        if ($index < 0) continue;

        if (!empty($data[$index])) {

            $html .= '
            <div class="product" id="'. $data[$index]['id'] .'">
                <img src="' . $data[$index]['image'] . '" alt="' . $data[$index]['title'] . '" />
                <h3>' . $data[$index]['title'] . '</h3>
                <div class="product_price">$ ' . $data[$index]['price'] . '</div>  
                <p>Количество = '. $count . '</p> 
                <div><button class="minus">-</button><button class="plus">+</button></div>
                <div><button class="delete">Удалить товар</button></div>             
            </div>
            ';

        }
    }
    if (!empty($html)) {
        echo '<div class="products_list">' . $html . '</div>';
    } else {
        echo '<h2>Ваша корзина пуста</h2>';
    }
}

function showCartPrice() {
    $data = getProducts();
    $dataId = $_COOKIE;
    $cartPrice = 0;

    foreach ($dataId as $productId => $count) {

        $index = ((int)$productId)-1;
        if ($index < 0) continue;

        if (!empty($data[$index])) {
            $cartPrice += ((float)($data[$index]['price']) * $count);
        }
    }

    echo $cartPrice;
}

