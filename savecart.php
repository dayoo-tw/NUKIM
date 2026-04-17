<?php
session_start();

if(isset($_POST["product"])) {
    $product = $_POST["product"];

    // 存入 Session
    $_SESSION["product"] = $product;

    // 取得原有購物車（Cookie）
    if(isset($_COOKIE["cart"])) {
        $cart = unserialize($_COOKIE["cart"]);
    } else {
        $cart = array();
    }

    // 加入新商品
    $cart[] = $product;

    // 存回 Cookie（保存1小時）
    setcookie("cart", serialize($cart), time()+3600);
}

header("Location: shoppingcart.php");
exit();
?>