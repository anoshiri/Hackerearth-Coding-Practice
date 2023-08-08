<?php

$numbers = [
    0 => 6, 1 => 2, 2 => 5, 3 => 5, 4 => 4, 5 => 5, 6 => 6, 7 => 3, 8 => 7, 9 => 6
];

fscanf(STDIN, "%d\n", $t);

for ($y=0; $y < $t; $y++) {
    fscanf(STDIN, "%d\n", $n);

    $sum = 0;
    
    for ($index=0; $index < strlen($n); $index++) {
        $sum += $numbers[(int) substr($n, $index, 1)];
    }

    $series = '';
    if ($sum % 2 <> 0) {
        $series = "7";
        $sum -= $numbers[7];
    }

    $series .= str_repeat("1", (int) $sum/$numbers[1]);
    echo "{$series}\n";
}


