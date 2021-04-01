<?php
require_once("function.php");
// セッション開始
session_start();
// セッションにuser_nameの値がなければlogin.phpにリダイレクト
// if (empty($_SESSION["user_name"])) {
//     header("Location: login.php");
//     exit;
 // ログインしていなければ、login.phpにリダイレクト
    check_user_logged_in();
// }
?>



<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
</head>
<body>
    <h1>メインページ</h1>
    <p>ようこそ<?php echo $_SESSION["user_name"]; ?>さん</p>
    <a href="logout.php">ログアウト</a>
    <br />
    <a href="create_post.php">記事投稿！</a><br />

</body>
</html>

<?php
require_once("getdata.php");
$data = new getData();
$postdata  = $data->getPostData();
?>


<table>
    <tr>
    
        <td>記事ID<?php echo $value['id']?></td>
        <td>タイトル<?php echo $value['title']?></td>
        <td>本文<?php echo $value['content']?></td>
        <td>投稿日<?php echo $value['time']?></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <?php 
        foreach ($postdata as $value) {?>
            <tr>
                <td><?php echo $value['id']?></td>
                <td><?php echo $value['title']?></td>
                <td><?php echo $value['content']?></td>
                <td><?php echo $value['time']?></td>
                <td><a href="detail_post.php?id=<?php echo $value['id']; ?>">詳細</a></td>
                <td><a href="edit_post.php?id=<?php echo $value['id']; ?>">編集</a></td>
                <td><a href="delete_post.php?id=<?php echo $value['id']; ?>">削除</a></td>
            </tr>
         <?php 
        }?>    
        

    
</tabl