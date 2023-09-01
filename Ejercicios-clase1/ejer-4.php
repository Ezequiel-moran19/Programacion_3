<?php 

$x = 0;
$y = 1;

do {

    $x += $y; 
    $y++;
    echo $y ."-". $x."<br>";

} while ($x < 1000);

?>