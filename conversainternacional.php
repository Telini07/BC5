<?php
// reformulação usando função

function check_language($languages) {
    if (empty($languages)) {
        return "ingles";
    }
    $count = array_count_values($languages);
    $max = max($count);
    return ($max == 1 || $max == count($languages)) ? $languages[0] : "ingles";
}

$N = readline();
if (is_numeric($N) && is_int((int)$N)) {
    while ($N--) {
        $K = readline();
        $languages = array();
        while ($K--) {
            $languages[] = readline();
        }
        echo check_language($languages) . "\n";
    }
} else {
    echo "O valor de N não é um número inteiro válido." . "\n";
}
?>