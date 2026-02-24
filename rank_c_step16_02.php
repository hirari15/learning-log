<?php
//1 行目に整数 N, M が与えられます。
//2 行目に M 個の整数 a_1, a_2, ..., a_M が与えられます。
//M 個の整数に N が何個あるか数え、出力してください。
//また、N は M 個の整数の中に 1 個以上含まれるものとします。

    [$n, ] = explode(" ",trim(fgets(STDIN)));
    $m_array = explode(" ",trim(fgets(STDIN)));
    $n_count = 0;
    
    foreach ($m_array as $m){
        if ($m == $n){
            $n_count++;
        }
    }
    echo $n_count;
?>
