<?php
while ($sentencia = fgets(STDIN)) {
    $sentencia = rtrim($sentencia);
  
    $maiusculo = true;
    $danca = '';
    for ($i = 0; $i < strlen($sentencia); $i++)
    {
      $char = $sentencia[$i];
      if ($char == ' ') 
      { 
        $danca .= ' ';
        continue;
      }
      if ($maiusculo) 
      {
        $danca .= strtoupper($char);
      } else {
        $danca .= strtolower($char);
      }
      $maiusculo = !$maiusculo; //a variavel é invertida, alternando entre maiusculo e minusculo
    }
  
    echo $danca . "\n";
  }
?>