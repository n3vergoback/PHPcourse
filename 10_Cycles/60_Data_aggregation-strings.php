<?php

namespace HexletBasics\Loops\AgregationString;

// BEGIN (write your solution here)
function joinNumbersFromRange($firstNum, $lastNum) {
    $res = "";
    while ($firstNum <= $lastNum) {
        $res = "{$res}{$firstNum}";
        $firstNum += 1;
    }

    return $res;
}
// END
