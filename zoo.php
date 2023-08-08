<?php

fscanf(STDIN, "%u %u %u\n", $l, $r, $k);           // Reading input from STDIN

$factors = [];
for ($i=$l; $i<=$r; $i++)
{
    if ($i % $k == 0) {
        $factors[] = $i;
    }
}
echo count($factors). "\n";
