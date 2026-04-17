<?php
session_start();

// 檢查是否登入
if (!isset($_SESSION['userID'])) {
    echo "請先登入";
    exit();
}

echo "歡迎：" . $_SESSION['userID'] . "<br>";
echo "角色：" . $_SESSION['role'] . "<br>";

// 顯示 cookie
if (isset($_COOKIE['userID'])) {
    echo "Cookie中的ID：" . $_COOKIE['userID'] . "<br>";
}

// 角色權限控制
if ($_SESSION['role'] == "student") {
    echo "這是學生頁面內容<br>";
} elseif ($_SESSION['role'] == "teacher") {
    echo "這是教師頁面內容<br>";
} elseif ($_SESSION['role'] == "admin") {
    echo "這是管理者頁面內容<br>";
}

echo "<a href='logout.php'>登出</a><br>";
echo "<a href='delete_cookie.php'>刪除Cookie</a>";