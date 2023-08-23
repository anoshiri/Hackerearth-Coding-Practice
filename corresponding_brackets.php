<?php

/**
 * Check validity of brackets
 * Brackets: (), {}, []
 * Last in - First out
 */
function solution($s) {
    $open = ['(', '{', '[' ];
    $close = [')', '}', ']' ];

    $openArray = [];
    $count = count($s);


    if ($count < 1 || !is_int(array_search($s[0], $open))) {
        return 'invalid';
    }

    for ($i=0; $i<$count; $i++) {
        if ( is_int(array_search($s[$i], $open)) ) { // open bracket
            $openArray[] = $s[$i];
        } elseif ( array_search($s[$i], $close) == array_search($openArray[count($openArray) - 1], $open) ) {
            array_pop($openArray);
        }
    }

    return count($openArray) == 0 ? 'valid' : 'invalid';
}


fscanf(STDIN, "%s\n", $s);

$s = str_split($s);
$out_ = solution($s);
echo $out_;
echo ""; 
