<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$murayama = $_POST["name"];

$kaitou1 = $_POST["A"];
$kaitou2 = $_POST["B"];
$kaitou3 = $_POST["C"];

$date1 = $_POST['kotae1'];
$date2 = $_POST['kotae2'];
$date3 = $_POST['kotae3'];


//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

function hiroyuki($kaitou, $date) {
    if($kaitou == $date){
        return '正解!';
    }else{
        return '残念・・・';
    }
}

?>

<p><?php echo $murayama; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php echo hiroyuki($kaitou1, $date1);?></p>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php echo hiroyuki($kaitou2, $date2);?></p>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php echo hiroyuki($kaitou3, $date3);?></p>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="index.css">
</head>