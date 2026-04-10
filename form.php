<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>野外求生訓練營</title>
</head>
<body>
    <center><h1 style="color:red">～夏令營招生中～</h1></center>
    <center><h3 style="color:blue">主題：野外求生實地訓練</h3></center>
    <center>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHCIsb6ik1SjXdEA-AntTFm1-TsMya-VziKw&s" width="400" height="350">
    </center>

    <h2>活動資訊</h2>
    <ul>
        <li>活動日期：7月7日～7月12日</li>
        <li>紮營地點：<a href="https://gushan.kcg.gov.tw/cp.aspx?n=39AE8BE616DA2622" target="_blank">壽山國家公園</a></li>
        <li>報名費用：1680元</li>
    </ul>

    <font size="5">
        <a href="https://www.nuk.edu.tw" target="_blank">辦理單位：國立高雄大學</a>
    </font>

    <h3>費用表</h3>
    <table border="1" cellpadding="8">
        <tr>
            <th>學校</th><th>高雄大學</th><th>高雄科大</th><th>中山大學</th>
        </tr>
        <tr>
            <td>伙食費</td><td>350元</td><td>200元</td><td>200元</td>
        </tr>
        <tr>
            <td>交通費</td><td>350元</td><td>350元</td><td>350元</td>
        </tr>
        <tr>
            <td>住宿費</td><td>200元</td><td>350元</td><td>400元</td>
        </tr>
    </table>

    <br>
    <i style="color:gray">(備註：費用根據學校有所不同)</i>

    <hr width="60%">

    <h2>地圖</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.194830262942!2d120.262401!3d22.646523400000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e05da8f21e5b3%3A0x80c7f9c489b95fa7!2z5aO95bGx5ZyL5a626Ieq54S25YWs5ZySKOWjveWxseWckuWNgCk!5e0!3m2!1szh-TW!2stw!4v1774159530420!5m2!1szh-TW!2stw" width="450" height="300" style="border:0;" allowfullscreen loading="lazy"></iframe>

    <form action="result.php" method="POST">
        <h2>報名表單</h2>

        姓名：<input type="text" name="nName"><br><br>

        性別：
        女 <input type="radio" name="nGender" value="f">
        男 <input type="radio" name="nGender" value="m">
        不願透露 <input type="radio" name="nGender" value="no">
        <br><br>

        學號：<input type="text" name="studentID"><br><br>

        機構：
        NUK <input type="checkbox" name="nInstitute[]" value="nuk">
        NUKST <input type="checkbox" name="nInstitute[]" value="nukst">
        NSYSU <input type="checkbox" name="nInstitute[]" value="nsysu">
        <br><br>

        電子郵件：<input type="email" name="nMail"><br><br>

        你／妳想傳達的話：<br>
        <textarea name="message" rows="6" cols="50">你的意見對我們來說很重要！</textarea>
        <br><br>

        <input type="submit" value="送出報名表">
    </form>

    <hr width="97%">
    <center><font style="color:red"><b>※All Rights Reserved</b></font></center>
</body>
</html>