<?php
require_once("getdata.php");
require_once("function.php");
// セッション開始
session_start();
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();
//$data = new getData();
//$booksdata = $data->getBooksData();
$pdo = db_connect();

try {
    // SQL文の準備
    $sql = "SELECT * FROM books";
    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    // idのバインド
    $stmt->execute();
} catch (PDOException $e) {
    // エラーメッセージの出力
    echo 'Error: ' . $e->getMessage();
    // 終了
    die();
}




?>


<!doctype html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>在庫一覧画面</title>
    </head>
    <body>
        <h2>在庫一覧画面</h2> 
        <input type="submit" value="新規登録" onclick="location.href='create_post.php'" style="color: white;background-color:#0066FF;">
        <input type= "button" value="ログアウト" onclick="location.href='logout.php'" style="color: white;background-color:#808080;"/>


        <form method="books" action="">
        <table border="1" width="500" height="250" cellspacing="1" cellpadding="1">
            <tr align="center">
            <td bgcolor="#d3d3d3">タイトル</td>
            <td bgcolor="#d3d3d3">発売日</td>
            <td bgcolor="#d3d3d3">在庫数</td>
            <td bgcolor="#d3d3d3"></td>
            </tr>

            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td><a style="color: white;background-color:#F00;" href="delete_post.php?id=<?php echo $row['id']; ?>">削除</a></td>
        </tr>
    <?php } ?>

        </table>
        </form>
    </body>
</html>
