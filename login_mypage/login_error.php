<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UFT-8">
    <title>ログイン画面</title>
    <link rel = "stylesheet" type = "text/css" href = "login.css">
</head>

<body>
    <header>
        <img src ="4eachblog_logo.jpg">
        <div class = "login"><a href = "login.php">ログイン</a></div>
    </header>

    <main>
        <form action = "mypage.php" method = "post">
            <div class = "error_massage">
                <label>メールアドレスまたはパスワードが間違っています。</label>
            </div>
            <div class = "form_constents">
                <div class = "mail">
                    <label>メールアドレス</label><br>
                    <input type = "text" class = "formbox" size = "60" name = "mail">
                </div>
                <div class = "password">
                    <label>パスワード</label><br>
                    <input type = "password" class = "formbox" size = "60" name = "password">
                </div>
                <div class = "button">
                    <input type ="submit" class = "submit_button" size = "35" value = "ログイン">
                </div>
            </div>
        </form>
    </main>

    <footer>
        © 2018 InterNous.inc. All rights reserved
    </footer>

</body>
</html>