<?php
// nota: em casos de time limit trocar readline por fgets
$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    $lin = trim(fgets(STDIN));
    $lin_c = codificar_string($lin);
    $lin_d = decodificar_string($lin_c);
    echo $lin_d . "\n";
}

function codificar_string($str) {
    $nova_str = "";
    $len = strlen($str);

    for ($i = 0; $i < $len; $i++) {
        $char = $str[$i];
        $char_code = ord($char);

        if ($char_code >= 65 && $char_code <= 90) {
            $char_code = (($char_code - 65 + 3) % 26) + 65;
        } else if ($char_code >= 97 && $char_code <= 122) {
            $char_code = (($char_code - 97 + 3) % 26) + 97;
        }

        $nova_str .= chr($char_code);
    }

    return strrev($nova_str);
}

function decodificar_string($str) {
    $nova_str = "";
    $meio = intval(strlen($str) / 2);
    $len = strlen($str);

    for ($i = 0; $i < $len; $i++) {
        $char = $str[$i];
        $char_code = ord($char);

        if ($i >= $meio) {
            $char_code -= 1;
        }

        $nova_str .= chr($char_code);
    }

    return $nova_str;
}