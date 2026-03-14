<?php
//配列 A の要素数 N とその要素 A_i (1 ≦ i ≦ N) が与えられるので、A についてのかけ算表 B を出力してください。かけ算表は N * N の二次元配列の形式とし、B の i 行 j 列の要素 B_ij について、B_ij = Ai * Aj (1 ≦ i , j ≦ N) が成り立つものとします。

    $n = trim(fgets(STDIN));
    $a_array = explode(" ", trim(fgets(STDIN)));
    
    foreach ($a_array as $i) {
        $output_row = [];
        foreach ($a_array as $j){
            $output_row[] = $i * $j;
        }
        echo implode(" ", $output_row) . "\n";
    }
    
?>