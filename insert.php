<?php

$pdo = new PDO('sqlite:hoges.sqlite3');

// SQL実行時にもエラーの代わりに例外を投げるように設定
// (毎回if文を書く必要がなくなる)
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 // デフォルトのフェッチモードを連想配列形式に設定 
// (毎回PDO::FETCH_ASSOCを指定する必要が無くなる)
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql='INSERT INTO hoges(hoge_title) VALUES (?)';
$data = array($_GET['hoge']);
$stmt = $pdo->prepare($sql);

if($stmt->execute($data)){
    print '成功';
}else{
    print '失敗';
}