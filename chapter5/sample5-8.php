<!DOCTYPE html>
<html>
<head>
    <title>フォームサンプル（2）</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>入力された値</h1>
    <table>
        <tr>
            <th>名前：</th>
            <td><?php echo $_POST["name"]; ?></td>
        </tr>
        <tr>
            <th>性別：</th>
            <td><?php echo $_POST["sex"]; ?></td>
        </tr>
    </table>
    <a href="sample5-8.html">入力フォームに戻る</a>
</body>
</html>