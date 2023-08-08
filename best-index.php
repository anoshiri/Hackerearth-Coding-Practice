<?php

fscanf(STDIN, "%d\n", $n);           // Reading input from STDIN
$a = fscanf(STDIN, str_repeat("%d ", $n)."\n");          // Reading input from STDIN

$accumulator = [];
for($index=0; $index < $n; $index++) {
    $retriever = $index;
    $accumulator[$index] = 0;
    $control = 1;

    while ($retriever+$control <= $n) {
        for ($i=0; $i<$control; $i++) {
            $accumulator[$index] += $a[$retriever+$i];
        }
    
        $retriever += $control;
        $control++;

    }
}

rsort($accumulator);

echo $accumulator[0]."\n";
