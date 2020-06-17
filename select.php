<?php

$pdo = new PDO('sqlite:hoges.sqlite3');

// SQL実行時にもエラーの代わりに例外を投げるように設定
// (毎回if文を書く必要がなくなる)
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 // デフォルトのフェッチモードを連想配列形式に設定 
// (毎回PDO::FETCH_ASSOCを指定する必要が無くなる)
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT * FROM hoges");

$stmt->execute();

$result = $stmt->fetchAll();
echo json_encode($result , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);