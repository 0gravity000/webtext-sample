<?php
    // フォームに入力された内容を取得する
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    // ユーザ名とパスワードを確認する
    if(strcmp($user,'satou') == 0 && strcmp($pass, 'webtext') == 0) {
        // ユーザ名とパスワードが正しい場合
        setcookie("user", $user);
        setcookie("pass", $pass);
        header('Location: item_list.php');
    } else {
        // ユーザ名とパスワードが誤っている場合
        header('Location: login_failed.html');
    }
?>
