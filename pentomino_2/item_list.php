<?php
    // キャッシュを無効にする
    header('Cache-Control: no-cache');
    
    // Cookieの内容を取得する
    $user = $_COOKIE['user'];
    $pass = $_COOKIE['pass'];
    
    // ユーザ名とパスワードを確認する
    if(strcmp($user, 'satou') != 0 || strcmp($pass, 'webtext') != 0) {
        // ユーザ名とパスワードが誤っている場合
        setcookie("user", "", time() - 3600);
        setcookie("pass", "", time() - 3600);
        header('Location: login_failed.html');
        exit();
    }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel=stylesheet type="text/css" href="../pentomino.css">
    <title>ピザ・ペントミノ - 商品一覧</title>
</head>
<body>


<div align="center">
    <h1><?php echo htmlspecialchars("$user") ?> さん、お好きなピザを選んでください</h1>

    <form action="item_list.php">
        <table class="menu" border="0" cellspacing="1">
        <tr>
            <th>商品</th>
            <th>価格</th>
        </tr>
        <tr>
            <td><input type="checkbox" />商品A</td>
            <td class="price">&yen;1,000</td>
        </tr>
        <tr>
            <td><input type="checkbox" />商品B</td>
            <td class="price">&yen;1,000</td>
        </tr>
        <tr>
            <td><input type="checkbox" />商品C</td>
            <td class="price">&yen;1,000</td>
        </tr>
        <tr>
            <td><input type="checkbox" />商品D</td>
            <td class="price">&yen;1,000</td>
        </tr>
        <tr>
            <td><input type="checkbox" />商品E</td>
            <td class="price">&yen;1,000</td>
        </tr>
        </table>
        <input type="submit" value="チェックした商品をカートに入れる" />
    </form>
    
    <form action="cart.html">
        <input type="submit" value="カートの内容を確認して注文へ進む" />
    </form>
    
    <form action="do_logout.php">
        <input type="submit" value="ログアウト" />
    </form>
</div>

</body>
</html>
