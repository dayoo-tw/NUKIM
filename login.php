<?php
$fID = "user";
$fPWD = "0000";

if (isset($_POST["UID"]) && isset($_POST["uPWD"])) {
    $uID = $_POST["UID"];
    $uPWD = $_POST["uPWD"];

    if ($fID == $uID && $fPWD == $uPWD) {
        header("Location: success.php");
        exit();
    } else {
        echo "輸入錯誤！2 秒後返回登入頁...";
        header("Refresh: 2; url=login.html");
        exit();
    }
} else {
    header("Location: login.html");
    exit();
}
?>