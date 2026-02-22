<?php
//N 個の整数 a_1, a_2, ..., a_N が与えられます。
//a_i に i を足したとき、a_1 , ... , a_N の最大値を出力してください。

    $n = trim(fgets(STDIN));
    $n_array = explode(" ", trim(fgets(STDIN)));
    $max = 0;
    
    foreach ($n_array as $i => $a_i){
        $max = max($max, $a_i+($i+1));
    }
    echo $max;
?>