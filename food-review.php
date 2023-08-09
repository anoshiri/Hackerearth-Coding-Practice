<?php


function solution ($n, $ratings)
{
    // You must complete the logic for the function that is provided
    // before compiling or submitting to avoid an error.
    // Write your code here
    
    $counts = [];
    $sums = [];

    for ($i=0; $i< $n; $i++) {
        $counts[$array[0]] += 1;
        $sums[$array[0]] += $array[1];
    }
}


$n = readline();
$ratings = array();
for($i_ratings=0; $i_ratings < $n; $i_ratings++)
{
	array_push($ratings, explode(" ", readline()));
}

$out_ = solution($n, $ratings);
echo $out_;
echo "";
