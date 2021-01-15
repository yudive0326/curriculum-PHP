<?php

date_default_timezone_set('Asia/Tokyo');
$time = intval(date('H'));
echo '今' . $time . '時台です';
echo '<br>';
if (4 <= $time && $time <= 12) {  
    echo 'おはようございます';
 } elseif (13 <= $time && $time <= 20) {  
    echo 'こんにちわ';
 } else {  
    echo 'こんばんわ';
 } 
 ?>



