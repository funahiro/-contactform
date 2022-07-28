<!doctype HTML>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
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


        <h1>お問い合わせ内容確認</h1>

        <div class="confirm">
            <p>お問い合わせ内容はこちらで宜しいでしょうか？
                <br>よろしければ「送信する」ボタンを押してください。
            </p>
            <p>名前
                <br>
                <?php echo $_POST['name']; ?>
            </p>

            <p>メールアドレス
                <br>
                <?php echo $_POST['mail']; ?>
            </p>

            <p>年齢
                <br>
                <?php echo $_POST ['age']."歳"; ?>
            </p>

            <p>コメント
                <br>
                <?php echo $_POST['comments']; ?>
            </p>

            <form action="index.html">
                <input type ="submit" class="button1" value="戻って修正する"/>
            </form>


            <form action="insert.php" method="post">
                <input type="submit" class="button2" value="登録する"/>
                <input type="hidden" value="<?php echo $_POST['name'];?>"name="name">
                <input type="hidden" value="<?php echo $_POST['mail'];?>"name="mail">
                <input type="hidden" value="<?php echo $_POST['age'];?>"name="age">
                <input type="hidden" value="<?php echo $_POST['comments'];?>"name="comments">
            </form>

        </div>

<!--フッター-->

        <footer>
            <div class="bottom">copyright internous | 4each blog is the one which provides A to Z about programming.</div>
        </footer>

    </body>
</html>

