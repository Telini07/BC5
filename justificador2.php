<?php

    while(true) {
        $N = intval(fgets(STDIN)); 
        if ($N === 0) break; 
        
        $text = array(); 
       
        for ($i = 1; $i <= $N; $i++) 
        {
            $linha = fgets(STDIN);
            rtrim($linha); 
            $text[] = $linha;
        }
        
        $max_length = 0; 
        
        foreach ($text as $linha) {
            $length = strlen($linha);
            if ($length > $max_length) 
            {    
                $max_length = $length;
            }
        }
        
        foreach ($text as $linha) 
        {
            $padding = $max_length - strlen($linha);  
            echo str_repeat(" ", $padding) . $linha . "\n"; 
        }
        
        echo "\n"; 
    }

?>