<?php

mb_internal_encoding("utf8");
session_start();

if(empty($_POST['from_mypage'])){
   header("Location:login_error.php");
}
?>

<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel = "stylesheet" type = "text/css" href = "mypage_hensyu.css">
    </head>

    <body>
        <header>
            <img src ="4eachblog_logo.jpg">
            <div class = "logout"><a href = "log_out.php">ログアウト</a></div>
        </header>
        
        <main>
            <div class ="confirm">
            <h2>会員情報</h2>
                <div class = "title">
                    <?php echo "こんにちは！ ".$_SESSION['name']."さん"; ?>
                </div>
                <div class = profile>
                <form action = "mypage_update.php" method = "post">
                    <div class = "profile_pic">
                        <img src ="<?php echo $_SESSION['picture']; ?>">
                    </div>
                    <div class = "list">
                        <p>氏名：<input type = "text" size = "30" value = "<?php echo $_SESSION['name'];?>" name = "name"></p>
                        <p>メール：<input type = "text" size = "30" value = "<?php echo $_SESSION['mail'];?>" name = "mail"></p>
                        <p>パスワード：<input type = "text" size = "30" value = "<?php echo $_SESSION['password'];?>" name = "password"></p>
                    </div>
                </div>                 
                <div class = "comments">
                    <textarea rows = "5" cols = "122" name ="comments"><?php echo $_SESSION['comments'];?></textarea>
                </div>
                <div class = "button">
                    <input type = "submit" class = "button1" value = "この内容に変更する" />
                </form>
                </div>
            </div>
        </main>
        
        <footer>
            © 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>