<?php
//1 行目に整数 N が与えられます。
//N 番目までのフィボナッチ数を出力してください。
//フィボナッチ数は
//F_0 = 0
//F_1 = 1
//F_(n+2) = F_n + F_(n+1) (n は 0 以上)
//とし、F_0 を 1 番目とします。

    $n = trim(fgets(STDIN));
    $prev1 = 0;
    $prev2 = 1;
    $current = 0;
    
    for ($i=0; $i<$n; $i++){
        echo $prev1 . "\n";
        $current = $prev1 + $prev2;
        $prev1 = $prev2;
        $prev2 = $current; 
    }
    
?>