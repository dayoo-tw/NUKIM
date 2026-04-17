<?php
session_start();

$userID = $_POST['userID'];
$role = $_POST['role'];

// 設定 session
$_SESSION['userID'] = $userID;
$_SESSION['role'] = $role;

// 設定 cookie（保存1小時）
setcookie("userID", $userID, time() + 3600);

header("Location: dashboard.php");
exit();