<?php
//正の整数 N が与えられるので、1 〜 N の整数を 1 から順に半角スペース区切りで 1 行で出力してください。

    $n = trim(fgets(STDIN));
    
    echo implode(" ", range(1,$n)) . "\n"
?>