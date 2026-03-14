<?php
//整数 N が与えられるので、2 以上 N 以下の素数の個数を求めてください。

    $n = trim(fgets(STDIN));
    
    for ($i=2; $i<=$n; $i++){
        $is_prime = true;
        
        for ($j=2; $j<$i; $j++){
            if($i % $j == 0) {
                $is_prime = false;
                break;
            }
        }
        if ($is_prime) {
            $count++;
        }
    }
    echo $count;

?>