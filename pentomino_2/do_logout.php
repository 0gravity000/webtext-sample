<?php
    // Cookieを削除してログイン画面に戻る
    setcookie("user", "", time() - 3600);
    setcookie("pass", "", time() - 3600);
    header('Location: login.html');
?>
