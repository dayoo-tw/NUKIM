<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>商品目錄</title>
</head>
<body>

<h2>商品選購</h2>

<form method="post" action="savecart.php">
    <label>選擇商品：</label>
    <select name="product">
        <option value="蘋果">蘋果</option>
        <option value="香蕉">香蕉</option>
        <option value="橘子">橘子</option>
        <option value="芒果">芒果</option>
    </select>
    <br><br>
    <input type="submit" value="加入購物車">
</form>

<br>
<a href="shoppingcart.php">查看購物車</a>

</body>
</html>