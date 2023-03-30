<?php

namespace HexletBasics\Loops\ReturnFromLoop;

// BEGIN (write your solution here)
function hasChar($str, $char) {
    $i = 0;
    $hasChar = false;
    while ($i < strlen($str)) {
        if ($str[$i] == $char) {
            $hasChar = true;
        }
        $i++;
    }
    return $hasChar;
}
// END
