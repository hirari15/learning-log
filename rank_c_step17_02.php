<?php
//整数 N , K と N 行 K 列 の二次元配列 A が与えられます。 
//A の要素のうち、1 要素だけ 1 になっている要素があるので、その要素の行と列を出力してください。

    [$n, $k] = explode(" ",trim(fgets(STDIN)));
    
    for ($i=0; $i<$n; $i++){
        $row = explode(" ", trim(fgets(STDIN)));
        foreach ($row as $j => $val){
            if ($val == 1){
                echo $i+1 . " " . $j+1;
                break 2;
            }
        }
        
    }
?>