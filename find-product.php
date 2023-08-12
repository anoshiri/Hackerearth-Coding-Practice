<?php

/*
Problem
You have been given an array A of size N consisting of positive integers. 
You need to find and print the product of all the number in this array Modulo .

Input Format:
The first line contains a single integer N denoting the size of the array. 
The next line contains N space separated integers denoting the elements of the array

Output Format:
Print a single integer denoting the product of all the elements of the array Modulo 
*/

fscanf(STDIN, "%d\n", $n);

$numbers=fscanf(STDIN, "%[^\n]");
$numbers = explode(" ",$numbers[0]);

$total = 1;
$divisor = pow(10, 9) + 7;

foreach($numbers as $key => $value) {
    $total *= $value;
    if ($total >= $divisor) {
        $total %= $divisor;
    }
}

echo $total;

