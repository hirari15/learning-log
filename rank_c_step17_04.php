<?php
//N 行 K 列の行列 A の i 行 j 列 の要素 A_ij を A_ji とした K 行 N 列の行列を元の配列 A の転置行列と言います。
//行列 A についての情報が与えられるので、A の転置行列を出力してください。
    [$n, $k] = explode(" ", trim(fgets(STDIN)));
    
    for ($i=0; $i<$n; $i++){
        $matrix[] = explode(" ", trim(fgets(STDIN)));
    }

    for ($j=0; $j<$k; $j++){
        $array = [];
        for ($i=0; $i<$n; $i++){
            $array[] = $matrix[$i][$j];
            
        }
        echo implode(" ", $array) . "\n";
    }
?>