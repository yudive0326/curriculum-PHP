<?php

// db_connect.phpの読み込みFILL_IN
require_once("db_connect.php");

// POSTで送られていれば処理実行
if (isset($_POST["signUp"])) {

    // nameとpassword両方送られてきたら処理実行
    if (!empty($_POST['name']) && !empty($_POST['password'])) {
        $name = $_POST["name"];
        $password = $_POST["password"];
        // PDOのインスタンスを取得FILL_IN
        $pdo = db_connect();
        
        try {
        // SQL文の準備 FILL_IN 
        $sql = "INSERT INTO user (name, password) VALUES (:name, :password)";
        // パスワードをハッシュ化
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        // プリペアドステートメントの作成 FILL_IN 
        $stmt = $pdo->prepare($sql);
        // 値をセット　FILL_IN
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':password', $password_hash);
        // 実行 FILL_IN
        $stmt->execute();
        //　登録完了メッセージ出力
        echo '登録が完了しました。';
        } catch (PDOException $e) {
            // エラーメッセージの出力 FILL_IN 
            echo 'Error: ' . $e->getMessage();
            // 終了 FILL_IN
            die();
        }
    }
}
?>






<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>ユーザー登録画面</h1>
    <form method="POST" action="">
      <input type="text" name="name" placeholder="ユーザー名">
        <br>
        <input type="text" name="password" placeholder="パスワード">
        <br>
        <input type="submit" value="新規登録" id="signUp" name="signUp" style="color: white;background-color:#0066FF;">
    </form>
</body>
</html>


