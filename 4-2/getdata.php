<?php
require_once("db_connect.php");

class getData{

    public $pdo;
    public $data;

    //コンストラクタ
    function __construct()  {
        $this->pdo = db_connect();
    }
    
    /**
     * 記事情報の取得
     *
     * @param 
     * @return array $post_data 記事情報
     */
    public function getBooksData(){
        $getbooks_sql = "SELECT * FROM books ORDER BY id DESC";
        $books_data = $this->pdo->query($getbooks_sql);
        return $books_data;
    }
    
}
