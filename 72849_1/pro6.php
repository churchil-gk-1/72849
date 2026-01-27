<?php
function inverd($a,$b) {
    $c=$a;
    $a=$b;
    $b=$c;
}
$x= 5;
$y= 10;
inverd($x,$y);
echo $x;
echo "<br>";
echo $y;
?>