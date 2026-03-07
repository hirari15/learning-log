<?php
//配列 A と B についての情報が与えられるので、(A の 1 つの要素) × (B の 1 つの要素) の最大値を求めてください。


    [$n, $k] = explode(" ", trim(fgets(STDIN)));
    $a_array = explode(" ", trim(fgets(STDIN)));
    $b_array = explode(" ", trim(fgets(STDIN)));
    $max = $a_array[0] * $b_array[0];
    
    foreach ($a_array as $a) {
        foreach ($b_array as $b) {
            if ($a * $b > $max) {
                $max = $a * $b;
            }
        }
    }
    
    echo $max;
        
?>