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


<?php 
    class Enemy {
        public $name;
        public $stamina;
        public $attack;
            
        public function __construct($name, $stamina = 100, $attack = 10) {
            $this->name = $name;
            $this->stamina = $stamina;
            $this->attack = $attack;
        }
    
        public function whatIsContent() {
            echo $this->content.'があらわれた！';
        } 
        public function powerUp() {
            $this->attack += 10;
            echo '攻撃力が'.$this->attack.'になった。</br>';
        }
    }
        // Enemyクラスからスライムを作る
        $slime = new Enemy('スライム');
        echo $slime->stamina;
        echo $slime->attack;
        
        echo '</br>';
        
        $kuribo = new Enemy('クリボー', 200, 10);
        echo $kuribo->stamina;
        echo $kuribo->attack;
        echo '</br>';

        $slime = new Enemy('スライム');
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        /* クラスの継承*/
    class Boss extends Enemy {
        public function specialAttack() {
            echo 'すごい強い一撃！';
        }
    }
        $boss = new Boss('竜王');
        $boss->whatIsContent();
        $boss->specialAttack();

        echo '</br>';
        
        /*メソッドのオーバーライド */
    class Boss extends Enemy {
        public function whatIsContent() {
            echo 'ボスの'.$this->name.'があらわれた！';
        }
        
        public function specialAttack() {
            echo 'すごい強い一撃！';
        }
    }
        $slime = new Enemy('スライム');
        $boss = new Boss('竜王');
        $slime->whatIsContent();
        $boss->whatIsContent();
?>
</br>


<!--  static キーワード の問題 -->
<?php
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
    

