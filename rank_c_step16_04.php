<?php
//１ 行目に整数 N が与えられます。
// 2 行目に N 個の整数 a_1, a_2, ..., a_N が与えられます。
// N 個の整数のうち、N 個の整数の平均以上の数をすべて、入力された順に改行区切りで出力してください。

    $n = trim(fgets(STDIN));
    $array = explode(" ", trim(fgets(STDIN)));
    
    $sum = array_sum($array);
    foreach ($array as $a){
        if($a >= $sum / $n){
            echo $a . "\n";
        }
    }
    
?>