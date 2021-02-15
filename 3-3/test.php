<?php
    class Taiyaki {
        public $content;
    
        public function __construct($nakami) {
            $this->content = $nakami;
        } 
    
        public function whatIsContent() {
            echo '中身は'.$this->content.'だよ。';
        }
    }
    // あんこのたい焼き 
    $taiyaki_anko = new Taiyaki("あんこ"); 
    $taiyaki_anko->whatIsContent(); 
    // クリームのたい焼き
    $taiyaki_cream = new Taiyaki("クリーム");
    $taiyaki_cream->whatIsContent();
    ?>
</br>

<?
class Enemy {
    public $name;
    public $stamina;
    public $attack;
    public static $count = 0;

    public function __construct($name, $stamina = 100, $attack = 10) {
        $this->name = $name;
        $this->stamina = $stamina;
        $this->attack = $attack;
        Self::$count += 1;
    }

    public static function getEnemyCount() {
        echo Self::$count.'体の敵を作りました！';
    }
}
Enemy::getEnemyCount();
    $slime_A = new Enemy('スライム');
    $slime_B = new Enemy('スライム');
    $slime_C = new Enemy('スライム');
    $slime_D = new Enemy('スライム');
    Enemy::getEnemyCount();



?>