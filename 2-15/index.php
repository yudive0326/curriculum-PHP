<?php
echo date("Y-m-d H:i:s", time());
echo '<br>';

echo date("Y-m-d H:i:s", 1491980400);
echo '<br>';

echo date("Y年m月d日 H時i分s秒", time());
echo '<br>';

// 先週の日曜日
echo strtotime("last Sunday");
echo '<br>';

// 2日後
echo strtotime("+2 day");