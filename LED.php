<?php

$V = array(6, 2, 5, 5, 4, 5, 6, 3, 7, 6); 
$n = readline();


for ($i = 0; $i < $n; $i++) {
    $N = readline(); 
    $leds = 0;
    for ($x = 0; $x < strlen($N); $x++) {
        $leds += $V[(int) $N[$x]];
    }
    echo $leds ." leds\n"; 
}

?>  