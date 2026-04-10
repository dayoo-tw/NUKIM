<?php
$nName = $_POST["nName"] ?? "";
$nGender = $_POST["nGender"] ?? "未填寫";
$studentID = $_POST["studentID"] ?? "";
$nMail = $_POST["nMail"] ?? "";
$message = $_POST["message"] ?? "";
$nInstitute = $_POST["nInstitute"] ?? [];

$genderText = "";
switch ($nGender) {
    case "m":
        $genderText = "男";
        break;
    case "f":
        $genderText = "女";
        break;
    default:
        $genderText = "不願透露";
}

$schoolList = [];
foreach ($nInstitute as $item) {
    switch ($item) {
        case "nuk":
            $schoolList[] = "高雄大學";
            break;
        case "nukst":
            $schoolList[] = "高雄科大";
            break;
        case "nsysu":
            $schoolList[] = "中山大學";
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>報名結果</title>
</head>
<body>
    <h2>報名成功</h2>

    <?php
    echo "姓名：" . htmlspecialchars($nName) . "<br>";
    echo "性別：" . $genderText . "<br>";
    echo "學號：" . htmlspecialchars($studentID) . "<br>";
    echo "機構：" . implode("、", $schoolList) . "<br>";
    echo "Email：" . htmlspecialchars($nMail) . "<br>";
    echo "留言：" . nl2br(htmlspecialchars($message)) . "<br>";
    ?>
</body>
</html>