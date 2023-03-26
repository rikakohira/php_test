<?php

//パスワードを記録したファイルの場所
// echo __FILE__;
// /Applications/MAMP/htdocs/php_test/mainte/test.php

// echo '<br>';
//パスワード(暗号化)
// echo(password_hash('password123', PASSWORD_BCRYPT));

// ファイル丸ごと読み込む
$contactFile = '.contact.dat';
// $fileContents = file_get_contents($contactFile);

// ファイルに書き込む（上書き）
// file_put_contents($contactFile, 'テストです');

// 改行テキスト
// $addText = 'テストだよ' . "\n";

// ファイルに書き込む（追記）
// file_put_contents($contactFile, $addText, FILE_APPEND);

// echo $fileContents;



// テキストファイルを配列形式で読み込む
$allDate = file($contactFile);

foreach($allDate as $lineData){
  $lines = explode(',', $lineData);   // カンマで区切る
  echo $lines[0] . '<br>';
  echo $lines[1] . '<br>';
  echo $lines[2] . '<br>';
}