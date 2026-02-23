<?php
//1 行目に整数 N と整数 K が与えられます。
//2 行目に N 個の整数 a_i (1 ≤ i ≤ N) が半角スペース区切りで与えられます。
//K 番目の整数 a_K を出力してください。
    [$n, $k] = explode(" ", trim(fgets(STDIN)));
    $array = explode(" ", trim(fgets(STDIN)));
    
    echo $array[$k-1];
?>