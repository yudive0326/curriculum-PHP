<?php
//POST送信で送られてきた名前を受け取って変数を作成
//「index.html」の「name」につけた名前が受け渡しのキーになるイメージ
$q = $_POST["q"];
//①画像を参考に問題文の選択肢の配列を作成してください。
$questions1 = ["80", "22", "20" , "21"];
$questions2 = ["PHP", "Python", "JAVA" , "HTML"];
$questions3 = ["join", "select", "insert" , "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer1 = $questions1[0];
$answer2 = $questions2[3];
$answer3 = $questions3[1];
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="index.css">
</head>

<p>お疲れ様です<?php echo $q; ?>さん</p>

<form action="answer.php" name="z" method="POST">


<h2>①ネットワークのポート番号は何番？</h2>
<?php foreach ($questions1 as $question) {?>
    <input type="radio" name="A" value="<?php echo $question;?>"><?php echo $question;?>
<?php }?>
<!-- 
<input type="radio" name="A" value="80">80
<input type="radio" name="B" value="22">22
<input type="radio" name="C" value="20">20
<input type="radio" name="D" value="21">21 
この４行をforeachを使って１行にまとめる-->

<h2>②Webページを作成するための言語は？</h2>
<?php foreach ($questions2 as $question) {?>
    <input type="radio" name="B" value="<?php echo $question;?>"><?php echo $question;?>
<?php }?>
<!--
<input type="radio" name="E" value="PHP">PHP
<input type="radio" name="F" value="Python">Python
<input type="radio" name="G" value="JAVA">JAVA
<input type="radio" name="H" value="HTML">HTML
-->
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php foreach ($questions3 as $question) {?>
    <input type="radio" name="C" value="<?php echo $question;?>"><?php echo $question;?>
<?php }?>
<!--
<input type="radio" name="I" value="join">join
<input type="radio" name="J" value="select">select
<input type="radio" name="K" value="insert">insert
<input type="radio" name="L" value="update">update
-->
    <br>
    <input type="hidden" name="name" value="<?php echo $q;?>">

    <input type="hidden" name="kotae1" value="<?php echo $answer1;?>">
    <input type="hidden" name="kotae2" value="<?php echo $answer2;?>"/>
    <input type="hidden" name="kotae3" value="<?php echo $answer3;?>"/> 
    <!--「value」は固定-->

      <input type="submit" value="回答する" />　
      
</form>
