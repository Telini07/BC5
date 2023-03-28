<?php
// reformulação usando função

function check_language($languages) {
    $count = array_count_values($languages);
    $max = max($count);
    return ($max == 1 || $max == count($languages)) ? $languages[0] : "ingles";
}

$N = readline();
while ($N--) {
    $K = readline();
    $languages = array();
    while ($K--) {
        $languages[] = readline();
    }
    echo check_language($languages) . PHP_EOL;
}

?>