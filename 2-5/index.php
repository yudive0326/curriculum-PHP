<?php
$age = 22;

if ($age >= 20) {
    echo "お酒が飲めるぞ！";
} else {
    echo "お酒は二十歳になってから！";
}
$string = '1';
$int = 1;

if (1 === $string) {
  echo '変数stringはint型です。';
} else {
  echo '変数stringはstring型です。';
}
// 「変数stringはstring型です」が出力される

if (1 === $int) {
  echo '変数stringはint型です。';
} else {
  echo '変数stringはstring型です。';
}
// 「変数stringはint型です。」が出力される
?>