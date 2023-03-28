<?php

$N = intval(fgets(STDIN));
$word = array(); 

while ($N--) {
    $word = trim(fgets(STDIN));

    if (strlen($word) == 5) {
        $aux = 3;
    } 
    else if   (($word[0] == 'o' && $word[1] == 'n') || ($word[0] == 'o' && $word[2] == 'e') || ($word[1] == 'n' && $word[2] == 'e')) 
    {
        $aux = 1;
    } 
    else 
    {
        $aux = 2;
    }

    echo $aux . "\n";
}

?>
