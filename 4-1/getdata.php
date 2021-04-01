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
    public function getPostData(){
        $getposts_sql = "SELECT * FROM posts2 ORDER BY id DESC";
        $post_data = $this->pdo->query($getposts_sql);
        return $post_data;
    }
    
}
