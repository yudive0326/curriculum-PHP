<?php

//count（要素の数を数える）
$members = ["satou","hayashi","tanaka", "sasaki", "kimura", "yoshida", "uchida"];
echo count($members);
echo '<br>';
//
$members = ["satou","hayashi","tanaka", "sasaki", "kimura", "yoshida", "uchida"];
sort($members);
var_dump($members);
echo '<br>';
//
$numbers = [5,16,26, 35, 17, 67, 45];
sort($numbers);
var_dump($numbers);
echo '<br>';
//
$members = ["satou","hayashi","tanaka", "sasaki", "kimura", "yoshida", "uchida"];
if (in_array("hayashi", $members)) {
    echo "林さんがいるよ！";
} else {
    echo "林さんはいないよ！";
}
echo '<br>';
//
$members = ["satou","hayashi","tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo '<br>';
//
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);

$re_members = explode("@", $atstr);
var_dump($re_members);
echo '<br>';
//
$str = "1,2,3,4,5,6,7";
$array = explode(",",$str);
var_dump($array);
