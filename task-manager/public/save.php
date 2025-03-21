<?php
// 入力データを取得
$task = $_POST['task'];
$deadline = $_POST['deadline'];

// CSVファイルに保存
$file = '../data/tasks.csv';
$data = [$task, $deadline];
$fileHandle = fopen($file, 'a');
fputcsv($fileHandle, $data);
fclose($fileHandle);

// 登録完了メッセージを表示
echo "課題を登録しました。<br>";
echo "<a href='index.php'>戻る</a>";
?>
