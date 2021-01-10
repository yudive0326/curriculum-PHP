<?php

function getTriangleArea($vertical, $side, $height) {
    $area = $vertical * $side * $height;
    print "直方体の体積は".$area;
}

getTriangleArea(5,10,8);
echo '<br>';

?>
