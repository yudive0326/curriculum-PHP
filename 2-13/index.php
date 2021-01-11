<?php
    // ceil（切り上げ）
    $x = 5.4;
    echo ceil($x);
    echo '<br>';

    
    // floor（切り捨て）
    $x = 5.2;
    echo floor($x);
    echo '<br>';

    // round（四捨五入）
    $x = 5.6;
    echo round($x);
    echo '<br>';

    // 半径が4の円の面積の計算
    echo pi();
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    circleArea(4);
    echo '<br>';

    // mt_rand（乱数）
    echo mt_rand(1, 500);
    echo '<br>';

    // strlen（文字列の長さ）
    $str = "hayashiyuuta";
    echo strlen($str);
    echo '<br>';

    // strpos（検索）
    $str = "hayashi";
    echo strpos($str, "y");
    echo '<br>';

    // substr（文字列の切り取り）
    $str = "hayashi";
    echo substr($str, -3, 3);
    echo '<br>';

    // str_replace（置換）
    $str = "hayashi";
    echo str_replace("haya", "HAYA", $str);
    echo '<br>';
    
    // printf（フォーマット化した文字列を出力）
    $name = "林さん";
    $limit_number = 20;
    printf("%sの残り時間はあと%dです", $name, $limit_number);
    echo '<br>';

     // sprintf（変数に代入できるprintf）
     $limit_hour = 5;
    $limit_minute = 10;
     $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
     echo $limit_time;
 
