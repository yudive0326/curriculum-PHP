<?php

//$dice = mt_rand(1, 6);
//$total += $dice;
//$kaisu++;

//この位置で回数をインクリメントしておく
$kaisu = 0;
    while ($total <= 40) {
    $kaisu++;
    echo '<br>';
//サイコロを用意
$dice = mt_rand(1, 6);
//合計にサイコロの出た数を代入する
$total += $dice;
//「◯◯回目=」と出力
echo $kaisu . '回目=' . $dice;
}
//「合計〇〇回目でゴールしました」と出力
echo '<br>';
echo '合計' . $kaisu . '回でゴールしました';

?>