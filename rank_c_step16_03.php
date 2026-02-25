<?php

//1 行目に整数 N, M, L が与えられます。
//2 行目に M 個の文字列 s_1, s_2, ..., s_M が半角スペース区切りで与えられます。
//N 番目の文字列 s_N の L 番目の文字を出力してください。

    [$n, $m, $l] = explode(" ",trim(fgets(STDIN)));
    $m_array = explode(" ",trim(fgets(STDIN)));
    
    $word = $m_array[$n-1];
    echo $word[$l-1];
?>