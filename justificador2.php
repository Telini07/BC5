<?php
while (true) {
    $N = intval(fgets(STDIN));
    if ($N === 0) break;

    $text = array();

    for ($i = 1; $i <= $N; $i++) {
        $linha = rtrim(fgets(STDIN), "\r\n");
        $text[] = $linha;
    }

    $comp_max = 0;

    foreach ($text as $linha) {
        $comp = strlen($linha);
        if ($comp > $comp_max) {
            $comp_max = $comp;
        }
    }

    foreach ($text as $linha) {
        $padding = $comp_max - strlen($linha);
        echo str_repeat(" ", $padding) . $linha . "\n";
    }

    echo "\n";
}
?>