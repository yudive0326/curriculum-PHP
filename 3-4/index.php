<?php
require_once("getData.php");

$data = new getData();
$userdata = $data->getUserData();
$postdata = $data->getPostData();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>３章チェックテスト</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
</head>
<body>
    <div class="wrapper clearfix"> 
        <img src="1599315827_logo.png" alt="" with="200" height="120" style="background-color:#add8e6">
        <div class="header clearfix">
            <div class="header-top">
                <div bgcolor="#87ceeb" align="right">ようこそ<?php echo $userdata['last_name'] . $userdata['first_name']?>さん</div>
            </div> 
            <div class="header-under">
                <div bgcolor="#87ceeb" align="right">最終ログイン日：<?php echo $userdata['last_login']?></div>
            </div> 
        </div> 
        <div class="contents">
        <table border="1" width="800" align="center" cellspacing="0" cellpadding="5" bordercolor="#ffffff">
        <tr bgcolor="#e0ffff">
        <th bgcolor="#87ceeb">記事ID</th>
        <th bgcolor="#87ceeb">タイトル</th>
        <th bgcolor="#87ceeb">カテゴリ</th>
        <th bgcolor="#87ceeb">本文</th>
        <th bgcolor="#87ceeb">投稿日</th>
        </tr>
        <?php 
        foreach ($postdata as $value) {?>
        <tr bgcolor="#e0ffff">
            <td><?php echo $value['id']?></td>
            <td><?php echo $value['title']?></td>
            <td>
                <?php
                if ($value['category_no'] == 1) {
                    echo '食事';
                } elseif ($value['category_no'] == 2) {
                    echo '旅行';
                }else {
                    echo 'その他';
                }?>
            </td>
            <td><?php echo $value['comment']?></td>
            <td><?php echo $value['created']?></td>
        </tr>
         <?php 
        }?>
        </table>

        </div>
        <div class="footer">
            <th bgcolor="#87ceeb">Y&I group.inc</th>
        </div> 
    </div>
</body>
</html>
