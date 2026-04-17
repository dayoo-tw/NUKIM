<?php
if(isset($_GET["id"]) && isset($_COOKIE["cart"])) {

    $cart = unserialize($_COOKIE["cart"]);
    $id = $_GET["id"];

    // 刪除指定商品
    if(isset($cart[$id])) {
        unset($cart[$id]);
    }

    // 重新整理索引
    $cart = array_values($cart);

    // 存回 Cookie
    setcookie("cart", serialize($cart), time()+3600);
}

header("Location: shoppingcart.php");
exit();
?>