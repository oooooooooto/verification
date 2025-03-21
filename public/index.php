<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題管理</title>
</head>
<body>
    <h2>課題登録フォーム</h2>
    <form action="save.php" method="post">
        <label>課題名: <input type="text" name="task" required></label><br>
        <label>締切日: <input type="date" name="deadline" required></label><br>
        <button type="submit">登録</button>
    </form>
    <br>
    <a href="list.php">課題一覧を見る</a>
</body>
</html>
