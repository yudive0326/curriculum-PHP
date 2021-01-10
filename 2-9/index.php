<?php
//1から100までの数を繰り返す
for ($i = 1; $i <= 100; $i++) {
    //3と5両方の倍数の（15の倍数）なら
    if ($i % 15 === 0) {
        echo 'FizzBuzz';
    //3の倍数なら
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
    //5の倍数なら
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
    } else {
        echo $i;
    }
    echo '<br>';
}

echo '<br>';
echo "1.パフォーマンス"."<br>";
echo "性能のこと。"."<br>";
echo "2.スロークエリ"."<br>";
echo "時間のかかっているSQL (遅いSQL)のこと。"."<br>";
echo "3.クエリログ"."<br>";
echo "クライアントからの MySQLサーバーへの接続・接続解除の情報、クライアントから実行されたSQLクエリを出力してくれるログ。"."<br>";
?>
