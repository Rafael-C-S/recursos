<?php

    $array = [31, 41, 59, 26, 41, 58];
    
    $ordenacao = [];
    $aux = 0;
    
    for($i = 0; $i < count($array); $i++)
    {   
        for($j = $i; $j < count($array); $j++)
        {
            if($array[$i] > $array[$j])
            {
                $aux = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $aux;
            }
        }
    }
    print_r($array);
?>