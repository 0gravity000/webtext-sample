<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel=stylesheet type="text/css" href="../pentomino.css">
    <title>ピザ・ペントミノ - 商品一覧</title>
</head>
<body>


<div align="center">
    <h1>satou さん、お好きなピザを選んでください</h1>

    <form action="item_list.html">
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
    
    <form action="login.html">
        <input type="submit" value="ログアウト" />
    </form>
</div>

</body>
</html>
