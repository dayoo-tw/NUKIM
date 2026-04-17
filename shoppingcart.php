<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>購物車</title>
</head>
<body>

<h2>購物車內容</h2>

<table border="1">
<tr>
    <th>商品名稱</th>
    <th>操作</th>
</tr>

<?php
if(isset($_COOKIE["cart"])) {
    $cart = unserialize($_COOKIE["cart"]);

    foreach($cart as $index => $item) {
        echo "<tr>";
        echo "<td>$item</td>";
        echo "<td><a href='delete.php?id=$index'>刪除</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>購物車是空的</td></tr>";
}
?>

</table>

<br>
<a href="catalog.php">繼續購物</a>

</body>
</html>