<?php
//1から100までの数を繰り返す
for ($i = 1; $i <= 100; $i++) {
    //3と5両方の倍数の（15の倍数）なら
    if ($i % 15 === 0) {
        echo 'FizzBuzz';
    //3の倍数なら
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
    //5の倍数なら
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
    } else {
        echo $i;
    }
    echo '<br>';
}

?>
