<?php
// db_connect.phpの読み込み
require_once("db_connect.php");
// function.phpの読み込み
require_once("function.php");
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();
// 提出ボタンが押された場合
if (!empty($_POST)) {
    // titleとcontentの入力チェック
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        echo '発売日が未入力です。';
    }

    if (!empty($_POST['title']) && !empty($_POST['date'])) {
        // 入力したtitleとcontentを格納
        $title = $_POST["title"];
        $date = $_POST["date"];
        $stock = $_POST["stock"];



        // PDOのインスタンスを取得
        $pdo = db_connect();
        
        try {
            // SQL文の準備
        $sql = "INSERT INTO books (title, date,stock) VALUES (:title, :date,:stock)";
            
            // プリペアドステートメントの準備
        $stmt = $pdo->prepare($sql);
            
            // タイトルをバインド
            $stmt->bindParam(':title', $title);

            // 本文をバインド
            $stmt->bindParam(':date', $date);

            $stmt->bindParam(':stock', $stock);


            // 実行
        $stmt->execute();

            // main.phpにリダイレクト
            header("Location: main.php");
                exit;
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage();
            
            // 終了
            die();
            
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>本登録画面</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>本 登録画面</h1>
    <form method="POST" action="">
    <input type="text" name="title" placeholder="タイトル">
    <br>
    <input type="text" name="date" placeholder="発売日">
    <br>
    <br>
    在庫数<br>
    <select name="stock">
        <option value="">選択してください</option>
      <?php for ($i=1;$i<=50;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
    </select>
    <br>
        <input type="submit" value="登録" id="post" name="number" style="color: white;background-color:#0066FF;">
    </form>
</body>
</html>


