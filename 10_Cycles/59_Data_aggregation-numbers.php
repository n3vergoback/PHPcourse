<?php

namespace HexletBasics\Loops\AgregationNumber;

// BEGIN (write your solution here)
function multiplyNumbersFromRange($fistNum, $lastNum) {
    $res = 1;
    while ($fistNum <= $lastNum) {
        $res = $res * $fistNum;
        $fistNum += 1;
    }

    return $res;
}
// END
