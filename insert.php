<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>

<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<div class="logo"><img src="4eachblog_logo.jpg"> </div>


<!--ヘッダー-->

        <header>

                    <div class="head">

            <ul>
                <li><a href="http://localhost/4eachblog/index.html?" class="button">トップ</a></li>
                <li><a href="#" class="button">プロフィール</a></li>
                <li><a href="#" class="button">4eachについて</a></li>
                <li><a href="#" class="button">登録フォーム</a></li>
                <li><a href="http://localhost/contactform/index.html?" class="button">問い合わせ</a></li>
                <li><a href="http://localhost/4each_keijiban/index.php" class="button">掲示板</a></li>  
                <li><a href="#" class="button">その他</a></li>
            </ul>

            </div>

        </header>

    <h1>お問い合わせフォーム</h1>

    <div class="confirm">
        <p>お問い合わせ有り難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
        </p>
    </div>

<!--フッター-->

    <footer>
            <div class="bottom">copyright internous | 4each blog is the one which provides A to Z about programming.</div>
        </footer>

</body>
</html>