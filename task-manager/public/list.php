<?php
$file = '../data/tasks.csv';
if (!file_exists($file)) {
    echo "まだ課題が登録されていません。<br>";
    echo "<a href='index.php'>戻る</a>";
    exit;
}

echo "<h2>課題一覧</h2>";
echo "<table border='1'>";
echo "<tr><th>課題名</th><th>締切日</th></tr>";

// CSVファイルを読み込んで表示
$fileHandle = fopen($file, 'r');
while ($row = fgetcsv($fileHandle)) {
    echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td></tr>";
}
fclose($fileHandle);
echo "</table>";
echo "<br><a href='index.php'>戻る</a>";
?>
