<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>登入系統</title>
</head>

<body>

<form action="auth.php" method="post">
    帳號：<input type="text" name="userID"><br>

    身分：
    <select name="role">
        <option value="student">學生</option>
        <option value="teacher">教師</option>
        <option value="admin">管理者</option>
    </select><br>

    <input type="submit" value="登入">
</form>

</body>
</html>