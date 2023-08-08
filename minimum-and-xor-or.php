<?php
// Cyclic Shift

fscanf(STDIN, "%d\n", $t);

for($test=0; $test<$t; $test++) {
    fscanf(STDIN, "%d\n", $n);
    $a = fscanf(STDIN, str_repeat("%d ", $n). "\n");

    sort($a);

    $i = 0;
    $result = -1;

    while ($i < $n - 1) {
        $number = ($a[$i] & $a[$i+1]) ^ ($a[$i] | $a[$i+1]);

        if ($result == -1 || $number < $result) {
            $result = $number;
        }
        
        $i++;
    }

    echo "{$result}\n";
}
