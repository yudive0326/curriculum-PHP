<?php

$fruits = ["appleといったら" =>"りんご", "orangeといったら" => "みかん", "peachといったら" => "もも"];
foreach ($fruits as $key => $value) {
    echo $key;
    echo $value;
    echo '<br>';
}

echo '<br>';
echo "1.トランザクション"."<br>";
echo "商品を渡して、代金を受け取る、のように「ここからここまでワンセット」な処理単位のこと。"."<br>";
echo "2. 排他ロック"."<br>";
echo "ダブルブッキングしないようにすること。"."<br>";
echo "3.チューニング"."<br>";
echo "良い感じになるように、何かを調整すること"."<br>";
?>