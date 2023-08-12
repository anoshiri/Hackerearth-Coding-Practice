<?php

fscanf(STDIN, "%d\n", $n);

$songs = fscanf(STDIN, str_repeat("%d ", $n)."\n");

$songs = array_count_values($songs);
asort($songs);

$number = end($songs);

$total = 0;
foreach ($songs as $key => $value) {
    if ($value == $number) {
        $total++;
    }
}

echo $total;

