<?php

fscanf(STDIN, "%d\n", $t);

for ($index=0; $index < $t; $index++) {
    fscanf(STDIN, "%d %d\n", $n, $k);

    $array = fscanf(STDIN, str_repeat("%d ", $n). "\n");
    
    //$i = ($n>$k) ? $n - $k : $k - $n + 1;
    $i = $n - ($k % $n);

    for ($x = $i; $x < $n; $x++) {
        echo $array[$x]." ";
    }
    
    for ($x = 0; $x < $i; $x++) {
        echo $array[$x]." ";
    }

    echo "\n";
}

