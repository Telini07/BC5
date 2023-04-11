<?php

$ris = trim(fgets(STDIN)); 
$vog = array("a", "e", "i", "o", "u"); 
$linha = ""; 


for ($i = 0; $i < strlen($ris); $i++) 
{
    if (in_array($ris[$i], $vog)) 
    {
        $linha .= $ris[$i];
    }
}


if ($linha == strrev($linha))
{
    echo "S\n";
} else {
    echo "N\n";
}

?>