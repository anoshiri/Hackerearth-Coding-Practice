<?php
// Cyclic Shift

fscanf(STDIN, "%d\n", $t);

for($test=0; $test<$t; $test++) {
    fscanf(STDIN, "%d %d\n", $n, $k);
    fscanf(STDIN, "%s\n", $a);


    $b = $a;
    $cycle = 0;
    $index = 0;
    $string = '';

    do {
        if (strcmp($a, $string) > 0) {
            $string = $a;
            $cycle = $index;
        }

        $index++;
        $a = substr($a, 1).substr($a, 0, 1);
    } while ($a != $b);

    // get subsequent cycles
    $subsequent_cycles = 0;
    if ($k > 1) {
        $subsequent_cycles = $index * ($k - 1);
    }

    // get total
    $total = $cycle + $subsequent_cycles;

    echo "{$total}\n";
}
