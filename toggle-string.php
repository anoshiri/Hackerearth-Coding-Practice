<?php
$word = readline('Enter word: ');

for ($i=0; $i<strlen($word); $i++) {
    $ascii = ord(substr($word,$i,1));

    // small letter change to upper letter
    if ($ascii > 90) {
        $word = substr_replace($word, strtoupper(substr($word, $i, 1)), $i, 1);
    } else {
        $word = substr_replace($word, strtolower(substr($word, $i, 1)), $i, 1);
    }
}

echo $word;

