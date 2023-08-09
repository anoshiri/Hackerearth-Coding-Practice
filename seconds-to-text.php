<?php


function solution ($seconds)
{
    // You must complete the logic for the function that is provided
    // before compiling or submitting to avoid an error.
    // Write your code here
    
    $map = [
        31536000 => 'year',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    ];

    $string ='';
    foreach ($map as $time => $text) {
        if ($seconds >= $time) {
            $number = intdiv($seconds, $time);
            $seconds = $seconds % $time;

            if ($string != '') {
                $string .= ', ';
            }

            $string .= "{$number} ". ngettext($text, $text.'s', $number);
        }
    }

    return substr_replace($string, ' and', strripos($string, ','), 1);
}


fscanf(STDIN, "%d\n", $n);

$out_ = solution($n);
echo $out_;
echo "";
