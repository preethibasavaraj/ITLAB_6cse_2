<?php
$x = 5;
$y =10;

function mytest() {
global $x,$y;
$y = $x + $y;
}

$z=mytest();
printf("%d",$y);
?>

