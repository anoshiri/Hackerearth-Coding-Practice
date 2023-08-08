<?php

function Solve ($k, $arr)
{
    # Write code here
    $sum = ($arr[0] > 0) ? $arr[0] : 0;
    for ($i=1; $i<count($arr); $i++) {
        $sum += $arr[$i];
    }

    return $sum;
}


$n = 3;
$k = 2;
$arr = '3 -1 -2';
$arr = explode(" ", $arr);

$out_ = Solve($k, $arr);
echo $out_;
