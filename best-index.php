<?php

fscanf(STDIN, "%d\n", $n);           // Reading input from STDIN
$a = fscanf(STDIN, str_repeat("%d ", $n)."\n");          // Reading input from STDIN

$best = 0;

while(count($a) > 0) {
    $counter = 0;
    $sum = 0;
    $accumulator = 0;

    do {
        $counter++;
        if ($accumulator + $counter > count($a)) {
            break;
        }
        $accumulator += $counter;
    } while($accumulator < count($a));

    $sum = array_sum(array_slice($a, 0, $accumulator));
    $best = ($sum > $best) ? $sum : $best;

    array_shift($a);
}

echo "{$best}\n";
