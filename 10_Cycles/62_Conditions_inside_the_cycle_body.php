<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

// BEGIN (write your solution here)
function countChars($str, $char) {
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        $charInWord = strtolower($str[$i]);
        $char = strtolower($char);
        if ($charInWord == $char) {
            $count += 1;
        }
        $i += 1;
    }
    return $count;
}
// END
